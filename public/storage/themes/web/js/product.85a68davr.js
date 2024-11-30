$(function () {

    let checkoutUrl = $("#checkoutUrl").attr("content");
    let urlBase = $('base').attr('href');

    /*
        SWIPER
     */

    $("#modal_carrossel__zoom").click(function () {
        $(".modal__swiper").toggleClass('zoom');
    })

    $(".set__zoom").click(function () {
        $(".modal__swiper").toggleClass('zoom');
    })

    $("#modal_carrossel__cancel").click(function () {
        $("#modal_carrosel").hide();
    })

    $("#modal_carrosel").click(function (e) {
        let target = e.target.id;
        if (target == "modal_carrosel" || target == "modal_carrosel_content" || target == "carrosel_picture") {
            $("#modal_carrosel").hide();
        }
    })

    function toggleFullScreen() {
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen();
        } else {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            }
        }
    }

    $(".set__full__screen").click(function () {
        toggleFullScreen();
    })

    $('.carrossel__image__click__for__open').click(function () {
        $("#modal_carrosel").show();
    })

    let modal_swiper = new Swiper(".modal__swiper", {
        pagination: {
            el: "#modal_carrosel_header_number",
            type: "fraction",
        },
        navigation: {
            nextEl: "#next__arrow__modal__carrossel",
            prevEl: "#prev__arrow__modal__carrossel",
        },
        loop: true
    });

    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: ".NextSwiperArrow",
            prevEl: ".PrevSwiperArrow",
        },
        loop: true
    });


    /*
        BOTÃO COMPRAR
     */
    $('.src__ButtonUI-sc-1cpjf6b-3.fGAKbL').click(function (e) {
        e.preventDefault();
        let btn = $(this);
        let url = btn.attr("href");
        let old_html = btn.html();
        btn.html('<img width="25px" src="storage/themes/web/img/loading.svg">').addClass('disabled');
        setTimeout(function () {
            btn.html(old_html).removeClass('disabled');
            window.location.href = url;
        }, 500);
    })
    /*
        CONSULTAR CEP
     */
    $("#frete__escolher__outro__cep").on("click", function () {
        $("#frete__return__infos").hide();
        $("#form__frete__consult").show();
        $("#localizacao__frete__client").html("");
        $("#frete__client__dia__entrega").html("Receba em até");
        $("#frete__consult_cep").val('');
        return false;
    })

    
    /*
        ATIVA OS BOTÕES DE OPÇÕES EXTRAS E INSERE JUNTO AO NOME.
     */
    $(".select__extras__values").click(function () {
        
        let btn = $(this);
        
        $(".select__extras__values").removeClass('active');
        btn.addClass('active');
        let selected = btn.text().trim();

        console.log(btn.text().trim());
        $(".product__extra__insert").html(" - " + selected);
        $(".product__extra__insert_two").html(selected);
        let produtoNome = $(".src__Text-sc-154pg0p-0.src__Title-sc-1xq3hsd-0.jccmLy").text();
    })
    /*
        clica no primeiro botão de extras
    */
    $('[data-selectedextras="1"]').click();
    
})