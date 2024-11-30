$(function () {

    function puxar_cep() {
        let cep = $("#address__cep").val();
        let loading_btn = $("#icon__cep__search");
        let old_html = loading_btn.html();
        if (cep.length == 9) {
            $.ajax({
                url: "https://viacep.com.br/ws/" + cep + "/json/",
                method: "GET",
                beforeSend: function () {
                    loading_btn.html("<img width='20' src='storage/themes/web/img/loading_blue.svg'>");
                    $("#address__bairro").val("");
                    $("#address__bairro").attr('readonly', false);
                    $("#address__rua").val("");
                    $("#address__rua").attr('readonly', false);
                    $("#address__cidade").val("");
                    $("#address__cidade").attr('readonly', false);
                    $("#address__estado").val("");
                    $("#address__estado").attr('readonly', false);
                    $('[data-div="address__bairro"] .sc-jUEnpm').removeClass('bWfTzJ');
                    $('[data-div="address__rua"] .sc-jUEnpm').removeClass('bWfTzJ');
                    $('[data-div="address__cidade"] .sc-jUEnpm').removeClass('bWfTzJ');
                    $('[data-div="address__estado"] .sc-jUEnpm').removeClass('bWfTzJ');
                }, success: function (json) {
                    if (json.bairro) {
                        $("#address__bairro").val(json.bairro);
                        $("#address__bairro").attr('readonly', true);
                        $('[data-div="address__bairro"] .sc-jUEnpm').addClass('bWfTzJ');
                    } else {
                        $("#address__bairro").val("");
                        $("#address__bairro").attr('readonly', false);
                        $('[data-div="address__bairro"] .sc-jUEnpm').removeClass('bWfTzJ');
                    }
                    if (json.logradouro) {
                        $("#address__rua").val(json.logradouro);
                        $("#address__rua").attr('readonly', true);
                        $('[data-div="address__rua"] .sc-jUEnpm').addClass('bWfTzJ');
                    } else {
                        $("#address__rua").val("");
                        $("#address__rua").attr('readonly', false);
                        $('[data-div="address__rua"] .sc-jUEnpm').removeClass('bWfTzJ');
                    }
                    if (json.localidade) {
                        $("#address__cidade").val(json.localidade);
                        $("#address__cidade").attr('readonly', true);
                        $('[data-div="address__cidade"] .sc-jUEnpm').addClass('bWfTzJ');
                    } else {
                        $("#address__cidade").val("");
                        $("#address__cidade").attr('readonly', false);
                        $('[data-div="address__cidade"] .sc-jUEnpm').removeClass('bWfTzJ');
                    }
                    if (json.uf) {
                        $("#address__estado").val(json.uf);
                        $("#address__estado").attr('readonly', true);
                        $('[data-div="address__estado"] .sc-jUEnpm').addClass('bWfTzJ');
                    } else {
                        $("#address__estado").val("");
                        $("#address__estado").attr('readonly', false);
                        $('[data-div="address__estado"] .sc-jUEnpm').removeClass('bWfTzJ');
                    }
                }, complete: function () {
                    loading_btn.html(old_html);
                    $(".form__ocult__itens__address").show();
                }
            })
        }
    }

    $("#address__cep").on("keyup", debounce(e => {
        puxar_cep();
    }, 300));

    $("#icon__cep__search").on("click", "#btn__svg__cep__search", function () {
        puxar_cep();
    })

    function validar_address_form() {
        if ($('.form__ocult__itens__address').is(":hidden")) {
            $(".form__ocult__itens__address").show();
        }
        let cep = $("#address__cep").val();
        let estado = $("#address__estado").val();
        let cidade = $("#address__cidade").val();
        let bairro = $("#address__bairro").val();
        let rua = $("#address__rua").val();
        let numero = $("#address__numero").val();
        let referencia = $("#address__referencia").val();
        let destinatario = $("#address__destinatario").val();
        let cpf = $("#address__cpf").val();
        let email = $("#address__add__email").val();
        let telefone = $("#address__telefone").val();
        let formValidation = true;

        if (telefone.length < 14) {
            $('[data-div="address__add__telefone"]').addClass('address_error');
            formValidation = false;
        } else {
            $('[data-div="address__add__telefone"]').removeClass('address_error');
        }

        if (email != undefined) {
            if (!filter_var_email(email)) {
                $('[data-div="address__add__email"]').addClass('address_error');
                formValidation = false;
            } else {
                $('[data-div="address__add__email"]').removeClass('address_error');
            }
        }

        if (!validaCPF(cpf)) {
            $('[data-div="address__cpf"]').addClass('address_error');
            formValidation = false;
        } else {
            $('[data-div="address__cpf"]').removeClass('address_error');
        }

        if (destinatario.length < 4 || !destinatario.includes(" ")) {
            $('[data-div="address__destinatario"]').addClass('address_error');
            formValidation = false;
        } else {
            $('[data-div="address__destinatario"]').removeClass('address_error');
        }

        if (referencia.length < 1) {
            $('[data-div="address__referencia"]').addClass('address_error');
            formValidation = false;
        } else {
            $('[data-div="address__referencia"]').removeClass('address_error');
        }

        if (numero.length < 1) {
            $('[data-div="address__numero"]').addClass('address_error');
            formValidation = false;
        } else {
            $('[data-div="address__numero"]').removeClass('address_error');
        }

        if (rua.length < 1) {
            $('[data-div="address__rua"]').addClass('address_error');
            formValidation = false;
        } else {
            $('[data-div="address__rua"]').removeClass('address_error');
        }

        if (bairro.length < 1) {
            $('[data-div="address__bairro"]').addClass('address_error');
            formValidation = false;
        } else {
            $('[data-div="address__bairro"]').removeClass('address_error');
        }

        if (cidade.length < 1) {
            $('[data-div="address__cidade"]').addClass('address_error');
            formValidation = false;
        } else {
            $('[data-div="address__cidade"]').removeClass('address_error');
        }

        if (estado.length < 1) {
            $('[data-div="address__estado"]').addClass('address_error');
            formValidation = false;
        } else {
            $('[data-div="address__estado"]').removeClass('address_error');
        }

        if (cep.length != 9) {
            $('[data-div="address__cep"]').addClass('address_error');
            formValidation = false;
        } else {
            $('[data-div="address__cep"]').removeClass('address_error');
        }
        return formValidation;
    }

    $("#address__form").on("submit", function () {
        let valid = validar_address_form();
        $('input').keyup(function () {
            validar_address_form();
        })
        if (!valid) {
            return false;
        }
    })

})