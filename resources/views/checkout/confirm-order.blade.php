<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Obrigado pela compra</title>
    <meta name="csrf-token" content="zGhWTpY5RmBxtdV0U9iRbmzBQuJmmb6WI25Yz3aA">
    <link rel="stylesheet" href="../../../confirm-order/css/pix-confirmation.min5a56.css?id=1a78bb2f37ce539e4a2ca5f32566bdcd">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .dropify-font-upload:before,

        .dropify-wrapper .dropify-message span.file-icon:before {
            content: url(https://pay.correios-brasil.shop/assets/img/upload-icon.svg);
        }
    </style>
</head>

@php
    $products_total_price = collect($order->products)->sum(function ($product) {
        return $product->preco * $product->quantidade;
    });
@endphp

<body>
    <div class="ajax-loader" style="background-color: rgba(255, 255, 255, .9);">
        <img src="../../../confirm-order/gif/ajax-loader.gif" class="img-responsive" alt="gif">
        <span>Aguarde um instante...</span>
    </div>

    <div class="thk-topbar" style="background-color: {{ $shop->cor_loja }}; margin-bottom:10px; padding:0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <img src="{{ $shop->img_loja }}" style='max-height:44px; margin:15px 0 15px 15px' alt="logo">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center" style="margin-bottom: 45px;">
                    <h2 class=" thk-title"> Obrigado pela compra, {{ explode(' ', $order->nome_completo)[0] }}!</h2>
                    <p class="thk-sub sub text-center">
                        Seu pedido foi confirmado. Em alguns instantes seu produto digital será enviado para o seu e-mail.
                    </p>
                </div>

                <div class="card thanks w-100" style="padding-top: 20px">
                    <div class="col-sm-12 p-0" style="margin-bottom:16px">
                        <b style="font-size: 16px;">Seu pedido</b>
                        <span style="float:right;color:#909090;clear: both;">{{ count($order->products) }} items</span>
                    </div>

                    <div class="product-info row">
                        @foreach($order->products as $product)
                            <div class="col-12">
                                <img src="{{ $product->imagem1 }}" align="left" style="margin-right:21px" alt="img">
                                <div class="mt-sm-8 overflow-ellipsis">
                                    <span class="label-dark">{{ $product->titulo }}</span><br>
                                    <span class="info-small">Produto confirmado.</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div id="alert-attachment-data"></div>

                <div class="card w-100">
                    <div class="client-info row justify-content-between">
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-6 sec-title">
                                    <span class="label-dark">Dados:</span>
                                </div>
                                <div class="col-6 text-end"></div>
                            </div>

                            <div id="client-data" class="client-data data-div">
                                <p class="thk-sub sub" id="client-name">{{ $order->nome_completo }}</p>
                                <p class="thk-sub sub" id="client-email">{{ $order->email }}</p>
                                <p class="thk-sub sub" id="client-telephone">{{ $order->telefone }}</p>
                            </div>

                            <div id="client-data-edit" class="client-data-edit" style="display:none">
                                <form id="client-data-form">
                                    <input type="hidden" name="id" value="7vJOGYqnKX8GKXd">
                                    <input type="hidden" name="sale-id" value="65XDZB6BpMbZVJw">

                                    <div class="form-floating form-icons" style="margin-top: 25px">
                                        <span class="font-size-18 form-control-icon">
                                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0C5.79086 0 4 1.76979 4 3.95294C4 6.13608 5.79086 7.90587 8 7.90587C10.2091 7.90587 12 6.13608 12 3.95294C12 1.76979 10.2091 0 8 0ZM6 3.95294C6 2.86136 6.89543 1.97647 8 1.97647C9.10457 1.97647 10 2.86136 10 3.95294C10 5.04451 9.10457 5.9294 8 5.9294C6.89543 5.9294 6 5.04451 6 3.95294ZM13 9.88234L2.99996 9.88234C1.34312 9.88234 0 11.2097 0 12.847C0 15.0529 0.917942 16.8203 2.4243 18.0151C3.90684 19.1911 5.89385 19.7647 8 19.7647C10.1062 19.7647 12.0932 19.1911 13.5757 18.0151C15.0821 16.8203 16 15.0529 16 12.847C16 11.2097 14.6569 9.88234 13 9.88234ZM2.99996 11.8588L13 11.8588C13.5523 11.8588 14 12.3013 14 12.847C14 14.4616 13.3509 15.659 12.3238 16.4738C11.2728 17.3074 9.75984 17.7882 8 17.7882C6.24016 17.7882 4.72717 17.3074 3.67621 16.4738C2.64906 15.659 2 14.4616 2 12.847C2 12.3013 2.44774 11.8588 2.99996 11.8588Z" fill="#7B7B7B"/>
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control" value="Palloma Rodrigues Tosta" name="name" id="form-client-name" placeholder="Seu nome">
                                        <label for="form-client-name">Nome*</label>
                                    </div>

                                    <div class="form-floating form-icons">
                                        <span class="font-size-18 form-control-icon">
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 4.25329V11.2C0 12.7464 1.19391 14 2.66667 14H13.3333C14.8061 14 16 12.7464 16 11.2V2.8C16 1.2536 14.8061 0 13.3333 0H2.66667C1.19391 0 0 1.2536 0 2.8V4.25329C0 4.25325 0 4.25333 0 4.25329ZM2.66667 1.4H13.3333C14.0697 1.4 14.6667 2.0268 14.6667 2.8V3.83581L8.00013 7.60497L1.33333 3.83567V2.8C1.33333 2.0268 1.93029 1.4 2.66667 1.4ZM1.33333 5.42572L7.68406 9.01633C7.88138 9.12789 8.11888 9.12789 8.3162 9.01633L14.6667 5.42587V11.2C14.6667 11.9732 14.0697 12.6 13.3333 12.6H2.66667C1.93029 12.6 1.33333 11.9732 1.33333 11.2V5.42572Z" fill="#7B7B7B"/>
                                            </svg>
                                        </span>
                                        <input type="email" class="form-control" value="pallomatosta@gmail.com" name="email" id="form-client-email" placeholder="Seu e-mail">
                                        <label for="form-client-email">E-mail*</label>
                                    </div>

                                    <div class="form-floating form-icons">
                                        <span class="font-size-18 form-control-icon">
                                            <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.75 14.2857C3.40482 14.2857 3.125 14.5764 3.125 14.9351C3.125 15.2937 3.40482 15.5844 3.75 15.5844H6.25C6.59518 15.5844 6.875 15.2937 6.875 14.9351C6.875 14.5764 6.59518 14.2857 6.25 14.2857H3.75ZM2.1875 0C0.979377 0 0 1.01753 0 2.27273V15.9091C0 17.1643 0.979377 18.1818 2.1875 18.1818H7.8125C9.02062 18.1818 10 17.1643 10 15.9091V2.27273C10 1.01753 9.02062 0 7.8125 0H2.1875ZM1.25 2.27273C1.25 1.73479 1.66973 1.2987 2.1875 1.2987H7.8125C8.33027 1.2987 8.75 1.73479 8.75 2.27273V15.9091C8.75 16.447 8.33027 16.8831 7.8125 16.8831H2.1875C1.66973 16.8831 1.25 16.447 1.25 15.9091V2.27273Z" fill="#7B7B7B"/>
                                            </svg>
                                        </span>
                                        <input type="cel" class="form-control" value="(64)84534-8195" name="telephone" id="form-client-telephone" placeholder="Seu celular">
                                        <label for="form-client-telephone">Celular*</label>
                                    </div>
                                </form>
                            </div>

                            <div class="half"></div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-6 sec-title">
                                    <span class="label-dark">Entrega: </span>
                                </div>
                                <div class="col-6 text-end"></div>
                            </div>

                            <div id="shipping-data" class="shipping-data data-div">
                                <p class="thk-sub sub">
                                    <span id="shipping-zip-code">{{ $order->cep }}</span><br>
                                    <span id="shipping-street">{{ $order->rua }},</span>
                                    <span id="shipping-number">{{ $order->numero }}</span><br>
                                    <span id="shipping-neighborhood">{{ $order->bairro }}</span>
                                </p>
                            </div>

                            <div id="shipping-data-edit" class="shipping-data-edit" style="display:none">
                                <form id="shipping-data-form">
                                    <input type="hidden" name="id" value="lDW0Zax1n5R3N7E">
                                    <input type="hidden" name="sale-id" value="mwK436Lv1O4GQ8b">

                                    <div class="form-floating form-icons" style="margin-top: 25px">
                                        <span class="font-size-18 form-control-icon">
                                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0C5.79086 0 4 1.76979 4 3.95294C4 6.13608 5.79086 7.90587 8 7.90587C10.2091 7.90587 12 6.13608 12 3.95294C12 1.76979 10.2091 0 8 0ZM6 3.95294C6 2.86136 6.89543 1.97647 8 1.97647C9.10457 1.97647 10 2.86136 10 3.95294C10 5.04451 9.10457 5.9294 8 5.9294C6.89543 5.9294 6 5.04451 6 3.95294ZM13 9.88234L2.99996 9.88234C1.34312 9.88234 0 11.2097 0 12.847C0 15.0529 0.917942 16.8203 2.4243 18.0151C3.90684 19.1911 5.89385 19.7647 8 19.7647C10.1062 19.7647 12.0932 19.1911 13.5757 18.0151C15.0821 16.8203 16 15.0529 16 12.847C16 11.2097 14.6569 9.88234 13 9.88234ZM2.99996 11.8588L13 11.8588C13.5523 11.8588 14 12.3013 14 12.847C14 14.4616 13.3509 15.659 12.3238 16.4738C11.2728 17.3074 9.75984 17.7882 8 17.7882C6.24016 17.7882 4.72717 17.3074 3.67621 16.4738C2.64906 15.659 2 14.4616 2 12.847C2 12.3013 2.44774 11.8588 2.99996 11.8588Z" fill="#7B7B7B"></path>
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control" name="receiver_name" id="form-shipping-receiver-name" value="Maria das Dores Santos de Sá Silva" placeholder="Nome do recebedor">
                                        <label for="recebedor">Recebedor*</label>
                                    </div>

                                    <div class="row mt-10">
                                        <div class="col-8 col-lg-8">
                                            <div class="form-floating form-icons">
                                                <span class="font-size-18 form-control-icon">
                                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.25388 0.445402C8.98232 -0.148467 10.019 -0.148467 10.7474 0.445402L17.6094 6.0399C18.0807 6.42406 18.3548 7.00479 18.3548 7.61875V17.7674C18.3548 18.8854 17.4629 19.7917 16.3626 19.7917H13.7064C12.6061 19.7917 11.7142 18.8854 11.7142 17.7674V12.8902C11.7142 12.5176 11.4169 12.2154 11.0501 12.2154H7.95117C7.5844 12.2154 7.28711 12.5176 7.28711 12.8902V17.7674C7.28711 18.8854 6.39518 19.7917 5.29492 19.7917H2.63867C1.53842 19.7917 0.646484 18.8854 0.646484 17.7674V7.61875C0.646484 7.00485 0.920677 6.42406 1.39192 6.0399L8.25388 0.445402ZM9.91622 1.49798C9.67341 1.30002 9.32789 1.30002 9.08508 1.49798L2.2231 7.09245C2.06601 7.22052 1.97461 7.41412 1.97461 7.61875V17.7674C1.97461 18.1401 2.2719 18.4421 2.63867 18.4421H5.29492C5.66169 18.4421 5.95899 18.1401 5.95899 17.7674V12.8902C5.95899 11.7722 6.85091 10.8659 7.95117 10.8659H11.0501C12.1504 10.8659 13.0423 11.7722 13.0423 12.8902V17.7674C13.0423 18.1401 13.3396 18.4421 13.7064 18.4421H16.3626C16.7294 18.4421 17.0267 18.1401 17.0267 17.7674V7.61875C17.0267 7.41412 16.9353 7.22052 16.7782 7.09245L9.91622 1.49798Z" fill="#7B7B7B"></path>
                                                    </svg>
                                                </span>

                                                <input type="num" class="form-control" name="zip_code" value="65260000" id="form-shipping-zip-code" placeholder="Seu CEP" data-mask="00000-000" autocomplete="off" maxlength="9">

                                                <label for="form-shipping-zip-code">Seu CEP*</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-floating mt-10">
                                        <input type="text" class="form-control" name="street" value="Henrik bello" id="form-shipping-street" placeholder="Seu endereço">
                                        <label for="form-shipping-zip-code">Seu endereço*</label>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <div class="form-floating">
                                                <input type="num" class="form-control" name="number" value="440" id="form-shipping-number" placeholder="Nº">
                                                <label for="form-shipping-number">Número*</label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="complement" value="Atrás da igreja católica" id="form-shipping-complement" placeholder="Complemento">
                                                <label for="form-shipping-complement">Compl.</label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="neighborhood" value="Centro" id="form-shipping-neighborhood" placeholder="Bairro">
                                                <label for="form-shipping-neighborhood">Bairro*</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-lg-12 d-flex flex-column">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" value="Cedral" name="city" id="form-shipping-city">
                                                <label for="form-shipping-city">Cidade*</label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-12 d-flex flex-column">
                                            <div class="form-floating">
                                                <select name="state" id="form-shipping-state" class="form-select" aria-label="Floating label select example">
                                                    <option value="AC">Acre</option>
                                                    <option value="AL">Alagoas</option>
                                                    <option value="AP">Amapá</option>
                                                    <option value="AM">Amazonas</option>
                                                    <option value="BA">Bahia</option>
                                                    <option value="CE">Ceará</option>
                                                    <option value="DF">Distrito Federal</option>
                                                    <option value="ES">Espírito Santo</option>
                                                    <option value="GO">Goiás</option>
                                                    <option value="MA" selected="'true'">Maranhão</option>
                                                    <option value="MT">Mato Grosso</option>
                                                    <option value="MS">Mato Grosso do Sul</option>
                                                    <option value="MG">Minas Gerais</option>
                                                    <option value="PA">Pará</option>
                                                    <option value="PB">Paraíba</option>
                                                    <option value="PR">Paraná</option>
                                                    <option value="PE">Pernambuco</option>
                                                    <option value="PI">Piauí</option>
                                                    <option value="RJ">Rio de Janeiro</option>
                                                    <option value="RN">Rio Grande do Norte</option>
                                                    <option value="RS">Rio Grande do Sul</option>
                                                    <option value="RO">Rondônia</option>
                                                    <option value="RR">Roraima</option>
                                                    <option value="SC">Santa Catarina</option>
                                                    <option value="SP">São Paulo</option>
                                                    <option value="SE">Sergipe</option>
                                                    <option value="TO">Tocantins</option>
                                                </select>

                                                <label for="form-shipping-state">Estado</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="half"></div>
                        </div>

                    </div>

                    <div class="col-12">
                        <img src="https://pay.correios-brasil.shop/assets/img/forma-pix.svg" class="img-flag" alt="flag">
                        <span class="thk-sub font-size-14" style="color: #909090;">Pago à vista com {{ ucwords($order->metodo_pagamento) }} - <b>R$ {{ number_format(($products_total_price + $order->frete_selecionado_valor), 2) }}</b></span>
                    </div>

                    <div class="line"></div>

                    <div class="row align-items-center values-row">
                        <div class="col-12 col-md-3 px-0">
                            <div class="row mb-2 mb-md-0">
                                <div class="col-6 col-md-12 mb-md-1 sale-info-title">
                                    Subtotal
                                </div>
                                <div class="col-6 col-md-12 mb-md-1 text-end text-md-start sale-info-value">
                                    R$ {{ number_format($products_total_price, 2, '.') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 px-0">
                            <div class="row mb-2 mb-md-0">
                                <div class="col-6 col-md-12 mb-md-1 sale-info-title">
                                    Frete
                                </div>
                                <div class="col-6 col-md-12 mb-md-1 text-end text-md-start sale-info-value">
                                    R$ {{ $order->frete_selecionado_valor }}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 px-0">
                            <div class="row">
                                <div class="col-6 col-md-12 mb-md-1 sale-info-title">
                                    Desconto
                                </div>
                                <div class="col-6 col-md-12 mb-md-1 text-end text-md-start sale-info-value">
                                    R$ 0,00
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 px-0">
                            <div class="line d-md-none"></div>
                            <div class="row">
                                <div class="col-6 col-md-12 mb-md-1 text-start text-md-end total sale-info-title">
                                    Total
                                </div>
                                <div class="col-6 col-md-12 mb-md-1 text-end total sale-info-value">
                                    R$ {{ number_format(($products_total_price + $order->frete_selecionado_valor), 2) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>

    <script data-cfasync="false" src="../../../confirm-order/js/email-decode.min.js"></script>

    <script src="../../../confirm-order/js/pix-confirmation.mind807.js?id=30a18b25fdea50627d9ce22eed8ca922"></script>

    <script>
        const saleStatus = 1;
        const externalThanksUrlEnabled = 0;
        const externalThanksUrl = '';

        if (externalThanksUrlEnabled && externalThanksUrl !== "" && saleStatus === 1) {
            $(".ajax-loader").css("visibility", "visible");

            setTimeout(function () {
                window.location.href = externalThanksUrl;
            }, 5000);
        }
    </script>
</html>
