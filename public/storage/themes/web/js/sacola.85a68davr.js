$(function () {

    $("#cart__btn__to__login").click(function (e) {
        e.preventDefault();
        let obj = $(this);
        let url = obj.attr("href");
        obj.html(
            "<img width='24px' src='../storage/themes/web/img/loading.svg'>"
        ).addClass('disabled');
        setTimeout(function () {
            obj.html(
                "Continuar"
            ).removeClass('disabled');
            window.location.href = url;
        }, 500);
    })

    $("#frete__form__consult").on("submit", function (e) {
        e.preventDefault();
        let form = $(this);
        let cep = $(".sc-fvhGYg.gHYhEm").val();
        let btn = $(".sc-eggNIi.sc-cTkwdZ.JiLrb.cxSJdc.sc-iOUYmh.gqprBv.sc-iOUYmh.gqprBv");
        let div_frete_result = $(".sc-bbEFxx.jYJeqn");
        if (cep.length != 9) {
            return false;
        }
        $.ajax({
            url: form.attr("action"),
            method: "GET",
            dataType: "JSON",
            timeOut: 8,
            data: {
                cep: cep
            }, beforeSend: function () {
                btn.attr('disabled', true);
                btn.html('<img style="fill: red;" width="22px" src="/storage/themes/web/img/loading_blue.svg">');
                div_frete_result.hide();
                $("#frete__return__dia").html("em 4 dias úteis");
                $("#frete__return__local").html("");
            }, success: function (response) {
                if (response.entrega) {
                    $("#frete__return__dia").html(response.entrega);
                }
                if (response.local) {
                    $("#frete__return__local").html("(" + response.localidade + ") -");
                }

                if(response.frete){
                    $(".price__frete__consult").html(response.frete);
                }
            }, complete: function () {
                div_frete_result.show();
                btn.html('ok');
                btn.attr('disabled', false);
            }
        })
    })
})