$(function () {

    $(".entrar-inputAddon").on("click", "#eye__off", function () {
        $("#password-input").attr("type", "text");
        $(".entrar-inputAddon #eye__off").hide();
        $(".entrar-inputAddon #eye__show").show();
    })

    $(".entrar-inputAddon").on("click", "#eye__show", function () {
        $("#password-input").attr("type", "password");
        $(".entrar-inputAddon #eye__off").show();
        $(".entrar-inputAddon #eye__show").hide();
    })

    $("#login_submarino").on("submit", function (e) {
        var foi = 0;
        e.preventDefault();
        let form = $(this);
        let dados = form.serialize();
        $.ajax({
            url: form.attr("action"),
            method: "GET",
            dataType: "JSON",
            timeOut: 6,
            data: dados,
            beforeSend: function () {
                $("#error__login__result").html('');
                $('.btn.btn-primary.submit-button.entrar-button').attr('disabled', true).html("<img src='/svg/loading.svg' width='20px'>");
            }, success: function (response) {
                console.log(response)
                if (response.error) {
                    $("#error__login__result").html(response.error);
                    return false;
                }
                if (response.next) {
                    window.location.href = "/checkout/payment?h="+document.getElementById("hash").value;
                    return false;
                }
                if (response.enderecologin) {
                    window.location.href = "/checkout/enderecologin?sku="+document.getElementById("skubolado").value
                                            +"&email="+document.getElementById("email-input").value+"&h="+document.getElementById("hash").value;
                    return false;
                }
                if (!response.error && !response.next) {
                    let url = $('[name="checkout_url"]').attr('content');
                    return false;
                }
            }, error: function () {
                let url = $('[name="checkout_url"]').attr('content');
                //window.location.href = url + "address";
            }, complete: function () {
                $('.btn.btn-primary.submit-button.entrar-button').attr('disabled', false).html(
                    "Continuar"
                );
            }
        })
    })
})