$(function () {

    $("#svgs__eye__inputs").on("click", "#eye_off", function () {
        $("#cadastro__senha").attr("type", "text");
        $("#svgs__eye__inputs #eye_off").hide();
        $("#svgs__eye__inputs #eye_show").show();
    })

    $("#svgs__eye__inputs").on("click", "#eye_show", function () {
        $("#cadastro__senha").attr("type", "password");
        $("#svgs__eye__inputs #eye_off").show();
        $("#svgs__eye__inputs #eye_show").hide();
    })

    $(".dicas__btn__seguranca").click(function () {
        $("#dicas__password__segura").toggle();
    })

    $("#cadastro__senha").keyup(function () {
        let senha = $(this).val();
        let score = 0;
        if (senha.length >= 6) {
            score = (score + 25);
            if (senha.search(/[0-9]/g) >= 0) {
                score = (score + 20);
            }
            if (senha.search(/[A-Z]/g) >= 0) {
                score = (score + 20);
            }
            if (senha.search(/[',",@,#,\$,%,\*,\(,\),_,-,\+]/g) >= 0) {
                score = (score + 20);
            }
            if (senha.length >= 12) {
                score = (score + 15);
            }
        }
        if (score < 25) {
            $(".sc-iIUSfW.eTfsmR").html("fraca");
        }
        if (score >= 25) {
            $(".sc-iIUSfW.eTfsmR").html("fraca");
            $("#progress__bar__password").css("background", "#e60014");
        }
        if (score >= 50) {
            $(".sc-iIUSfW.eTfsmR").html("média");
            $("#progress__bar__password").css("background", "#d5a815");
        }
        if (score >= 75) {
            $(".sc-iIUSfW.eTfsmR").html("ótima");
            $("#progress__bar__password").css("background", "#2ecc71");
        }
        $("#progress__bar__password").css("width", score + "%");
    })

    function validar_cadastro_form() {
        let nome = $("#cadastro__nome").val();
        let nascimento = $("#cadastro__nascimento").val();
        let cpf = $("#cadastro__cpf").val();
        let telefone = $("#cadastro__telefone").val();
        let email = $("#cadastro__email").val();
        let senha = $("#cadastro__senha").val();
        let retorno = true;

        if (senha.length < 6 || senha.length > 20) {
            $('[data-address_div="senha"]').addClass('cadastro__form__error');
            retorno = false;
        } else {
            $('[data-address_div="senha"]').removeClass('cadastro__form__error');
        }

        if (!filter_var_email(email)) {
            $('[data-address_div="email"]').addClass('cadastro__form__error');
            retorno = false;
        } else {
            $('[data-address_div="email"]').removeClass('cadastro__form__error');
        }

        if (telefone.length < 14) {
            $('[data-address_div="telefone"]').addClass('cadastro__form__error');
            retorno = false;
        } else {
            $('[data-address_div="telefone"]').removeClass('cadastro__form__error');
        }

        if (!validaCPF(cpf)) {
            $('[data-address_div="cpf"]').addClass('cadastro__form__error');
            retorno = false;
        } else {
            $('[data-address_div="cpf"]').removeClass('cadastro__form__error');
        }

        if (nascimento.length < 10) {
            $('[data-address_div="nascimento"]').addClass('cadastro__form__error');
            retorno = false;
        } else {
            $('[data-address_div="nascimento"]').removeClass('cadastro__form__error');
        }

        if (!nome.includes(" ") || nome.length < 5) {
            $('[data-address_div="nome"]').addClass('cadastro__form__error');
            retorno = false;
        } else {
            $('[data-address_div="nome"]').removeClass('cadastro__form__error');
        }
        return retorno;
    }

    $("#cadastro__form").on("submit", function (e) {
        let validar = validar_cadastro_form();
        $('input').keyup(function () {
            validar_cadastro_form();
        })
        if (!validar) {
            return false;
        }
    })

})