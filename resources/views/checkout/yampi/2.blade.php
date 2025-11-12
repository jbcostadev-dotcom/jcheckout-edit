<html class="no-js" lang="pt-br"><!--<![endif]--><head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- open graph -->
    <meta property="og:title" content="{{$data['nm_loja']}}">
    <meta a_hash="h_checkout" hash="{{$data['hash']}}"/>
    <meta property="og:image" content="https://cdn.yampi.me/favicon/favicon.png">
    <meta property="og:type" content="website">
    <meta property="og:>

  <!-- custom meta tag -->



  <!-- ROBOTS -->
  <meta name="robots" content="noindex,nofollow">

    <link href="//awesome-assets.yampi.me" rel="dns-prefetch">
    <link href="//cdn.yampi.me" rel="dns-prefetch">
    <link href="//fonts.dooki.com.br" rel="dns-prefetch">
    <link href="//analytics.bubbstore.com" rel="dns-prefetch">
    <link href="//fonts.googleapis.com" rel="dns-prefetch">
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="//www.googleadservices.com" rel="dns-prefetch">
    <link href="//googleads.g.doubleclick.net" rel="dns-prefetch">
    <link href="//bat.bing.com" rel="dns-prefetch">
    <link href="//connect.facebook.net" rel="dns-prefetch">
    <link href="//staticxx.facebook.com" rel="dns-prefetch">
    <link href="//static.xx.fbcdn.net" rel="dns-prefetch">

    <link href="//buyer.yampi.io" rel="dns-prefetch">

    <link rel="shortcut icon" href="https://cdn.yampi.me/favicon/favicon.png">
    <link rel="icon" type="image/png" href="https://cdn.yampi.me/favicon/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://cdn.yampi.me/favicon/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://cdn.yampi.me/favicon/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://cdn.yampi.me/favicon/favicon.png">

    <script src="https://www.google.com/recaptcha/api.js?render=6LdxeuoUAAAAAP6iiKD6JZKojOflG8Z_w0Ebx6LC"></script>
    <!-- webfonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&amp;display=swap" rel="stylesheet" media="screen" async="">
    <link href="https://fonts.dooki.com.br/fa/4.7.0/fa.css" rel="stylesheet">

    <link rel="stylesheet" href="//awesome-assets.yampi.me/checkout/build/mix/assets/css/app.css?id=2497a014acfedf369aa6515bae3fca40">

    <title>Finalizar compra - {{$data['nm_loja']}}</title>

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
            max-width: var(--logo-max-width,165px);
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
            height:20px;
        }

        .checkout-step .holder-icon {
            width: 40px;
            height: 40px;
            background: #fff; /* circulo de informações, frete e pagamento */
            border:2px solid #fff; /* cor da borda dos circulos */
            color:#004AAD; /* cor do texto */
            margin-bottom: 6px;
            text-indent:-9999px;
        }

        .checkout-step.enabled .connect, .checkout-step.enabled .holder-icon {
            background: linear-gradient(0deg, #f18000 0%, #f18000 100%); /* cor dos 3 icones */
        }

        .checkout-step .connect {
            background-color: #004AA; /* cor dos circulos apagados */
            top:22px;
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
            background: linear-gradient(to right, {{$data['cor_loja']}} 0, #ffffff 4%, {{$data['cor_loja']}} 5%, #ffffff 50%, {{$data['cor_loja']}} 84%, #ffffff 119%);
            height: 5px;
            width: 100%;
            position: relative;
            top: 10px;
        }

        .link-abs {

        }
        .holder-countdown{

            padding: 9px 0 !important;

            font-size: 16px !important;

        }


        /* ICONES CORREIOS */

        .option.clearfix {
            background-size: 27px!important;
            content: ""!important;
            background-repeat: no-repeat!important;
            background-position-x: 145px!important;
            background-position-y: 90%!important;
        }
        .clearfix:after {
            clear: both;
            margin-bottom: -1px;
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

        .payments .payment > label[for="payment-pix"]:after
        {
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
        .payments .payment > label[for="payment-credit-card"]:after
        {
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
            background-size:100% !important;
        }

        .jp-card .jp-card-back::after {
            opacity:0 !important;
        }

        .jp-card .jp-card-back .jp-card-bar {
            opacity:0 !important;
        }

        .jp-card .jp-card-back .jp-card-cvc {
            top: 52% !important;
            left:80% !important;
            color:#000 !important;
        }

        .jp-card.jp-card-mastercard.jp-card-identified .jp-card-front::before, .jp-card.jp-card-mastercard.jp-card-identified .jp-card-back::before {
            background:transparent !important;
        }

        .jp-card.jp-card-safari.jp-card-identified .jp-card-front::before, .jp-card.jp-card-safari.jp-card-identified .jp-card-back::before {
            background-image:none !important;
        }

        .jp-card.jp-card-identified .jp-card-front::before, .jp-card.jp-card-identified .jp-card-back::before {
            background-image:none !important;
        }

        .jp-card.jp-card-identified .jp-card-back, .jp-card.jp-card-identified .jp-card-front {
            background-color:transparent !important;
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
            box-shadow:0 1px 4px 0 rgb(0 0 0 / 17%);
        }

        .btn-text.btn-purple /* COR DO BOTÃO DE CUPOM - ALTERAR SE PREFEIR */ {
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
            max-width: 680px!important;
            box-shadow: 0 4px 12px rgb(244 246 248);
        }

        .holder-cols-checkout .box-checkout.active .title {
            color: {{$data['cor_loja']}} !important;
        }


        .holder-cols-checkout .box-checkout.box-resume {
            width: auto;
            margin: 0 -1px 20px;
            padding-left: 14px;
            padding-right: 14px;
            border: 0;
            box-shadow: none;
            border-radius: 6PX;
            box-shadow:0 1px 4px 0 rgb(0 0 0 / 17%);
        }

        .btn-text.btn-purple /* COR DO BOTÃO DE CUPOM - ALTERAR SE PREFEIR */ {
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
            max-width: 680px!important;
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
            color: #367eff !important;
        }

        /* MENSAGEM PIX */

        .pix-desc > p:nth-child(1)::after {
            content: "ATENÇÃO! O prazo de validade do código PIX é de 30 minutos após gerado. Efetue o pagamento dentro do prazo para garantir seus produtos.";
            font-size: 13px;
            color: {{$data['cor_loja']}};
            background: transparent;
            border:1px solid {{$data['cor_loja']}};
            padding: 10px;
            display: block;
            border-radius: 5px;
            margin: 20px auto;
        }

        /* MENSAGEM PIX DEPOIS DO PIX GERADO */

        .-description::after {
            content: "O nome do favorecido do PIX é mercadopago. Essa é o nome da nossa empresa recebedora do pagamento.";

            font-size: 12px;
            color: #367eff;
            border:1px solid #367eff;
            background: transparent;
            padding: 10px;
            display: block;
            border-radius: 5px;
            margin: 20px auto;
        }


        .holder-cols-checkout .box-checkout.active .box-title .holder-number {
            background: linear-gradient(0deg, {{$data['cor_loja']}} 0%, {{$data['cor_loja']}} 100%);
            border-radius: 20%;
        }

        .checkout-step .holder-icon {
            border-radius: 20%;
        }
        .btn-copy-paste {
            background-color: #004AAD;
        }

        /IMAGEM DE COMO PAGAR O PIX APÓS GERAR O PIX - @SABINOSS79/

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
    </style>  <script type="text/javascript">
        window.TOKEN = '';
        window.ENV = 'production';
        window.checkout = window.checkout || {};
        window.session = {
            upsell: false,
            page: 'checkout-address',
            auth: {
                name: '',
                email: ''
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



    <script>


    </script>



    <script>
        window.gandalf = {
            active: true,
            url: 'https://seguro.lojaliford.com/cart/recomm',
            env: 'production'
        }
    </script>
    <!-- Hotjar Tracking Code for https://pay.yampi.com.br -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:3285671,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script><script async="" src="https://static.hotjar.com/c/hotjar-3285671.js?sv=6"></script><script>
        !function(e,a,n,t,s,c){e.ana||((t=e.ana=function(){t.process?t.process.apply(t,arguments):t.queue.push(arguments)}).queue=[],t.t=+new Date,(s=a.createElement(n)).async=1,s.src="https://cdn.yampi.io/ana/ana.min.js?t="+864e5*Math.ceil(new Date/864e5),(c=a.getElementsByTagName(n)[0]).parentNode.insertBefore(s,c))}(window,document,"script");
    </script>

    <script>
        ana('init', 'checkout');

        window.anaParams = {
            store_id: 586266,
            store_profile: 'checkout'
        }
    </script>
    <script defer="" src="https://www.googleoptimize.com/optimize.js?id=OPT-N6QHJQM&amp;v=1.0" id="google-optimize-script"></script>
    <script>
        window.google_experiment_id = "tmS_uvucSrmAZNdgRKRuhA";
    </script>
    <style type="text/css">.jp-card.jp-card-safari.jp-card-identified .jp-card-front:before, .jp-card.jp-card-safari.jp-card-identified .jp-card-back:before {
            background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), -webkit-linear-gradient(-245deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%);
            background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), linear-gradient(-25deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%); }

        .jp-card.jp-card-ie-10.jp-card-flipped, .jp-card.jp-card-ie-11.jp-card-flipped {
            -webkit-transform: 0deg;
            -moz-transform: 0deg;
            -ms-transform: 0deg;
            -o-transform: 0deg;
            transform: 0deg; }
        .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-front, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-front {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            -o-transform: rotateY(0deg);
            transform: rotateY(0deg); }
        .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            -o-transform: rotateY(0deg);
            transform: rotateY(0deg); }
        .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back:after, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back:after {
            left: 18%; }
        .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back .jp-card-cvc, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back .jp-card-cvc {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -ms-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
            left: 5%; }
        .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back .jp-card-shiny, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back .jp-card-shiny {
            left: 84%; }
        .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back .jp-card-shiny:after, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back .jp-card-shiny:after {
            left: -480%;
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -ms-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg); }

        .jp-card.jp-card-ie-10.jp-card-amex .jp-card-back, .jp-card.jp-card-ie-11.jp-card-amex .jp-card-back {
            display: none; }

        .jp-card-logo {
            height: 36px;
            width: 60px;
            font-style: italic; }
        .jp-card-logo, .jp-card-logo:before, .jp-card-logo:after {
            box-sizing: border-box; }

        .jp-card-logo.jp-card-amex {
            text-transform: uppercase;
            font-size: 4px;
            font-weight: bold;
            color: white;
            background-image: repeating-radial-gradient(circle at center, #FFF 1px, #999 2px);
            background-image: repeating-radial-gradient(circle at center, #FFF 1px, #999 2px);
            border: 1px solid #EEE; }
        .jp-card-logo.jp-card-amex:before, .jp-card-logo.jp-card-amex:after {
            width: 28px;
            display: block;
            position: absolute;
            left: 16px; }
        .jp-card-logo.jp-card-amex:before {
            height: 28px;
            content: "american";
            top: 3px;
            text-align: left;
            padding-left: 2px;
            padding-top: 11px;
            background: #267AC3; }
        .jp-card-logo.jp-card-amex:after {
            content: "express";
            bottom: 11px;
            text-align: right;
            padding-right: 2px; }

        .jp-card.jp-card-amex.jp-card-flipped {
            -webkit-transform: none;
            -moz-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none; }

        .jp-card.jp-card-amex.jp-card-identified .jp-card-front:before, .jp-card.jp-card-amex.jp-card-identified .jp-card-back:before {
            background-color: #108168; }

        .jp-card.jp-card-amex.jp-card-identified .jp-card-front .jp-card-logo.jp-card-amex {
            opacity: 1; }

        .jp-card.jp-card-amex.jp-card-identified .jp-card-front .jp-card-cvc {
            visibility: visible; }

        .jp-card.jp-card-amex.jp-card-identified .jp-card-front:after {
            opacity: 1; }

        .jp-card-logo.jp-card-discover {
            background: #FF6600;
            color: #111;
            text-transform: uppercase;
            font-style: normal;
            font-weight: bold;
            font-size: 10px;
            text-align: center;
            overflow: hidden;
            z-index: 1;
            padding-top: 9px;
            letter-spacing: .03em;
            border: 1px solid #EEE; }
        .jp-card-logo.jp-card-discover:before, .jp-card-logo.jp-card-discover:after {
            content: " ";
            display: block;
            position: absolute; }
        .jp-card-logo.jp-card-discover:before {
            background: white;
            width: 200px;
            height: 200px;
            border-radius: 200px;
            bottom: -5%;
            right: -80%;
            z-index: -1; }
        .jp-card-logo.jp-card-discover:after {
            width: 8px;
            height: 8px;
            border-radius: 4px;
            top: 10px;
            left: 27px;
            background-color: #FF6600;
            background-image: -webkit-radial-gradient(#FF6600, #fff);
            background-image: radial-gradient(  #FF6600, #fff);
            content: "network";
            font-size: 4px;
            line-height: 24px;
            text-indent: -7px; }

        .jp-card .jp-card-front .jp-card-logo.jp-card-discover {
            right: 12%;
            top: 18%; }

        .jp-card.jp-card-discover.jp-card-identified .jp-card-front:before, .jp-card.jp-card-discover.jp-card-identified .jp-card-back:before {
            background-color: #86B8CF; }

        .jp-card.jp-card-discover.jp-card-identified .jp-card-logo.jp-card-discover {
            opacity: 1; }

        .jp-card.jp-card-discover.jp-card-identified .jp-card-front:after {
            -webkit-transition: 400ms;
            -moz-transition: 400ms;
            transition: 400ms;
            content: " ";
            display: block;
            background-color: #FF6600;
            background-image: -webkit-linear-gradient(#FF6600, #ffa366, #FF6600);
            background-image: linear-gradient(#FF6600, #ffa366, #FF6600);
            height: 50px;
            width: 50px;
            border-radius: 25px;
            position: absolute;
            left: 100%;
            top: 15%;
            margin-left: -25px;
            box-shadow: inset 1px 1px 3px 1px rgba(0, 0, 0, 0.5); }

        .jp-card-logo.jp-card-visa {
            background: white;
            text-transform: uppercase;
            color: #1A1876;
            text-align: center;
            font-weight: bold;
            font-size: 15px;
            line-height: 18px; }
        .jp-card-logo.jp-card-visa:before, .jp-card-logo.jp-card-visa:after {
            content: " ";
            display: block;
            width: 100%;
            height: 25%; }
        .jp-card-logo.jp-card-visa:before {
            background: #1A1876; }
        .jp-card-logo.jp-card-visa:after {
            background: #E79800; }

        .jp-card.jp-card-visa.jp-card-identified .jp-card-front:before, .jp-card.jp-card-visa.jp-card-identified .jp-card-back:before {
            background-color: #191278; }

        .jp-card.jp-card-visa.jp-card-identified .jp-card-logo.jp-card-visa {
            opacity: 1; }

        .jp-card-logo.jp-card-mastercard {
            color: white;
            font-weight: bold;
            text-align: center;
            font-size: 9px;
            line-height: 36px;
            z-index: 1;
            text-shadow: 1px 1px rgba(0, 0, 0, 0.6); }
        .jp-card-logo.jp-card-mastercard:before, .jp-card-logo.jp-card-mastercard:after {
            content: " ";
            display: block;
            width: 36px;
            top: 0;
            position: absolute;
            height: 36px;
            border-radius: 18px; }
        .jp-card-logo.jp-card-mastercard:before {
            left: 0;
            background: #FF0000;
            z-index: -1; }
        .jp-card-logo.jp-card-mastercard:after {
            right: 0;
            background: #FFAB00;
            z-index: -2; }

        .jp-card.jp-card-mastercard.jp-card-identified .jp-card-front .jp-card-logo.jp-card-mastercard, .jp-card.jp-card-mastercard.jp-card-identified .jp-card-back .jp-card-logo.jp-card-mastercard {
            box-shadow: none; }

        .jp-card.jp-card-mastercard.jp-card-identified .jp-card-front:before, .jp-card.jp-card-mastercard.jp-card-identified .jp-card-back:before {
            background-color: #0061A8; }

        .jp-card.jp-card-mastercard.jp-card-identified .jp-card-logo.jp-card-mastercard {
            opacity: 1; }

        .jp-card-logo.jp-card-maestro {
            color: white;
            font-weight: bold;
            text-align: center;
            font-size: 14px;
            line-height: 36px;
            z-index: 1;
            text-shadow: 1px 1px rgba(0, 0, 0, 0.6); }
        .jp-card-logo.jp-card-maestro:before, .jp-card-logo.jp-card-maestro:after {
            content: " ";
            display: block;
            width: 36px;
            top: 0;
            position: absolute;
            height: 36px;
            border-radius: 18px; }
        .jp-card-logo.jp-card-maestro:before {
            left: 0;
            background: #0064CB;
            z-index: -1; }
        .jp-card-logo.jp-card-maestro:after {
            right: 0;
            background: #CC0000;
            z-index: -2; }

        .jp-card.jp-card-maestro.jp-card-identified .jp-card-front .jp-card-logo.jp-card-maestro, .jp-card.jp-card-maestro.jp-card-identified .jp-card-back .jp-card-logo.jp-card-maestro {
            box-shadow: none; }

        .jp-card.jp-card-maestro.jp-card-identified .jp-card-front:before, .jp-card.jp-card-maestro.jp-card-identified .jp-card-back:before {
            background-color: #0B2C5F; }

        .jp-card.jp-card-maestro.jp-card-identified .jp-card-logo.jp-card-maestro {
            opacity: 1; }

        .jp-card-logo.jp-card-dankort {
            width: 60px;
            height: 36px;
            padding: 3px;
            border-radius: 8px;
            border: #000000 1px solid;
            background-color: #FFFFFF; }
        .jp-card-logo.jp-card-dankort .dk {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden; }
        .jp-card-logo.jp-card-dankort .dk:before {
            background-color: #ED1C24;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            display: block;
            border-radius: 6px; }
        .jp-card-logo.jp-card-dankort .dk:after {
            content: '';
            position: absolute;
            top: 50%;
            margin-top: -7.7px;
            right: 0;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 7px 7px 10px 0;
            border-color: transparent #ED1C24 transparent transparent;
            z-index: 1; }
        .jp-card-logo.jp-card-dankort .d, .jp-card-logo.jp-card-dankort .k {
            position: absolute;
            top: 50%;
            width: 50%;
            display: block;
            height: 15.4px;
            margin-top: -7.7px;
            background: white; }
        .jp-card-logo.jp-card-dankort .d {
            left: 0;
            border-radius: 0 8px 10px 0; }
        .jp-card-logo.jp-card-dankort .d:before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            display: block;
            background: #ED1C24;
            border-radius: 2px 4px 6px 0px;
            height: 5px;
            width: 7px;
            margin: -3px 0 0 -4px; }
        .jp-card-logo.jp-card-dankort .k {
            right: 0; }
        .jp-card-logo.jp-card-dankort .k:before, .jp-card-logo.jp-card-dankort .k:after {
            content: '';
            position: absolute;
            right: 50%;
            width: 0;
            height: 0;
            border-style: solid;
            margin-right: -1px; }
        .jp-card-logo.jp-card-dankort .k:before {
            top: 0;
            border-width: 8px 5px 0 0;
            border-color: #ED1C24 transparent transparent transparent; }
        .jp-card-logo.jp-card-dankort .k:after {
            bottom: 0;
            border-width: 0 5px 8px 0;
            border-color: transparent transparent #ED1C24 transparent; }

        .jp-card.jp-card-dankort.jp-card-identified .jp-card-front:before, .jp-card.jp-card-dankort.jp-card-identified .jp-card-back:before {
            background-color: #0055C7; }

        .jp-card.jp-card-dankort.jp-card-identified .jp-card-logo.jp-card-dankort {
            opacity: 1; }

        .jp-card-logo.jp-card-elo {
            height: 50px;
            width: 50px;
            border-radius: 100%;
            background: black;
            color: white;
            text-align: center;
            text-transform: lowercase;
            font-size: 21px;
            font-style: normal;
            letter-spacing: 1px;
            font-weight: bold;
            padding-top: 13px; }
        .jp-card-logo.jp-card-elo .e, .jp-card-logo.jp-card-elo .l, .jp-card-logo.jp-card-elo .o {
            display: inline-block;
            position: relative; }
        .jp-card-logo.jp-card-elo .e {
            -webkit-transform: rotate(-15deg);
            -moz-transform: rotate(-15deg);
            -ms-transform: rotate(-15deg);
            -o-transform: rotate(-15deg);
            transform: rotate(-15deg); }
        .jp-card-logo.jp-card-elo .o {
            position: relative;
            display: inline-block;
            width: 12px;
            height: 12px;
            right: 0;
            top: 7px;
            border-radius: 100%;
            background-image: -webkit-linear-gradient( yellow 50%, red 50%);
            background-image: linear-gradient( yellow 50%, red 50%);
            -webkit-transform: rotate(40deg);
            -moz-transform: rotate(40deg);
            -ms-transform: rotate(40deg);
            -o-transform: rotate(40deg);
            transform: rotate(40deg);
            text-indent: -9999px; }
        .jp-card-logo.jp-card-elo .o:before {
            content: "";
            position: absolute;
            width: 49%;
            height: 49%;
            background: black;
            border-radius: 100%;
            text-indent: -99999px;
            top: 25%;
            left: 25%; }

        .jp-card.jp-card-elo.jp-card-identified .jp-card-front:before, .jp-card.jp-card-elo.jp-card-identified .jp-card-back:before {
            background-color: #6F6969; }

        .jp-card.jp-card-elo.jp-card-identified .jp-card-logo.jp-card-elo {
            opacity: 1; }

        .jp-card-container {
            -webkit-perspective: 1000px;
            -moz-perspective: 1000px;
            perspective: 1000px;
            width: 350px;
            max-width: 100%;
            height: 200px;
            margin: auto;
            z-index: 1;
            position: relative; }

        .jp-card {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            line-height: 1;
            position: relative;
            width: 100%;
            height: 100%;
            min-width: 315px;
            border-radius: 10px;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            -o-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transition: all 400ms linear;
            -moz-transition: all 400ms linear;
            transition: all 400ms linear; }
        .jp-card > *, .jp-card > *:before, .jp-card > *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            font-family: inherit; }
        .jp-card.jp-card-flipped {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -ms-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden; }
        .jp-card .jp-card-front, .jp-card .jp-card-back {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            -o-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transition: all 400ms linear;
            -moz-transition: all 400ms linear;
            transition: all 400ms linear;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            overflow: hidden;
            border-radius: 10px;
            background: #DDD; }
        .jp-card .jp-card-front:before, .jp-card .jp-card-back:before {
            content: " ";
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            border-radius: 10px;
            -webkit-transition: all 400ms ease;
            -moz-transition: all 400ms ease;
            transition: all 400ms ease; }
        .jp-card .jp-card-front:after, .jp-card .jp-card-back:after {
            content: " ";
            display: block; }
        .jp-card .jp-card-front .jp-card-display, .jp-card .jp-card-back .jp-card-display {
            color: white;
            font-weight: normal;
            opacity: 0.5;
            -webkit-transition: opacity 400ms linear;
            -moz-transition: opacity 400ms linear;
            transition: opacity 400ms linear; }
        .jp-card .jp-card-front .jp-card-display.jp-card-focused, .jp-card .jp-card-back .jp-card-display.jp-card-focused {
            opacity: 1;
            font-weight: 700; }
        .jp-card .jp-card-front .jp-card-cvc, .jp-card .jp-card-back .jp-card-cvc {
            font-family: "Bitstream Vera Sans Mono", Consolas, Courier, monospace;
            font-size: 14px; }
        .jp-card .jp-card-front .jp-card-shiny, .jp-card .jp-card-back .jp-card-shiny {
            width: 50px;
            height: 35px;
            border-radius: 5px;
            background: #CCC;
            position: relative; }
        .jp-card .jp-card-front .jp-card-shiny:before, .jp-card .jp-card-back .jp-card-shiny:before {
            content: " ";
            display: block;
            width: 70%;
            height: 60%;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            background: #d9d9d9;
            position: absolute;
            top: 20%; }
        .jp-card .jp-card-front .jp-card-logo {
            position: absolute;
            opacity: 0;
            right: 5%;
            top: 8%;
            -webkit-transition: 400ms;
            -moz-transition: 400ms;
            transition: 400ms; }
        .jp-card .jp-card-front .jp-card-lower {
            width: 80%;
            position: absolute;
            left: 10%;
            bottom: 30px; }
        @media only screen and (max-width: 480px) {
            .jp-card .jp-card-front .jp-card-lower {
                width: 90%;
                left: 5%; } }
        .jp-card .jp-card-front .jp-card-lower .jp-card-cvc {
            visibility: hidden;
            float: right;
            position: relative;
            bottom: 5px; }
        .jp-card .jp-card-front .jp-card-lower .jp-card-number {
            font-family: "Bitstream Vera Sans Mono", Consolas, Courier, monospace;
            font-size: 24px;
            clear: both;
            margin-bottom: 30px; }
        .jp-card .jp-card-front .jp-card-lower .jp-card-expiry {
            font-family: "Bitstream Vera Sans Mono", Consolas, Courier, monospace;
            letter-spacing: 0em;
            position: relative;
            float: right;
            width: 25%; }
        .jp-card .jp-card-front .jp-card-lower .jp-card-expiry:before, .jp-card .jp-card-front .jp-card-lower .jp-card-expiry:after {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: bold;
            font-size: 7px;
            white-space: pre;
            display: block;
            opacity: .5; }
        .jp-card .jp-card-front .jp-card-lower .jp-card-expiry:before {
            content: attr(data-before);
            margin-bottom: 2px;
            font-size: 7px;
            text-transform: uppercase; }
        .jp-card .jp-card-front .jp-card-lower .jp-card-expiry:after {
            position: absolute;
            content: attr(data-after);
            text-align: right;
            right: 100%;
            margin-right: 5px;
            margin-top: 2px;
            bottom: 0; }
        .jp-card .jp-card-front .jp-card-lower .jp-card-name {
            text-transform: uppercase;
            font-family: "Bitstream Vera Sans Mono", Consolas, Courier, monospace;
            font-size: 20px;
            max-height: 45px;
            position: absolute;
            bottom: 0;
            width: 190px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: horizontal;
            overflow: hidden;
            text-overflow: ellipsis; }
        .jp-card .jp-card-back {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -ms-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg); }
        .jp-card .jp-card-back .jp-card-bar {
            background-color: #444;
            background-image: -webkit-linear-gradient(#444, #333);
            background-image: linear-gradient(#444, #333);
            width: 100%;
            height: 20%;
            position: absolute;
            top: 10%; }
        .jp-card .jp-card-back:after {
            content: " ";
            display: block;
            background-color: #FFF;
            background-image: -webkit-linear-gradient(#FFF, #FFF);
            background-image: linear-gradient(#FFF, #FFF);
            width: 80%;
            height: 16%;
            position: absolute;
            top: 40%;
            left: 2%; }
        .jp-card .jp-card-back .jp-card-cvc {
            position: absolute;
            top: 40%;
            left: 85%;
            -webkit-transition-delay: 600ms;
            -moz-transition-delay: 600ms;
            transition-delay: 600ms; }
        .jp-card .jp-card-back .jp-card-shiny {
            position: absolute;
            top: 66%;
            left: 2%; }
        .jp-card .jp-card-back .jp-card-shiny:after {
            content: "This card has been issued by Jesse Pollak and is licensed for anyone to use anywhere for free.AIt comes with no warranty.A  For support issues, please visit: github.com/jessepollak/card.";
            position: absolute;
            left: 120%;
            top: 5%;
            color: white;
            font-size: 7px;
            width: 230px;
            opacity: .5; }
        .jp-card.jp-card-identified {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); }
        .jp-card.jp-card-identified .jp-card-front, .jp-card.jp-card-identified .jp-card-back {
            background-color: #000;
            background-color: rgba(0, 0, 0, 0.5); }
        .jp-card.jp-card-identified .jp-card-front:before, .jp-card.jp-card-identified .jp-card-back:before {
            -webkit-transition: all 400ms ease;
            -moz-transition: all 400ms ease;
            transition: all 400ms ease;
            background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 70% 70%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 90% 20%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 15% 80%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), -webkit-linear-gradient(-245deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%);
            background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 70% 70%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 90% 20%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 15% 80%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), linear-gradient(-25deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%);
            opacity: 1; }
        .jp-card.jp-card-identified .jp-card-front .jp-card-logo, .jp-card.jp-card-identified .jp-card-back .jp-card-logo {
            box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.3); }
        .jp-card.jp-card-identified.no-radial-gradient .jp-card-front:before, .jp-card.jp-card-identified.no-radial-gradient .jp-card-back:before {
            background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), -webkit-linear-gradient(-245deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%);
            background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), linear-gradient(-25deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%); }
    </style><script async="" src="https://script.hotjar.com/modules.6fed24b60091da3b9aa3.js" charset="utf-8"></script></head>

<body class="liord2 checkout-address custom-checkout mercadopago centered-logo">

    <div class="inner-body">

        <header class="clearfix" style="background: {{$data['cor_loja']}}">
            <div class="container clearfix">
                <div class="inner-header -center">
                    <div class="holder-logo pull-left hcenter flex  ">
                        <a id="header-logo" href="#">

                            <div class="logo">
                                <img src="http://{{$data['img_loja']}}" class="img-logo" />
                            </div>
                            <!-- /.logo -->
                        </a>
                    </div>
                    <!-- /.holder-logo -->

                    <div class="flex-holder flex hcenter end">
                        <div class="item-security pull-right black-70">
                            <svg width="89" height="19" viewBox="0 0 89 19" fill="#898792" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.75 14.1875V8.5C9.75 8.05127 9.38623 7.6875 8.9375 7.6875L2.4375 7.6875C1.98877 7.6875 1.625 8.05127 1.625 8.5L1.625 14.1875C1.625 14.6362 1.98877 15 2.4375 15H8.9375C9.38623 15 9.75 14.6362 9.75 14.1875ZM11.375 8.5V14.1875C11.375 15.5337 10.2837 16.625 8.9375 16.625H2.4375C1.09131 16.625 -5.8844e-08 15.5337 0 14.1875L2.48609e-07 8.5C3.07453e-07 7.15381 1.09131 6.0625 2.4375 6.0625L8.9375 6.0625C10.2837 6.0625 11.375 7.15381 11.375 8.5Z"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.6875 3.625C4.79004 3.625 4.0625 4.35254 4.0625 5.25V6.875H2.4375V5.25C2.4375 3.45507 3.89257 2 5.6875 2C7.48243 2 8.9375 3.45507 8.9375 5.25V6.875H7.3125V5.25C7.3125 4.35254 6.58496 3.625 5.6875 3.625Z"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 10.125L6.5 12.5625H4.875L4.875 10.125H6.5Z"></path>
                                <path d="M23.136 0.11C23.73 0.11 24.236 0.205333 24.654 0.396C25.072 0.586667 25.391 0.861666 25.611 1.221C25.831 1.58033 25.941 2.01667 25.941 2.53C25.941 3.04333 25.831 3.47967 25.611 3.839C25.391 4.19833 25.072 4.47333 24.654 4.664C24.236 4.85467 23.73 4.95 23.136 4.95H21.695V7.37H19.803V0.11H23.136ZM22.839 3.531C23.235 3.531 23.532 3.45033 23.73 3.289C23.9353 3.12033 24.038 2.86733 24.038 2.53C24.038 2.19267 23.9353 1.94333 23.73 1.782C23.532 1.61333 23.235 1.529 22.839 1.529H21.695V3.531H22.839Z"></path>
                                <path d="M33.0094 7.37H31.0624L30.5564 5.731H28.0704L27.5534 7.37H25.6504L28.2024 0.11H30.4684L33.0094 7.37ZM28.4224 4.444H30.2044L29.3134 1.507L28.4224 4.444Z"></path>
                                <path d="M36.5882 7.48C35.9429 7.48 35.3672 7.337 34.8612 7.051C34.3626 6.765 33.9739 6.34333 33.6952 5.786C33.4166 5.22867 33.2772 4.55033 33.2772 3.751C33.2772 2.96633 33.4239 2.29533 33.7172 1.738C34.0106 1.18067 34.4286 0.751667 34.9712 0.451C35.5212 0.150333 36.1666 0 36.9072 0C37.7286 0 38.3922 0.150333 38.8982 0.451C39.4042 0.744333 39.7966 1.21367 40.0752 1.859L38.3262 2.552C38.2309 2.178 38.0622 1.90667 37.8202 1.738C37.5782 1.56933 37.2776 1.485 36.9182 1.485C36.5589 1.485 36.2509 1.573 35.9942 1.749C35.7376 1.91767 35.5432 2.17067 35.4112 2.508C35.2792 2.838 35.2132 3.24867 35.2132 3.74C35.2132 4.25333 35.2792 4.68233 35.4112 5.027C35.5506 5.37167 35.7522 5.62833 36.0162 5.797C36.2876 5.95833 36.6212 6.039 37.0172 6.039C37.2299 6.039 37.4242 6.01333 37.6002 5.962C37.7762 5.91067 37.9302 5.83733 38.0622 5.742C38.1942 5.63933 38.2969 5.51467 38.3702 5.368C38.4436 5.214 38.4802 5.03433 38.4802 4.829V4.719H36.8192V3.454H40.0862V7.37H38.7992L38.6562 5.665L38.9642 5.929C38.8102 6.42767 38.5316 6.81267 38.1282 7.084C37.7322 7.348 37.2189 7.48 36.5882 7.48Z"></path>
                                <path d="M48.1344 7.37H46.1874L45.6814 5.731H43.1954L42.6784 7.37H40.7754L43.3274 0.11H45.5934L48.1344 7.37ZM43.5474 4.444H45.3294L44.4384 1.507L43.5474 4.444Z"></path>
                                <path d="M57.3828 0.11V7.37H55.7108V4.037L55.7658 1.804H55.7438L53.9508 7.37H52.4218L50.6288 1.804H50.6068L50.6618 4.037V7.37H48.9788V0.11H51.6738L52.8178 3.806L53.2248 5.346H53.2468L53.6648 3.817L54.7978 0.11H57.3828Z"></path>
                                <path d="M58.9905 7.37V0.11H64.6445V1.573H60.8825V3.047H63.8745V4.422H60.8825V5.907H64.7875V7.37H58.9905Z"></path>
                                <path d="M72.4749 0.11V7.37H70.3739L68.1189 3.443L67.5689 2.365H67.5579L67.6019 3.707V7.37H65.9299V0.11H68.0309L70.2859 4.037L70.8359 5.115H70.8469L70.8029 3.773V0.11H72.4749Z"></path>
                                <path d="M80.1883 0.11V1.573H77.8233V7.37H75.9313V1.573H73.5553V0.11H80.1883Z"></path>
                                <path d="M84.225 0C84.9583 0 85.589 0.150333 86.117 0.451C86.6523 0.744333 87.063 1.16967 87.349 1.727C87.635 2.28433 87.778 2.95533 87.778 3.74C87.778 4.52467 87.635 5.19567 87.349 5.753C87.063 6.31033 86.6523 6.73933 86.117 7.04C85.589 7.33333 84.9583 7.48 84.225 7.48C83.4917 7.48 82.8573 7.33333 82.322 7.04C81.7867 6.73933 81.376 6.31033 81.09 5.753C80.804 5.19567 80.661 4.52467 80.661 3.74C80.661 2.95533 80.804 2.28433 81.09 1.727C81.376 1.16967 81.7867 0.744333 82.322 0.451C82.8573 0.150333 83.4917 0 84.225 0ZM84.225 1.485C83.873 1.485 83.576 1.56933 83.334 1.738C83.092 1.90667 82.9087 2.15967 82.784 2.497C82.6593 2.827 82.597 3.24133 82.597 3.74C82.597 4.23133 82.6593 4.64567 82.784 4.983C82.9087 5.32033 83.092 5.57333 83.334 5.742C83.576 5.91067 83.873 5.995 84.225 5.995C84.577 5.995 84.8703 5.91067 85.105 5.742C85.347 5.57333 85.5303 5.32033 85.655 4.983C85.7797 4.64567 85.842 4.23133 85.842 3.74C85.842 3.24133 85.7797 2.827 85.655 2.497C85.5303 2.15967 85.347 1.90667 85.105 1.738C84.8703 1.56933 84.577 1.485 84.225 1.485Z"></path>
                                <path d="M21.03 18.37V13.84C21.03 13.7067 21.03 13.57 21.03 13.43C21.0367 13.2833 21.0433 13.13 21.05 12.97C20.8233 13.19 20.5633 13.38 20.27 13.54C19.9833 13.6933 19.6867 13.8033 19.38 13.87L19.18 12.94C19.32 12.92 19.4833 12.8733 19.67 12.8C19.8567 12.7267 20.05 12.6333 20.25 12.52C20.45 12.4067 20.6333 12.2867 20.8 12.16C20.9667 12.0267 21.0967 11.8967 21.19 11.77H22.09V18.37H21.03Z"></path>
                                <path d="M26.1634 18.47C25.3701 18.47 24.7468 18.1833 24.2934 17.61C23.8468 17.03 23.6234 16.1833 23.6234 15.07C23.6234 13.9567 23.8468 13.1133 24.2934 12.54C24.7468 11.96 25.3701 11.67 26.1634 11.67C26.9634 11.67 27.5868 11.96 28.0334 12.54C28.4868 13.1133 28.7134 13.9567 28.7134 15.07C28.7134 16.1833 28.4868 17.03 28.0334 17.61C27.5868 18.1833 26.9634 18.47 26.1634 18.47ZM26.1634 17.56C26.4834 17.56 26.7501 17.47 26.9634 17.29C27.1834 17.1033 27.3468 16.8267 27.4534 16.46C27.5668 16.0867 27.6234 15.6233 27.6234 15.07C27.6234 14.5167 27.5668 14.0567 27.4534 13.69C27.3468 13.3167 27.1834 13.04 26.9634 12.86C26.7501 12.6733 26.4834 12.58 26.1634 12.58C25.8434 12.58 25.5734 12.6733 25.3534 12.86C25.1401 13.04 24.9801 13.3167 24.8734 13.69C24.7668 14.0567 24.7134 14.5167 24.7134 15.07C24.7134 15.6233 24.7668 16.0867 24.8734 16.46C24.9801 16.8267 25.1401 17.1033 25.3534 17.29C25.5734 17.47 25.8434 17.56 26.1634 17.56Z"></path>
                                <path d="M32.4427 18.47C31.6494 18.47 31.0261 18.1833 30.5727 17.61C30.1261 17.03 29.9027 16.1833 29.9027 15.07C29.9027 13.9567 30.1261 13.1133 30.5727 12.54C31.0261 11.96 31.6494 11.67 32.4427 11.67C33.2427 11.67 33.8661 11.96 34.3127 12.54C34.7661 13.1133 34.9927 13.9567 34.9927 15.07C34.9927 16.1833 34.7661 17.03 34.3127 17.61C33.8661 18.1833 33.2427 18.47 32.4427 18.47ZM32.4427 17.56C32.7627 17.56 33.0294 17.47 33.2427 17.29C33.4627 17.1033 33.6261 16.8267 33.7327 16.46C33.8461 16.0867 33.9027 15.6233 33.9027 15.07C33.9027 14.5167 33.8461 14.0567 33.7327 13.69C33.6261 13.3167 33.4627 13.04 33.2427 12.86C33.0294 12.6733 32.7627 12.58 32.4427 12.58C32.1227 12.58 31.8527 12.6733 31.6327 12.86C31.4194 13.04 31.2594 13.3167 31.1527 13.69C31.0461 14.0567 30.9927 14.5167 30.9927 15.07C30.9927 15.6233 31.0461 16.0867 31.1527 16.46C31.2594 16.8267 31.4194 17.1033 31.6327 17.29C31.8527 17.47 32.1227 17.56 32.4427 17.56Z"></path>
                                <path d="M37.362 18.37L41.682 11.77H42.602L38.292 18.37H37.362ZM37.622 11.67C37.962 11.67 38.2554 11.7467 38.502 11.9C38.7554 12.0533 38.9487 12.2667 39.082 12.54C39.222 12.8133 39.292 13.1367 39.292 13.51C39.292 13.8767 39.222 14.2 39.082 14.48C38.9487 14.7533 38.7554 14.9667 38.502 15.12C38.2554 15.2733 37.962 15.35 37.622 15.35C37.2887 15.35 36.9954 15.2733 36.742 15.12C36.4887 14.9667 36.292 14.7533 36.152 14.48C36.0187 14.2 35.952 13.8767 35.952 13.51C35.952 13.1367 36.0187 12.8133 36.152 12.54C36.292 12.2667 36.4887 12.0533 36.742 11.9C36.9954 11.7467 37.2887 11.67 37.622 11.67ZM37.622 12.45C37.4554 12.45 37.312 12.4933 37.192 12.58C37.072 12.66 36.982 12.78 36.922 12.94C36.862 13.0933 36.832 13.2833 36.832 13.51C36.832 13.73 36.862 13.92 36.922 14.08C36.982 14.24 37.072 14.36 37.192 14.44C37.312 14.52 37.4554 14.56 37.622 14.56C37.7954 14.56 37.942 14.52 38.062 14.44C38.182 14.36 38.272 14.24 38.332 14.08C38.392 13.92 38.422 13.73 38.422 13.51C38.422 13.2833 38.392 13.0933 38.332 12.94C38.272 12.78 38.182 12.66 38.062 12.58C37.942 12.4933 37.7954 12.45 37.622 12.45ZM42.342 14.79C42.682 14.79 42.9754 14.8667 43.222 15.02C43.4754 15.1733 43.6687 15.39 43.802 15.67C43.942 15.9433 44.012 16.2633 44.012 16.63C44.012 17.0033 43.942 17.3267 43.802 17.6C43.6687 17.8733 43.4754 18.0867 43.222 18.24C42.9754 18.3933 42.682 18.47 42.342 18.47C42.0087 18.47 41.7154 18.3933 41.462 18.24C41.2087 18.0867 41.012 17.8733 40.872 17.6C40.7387 17.3267 40.672 17.0033 40.672 16.63C40.672 16.2633 40.7387 15.9433 40.872 15.67C41.012 15.39 41.2087 15.1733 41.462 15.02C41.7154 14.8667 42.0087 14.79 42.342 14.79ZM42.342 15.58C42.1754 15.58 42.032 15.62 41.912 15.7C41.792 15.78 41.702 15.9 41.642 16.06C41.582 16.2133 41.552 16.4033 41.552 16.63C41.552 16.85 41.582 17.04 41.642 17.2C41.702 17.36 41.792 17.4833 41.912 17.57C42.032 17.65 42.1754 17.69 42.342 17.69C42.5154 17.69 42.662 17.65 42.782 17.57C42.902 17.4833 42.992 17.36 43.052 17.2C43.112 17.04 43.142 16.85 43.142 16.63C43.142 16.41 43.112 16.22 43.052 16.06C42.992 15.9 42.902 15.78 42.782 15.7C42.662 15.62 42.5154 15.58 42.342 15.58Z"></path>
                                <path d="M50.8628 11.67C51.4561 11.67 51.9695 11.7833 52.4028 12.01C52.8361 12.23 53.2028 12.5567 53.5028 12.99L52.7828 13.68C52.5295 13.2933 52.2428 13.0167 51.9228 12.85C51.6095 12.6767 51.2361 12.59 50.8028 12.59C50.4828 12.59 50.2195 12.6333 50.0128 12.72C49.8061 12.8067 49.6528 12.9233 49.5528 13.07C49.4595 13.21 49.4128 13.37 49.4128 13.55C49.4128 13.7567 49.4828 13.9367 49.6228 14.09C49.7695 14.2433 50.0395 14.3633 50.4328 14.45L51.7728 14.75C52.4128 14.89 52.8661 15.1033 53.1328 15.39C53.3995 15.6767 53.5328 16.04 53.5328 16.48C53.5328 16.8867 53.4228 17.24 53.2028 17.54C52.9828 17.84 52.6761 18.07 52.2828 18.23C51.8961 18.39 51.4395 18.47 50.9128 18.47C50.4461 18.47 50.0261 18.41 49.6528 18.29C49.2795 18.17 48.9528 18.0067 48.6728 17.8C48.3928 17.5933 48.1628 17.3567 47.9828 17.09L48.7228 16.35C48.8628 16.5833 49.0395 16.7933 49.2528 16.98C49.4661 17.16 49.7128 17.3 49.9928 17.4C50.2795 17.5 50.5961 17.55 50.9428 17.55C51.2495 17.55 51.5128 17.5133 51.7328 17.44C51.9595 17.3667 52.1295 17.26 52.2428 17.12C52.3628 16.9733 52.4228 16.8 52.4228 16.6C52.4228 16.4067 52.3561 16.2367 52.2228 16.09C52.0961 15.9433 51.8561 15.83 51.5028 15.75L50.0528 15.42C49.6528 15.3333 49.3228 15.21 49.0628 15.05C48.8028 14.89 48.6095 14.6967 48.4828 14.47C48.3561 14.2367 48.2928 13.9767 48.2928 13.69C48.2928 13.3167 48.3928 12.98 48.5928 12.68C48.7995 12.3733 49.0961 12.13 49.4828 11.95C49.8695 11.7633 50.3295 11.67 50.8628 11.67Z"></path>
                                <path d="M55.0288 18.37V11.77H59.8088V12.69H56.0988V14.59H58.9988V15.49H56.0988V17.45H59.9488V18.37H55.0288Z"></path>
                                <path d="M63.9491 18.47C63.3291 18.47 62.7924 18.3333 62.3391 18.06C61.8857 17.7867 61.5324 17.4 61.2791 16.9C61.0257 16.3933 60.8991 15.7833 60.8991 15.07C60.8991 14.37 61.0291 13.7667 61.2891 13.26C61.5557 12.7533 61.9291 12.3633 62.4091 12.09C62.8957 11.81 63.4524 11.67 64.0791 11.67C64.7657 11.67 65.3191 11.7967 65.7391 12.05C66.1657 12.3033 66.5057 12.6967 66.7591 13.23L65.7691 13.7C65.6424 13.3333 65.4324 13.06 65.1391 12.88C64.8524 12.6933 64.5024 12.6 64.0891 12.6C63.6757 12.6 63.3124 12.6967 62.9991 12.89C62.6924 13.0833 62.4524 13.3667 62.2791 13.74C62.1057 14.1067 62.0191 14.55 62.0191 15.07C62.0191 15.5967 62.0957 16.0467 62.2491 16.42C62.4024 16.7867 62.6324 17.0667 62.9391 17.26C63.2524 17.4533 63.6357 17.55 64.0891 17.55C64.3357 17.55 64.5657 17.52 64.7791 17.46C64.9924 17.3933 65.1791 17.3 65.3391 17.18C65.4991 17.0533 65.6224 16.8967 65.7091 16.71C65.8024 16.5167 65.8491 16.29 65.8491 16.03V15.84H63.9291V14.97H66.7991V18.37H65.9991L65.9391 17.04L66.1391 17.14C65.9791 17.56 65.7124 17.8867 65.3391 18.12C64.9724 18.3533 64.5091 18.47 63.9491 18.47Z"></path>
                                <path d="M73.7654 11.77V15.84C73.7654 16.7133 73.5354 17.37 73.0754 17.81C72.6154 18.25 71.9454 18.47 71.0654 18.47C70.1987 18.47 69.5321 18.25 69.0654 17.81C68.6054 17.37 68.3754 16.7133 68.3754 15.84V11.77H69.4454V15.71C69.4454 16.33 69.5787 16.79 69.8454 17.09C70.112 17.39 70.5187 17.54 71.0654 17.54C71.6187 17.54 72.0287 17.39 72.2954 17.09C72.5621 16.79 72.6954 16.33 72.6954 15.71V11.77H73.7654Z"></path>
                                <path d="M78.2852 11.77C78.9919 11.77 79.5519 11.9467 79.9652 12.3C80.3852 12.6533 80.5952 13.13 80.5952 13.73C80.5952 14.35 80.3852 14.83 79.9652 15.17C79.5519 15.5033 78.9919 15.67 78.2852 15.67L78.1852 15.73H76.6552V18.37H75.5952V11.77H78.2852ZM78.2052 14.84C78.6386 14.84 78.9586 14.7533 79.1652 14.58C79.3786 14.4 79.4852 14.1267 79.4852 13.76C79.4852 13.4 79.3786 13.13 79.1652 12.95C78.9586 12.77 78.6386 12.68 78.2052 12.68H76.6552V14.84H78.2052ZM78.8352 15.06L80.9852 18.37H79.7552L77.9152 15.48L78.8352 15.06Z"></path>
                                <path d="M84.9954 11.67C85.6354 11.67 86.1887 11.8067 86.6554 12.08C87.122 12.3533 87.482 12.7433 87.7354 13.25C87.9887 13.7567 88.1154 14.3633 88.1154 15.07C88.1154 15.7767 87.9887 16.3833 87.7354 16.89C87.482 17.3967 87.122 17.7867 86.6554 18.06C86.1887 18.3333 85.6354 18.47 84.9954 18.47C84.3621 18.47 83.812 18.3333 83.3454 18.06C82.8787 17.7867 82.5187 17.3967 82.2654 16.89C82.0121 16.3833 81.8854 15.7767 81.8854 15.07C81.8854 14.3633 82.0121 13.7567 82.2654 13.25C82.5187 12.7433 82.8787 12.3533 83.3454 12.08C83.812 11.8067 84.3621 11.67 84.9954 11.67ZM84.9954 12.6C84.5821 12.6 84.2254 12.6967 83.9254 12.89C83.6321 13.0833 83.4054 13.3633 83.2454 13.73C83.0854 14.0967 83.0054 14.5433 83.0054 15.07C83.0054 15.59 83.0854 16.0367 83.2454 16.41C83.4054 16.7767 83.6321 17.0567 83.9254 17.25C84.2254 17.4433 84.5821 17.54 84.9954 17.54C85.4154 17.54 85.7721 17.4433 86.0654 17.25C86.3654 17.0567 86.5954 16.7767 86.7554 16.41C86.9154 16.0367 86.9954 15.59 86.9954 15.07C86.9954 14.5433 86.9154 14.0967 86.7554 13.73C86.5954 13.3633 86.3654 13.0833 86.0654 12.89C85.7721 12.6967 85.4154 12.6 84.9954 12.6Z"></path>
                            </svg>

                        </div>

                        <a href="https://seguro.lojaliford.com/cart" class="item-cart pull-right black-70 ml30 mr10">
                            <div class="holder-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="#898792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 25C20 25.5523 19.5523 26 19 26C18.4477 26 18 25.5523 18 25C18 24.4477 18.4477 24 19 24C19.5523 24 20 24.4477 20 25Z"></path>
                                    <path d="M14 25C14 25.5523 13.5523 26 13 26C12.4477 26 12 25.5523 12 25C12 24.4477 12.4477 24 13 24C13.5523 24 14 24.4477 14 25Z"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.26541 7C8.75836 7 10.0241 8.09779 10.2353 9.57574L11.7446 20.1414C11.815 20.6341 12.2369 21 12.7346 21L22 21V23H12.7346C11.2416 23 9.97588 21.9022 9.76474 20.4243L8.25536 9.85858C8.18498 9.36593 7.76306 9 7.26541 9L6 9L6 7L7.26541 7Z"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9H21.9384C23.8902 9 25.3222 10.8342 24.8489 12.7276L23.8489 16.7276C23.515 18.0631 22.315 19 20.9384 19H11V17H20.9384C21.3973 17 21.7973 16.6877 21.9086 16.2425L22.9086 12.2425C23.0664 11.6114 22.589 11 21.9384 11H12V9Z"></path>
                                </svg>


                                <div class="cart-qtd flex all-center">
                                    1
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

                <a href="javascript:" class="st-pusher">
                </a>

            </div><!-- /.container -->
        </header>

        <div class="content clearfix">
            <div class="holder-countdown" style="background: {{$data['cor_loja']}};">
                <div class="container">
                    <div class="countdown-text">
                        <p><strong>{{ strtoupper($data['alert_text'] ?? '') }}</strong></p>
                    </div>

                </div>
            </div>

            <div class="container clearfix">
                <div class="recomm-cart checkout"></div><!-- /.recomm -->
            </div>

            <div class="container container-pjax clearfix">
                <div class="container-promocode active-address text-center">

                    <div class="holder-cols-checkout">

                        <ul class="steps-checkout mb20 clearfix hide ">
                            <li class="checkout-step disabled">
                                <div class="connect" style="background: {{$data['cor_loja']}};"></div>
                                <div class="holder-icon" style="background: {{$data['cor_loja']}};">1</div>
                                <div class="info">Informações pessoais</div>
                                <a href="javascript:" data-url="https://seguro.lojaliford.com/checkout" class="link-abs active" data-target=".box-checkout"></a>
                            </li>

                            <li class="checkout-step enabled">
                                <div class="connect" style="background: {{$data['cor_loja']}};"></div>
                                <div class="holder-icon" style="background: {{$data['cor_loja']}};">2</div>
                                <div class="info">Entrega</div>
                                <a href="javascript:"  class="link-abs disabled" data-target=".box-checkout"></a>
                            </li>

                            <li class="checkout-step disabled">
                                <div class="connect"></div>
                                <div class="holder-icon" style="background: {{$data['cor_loja']}};">
                                    3
                                </div>
                                <div class="info">Pagamento</div>
                                <a href="javascript:" data-url="https://seguro.lojaliford.com/checkout/payment" class="link-abs " data-target=".box-checkout"></a>
                            </li>
                        </ul>

                        <div class="clearfix col-checkout-holder">

                            <div class="col-checkout col-1">
                                <div class="box-checkout box-customer" id="botao_edita" data-next=".box-addresses">

                                    <div class="box-title">
                                        <div class="holder-number">1</div><!-- /.holder-number -->
                                        <div class="title ctx-title f-h2 bold">
                                            Identifique-se
                                            <i class="icon-complete ml5 fa fa-check green"></i>
                                        </div><!-- /.f-h2 -->
                                        <div class="desc mb20">
                                            Utilizaremos seu e-mail para: Identificar seu perfil, histórico de compra, notificação de pedidos e carrinho de compras.
                                        </div>
                                    </div><!-- /.box-title -->

                                    <div class="infos black-80 f14">
                                        <div class="f16 medium mb10">
                                            {{$data['nome_completo']}}
                                        </div><!-- /.f16 -->
                                        <div class="mb5">{{$data['email']}}</div>
                                        <div>
                                            CPF
                                            <span class="cpf">{{$data['cpf']}}</span>
                                        </div>
                                        <div class="edit">
                                            <span class="icon icon-pencil"></span>
                                            <span class="tooltip2">
    <div class="tt-content-holder" style="width: auto">
        <div class="tt-content bold text-center">
                            <div class="tt-line">
                    Editar
                </div>
                    </div>
    </div>
</span>    </div><!-- /.edit -->
                                    </div><!-- /.infos -->


                                    <div class="overlay-spinner overlay-spinner-box">
                                        <div class="spinner spinner-grey"></div><!-- /.spinner spinner-grey -->
                                    </div><!-- /.spinner-box -->
                                </div><!-- /.box-checkout -->

                                <div class="box-checkout box-addresses active hide" id="div_entrega" style="display: none !important;" data-url="https://seguro.lojaliford.com/checkout/address" data-target=".box-addresses">
                                    <div class="box-title">
                                        <div class="holder-number">2</div><!-- /.holder-number -->
                                        <div class="title f-h2 ctx-title bold">
                                            Entrega
                                            <i class="icon-complete ml5 fa fa-check green"></i>
                                        </div><!-- /.f-h2 -->
                                        <div class="desc mb5 block">
                                            Cadastre ou selecione um endereço
                                        </div>
                                    </div><!-- /.box-title -->
                                    <a href="javascript:" class="link-box btn-create-address mt20 mb8 btn btn-tertiary btn-hp0">
                                        + Novo endereço
                                    </a>
                                    <div class="infos black-80 f14">
                                        <span class="medium mb5 block">Endereço para entrega:</span>
                                        Rua Darvin Brandão, 22 - Costa Barros <br>

                                        Complemento: 123 <br>

                                        Rio de Janeiro-RJ | CEP <span class="zipcode">21515-210</span>

                                        <span class="medium mb5 mt15 block">Forma de entrega:</span>
                                        <span>
					Correios© - PAC (5 a 16 dias úteis)
											Grátis

									</span>
                                        <div class="edit">
                                            <span class="icon icon-pencil"></span>
                                            <span class="btn-label -mobile -block bold f9 mt3 black-40">Editar</span>
                                            <span class="-desktop">
                    <span class="tooltip2">
    <div class="tt-content-holder" style="width: auto">
        <div class="tt-content bold text-center">
                            <div class="tt-line">
                    Editar
                </div>
                    </div>
    </div>
</span>                </span>
                                        </div><!-- /.edit -->
                                    </div><!-- /.infos -->


                                    <div class="box-content">

                                        <form id="form-checkout-shipment" action="javascript:" data-update="" data-store="https://seguro.lojaliford.com/customers/147019108/addresses" data-url="https://seguro.lojaliford.com/shipping/zipcode" class="form-horizontal clearfix text-left form-address hide" method="POST">
                                            <div class="clearfix">
                                                <a href="javascript:" class="btn-close-create-address ml10 mt20 mb5 btn btn-tertiary btn-hp0">
                                                    <i class="fa fa-angle-left bold mr5"></i> Voltar
                                                </a>
                                            </div><!-- /.clearfix -->
                                            <div class="clearfix group-first mt5">
                                                <div class="form-group w-50">
                                                    <label for="zipcode" class="label-control block">
                                                        CEP
                                                    </label>

                                                    <div class="holder-input holder-input-zipcode invalid">
                                                        <input type="tel" name="zipcode" id="zipcode" class="input input-validate required zipcode minlength" minlength="9" autofocus="" value="" maxlength="9">
                                                        <span class="spinner spinner-grey spinner-form"></span>
                                                    </div><!-- /.holder-input -->
                                                    <div id="zipcode_errors" class="error-block"></div><!-- /.error-block -->
                                                </div><!-- /.form-group w-50 -->

                                                <div class="form-group w-50">
                                                    <div class="city-infos hide black-60 f13">
                                                        <span class="city-name"></span>
                                                        /
                                                        <span class="city-uf"></span>
                                                    </div>
                                                </div><!-- /.form-group w-50 -->

                                            </div><!-- /.clearfix -->

                                            <div class="group-form hide">
                                                <div class="form-group w-100">
                                                    <label for="street" class="label-control block">Endereço</label>
                                                    <div class="holder-input invalid">
                                                        <input type="street" name="street" id="street" class="input input-validate required street minlength" minlength="5" value="">
                                                    </div><!-- /.holder-input -->
                                                    <div id="street_errors" class="error-block"></div><!-- /.error-block -->
                                                </div><!-- /.form-group w-50 -->

                                                <div class="form-group w-38 keep-size -padding-right">
                                                    <label for="number" class="label-control block">Número</label>
                                                    <div class="holder-input invalid">
                                                        <input type="text" maxlength="9" name="number" id="number" class="input input-validate required" value="">
                                                    </div><!-- /.holder-input -->
                                                    <div id="number_errors" class="error-block"></div><!-- /.error-block -->
                                                </div><!-- /.form-group w-50 -->

                                                <div class="form-group w-62 keep-size -padding-left">
                                                    <label for="neighborhood" class="label-control block">Bairro</label>
                                                    <div class="holder-input invalid">
                                                        <input type="neighborhood" name="neighborhood" id="neighborhood" class="input input-validate required neighborhood minlength maxlength" minlength="3" maxlength="40" value="" data-error-message-maxlength="Limite de 40 caracteres foi excedido.">
                                                    </div><!-- /.holder-input -->
                                                    <div id="neighborhood_errors" class="error-block"></div><!-- /.error-block -->
                                                </div><!-- /.form-group w-50 -->

                                                <div class="form-group w-100">
                                                    <label for="address_complement" class="label-control block">
                                                        Complemento <span class="f11 black-60">(opcional)</span>
                                                    </label>
                                                    <div class="holder-input">
                                                        <input type="text" name="complement" id="address_complement" class="input address_complement js-check" value="" maxlength="40">
                                                    </div><!-- /.holder-input -->
                                                    <div id="complement_errors" class="error-block"></div><!-- /.error-block -->
                                                </div><!-- /.form-group w-50 -->

                                                <div class="form-group w-100">
                                                    <label for="receiver" class="label-control block">Destinatário</label>
                                                    <div class="holder-input valid">
                                                        <input type="receiver" name="receiver" id="receiver" class="input input-validate required receiver minlength fullname" minlength="3" value="Ricardo Pereira">
                                                    </div><!-- /.holder-input -->
                                                    <div id="receiver_errors" class="error-block" style="display: none;"></div><!-- /.error-block -->
                                                </div><!-- /.form-group w-50 -->

                                                <div class="form-group w-100">
                                                    <button type="submit" class="btn btn-primary btn-block btn-send">Salvar</button>
                                                </div><!-- /.form-group -->

                                                <input type="hidden" name="city" class="city" value="">
                                                <input type="hidden" name="uf" class="uf" value="">

                                            </div><!-- /.group-form -->

                                            <input type="hidden" name="_token" value="kQqC2dslyRvnmD5yKkwh8xuiVVWttOsD5xXIRbLO">
                                        </form>

                                        <div class="container-addresses ">
                                            <div class="box-address selected">
                                                <label for="address-128203135" class="inner-box holder-icheck">
                                                    <div class="iradio_minimal checked" style="position: relative;"><input type="radio" name="address" id="address-128203135" class="input-icheck select-customer-address" value="128203135" checked="" data-url="https://seguro.lojaliford.com/cart/address" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                    <span class="inner-label black-80 f11">
							 	<span class="medium" id="texto_endereco"></span> <br>
								<div id="cidade_uf"></div> <span class="zipcode" id="cep_endereco"></span>
							</span>
                                                </label>
                                                <a href="javascript:" class="btn-edit-address f12 black-40 text-center" data-url="https://seguro.lojaliford.com/customers/147019108/addresses/128203135">
                                                    <span class="icon icon-pencil"></span>
                                                    <span class="btn-label -mobile -block bold f9 mt4 black-40" onclick="location.reload()">Editar</span>
                                                    <span class="-desktop">
								<span class="tooltip2">
    <div class="tt-content-holder" style="width: auto">
        <div class="tt-content bold text-center">
                            <div class="tt-line">
                    Editar
                </div>
                    </div>
    </div>
</span>							</span>
                                                </a>

                                                <a href="javascript:" class="btn-delete-address f12 black-40 text-center" onclick="location.reload()">
                                                    <span class="icon icon-trash"></span>
                                                    <span class="btn-label -mobile -block bold f9 mt4 black-40">Excluir</span>
                                                    <span class="-desktop">
								<span class="tooltip2">
    <div class="tt-content-holder" style="width: auto">
        <div class="tt-content bold text-center">
                            <div class="tt-line">
                    Excluir
                </div>
                    </div>
    </div>
</span>							</span>
                                                </a>

                                                <div class="overlay-spinner overlay-spinner-address">
                                                    <div class="spinner spinner-grey"></div><!-- /.spinner spinner-grey -->
                                                </div><!-- /.spinner-box -->

                                            </div><!-- /.box-address -->


                                            <div class="container-shipment">
                                                <hr>
                                                <div class="black-80 mt15 mb15">Escolha uma forma de entrega:</div><!-- /.black-70 -->
                                                <div class="shipment-options">
                                                    <label for="shipment-m-1" _valor="0" _frete="{{(!is_null($data['frete_padrao']) ? $data['frete_padrao'] : 'Correios© - SEDEX (2 a 4 dias úteis)' ) }}" id="envio_1" class="labelsenvio option clearfix selected">
                                                        <div class="iradio_minimal checked" style="position: relative;"><input type="radio" name="shipment-service" class="input-icheck select-shipment-service" value="{{(!is_null($data['frete_padrao']) ? $data['frete_padrao'] : 'Correios© - SEDEX (2 a 4 dias úteis)' ) }}" checked="" data-url="https://seguro.lojaliford.com/cart/shipping" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                        <div class="inner-label">
                                                            <div class="text pull-left black-80 f12">
                                                                <span class="medium block">{{(!is_null($data['frete_padrao']) ? $data['frete_padrao'] : 'Correios© - SEDEX (2 a 4 dias úteis)' ) }}</span>
                                                                <span class="shipping-time">Entrega garantida</span>
                                                            </div>
                                                            <div class="price pull-right f12 bold">
                                                                Grátis
                                                            </div><!-- /.pull-right -->
                                                        </div>
                                                        <div class="overlay-spinner overlay-spinner-service">
                                                            <div class="spinner spinner-grey"></div><!-- /.spinner spinner-grey -->
                                                        </div><!-- /.spinner-box -->
                                                    </label>
                                                    <!-- aqui!! -->
                                                    @foreach($data['fretes'] as $i => $v)
                                                        <label for="shipment-m-1" id="envio_2" _valor="{{ $v['preco'] }}" _frete="{{ $v['ds_frete'] }}" class="labelsenvio option clearfix ">
                                                            <div class="iradio_minimal" style="position: relative;">
                                                                <input type="radio" name="shipment-service" class="input-icheck select-shipment-service" value="{{$v['ds_frete']}}" data-url="https://seguro.lojaliford.com/cart/shipping" style="position: absolute; visibility: hidden;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                            <div class="inner-label">
                                                                <div class="text pull-left black-80 f12">
                                                                    <span class="medium block">{{$v['ds_frete']}}</span>
                                                                    <span class="shipping-time">Entrega garantida</span>
                                                                </div>
                                                                <div class="price pull-right f12 bold">
                                                                    R$ {{str_replace(".", ",",$v['preco'])}}
                                                                </div><!-- /.pull-right -->
                                                            </div>
                                                            <div class="overlay-spinner overlay-spinner-service">
                                                                <div class="spinner spinner-grey"></div><!-- /.spinner spinner-grey -->
                                                            </div><!-- /.spinner-box -->
                                                        </label>
                                                    @endforeach
                                                </div><!-- /.shipment-options -->

                                                <small class="f12 black-60 block mt20 mb25"><p>Seu&nbsp;Código de <strong>Rastreio</strong>&nbsp;será enviado automaticamente no e-mail cadastrado, após a postagem do pedido!</p></small>
                                            </div><!-- /.container-shipment -->

                                            <div class="mt25">
                                                <button id="btn_pagamento" type="submit" class="btn btn-primary btn-block btn-send link-box-checkout " style="background: {{$data['cor_loja']}};" data-target=".box-payment" data-url="https://seguro.lojaliford.com/checkout/payment">
                                                    Continuar
                                                    <svg width="17" height="13" viewBox="0 0 17 13" fill="white" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4913 0.083736L8.9516 1.66506C8.84623 1.7729 8.84652 1.94512 8.95215 2.05271L11.5613 4.71372L0.277266 4.71372C0.124222 4.71372 -3.2782e-07 4.83794 -3.21005e-07 4.99098L-2.22234e-07 7.20921C-2.1542e-07 7.36225 0.124222 7.48648 0.277266 7.48648L11.5613 7.48648L8.95216 10.1475C8.84678 10.2551 8.84652 10.427 8.9516 10.5348L10.4913 12.1162C10.5435 12.1699 10.615 12.2002 10.6899 12.2002C10.7647 12.2002 10.8363 12.1697 10.8884 12.1162L16.5579 6.29335C16.6103 6.23958 16.6366 6.16968 16.6366 6.10008C16.6366 6.03022 16.6103 5.96062 16.5579 5.90655L10.8884 0.083736C10.8363 0.0302186 10.7647 4.91753e-07 10.6899 4.94966e-07C10.615 4.98178e-07 10.5435 0.0302186 10.4913 0.083736Z"></path>
                                                    </svg>

                                                </button>
                                            </div><!-- /.form-group -->

                                        </div><!-- /.container-addresses -->

                                    </div><!-- /.box-content -->
                                    <div class="overlay-spinner overlay-spinner-box">
                                        <div class="spinner spinner-grey"></div><!-- /.spinner spinner-grey -->
                                    </div><!-- /.spinner-box -->
                                </div>


                                <div class="box-checkout box-addresses active" id="div_entrega_1"  data-target=".box-addresses">
                                    <div class="box-title">
                                        <div class="holder-number">2</div><!-- /.holder-number -->
                                        <div class="title f-h2 ctx-title bold">
                                            Entrega
                                        </div><!-- /.f-h2 -->
                                        <div class="desc mb5 block">
                                            Cadastre ou selecione um endereço
                                        </div>
                                    </div><!-- /.box-title -->


                                    <div class="box-content">

                                        <form id="form-checkout-shipment" action="javascript:" data-update="" data-store="https://seguro.lojaliford.com/customers/146671601/addresses" data-url="https://seguro.lojaliford.com/shipping/zipcode" class="form-horizontal clearfix text-left form-address " method="POST">
                                            <div class="clearfix group-first mt5">
                                                <div class="form-group w-50 ">
                                                    <label for="zipcode" class="label-control block">
                                                        CEP
                                                    </label>

                                                    <div class="holder-input holder-input-zipcode">
                                                        <input type="tel" id="input_cep" name="zipcode" id="zipcode" class="input input-validate required zipcode minlength" minlength="9" autofocus="" value="" maxlength="9">
                                                        <span class="spinner spinner-grey spinner-form"></span>
                                                    </div><!-- /.holder-input -->

                                                    <!-- /.holder-input -->
                                                    <div id="cep_errors" class="error-block">Digite um CEP válido</div><!-- /.error-block -->
                                                </div><!-- /.form-group w-50 -->

                                                <div class="form-group w-50">
                                                    <div class="city-infos hide black-60 f13">
                                                        <span class="city-name"></span>
                                                        /
                                                        <span class="city-uf"></span>
                                                    </div>
                                                </div><!-- /.form-group w-50 -->

                                            </div><!-- /.clearfix -->

                                            <div class="group-form hide" id="form_endereco">
                                                <div class="form-group w-100">
                                                    <label for="street" class="label-control block">Endereço</label>
                                                    <div class="holder-input invalid">
                                                        <input type="text" id="rua" class="input">
                                                    </div><!-- /.holder-input -->
                                                    <div id="rua_errors" class="error-block">O mínimo de caracteres para esse campo é 3</div><!-- /.error-block -->
                                                </div><!-- /.form-group w-50 -->

                                                <div class="form-group w-38 keep-size -padding-right">
                                                    <label for="number" class="label-control block">Número</label>
                                                    <div class="holder-input invalid">
                                                        <input type="text" id="numero" class="input">			</div><!-- /.holder-input -->
                                                    <div id="numero_errors" class="error-block">O mínimo de caracteres para esse campo é 1</div><!-- /.error-block -->
                                                </div><!-- /.form-group w-50 -->

                                                <div class="form-group w-62 keep-size -padding-left">
                                                    <label for="neighborhood" class="label-control block">Bairro</label>
                                                    <div class="holder-input invalid">
                                                        <input type="text" id="bairro" class="input">				</div><!-- /.holder-input -->
                                                    <div id="bairro_errors" class="error-block">O mínimo de caracteres para esse campo é 3</div><!-- /.error-block -->
                                                </div><!-- /.form-group w-50 -->

                                                <div class="form-group w-100">
                                                    <label for="address_complement" class="label-control block">
                                                        Complemento <span class="f11 black-60">(opcional)</span>
                                                    </label>
                                                    <div class="holder-input">
                                                        <input type="text" id="complemento" class="input">				</div><!-- /.holder-input -->
                                                    <div id="complement_errors" class="error-block"></div><!-- /.error-block -->
                                                </div><!-- /.form-group w-50 -->

                                                <div class="form-group w-100">
                                                    <label for="receiver" class="label-control block">Destinatário</label>
                                                    <div class="holder-input valid">
                                                        <input type="receiver" name="receiver" id="receiver" class="input input-validate required receiver minlength fullname" minlength="3" value="{{$data['nome_completo']}}">
                                                    </div><!-- /.holder-input -->
                                                    <div id="receiver_errors" class="error-block" style="display: none;"></div><!-- /.error-block -->
                                                </div><!-- /.form-group w-50 -->

                                                <div class="form-group w-100">
                                                    <button type="submit" class="btn btn-primary btn-block btn-send" id="btn_salva_end" style="background: {{$data['cor_loja']}};">Salvar</button>
                                                </div><!-- /.form-group -->

                                                <input type="hidden" name="city" class="city" value="">
                                                <input type="hidden" name="uf" class="uf" value="">

                                            </div><!-- /.group-form -->

                                            <input type="hidden" name="_token" value="WSRjz6mSY3QWEBpCu5CpebhVlN3meW4iFpqzeDXn">
                                        </form>

                                        <div class="container-addresses hide">



                                            <div class="mt25">
                                                <button type="submit" class="btn btn-primary btn-block btn-send link-box-checkout disabled" data-target=".box-payment" data-url="https://seguro.lojaliford.com/checkout/payment">
                                                    Continuar
                                                    <svg width="17" height="13" viewBox="0 0 17 13" fill="white" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4913 0.083736L8.9516 1.66506C8.84623 1.7729 8.84652 1.94512 8.95215 2.05271L11.5613 4.71372L0.277266 4.71372C0.124222 4.71372 -3.2782e-07 4.83794 -3.21005e-07 4.99098L-2.22234e-07 7.20921C-2.1542e-07 7.36225 0.124222 7.48648 0.277266 7.48648L11.5613 7.48648L8.95216 10.1475C8.84678 10.2551 8.84652 10.427 8.9516 10.5348L10.4913 12.1162C10.5435 12.1699 10.615 12.2002 10.6899 12.2002C10.7647 12.2002 10.8363 12.1697 10.8884 12.1162L16.5579 6.29335C16.6103 6.23958 16.6366 6.16968 16.6366 6.10008C16.6366 6.03022 16.6103 5.96062 16.5579 5.90655L10.8884 0.083736C10.8363 0.0302186 10.7647 4.91753e-07 10.6899 4.94966e-07C10.615 4.98178e-07 10.5435 0.0302186 10.4913 0.083736Z"></path>
                                                    </svg>

                                                </button>
                                            </div><!-- /.form-group -->

                                        </div><!-- /.container-addresses -->

                                    </div><!-- /.box-content -->
                                    <div class="overlay-spinner overlay-spinner-box">
                                        <div class="spinner spinner-grey"></div><!-- /.spinner spinner-grey -->
                                    </div><!-- /.spinner-box -->
                                </div><!-- /.box-checkout -->
                            </div><!-- /.col-checkout -->

                            <div class="col-checkout col-2">
                                <div class="box-checkout box-payment disabled" data-url="https://seguro.lojaliford.com/checkout/payment" data-target=".box-payment">

                                    <div class="box-title">
                                        <div class="holder-number">3</div><!-- /.holder-number -->
                                        <div class="title f-h2 ctx-title bold">Pagamento</div><!-- /.f-h2 -->
                                        <div class="desc">
                                            Preencha suas informações de entrega para continuar
                                        </div>
                                    </div><!-- /.box-title -->


                                    <div class="overlay-spinner overlay-spinner-box">
                                        <div class="spinner spinner-grey"></div><!-- /.spinner spinner-grey -->
                                    </div><!-- /.spinner-box -->
                                </div><!-- /.box-checkout -->			</div><!-- /.col-checkout -->

                            <!-- Products card start -->
                            <div class="col-checkout col-3">
                                @php
                                    $products = collect($data['products']);

                                    $baseTotalPrice = $products->sum(function ($product) {
                                        return $product['preco'] * $product['quantidade'];
                                    });
                                @endphp

                                <div class="box-checkout box-resume ">
                                    <div class="box-title flex between js-box-resume-title">
                                        <div class="c-text">
                                            <span class="-title f18 medium">
                                                RESUMO
                                            </span>
                                            <span class="items__count bold -mobile" id="contador_qtd">
                                                ({{ $products->sum('quantidade') }})
                                            </span>
                                            <div class="resume-description f11 black-60 mt2 -mobile -block">Informações da sua compra</div>
                                        </div>
                                        <!-- /.f-h2 -->
                                        <div>
                                            <span class="cart_total -mobile mt7">
                                                <span class="-total" style="color: {{ $data['cor_loja'] }};">
                                                    R$ {{ number_format(($baseTotalPrice), 2, ',') }}
                                                </span>
                                                <i class="icon icon-arrow-left"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- /.box-title -->
                                    <div class="js-box-animation box-animation">
                                        <div class="box-content clearfix mt15">
                                            <div class="clearfix holder-promocode">
                                                <form action="https://seguro.lojaliford.com/cart/promocode/store" id="form-promocode" method="post" class="form-promocode form-horizontal">
                                                    <div class="form-group w-100">
                                                        <div class="clearfix">
                                                            <label for="promocode" class="label-control block">
                                                                Tem um cupom?
                                                            </label>

                                                            <i class="block icon-promocode"></i>

                                                            <div class="flex">
                                                                <input type="text" name="code" id="promocode" placeholder="Código do cupom" class="input input-promocode pull-left" value="" required>
                                                                <button type="submit" class="btn btn-tertiary btn-h36">
                                                                    Adicionar
                                                                </button>
                                                            </div>
                                                            <div class="spinner-grey spinner-promocode"></div>
                                                        </div>
                                                        <!-- /.clearfix -->
                                                        <div class="c-error f10 mt5 mb5 promocode-error"></div>

                                                    </div>
                                                    <!-- /.form-group -->

                                                    <input type="hidden" name="_token" value="YfSYRy58SsgAVJEUbv4pPj9FbTr54mjAbTBZUYkv">

                                                </form>
                                            </div>
                                            <!-- /.clearfix -->

                                            <div class="cart-resume mt10">
                                                <div class="detail">
                                                    <div class="description">Produtos</div>
                                                    <div id="vl_produto_lista" valor="" class="value">R$ {{ number_format(($baseTotalPrice), 2, ',') }}</div>
                                                </div>

                                                <div class="detail total bold" style="color: {{$data['cor_loja']}};">
                                                    <div class="description">
                                                        Total
                                                    </div>
                                                    <div class="value js-cart-total" id="valor_total">
                                                        R$ {{ number_format(($baseTotalPrice), 2, ',') }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="holder-container-resume js-holder-container-resume">
                                                @foreach($products as $product)
                                                    <div class="item-holder js-item-holder flex  " data-item-id="481990080" data-product-option-id="117664268" data-kit-id="" data-quantity="1" data-custom="" data-shopify-variant-id="45170425266481" data-bundle-id="" data-shopify="1" data-order-bump-id="">
                                                        <div class="overlay-spinner overlay-spinner-box">
                                                            <div class="spinner spinner-grey"></div>
                                                            <!-- /.spinner-grey -->
                                                        </div>

                                                        <div class="item-image">
                                                            <img src="{{ $product['imagem1'] }}" alt="{{ $product['titulo'] }}" class="thumb-product block" />
                                                        </div>

                                                        <div class="item-detail f12">
                                                            <div class="item-row">
                                                                <div class="item-name c-text-tertiary">{{ $product['titulo'] }}</div>
                                                                <div class="item-delete"></div>
                                                            </div>

                                                            @php
                                                                if(!is_null($product['variacao'])){
                                                                    $variacao = explode('|', $product['variacao']);
                                                                    array_pop($variacao);
                                                                    echo '<div style="display: flex; flex-direction: column;" class="item-row bold c-text-secondary">';
                                                                    foreach($variacao as $i => $v){
                                                                        echo '<span class="item-variation">' . $v . '</span>';
                                                                    }
                                                                    echo '</div>';
                                                                }
                                                            @endphp

                                                            <div class="item-row item-holder-quantity-price c-text medium">
                                                                <span class="item-price"> R$ {{ number_format($product['preco'], 2, ',') }}</span><br>
                                                            </div>

                                                            {{--                                                            <div class="item-row">--}}
                                                            {{--                                                                <div class="item-quantity-selector-holder js-item-quantity-selector-holder">--}}
                                                            {{--                                                                    <div class="relative">--}}
                                                            {{--                                                                        <a href="javascript:" class="switch-control less">--}}
                                                            {{--                                                                            <i class="icon icon-less"></i>--}}
                                                            {{--                                                                        </a>--}}

                                                            {{--                                                                        <a href="javascript:" class="switch-control more">--}}
                                                            {{--                                                                            <i class="icon icon-more"></i>--}}
                                                            {{--                                                                        </a>--}}
                                                            {{--                                                                        <input type="text" class="input-quantity js-input-quantity " id="input_valor" value="{{ $product['quantidade'] }}">--}}
                                                            {{--                                                                    </div>--}}
                                                            {{--                                                                    <div class="error-item red f11 hide text-center"></div>--}}
                                                            {{--                                                                </div>--}}
                                                            {{--                                                            </div>--}}

                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                            <!-- /.holder-container-resume -->
                                        </div>
                                        <!-- /.box-content -->
                                    </div>

                                    <div class="overlay-spinner overlay-spinner-box">
                                        <div class="spinner spinner-grey"></div>
                                        <!-- /.spinner spinner-grey -->
                                    </div>
                                    <!-- /.spinner-box -->
                                </div>
                            </div>
                            <!-- Products card ends -->

                            <div class="col-checkout col-4">
                                <div class="container-testimonials">
                                    <div class="testimonials">
                                        <div class="box-testimonial clearfix">
                                            <div class="box-testimonial__photo pull-left ml20">
        <img src="http://{{$data['img_loja']}}" alt="logo da loja" class="photo">
                                            </div><!-- /.box-testimonial__photo -->
                                            <div class="box-testimonial__infos pull-left ml15">
                                                <div class="infos__rating mt5 mb5">
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                </div>
                                                <strong class="infos__name  black-60">{{$data['logo']['texto']}}</strong>
                                                <p class="infos__text black-60">
                                                    Nossos pagamentos são administrados por {{$data['logo']['texto']}}, lider em plataformas de pagamentos online no Brasil. Sua compra está 100% segura.</p>
                                            </div><!-- /.box-testimonial__infos -->
                                        </div><!-- /.box-testimonial -->
                                        <div class="box-testimonial clearfix">
                                            <div class="box-testimonial__photo pull-left ml20">
                                                <img src="//images.yampi.me/assets/stores/liord2/uploads/testimonies/6449f95a59519.jpeg" alt="Entrega Segura" class="photo">
                                            </div><!-- /.box-testimonial__photo -->
                                            <div class="box-testimonial__infos pull-left ml15">
                                                <div class="infos__rating mt5 mb5">
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                </div>
                                                <strong class="infos__name  black-60">Entrega Segura</strong>
                                                <p class="infos__text black-60">Entrega segura e rastreável, após a compra você receberá em seu e-mail um código para acompanhar seu pedido até que receba.</p>
                                            </div><!-- /.box-testimonial__infos -->
                                        </div><!-- /.box-testimonial -->
                                        <div class="box-testimonial clearfix">
                                            <div class="box-testimonial__photo pull-left ml20">
                                                <img src="//images.yampi.me/assets/stores/liord2/uploads/testimonies/644c71e015a13.png" alt="Garantia de Reembolso" class="photo">
                                            </div><!-- /.box-testimonial__photo -->
                                            <div class="box-testimonial__infos pull-left ml15">
                                                <div class="infos__rating mt5 mb5">
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                    <i class="fa fa-star yellow"></i>
                                                </div>
                                                <strong class="infos__name  black-60">Garantia de Reembolso</strong>
                                                <p class="infos__text black-60">Receba sua compra como esperava ou reembolsaremos 100% o valor do seu pedido de volta direto na sua conta em poucos minutos.</p>
                                            </div><!-- /.box-testimonial__infos -->
                                        </div><!-- /.box-testimonial -->
                                    </div><!-- /.owl-carousel owl-testimonials -->
                                </div><!-- /.container clearfix -->
                            </div><!-- /.col-checkout -->

                        </div><!-- /.clearfix -->
                    </div><!-- /.holder-cols-checkout -->
                </div><!-- /.container-promocode -->

{{--                <script>--}}
{{--                    window.checkout.cart = {--}}
{{--                        id: 344964690,--}}
{{--                        customer_id: 146671601,--}}
{{--                        token: 'shopify-8b4e791b319684c35f39be20c23d10b6',--}}
{{--                        optionsIds: ['8392816197937'],--}}
{{--                        skusIds: ['117060935'],--}}
{{--                        isShopify: true,--}}
{{--                        prices: {"items_amount":97.9,"total_items":"1","subtotal":97.9,"discount":0,"items_discount":-97.9,"shipment":0,"shipment_original_value":null,"shipment_discount_value":0,"shipment_discount_percent":"0,00","promocode_discount_value":0,"progressive_discount_value":0,"kits_discount_value":0,"total":97.9,"value_for_free_shipment":0,"installments":{"max_installment":12,"max_installment_value":9.83,"amount":117.95,"text":"12x de R$ 9,83 *","text_with_tax":"12x de R$ 9,83","text_discount_percent":null,"text_discount":null,"installments":[{"amount":97.9,"amount_formated":"R$ {{ str_replace('.', ',',$data['preco'])}}","base_value":97.9,"tax":"0.00","tax_value":0,"discount_percent":0,"discount_value":0,"discount_value_formated":"R$ 0,00","installment":1,"installment_value":97.9,"installment_value_formated":"R$ {{ str_replace('.', ',',$data['preco'])}}","text":"1x de R$ {{ str_replace('.', ',',$data['preco'])}}","text_with_tax":"1x de R$ {{ str_replace('.', ',',$data['preco'])}}","text_discount_percent":null,"text_discount":null},{"amount":102.31,"amount_formated":"R$ 102,31","base_value":97.9,"tax":"2.99","tax_value":4.4123735937729975,"discount_percent":0,"discount_value":-4.41,"discount_value_formated":"R$ -4,41","installment":2,"installment_value":51.16,"installment_value_formated":"R$ 51,16","text":"2x de R$ 51,16 *","text_with_tax":"2x de R$ 51,16","text_discount_percent":null,"text_discount":null},{"amount":103.81,"amount_formated":"R$ 103,81","base_value":97.9,"tax":"2.99","tax_value":5.911905425920423,"discount_percent":0,"discount_value":-5.91,"discount_value_formated":"R$ -5,91","installment":3,"installment_value":34.6,"installment_value_formated":"R$ 34,60","text":"3x de R$ 34,60 *","text_with_tax":"3x de R$ 34,60","text_discount_percent":null,"text_discount":null},{"amount":105.33,"amount_formated":"R$ 105,33","base_value":97.9,"tax":"2.99","tax_value":7.425799262935882,"discount_percent":0,"discount_value":-7.43,"discount_value_formated":"R$ -7,43","installment":4,"installment_value":26.33,"installment_value_formated":"R$ 26,33","text":"4x de R$ 26,33 *","text_with_tax":"4x de R$ 26,33","text_discount_percent":null,"text_discount":null},{"amount":106.85,"amount_formated":"R$ 106,85","base_value":97.9,"tax":"2.99","tax_value":8.954046383318541,"discount_percent":0,"discount_value":-8.95,"discount_value_formated":"R$ -8,95","installment":5,"installment_value":21.37,"installment_value_formated":"R$ 21,37","text":"5x de R$ 21,37 *","text_with_tax":"5x de R$ 21,37","text_discount_percent":null,"text_discount":null},{"amount":108.4,"amount_formated":"R$ 108,40","base_value":97.9,"tax":"2.99","tax_value":10.496635582972374,"discount_percent":0,"discount_value":-10.5,"discount_value_formated":"R$ -10,50","installment":6,"installment_value":18.07,"installment_value_formated":"R$ 18,07","text":"6x de R$ 18,07 *","text_with_tax":"6x de R$ 18,07","text_discount_percent":null,"text_discount":null},{"amount":109.95,"amount_formated":"R$ 109,95","base_value":97.9,"tax":"2.99","tax_value":12.053553182137634,"discount_percent":0,"discount_value":-12.05,"discount_value_formated":"R$ -12,05","installment":7,"installment_value":15.71,"installment_value_formated":"R$ 15,71","text":"7x de R$ 15,71 *","text_with_tax":"7x de R$ 15,71","text_discount_percent":null,"text_discount":null},{"amount":111.52,"amount_formated":"R$ 111,52","base_value":97.9,"tax":"2.99","tax_value":13.62478303384529,"discount_percent":0,"discount_value":-13.62,"discount_value_formated":"R$ -13,62","installment":8,"installment_value":13.94,"installment_value_formated":"R$ 13,94","text":"8x de R$ 13,94 *","text_with_tax":"8x de R$ 13,94","text_discount_percent":null,"text_discount":null},{"amount":113.11,"amount_formated":"R$ 113,11","base_value":97.9,"tax":"2.99","tax_value":15.210306533884562,"discount_percent":0,"discount_value":-15.21,"discount_value_formated":"R$ -15,21","installment":9,"installment_value":12.57,"installment_value_formated":"R$ 12,57","text":"9x de R$ 12,57 *","text_with_tax":"9x de R$ 12,57","text_discount_percent":null,"text_discount":null},{"amount":114.71,"amount_formated":"R$ 114,71","base_value":97.9,"tax":"2.99","tax_value":16.810102632270983,"discount_percent":0,"discount_value":-16.81,"discount_value_formated":"R$ -16,81","installment":10,"installment_value":11.47,"installment_value_formated":"R$ 11,47","text":"10x de R$ 11,47 *","text_with_tax":"10x de R$ 11,47","text_discount_percent":null,"text_discount":null},{"amount":116.32,"amount_formated":"R$ 116,32","base_value":97.9,"tax":"2.99","tax_value":18.424147846201876,"discount_percent":0,"discount_value":-18.42,"discount_value_formated":"R$ -18,42","installment":11,"installment_value":10.57,"installment_value_formated":"R$ 10,57","text":"11x de R$ 10,57 *","text_with_tax":"11x de R$ 10,57","text_discount_percent":null,"text_discount":null},{"amount":117.95,"amount_formated":"R$ 117,95","base_value":97.9,"tax":"2.99","tax_value":20.05241627448305,"discount_percent":0,"discount_value":-20.05,"discount_value_formated":"R$ -20,05","installment":12,"installment_value":9.83,"installment_value_formated":"R$ 9,83","text":"12x de R$ 9,83 *","text_with_tax":"12x de R$ 9,83","text_discount_percent":null,"text_discount":null}]},"promocode_subtotal":97.9,"items_amount_formated":"R$ {{ str_replace('.', ',',$data['preco'])}}","subtotal_formated":"R$ {{ str_replace('.', ',',$data['preco'])}}","items_discount_formated":"R$ -{{ str_replace('.', ',',$data['preco'])}}","discount_formated":"R$ 0,00","shipment_original_value_formated":"R$ 0,00","shipment_formated":"A calcular","total_format":"{{ str_replace('.', ',',$data['preco'])}}","total_formated":"R$ {{ str_replace('.', ',',$data['preco'])}}","value_for_free_shipment_formated":"R$ 0,00"},--}}
{{--                        items: [{"id":489220941,"cart_id":344964690,"product_option_id":117060935,"kit_id":null,"bundle_id":null,"upsell_id":null,"quantity":1,"gift":0,"created_at":"2023-05-14 13:39:48","updated_at":"2023-05-14 13:39:48","brand":{"id":10811465,"name":"lojaliord","slug":"lojaliord"},"is_in_promotional_rack":false,"custom_shipping":false,"free_shipping":false,"shipping_price":0,"weight":0,"product_id":17329243,"option_id":117060935,"link":"javascript:","is_bundle":false,"group_name":"Calcinha SexyLift - Empina BumBum Bege P (42-54kg) (50-65cm) - 489220941","bundle":{"name":"","modifiable":true,"image_url":"","quantity":1,"shipping":{"custom":false,"price":0,"days":null,"type":null}},"small":"https:\/\/cdn.shopify.com\/s\/files\/1\/0754\/7938\/4369\/products\/S0e8905f749344b8093805f3c8fad0a59J_50x50.jpg","thumb":"https:\/\/cdn.shopify.com\/s\/files\/1\/0754\/7938\/4369\/products\/S0e8905f749344b8093805f3c8fad0a59J_250x250.jpg","medium":"https:\/\/cdn.shopify.com\/s\/files\/1\/0754\/7938\/4369\/products\/S0e8905f749344b8093805f3c8fad0a59J_500x500.jpg","has_price_discount":false,"price_gift":null,"price_gift_formated":"R$ 0,00","price_sale":"0.00","price_sale_formated":"R$ 0,00","price":"97.90","price_total":97.9,"price_formated":"R$ {{ str_replace('.', ',',$data['preco'])}}","price_total_formated":"R$ {{ str_replace('.', ',',$data['preco'])}}","name":"Calcinha SexyLift - Empina BumBum","name_with_grids":"Calcinha SexyLift - Empina BumBum Bege P (42-54kg) (50-65cm)","sku":"14:771#beige;5:100014064#S (42-54kg)","availability_days":-1,"availability_text":"-1 dias \u00fateis","categories":[2852133,2862465],"categories_names":["Mais Vendidos","Sa\u00fade & Beleza"],"grids":[{"name":"Cor","value":"Bege"},{"name":"Tamanho","value":"P (42-54kg) (50-65cm)"}],"is_digital":false,"short_description":"Calcinha SexyLift - Empina BumBum","customizations":[],"customized":false,"allow_sell_without_customization":0,"selected_customizations":0,"shopify_variant_id":"45155128377649","shopify_product_id":"8392816197937","order_bump_id":null,"product_option":{"id":117060935,"store_id":586266,"product_id":17329243,"price_sale":"0.00","price_discount":"97.90","sku":"14:771#beige;5:100014064#S (42-54kg)","quantity_managed":0,"availability":1,"availability_soldout":-1,"allow_sell_without_customization":0,"product":{"id":17329243,"name":"Calcinha SexyLift - Empina BumBum","slug":"calcinha-sexylift-empina-bumbum-ultimas-unidades-com-frete-gratis-644724416c871","gift_value":null,"is_digital":0,"seo_description":null,"brand_id":10811465,"facebook_pixel_id":null,"custom_shipping":0,"shipping_price":"0.00","store_id":586266,"simple":0,"brand":{"id":10811465,"store_id":586266,"active":1,"featured":0,"name":"lojaliord","description":null,"logo":null,"created_at":"2023-04-24 21:52:17","updated_at":"2023-04-24 21:52:17","deleted_at":null}},"stocks":[]},"cart":{"id":344964690,"store_id":586266,"customer_id":null,"promocode_id":null,"payment_id":null,"address_id":null,"seller_id":null,"done":0,"token":"shopify-8b4e791b319684c35f39be20c23d10b6","has_recomm":0,"value_shipment":null,"zipcode":null,"shipment_service_id":null,"payment_alias":"credit_card","tracking_data":null,"utm_source":null,"utm_campaign":null,"utm_medium":null,"utm_term":null,"utm_content":null,"created_at":"2023-05-09 21:22:04","updated_at":"2023-05-14 13:39:48","deleted_at":null},"order_bump":[]}],--}}
{{--                        discounts: [{"name":"Cupom de desconto","value":0,"accumulate":false}],--}}
{{--                        customer: {"id":146671601,"first_name":"Roger","last_name":"Borgert","full_name":"{{$data['nome_completo']}}","email":"{{$data['email']}}","document":"{{$data['cpf']}}","document_type":"CPF","birthday":null,"phone_number":"5548996831161"},--}}
{{--                    };--}}
{{--                    --}}
{{--                    window.checkout.firstOrderPromocode = {--}}
{{--                        code: 'PRIMEIRACOMPRA',--}}
{{--                        min: 0.00--}}
{{--                    }--}}
{{--                    --}}
{{--                    window.yampi = window.yampi || {};--}}
{{--                    window.yampi =  Object.assign(window.yampi, {--}}
{{--                        external_auth_token: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvc2VndXJvLmxvamFsaWZvcmQuY29tXC9jaGVja291dFwvYWRkcmVzcyIsImlhdCI6MTY4NDA4OTI5OSwiZXhwIjoxNjg0MDg5ODk5LCJuYmYiOjE2ODQwODkyOTksImp0aSI6IlU5b2oxNXlCRnp6ekxpTW8iLCJzdWIiOjM0NDk2NDY5MCwicHJ2IjoiNmUzYjZhMmJkMmE4NzYzYWFhYjhlYTFjMjQzNzVkMWU5YWRiMDRkOSIsImNhcnRfaWQiOjM0NDk2NDY5MCwibWVyY2hhbnRfbmFtZSI6IkxvamEgTGlmb3JkIn0.srkmfL3s-ECImQ0E-e0_5qucQblmh3Xxp_oRbVAq8QQ',--}}
{{--                        buyer_endpoint: 'https://buyer.yampi.io/v1/'--}}
{{--                    });--}}
{{--                </script>--}}
            </div>

            <div class="overlay overlay-transaction-loading">
                <div class="inner-modal">
                    <div class="align-middle black-60">
                        <div class="spinner spinner-grey inline-block bigger mb15"></div>
                        <div class="container">
                            <div class="t1 bold mb15">
                                aguarde…
                            </div><!-- /.t1 -->
                            <div class="t2 f-h2">
                                Estamos processando seu pedido. Não feche esta tela.
                            </div><!-- /.t2 -->
                        </div>
                    </div><!-- /.align-middle -->
                </div><!-- /.inner-modal -->
            </div><!-- /.overlay-transaction -->

            <div id="modal-shipment-error" class="modal overlay overlay-transaction-error">
                <div class="inner-modal">
                    <div class="align-middle black-60">
                        <div class="modal-content text-center">
                            <div class="inner-content">
                                <div class="t1 mt10 mb20 bold red f-h2">😢 Ops, temos um problema</div><!-- /.t1 -->

                                <p class="f16">Infelizmente o seu pedido não foi aprovado</p>

                                <div class="alert alert-warning mt15">
                                    <span class="error-card bold block mb10"></span>
                                    <span class="error-message">Transação não autorizada
</span>
                                    <span class="block mt5">Código do erro: <span class="error-code">15</span></span>
                                </div><!-- /.alert alert-warning -->

                                <a href="javascript:" class="btn btn-grey btn-block mt15 mb15 close-transaction-error">tentar novamente</a><!-- /.btn btn-grey -->
                            </div><!-- /.inner-content -->

                            <p class="f11 tip js-tip">
                                <span class="bold">Dica:</span>
                                <span class="js-creditcard-tip">A maioria das compras negadas usando cartão são devidas a erro de digitação dos dados. Verifique os dados do cartão e tente novamente.</span>
                                <span class="js-nupay-tip">Pode ser que o pagamento não tenha sido aprovado por você não ter uma conta no Nubank, caso você tenha conta verifique seu saldo e limite e tente novamente.</span>
                            </p><!-- /.f11 -->

                            <a href="#" class="modal-close" data-target="modal-shipment-error">[x] fechar</a>
                        </div><!-- /.modal-content -->
                    </div><!-- /.align-middle -->
                </div><!-- /.inner-modal -->
            </div><!-- /.overlay-transaction -->
            <div id="modal-first-promocode" class="modal overlay dark-60 overlay-first-promocode">
                <div class="inner-modal">
                    <div class="align-middle black-60">
                        <div class="modal-content text-center">
                            <div class="inner-content">
                                <div class="emoji-icon">🎉</div><!-- /.emoji-icon -->

                                <div class="title-modal mt25 mb35 bold yampi-purple">
                                    <span>Você ganhou um cupom <br> para sua 1ª compra</span>
                                </div><!-- /.t1 -->

                                <div class="clearfix mb20">
                                    <a href="javascript:" class="btn btn-medium btn-purple btn-apply-first-promocode btn-1">
                                        <i class="fa fa-ticket mr5"></i>
                                        Aplicar desconto
                                    </a><!-- /.btn btn-purple -->
                                </div><!-- /.clearfix -->

                                <a href="javascript:" class="close-modal black-80" data-target="modal-first-promocode">Não gosto de descontos</a><!-- /.mt20 -->
                            </div><!-- /.inner-content -->

                            <a href="#" class="modal-close" data-target="modal-first-promocode">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65615 0.286133L12.7137 11.3437L11.3436 12.7137L0.286133 1.65615L1.65615 0.286133Z" fill="#141316"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.28614 11.3437L11.3437 0.286149L12.7137 1.65617L1.65616 12.7137L0.28614 11.3437Z" fill="#141316"></path>
                                </svg>

                            </a>
                        </div><!-- /.modal-content -->
                    </div><!-- /.align-middle -->
                </div><!-- /.inner-modal -->
            </div><!-- /.overlay-transaction -->


        </div><!-- /.content clearfix -->

        <footer class="-mobile-center">
            <div class="container">
                <div class="payment-methods-holder">
                    <div class="-title">
                        Formas de pagamento
                    </div>

                    <div class="-payment-list">
                        <img alt="amex" width="39" height="26" src="https://icons.yampi.me/svg/card-amex.svg">
                        <span class="line-break hide"></span>
                        <img alt="visa" width="39" height="26" src="https://icons.yampi.me/svg/card-visa.svg">
                        <span class="line-break hide"></span>
                        <img alt="diners" width="39" height="26" src="https://icons.yampi.me/svg/card-diners.svg">
                        <span class="line-break hide"></span>
                        <img alt="mastercard" width="39" height="26" src="https://icons.yampi.me/svg/card-mastercard.svg">
                        <span class="line-break hide"></span>
                        <img alt="discover" width="39" height="26" src="https://icons.yampi.me/svg/card-discover.svg">
                        <span class="line-break hide"></span>
                        <img alt="aura" width="39" height="26" src="https://icons.yampi.me/svg/card-aura.svg">
                        <span class="line-break hide"></span>
                        <img alt="hipercard" width="39" height="26" src="https://icons.yampi.me/svg/card-hipercard.svg">
                        <span class="line-break hide"></span>
                        <img alt="elo" width="39" height="26" src="https://icons.yampi.me/svg/card-elo.svg">
                        <span class="line-break hide"></span>
                        <img alt="hiper" width="39" height="26" src="https://icons.yampi.me/svg/card-hiper.svg">
                        <span class="line-break hide"></span>
                        <img alt="pix" width="39" height="26" src="https://icons.yampi.me/svg/card-pix.svg">
                        <span class="line-break hide"></span>
                    </div>
                </div>

                <div class="store-info-holder">
                    <div class="-store-name">
                        {{$data['nm_loja']}}
                    </div>

                    <!-- <div class="-address space-handler">
                        <span>Rua Chile, 10 - Centro</span>
                        <span>Londrina - PR</span>
                    </div> -->

                    <div class="-store-document space-handler">
                        <span class="-holder-store-name">© {{date('Y')}} {{$data['nm_loja']}}</span>
                        <span class="-holder-document">CNPJ:
                            <span class="cnpj">{{$data['cnpj_loja']}}</span>
                        </span>
                    </div>
                </div>


                <div class="security-label">
                    <svg width="89" height="19" viewBox="0 0 89 19" fill="#898792" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.75 14.1875V8.5C9.75 8.05127 9.38623 7.6875 8.9375 7.6875L2.4375 7.6875C1.98877 7.6875 1.625 8.05127 1.625 8.5L1.625 14.1875C1.625 14.6362 1.98877 15 2.4375 15H8.9375C9.38623 15 9.75 14.6362 9.75 14.1875ZM11.375 8.5V14.1875C11.375 15.5337 10.2837 16.625 8.9375 16.625H2.4375C1.09131 16.625 -5.8844e-08 15.5337 0 14.1875L2.48609e-07 8.5C3.07453e-07 7.15381 1.09131 6.0625 2.4375 6.0625L8.9375 6.0625C10.2837 6.0625 11.375 7.15381 11.375 8.5Z"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.6875 3.625C4.79004 3.625 4.0625 4.35254 4.0625 5.25V6.875H2.4375V5.25C2.4375 3.45507 3.89257 2 5.6875 2C7.48243 2 8.9375 3.45507 8.9375 5.25V6.875H7.3125V5.25C7.3125 4.35254 6.58496 3.625 5.6875 3.625Z"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 10.125L6.5 12.5625H4.875L4.875 10.125H6.5Z"></path>
                        <path d="M23.136 0.11C23.73 0.11 24.236 0.205333 24.654 0.396C25.072 0.586667 25.391 0.861666 25.611 1.221C25.831 1.58033 25.941 2.01667 25.941 2.53C25.941 3.04333 25.831 3.47967 25.611 3.839C25.391 4.19833 25.072 4.47333 24.654 4.664C24.236 4.85467 23.73 4.95 23.136 4.95H21.695V7.37H19.803V0.11H23.136ZM22.839 3.531C23.235 3.531 23.532 3.45033 23.73 3.289C23.9353 3.12033 24.038 2.86733 24.038 2.53C24.038 2.19267 23.9353 1.94333 23.73 1.782C23.532 1.61333 23.235 1.529 22.839 1.529H21.695V3.531H22.839Z"></path>
                        <path d="M33.0094 7.37H31.0624L30.5564 5.731H28.0704L27.5534 7.37H25.6504L28.2024 0.11H30.4684L33.0094 7.37ZM28.4224 4.444H30.2044L29.3134 1.507L28.4224 4.444Z"></path>
                        <path d="M36.5882 7.48C35.9429 7.48 35.3672 7.337 34.8612 7.051C34.3626 6.765 33.9739 6.34333 33.6952 5.786C33.4166 5.22867 33.2772 4.55033 33.2772 3.751C33.2772 2.96633 33.4239 2.29533 33.7172 1.738C34.0106 1.18067 34.4286 0.751667 34.9712 0.451C35.5212 0.150333 36.1666 0 36.9072 0C37.7286 0 38.3922 0.150333 38.8982 0.451C39.4042 0.744333 39.7966 1.21367 40.0752 1.859L38.3262 2.552C38.2309 2.178 38.0622 1.90667 37.8202 1.738C37.5782 1.56933 37.2776 1.485 36.9182 1.485C36.5589 1.485 36.2509 1.573 35.9942 1.749C35.7376 1.91767 35.5432 2.17067 35.4112 2.508C35.2792 2.838 35.2132 3.24867 35.2132 3.74C35.2132 4.25333 35.2792 4.68233 35.4112 5.027C35.5506 5.37167 35.7522 5.62833 36.0162 5.797C36.2876 5.95833 36.6212 6.039 37.0172 6.039C37.2299 6.039 37.4242 6.01333 37.6002 5.962C37.7762 5.91067 37.9302 5.83733 38.0622 5.742C38.1942 5.63933 38.2969 5.51467 38.3702 5.368C38.4436 5.214 38.4802 5.03433 38.4802 4.829V4.719H36.8192V3.454H40.0862V7.37H38.7992L38.6562 5.665L38.9642 5.929C38.8102 6.42767 38.5316 6.81267 38.1282 7.084C37.7322 7.348 37.2189 7.48 36.5882 7.48Z"></path>
                        <path d="M48.1344 7.37H46.1874L45.6814 5.731H43.1954L42.6784 7.37H40.7754L43.3274 0.11H45.5934L48.1344 7.37ZM43.5474 4.444H45.3294L44.4384 1.507L43.5474 4.444Z"></path>
                        <path d="M57.3828 0.11V7.37H55.7108V4.037L55.7658 1.804H55.7438L53.9508 7.37H52.4218L50.6288 1.804H50.6068L50.6618 4.037V7.37H48.9788V0.11H51.6738L52.8178 3.806L53.2248 5.346H53.2468L53.6648 3.817L54.7978 0.11H57.3828Z"></path>
                        <path d="M58.9905 7.37V0.11H64.6445V1.573H60.8825V3.047H63.8745V4.422H60.8825V5.907H64.7875V7.37H58.9905Z"></path>
                        <path d="M72.4749 0.11V7.37H70.3739L68.1189 3.443L67.5689 2.365H67.5579L67.6019 3.707V7.37H65.9299V0.11H68.0309L70.2859 4.037L70.8359 5.115H70.8469L70.8029 3.773V0.11H72.4749Z"></path>
                        <path d="M80.1883 0.11V1.573H77.8233V7.37H75.9313V1.573H73.5553V0.11H80.1883Z"></path>
                        <path d="M84.225 0C84.9583 0 85.589 0.150333 86.117 0.451C86.6523 0.744333 87.063 1.16967 87.349 1.727C87.635 2.28433 87.778 2.95533 87.778 3.74C87.778 4.52467 87.635 5.19567 87.349 5.753C87.063 6.31033 86.6523 6.73933 86.117 7.04C85.589 7.33333 84.9583 7.48 84.225 7.48C83.4917 7.48 82.8573 7.33333 82.322 7.04C81.7867 6.73933 81.376 6.31033 81.09 5.753C80.804 5.19567 80.661 4.52467 80.661 3.74C80.661 2.95533 80.804 2.28433 81.09 1.727C81.376 1.16967 81.7867 0.744333 82.322 0.451C82.8573 0.150333 83.4917 0 84.225 0ZM84.225 1.485C83.873 1.485 83.576 1.56933 83.334 1.738C83.092 1.90667 82.9087 2.15967 82.784 2.497C82.6593 2.827 82.597 3.24133 82.597 3.74C82.597 4.23133 82.6593 4.64567 82.784 4.983C82.9087 5.32033 83.092 5.57333 83.334 5.742C83.576 5.91067 83.873 5.995 84.225 5.995C84.577 5.995 84.8703 5.91067 85.105 5.742C85.347 5.57333 85.5303 5.32033 85.655 4.983C85.7797 4.64567 85.842 4.23133 85.842 3.74C85.842 3.24133 85.7797 2.827 85.655 2.497C85.5303 2.15967 85.347 1.90667 85.105 1.738C84.8703 1.56933 84.577 1.485 84.225 1.485Z"></path>
                        <path d="M21.03 18.37V13.84C21.03 13.7067 21.03 13.57 21.03 13.43C21.0367 13.2833 21.0433 13.13 21.05 12.97C20.8233 13.19 20.5633 13.38 20.27 13.54C19.9833 13.6933 19.6867 13.8033 19.38 13.87L19.18 12.94C19.32 12.92 19.4833 12.8733 19.67 12.8C19.8567 12.7267 20.05 12.6333 20.25 12.52C20.45 12.4067 20.6333 12.2867 20.8 12.16C20.9667 12.0267 21.0967 11.8967 21.19 11.77H22.09V18.37H21.03Z"></path>
                        <path d="M26.1634 18.47C25.3701 18.47 24.7468 18.1833 24.2934 17.61C23.8468 17.03 23.6234 16.1833 23.6234 15.07C23.6234 13.9567 23.8468 13.1133 24.2934 12.54C24.7468 11.96 25.3701 11.67 26.1634 11.67C26.9634 11.67 27.5868 11.96 28.0334 12.54C28.4868 13.1133 28.7134 13.9567 28.7134 15.07C28.7134 16.1833 28.4868 17.03 28.0334 17.61C27.5868 18.1833 26.9634 18.47 26.1634 18.47ZM26.1634 17.56C26.4834 17.56 26.7501 17.47 26.9634 17.29C27.1834 17.1033 27.3468 16.8267 27.4534 16.46C27.5668 16.0867 27.6234 15.6233 27.6234 15.07C27.6234 14.5167 27.5668 14.0567 27.4534 13.69C27.3468 13.3167 27.1834 13.04 26.9634 12.86C26.7501 12.6733 26.4834 12.58 26.1634 12.58C25.8434 12.58 25.5734 12.6733 25.3534 12.86C25.1401 13.04 24.9801 13.3167 24.8734 13.69C24.7668 14.0567 24.7134 14.5167 24.7134 15.07C24.7134 15.6233 24.7668 16.0867 24.8734 16.46C24.9801 16.8267 25.1401 17.1033 25.3534 17.29C25.5734 17.47 25.8434 17.56 26.1634 17.56Z"></path>
                        <path d="M32.4427 18.47C31.6494 18.47 31.0261 18.1833 30.5727 17.61C30.1261 17.03 29.9027 16.1833 29.9027 15.07C29.9027 13.9567 30.1261 13.1133 30.5727 12.54C31.0261 11.96 31.6494 11.67 32.4427 11.67C33.2427 11.67 33.8661 11.96 34.3127 12.54C34.7661 13.1133 34.9927 13.9567 34.9927 15.07C34.9927 16.1833 34.7661 17.03 34.3127 17.61C33.8661 18.1833 33.2427 18.47 32.4427 18.47ZM32.4427 17.56C32.7627 17.56 33.0294 17.47 33.2427 17.29C33.4627 17.1033 33.6261 16.8267 33.7327 16.46C33.8461 16.0867 33.9027 15.6233 33.9027 15.07C33.9027 14.5167 33.8461 14.0567 33.7327 13.69C33.6261 13.3167 33.4627 13.04 33.2427 12.86C33.0294 12.6733 32.7627 12.58 32.4427 12.58C32.1227 12.58 31.8527 12.6733 31.6327 12.86C31.4194 13.04 31.2594 13.3167 31.1527 13.69C31.0461 14.0567 30.9927 14.5167 30.9927 15.07C30.9927 15.6233 31.0461 16.0867 31.1527 16.46C31.2594 16.8267 31.4194 17.1033 31.6327 17.29C31.8527 17.47 32.1227 17.56 32.4427 17.56Z"></path>
                        <path d="M37.362 18.37L41.682 11.77H42.602L38.292 18.37H37.362ZM37.622 11.67C37.962 11.67 38.2554 11.7467 38.502 11.9C38.7554 12.0533 38.9487 12.2667 39.082 12.54C39.222 12.8133 39.292 13.1367 39.292 13.51C39.292 13.8767 39.222 14.2 39.082 14.48C38.9487 14.7533 38.7554 14.9667 38.502 15.12C38.2554 15.2733 37.962 15.35 37.622 15.35C37.2887 15.35 36.9954 15.2733 36.742 15.12C36.4887 14.9667 36.292 14.7533 36.152 14.48C36.0187 14.2 35.952 13.8767 35.952 13.51C35.952 13.1367 36.0187 12.8133 36.152 12.54C36.292 12.2667 36.4887 12.0533 36.742 11.9C36.9954 11.7467 37.2887 11.67 37.622 11.67ZM37.622 12.45C37.4554 12.45 37.312 12.4933 37.192 12.58C37.072 12.66 36.982 12.78 36.922 12.94C36.862 13.0933 36.832 13.2833 36.832 13.51C36.832 13.73 36.862 13.92 36.922 14.08C36.982 14.24 37.072 14.36 37.192 14.44C37.312 14.52 37.4554 14.56 37.622 14.56C37.7954 14.56 37.942 14.52 38.062 14.44C38.182 14.36 38.272 14.24 38.332 14.08C38.392 13.92 38.422 13.73 38.422 13.51C38.422 13.2833 38.392 13.0933 38.332 12.94C38.272 12.78 38.182 12.66 38.062 12.58C37.942 12.4933 37.7954 12.45 37.622 12.45ZM42.342 14.79C42.682 14.79 42.9754 14.8667 43.222 15.02C43.4754 15.1733 43.6687 15.39 43.802 15.67C43.942 15.9433 44.012 16.2633 44.012 16.63C44.012 17.0033 43.942 17.3267 43.802 17.6C43.6687 17.8733 43.4754 18.0867 43.222 18.24C42.9754 18.3933 42.682 18.47 42.342 18.47C42.0087 18.47 41.7154 18.3933 41.462 18.24C41.2087 18.0867 41.012 17.8733 40.872 17.6C40.7387 17.3267 40.672 17.0033 40.672 16.63C40.672 16.2633 40.7387 15.9433 40.872 15.67C41.012 15.39 41.2087 15.1733 41.462 15.02C41.7154 14.8667 42.0087 14.79 42.342 14.79ZM42.342 15.58C42.1754 15.58 42.032 15.62 41.912 15.7C41.792 15.78 41.702 15.9 41.642 16.06C41.582 16.2133 41.552 16.4033 41.552 16.63C41.552 16.85 41.582 17.04 41.642 17.2C41.702 17.36 41.792 17.4833 41.912 17.57C42.032 17.65 42.1754 17.69 42.342 17.69C42.5154 17.69 42.662 17.65 42.782 17.57C42.902 17.4833 42.992 17.36 43.052 17.2C43.112 17.04 43.142 16.85 43.142 16.63C43.142 16.41 43.112 16.22 43.052 16.06C42.992 15.9 42.902 15.78 42.782 15.7C42.662 15.62 42.5154 15.58 42.342 15.58Z"></path>
                        <path d="M50.8628 11.67C51.4561 11.67 51.9695 11.7833 52.4028 12.01C52.8361 12.23 53.2028 12.5567 53.5028 12.99L52.7828 13.68C52.5295 13.2933 52.2428 13.0167 51.9228 12.85C51.6095 12.6767 51.2361 12.59 50.8028 12.59C50.4828 12.59 50.2195 12.6333 50.0128 12.72C49.8061 12.8067 49.6528 12.9233 49.5528 13.07C49.4595 13.21 49.4128 13.37 49.4128 13.55C49.4128 13.7567 49.4828 13.9367 49.6228 14.09C49.7695 14.2433 50.0395 14.3633 50.4328 14.45L51.7728 14.75C52.4128 14.89 52.8661 15.1033 53.1328 15.39C53.3995 15.6767 53.5328 16.04 53.5328 16.48C53.5328 16.8867 53.4228 17.24 53.2028 17.54C52.9828 17.84 52.6761 18.07 52.2828 18.23C51.8961 18.39 51.4395 18.47 50.9128 18.47C50.4461 18.47 50.0261 18.41 49.6528 18.29C49.2795 18.17 48.9528 18.0067 48.6728 17.8C48.3928 17.5933 48.1628 17.3567 47.9828 17.09L48.7228 16.35C48.8628 16.5833 49.0395 16.7933 49.2528 16.98C49.4661 17.16 49.7128 17.3 49.9928 17.4C50.2795 17.5 50.5961 17.55 50.9428 17.55C51.2495 17.55 51.5128 17.5133 51.7328 17.44C51.9595 17.3667 52.1295 17.26 52.2428 17.12C52.3628 16.9733 52.4228 16.8 52.4228 16.6C52.4228 16.4067 52.3561 16.2367 52.2228 16.09C52.0961 15.9433 51.8561 15.83 51.5028 15.75L50.0528 15.42C49.6528 15.3333 49.3228 15.21 49.0628 15.05C48.8028 14.89 48.6095 14.6967 48.4828 14.47C48.3561 14.2367 48.2928 13.9767 48.2928 13.69C48.2928 13.3167 48.3928 12.98 48.5928 12.68C48.7995 12.3733 49.0961 12.13 49.4828 11.95C49.8695 11.7633 50.3295 11.67 50.8628 11.67Z"></path>
                        <path d="M55.0288 18.37V11.77H59.8088V12.69H56.0988V14.59H58.9988V15.49H56.0988V17.45H59.9488V18.37H55.0288Z"></path>
                        <path d="M63.9491 18.47C63.3291 18.47 62.7924 18.3333 62.3391 18.06C61.8857 17.7867 61.5324 17.4 61.2791 16.9C61.0257 16.3933 60.8991 15.7833 60.8991 15.07C60.8991 14.37 61.0291 13.7667 61.2891 13.26C61.5557 12.7533 61.9291 12.3633 62.4091 12.09C62.8957 11.81 63.4524 11.67 64.0791 11.67C64.7657 11.67 65.3191 11.7967 65.7391 12.05C66.1657 12.3033 66.5057 12.6967 66.7591 13.23L65.7691 13.7C65.6424 13.3333 65.4324 13.06 65.1391 12.88C64.8524 12.6933 64.5024 12.6 64.0891 12.6C63.6757 12.6 63.3124 12.6967 62.9991 12.89C62.6924 13.0833 62.4524 13.3667 62.2791 13.74C62.1057 14.1067 62.0191 14.55 62.0191 15.07C62.0191 15.5967 62.0957 16.0467 62.2491 16.42C62.4024 16.7867 62.6324 17.0667 62.9391 17.26C63.2524 17.4533 63.6357 17.55 64.0891 17.55C64.3357 17.55 64.5657 17.52 64.7791 17.46C64.9924 17.3933 65.1791 17.3 65.3391 17.18C65.4991 17.0533 65.6224 16.8967 65.7091 16.71C65.8024 16.5167 65.8491 16.29 65.8491 16.03V15.84H63.9291V14.97H66.7991V18.37H65.9991L65.9391 17.04L66.1391 17.14C65.9791 17.56 65.7124 17.8867 65.3391 18.12C64.9724 18.3533 64.5091 18.47 63.9491 18.47Z"></path>
                        <path d="M73.7654 11.77V15.84C73.7654 16.7133 73.5354 17.37 73.0754 17.81C72.6154 18.25 71.9454 18.47 71.0654 18.47C70.1987 18.47 69.5321 18.25 69.0654 17.81C68.6054 17.37 68.3754 16.7133 68.3754 15.84V11.77H69.4454V15.71C69.4454 16.33 69.5787 16.79 69.8454 17.09C70.112 17.39 70.5187 17.54 71.0654 17.54C71.6187 17.54 72.0287 17.39 72.2954 17.09C72.5621 16.79 72.6954 16.33 72.6954 15.71V11.77H73.7654Z"></path>
                        <path d="M78.2852 11.77C78.9919 11.77 79.5519 11.9467 79.9652 12.3C80.3852 12.6533 80.5952 13.13 80.5952 13.73C80.5952 14.35 80.3852 14.83 79.9652 15.17C79.5519 15.5033 78.9919 15.67 78.2852 15.67L78.1852 15.73H76.6552V18.37H75.5952V11.77H78.2852ZM78.2052 14.84C78.6386 14.84 78.9586 14.7533 79.1652 14.58C79.3786 14.4 79.4852 14.1267 79.4852 13.76C79.4852 13.4 79.3786 13.13 79.1652 12.95C78.9586 12.77 78.6386 12.68 78.2052 12.68H76.6552V14.84H78.2052ZM78.8352 15.06L80.9852 18.37H79.7552L77.9152 15.48L78.8352 15.06Z"></path>
                        <path d="M84.9954 11.67C85.6354 11.67 86.1887 11.8067 86.6554 12.08C87.122 12.3533 87.482 12.7433 87.7354 13.25C87.9887 13.7567 88.1154 14.3633 88.1154 15.07C88.1154 15.7767 87.9887 16.3833 87.7354 16.89C87.482 17.3967 87.122 17.7867 86.6554 18.06C86.1887 18.3333 85.6354 18.47 84.9954 18.47C84.3621 18.47 83.812 18.3333 83.3454 18.06C82.8787 17.7867 82.5187 17.3967 82.2654 16.89C82.0121 16.3833 81.8854 15.7767 81.8854 15.07C81.8854 14.3633 82.0121 13.7567 82.2654 13.25C82.5187 12.7433 82.8787 12.3533 83.3454 12.08C83.812 11.8067 84.3621 11.67 84.9954 11.67ZM84.9954 12.6C84.5821 12.6 84.2254 12.6967 83.9254 12.89C83.6321 13.0833 83.4054 13.3633 83.2454 13.73C83.0854 14.0967 83.0054 14.5433 83.0054 15.07C83.0054 15.59 83.0854 16.0367 83.2454 16.41C83.4054 16.7767 83.6321 17.0567 83.9254 17.25C84.2254 17.4433 84.5821 17.54 84.9954 17.54C85.4154 17.54 85.7721 17.4433 86.0654 17.25C86.3654 17.0567 86.5954 16.7767 86.7554 16.41C86.9154 16.0367 86.9954 15.59 86.9954 15.07C86.9954 14.5433 86.9154 14.0967 86.7554 13.73C86.5954 13.3633 86.3654 13.0833 86.0654 12.89C85.7721 12.6967 85.4154 12.6 84.9954 12.6Z"></path>
                    </svg>

                </div>
            </div>
        </footer>

    </div><!-- /.inner-body -->
    <input type="hidden" value="{{$data['id_loja']}}" id="__l">
    <script src="https://cdn.yampi.me/jquery/jquery.js"></script>
    <script src="/libs/jquery.mask.js"></script>
    <script>
        <?php
        if($data['resumo_aberto']){
            echo '
                    setTimeout(() => {
                        $(".js-box-resume-title").click()
                    }, 1000);
                ';
        }
        ?>
    </script>
    <script>

        $.post('/local/checkout',{
            useragent: window.navigator.userAgent,
            local: 'Entrega - Yampi',
            hash: $('[a_hash="h_checkout"]').attr('hash'),
            il: $("#__l").val()
        },(r)=>{
            console.log("|           ^_^          |");
        })


        $('.js-box-resume-title').click(function(e){
            console.log(e)
            var e = $(this).parent(),
                t = e.find(".js-box-animation");
            if($(this).hasClass('opened')) $(this).removeClass('opened')
            else $(this).addClass('opened')
            e.removeClass("opened"), "none" === t.css("display") && e.addClass("opened"), t.slideToggle({
                duration: 300
            }) })

        // Garantir clique funcional no mobile para ícone/seta e total
        $(document).on('click touchstart', '.js-box-resume-title .icon, .js-box-resume-title .cart_total', function(ev){
            ev.preventDefault();
            ev.stopPropagation();
            var header = $(this).closest('.js-box-resume-title');
            var box = header.parent();
            var t = box.find('.js-box-animation');
            if(header.hasClass('opened')) header.removeClass('opened');
            else header.addClass('opened');
            box.removeClass('opened');
            if(t.css('display') === 'none') box.addClass('opened');
            t.slideToggle({ duration: 300 });
        });

        $("#botao_edita").click(function(e){
            let __lc = window.location.href;
            __lc = __lc.slice(0,-1) + '1';
            location.href = __lc
        })

        $("#input_cep").mask('00000-000')
        $("#input_cep").on('input',function(e){
            let a = $('.w-50')[0];
            if($(this).val().length > 8){
                $(".holder-input-zipcode").addClass('loading')

                $.ajax({
                    url: `https://viacep.com.br/ws/${$(this).val()}/json/`,
                    success: (retorno)=>{
                        $("#rua").val(retorno.logradouro);
                        $("#bairro").val(retorno.bairro);
                        $(".city-infos").removeClass('hide');
                        $(".city-name").text(retorno.localidade);
                        $(".city-uf").text(retorno.uf)
                    },
                    complete: ()=>{
                        $("#form_endereco").removeClass('hide')
                        $(".holder-input-zipcode").removeClass('loading')
                    }
                })


            }else if($(this).val.length > 0 && $(this).val().length < 8){
                $(a).addClass('group-error');
            }else{
                $(a).removeClass('group-error');
            }
        })



        let errors

        const showError = (errorBlockId, inputId) =>{
            errors = true


            $(errorBlockId).show()
            $(inputId).css("background", "#FFE3E3")
            setTimeout(() => {
                $(errorBlockId).hide()
                $(inputId).css("background", "white")
            }, 5000);
        }

        $("#btn_salva_end").click(function(e){
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();

            const cep = $("#input_cep").val().trim()
            const rua = $("#rua").val().trim()
            const numero = $("#numero").val().trim()
            const bairro = $("#bairro").val().trim()

            errors = false

            if(!cep || cep.length<8){

                showError('#cep_errors', '#input_cep');
            }

            if(!rua || rua.length<3){

                showError('#rua_errors', '#rua');
            }

            if(!bairro || bairro.length<3){

                showError('#bairro_errors', '#bairro');
            }

            if(!numero || numero.length<1){

                showError('#numero_errors', '#numero');
            }



            if(errors){
                return
            }

            $(this).addClass("sending");

            $.ajax({
                url: '/checkout/enderecoCarrinho',
                type: 'POST',
                data:{
                    hash: $('[a_hash="h_checkout"]').attr('hash'),
                    cep: $("#input_cep").val(),
                    rua: $("#rua").val(),
                    numero: $("#numero").val(),
                    bairro: $("#bairro").val(),
                    complemento: $("#address_complement").text()
                },success:(retorno)=>{
                    if(retorno.status == 200){
                        $("#cep_endereco").text($("#input_cep").val());
                        $("#texto_endereco").text(
                            `${$("#rua").val()}, ${$("#numero").val()} - ${$("#bairro").val()}`

                        );
                        let __a = $(".city-name")[0];
                        let __b = $(".city-uf")[0];
                        $("#cidade_uf").text(`${$(__a).text()}-${$(__b).text()} `)
                    }
                },complete:()=>{

                    $("#div_entrega_1").attr('style', 'display: none !important');
                    $("#div_entrega").show();

                }
            })

        })

        function editarEndereco(){
            $("#div_entrega_1").attr('style', 'display: block !important');
            $("#div_entrega").attr('style', 'display: none !important');
        }

        $(".labelsenvio").click(function(e){
            $(".labelsenvio").each((i,v)=>{
                $(v).removeClass('selected')
                $(v).find(':first-child').removeClass('checked')
            })
            $(this).addClass('selected');
            $(this).find(':first-child').addClass('checked');
        })

        function goToPagamento(){

        }

        $("#btn_pagamento").click(function(e){
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();

            $(this).addClass('sending');

            let vl_frete;
            let freteSelecionado;
            $(".labelsenvio").each((i,v)=>{
                if($(v).hasClass('selected')){
                    freteSelecionado = $(v).attr('_frete')??'Não capturado.';
                    vl_frete = $(v).attr('_valor')??'0';
                }
            });

            $.ajax({
                url: '/checkout/atualizaFreteCarrinho',
                type: 'POST',
                data: {
                    hash: $('[a_hash="h_checkout"]').attr('hash'),
                    frete: freteSelecionado??'Não capturado',
                    vlfrete: vl_frete??'0'
                },
                success: (r)=>{
                    if(r.status == 200){
                        location.href = "/checkout/1/" + $('[a_hash="h_checkout"]').attr('hash') + "/3"
                    }
                }
            })


        })

        $(".less").click(function(e){
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();

            let vl = parseInt($("#input_valor").val());
            if(vl == 1) return;
            $("#input_valor").val(vl - 1).change();
        });

        $(".more").click(function(e){
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();

            let vl = parseInt($("#input_valor").val());
            $("#input_valor").val(vl + 1).change();
        })

        $("#input_valor").change(function(e){
            $.post('/checkout/updateQuantidade',{
                hash: $('[a_hash="h_checkout"]').attr('hash'),
                q: $("#input_valor").val()
            },(r)=>{
                if(r.status == 200){
                    let vl = ($("#vl_produto_lista").attr('valor') * 1 * parseInt($("#input_valor").val())).toFixed(2)
                    vl = vl.replace('.', ',');
                    $("#vl_produto_lista").text(`R$ ${vl}`)
                    $("#valor_total").text(`R$ ${vl}`)
                    $(".-total").text(`R$ ${vl}`)
                    $("#contador_qtd").text(`(${$("#input_valor").val()})`)
                }
            })
        })

    </script>



    <div class="shopify-handler" data-shop="http://lojaliford.com/a/checkout" data-redirect-uri="https://seguro.lojaliford.com/cart" style="display: none;"></div>

    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"NRJS-1173a7bb9742e987ab2","applicationID":"926985131","transactionName":"NlQEYUJSDBFUBkdZWQ8eJ1ZEWg0MGgZbVVUKXhNBHlIGBkcAQEM=","queueTime":0,"applicationTime":301,"atts":"GhMHFwpIHx8=","errorBeacon":"bam.nr-data.net","agent":""}</script>
    <div><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; position: fixed; visibility: hidden; display: block; transition: right 0.3s ease 0s; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdxeuoUAAAAAP6iiKD6JZKojOflG8Z_w0Ebx6LC&amp;co=aHR0cHM6Ly9zZWd1cm8ubG9qYWxpZm9yZC5jb206NDQz&amp;hl=pt-BR&amp;v=wqcyhEwminqmAoT8QO_BkXCr&amp;size=invisible&amp;cb=vpepoh3vjlal" width="256" height="60" role="presentation" name="a-1o07bpd2iw65" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div><iframe id="_hjSafeContext_67908685" title="_hjSafeContext" tabindex="-1" aria-hidden="true" src="about:blank" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe></body></html>
