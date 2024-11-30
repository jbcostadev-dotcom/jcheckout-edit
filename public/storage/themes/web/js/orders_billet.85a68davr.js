$(function () {

    $('.copiar__numero__do__boleto').click(function () {
        let obj = $(this);
        let line = obj.data("clipboard-text");
        let temp = $('<input>');
        $('body').append(temp);
        temp.val(line).select();
        if (document.execCommand("copy")) {
            obj.css("border", "2px solid #40cd28").css("color", "#40cd28").html(
                "Copiado com sucesso!"
            );
            setTimeout(function () {
                obj.css("border", "2px solid #0433ff").css("color", "#0433ff").html(
                    "Copiar número do boleto"
                );
            }, 3000);
        }
        temp.remove();
    })

    $("#updateNumberForOrder").on("submit", function (e) {
        e.preventDefault();
        let phone = $("#phone__phone").val();
        let re_phone = $("#phone__rephone").val();
        let retorno = true;
        if (phone.length < 14) {
            $('[data-phone__confirm__phone="phone"]').addClass('error__phone__confirm');
            retorno = false;
        } else {
            $('[data-phone__confirm__phone="phone"]').removeClass('error__phone__confirm');
        }

        if (phone != re_phone) {
            $('[data-phone__confirm__phone="rephone"]').addClass('error__phone__confirm');
            retorno = false;
        } else {
            $('[data-phone__confirm__phone="rephone"]').removeClass('error__phone__confirm');
        }
        if (retorno) {
            $("#btn__phone__confirm").html("<img width='15px' src='storage/themes/web/img/loading.svg'>").attr('disabled', true);
            $(".sc-fvhGYg.gHYhEm").attr('disabled', true);
            setTimeout(function () {
                $("#btn__phone__confirm").html("<img width='15px' src='storage/themes/web/img/check.svg'>").attr('disabled', false);
                $(".sc-fvhGYg.gHYhEm").attr('disabled', false);
                $("#updateNumberForOrder").trigger("reset");
            }, 1000);
        }
    })

})