<!doctype html>

<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-br"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="pt-br"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="pt-br"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="pt-br"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- open graph -->
    <meta property="og:title" content="{{$data['nm_loja']}}">
    <meta a_hash="h_checkout" hash="{{$data['hash']}}"/>
    <meta property="og:image" content="https://cdn.yampi.me/favicon/favicon.png">

    <!-- custom meta tag -->

    <!-- ROBOTS -->
    <meta name="robots" content="noindex,nofollow"/>

    <link href="//awesome-assets.yampi.me" rel="dns-prefetch"/>
    <link href="//cdn.yampi.me" rel="dns-prefetch"/>
    <link href="//fonts.dooki.com.br" rel="dns-prefetch"/>
    <link href="//analytics.bubbstore.com" rel="dns-prefetch"/>
    <link href="//fonts.googleapis.com" rel="dns-prefetch"/>
    <link href="//www.google-analytics.com" rel="dns-prefetch"/>
    <link href="//www.googleadservices.com" rel="dns-prefetch"/>
    <link href="//googleads.g.doubleclick.net" rel="dns-prefetch"/>
    <link href="//bat.bing.com" rel="dns-prefetch"/>
    <link href="//connect.facebook.net" rel="dns-prefetch"/>
    <link href="//staticxx.facebook.com" rel="dns-prefetch"/>
    <link href="//static.xx.fbcdn.net" rel="dns-prefetch"/>

    <link href="//buyer.yampi.io" rel="dns-prefetch"/>


    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
    <!-- Taboola Pixel Code -->
    <script type='text/javascript'>
        window._tfa = window._tfa || [];
        window._tfa.push({notify: 'event', name: 'page_view', id: {{$data['pixeltaboola']}}});
        !function (t, f, a, x) {
            if (!document.getElementById(x)) {
                t.async = 1;
                t.src = a;
                t.id = x;
                f.parentNode.insertBefore(t, f);
            }
        }(document.createElement('script'),
            document.getElementsByTagName('script')[0],
            '//cdn.taboola.com/libtrc/unip/1633956/tfa.js',
            'tb_tfa_script');
    </script>
    <!-- End of Taboola Pixel Code -->
    <script>
        _tfa.push({
            notify: 'event',
            name: 'make_purchase',
            id: {{$data['pixeltaboola']}},
{{--            revenue: {{floatval(($data['preco'])*$data['quantidade']) + floatval($data['frete_selecionado_valor'] ?? 0) + (($data['orderbump'] ?? 'xyz') == 's' ? $data['vl_orderbump'] : 0)}},--}}
            currency: 'BRL',
            {{--quantity: {{$data['quantidade']}}--}}
        });
    </script>
    <!-- End of Taboola Pixel Code -->

    <!-- webfonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&amp;display=swap"
        rel="stylesheet"
        media="screen"
        async
    >
    <link href="https://fonts.dooki.com.br/fa/4.7.0/fa.css" rel="stylesheet">

    <link rel="stylesheet"
          href="//awesome-assets.yampi.me/checkout/build/mix/assets/css/app.css?id=fba2bbd834e778e3920356ae5d860e45">

    <title>Compra finalizada - {{$data['nm_loja']}}</title>

    <!-- Personalization variables -->
    <style>
        :root {
            --default-radius: 30px;

            /* Fonts */
            --texts-font-family: Rubik, sans-serif;
            --titles-font-family: Rubik, sans-serif;
            --titles-uppercase: initial;
            --btn-uppercase: initial;

            /* Font weights */
            --texts-font-regular: 400;
            --texts-font-medium: 500;
            --texts-font-bold: 700;

            --titles-font-regular: 400;
            --titles-font-medium: 500;
            --titles-font-bold: 700;

            /* buttons */
            --btn-primary-bg-color: #f18000;
            --btn-primary-txt-color: #FFFFFF;
            --btn-secondary-bg-color: #999999;
            --btn-secondary-txt-color: #FFFFFF;
            --btn-tertiary-txt-color: {{$data['cor_loja']}};

            /* header and stopwatch */
            --stopwatch-txt-color: #FFFFFF;
            --stopwatch-timer-color: #FFC926;
            --stopwatch-bg-color: #773CBC;
            --header-bg-color: #773CBC;
            --header-el-color: #ffffff;

            /* discount-tag */
            --discount-tag-bg-color: {{$data['cor_loja']}};
            --discount-tag-txt-color: #FFFFFF;

            /* step-tag */
            --step-tag-bg-color: #333333;
            --step-tag-txt-color: #FFFFFF;

            --desktop-active-color: #999999;
            --cart-total-color: #f18000;
            --title-color: #666666;
            --description-color: #666666;

            /* footer */
            --footer-border-color: #d0d0d0;
            --footer-bg-color: #F7F7F8;
            --footer-txt-color: #666666;
            --footer-mobile-position: center;

        }
    </style>
    <!-- Custom css -->
    <style>
        /* CHEK-OUT DE ALTA CONVERSÃO DESENVOLVIDO PELO @SABINOSS79 */
        /* INÍCIO CÓDIGO - INFORMAÇÕES/ENTREGA/PAGAMENTO */
        @if($data['ultimo_dia'])
        .holder-cols-checkout .holder-container-resume .item-holder-quantity-price::after {
            content: "ÚLTIMO DIA DE PROMOÇÃO";
            font-size: 11px;
            padding: 3px 5px;
            color: #fff;
            font-weight: 600;
            background: #4fc65f;
            border-radius: 5px;
            display: inline-block;
            align-self: end;
        }

        @endif

header .holder-logo .logo .img-logo {
            display: block;
            max-height: 61px;
            max-width: var(--logo-max-width, 165px);
            -o-object-fit: contain;
            object-fit: contain;
            width: 100%;
            margin-right: 38px;
        }

        .checkout-step.enabled .connect, .checkout-step.enabled .holder-icon {
            background: linear-gradient(0deg, #004AAD 0%, #41ADFA 100%);
        }

        li.checkout-step:nth-child(1) > div:nth-child(2):after {
            content: ""; /* imagem informações pessoais */
            text-indent: -1px;
            display: block;
            color: #004AAD;
            line-height: 0px;
            margin-top: -12px;
            background: url("https://cdn.shopify.com/s/files/1/0521/6514/8855/files/user_white.svg?v=1661427489") no-repeat center center;
            height: 20px;
        }

        .checkout-step .holder-icon {
            width: 40px;
            height: 40px;
            background: #fff; /* circulo de informações, frete e pagamento */
            border: 2px solid #fff; /* cor da borda dos circulos */
            color: #004AAD; /* cor do texto */
            margin-bottom: 6px;
            text-indent: -9999px;
        }

        .checkout-step.enabled .connect, .checkout-step.enabled .holder-icon {
            background: linear-gradient(0deg, #f18000 0%, #f18000 100%); /* cor dos 3 icones */
        }

        .checkout-step .connect {
            background-color: #004AA; /* cor dos circulos apagados */
            top: 22px;
        }

        li.checkout-step:nth-child(2) > div:nth-child(2):after {
            height: 26px;
            background: url("https://cdn.shopify.com/s/files/1/0521/6514/8855/files/truck_grey_575052cb-447b-42a4-a4fd-a4574d0c71ec.svg?v=1661428281") no-repeat center center;
            content: "";
            text-indent: -1px;
            display: block;
            color: #000;
            line-height: 0px;
            margin-top: -15px;
            margin-left: 2px;
        }

        li.checkout-step.enabled:nth-child(2) > div:nth-child(2):after {
            content: "";
            background: url("https://cdn.shopify.com/s/files/1/0521/6514/8855/files/truck_white.svg?v=1661428373") no-repeat center center; /* imagem frete branca */
        }


        li.checkout-step:nth-child(3) > div:nth-child(2):after {
            height: 26px;
            background: url("https://cdn.shopify.com/s/files/1/0521/6514/8855/files/card_grey.svg?v=1661429244") no-repeat center center;
            content: ""; /* imagem pagamento */
            text-indent: -1px;
            display: block;
            color: #000;
            line-height: 0px;
            margin-top: -15px;
            margin-left: 0;
        }

        li.checkout-step.enabled:nth-child(3) > div:nth-child(2):after {
            content: "";
            background: url("https://cdn.shopify.com/s/files/1/0521/6514/8855/files/card_white.svg?v=1661429244") no-repeat center center; /* imagem pagamento branca */
        }

        /* FINAL CÓDIGO - INFORMAÇÕES/ENTREGA/PAGAMENTO */


        /* LINHA COLORIDA */

        .holder-countdown::after {
            content: "";
            display: block;
            background: linear-gradient(to right, #f18000 0, #f18000 4%, #f18000 5%, #f18000 50%, #f18000 84%, #f18000 119%);
            height: 5px;
            width: 100%;
            position: relative;
            top: 10px;
        }

        .link-abs {

        }

        .holder-countdown {

            padding: 9px 0 !important;

            font-size: 16px !important;

        }


        /* ICONES CORREIOS */

        .option.clearfix {
            background-image: url(https://www.propeg.com.br/ad-viewer/Correios/Integrada/macbook.png) !important;
            background-size: 27px !important;
            content: "" !important;
            background-repeat: no-repeat !important;
            background-position-x: 145px !important;
            background-position-y: 90% !important;
        }

        /* TAMANHO PREÇO */
        .holder-cols-checkout .cart-resume .detail.total .value {
            font-size: 22px;
        }

        /* APROVAÇÃO IMEDIATA */

        .payments .payment > label {
            position: relative;
            display: flex;
        }

        .payments .payment > label[for="payment-pix"]:after {
            background: {{$data['cor_loja']}};
            display: block;
            line-height: inherit;
            color: #FFF;
            padding: 8px 14px;
            border-radius: 8px;
            position: absolute;
            font-weight: bold;
            font-size: 10px;
            right: 3px;
            letter-spacing: 0.03em;
            top: 26%;
            content: 'APROVAÇÃO IMEDIATA';
        }

        .payments .payment > label[for="payment-credit-card"]:after {
            background: {{$data['cor_loja']}};
            display: block;
            line-height: inherit;
            color: #FFF;
            padding: 8px 14px;
            border-radius: 8px;
            position: absolute;
            font-weight: bold;
            font-size: 10px;
            right: 3px;
            letter-spacing: 0.03em;
            top: 26%;
            content: 'APROVAÇÃO IMEDIATA';
        }

        .payments .payment > label[for="payment-billet"]:after {
            background: #999;
            display: block;
            line-height: inherit;
            color: #FFF;
            padding: 8px 12px;
            border-radius: 8px;
            position: absolute;
            font-weight: bold;
            font-size: 10px;
            right: 3px;
            letter-spacing: 0.03em;
            top: 26%;
            content: 'APROVAÇÃO EM 3 DIAS';
        }

        .payments .payment > label[for="payment-credit-card"]:after {
            top: 13%;
        }

        /* INÍCIO DO CÓDIGO - NOVO VISUAL CARTÃO DE CRÉDITO */

        .jp-card .jp-card-front .jp-card-shiny, .jp-card .jp-card-back .jp-card-shiny {
            width: 50px;
            height: 35px;
            border-radius: 5px;
            background: #CCC;
            position: relative;
            opacity: 0;
        }

        .jp-card .jp-card-front {
            background: url("https://cdn.shopify.com/s/files/1/0294/0374/2339/files/card-front.png?v=1618002695") no-repeat !important;
        }

        .jp-card .jp-card-back {
            background: url("https://cdn.shopify.com/s/files/1/0294/0374/2339/files/card-back.png?v=1618002712") no-repeat !important;
            background-size: 100% !important;
        }

        .jp-card .jp-card-back::after {
            opacity: 0 !important;
        }

        .jp-card .jp-card-back .jp-card-bar {
            opacity: 0 !important;
        }

        .jp-card .jp-card-back .jp-card-cvc {
            top: 52% !important;
            left: 80% !important;
            color: #000 !important;
        }

        .jp-card.jp-card-mastercard.jp-card-identified .jp-card-front::before, .jp-card.jp-card-mastercard.jp-card-identified .jp-card-back::before {
            background: transparent !important;
        }

        .jp-card.jp-card-safari.jp-card-identified .jp-card-front::before, .jp-card.jp-card-safari.jp-card-identified .jp-card-back::before {
            background-image: none !important;
        }

        .jp-card.jp-card-identified .jp-card-front::before, .jp-card.jp-card-identified .jp-card-back::before {
            background-image: none !important;
        }

        .jp-card.jp-card-identified .jp-card-back, .jp-card.jp-card-identified .jp-card-front {
            background-color: transparent !important;
        }

        /* FINAL DO CÓDIGO - NOVO VISUAL CARTÃO DE CRÉDITO */


        /* INÍCIO ORDERBUMP PERSONALIZADO - @Sabinoss79 */

        .holder-recomm {
            border: 2px dashed var(--main-color);
        }

        /* ALTERAR COR DE FUNDO - @Sabinoss79 */

        .orderbump {
            background-color: #fff5ee;
        }

        .owl-orderbumps .owl-dots .owl-dot.active span {
            background-color: var(--main-color) !important;
        }

        .orderbumps_offer-title, .orderbumps_offer-total {
            color: var(--main-color) !important;
            background-color: #FFF;
        }

        /* ALTERAR COR DO PREÇO - @Sabinoss79 */

        .orderbump_price {
            color: #1bb794 !important;
        }

        /* ALTERAR COR DO BOTÃO - @Sabinoss79 */

        .orderbump_button {
            background-color: #f79f1a !important;
        }

        .orderbump_disclaimer {
            padding-top: 18px;
            display: none;
        }

        .orderbump_button {
            padding: 13px 10px 9px;
        }

        /* ALTERAR ARREDONDAMENTO - @Sabinoss79 */

        .orderbump {
            border-radius: 15px;
        }

        /* FINAL ORDERBUMP PERSONALIZADO - @Sabinoss79 */


        .holder-cols-checkout .box-checkout {
            border: 1px solid transparent;
        }

        .holder-cols-checkout .box-checkout.box-resume {
            width: auto;
            margin: 0 -1px 20px;
            padding-left: 14px;
            padding-right: 14px;
            border: 0;
            box-shadow: none;
            border-radius: 6PX;
            box-shadow: 0 1px 4px 0 rgb(0 0 0 / 17%);
        }

        .btn-text.btn-purple /* COR DO BOTÃO DE CUPOM - ALTERAR SE PREFEIR */
        {
            color: #ffffff;
            background: #bdbdbd;
            border-radius: 25PX;
        }

        .col-checkout:not(.col-3) .box-checkout.active:not(.upsell) {
            width: auto;
            border: 0;
            box-shadow: none;
            border-radius: 6PX;
            box-shadow: 0 1px 4px 0 rgb(0 0 0 / 17%);
        }

        .container-testimonials .testimonials {
            padding: 20px 21px;
            background: #FFF;
            border-radius: 6PX;
            box-shadow: 0 1px 4px 0 rgb(0 0 0 / 17%);
            width: auto;
            margin: 0 -8px 20px;
            padding-left: 14px;
            padding-right: 14px;
            box-sizing: border-box;
        }

        .container-testimonials {
            max-width: 680px !important;
            box-shadow: 0 4px 12px rgb(244 246 248);
        }

        .holder-cols-checkout .box-checkout.active .title {
            color: {{$data['cor_loja']}}    !important;
        }


        .holder-cols-checkout .box-checkout.box-resume {
            width: auto;
            margin: 0 -1px 20px;
            padding-left: 14px;
            padding-right: 14px;
            border: 0;
            box-shadow: none;
            border-radius: 6PX;
            box-shadow: 0 1px 4px 0 rgb(0 0 0 / 17%);
        }

        .btn-text.btn-purple /* COR DO BOTÃO DE CUPOM - ALTERAR SE PREFEIR */
        {
            color: #ffffff;
            background: #bdbdbd;
            border-radius: 25PX;
        }

        .col-checkout:not(.col-3) .box-checkout.active:not(.upsell) {
            width: auto;
            border: 0;
            box-shadow: none;
            border-radius: 6PX;
            box-shadow: 0 1px 4px 0 rgb(0 0 0 / 17%);
        }

        .container-testimonials .testimonials {
            padding: 20px 21px;
            background: #FFF;
            border-radius: 6PX;
            box-shadow: 0 1px 4px 0 rgb(0 0 0 / 17%);
            width: auto;
            margin: 0 -8px 20px;
            padding-left: 14px;
            padding-right: 14px;
            box-sizing: border-box;
        }

        .container-testimonials {
            max-width: 680px !important;
            box-shadow: 0 4px 12px rgb(244 246 248);
        }


        .holder-cols-checkout .box-checkout .box-title .desc {

            font-family: 'Roboto', sans-serif;

            line-height: 1.4;

            font-size: 13.5px;

        }

        /* TEXTO - 12x NO CARTÃO */

        .holder-cols-checkout .cart-resume .detail.total .value:after {
            content: 'à vista';
            color: #4b4b4b !important;
            display: block;
            font-weight: 400;
            font-size: 12px;
        }


        .mobile-description > div:nth-child(2) > span:nth-child(1) {
            color: {{$data['cor_loja']}}    !important;
        }

        /* MENSAGEM PIX */

        .pix-desc > p:nth-child(1)::after {
            content: "ATENÇÃO! O prazo de validade do código PIX é de 30 minutos após gerado. Efetue o pagamento dentro do prazo para garantir seus produtos.";
            font-size: 13px;
            color: {{$data['cor_loja']}};
            background: transparent;
            border: 1px solid{{$data['cor_loja']}};
            padding: 10px;
            display: block;
            border-radius: 5px;
            margin: 20px auto;
        }

        /* MENSAGEM PIX DEPOIS DO PIX GERADO */


        .holder-cols-checkout .box-checkout.active .box-title .holder-number {
            background: linear-gradient(0deg, {{$data['cor_loja']}} 0%, {{$data['cor_loja']}} 100%);
            border-radius: 20%;
        }

        .checkout-step .holder-icon {
            border-radius: 20%;
        }

        .btn-copy-paste {
            background-color: {{$data['cor_loja']}};
        }

        .btn-copy-paste:hover {
            background-color: #00b12d;
        }

        /* Tooltip feedback for copied code */
        .js-copy-paste .tooltip-copy {
            opacity: 0;
            transform: translateY(-4px);
            transition: opacity .2s ease, transform .2s ease;
            display: inline-block;
            margin-left: 10px;
        }

        .js-copy-paste .tooltip-copy.active {
            opacity: 1;
            transform: translateY(0);
        }

        /
        IMAGEM DE COMO PAGAR O PIX APÓS GERAR O PIX

        -
        @SABINOSS79/

        .mt25.mb10::before {
            content: '';
            background: url(https://cdn.shopify.com/s/files/1/0621/5273/7018/files/COMO_PAGAR_SEU_PIX.png?v=1682297441);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center;
            width: 130%;
            margin-left: -35px;
            margin-top: -54px;
            height: 367px;
            display: flex;
            position: relative;
            align-items: center;
            padding: 0 !important;
            margin-bottom: -185px;
        }


        .finalization-pix .qr-code .-holder, .finalization-wallet .qr-code .-holder {
            margin: 0px 0 15px;
        }
    </style>
    <script type="text/javascript">
        window.TOKEN = 'T5AT74qM0puqRNJgl6suYUTxPZKbBg9OGxoIHfPR';
        window.ENV = 'production';
        window.checkout = window.checkout || {};
        window.session = {
            upsell: false,
            page: 'checkout-finalization',
            auth: {
                name: 'asdsad asdas',
                email: 'sakdfajf@gmail.com'
            },
            customer: {
                name: '',
                email: ''
            },
            flux: {
                hit: '',
                vid: ''
            },
            sender_hash: ''
        }
        window.merchant = {
            id: 586266
        }
        window.config = {
            payment_auto_selected: 'credit_card',
            select_largest_installment: 1,
            show_installment_warning: 0
        }
    </script>

    <script>
        // Removes query params from url
        if ("undefined" !== typeof history.replaceState && 'undefined' !== typeof URL) {
            var newUrl = new URL(window.location.href);

            newUrl.searchParams.delete('store_token');
            newUrl.searchParams.delete('cart_token');

            if (window.location.href !== newUrl.href) {
                history.replaceState({}, null, newUrl.href);
            }
        }
    </script>

    <script>
        window.yampi = window.yampi || {};
        window.yampi = Object.assign(window.yampi, {
            google: {
                analytics: {
                    version: [],
                }
            }
        });
    </script>


    <!-- Google tag (gtag.js) -->
    <script
        async
        src="https://www.googletagmanager.com/gtag/js?id=G-3W1H0TVXYW"
    ></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());


        gtag('config', 'G-3W1H0TVXYW', {'groups': 'checkout'});

        window.yampi.google.analytics.version.push('4');
    </script>


    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-231467125-1', 'auto');


        ga('send', 'pageview');

        // Internal tracker
        ga('create', 'UA-45745009-5', {name: 'bubbTracker'});
        ga('create', 'UA-45745009-32', {name: 'checkout'});

        ga('bubbTracker.send', 'pageview');
        ga('bubbTracker.require', 'ecommerce', 'ecommerce.js');

        ga('checkout.send', 'pageview');
        ga('checkout.require', 'ecommerce', 'ecommerce.js');

        window.yampi.google.analytics.version.push('universal');
    </script>

    <script>
        window.checkout.cart = [];
        window.checkoutInstallments = {};
    </script>


    <script>
        window.conversionPixels = window.conversionPixels || [];
        // Conversion pixels
    </script>
    <script>
        window.conversionPixels = window.conversionPixels || [];
        // Conversion pixels
    </script>
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
    </script>


    <script>
        <?php
        if (!empty($data['pixelfb'])) {
            for ($i = 1; $i <= 6; $i++) {
                if ($data['pixelfb']['pixel_' . $i] != null) {
                    echo "fbq('init', " . $data['pixelfb']['pixel_' . $i] . ");";
                }
            }
        }
        ?>

    </script>
    <script>
        // Conversion pixels
    </script>
    <script>
        window.conversionPixels = window.conversionPixels || [];

        // Conversion pixels
    </script>

    <script>
        window.dataLayer = window.dataLayer || [];


        var orderData = {
            'pageCategory': 'orderPlaced',
            'order': {
                id: 85781714,
                token: 'shopify-c4f06ba42d4bc3c2d5777ea72b4f3371',
                payment_method: 'pix',
                'number': '586266737360139',
                'total': 173.58,
                'total_without_taxes': 173.58,
                'total_without_shipping': 173.58,
                'customer_id': 148822380,
                'customer': {
                    "id": 148822380,
                    "first_name": "asdsad",
                    "last_name": "asdas",
                    "full_name": "asdsad asdas",
                    "email": "sakdfajf@gmail.com",
                    "document": "04226183495",
                    "document_type": "CPF",
                    "birthday": null,
                    "phone_number": "5521984184184"
                },
                'authorized': 0,
                'optionsIds': ['8392816754993'],
                'skusIds': ['117061123'],
                'status': 'waiting_payment',
                'prices': {
                    total: 173.58
                },
                'address_info': {
                    "hashed_first_name": "50ad41624c25e493aa1dc7f4ab32bdc5a3b0b78ecc35b539936e3fea7c565af7",
                    "hashed_last_name": "c42edefc75871e4ce2146fcda67d03dda05cc26fdf93b17b55f42c1eadfdc322",
                    "hashed_street_address": "46a84a269926a668f28d16686512960ecd4f69bb482399d7772f0500a8f17a5e",
                    "city": "Balne\u00e1rio Cambori\u00fa",
                    "state": "SC",
                    "postal_code": "88330900",
                    "country_code": "BR"
                },
                'items': [
                    {

                        "product": {
                            "id": "45155129786673",
                            "sku": "69508assad72",
                            "price": 178.95,
                            "brand": "lojaliord",
                            "categories": ["Mais Vendidos"]
                        },
                        "quantity": 1,
                        "name": "[PAGUE 2 E LEVE 4] MARMITA TÉRMICA - HOTPOTE + TALHERES E LANCHEIRA DE BRINDE",
                        "product_id": 17329275,
                        "categories_names": ["Mais Vendidos"]
                    },
                ]
            }
        }

        window.dataLayer.push(orderData);
        window.dataLayer.push({
            pageCategory: 'orderPlaced',
            orderConversionValue: 173.58,
            purchasedSkus: ["69508assad72"],
            purchasedSkusText: "69508assad72",
            orderId: 85781714
        });

        window.checkout.orderPlaced = orderData.order;


    </script>
    <script>


    </script>
    <script>
        var enhanced_conversion_data = {
            email: 'sakdfajf@gmail.com',
            phone_number: '5521984184184',
            first_name: 'asdsad',
            last_name: 'asdas'

            , home_address: {
                street: 'Avenida Brasil 1271 Atlântico Shopping',
                city: 'Balneário Camboriú',
                region: 'Centro',
                postal_code: '88330900',
                country: 'BR'
            }
        };
    </script>


    <script>
        window.gandalf = {
            active: true,
            url: 'https://seguro.com/cart/recomm',
            env: 'production'
        }
    </script>
    <!-- Hotjar Tracking Code for https://pay.yampi.com.br -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {hjid: 3285671, hjsv: 6};
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <script>
        !function (e, a, n, t, s, c) {
            e.ana || ((t = e.ana = function () {
                t.process ? t.process.apply(t, arguments) : t.queue.push(arguments)
            }).queue = [], t.t = +new Date, (s = a.createElement(n)).async = 1, s.src = "https://cdn.yampi.io/ana/ana.min.js?t=" + 864e5 * Math.ceil(new Date / 864e5), (c = a.getElementsByTagName(n)[0]).parentNode.insertBefore(s, c))
        }(window, document, "script");
    </script>

    <script>
        ana('init', 'checkout');

        window.anaParams = {
            store_id: 586266,
            store_profile: 'checkout'
        }
    </script>
    <script defer src="https://www.googleoptimize.com/optimize.js?id=OPT-N6QHJQM&v=1.0"
            id="google-optimize-script"></script>
    <script>
        window.google_experiment_id = "xEjGe-uCQZqJgbK6Nzz9AQ";
    </script>
</head>

<body class="liord2 checkout-finalization custom-checkout mercadopago centered-logo">


    <div class="inner-body">

        <header class="clearfix" style="background: {{ $data['cor_loja'] }};">
            <div class="container clearfix">

                <div class="inner-header -center">
                    <div class="holder-logo pull-left hcenter flex default ">
                        <a
                            id="header-logo"
                            href="#"
                        >

                            <div class="logo">
                                <img
                                    src="http://{{$data['img_loja']}}"
                                    class="img-logo"
                                />
                            </div><!-- /.logo -->
                        </a>
                    </div><!-- /.holder-logo -->

                    <div class="flex-holder flex hcenter end">
                        <div class="item-security pull-right black-70">
                            <svg width="89" height="19" viewBox="0 0 89 19" fill="#898792"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M9.75 14.1875V8.5C9.75 8.05127 9.38623 7.6875 8.9375 7.6875L2.4375 7.6875C1.98877 7.6875 1.625 8.05127 1.625 8.5L1.625 14.1875C1.625 14.6362 1.98877 15 2.4375 15H8.9375C9.38623 15 9.75 14.6362 9.75 14.1875ZM11.375 8.5V14.1875C11.375 15.5337 10.2837 16.625 8.9375 16.625H2.4375C1.09131 16.625 -5.8844e-08 15.5337 0 14.1875L2.48609e-07 8.5C3.07453e-07 7.15381 1.09131 6.0625 2.4375 6.0625L8.9375 6.0625C10.2837 6.0625 11.375 7.15381 11.375 8.5Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M5.6875 3.625C4.79004 3.625 4.0625 4.35254 4.0625 5.25V6.875H2.4375V5.25C2.4375 3.45507 3.89257 2 5.6875 2C7.48243 2 8.9375 3.45507 8.9375 5.25V6.875H7.3125V5.25C7.3125 4.35254 6.58496 3.625 5.6875 3.625Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M6.5 10.125L6.5 12.5625H4.875L4.875 10.125H6.5Z"/>
                                <path
                                    d="M23.136 0.11C23.73 0.11 24.236 0.205333 24.654 0.396C25.072 0.586667 25.391 0.861666 25.611 1.221C25.831 1.58033 25.941 2.01667 25.941 2.53C25.941 3.04333 25.831 3.47967 25.611 3.839C25.391 4.19833 25.072 4.47333 24.654 4.664C24.236 4.85467 23.73 4.95 23.136 4.95H21.695V7.37H19.803V0.11H23.136ZM22.839 3.531C23.235 3.531 23.532 3.45033 23.73 3.289C23.9353 3.12033 24.038 2.86733 24.038 2.53C24.038 2.19267 23.9353 1.94333 23.73 1.782C23.532 1.61333 23.235 1.529 22.839 1.529H21.695V3.531H22.839Z"/>
                                <path
                                    d="M33.0094 7.37H31.0624L30.5564 5.731H28.0704L27.5534 7.37H25.6504L28.2024 0.11H30.4684L33.0094 7.37ZM28.4224 4.444H30.2044L29.3134 1.507L28.4224 4.444Z"/>
                                <path
                                    d="M36.5882 7.48C35.9429 7.48 35.3672 7.337 34.8612 7.051C34.3626 6.765 33.9739 6.34333 33.6952 5.786C33.4166 5.22867 33.2772 4.55033 33.2772 3.751C33.2772 2.96633 33.4239 2.29533 33.7172 1.738C34.0106 1.18067 34.4286 0.751667 34.9712 0.451C35.5212 0.150333 36.1666 0 36.9072 0C37.7286 0 38.3922 0.150333 38.8982 0.451C39.4042 0.744333 39.7966 1.21367 40.0752 1.859L38.3262 2.552C38.2309 2.178 38.0622 1.90667 37.8202 1.738C37.5782 1.56933 37.2776 1.485 36.9182 1.485C36.5589 1.485 36.2509 1.573 35.9942 1.749C35.7376 1.91767 35.5432 2.17067 35.4112 2.508C35.2792 2.838 35.2132 3.24867 35.2132 3.74C35.2132 4.25333 35.2792 4.68233 35.4112 5.027C35.5506 5.37167 35.7522 5.62833 36.0162 5.797C36.2876 5.95833 36.6212 6.039 37.0172 6.039C37.2299 6.039 37.4242 6.01333 37.6002 5.962C37.7762 5.91067 37.9302 5.83733 38.0622 5.742C38.1942 5.63933 38.2969 5.51467 38.3702 5.368C38.4436 5.214 38.4802 5.03433 38.4802 4.829V4.719H36.8192V3.454H40.0862V7.37H38.7992L38.6562 5.665L38.9642 5.929C38.8102 6.42767 38.5316 6.81267 38.1282 7.084C37.7322 7.348 37.2189 7.48 36.5882 7.48Z"/>
                                <path
                                    d="M48.1344 7.37H46.1874L45.6814 5.731H43.1954L42.6784 7.37H40.7754L43.3274 0.11H45.5934L48.1344 7.37ZM43.5474 4.444H45.3294L44.4384 1.507L43.5474 4.444Z"/>
                                <path
                                    d="M57.3828 0.11V7.37H55.7108V4.037L55.7658 1.804H55.7438L53.9508 7.37H52.4218L50.6288 1.804H50.6068L50.6618 4.037V7.37H48.9788V0.11H51.6738L52.8178 3.806L53.2248 5.346H53.2468L53.6648 3.817L54.7978 0.11H57.3828Z"/>
                                <path
                                    d="M58.9905 7.37V0.11H64.6445V1.573H60.8825V3.047H63.8745V4.422H60.8825V5.907H64.7875V7.37H58.9905Z"/>
                                <path
                                    d="M72.4749 0.11V7.37H70.3739L68.1189 3.443L67.5689 2.365H67.5579L67.6019 3.707V7.37H65.9299V0.11H68.0309L70.2859 4.037L70.8359 5.115H70.8469L70.8029 3.773V0.11H72.4749Z"/>
                                <path d="M80.1883 0.11V1.573H77.8233V7.37H75.9313V1.573H73.5553V0.11H80.1883Z"/>
                                <path
                                    d="M84.225 0C84.9583 0 85.589 0.150333 86.117 0.451C86.6523 0.744333 87.063 1.16967 87.349 1.727C87.635 2.28433 87.778 2.95533 87.778 3.74C87.778 4.52467 87.635 5.19567 87.349 5.753C87.063 6.31033 86.6523 6.73933 86.117 7.04C85.589 7.33333 84.9583 7.48 84.225 7.48C83.4917 7.48 82.8573 7.33333 82.322 7.04C81.7867 6.73933 81.376 6.31033 81.09 5.753C80.804 5.19567 80.661 4.52467 80.661 3.74C80.661 2.95533 80.804 2.28433 81.09 1.727C81.376 1.16967 81.7867 0.744333 82.322 0.451C82.8573 0.150333 83.4917 0 84.225 0ZM84.225 1.485C83.873 1.485 83.576 1.56933 83.334 1.738C83.092 1.90667 82.9087 2.15967 82.784 2.497C82.6593 2.827 82.597 3.24133 82.597 3.74C82.597 4.23133 82.6593 4.64567 82.784 4.983C82.9087 5.32033 83.092 5.57333 83.334 5.742C83.576 5.91067 83.873 5.995 84.225 5.995C84.577 5.995 84.8703 5.91067 85.105 5.742C85.347 5.57333 85.5303 5.32033 85.655 4.983C85.7797 4.64567 85.842 4.23133 85.842 3.74C85.842 3.24133 85.7797 2.827 85.655 2.497C85.5303 2.15967 85.347 1.90667 85.105 1.738C84.8703 1.56933 84.577 1.485 84.225 1.485Z"/>
                                <path
                                    d="M21.03 18.37V13.84C21.03 13.7067 21.03 13.57 21.03 13.43C21.0367 13.2833 21.0433 13.13 21.05 12.97C20.8233 13.19 20.5633 13.38 20.27 13.54C19.9833 13.6933 19.6867 13.8033 19.38 13.87L19.18 12.94C19.32 12.92 19.4833 12.8733 19.67 12.8C19.8567 12.7267 20.05 12.6333 20.25 12.52C20.45 12.4067 20.6333 12.2867 20.8 12.16C20.9667 12.0267 21.0967 11.8967 21.19 11.77H22.09V18.37H21.03Z"/>
                                <path
                                    d="M26.1634 18.47C25.3701 18.47 24.7468 18.1833 24.2934 17.61C23.8468 17.03 23.6234 16.1833 23.6234 15.07C23.6234 13.9567 23.8468 13.1133 24.2934 12.54C24.7468 11.96 25.3701 11.67 26.1634 11.67C26.9634 11.67 27.5868 11.96 28.0334 12.54C28.4868 13.1133 28.7134 13.9567 28.7134 15.07C28.7134 16.1833 28.4868 17.03 28.0334 17.61C27.5868 18.1833 26.9634 18.47 26.1634 18.47ZM26.1634 17.56C26.4834 17.56 26.7501 17.47 26.9634 17.29C27.1834 17.1033 27.3468 16.8267 27.4534 16.46C27.5668 16.0867 27.6234 15.6233 27.6234 15.07C27.6234 14.5167 27.5668 14.0567 27.4534 13.69C27.3468 13.3167 27.1834 13.04 26.9634 12.86C26.7501 12.6733 26.4834 12.58 26.1634 12.58C25.8434 12.58 25.5734 12.6733 25.3534 12.86C25.1401 13.04 24.9801 13.3167 24.8734 13.69C24.7668 14.0567 24.7134 14.5167 24.7134 15.07C24.7134 15.6233 24.7668 16.0867 24.8734 16.46C24.9801 16.8267 25.1401 17.1033 25.3534 17.29C25.5734 17.47 25.8434 17.56 26.1634 17.56Z"/>
                                <path
                                    d="M32.4427 18.47C31.6494 18.47 31.0261 18.1833 30.5727 17.61C30.1261 17.03 29.9027 16.1833 29.9027 15.07C29.9027 13.9567 30.1261 13.1133 30.5727 12.54C31.0261 11.96 31.6494 11.67 32.4427 11.67C33.2427 11.67 33.8661 11.96 34.3127 12.54C34.7661 13.1133 34.9927 13.9567 34.9927 15.07C34.9927 16.1833 34.7661 17.03 34.3127 17.61C33.8661 18.1833 33.2427 18.47 32.4427 18.47ZM32.4427 17.56C32.7627 17.56 33.0294 17.47 33.2427 17.29C33.4627 17.1033 33.6261 16.8267 33.7327 16.46C33.8461 16.0867 33.9027 15.6233 33.9027 15.07C33.9027 14.5167 33.8461 14.0567 33.7327 13.69C33.6261 13.3167 33.4627 13.04 33.2427 12.86C33.0294 12.6733 32.7627 12.58 32.4427 12.58C32.1227 12.58 31.8527 12.6733 31.6327 12.86C31.4194 13.04 31.2594 13.3167 31.1527 13.69C31.0461 14.0567 30.9927 14.5167 30.9927 15.07C30.9927 15.6233 31.0461 16.0867 31.1527 16.46C31.2594 16.8267 31.4194 17.1033 31.6327 17.29C31.8527 17.47 32.1227 17.56 32.4427 17.56Z"/>
                                <path
                                    d="M37.362 18.37L41.682 11.77H42.602L38.292 18.37H37.362ZM37.622 11.67C37.962 11.67 38.2554 11.7467 38.502 11.9C38.7554 12.0533 38.9487 12.2667 39.082 12.54C39.222 12.8133 39.292 13.1367 39.292 13.51C39.292 13.8767 39.222 14.2 39.082 14.48C38.9487 14.7533 38.7554 14.9667 38.502 15.12C38.2554 15.2733 37.962 15.35 37.622 15.35C37.2887 15.35 36.9954 15.2733 36.742 15.12C36.4887 14.9667 36.292 14.7533 36.152 14.48C36.0187 14.2 35.952 13.8767 35.952 13.51C35.952 13.1367 36.0187 12.8133 36.152 12.54C36.292 12.2667 36.4887 12.0533 36.742 11.9C36.9954 11.7467 37.2887 11.67 37.622 11.67ZM37.622 12.45C37.4554 12.45 37.312 12.4933 37.192 12.58C37.072 12.66 36.982 12.78 36.922 12.94C36.862 13.0933 36.832 13.2833 36.832 13.51C36.832 13.73 36.862 13.92 36.922 14.08C36.982 14.24 37.072 14.36 37.192 14.44C37.312 14.52 37.4554 14.56 37.622 14.56C37.7954 14.56 37.942 14.52 38.062 14.44C38.182 14.36 38.272 14.24 38.332 14.08C38.392 13.92 38.422 13.73 38.422 13.51C38.422 13.2833 38.392 13.0933 38.332 12.94C38.272 12.78 38.182 12.66 38.062 12.58C37.942 12.4933 37.7954 12.45 37.622 12.45ZM42.342 14.79C42.682 14.79 42.9754 14.8667 43.222 15.02C43.4754 15.1733 43.6687 15.39 43.802 15.67C43.942 15.9433 44.012 16.2633 44.012 16.63C44.012 17.0033 43.942 17.3267 43.802 17.6C43.6687 17.8733 43.4754 18.0867 43.222 18.24C42.9754 18.3933 42.682 18.47 42.342 18.47C42.0087 18.47 41.7154 18.3933 41.462 18.24C41.2087 18.0867 41.012 17.8733 40.872 17.6C40.7387 17.3267 40.672 17.0033 40.672 16.63C40.672 16.2633 40.7387 15.9433 40.872 15.67C41.012 15.39 41.2087 15.1733 41.462 15.02C41.7154 14.8667 42.0087 14.79 42.342 14.79ZM42.342 15.58C42.1754 15.58 42.032 15.62 41.912 15.7C41.792 15.78 41.702 15.9 41.642 16.06C41.582 16.2133 41.552 16.4033 41.552 16.63C41.552 16.85 41.582 17.04 41.642 17.2C41.702 17.36 41.792 17.4833 41.912 17.57C42.032 17.65 42.1754 17.69 42.342 17.69C42.5154 17.69 42.662 17.65 42.782 17.57C42.902 17.4833 42.992 17.36 43.052 17.2C43.112 17.04 43.142 16.85 43.142 16.63C43.142 16.41 43.112 16.22 43.052 16.06C42.992 15.9 42.902 15.78 42.782 15.7C42.662 15.62 42.5154 15.58 42.342 15.58Z"/>
                                <path
                                    d="M50.8628 11.67C51.4561 11.67 51.9695 11.7833 52.4028 12.01C52.8361 12.23 53.2028 12.5567 53.5028 12.99L52.7828 13.68C52.5295 13.2933 52.2428 13.0167 51.9228 12.85C51.6095 12.6767 51.2361 12.59 50.8028 12.59C50.4828 12.59 50.2195 12.6333 50.0128 12.72C49.8061 12.8067 49.6528 12.9233 49.5528 13.07C49.4595 13.21 49.4128 13.37 49.4128 13.55C49.4128 13.7567 49.4828 13.9367 49.6228 14.09C49.7695 14.2433 50.0395 14.3633 50.4328 14.45L51.7728 14.75C52.4128 14.89 52.8661 15.1033 53.1328 15.39C53.3995 15.6767 53.5328 16.04 53.5328 16.48C53.5328 16.8867 53.4228 17.24 53.2028 17.54C52.9828 17.84 52.6761 18.07 52.2828 18.23C51.8961 18.39 51.4395 18.47 50.9128 18.47C50.4461 18.47 50.0261 18.41 49.6528 18.29C49.2795 18.17 48.9528 18.0067 48.6728 17.8C48.3928 17.5933 48.1628 17.3567 47.9828 17.09L48.7228 16.35C48.8628 16.5833 49.0395 16.7933 49.2528 16.98C49.4661 17.16 49.7128 17.3 49.9928 17.4C50.2795 17.5 50.5961 17.55 50.9428 17.55C51.2495 17.55 51.5128 17.5133 51.7328 17.44C51.9595 17.3667 52.1295 17.26 52.2428 17.12C52.3628 16.9733 52.4228 16.8 52.4228 16.6C52.4228 16.4067 52.3561 16.2367 52.2228 16.09C52.0961 15.9433 51.8561 15.83 51.5028 15.75L50.0528 15.42C49.6528 15.3333 49.3228 15.21 49.0628 15.05C48.8028 14.89 48.6095 14.6967 48.4828 14.47C48.3561 14.2367 48.2928 13.9767 48.2928 13.69C48.2928 13.3167 48.3928 12.98 48.5928 12.68C48.7995 12.3733 49.0961 12.13 49.4828 11.95C49.8695 11.7633 50.3295 11.67 50.8628 11.67Z"/>
                                <path
                                    d="M55.0288 18.37V11.77H59.8088V12.69H56.0988V14.59H58.9988V15.49H56.0988V17.45H59.9488V18.37H55.0288Z"/>
                                <path
                                    d="M63.9491 18.47C63.3291 18.47 62.7924 18.3333 62.3391 18.06C61.8857 17.7867 61.5324 17.4 61.2791 16.9C61.0257 16.3933 60.8991 15.7833 60.8991 15.07C60.8991 14.37 61.0291 13.7667 61.2891 13.26C61.5557 12.7533 61.9291 12.3633 62.4091 12.09C62.8957 11.81 63.4524 11.67 64.0791 11.67C64.7657 11.67 65.3191 11.7967 65.7391 12.05C66.1657 12.3033 66.5057 12.6967 66.7591 13.23L65.7691 13.7C65.6424 13.3333 65.4324 13.06 65.1391 12.88C64.8524 12.6933 64.5024 12.6 64.0891 12.6C63.6757 12.6 63.3124 12.6967 62.9991 12.89C62.6924 13.0833 62.4524 13.3667 62.2791 13.74C62.1057 14.1067 62.0191 14.55 62.0191 15.07C62.0191 15.5967 62.0957 16.0467 62.2491 16.42C62.4024 16.7867 62.6324 17.0667 62.9391 17.26C63.2524 17.4533 63.6357 17.55 64.0891 17.55C64.3357 17.55 64.5657 17.52 64.7791 17.46C64.9924 17.3933 65.1791 17.3 65.3391 17.18C65.4991 17.0533 65.6224 16.8967 65.7091 16.71C65.8024 16.5167 65.8491 16.29 65.8491 16.03V15.84H63.9291V14.97H66.7991V18.37H65.9991L65.9391 17.04L66.1391 17.14C65.9791 17.56 65.7124 17.8867 65.3391 18.12C64.9724 18.3533 64.5091 18.47 63.9491 18.47Z"/>
                                <path
                                    d="M73.7654 11.77V15.84C73.7654 16.7133 73.5354 17.37 73.0754 17.81C72.6154 18.25 71.9454 18.47 71.0654 18.47C70.1987 18.47 69.5321 18.25 69.0654 17.81C68.6054 17.37 68.3754 16.7133 68.3754 15.84V11.77H69.4454V15.71C69.4454 16.33 69.5787 16.79 69.8454 17.09C70.112 17.39 70.5187 17.54 71.0654 17.54C71.6187 17.54 72.0287 17.39 72.2954 17.09C72.5621 16.79 72.6954 16.33 72.6954 15.71V11.77H73.7654Z"/>
                                <path
                                    d="M78.2852 11.77C78.9919 11.77 79.5519 11.9467 79.9652 12.3C80.3852 12.6533 80.5952 13.13 80.5952 13.73C80.5952 14.35 80.3852 14.83 79.9652 15.17C79.5519 15.5033 78.9919 15.67 78.2852 15.67L78.1852 15.73H76.6552V18.37H75.5952V11.77H78.2852ZM78.2052 14.84C78.6386 14.84 78.9586 14.7533 79.1652 14.58C79.3786 14.4 79.4852 14.1267 79.4852 13.76C79.4852 13.4 79.3786 13.13 79.1652 12.95C78.9586 12.77 78.6386 12.68 78.2052 12.68H76.6552V14.84H78.2052ZM78.8352 15.06L80.9852 18.37H79.7552L77.9152 15.48L78.8352 15.06Z"/>
                                <path
                                    d="M84.9954 11.67C85.6354 11.67 86.1887 11.8067 86.6554 12.08C87.122 12.3533 87.482 12.7433 87.7354 13.25C87.9887 13.7567 88.1154 14.3633 88.1154 15.07C88.1154 15.7767 87.9887 16.3833 87.7354 16.89C87.482 17.3967 87.122 17.7867 86.6554 18.06C86.1887 18.3333 85.6354 18.47 84.9954 18.47C84.3621 18.47 83.812 18.3333 83.3454 18.06C82.8787 17.7867 82.5187 17.3967 82.2654 16.89C82.0121 16.3833 81.8854 15.7767 81.8854 15.07C81.8854 14.3633 82.0121 13.7567 82.2654 13.25C82.5187 12.7433 82.8787 12.3533 83.3454 12.08C83.812 11.8067 84.3621 11.67 84.9954 11.67ZM84.9954 12.6C84.5821 12.6 84.2254 12.6967 83.9254 12.89C83.6321 13.0833 83.4054 13.3633 83.2454 13.73C83.0854 14.0967 83.0054 14.5433 83.0054 15.07C83.0054 15.59 83.0854 16.0367 83.2454 16.41C83.4054 16.7767 83.6321 17.0567 83.9254 17.25C84.2254 17.4433 84.5821 17.54 84.9954 17.54C85.4154 17.54 85.7721 17.4433 86.0654 17.25C86.3654 17.0567 86.5954 16.7767 86.7554 16.41C86.9154 16.0367 86.9954 15.59 86.9954 15.07C86.9954 14.5433 86.9154 14.0967 86.7554 13.73C86.5954 13.3633 86.3654 13.0833 86.0654 12.89C85.7721 12.6967 85.4154 12.6 84.9954 12.6Z"/>
                            </svg>


                        </div>

                        <a
                            href="https://seguro.com/cart"
                            class="item-cart pull-right black-70 ml30 mr10"
                        >
                            <div class="holder-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="#898792"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20 25C20 25.5523 19.5523 26 19 26C18.4477 26 18 25.5523 18 25C18 24.4477 18.4477 24 19 24C19.5523 24 20 24.4477 20 25Z"/>
                                    <path
                                        d="M14 25C14 25.5523 13.5523 26 13 26C12.4477 26 12 25.5523 12 25C12 24.4477 12.4477 24 13 24C13.5523 24 14 24.4477 14 25Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M7.26541 7C8.75836 7 10.0241 8.09779 10.2353 9.57574L11.7446 20.1414C11.815 20.6341 12.2369 21 12.7346 21L22 21V23H12.7346C11.2416 23 9.97588 21.9022 9.76474 20.4243L8.25536 9.85858C8.18498 9.36593 7.76306 9 7.26541 9L6 9L6 7L7.26541 7Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M12 9H21.9384C23.8902 9 25.3222 10.8342 24.8489 12.7276L23.8489 16.7276C23.515 18.0631 22.315 19 20.9384 19H11V17H20.9384C21.3973 17 21.7973 16.6877 21.9086 16.2425L22.9086 12.2425C23.0664 11.6114 22.589 11 21.9384 11H12V9Z"/>
                                </svg>


                                <div class="cart-qtd flex all-center">
                                    0
                                </div><!-- /.cart-qtd -->
                            </div><!-- /.holder-icon -->
                        </a>

                    </div>
                </div><!-- /.inner-header -->

                <nav>

                    <div class="icon-arrow">
                        <i class="fa fa-angle-left"></i>
                    </div>
                </nav>

                <a
                    href="javascript:"
                    class="st-pusher"
                >
                </a>

            </div><!-- /.container -->
        </header>
        @if($data['status'] == 200)
            <div class="content clearfix">
                <div class="container clearfix text-center checkout-finalization">
                    <div class="flex around finalization-pix">
                        <div class="container-title">
                            <div class="-container">
                                <h1 class="ctx-title bold mb15 mt30">
                                    Quase lá...
                                </h1>

                                <p class="-description">
                                    Pague seu Pix dentro de
                                    <span
                                        class="time-left js-time-left bold"
                                        data-seconds-left="513"
                                    ></span><br>
                                    para garantir sua compra.
                                </p>

                                <div
                                    class="-loader js-check-payment"
                                    data-sale-id="85781714"
                                >
                                    Aguardando pagamento
                                    <svg
                                        viewBox="0 0 36 8"
                                        fill="#BF9500"
                                    >
                                        <circle
                                            cx="4"
                                            cy="4"
                                            r="4"
                                        >
                                            <animate
                                                attributeName="opacity"
                                                dur="1s"
                                                values="0;1;0"
                                                repeatCount="indefinite"
                                                begin=".1"
                                            />
                                        </circle>
                                        <circle
                                            cx="18"
                                            cy="4"
                                            r="4"
                                        >
                                            <animate
                                                attributeName="opacity"
                                                dur="1s"
                                                values="0;1;0"
                                                repeatCount="indefinite"
                                                begin=".2"
                                            />
                                        </circle>
                                        <circle
                                            cx="32"
                                            cy="4"
                                            r="4"
                                        >
                                            <animate
                                                attributeName="opacity"
                                                dur="1s"
                                                values="0;1;0"
                                                repeatCount="indefinite"
                                                begin=".3"
                                            />
                                        </circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="qr-code">
                            <div class="-holder" style="margin-top: 10px;">
                                <div class="medium c-text -desktop -real">

                                    <div class="-top-info f15 mb40">
                                        Abra seu aplicativo de pagamento onde você utiliza o Pix e escolha a opção
                                        <span class="inline-block bold yampi-purple">Ler QR Code</span>
                                    </div>
                                    <div class="flex all-center f14 black-60">
                                        <i class="icon icon-cellphone mr10"></i>
                                        <span class="-nowrap f14">Aponte a câmera do seu celular</span>
                                    </div>
                                </div>

                                <img
                                    src="{{$data['qrcode']}}"
                                    alt="QR Code PIX"
                                    class="-desktop -real"
                                >

                                @php
                                    $products = collect($data['products']);

                                    $baseTotalPrice = $products->sum(function ($product) {
                                        return $product['preco'] * $product['quantidade'];
                                    });
                                @endphp

                                <div class="price-total mt3">
                                    <span class="-text black-80">Valor do Pix:</span>
                                    <span class="-value bold" style="color: {{ $data['cor_loja'] }};">
                                        R$ {{ number_format($baseTotalPrice + $data['frete_selecionado_valor'], 2, ',') }}
                                    </span>
                                </div>

                                <button
                                    class="js-copy-paste btn-copy-paste -full -mobile -real"
                                    id="btn_copia"
                                    data-copy="{{($data['status']==200 ? $data['brcode'] : 'Pagamento não configurado')}}"
                                >
                <span class="flex all-center">
                    <i class="icon icon-copy-paste mr15"></i>
                    Copiar código
                    <span class="tooltip-copy f12 medium">Copiado!</span>
                </span>
                                </button>

                                <div class="mobile-description -mobile -real black-80 f14 medium">
                                    <div class="mt25 mb10">
                                        Após copiar o código, abra seu aplicativo de pagamento onde você utiliza o
                                        Pix.
                                    </div>

                                    <div>
                                        Escolha a opção
                                        <span class="yampi-purple bold">Pix Copia e Cola</span>
                                        e insira o código copiado
                                    </div>
                                </div>

                                <div class="-gateway mt35 mercadopago">
                                    <div class="black-60 f11 mb10">Pix processado por</div>
                                    <img
                                        src="/logobanco/{{$data['logo']['img']}}.png"
                                        alt="Logo mercadopago"
                                        style="    max-width: 60px !important;"
                                        class="-gateway-logo"
                                    >
                                </div>
                            </div>

                            <div class="-helper -desktop -real black-60">
                                <div class="f13 -text">
                                    Você também pode pagar escolhendo a opção <br>
                                    <span class="medium">Pix Copia e Cola</span>
                                    no seu aplicativo de pagamento ou Internet Banking (banco online).
                                    Neste caso, copie o código clicando no botão abaixo:
                                </div>

                                <div class="inline-block">
                                    <a
                                        href="javascript:void(0)"
                                        id="btn_copia_mobile"
                                        class="js-copy-paste medium f15 relative mt10 flex all-center"
                                        data-copy="{{($data['status']==200 ? $data['brcode'] : 'Pagamento não configurado')}}"
                                    >
                                        <i class="icon icon-copy-paste -dark mr15"></i>
                                        Copiar código
                                        <span class="tooltip-copy f12">Copiado!</span>
                                    </a>
                                </div>
                            </div>
                            @else
                                <div
                                    style="display: flex; width: 100%; height: 100%; justify-content:center; align-items: center;">
                                    <h2>O pagamento falhou!</h2>
                                    <h4 style="padding: 50px; font-size: 1.5em;">
                                        @isset($data['message'])
                                            @if(is_array($data['message']))
                                                @foreach($data['message'] as $msg)
                                                    {{ $msg }} <br>
                                                @endforeach
                                            @else
                                                {{ $data['message'] }}
                                            @endif
                                        @else
                                            Pagamento não configurado!
                                        @endif
                                    </h4>
                                </div>
                            @endif
                        </div>
                    </div>
                </div><!-- /.container clearfix -->


            </div><!-- /.content clearfix -->

            <footer class="-mobile-center">
                <div class="container">
                    <div class="payment-methods-holder">
                        <div class="-title">
                            Formas de pagamento
                        </div>

                        <div class="-payment-list">
                            <img
                                alt="amex"
                                width="39"
                                height="26"
                                src=https://icons.yampi.me/svg/card-amex.svg
                            >
                            <span class="line-break hide"></span>
                            <img
                                alt="visa"
                                width="39"
                                height="26"
                                src=https://icons.yampi.me/svg/card-visa.svg
                            >
                            <span class="line-break hide"></span>
                            <img
                                alt="diners"
                                width="39"
                                height="26"
                                src=https://icons.yampi.me/svg/card-diners.svg
                            >
                            <span class="line-break hide"></span>
                            <img
                                alt="mastercard"
                                width="39"
                                height="26"
                                src=https://icons.yampi.me/svg/card-mastercard.svg
                            >
                            <span class="line-break hide"></span>
                            <img
                                alt="discover"
                                width="39"
                                height="26"
                                src=https://icons.yampi.me/svg/card-discover.svg
                            >
                            <span class="line-break hide"></span>
                            <img
                                alt="aura"
                                width="39"
                                height="26"
                                src=https://icons.yampi.me/svg/card-aura.svg
                            >
                            <span class="line-break hide"></span>
                            <img
                                alt="hipercard"
                                width="39"
                                height="26"
                                src=https://icons.yampi.me/svg/card-hipercard.svg
                            >
                            <span class="line-break hide"></span>
                            <img
                                alt="elo"
                                width="39"
                                height="26"
                                src=https://icons.yampi.me/svg/card-elo.svg
                            >
                            <span class="line-break hide"></span>
                            <img
                                alt="billet"
                                width="39"
                                height="26"
                                src=https://icons.yampi.me/svg/card-billet.svg
                            >
                            <span class="line-break hide"></span>
                            <img
                                alt="hiper"
                                width="39"
                                height="26"
                                src=https://icons.yampi.me/svg/card-hiper.svg
                            >
                            <span class="line-break hide"></span>
                            <img
                                alt="pix"
                                width="39"
                                height="26"
                                src=https://icons.yampi.me/svg/card-pix.svg
                            >
                            <span class="line-break hide"></span>
                        </div>
                    </div>

                    <div class="store-info-holder">
                        <div class="-store-name">
                            {{$data['nm_loja']}}:
                            {{$data['email_loja']}}
                        </div>


                    </div>


                    <div class="security-label">
                        <svg width="89" height="19" viewBox="0 0 89 19" fill="#898792"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9.75 14.1875V8.5C9.75 8.05127 9.38623 7.6875 8.9375 7.6875L2.4375 7.6875C1.98877 7.6875 1.625 8.05127 1.625 8.5L1.625 14.1875C1.625 14.6362 1.98877 15 2.4375 15H8.9375C9.38623 15 9.75 14.6362 9.75 14.1875ZM11.375 8.5V14.1875C11.375 15.5337 10.2837 16.625 8.9375 16.625H2.4375C1.09131 16.625 -5.8844e-08 15.5337 0 14.1875L2.48609e-07 8.5C3.07453e-07 7.15381 1.09131 6.0625 2.4375 6.0625L8.9375 6.0625C10.2837 6.0625 11.375 7.15381 11.375 8.5Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M5.6875 3.625C4.79004 3.625 4.0625 4.35254 4.0625 5.25V6.875H2.4375V5.25C2.4375 3.45507 3.89257 2 5.6875 2C7.48243 2 8.9375 3.45507 8.9375 5.25V6.875H7.3125V5.25C7.3125 4.35254 6.58496 3.625 5.6875 3.625Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M6.5 10.125L6.5 12.5625H4.875L4.875 10.125H6.5Z"/>
                            <path
                                d="M23.136 0.11C23.73 0.11 24.236 0.205333 24.654 0.396C25.072 0.586667 25.391 0.861666 25.611 1.221C25.831 1.58033 25.941 2.01667 25.941 2.53C25.941 3.04333 25.831 3.47967 25.611 3.839C25.391 4.19833 25.072 4.47333 24.654 4.664C24.236 4.85467 23.73 4.95 23.136 4.95H21.695V7.37H19.803V0.11H23.136ZM22.839 3.531C23.235 3.531 23.532 3.45033 23.73 3.289C23.9353 3.12033 24.038 2.86733 24.038 2.53C24.038 2.19267 23.9353 1.94333 23.73 1.782C23.532 1.61333 23.235 1.529 22.839 1.529H21.695V3.531H22.839Z"/>
                            <path
                                d="M33.0094 7.37H31.0624L30.5564 5.731H28.0704L27.5534 7.37H25.6504L28.2024 0.11H30.4684L33.0094 7.37ZM28.4224 4.444H30.2044L29.3134 1.507L28.4224 4.444Z"/>
                            <path
                                d="M36.5882 7.48C35.9429 7.48 35.3672 7.337 34.8612 7.051C34.3626 6.765 33.9739 6.34333 33.6952 5.786C33.4166 5.22867 33.2772 4.55033 33.2772 3.751C33.2772 2.96633 33.4239 2.29533 33.7172 1.738C34.0106 1.18067 34.4286 0.751667 34.9712 0.451C35.5212 0.150333 36.1666 0 36.9072 0C37.7286 0 38.3922 0.150333 38.8982 0.451C39.4042 0.744333 39.7966 1.21367 40.0752 1.859L38.3262 2.552C38.2309 2.178 38.0622 1.90667 37.8202 1.738C37.5782 1.56933 37.2776 1.485 36.9182 1.485C36.5589 1.485 36.2509 1.573 35.9942 1.749C35.7376 1.91767 35.5432 2.17067 35.4112 2.508C35.2792 2.838 35.2132 3.24867 35.2132 3.74C35.2132 4.25333 35.2792 4.68233 35.4112 5.027C35.5506 5.37167 35.7522 5.62833 36.0162 5.797C36.2876 5.95833 36.6212 6.039 37.0172 6.039C37.2299 6.039 37.4242 6.01333 37.6002 5.962C37.7762 5.91067 37.9302 5.83733 38.0622 5.742C38.1942 5.63933 38.2969 5.51467 38.3702 5.368C38.4436 5.214 38.4802 5.03433 38.4802 4.829V4.719H36.8192V3.454H40.0862V7.37H38.7992L38.6562 5.665L38.9642 5.929C38.8102 6.42767 38.5316 6.81267 38.1282 7.084C37.7322 7.348 37.2189 7.48 36.5882 7.48Z"/>
                            <path
                                d="M48.1344 7.37H46.1874L45.6814 5.731H43.1954L42.6784 7.37H40.7754L43.3274 0.11H45.5934L48.1344 7.37ZM43.5474 4.444H45.3294L44.4384 1.507L43.5474 4.444Z"/>
                            <path
                                d="M57.3828 0.11V7.37H55.7108V4.037L55.7658 1.804H55.7438L53.9508 7.37H52.4218L50.6288 1.804H50.6068L50.6618 4.037V7.37H48.9788V0.11H51.6738L52.8178 3.806L53.2248 5.346H53.2468L53.6648 3.817L54.7978 0.11H57.3828Z"/>
                            <path
                                d="M58.9905 7.37V0.11H64.6445V1.573H60.8825V3.047H63.8745V4.422H60.8825V5.907H64.7875V7.37H58.9905Z"/>
                            <path
                                d="M72.4749 0.11V7.37H70.3739L68.1189 3.443L67.5689 2.365H67.5579L67.6019 3.707V7.37H65.9299V0.11H68.0309L70.2859 4.037L70.8359 5.115H70.8469L70.8029 3.773V0.11H72.4749Z"/>
                            <path d="M80.1883 0.11V1.573H77.8233V7.37H75.9313V1.573H73.5553V0.11H80.1883Z"/>
                            <path
                                d="M84.225 0C84.9583 0 85.589 0.150333 86.117 0.451C86.6523 0.744333 87.063 1.16967 87.349 1.727C87.635 2.28433 87.778 2.95533 87.778 3.74C87.778 4.52467 87.635 5.19567 87.349 5.753C87.063 6.31033 86.6523 6.73933 86.117 7.04C85.589 7.33333 84.9583 7.48 84.225 7.48C83.4917 7.48 82.8573 7.33333 82.322 7.04C81.7867 6.73933 81.376 6.31033 81.09 5.753C80.804 5.19567 80.661 4.52467 80.661 3.74C80.661 2.95533 80.804 2.28433 81.09 1.727C81.376 1.16967 81.7867 0.744333 82.322 0.451C82.8573 0.150333 83.4917 0 84.225 0ZM84.225 1.485C83.873 1.485 83.576 1.56933 83.334 1.738C83.092 1.90667 82.9087 2.15967 82.784 2.497C82.6593 2.827 82.597 3.24133 82.597 3.74C82.597 4.23133 82.6593 4.64567 82.784 4.983C82.9087 5.32033 83.092 5.57333 83.334 5.742C83.576 5.91067 83.873 5.995 84.225 5.995C84.577 5.995 84.8703 5.91067 85.105 5.742C85.347 5.57333 85.5303 5.32033 85.655 4.983C85.7797 4.64567 85.842 4.23133 85.842 3.74C85.842 3.24133 85.7797 2.827 85.655 2.497C85.5303 2.15967 85.347 1.90667 85.105 1.738C84.8703 1.56933 84.577 1.485 84.225 1.485Z"/>
                            <path
                                d="M21.03 18.37V13.84C21.03 13.7067 21.03 13.57 21.03 13.43C21.0367 13.2833 21.0433 13.13 21.05 12.97C20.8233 13.19 20.5633 13.38 20.27 13.54C19.9833 13.6933 19.6867 13.8033 19.38 13.87L19.18 12.94C19.32 12.92 19.4833 12.8733 19.67 12.8C19.8567 12.7267 20.05 12.6333 20.25 12.52C20.45 12.4067 20.6333 12.2867 20.8 12.16C20.9667 12.0267 21.0967 11.8967 21.19 11.77H22.09V18.37H21.03Z"/>
                            <path
                                d="M26.1634 18.47C25.3701 18.47 24.7468 18.1833 24.2934 17.61C23.8468 17.03 23.6234 16.1833 23.6234 15.07C23.6234 13.9567 23.8468 13.1133 24.2934 12.54C24.7468 11.96 25.3701 11.67 26.1634 11.67C26.9634 11.67 27.5868 11.96 28.0334 12.54C28.4868 13.1133 28.7134 13.9567 28.7134 15.07C28.7134 16.1833 28.4868 17.03 28.0334 17.61C27.5868 18.1833 26.9634 18.47 26.1634 18.47ZM26.1634 17.56C26.4834 17.56 26.7501 17.47 26.9634 17.29C27.1834 17.1033 27.3468 16.8267 27.4534 16.46C27.5668 16.0867 27.6234 15.6233 27.6234 15.07C27.6234 14.5167 27.5668 14.0567 27.4534 13.69C27.3468 13.3167 27.1834 13.04 26.9634 12.86C26.7501 12.6733 26.4834 12.58 26.1634 12.58C25.8434 12.58 25.5734 12.6733 25.3534 12.86C25.1401 13.04 24.9801 13.3167 24.8734 13.69C24.7668 14.0567 24.7134 14.5167 24.7134 15.07C24.7134 15.6233 24.7668 16.0867 24.8734 16.46C24.9801 16.8267 25.1401 17.1033 25.3534 17.29C25.5734 17.47 25.8434 17.56 26.1634 17.56Z"/>
                            <path
                                d="M32.4427 18.47C31.6494 18.47 31.0261 18.1833 30.5727 17.61C30.1261 17.03 29.9027 16.1833 29.9027 15.07C29.9027 13.9567 30.1261 13.1133 30.5727 12.54C31.0261 11.96 31.6494 11.67 32.4427 11.67C33.2427 11.67 33.8661 11.96 34.3127 12.54C34.7661 13.1133 34.9927 13.9567 34.9927 15.07C34.9927 16.1833 34.7661 17.03 34.3127 17.61C33.8661 18.1833 33.2427 18.47 32.4427 18.47ZM32.4427 17.56C32.7627 17.56 33.0294 17.47 33.2427 17.29C33.4627 17.1033 33.6261 16.8267 33.7327 16.46C33.8461 16.0867 33.9027 15.6233 33.9027 15.07C33.9027 14.5167 33.8461 14.0567 33.7327 13.69C33.6261 13.3167 33.4627 13.04 33.2427 12.86C33.0294 12.6733 32.7627 12.58 32.4427 12.58C32.1227 12.58 31.8527 12.6733 31.6327 12.86C31.4194 13.04 31.2594 13.3167 31.1527 13.69C31.0461 14.0567 30.9927 14.5167 30.9927 15.07C30.9927 15.6233 31.0461 16.0867 31.1527 16.46C31.2594 16.8267 31.4194 17.1033 31.6327 17.29C31.8527 17.47 32.1227 17.56 32.4427 17.56Z"/>
                            <path
                                d="M37.362 18.37L41.682 11.77H42.602L38.292 18.37H37.362ZM37.622 11.67C37.962 11.67 38.2554 11.7467 38.502 11.9C38.7554 12.0533 38.9487 12.2667 39.082 12.54C39.222 12.8133 39.292 13.1367 39.292 13.51C39.292 13.8767 39.222 14.2 39.082 14.48C38.9487 14.7533 38.7554 14.9667 38.502 15.12C38.2554 15.2733 37.962 15.35 37.622 15.35C37.2887 15.35 36.9954 15.2733 36.742 15.12C36.4887 14.9667 36.292 14.7533 36.152 14.48C36.0187 14.2 35.952 13.8767 35.952 13.51C35.952 13.1367 36.0187 12.8133 36.152 12.54C36.292 12.2667 36.4887 12.0533 36.742 11.9C36.9954 11.7467 37.2887 11.67 37.622 11.67ZM37.622 12.45C37.4554 12.45 37.312 12.4933 37.192 12.58C37.072 12.66 36.982 12.78 36.922 12.94C36.862 13.0933 36.832 13.2833 36.832 13.51C36.832 13.73 36.862 13.92 36.922 14.08C36.982 14.24 37.072 14.36 37.192 14.44C37.312 14.52 37.4554 14.56 37.622 14.56C37.7954 14.56 37.942 14.52 38.062 14.44C38.182 14.36 38.272 14.24 38.332 14.08C38.392 13.92 38.422 13.73 38.422 13.51C38.422 13.2833 38.392 13.0933 38.332 12.94C38.272 12.78 38.182 12.66 38.062 12.58C37.942 12.4933 37.7954 12.45 37.622 12.45ZM42.342 14.79C42.682 14.79 42.9754 14.8667 43.222 15.02C43.4754 15.1733 43.6687 15.39 43.802 15.67C43.942 15.9433 44.012 16.2633 44.012 16.63C44.012 17.0033 43.942 17.3267 43.802 17.6C43.6687 17.8733 43.4754 18.0867 43.222 18.24C42.9754 18.3933 42.682 18.47 42.342 18.47C42.0087 18.47 41.7154 18.3933 41.462 18.24C41.2087 18.0867 41.012 17.8733 40.872 17.6C40.7387 17.3267 40.672 17.0033 40.672 16.63C40.672 16.2633 40.7387 15.9433 40.872 15.67C41.012 15.39 41.2087 15.1733 41.462 15.02C41.7154 14.8667 42.0087 14.79 42.342 14.79ZM42.342 15.58C42.1754 15.58 42.032 15.62 41.912 15.7C41.792 15.78 41.702 15.9 41.642 16.06C41.582 16.2133 41.552 16.4033 41.552 16.63C41.552 16.85 41.582 17.04 41.642 17.2C41.702 17.36 41.792 17.4833 41.912 17.57C42.032 17.65 42.1754 17.69 42.342 17.69C42.5154 17.69 42.662 17.65 42.782 17.57C42.902 17.4833 42.992 17.36 43.052 17.2C43.112 17.04 43.142 16.85 43.142 16.63C43.142 16.41 43.112 16.22 43.052 16.06C42.992 15.9 42.902 15.78 42.782 15.7C42.662 15.62 42.5154 15.58 42.342 15.58Z"/>
                            <path
                                d="M50.8628 11.67C51.4561 11.67 51.9695 11.7833 52.4028 12.01C52.8361 12.23 53.2028 12.5567 53.5028 12.99L52.7828 13.68C52.5295 13.2933 52.2428 13.0167 51.9228 12.85C51.6095 12.6767 51.2361 12.59 50.8028 12.59C50.4828 12.59 50.2195 12.6333 50.0128 12.72C49.8061 12.8067 49.6528 12.9233 49.5528 13.07C49.4595 13.21 49.4128 13.37 49.4128 13.55C49.4128 13.7567 49.4828 13.9367 49.6228 14.09C49.7695 14.2433 50.0395 14.3633 50.4328 14.45L51.7728 14.75C52.4128 14.89 52.8661 15.1033 53.1328 15.39C53.3995 15.6767 53.5328 16.04 53.5328 16.48C53.5328 16.8867 53.4228 17.24 53.2028 17.54C52.9828 17.84 52.6761 18.07 52.2828 18.23C51.8961 18.39 51.4395 18.47 50.9128 18.47C50.4461 18.47 50.0261 18.41 49.6528 18.29C49.2795 18.17 48.9528 18.0067 48.6728 17.8C48.3928 17.5933 48.1628 17.3567 47.9828 17.09L48.7228 16.35C48.8628 16.5833 49.0395 16.7933 49.2528 16.98C49.4661 17.16 49.7128 17.3 49.9928 17.4C50.2795 17.5 50.5961 17.55 50.9428 17.55C51.2495 17.55 51.5128 17.5133 51.7328 17.44C51.9595 17.3667 52.1295 17.26 52.2428 17.12C52.3628 16.9733 52.4228 16.8 52.4228 16.6C52.4228 16.4067 52.3561 16.2367 52.2228 16.09C52.0961 15.9433 51.8561 15.83 51.5028 15.75L50.0528 15.42C49.6528 15.3333 49.3228 15.21 49.0628 15.05C48.8028 14.89 48.6095 14.6967 48.4828 14.47C48.3561 14.2367 48.2928 13.9767 48.2928 13.69C48.2928 13.3167 48.3928 12.98 48.5928 12.68C48.7995 12.3733 49.0961 12.13 49.4828 11.95C49.8695 11.7633 50.3295 11.67 50.8628 11.67Z"/>
                            <path
                                d="M55.0288 18.37V11.77H59.8088V12.69H56.0988V14.59H58.9988V15.49H56.0988V17.45H59.9488V18.37H55.0288Z"/>
                            <path
                                d="M63.9491 18.47C63.3291 18.47 62.7924 18.3333 62.3391 18.06C61.8857 17.7867 61.5324 17.4 61.2791 16.9C61.0257 16.3933 60.8991 15.7833 60.8991 15.07C60.8991 14.37 61.0291 13.7667 61.2891 13.26C61.5557 12.7533 61.9291 12.3633 62.4091 12.09C62.8957 11.81 63.4524 11.67 64.0791 11.67C64.7657 11.67 65.3191 11.7967 65.7391 12.05C66.1657 12.3033 66.5057 12.6967 66.7591 13.23L65.7691 13.7C65.6424 13.3333 65.4324 13.06 65.1391 12.88C64.8524 12.6933 64.5024 12.6 64.0891 12.6C63.6757 12.6 63.3124 12.6967 62.9991 12.89C62.6924 13.0833 62.4524 13.3667 62.2791 13.74C62.1057 14.1067 62.0191 14.55 62.0191 15.07C62.0191 15.5967 62.0957 16.0467 62.2491 16.42C62.4024 16.7867 62.6324 17.0667 62.9391 17.26C63.2524 17.4533 63.6357 17.55 64.0891 17.55C64.3357 17.55 64.5657 17.52 64.7791 17.46C64.9924 17.3933 65.1791 17.3 65.3391 17.18C65.4991 17.0533 65.6224 16.8967 65.7091 16.71C65.8024 16.5167 65.8491 16.29 65.8491 16.03V15.84H63.9291V14.97H66.7991V18.37H65.9991L65.9391 17.04L66.1391 17.14C65.9791 17.56 65.7124 17.8867 65.3391 18.12C64.9724 18.3533 64.5091 18.47 63.9491 18.47Z"/>
                            <path
                                d="M73.7654 11.77V15.84C73.7654 16.7133 73.5354 17.37 73.0754 17.81C72.6154 18.25 71.9454 18.47 71.0654 18.47C70.1987 18.47 69.5321 18.25 69.0654 17.81C68.6054 17.37 68.3754 16.7133 68.3754 15.84V11.77H69.4454V15.71C69.4454 16.33 69.5787 16.79 69.8454 17.09C70.112 17.39 70.5187 17.54 71.0654 17.54C71.6187 17.54 72.0287 17.39 72.2954 17.09C72.5621 16.79 72.6954 16.33 72.6954 15.71V11.77H73.7654Z"/>
                            <path
                                d="M78.2852 11.77C78.9919 11.77 79.5519 11.9467 79.9652 12.3C80.3852 12.6533 80.5952 13.13 80.5952 13.73C80.5952 14.35 80.3852 14.83 79.9652 15.17C79.5519 15.5033 78.9919 15.67 78.2852 15.67L78.1852 15.73H76.6552V18.37H75.5952V11.77H78.2852ZM78.2052 14.84C78.6386 14.84 78.9586 14.7533 79.1652 14.58C79.3786 14.4 79.4852 14.1267 79.4852 13.76C79.4852 13.4 79.3786 13.13 79.1652 12.95C78.9586 12.77 78.6386 12.68 78.2052 12.68H76.6552V14.84H78.2052ZM78.8352 15.06L80.9852 18.37H79.7552L77.9152 15.48L78.8352 15.06Z"/>
                            <path
                                d="M84.9954 11.67C85.6354 11.67 86.1887 11.8067 86.6554 12.08C87.122 12.3533 87.482 12.7433 87.7354 13.25C87.9887 13.7567 88.1154 14.3633 88.1154 15.07C88.1154 15.7767 87.9887 16.3833 87.7354 16.89C87.482 17.3967 87.122 17.7867 86.6554 18.06C86.1887 18.3333 85.6354 18.47 84.9954 18.47C84.3621 18.47 83.812 18.3333 83.3454 18.06C82.8787 17.7867 82.5187 17.3967 82.2654 16.89C82.0121 16.3833 81.8854 15.7767 81.8854 15.07C81.8854 14.3633 82.0121 13.7567 82.2654 13.25C82.5187 12.7433 82.8787 12.3533 83.3454 12.08C83.812 11.8067 84.3621 11.67 84.9954 11.67ZM84.9954 12.6C84.5821 12.6 84.2254 12.6967 83.9254 12.89C83.6321 13.0833 83.4054 13.3633 83.2454 13.73C83.0854 14.0967 83.0054 14.5433 83.0054 15.07C83.0054 15.59 83.0854 16.0367 83.2454 16.41C83.4054 16.7767 83.6321 17.0567 83.9254 17.25C84.2254 17.4433 84.5821 17.54 84.9954 17.54C85.4154 17.54 85.7721 17.4433 86.0654 17.25C86.3654 17.0567 86.5954 16.7767 86.7554 16.41C86.9154 16.0367 86.9954 15.59 86.9954 15.07C86.9954 14.5433 86.9154 14.0967 86.7554 13.73C86.5954 13.3633 86.3654 13.0833 86.0654 12.89C85.7721 12.6967 85.4154 12.6 84.9954 12.6Z"/>
                        </svg>

                    </div>
{{--                    <input type="hidden" value="{{$data['id_loja']}}" id="__l">--}}
                    <input type="hidden" value="{{ $baseTotalPrice + $data['frete_selecionado_valor'] }}" id="_vl">
                </div>
            </footer>

    </div><!-- /.inner-body -->

    <script src="https://cdn.yampi.me/jquery/jquery.js"></script>
    <script
        src="//awesome-assets.yampi.me/checkout/build/mix/assets/js/app.js?id=9c1c7c0a3e1f4bf1c94cd50f2f29b575"></script>
    <script>
        <?php
        if ($data['resumo_aberto']) {
            echo '
                    setTimeout(() => {
                        $(".js-box-resume-title").click()
                    }, 1000);
                ';
        }
        ?>
    </script>
    <script>
        fbq('track', 'Purchase',
            {
                currency: "BRL",
                value: $("#_vl").val()

            });
        $.post('/local/checkout', {
            useragent: window.navigator.userAgent,
            local: 'Realizando Pagamento - Yampi',
            hash: $('[a_hash="h_checkout"]').attr('hash'),
            il: $("#__l").val()
        }, (r) => {
            console.log("|           ^_^          |");
        })

        const copyPixCode = async (code) => {
            try {
                if (navigator.clipboard && navigator.clipboard.writeText) {
                    await navigator.clipboard.writeText(code);
                } else {
                    const el = document.createElement('textarea');
                    el.value = code;
                    el.setAttribute('readonly', '');
                    el.style.position = 'absolute';
                    el.style.left = '-9999px';
                    document.body.appendChild(el);
                    el.select();
                    document.execCommand('copy');
                    document.body.removeChild(el);
                }
                return true;
            } catch (err) {
                console.error('Copy to clipboard failed:', err);
                return false;
            }
        };

        const showTooltip = (btn) => {
            try {
                const tooltip = $(btn).find('.tooltip-copy');
                tooltip.addClass('active');
                setTimeout(() => tooltip.removeClass('active'), 1500);
            } catch (_) {}
        };

        $("#btn_copia, #btn_copia_mobile").on('click', async function (e) {
            e.preventDefault();
            e.stopPropagation();

            const code = $(this).data('copy');
            if (code && typeof code === 'string' && code.length > 10) {
                const ok = await copyPixCode(code);
                if (ok) showTooltip(this);
            }

            // analytics
            try {
                fbq('track', 'Purchase', {
                    currency: "BRL",
                    value: $("#_vl").val()
                });
            } catch (_) {}

            // backend flag
            $.post('/checkout/pixc', {
                hash: $('[a_hash="h_checkout"]').attr('hash')
            }, (r) => {
                console.log(r + ' ----')
            })
        });
    </script>

    <script>
        const transactionId = {{ $data['transactionId'] }};
        const apiBaseUrl = `{{ \Illuminate\Support\Facades\DB::table('rota_api')->value('rota_api') }}`;
        const transStatus = ['processing', 'authorized', 'paid', 'chargedback', 'in_protest', 'partially_paid']

        const recurringFetch = async () => {
            try {
                const res = await fetch(`${apiBaseUrl}checkout/transaction/${transactionId}`);

                if (!res.ok) {
                    throw new Error(`HTTP Error: ${res.status}`);
                }

                const { status, message } = await res.json();

                if (status === '200' && transStatus.includes(message)) {
                    window.location.href = `{{ $data['redirect_link'] ?? url("checkout/{$data['hash']}/confirm-order") }}`;
                }
            } catch (err) {
                console.error('An error occurred during the fetch:', err);
            }
        };

        setInterval(recurringFetch, 60000);
    </script>
</body>
</html>
