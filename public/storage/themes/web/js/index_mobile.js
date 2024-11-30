$(function () {

    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".next__carrossel_osd",
            prevEl: ".prev__carrossel_osd",
        },
        loop: true
    });

    var swipersCarrosel = new Swiper(".mySwiperCarrossel", {
        navigation: {
            nextEl: ".next__carrossel_osd",
            prevEl: ".prev__carrossel_osd",
        },
        pagination: {
            el: "#fgrkvf84kf",
            type: "fraction"
        },
        loop: true
    });

    $(".open__carrossel__modal").click(function () {
        $("#carrossel_modal").show();
    })

    $("#modal__carrossel__close").click(function () {
        $("#carrossel_modal").hide();
    })

    $("#carrossel_modal").click(function (e) {
        let target = e.target.id;
        if (target == carrossel_modal_content || target == "carrossel_modal_contents_pics") {
            $("#carrossel_modal").hide();
        }
    })

    $(".extras__btn__select").click(function () {
        $(".extras__btn__select").removeClass('active');
        let obj = $(this);
        obj.addClass('active');
        let valor = obj.html().trim();
        $("#extras__values__selected__in").html(valor);
        $("#product__name__span__extra").html(' - ' + valor);
        let product_name = $("#product__name__span").text().trim();
        $.ajax({
            url: "/api/saveextra",
            method: "POST",
            dataType: "JSON",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                valor: valor
            }
        });
    })

    let primeito_extra_btn = $(".extras__btn__select:first-child");
    setTimeout(function () {
        primeito_extra_btn.click();
    });

    $('[data-modal]').click(function (e) {
        e.preventDefault();
        let obj = $(this);
        let modal = obj.data("modal");
        $('body').addClass('body_hidden_overflow');
        $('.modal').hide();
        $("#" + modal).show();
    })

    $(".modal_close").click(function () {
        $('body').removeClass('body_hidden_overflow');
        $(".modal").hide();
    })

    $("#form__cep__consult").on("submit", function (e) {
        e.preventDefault();
        let form = $(this);
        let url = form.attr("action");
        let cep = $("#cep__input__info").val();
        if (cep.length < 9) {
            return false;
        }
        $.ajax({
            url: url,
            method: "GET",
            dataType: "JSON",
            data: {cep: cep},
            beforeSend: function () {
                $('.cep__div__dis').hide();
                $("#cep__results__loading").show();
                $("#cep__results__cidade").html('');
                $("#cep__results__rua").html('');
            }, success: function (response) {
                $("#cep__results__data").html(response.entrega);
                if (response.local) {
                    $("#cep__results__cidade").html(response.local);
                }
                if (response.rua) {
                    $("#cep__results__rua").html(response.rua + " - ");
                }
            }, complete: function () {
                $('.cep__div__dis').hide();
                $("#cep__results__return").show();
            }
        })
    })

    $("#change__cep__show__input").click(function () {
        $('.cep__div__dis').hide();
        $("#form__cep__div__sd").show();
    })
})