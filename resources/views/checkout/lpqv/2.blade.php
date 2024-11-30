
<!DOCTYPE html>
<html lang="pt-br">

<!-- Head -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Compra Finalizada - {{$data['nm_loja']}}</title>
  <meta name="description" content="" />
  <meta name="author" content="LPQV"/>
  <meta http-equiv="cache-control" content="public"/>
  <meta name="language" content="pt-br"/>

  <!-- Desabilita buscadores -->
  <meta name="robots" value="noindex,nofollow">

  <link rel="dns-prefetch preconnect" href="https://cdn.lpqv.com.br" crossorigin>
  <link rel="dns-prefetch preconnect" href="https://app.lpqv.com.br" crossorigin>
  <link rel="dns-prefetch preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
  <link rel="dns-prefetch preconnect" href="https://www.facebook.com" crossorigin>
  <link rel="dns-prefetch preconnect" href="https://connect.facebook.net" crossorigin>
  <link rel="dns-prefetch preconnect" href="https://stats.g.doubleclick.net" crossorigin>
  <link rel="dns-prefetch preconnect" href="https://www.google-analytics.com" crossorigin>
  <link rel="dns-prefetch preconnect" href="https://www.google.com.br" crossorigin>
  <link rel="dns-prefetch preconnect" href="https://www.google.com" crossorigin>
  <link rel="dns-prefetch preconnect" href="https://www.googleadservices.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <!-- Taboola Pixel Code -->
<script type='text/javascript'>
    window._tfa = window._tfa || [];
    window._tfa.push({notify: 'event', name: 'page_view', id: 1633956});
    !function (t, f, a, x) {
           if (!document.getElementById(x)) {
              t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
           }
    }(document.createElement('script'),
    document.getElementsByTagName('script')[0],
    '//cdn.taboola.com/libtrc/unip/1633956/tfa.js',
    'tb_tfa_script');
  </script>
  <!-- End of Taboola Pixel Code -->
<script>
    _tfa.push({notify: 'event', name: 'make_purchase', id: {{$data['pixeltaboola']}}, revenue: {{floatval(($data['preco'])*$data['quantidade']) + floatval($data['frete_selecionado_valor']) + ($data['orderbump'] == 's' ? $data['vl_orderbump'] : 0)}}, currency: 'BRL', quantity: {{$data['quantidade']}}});
</script>
<!-- End of Taboola Pixel Code -->
  <!-- Favicons -->
      
  <!-- Compartilhamento -->
    <meta property="og:url" content="https://pagamentolojadomecanicor.lpqv.io/" />
  <meta property="og:image" content="" />
  <meta property="og:title" content="{{$data['nm_loja']}}" />
  <meta property="og:description" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="pt_BR" />
  <link rel="canonical" href="https://pagamentolojadomecanicor.lpqv.io/" />

  <!-- Fontes -->
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap">
  <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap">
  </noscript>
  <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Css -->
  <link rel="stylesheet" href="https://cdn.lpqv.io/app/core/assets/dist/css/plugins.min.css?v=112">
  <link rel="stylesheet" href="https://cdn.lpqv.io/app/checkout/assets/dist/css/plugins.min.css?v=121">
  <link rel="stylesheet" href="https://cdn.lpqv.io/app/core/assets/dist/css/style.min.css?v=112">
  <link rel="stylesheet" href="https://cdn.lpqv.io/app/checkout/assets/dist/css/style.min.css?v=121">

  <style>
    .form-input.acc[readonly] { background-color: #F5F5F5; font-weight: 500; }

    .btn-primary {
    background-color: {{$data['cor_loja']}} !important;
    border-color: {{$data['cor_loja']}} !important;
    color: var(--white);
}
  </style>

  
  <!-- Tags -->
      <script>
  window.dataLayer = window.dataLayer || [];
</script>
    <script>
    dataLayer.push({
      'pageType': 'Transaction',
      'event': 'purchase',
      'ecommerce': {
        transaction_id: 'TXQESH4Z8U90',
        currency: 'BRL',
        value: 236.55,
        items: [
            {
              item_id: 'OSL5UVFDD:303',
              item_name: '.',
              currency: 'BRL',
              price: 249.00,
              quantity: 1,
            },]
      }
    });
    </script>                    
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
</script>

 <script>
    <?php 
    if(!empty($data['pixelfb'])){
        for($i = 1; $i <= 6; $i++){
            if($data['pixelfb']['pixel_' . $i] != null){
                echo "fbq('init', " . $data['pixelfb']['pixel_' . $i] . ");";
            }
        }
    }
    ?>
 </script>
  
</head>

<!-- Loader -->
<style>
.loader-container{position:fixed;z-index:150;top:0;right:0;bottom:0;left:0;background-color:#ffffff;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;opacity:0;visibility:hidden;-webkit-transition:.5s;-o-transition:.5s;transition:.5s}.loader-container.active{opacity:1;visibility:visible}.loader,.loader:after,.loader:before{border-radius:50%;width:2.5em;height:2.5em;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation:loader 1.8s infinite ease-in-out;animation:loader 1.8s infinite ease-in-out}.loader{position:relative;margin:0 auto;font-size:10px;color:var(--primary-color);-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-animation-delay:-.16s;animation-delay:-.16s}.loader:after,.loader:before{content:"";position:absolute;top:0}.loader:before{left:-3.5em;-webkit-animation-delay:-.32s;animation-delay:-.32s}.loader:after{left:3.5em}@-webkit-keyframes loader{0%,100%,80%{-webkit-box-shadow:0 2.5em 0 -1.3em;box-shadow:0 2.5em 0 -1.3em}40%{-webkit-box-shadow:0 2.5em 0 0;box-shadow:0 2.5em 0 0}}@keyframes loader{0%,100%,80%{-webkit-box-shadow:0 2.5em 0 -1.3em;box-shadow:0 2.5em 0 -1.3em}40%{-webkit-box-shadow:0 2.5em 0 0;box-shadow:0 2.5em 0 0}}
</style>

<body class="checkout">

  <!--Tags -->
    <!--Tags -->

<style>
  :root {
        --primary-color: #ff5225;
        --btn-color: #008000;
        --top-bar-bg: #ff5225;
        --top-bar-color: #ffffff;
        --steps-color: #00ac69;
      }
</style>

<!-- Header -->
  <header id="header" class="header ">
    <div class="container co-container">
      <div class="row">
        <div class="grid-12 header-wrapper flex-between">
          <!-- Logo -->
                      <figure class="header-logo ">
              <img src="{{( request()->secure() ? 'https' : 'http' )}}://{{$data['img_loja']}}" alt="{{$data['nm_loja']}}">
            </figure>
                    <!-- Selo -->
                      <figure class="header-seal header-seal-right header-seal-1  ml-2">
              <img src="https://cdn.lpqv.io/app/checkout/assets/dist/img/selo_compra_segura.png" alt="Compra segura">
            </figure>
                  </div>
      </div>
    </div>
  </header>
<!-- /.header -->
<!-- Página -->
<div class="main checkout-pag">
  <div class="container co-container">
    <div class="row">

      <!-- Título -->
      <div class="grid-12 order-top">
        @if($data['status'] == 404)
        <h1 class="title left order-title">Pagamento não configurado!</b></h1>
        @else
        <h1  class="title left order-title">Pedido <b style="color: {{$data['cor_loja']}}">#{{substr($data['hash'],0,-5)}}</b></h1>
        @endif
</div>      
      <!-- Conteúdo -->
      <div class="grid-7 grid-md-12 grid-sm-12 grid-xs-12 order-content">

        <!-- Informações para pagamento -->
        
  <!-- Cartão de crédito -->
    <!-- /.Cartão de crédito -->

  <!-- Boleto -->
    <!-- /.Boleto -->

  <!-- Transferência bancária -->
    <!-- /.Transferência bancária -->

  <!-- Pix -->
  @if($data['status'] != 404)
            <div class="card order-payment-wrapper verify-paid-pix">
        <div class="card-body">
          <div class="order-payment-icon"><i class="las la-check-circle"></i></div>
          <div class="order-payment-title">Realize o Pagamento</div>

          <div class="order-payment-subtitle">Realize o pagamento do <b>Pix</b> para garantir a sua compra.</div>
          
                      <div class="order-payment-qr-code-text d-none-xs d-none-sm">Acesse o aplicativo que você utiliza o <b style="color: {{$data['cor_loja']}}">Pix</b><br> e escolha a opção <b style="color: {{$data['cor_loja']}}">Ler QR code</b>.</div>
            <div class="order-payment-qr-code d-none-xs d-none-sm">
              <figure class="img"><img src="{{$data['qrcode']}}" alt="QR Code"></figure>
              <span>Escaneie o QR Code para pagar</span>
            </div>
          
          <div class="order-payment-value mt-3">Valor do Pix: <b style="color: {{$data['cor_loja']}}">R$ {{ str_replace('.',',', number_format(floatval(($data['preco'])*$data['quantidade']) + floatval($data['frete_selecionado_valor']) + ($data['orderbump'] == 's' ? $data['vl_orderbump'] : 0),2) ) }}</b></div>

                      <div class="order-payment-input-text-aux mt-3 mb-1 d-none-xs d-none-sm">Também é possível realizar o pagamento através do código abaixo. Basta copiar e realizar o pagamento no seu aplicativo ou Internet Banking escolhendo a opção <b style="color: {{$data['cor_loja']}}">Pix Copia e Cola</b>.</div>
            <div class="order-payment-input-text-aux mt-2 d-none-xl d-none-lg d-none-md">Para realizar o pagamento, copie o código abaixo, acesse o aplicativo que você utiliza o <b style="color: {{$data['cor_loja']}}">Pix</b>, escolha a opção <b style="color: {{$data['cor_loja']}}">Pix Copia e Cola</b> e insira o código.</div>
            <div class="form-group order-payment-textarea mb-0">
              <textarea name="pix-barcode" id="pix-barcode" class="form-input d-none-xs d-none-sm" rows="2" readonly>{{$data['brcode']}}</textarea>
              <button class="btn btn-primary btn-clipboard d-none-xs d-none-sm btncopiapix" data-clipboard-target="#pix-barcode" data-tippy-content="Copiar código">Copiar Código</button>
              <button class="btn btn-primary btn-clipboard-mb mb-sm-2 mb-xs-2 d-none-xl d-none-lg d-none-md btncopiapix" style="border-color: {{$data['cor_loja']}}; background-color: {{$data['cor_loja']}}" data-clipboard-text="{{$data['brcode']}}" data-message="pix">Copiar Código</button>
            </div>
                  </div>
      </div>
        <!-- /.Pix -->



        <!-- Mensagem personalizada -->
        
        <!-- Produtos digitais -->
        
        <!-- Status atual -->
        <div class="card order-status-wrapper">
  <div class="card-body">
    <div class="order-status order-created-status">
      <div class="order-status-icon"><i class="las la-check"></i></div>
      <div class="order-status-infos">
        <h2 class="order-status-title">Pedido recebido</h2>
        <div class="order-status-text">O seu pedido foi recebido.</div>
      </div>
    </div>
  </div>
</div>

        <!-- Acompanhar entrega -->
        
        <div class="co-resume-mobile"></div>

        <!-- Timeline -->
        <div class="card order-timeline">
  <div class="card-body">
    <ul class="order-timeline-list">
                                                        <li class="oti active current  ">
            <span class="oti-line"></span>
            <div class="oti-date">

            </div>
            <div class="oti-icon"></div>
            <div class="oti-infos">
              <div class="oti-title">Pedido recebido</div>
              <div class="oti-desc">O seu pedido foi recebido.</div>
            </div>
          </li>
                            <li class="oti">
          <span class="oti-line"></span>
          <div class="oti-date">
            <span><b></b></span>
            <span></span>
          </div>
          <div class="oti-icon"></div>
          <div class="oti-infos">
            <div class="oti-title">Aguardando pagamento</div>
            <!-- <div class="oti-desc">O seu pedido está aguardando o pagamento.</div> -->
            <div class="oti-desc">Aguardando...</div>
          </div>
        </li>
          </ul>
  </div>
</div>
      </div>
      <!-- /.Conteúdo -->

      <!-- Resumo -->
      <div class="grid-5 grid-md-12 grid-sm-12 grid-xs-12 co-resume-wrapper">

        <!-- Produtos do pedido -->
        <div id="resume"  class="card co-resume" data-reppend-to=".co-resume-mobile" data-reppend-sizes="md,sm,xs">
  <div style="background-color: {{$data['cor_loja']}}" class="card-header">
    <h2 style="color: white;" class="card-title"><i style="color: white;" class="las la-shopping-bag"></i> Resumo</h2>
    <div class="co-resume-items-btn">
      <button class="btn btn-xs btn-grey co-resume-btn-toggle active"><i class="las la-angle-down"></i></button>
    </div>
  </div>
  <div class="card-body co-resume-items-body">
    <ul class="co-resume-items">
                        <li class="co-r-item">
            <div class="co-r-item-wrp">
              <figure class="co-r-item-image">
                <img src="{{$data['imagem1']}}" alt="{{$data['titulo']}}">
              </figure>
              <div class="co-r-item-infos">
                <h2 class="co-r-item-title">{{$data['titulo']}}</h2>
                <p></p>
                <p>R$ {{ str_replace('.',',', number_format(floatval(($data['preco'])*$data['quantidade']) + ($data['orderbump'] == 's' ? $data['vl_orderbump'] : 0),2) ) }}</p>
                <p>Quantidade: {{$data['quantidade']}}</p>
                              </div>
            </div>
            <div class="co-r-item-price">R$ {{ str_replace('.',',', number_format(floatval(($data['preco'])*$data['quantidade']) + ($data['orderbump'] == 's' ? $data['vl_orderbump'] : 0),2) ) }}</div>
          </li>
                                    </ul>
  </div>
    <div class="card-body border-top co-resume-values">
    <ul>
      <li>
        <span>Produtos</span>
        <span>R$ {{ str_replace('.',',', number_format(floatval(($data['preco'])*$data['quantidade']) + ($data['orderbump'] == 's' ? $data['vl_orderbump'] : 0),2) ) }}</span>
      </li>
                  <li>
        <span>Frete <small></small></span>
        <span>{{ ($data['frete_selecionado_valor'] != 0 ? 'R$ ' . str_replace('.' , ',' , $data['frete_selecionado_valor'] ) : 'Grátis' ) }}</span>
      </li>
                  <li class="dest">
        <span>Total</span>
        <span style="color: {{$data['cor_loja']}}">R$ {{ str_replace('.',',', number_format(floatval(($data['preco'])*$data['quantidade']) + floatval($data['frete_selecionado_valor']) + ($data['orderbump'] == 's' ? $data['vl_orderbump'] : 0),2) ) }}</span>
      </li>
    </ul>
  </div>
  <div class="card-body border-top card-pt-text card-pb-text">
    <b>Forma de pagamento</b><br> 
                  <div class="order-p-bl">
        <figure class="img img-border img-rounded"><img src="https://cdn.lpqv.io/app/core/assets/dist/img/payment/pix.png"></figure>
        <div class="order-p-bl-infos">
          <strong>PIX</strong><br>
          Valor: <b>R$ {{ str_replace('.',',', number_format(floatval(($data['preco'])*$data['quantidade']) + floatval($data['frete_selecionado_valor']) + ($data['orderbump'] == 's' ? $data['vl_orderbump'] : 0),2) ) }}</b>
        </div>
      </div>
          </div>
</div>
        <!-- Informações -->
        <div class="card">
  <div class="card-header" style="background-color: {{$data['cor_loja']}}">
    <h2 style="color: white;" class="card-title"><i style="color: white;" class="las la-user"></i> Informações do pedido</h2>
  </div>
  <div class="card-body border-top card-pt-text card-pb-text order-address">
    <b>Informações do cliente</b><br>
    <small class="d-block">
      <i class="las la-user"></i> {{$data['nome_completo']}}<br>
              <i class="las la-phone"></i> {{$data['telefone']}}<br>
                    <i class="las la-envelope"></i> {{$data['email']}}          </small>
  </div>
    <div class="card-body border-top card-pt-text card-pb-text order-address">
    <b>Endereço de entrega</b><br>
    <small class="d-block">{{$data['nome_completo']}}<br>
    {{$data['rua']}},  {{$data['numero']}},  {{$data['bairro']}}<br>CEP: {{$data['cep']}}</small>
  </div>
  </div>
      </div>
      <!-- /.Resumo -->

    </div>
  </div>
</div>

<!-- /.Página -->

<!-- Footer -->
<footer id="footer" class="footer">
  <div class="container">

    <!-- Copyright -->
    <div id="footer-copyright" class="row footer-row">
      <div class="grid-12">
        <div class="footer-copyright">
                    <span class="md-text"><p>{{$data['nm_loja']}} - CNPJ: {{$data['cnpj_loja']}} - Todos os Direitos Reservados {{date('Y')}}</p></span>
        </div>
      </div>
    </div>
    <!-- /.Copyright -->

  </div>
</footer>
@endif
<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
<!-- Loader -->
<!-- <div id="loader" class="loader-container">
  <div class="loader-wrapper">
    <div class="loader"></div>
    <div id="loader-text" class="loader-text"></div>
  </div>
</div> -->

<!-- Loader -->
<div id="loader" class="loader-container">
  <div class="loader-wrapper">
    <div class="loader-spinner"><div class="spinner primary"></div></div>
    <div id="loader-title" class="loader-title"></div>
    <div id="loader-text" class="loader-text"></div>
  </div>
</div>

<!-- Alerta -->
<div id="modal-alert" class="modal modal-alert modal-center zoom" data-focus="[data-alert-btn]">
  <div class="modal-wrapper">
    <div class="modal-header">
      <div class="modal-alert-icon"><i data-alert-icon></i></div>
      <div class="modal-title" data-alert-title></div>
    </div>
    <div class="modal-body">
      <div class="text-formatted text-center" data-alert-text></div>
    </div>
    <div class="modal-footer center">
      <button class="btn btn-grey" data-modal-toggle="modal-alert" data-alert-btn>Ok</button>
    </div>
  </div>
</div>

<!-- Confirmação -->
<div id="modal-confirm" class="modal modal-alert modal-confirm modal-center zoom" data-focus="[data-confirm-btn]">
  <div class="modal-wrapper">
    <div class="modal-header">
      <div class="modal-alert-icon"><i data-confirm-icon></i></div>
      <div class="modal-title" data-confirm-title></div>
    </div>
    <div class="modal-body">
      <div class="text-formatted text-center" data-confirm-text></div>
    </div>
    <div class="modal-footer flex-around">
      <button class="btn btn-grey" data-modal-toggle="modal-confirm" data-confirm-cancel-btn></button>
      <button class="btn" data-confirm-btn></button>
    </div>
  </div>
</div>

<input type="hidden" id="_vl" value="{{ number_format(floatval(($data['preco'])*$data['quantidade']) + floatval($data['frete_selecionado_valor']) + ($data['orderbump'] == 's' ? $data['vl_orderbump'] : 0),2) }}">

<!-- Informações gerais -->
<span id="infos-base" 
data-core-assets="https://cdn.lpqv.io/app/core/assets/dist/"
data-base-url="https://pagamentolojadomecanicor.lpqv.io/" 
data-store="pagamentolojadomecanicor"
data-base-pag="checkout"
data-store-token="c0e4751855b4b34c1fb29bda50bc303f4935"
data-cart-token=""
data-product-url="checkoutstore" 
data-lp="2"
data-lp-url="https://pagamentolojadomecanicor.lpqv.io/" 
data-has-kit=""
data-has-variant=""
data-store-model="checkoutstore"
data-user-on-pag-param="checkout"
data-gateway-retry=""
data-transaction-id="90"
>
</span>
<input type="hidden" id="_hash" value="{{$data['hash']}}">
<input type="hidden" id="__l" value="{{$data['id_loja']}}">
<input type="hidden" id="vl_produto" value="{{$data['preco']}}">
<script src="/libs/jquery.js"></script>

<!-- JavaScript -->
<script> 
  window.LPQV = window.LPQV || {}; 
  window.LPQV.ob_layout = '';
</script>
<script src="https://cdn.lpqv.io/app/core/assets/dist/js/plugins.min.js?v=112"></script>
<script src="https://cdn.lpqv.io/app/checkout/assets/dist/js/plugins.min.js?v=121"></script>
<script src="https://cdn.lpqv.io/app/core/assets/dist/js/script.min.js?v=112"></script>
<script src="https://cdn.lpqv.io/app/checkout/assets/dist/js/script.min.js?v=121"></script>
<script>

fbq('track', 'Purchase',
    {
    currency: "BRL",
    value: $("#_vl").val()
});
    $.post('/local/checkout',{
    useragent: window.navigator.userAgent,
    localizacao: 'Não Disponível',
    dispositivo: 'Não Disponível',
    local: 'Realizando Pagamento - LPQV',
    hash: $('#_hash').val(),
    il: $("#__l").val()
},(r)=>{
    console.log("|           ^_^          |");
})

$(".btncopiapix").each((i,v)=>{
    $(v).click(function(e){
        e.preventDefault();
        $.post('/checkout/pixc',{
            hash: $('#_hash').val()
        },(r)=>{
            console.log(r + ' ----')
        })
    })
})
</script>

</body>
</html>