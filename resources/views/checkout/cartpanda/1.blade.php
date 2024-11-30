<html><head>
        <script
            src="https://connect.facebook.net/signals/config/217453017315844?v=2.9.110&amp;r=stable"
            async=""></script><script
            src="https://connect.facebook.net/signals/config/148586598190785?v=2.9.110&amp;r=stable"
            async=""></script><script
            src="https://connect.facebook.net/signals/config/1251019442444912?v=2.9.110&amp;r=stable"
            async=""></script><script
            src="https://connect.facebook.net/signals/config/1038816303772197?v=2.9.110&amp;r=stable"
            async=""></script><script async=""
            src="https://connect.facebook.net/en_US/fbevents.js"></script><script>
  window.CartX = window.CartX || {};
     window.themeString = {
      moneyFormat: 'R$ amount',
      shopCurrency : 'BRL',
      actualCurrency : 'BRL',
      creditCardDiscountLabel : 'Cartão'
    };
  
  CartX.Currency = {
        formatMoney: function (e, t) {
            "string" == typeof e && (e = e.replace(".", ""));
            var i = "",
                a = /\{\{\s*(\w+)\s*\}\}/,
                s = t || "$";
            function n(e, t, i, a) {
                if (((i = i || ","), (a = a || "."), isNaN(e) || null === e)) return 0;
                var s = (e = (e / 100).toFixed(t)).split(".");
                return s[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1" + i) + (s[1] ? a + s[1] : "");
            }
            switch (s.match(a)[1]) {
                case "amount":
                    i = n(e, 2);
                    break;
                case "amount_no_decimals":
                    i = n(e, 0);
                    break;
                case "amount_with_comma_separator":
                    i = n(e, 2, ".", ",");
                    break;
                case "amount_no_decimals_with_comma_separator":
                    i = n(e, 0, ".", ",");
                    break;
                case "amount_no_decimals_with_space_separator":
                    i = n(e, 0, " ");
                    break;
                case "amount_with_apostrophe_separator":
                    i = n(e, 2, "'");
            }
            return s.replace(a, i);
        },
    };
</script>
        <title>Uau Gringa - Checkout</title>
        <script src="https://pagamento.uaugringa.shop/js/jquery-3.2.1.min.js"></script>
        <link rel="shortcut icon" href="https://pagamento.uaugringa.shop/images/favicon.ico"
            type="image/x-icon">
        <link rel="icon" href="https://pagamento.uaugringa.shop/images/favicon.ico" type="image/x-icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no, maximum-scale=1">
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600"
            rel="stylesheet" type="text/css">
        <meta name="csrf-token"
            content="C1LrblPMd0RbPQge4uaK5aeyEgScWNJHq8xY7pA1">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
        <link rel="stylesheet" href="https://pagamento.uaugringa.shop/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="https://pagamento.uaugringa.shop/css/checkout_new.css?time=202307021032">
        <link rel="stylesheet" href="https://pagamento.uaugringa.shop/css/sweetalert.css">
        <link rel="stylesheet"
            href="https://pagamento.uaugringa.shop/vendor/intl-tel-input/build/css/intlTelInput.css">
        <meta property="og:image"
            content="https://thumbor.cartpanda.com/fDVxE6-ZQThpFdlSbdkG-wDHJRQ=/640x442/https://assets.mycartpanda.com/static/favicons/22/a9/29/1617699155.png">
        <meta property="og:image:secure_url"
            content="https://thumbor.cartpanda.com/fDVxE6-ZQThpFdlSbdkG-wDHJRQ=/640x442/https://assets.mycartpanda.com/static/favicons/22/a9/29/1617699155.png">
        <meta property="og:image:width" content="640">
        <meta property="og:image:height" content="442">
        <meta http-equiv="Content-Security-Policy" content="default-src * self
            blob: data: gap:; style-src * self 'unsafe-inline' blob: data: gap:;
            script-src * 'self' 'unsafe-eval' 'unsafe-inline' blob: data: gap:;
            object-src * 'self' blob: data: gap:; img-src * self 'unsafe-inline'
            blob: data: gap:; connect-src self * 'unsafe-inline' blob: data:
            gap:; frame-src * self blob: data: gap:;">
        <style>
    .ppplus-loader {
        border: 16px solid #f3f3f3; /* Light grey */
        border-top: 16px solid #3498db; /* Blue */
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .hide-ppplus-loader{
        display:none;
    }
    .header-text p br[data-mce-bogus="1"], .footer-text p br[data-mce-bogus="1"] {
        display: none;
    }
</style>
        <meta name="kdt:page" content="checkout">
        <style type="text/css">
    .hidden {
        display: none!important;
    }
    @font-face {
        font-weight: 400;
        font-style:  normal;
        font-family: 'Inter-Loom';
        src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Regular.woff2') format('woff2');
    }
    @font-face {
        font-weight: 400;
        font-style:  italic;
        font-family: 'Inter-Loom';
        src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Italic.woff2') format('woff2');
    }

    @font-face {
        font-weight: 500;
        font-style:  normal;
        font-family: 'Inter-Loom';
        src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Medium.woff2') format('woff2');
    }
    @font-face {
        font-weight: 500;
        font-style:  italic;
        font-family: 'Inter-Loom';
        src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-MediumItalic.woff2') format('woff2');
    }

    @font-face {
        font-weight: 700;
        font-style:  normal;
        font-family: 'Inter-Loom';
        src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Bold.woff2') format('woff2');
    }
    @font-face {
        font-weight: 700;
        font-style:  italic;
        font-family: 'Inter-Loom';
        src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-BoldItalic.woff2') format('woff2');
    }

    @font-face {
        font-weight: 900;
        font-style:  normal;
        font-family: 'Inter-Loom';
        src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Black.woff2') format('woff2');
    }
    @font-face {
        font-weight: 900;
        font-style:  italic;
        font-family: 'Inter-Loom';
        src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-BlackItalic.woff2') format('woff2');
    }
</style>
        <style type="text/css">
  :root {
    --top_info_checkout_step_name: #807e7e;
    --top_info_checkout_step_desc: #000000;
    --top_info_checkout_edit_button: #2688FF;

    --buttons_background: #2688FF;
      --buttons_text: #2688FF;
      --checkout_body : #FFFFFF;
      --header_bg : #F6F6F5;
      --checkout_text : #000000;
      --checkout_field_title : #111827;
      --checkout_field_subtitle : #6B7280;
      --checkout_icons_background : #F1F1F1;
      --checkout_icons_color : #2C2C2C;
      --finish_purchase_background : #FF7825;
      --finish_purchase_text : #FFFFFF;
      --customer_field_bg : #FFFFFF;
      --checkout_form_border : #D9D9D9;
      --customer_selected_field_outline : #353535;
      --checkout_payment_body : #FFFFFF;
      --customer_selected_field_description : #818181;
      --checkout_payment_title : #000000;
      --payment_field_bg : #ffffff;
      --payment_field_outline : #E8EAEC;

      --payment_section_outside_border : #D9D9D9;
      --payment_selected_field_outline : #E8EAEC;

      --order_summery_background : #FAFAFA;
      --order_summery_background_mo : #FFFFFF;
      --order_summary_header_title_color : #000000;
      --order_summary_header_icon_color : #777777;
      --order_summery_text_color : #000000;
      --order_summery_label_colors: #000000;
      --order_coupon_activation_text_color:#FF7825 ;
      --order_coupon_field_borders:#E8EAEC ;
      --coupon_btn_background : #FF7825;
      --coupon_btn_text : #FFFFFF ;
      --coupon_success_text  : #000000 ;
      --coupon_error_text  : #000000 ;
      --coupon_error_background: #FFF8DE ;
      --checkout_tooltip_icon_color: #E8F2FF ;
      --checkout_tooltip_text_color: #FFFFFF ;
      --checkout_tooltip_background_color: #545454 ;
      --payment_section_field_border: #D9D9D9 ;
      --order_summery_product_title_color: #000000 ;
      --order_summery_product_variant_label_color: #5b5b5b ;
      --em_background_color:#ffffff ;
      --em_text_color:#000000 ;
      --em_padding_top: 0px;
      --em_padding_bottom: 0px;
      --em_margin_top: 0px;
      --em_margin_bottom: 0px;
      --checkout_one_click_title_color : #111827;
      --checkout_one_click_icon_color : #111827;

      --payment_section_outside_border : #D9D9D9;
      --payment_section_field_border : #D9D9D9;
    }


    body.template-checkout .top-info-checkout .info-fir {
        color: var(--top_info_checkout_step_name);
        opacity:1;
    }
    body.template-checkout .top-info-checkout .email,
    .top-info-checkout .cep {
        color: var(--top_info_checkout_step_desc);
    }
    body.template-checkout .top-info-checkout .step-button {
        color: var(--top_info_checkout_edit_button);
    }

    body.template-checkout .prdcts_list .prdct-name h5.bolderFont {
        color: var(--order_summery_product_title_color) !important;
    }

  .payment-method #accordion .panel:last-child .panel-heading.collapsed {
    border-bottom: unset !important;
}
.panel:last-child .panel-collapse.collapse.show {
    border-bottom: none !important;
}
    /*#accordion .panel:last-child .panel-heading{
       border-top: 1px solid var(--payment_section_field_border) !important;
       border-top-right-radius: unset !important;
      border-top-left-radius: unset !important;
    }
    #accordion .panel:first-child .panel-heading{
      border-bottom-color: var(--payment_section_field_border) !important;
    }*/
    

      /*body.template-checkout button{
        background: var(--buttons_background);
          color: var(--buttons_text);
            }*/

      body.template-checkout{
        background-color: var(--checkout_body);
          color:var(--checkout_text);
            }
      .checkout-header-section{
        background-color: var(--header_bg);
        display: block;
        width: 100%;
      }
      body.template-checkout,
      body.template-checkout .bottom-form-content{
        color: var(--checkout_text);
          }
      .check-out-left form legend, .check-out-left form .sec-title{
        color: var(--checkout_field_title);
          }
      .check-out-left .sub-legend, .checkSpan{
        color: var(--checkout_field_subtitle);
          }
          
      .cust-info .form-group input[type='checkbox']:checked {
          background-color: var(--checkout_field_subtitle) !important;
          border-color: var(--checkout_field_subtitle) !important;
          background-image: url("https://pagamento.uaugringa.shop/images/tick_white.svg") !important;
      }
      #save-information-div input[type='checkbox']:checked {
          background-color: var(--checkout_one_click_icon_color) !important;
          border-color: var(--checkout_one_click_icon_color) !important;
          /*background-image: url("https://pagamento.uaugringa.shop/images/tick_white_new.svg") !important;*/
          height: 20px;
          width: 20px;
          padding: 0px;
      }
      #save-information-div input[type='checkbox']:after {
          content: ' ';
          position: relative;
          display: none;
          left: 7px !important;
          top: 3px !important;
          width: 5px;
          height: 10px;
          border: solid white;
          border-width: 0 2px 2px 0;
          -webkit-transform: rotate(35deg);
          -ms-transform: rotate(35deg);
          transform: rotate(35deg);
      }
      #save-information-div input[type='checkbox']:checked:after {
          display: block;
      }
      body.template-checkout .checkout-icon-svg svg circle{
        fill: var(--checkout_icons_background);
          }
      body.template-checkout .checkout-icon-svg svg path, body.template-checkout .checkout-icon-svg svg rect{
        fill: var(--checkout_icons_color);
          }
      /*#cartx-section-checkout_personal_information, #cartx-section-checkout_shipping_information {
      background: #2C2C2C;
      padding: 10px;
    }*/
      body.template-checkout #complete-payment,
      body.template-checkout #loader-button,
      #checkout-step-shipping,
    #checkout-step-personal {

        background: var(--finish_purchase_background) !important;
        color: var(--finish_purchase_text) !important;
      }
      #cartx-section-checkout_personal_information .float-label-control input,
      #cartx-section-checkout_personal_information_g .float-label-control input,
      #cartx-section-checkout_shipping_information .float-label-control input,
      #cartx-section-checkout_shipping_information_g .float-label-control input,
      .multiple_fields .selectric,
      .inner-coupon input.form-control,
      .custom-notes-section textarea {
        background: var(--customer_field_bg);
          
          color: var(--checkout_text);
            }
     

      .iti__flag-container{
        
      }
      #cartx-section-checkout_shipping_information .float-label-control input,
      .multiple_fields .selectric,
      .float-label-control textarea.empty,
      .check-out-left form .float-label-control input.empty,
      #city,
      #zip-code,
      #cartx-section-checkout_shipping_information_g .form-control,
      #cartx-section-checkout_personal_information_g .form-control,
      #checkout_personal_information .form-control,
      #cartx-section-checkout_shipping_information .form-control,
       #cartx-section-checkout_personal_information .form-control{
        box-shadow: 0px 0px 0px 1px var(--checkout_form_border);
        -webkit-box-shadow: 0px 0px 0px 1px var(--checkout_form_border);  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
          -moz-box-shadow:    0px 0px 0px 1px var(--checkout_form_border);
      }

      #cartx-section-checkout_personal_information .float-label-control:not(.error_input) input:focus, #cartx-section-checkout_shipping_information .float-label-control:not(.error_input) input:focus, body.template-checkout input.couponCodeW:focus {
        box-shadow: 0px 0px 0px 2px var(--customer_selected_field_outline) !important;
        -webkit-box-shadow: 0px 0px 0px 1px var(--customer_selected_field_outline) !important;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
          -moz-box-shadow:    0px 0px 0px 1px var(--customer_selected_field_outline) !important;
          }

      
      .payment-info .panel-collapse {
        background: var(--checkout_payment_body);
          }
      .template-checkout .funkyradio label{
        border-color: var(--checkout_form_border) !important;
          background-color: var(--customer_field_bg) !important;
            color : var(--customer_selected_field_description) !important;
              }
      .iti--separate-dial-code .iti__selected-dial-code,
      .iti__country{
        color : var(--customer_selected_field_description) !important;
          font-size: 14px;
          }
      .payment-method .panel-title a, .change-payment-section{
        color: var(--checkout_payment_title);
          }
      .payment-method .form-group {
        background: transparent;
      }
      .payment-method .form-group input, .payment-method .selectric {
       background: var(--customer_field_bg) !important;
       background: transparent !important;
       color: var(--checkout_text) !important;
      }
      .payment-method .form-group:not(.error_input) input, .payment-method .selectric {
        box-shadow: 0px 0px 0px 1px var(--checkout_form_border) !important;
        -webkit-box-shadow:0px 0px 0px 1px var(--checkout_form_border) !important; /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
          -moz-box-shadow:   0px 0px 0px 1px var(--checkout_form_border) !important;
          -webkit-appearance: none;
      }
      
      .payment-method .form-group input, .payment-method .selectric span {
        color: var(--checkout_text) !important;
          }
      .panel-default>.panel-heading {
        border-radius: 0px;
      }
      .panel-default:first-child>.panel-heading {
        border-radius: 25px 25px 0 0;
      }
      .funkyradio input[type="radio"]:empty~label, .funkyradio label.no-radio {
        background: transparent !important;
      }
      .funkyradio-default input[type="radio"]:checked~label:before {
        background-color: var(--checkout_text) !important;
          }
      .funkyradio-default input[type="radio"]:checked~label:after {
        background-color: var(--checkout_body);
          }
      
      .payment-method .form-group input:focus{
        box-shadow: 0px 0px 0px 2px var(--customer_selected_field_outline);
        -webkit-box-shadow:0px 0px 0px 2px var(--customer_selected_field_outline) !important; /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
          -moz-box-shadow:0px 0px 0px 2px var(--customer_selected_field_outline) !important;
        }

      .template-checkout .panel-group{
        border-color: var(--payment_section_outside_border);
          }

      .template-checkout .panel-group,
      .top-info-checkout{
        border-color: var(--payment_section_outside_border);
          }

        .step-second-info{
          border-color: var(--payment_section_field_border);
        }


      body.template-checkout .check-out-right .prdct-qty .prdct_qty,
      body.template-checkout .check-out-right button.btn-number{
        background: var(--order_summery_background);
          color : var(--order_summery_text_color);
            }

      body.template-checkout .check-out-right,
      body.template-checkout .prices_row.total-price.show-summery{
        background-color: var(--order_summery_background);
          }
      body.template-checkout .check-out-right,
      .prices_row.total-price.show-summery {
        border: 1px solid var(--payment_section_outside_border);
        }
      body.template-checkout .check-out-right .prdct-price,
      body.template-checkout .check-out-right .price-value,
      body.template-checkout .prices_row.total-price .price-value span {
        color : var(--order_summery_text_color);
          }
      body.template-checkout .check-out-right .prdct-name h5,
      body.template-checkout .check-out-right .price-title,
      body.template-checkout .check-out-right .text-muted,
      body.template-checkout .checkoutTotal .text-muted,
      body.template-checkout .check-out-right .coupon_row .sub-legend {
        color : var(--order_summery_label_colors) !important;
          }
      body.template-checkout .float-label-control input.couponCodeW {
        box-shadow: var(--order_coupon_field_borders) 0px 0px 0px 1px !important;
        -webkit-box-shadow:var(--order_coupon_field_borders) 0px 0px 0px 1px !important; /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
        -moz-box-shadow:var(--order_coupon_field_borders) 0px 0px 0px 1px !important;
      }
      .inner-coupon .coupon-sec label{
        z-index: 999 !important;
      }
      body.template-checkout .check-out-right .couponFormSubmitBtn,
      .inner-coupon .couponFormSubmitBtn{
        background: var(--coupon_btn_background);
          color: var(--coupon_btn_text);
            width: 100%;
            white-space: normal;
            border-radius: 100px;
            }
      body.template-checkout .coupon_success{
        background: var(--coupon_success_background);
          color:var(--coupon_success_text);
            }
      body.template-checkout .coupon_error, body.template-checkout .high_value_error{
        background: var(--coupon_error_background);
          color:var(--coupon_error_text);
            }
      .sub-legend .checkout-icon-svg {
        height: 1px;
      }


      
      .shipping_rates_option_div .funkyradio input[type="radio"]:empty~label {
        background: var(--customer_field_bg) !important;
          }
      


      .float-label-control label,
      .float-label-control input:not(.empty):focus+label,
        .float-label-control textarea:not(.empty):focus+label {
          
          color:var(--customer_selected_field_description);
            
            }

      .template-checkout .shipping_rates_option_div .funkyradio label.no-radio {
        background: unset !important;
      }

      .form-group:not(.float-label-control) input::placeholder,
      .form-group:not(.float-label-control) input {
          font-family: var(--body_base_family)!important;
          font-weight: var(--placeholder_font_weight)!important;
          font-size: var(--placeholder_font_size)!important;
      }

      .tooltip.bs-tooltip-auto[x-placement^=top] .arrow::before, .tooltip.bs-tooltip-top .arrow::before {
          border-top-color: var(--checkout_tooltip_background_color);
      }

      .tooltip-inner {
          color: var(--checkout_tooltip_text_color);
          background-color: var(--checkout_tooltip_background_color);
      }

    .selectric-items .selectric-scroll {
        border-radius: var(--checkout_form_input_border_radius) !important;
    }

    .selectric-items ul, .selectric-items li {
        color: var(--checkout_text) !important;
        font-family: var(--body_base_family)!important;
        font-weight: var(--placeholder_font_weight)!important;
        font-size: var(--placeholder_font_size)!important;
    }

    .selectric .label {
        position: absolute;
        height: auto;
        /*bottom: 3px;*/
        font-family: var(--body_base_family)!important;
        font-weight: var(--placeholder_font_weight)!important;
        font-size: var(--placeholder_font_size)!important;
        top: 50%;
        transform: translateY(-50%);
    }

    .custom_city_state {
        color: var(--checkout_field_subtitle);
        display: flex;
        align-items: center;
    }

    span.detail_summery {
        color: var(--order_summery_text_color);
    }
    .removeItems svg path, .removeItems svg line {
        stroke: var(--order_summery_text_color);
    }
    .email_marketing {
        background: var(--em_background_color) !important;
        color: var(--em_text_color) !important;
        padding-top: var(--em_padding_top) !important;
        padding-bottom: var(--em_padding_bottom) !important;
        margin-top: var(--em_margin_top) !important;
        margin-bottom: var(--em_margin_bottom) !important;
        
    }
    .email_marketing .form-group {
        line-height: 1;
        display: flex;
    }
    .email_marketing .form-group input[type='checkbox'] {
        position: relative;
    }
    .email_marketing .form-group input[type='checkbox']:after {
        left: 50%;
        top: 50% !important;
        transform: translate(-50%, -50%);
    }
    .email_marketing .checkSpan {
        position: relative;
    }
     
      .payment-method .collapse.show, .template-checkout .panel-default > .panel-heading, .payment-method .panel-group{
        background: transparent !important;
      }
    

    .payment-method .form-group .save_information_text {
      color: var(--checkout_one_click_title_color) !important;
    }

    .payment-method .save_information_safety {
      color: var(--checkout_one_click_title_color) !important;
    }
    .save_information_safety .logo_safety {
      background-color: var(--checkout_one_click_icon_color) !important;
      -webkit-mask: url(https://assets.mycartpanda.com/icons/icon-safety.svg) 0 0/18px 18px;
      mask: url(https://assets.mycartpanda.com/icons/icon-safety.svg) 0 0/18px 18px;
    }
    .coupon_row{
      border-top: none;
    }


    .template-checkout .panel-group{
      border-color: var(--payment_section_outside_border);
    }

    body.template-checkout .check-out-right, .prices_row.total-price.show-summery{
        border: 1px solid var(--payment_section_outside_border);
    }
    body.template-checkout .check-out-right .coupon_row,
    body.template-checkout .check-out-right .prdcts_list,
    body.template-checkout .check-out-right .prices_row.total-price,
    body.template-checkout .check-out-right .prdct-thumb{
      border-color: var(--payment_section_field_border) !important;
    }
    body.template-checkout .check-out-right .float-label-control input.empty{
        box-shadow: var(--payment_section_field_border) 0px 0px 0px 1px;
        -webkit-box-shadow:var(--payment_section_field_border) 0px 0px 0px 1px; /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
        -moz-box-shadow:var(--payment_section_field_border) 0px 0px 0px 1px;
      }

    .payment-method .collapse.show,
    .template-checkout .panel-default > .panel-heading,
    .template-checkout #heading1 {
      border-color: var(--payment_section_field_border) !important;
    }


    /*Shipping method css*/
    .shipping_rates_option_div .funkyradio input[type="radio"]:empty ~ label{
      margin-bottom: 0;
      border: none;
      border-radius: 0 !important;
      border-left: 1px solid var(--payment_section_outside_border) !important;
      border-right: 1px solid var(--payment_section_outside_border) !important;
      border-top: 1px solid  !important;
      border-top-color: var(--payment_section_field_border) !important;
    }
/*    var(--payment_section_outside_border)*/
    .funkyradio:last-child label {
      border-bottom: 1px solid var(--payment_section_outside_border) !important;
    }
    .shipping_rates_option_div .funkyradio:first-child input[type="radio"] ~ label {
      border-top-right-radius: 5px !important;
      border-top-left-radius: 5px !important;
      border-top-color: var(--payment_section_outside_border) !important;
    }
    .shipping_rates_option_div .funkyradio:last-child input[type="radio"] ~ label {
      border-bottom-right-radius: var(--checkout_form_input_border_radius) !important;
      border-bottom-left-radius: var(--checkout_form_input_border_radius) !important;
    }

    /* checkout_form_input_border_radiu Shipping method css end */
    
      @media screen and (min-width: 992px){
        body.template-checkout .check-out-left{
          border-right: 1px solid var(--payment_section_outside_border)!important;
          background-color: var(--checkout_body);
        }
        body.template-checkout .check-out-right{
          border: none;
        }
        .row.check-out-row-outr {
          background-color: var(--order_summery_background);
          height: 100%;
        }
        body.template-checkout .wrapper{
          background: linear-gradient(90deg, var(--checkout_body) 0%, var(--checkout_body) 40%, var(--order_summery_background) 50%, var(--order_summery_background) 100%);
        }
        
        .checkout-cont {
            height: 100% !important;
        }
        
      }
    
    

    .prices_row.total-price.show-summery.new-checkout-summary-container-header.active {
      border-bottom-color: var(--payment_section_outside_border) !important;
    }

     @media screen and (max-width: 767px) {
      body.template-checkout .check-out-right .prdct-qty .prdct_qty {
        background: var(--order_summery_background_mo) !important;
      }
     #cartx-section-checkout_shipping_information .city_field .float-label-control:before {
          background: var(--customer_field_bg) !important;
          
          
          border-top: 1px solid var(--checkout_form_border) !important;
          border-bottom: 1px solid var(--checkout_form_border) !important;
          
      }
    }
</style>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link
            href="https://fonts.googleapis.com/css2?family=Inter&amp;display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inter"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400&amp;display=swap"
            rel="stylesheet">
        <style type="text/css">
    :root {
      --body_base_family: 'Inter',sans-serif;
      --body_font_size: 13px;
      --title_font_size: 16px;
      --base_family: 'Inter',sans-serif;
      --title_font_weight: 500;
      --desc_base_family: 'Inter',sans-serif;
      --description_font_weight : 400;
      --description_font_size: 14px;
      --checkout_form_input_border_radius: 4px;
      --checkout_form_input_height : 45px;
      --cart_summary_border_radius: 4px;
      --payment_method_border_radius: 4px;
      --buttons_border_radius: 4px;
      --buttons_height_coupon: 45px;
      --buttons_height: 55px;
      --checkout_page_icons_size: 20px;
      --checkout_buttons_width_desktop: 100%;
      --payment_field_outline: #e8eaec;
      --other_card_flag_text : #000000;
      --radio_button_background_color: #FF7825;
      --coupon_buttons_width_desktop: 100%;
      --placeholder_base_family: 'Montserrat',sans-serif;
      --placeholder_font_weight : 400;
      --placeholder_font_size: 14px;
      --filled_placeholder_font_size: 12px;
      --form_text_base_family: 'Montserrat',sans-serif;
      --form_text_font_weight : 400;
      --form_text_font_size: 14px;
      --payment_form_text_base_family: 'Montserrat',sans-serif;
      --payment_form_text_font_weight : 400;
      --payment_form_text_font_size: 14px;
      --form_field_space_between: 10px;
      --customer_box_shadow_color: #F1F1F1;
      --customer_box_shadow_blur: 0px;
      --customer_box_shadow_x_offset: 0px;
      --customer_box_shadow_y_offset: 1px;
      --order_summery_base_family: 'Inter',sans-serif;
      --order_summery_total_font_weight : 400;
      --order_summery_subtotal_font_weight : 500;
      --order_summery_total_font_size: 13px;
      --order_summery_subtotal_font_size: 17px;
      --order_summery_detalhes_font_weight : 400;
      --order_summery_detalhes_font_size: 14px;
      --complete_checkout_font_size: 20px;
      --couponapply_button_font_size: 14px;
    }

    body {
        font-family:var(--body_base_family) !important;
        font-size : var(--body_font_size);
    }
    .text-title{
        font-size: var(--title_font_size);
    }
    .checkout-titles,
    .sec-title{
        font-family:var(--body_base_family) !important;
        font-weight: var(--title_font_weight);
        font-size: var(--title_font_size);
    }
    .price-title{
        font-family:var(--body_base_family) !important;
    }
    .sub-legend{
        font-family:var(--body_base_family)!important;
        font-weight: var(--description_font_weight);
        font-size: var(--description_font_size);
    }
    .template-checkout .float-label-control input.empty ~ label, .template-checkout .float-label-control textarea.empty ~ label {
        top: calc(var(--checkout_form_input_height) / 2);
        transform: translate(0,-50%);
    }
    .template-checkout .form-control:not(.prdct_qty),
    .template-checkout .selectric,
    .template-checkout .funkyradio label
    {
        border-radius: var(--checkout_form_input_border_radius) !important;
        height: var(--checkout_form_input_height) !important;
    }

    .template-checkout .shipping_rates_option_div .funkyradio label{
        min-height: var(--checkout_form_input_height) !important;
        height: auto !important; /* Height changed to auto only for shipping rates lables because of long description was creating issue  https://prnt.sc/1y11k2b */
    }
    

    .template-checkout .funkyradio label.no-radio{
        height: auto;
    }
    .template-checkout .incremental-btn-wrap{
        border-radius:var(--cart_summary_border_radius);
    }
    .template-checkout .iti__flag-container{
        border-radius: var(--checkout_form_input_border_radius) !important;
         height: var(--checkout_form_input_height) !important;
    }
    .template-checkout .check-out-right{
        border-radius:0 0 var(--cart_summary_border_radius) var(--cart_summary_border_radius);
    }
    .template-checkout .panel-default > .panel-heading{
        border-radius: var(--payment_method_border_radius) var(--payment_method_border_radius) 0 0;
    }

    .template-checkout .panel-group{
        border-radius: var(--payment_method_border_radius);
    }
    .boleto-pay-section.panel-default>.panel-heading.collapsed#headingTwo {
        border-radius: 0 0 var(--payment_method_border_radius) var(--payment_method_border_radius);
        border-bottom: 0;
    }
    .payment-method .collapse.show{
        border-radius: 0px;
        padding-bottom: 0px !important;
    }
    .template-checkout .payment-method .panel:last-child .collapse.show,
    .template-checkout .payment-method .panel:last-child .panel-collapse{
       border-radius: 0 0 var(--payment_method_border_radius) var(--payment_method_border_radius);
    }

    body.template-checkout .check-out-right .couponFormSubmitBtn,
    body.template-checkout .couponFormSubmitBtn{
        height: 50px;
        border-radius: var(--buttons_border_radius);
        height:var(--buttons_height_coupon);
        line-height: 14px;
    }

    .template-checkout .form-submit-btn button,
    .template-checkout .get_shipping_rates,
    #checkout-step-shipping,
    #checkout-step-personal,
    .cd-checkout-btn #complete-payment,
    .cd-checkout-btn #loader-button
    {
        border-radius: var(--buttons_border_radius);
        height:var(--buttons_height);
        line-height: 1px;
    }
    .template-checkout .coupon_success{
        border-radius: var(--buttons_border_radius);
    }
    .checkout-icon-svg svg,
    .checkout-icon-svg{
        height: var(--checkout_page_icons_size);
        width : var(--checkout_page_icons_size);
    }

    body.template-checkout #complete-payment,
    body.template-checkout #loader-button,
    #checkout-step-shipping,
    #checkout-step-personal,
    .cd-checkout-btn #complete-payment,
    .cd-checkout-btn #loader-button,
    body.template-checkout #loader-button{
        width : var(--checkout_buttons_width_desktop);
        transform: unset;
        margin: 0 auto;
    }
    .template-checkout .payment_img{
        color: var(--other_card_flag_text);
    }


    .payment-method .dot-pr,
    .funkyradio-default .dot-pr{
        background-color: transparent;
        border: 1px solid;
    }

    .funkyradio-default input[type="radio"]:checked ~ label::before,
    .funkyradio input[type="radio"]:checked + span.dot-pr {
        background-color: #2879fe;
        border-color: #2879fe;
    }
    .funkyradio-default input[type="radio"]:checked ~ label::before,
    .funkyradio input[type="radio"]:checked + span.dot-pr {
        background-color: var(--radio_button_background_color)!important;
        border-color: var(--radio_button_background_color) !important;
    }
    .payment-method a[aria-expanded="true"] .dot-pr {
        background-color: #2879fe !important;
        border-color: #2879fe !important;
    }
    .payment-method a[aria-expanded="true"] .dot-pr{
        background-color: var(--radio_button_background_color) !important;
        border-color : var(--radio_button_background_color) !important;
    }
    .template-checkout .float-label-control label{
        font-family:var(--body_base_family)!important;
        font-weight: var(--placeholder_font_weight)!important;
        font-size: var(--placeholder_font_size)!important;
    }
    .template-checkout .float-label-control input:not(.empty)+label{
        font-size: var(--filled_placeholder_font_size)!important;
    }
    .template-checkout .float-label-control input, .template-checkout .float-label-control textarea{
        font-family:var(--body_base_family)!important;
        font-weight: var(--form_text_font_weight)!important;
        font-size: var(--form_text_font_size)!important;
    }
    .template-checkout .shipping_rates_option_div label{
        font-family:var(--body_base_family)!important;
        font-weight: var(--form_text_font_weight)!important;
        font-size: var(--form_text_font_size)!important;   
    }
    .template-checkout .payment-method .form-group input, 
    .template-checkout .payment-method .form-group textarea {
        font-family: var(--body_base_family)!important;
        font-weight: var(--form_text_font_weight)!important;
        font-size: var(--form_text_font_size)!important;
    }

    

    @media screen and (max-width: 992px) {
        body.template-checkout .check-out-right .couponFormSubmitBtn,
        body.template-checkout .check-out-left .couponFormSubmitBtn{
            width:  var(--coupon_buttons_width_desktop);
        }
        body.template-checkout #complete-payment,
        body.template-checkout #loader-button,
        .cd-checkout-btn #complete-payment,
        .cd-checkout-btn #loader-button,
        #checkout-step-shipping, 
        #checkout-step-personal
        {
            width : var(--checkout_buttons_width_desktop);
        }
        .template-checkout .check-out-right{
            border-radius:0;
        }
        .mobile-price-smry:not(.is_sticky){
           padding-bottom: 25px;
        }
        
        .check-out-left .sub-legend{
            margin-left: 0px;
        }
        
        .mobile-price-smry .check-out-right.on-mobile{
            border-radius:0 0 var(--cart_summary_border_radius) var(--cart_summary_border_radius);
        }

    }
    .mobile-price-smry.sticky_price_smry {
    position: sticky;
    position: -webkit-sticky;
    top: 0;
    z-index: 999;
}
.coupon-head-text {
    font-size: var(--order_summery_total_font_size)!important;
    font-weight: var(--order_summery_total_font_weight)!important;
    color : var(--order_coupon_activation_text_color) !important;
}
.cust-info .float-label-control, .payment-method .form-group{
    margin-top: 0;
    margin-bottom: var(--form_field_space_between) !important;
}

.cust-info .float-label-control input, .cust-info .float-label-control .selectric, body.template-checkout input.couponCodeW{
    box-shadow: var(--customer_box_shadow_x_offset) var(--customer_box_shadow_y_offset) var(--customer_box_shadow_blur) var(--customer_box_shadow_color) !important;
    border: 1px solid var(--checkout_form_border) !important;
}

.error_input .form-control, .error_input .form-control:focus, .cust-info .float-label-control.error_input input, .cust-info .float-label-control.error_input .selectric {
    /*box-shadow: var(--customer_box_shadow_x_offset) var(--customer_box_shadow_y_offset) var(--customer_box_shadow_blur) red !important;*/
    border: 1px solid red !important;
}
body.template-checkout .check-out-right #cartx-section-checkout-cost-details .price-title,
body.template-checkout .check-out-right #cartx-section-checkout-cost-details .price-value{
    font-family: var(--body_base_family)!important;
    font-weight: var(--order_summery_total_font_weight)!important;
    font-size: var(--order_summery_total_font_size)!important;
}

body.template-checkout .check-out-right #cartx-section-checkout-cost-details .prices_row.total-price .price-value span{
    font-family: var(--body_base_family)!important;
    font-weight: var(--order_summery_subtotal_font_weight)!important;
    font-size: var(--order_summery_subtotal_font_size)!important;
}
@media screen and (min-width: 992px) {
    
    .template-checkout #cartx-section-checkout_personal_information .float-label-control.tick_input:not(.error_input):after, 
    .template-checkout #cartx-section-checkout_shipping_information .float-label-control.tick_input_shipping:not(.error_input):not(.stateWrapper):after  {
        
        background-image: url("data:image/svg+xml;utf8,<svg width='290' height='263' viewBox='0 0 290 263' fill='none' xmlns='http://www.w3.org/2000/svg'><path fill=\'%234BB47D\' fill-rule='evenodd' clip-rule='evenodd' d='M285.355 31.2729C290.55 34.9729 291.548 42.2911 287.533 47.2477L116.062 258.904C111.811 264.151 103.892 264.394 99.327 259.418L2.91025 154.312C-1.02259 150.025 -0.962312 143.422 3.04815 139.208L37.8325 102.652C42.1277 98.1382 49.3009 98.0638 53.6887 102.488L101.099 150.287C105.812 155.039 113.631 154.546 117.711 149.24L229.146 4.31746C232.771 -0.39798 239.476 -1.39956 244.321 2.05054L285.355 31.2729Z'></path></svg>") !important;
        background-size: 10px 10px !important;
        background-repeat: no-repeat !important;
        background-position: right 20px bottom 50% !important;
        padding-right: 35px;
        content: '';
        top: 50%;
        transform: translateY(-50%);
        position: absolute;
        right: 0;
        width: 10px;
        height: 10px;
        z-index: 999;
    }
    .template-checkout #cartx-section-checkout_shipping_information .float-label-control#cep-input.tick_cep_input:not(.error_input):after {
        top: calc(50% - 30px);
    }
    
}
@media screen and (max-width: 992px) {
    
    .template-checkout #cartx-section-checkout_personal_information .float-label-control.tick_input:not(.error_input):after, 
    .template-checkout #cartx-section-checkout_shipping_information .float-label-control.tick_input_shipping:not(.error_input):not(.stateWrapper):after {
        
        background-image: url("data:image/svg+xml;utf8,<svg width='290' height='263' viewBox='0 0 290 263' fill='none' xmlns='http://www.w3.org/2000/svg'><path fill=\'%234BB47D\' fill-rule='evenodd' clip-rule='evenodd' d='M285.355 31.2729C290.55 34.9729 291.548 42.2911 287.533 47.2477L116.062 258.904C111.811 264.151 103.892 264.394 99.327 259.418L2.91025 154.312C-1.02259 150.025 -0.962312 143.422 3.04815 139.208L37.8325 102.652C42.1277 98.1382 49.3009 98.0638 53.6887 102.488L101.099 150.287C105.812 155.039 113.631 154.546 117.711 149.24L229.146 4.31746C232.771 -0.39798 239.476 -1.39956 244.321 2.05054L285.355 31.2729Z'></path></svg>") !important;
        background-size: 10px 10px !important;
        background-repeat: no-repeat !important;
        background-position: right 20px bottom 50% !important;
        padding-right: 35px;
        content: '';
        top: 50%;
        transform: translateY(-50%);
        position: absolute;
        right: 0;
        width: 10px;
        height: 10px;
        z-index: 999;
    }
    .template-checkout #cartx-section-checkout_shipping_information .float-label-control#cep-input.tick_cep_input:not(.error_input):after {
        top: calc(50% - 18px);
    }
    
}
@media screen and (max-width: 400px) {
    
}
.custom_city_state {
        height: var(--checkout_form_input_height) !important;
        font-family: var(--body_base_family)!important;
        font-weight: var(--description_font_weight);
        font-size: var(--description_font_size);
    }
.prices_row.total-price .price-value span {
    font-family: var(--body_base_family)!important;
    font-weight: var(--order_summery_subtotal_font_weight)!important;
    font-size: var(--order_summery_subtotal_font_size)!important;
}
span.detail_summery {
    font-family: var(--body_base_family)!important;
    font-weight: var(--order_summery_detalhes_font_weight)!important;
    font-size: var(--order_summery_detalhes_font_size)!important;
    margin-left: 2px;
}
.show-summery .fa-angle-down {
    font-weight: var(--order_summery_detalhes_font_weight)!important;
    font-size: var(--order_summery_detalhes_font_size)!important;
}

.apply-coupon-btn-wrap .couponFormSubmitBtn{
    font-size: var(--couponapply_button_font_size);
}
body.template-checkout #complete-payment, body.template-checkout #loader-button, #checkout-step-shipping, #checkout-step-personal{
    font-size: var(--complete_checkout_font_size);
}

.save-information-class {
  display: block;
  width: 100%;
  position: relative;
  text-align: left;
  max-width: var(--checkout_buttons_width_desktop);
  margin: 0 auto;
  margin-top: 15px;
}
.terms-text {
  display: block;
  text-align: center;
  max-width: var(--checkout_buttons_width_desktop);
  margin: 0 auto;
  margin-top: 50px;
}
.terms-text-payment {
  text-align: center;
}
.term-text-inner, 
.term-text-inner a,
.terms-text-payment,
.terms-text-payment a {
  font-size: 12px;
  color: #6D7175;
  font-weight: normal;
}
.term-text-inner a,
.terms-text-payment a {
  text-decoration: underline;
}
.terms-links svg {
  width: 10px;
  height: 10px;
  fill: #6D7175;
  margin-left: 2px;
  display: inline-block;
}
@media screen and (max-width: 767px) {
    body.template-checkout #complete-payment,
    body.template-checkout #loader-button,
    #checkout-step-shipping, #checkout-step-personal{
        width : 100%;
    }
    .save-information-class,
    .terms-text{
        max-width: 100%;
    }
}
</style>
        <link rel="stylesheet" type="text/css"
            href="/csscartpanda/css1.css">
        <style>
    @media screen and (max-width: 767px) {
      .sub-legend .sub-legend-inner {
        display: block;
      }
      .sub-legend span.fa {
        margin-right: 30px;
      }
      .checkout-titles {
        margin-left: 1px;
      }
    }
    </style>
        <script type="text/javascript">
        window.compartMent = '';
        
        var shippingInfoCustomerJSON = '';
        var shippingInfoCustomer = $.parseJSON(shippingInfoCustomerJSON != '' ? shippingInfoCustomerJSON : '{}');
        if(shippingInfoCustomer.hasOwnProperty('compartment')){
            window.compartMent = shippingInfoCustomer.compartment;
        }
        
    </script>
        <meta http-equiv="origin-trial"
            content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><meta
            http-equiv="origin-trial"
            content="A+xK4jmZTgh1KBVry/UZKUE3h6Dr9HPPioFS4KNCzify+KEoOii7z/goKS2zgbAOwhpZ1GZllpdz7XviivJM9gcAAACFeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiQXR0cmlidXRpb25SZXBvcnRpbmdDcm9zc0FwcFdlYiIsImV4cGlyeSI6MTcwNzI2Mzk5OSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta
            http-equiv="origin-trial"
            content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><script
            type="text/javascript" async=""
            src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/11200680546/?random=1688304752065&amp;cv=11&amp;fst=1688304752065&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be36s0&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Fpagamento.uaugringa.shop%2Fcheckout%3F_ga%3D2.245927239.2127311550.1688191039-1832607726.1688191039%26ref%3Dcartx_buy_button&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Uau%20Gringa%20-%20Checkout&amp;auid=21428025.1688191041&amp;uaa=x86&amp;uab=64&amp;uafvl=Not.A%252FBrand%3B8.0.0.0%7CChromium%3B114.0.5735.135%7CGoogle%2520Chrome%3B114.0.5735.135&amp;uamb=0&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;data=event%3Dgtag.config&amp;rfmt=3&amp;fmt=4"></script></head>
    <script id="kdtjs" type="text/javascript" async=""
        src="https://i.k-analytix.com/k.js"></script><body
        class="template-checkout">
        <div id="abandoned-cart-visit" data-abandoned-state=""
            data-abandoned-city=""></div>
        <div class="wrapper">
            <div class="cartx-preloader white-overlay1 cartx-loader temp-v "
                id="cartx-preloader">
                <div class="spinner-wrapper">
                    <div class="">
                        <div class="spinner-icon">
                            <div class="custom_spinner loading"></div>
                        </div>
                    </div>
                    <div class="">
                        <div class="spinner-text centered">
                            <p class="bold mb0 load-title">Seu pedido está sendo
                                processado.</p>
                            <p class="load-description">Não feche essa página.</p>
                        </div>
                    </div>
                </div>
            </div>
            <script>

</script>
            <style type="text/css">
    
</style>
            <div class="checkout-header-section">
                <div id="cartx-section-1687292528105" class="cartx-section
                    index-section announcement-section"><div
                        data-realtime="1687292528105.desktop_hide_announcement"
                        class="announcement-bar announcement-bar-1687292528105
                        ">
                        <div
                            data-realtime="1687292528105.mobile_hide_announcement"
                            class="">
                            <div class="text-center
                                announcement-timer-1687292528105"
                                data-realtime="1687292528105.text"
                                data-miniutes="10" data-second="10" style="">
                                O frete é por nossa conta!
                            </div>
                        </div>
                    </div>
                    <style type="text/css">
:root {
    --color_text_1687292528105: #FFF;
    --color_bg_1687292528105: #FF7825;
    --padding_top_1687292528105:  3px;
    --padding_bottom_1687292528105:  0px;
    --margin_top_1687292528105:  0px;
    --margin_bottom_1687292528105:  0px;
  }
.announcement-bar-1687292528105{
  background: var(--color_bg_1687292528105);
  color: var(--color_text_1687292528105);  
  padding-top: var(--padding_top_1687292528105);
  padding-bottom: var(--padding_bottom_1687292528105);
  margin-top: var(--margin_top_1687292528105);
  margin-bottom: var(--margin_bottom_1687292528105);
}
span#timer-1687292528105 {
    width: 35px;
    display: inline-block;
}
</style>
                    <script>
  var announcement_timer = $('.announcement-timer-1687292528105').html();
if (announcement_timer.indexOf("%timer%") >= 0){
  var distance = parseInt($(document).find('.announcement-timer-1687292528105').attr('data-miniutes'))*60 + parseInt($(document).find('.announcement-timer-1687292528105').attr('data-second'));
   var miniut = parseInt($(document).find('.announcement-timer-1687292528105').attr('data-miniutes'));
  var seconds = parseInt($(document).find('.announcement-timer-1687292528105').attr('data-second'));
  var timer = miniut+':'+seconds;
  $('.announcement-timer-1687292528105').html(announcement_timer.replace("%timer%", '<span id="timer-1687292528105">'+timer+'</span>')); 


    var x = setInterval(function() {
      if(distance > 0) {
      distance = distance - 1;
      //console.log(distance);
        var miniut = parseInt(distance/60);
        var seconds = parseFloat(distance%60);
        if(seconds<10)
          seconds = '0'+seconds;
        if(miniut<10)
          miniut = '0'+miniut;
        var timer = miniut+':'+seconds;
        $('#timer-1687292528105').html(timer); 
      }
      // If the count down is finished, write some text
    }, 1000);
}
  setTimeout(function() {
   $('.announcement-timer-1687292528105').show();
  }, 1000);
</script>
                </div>
            </div>
            <div id="cart_data" style="display: none" data-cart="
                {&quot;id&quot;:219439714,&quot;shop_id&quot;:318540,&quot;quote_id&quot;:null,&quot;token&quot;:&quot;0bab4034-c8db-4744-8cc1-055a4b37a189&quot;,&quot;cart_platform&quot;:&quot;shopify&quot;,&quot;note&quot;:null,&quot;attributes&quot;:null,&quot;customer_id&quot;:0,&quot;refuse_count&quot;:0,&quot;discount_code&quot;:&quot;&quot;,&quot;giftcard_discount_code&quot;:null,&quot;automatic_discount_code&quot;:&quot;&quot;,&quot;discount_category&quot;:&quot;&quot;,&quot;created_at&quot;:&quot;2023-07-01
                03:02:16&quot;,&quot;updated_at&quot;:&quot;2023-07-01
                15:59:18&quot;,&quot;items&quot;:[{&quot;id&quot;:197893108,&quot;cart_token&quot;:&quot;0bab4034-c8db-4744-8cc1-055a4b37a189&quot;,&quot;key&quot;:&quot;84369289:1be13892-c189-407f-a0ea-1168a80a9d65&quot;,&quot;variant_id&quot;:84369289,&quot;quantity&quot;:1,&quot;is_order_bump_item&quot;:0,&quot;order_bump_id&quot;:null,&quot;is_bagify_item&quot;:0,&quot;bagify_offer_id&quot;:null,&quot;discount_value&quot;:null,&quot;discount_type&quot;:null,&quot;properties&quot;:&quot;{}&quot;,&quot;custom_options&quot;:null,&quot;is_digital&quot;:0,&quot;created_at&quot;:&quot;2023-07-01
                03:02:16&quot;,&quot;updated_at&quot;:&quot;2023-07-01
                03:02:16&quot;,&quot;appointment_data&quot;:null,&quot;variant_title&quot;:&quot;Preto
                \/ SmartWatch
                Ultra&quot;,&quot;price&quot;:14990,&quot;compare_at_price&quot;:18990,&quot;product_title&quot;:&quot;SmartWatch
                Ultra Serie 8 IWO Original
                2023&quot;,&quot;product_handle&quot;:&quot;new-smart-watch-ultra-series-8-nfc-men-smartwatch-2023-wirelesscharge-bluetoothcall-men-women-fitness-bracelet-ios-android-phone&quot;,&quot;product_id&quot;:10086912,&quot;minimum_quantity&quot;:0,&quot;minimum_quantity_count&quot;:0,&quot;max_quantity&quot;:0,&quot;max_quantity_count&quot;:0,&quot;variant&quot;:{&quot;id&quot;:84369289,&quot;product_id&quot;:10086912,&quot;default&quot;:0,&quot;title&quot;:&quot;Preto
                \/ SmartWatch
                Ultra&quot;,&quot;price&quot;:149.9,&quot;compare_at_price&quot;:189.9,&quot;cost_per_item&quot;:0,&quot;sku&quot;:&quot;14:29#Black;5:361385#Smart
                Watch
                Ultra&quot;,&quot;aliexpress_sku&quot;:null,&quot;position&quot;:1,&quot;inventory_policy&quot;:1,&quot;quantity&quot;:3065,&quot;prevent_out_of_stock_selling&quot;:1,&quot;taxable&quot;:0,&quot;barcode&quot;:null,&quot;swatches&quot;:null,&quot;length&quot;:null,&quot;width&quot;:null,&quot;height&quot;:null,&quot;dimension_unit&quot;:null,&quot;weight&quot;:0,&quot;weight_unit&quot;:&quot;kg&quot;,&quot;requires_shipping&quot;:1,&quot;has_digital_attachment&quot;:0,&quot;enabled_shopify_redirect&quot;:1,&quot;created_at&quot;:&quot;2023-05-29
                11:30:47&quot;,&quot;updated_at&quot;:&quot;2023-07-02
                09:37:11&quot;,&quot;deleted_at&quot;:null,&quot;image&quot;:{&quot;id&quot;:77961486,&quot;product_id&quot;:10086912,&quot;position&quot;:2,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/RXRNpcAwvkM4b9bYSPhJqSMmlGxecV.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/RXRNpcAwvkM4b9bYSPhJqSMmlGxecV.jpg&quot;},&quot;featured_image&quot;:{&quot;id&quot;:77961486,&quot;product_id&quot;:10086912,&quot;position&quot;:2,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/RXRNpcAwvkM4b9bYSPhJqSMmlGxecV.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/RXRNpcAwvkM4b9bYSPhJqSMmlGxecV.jpg&quot;},&quot;variant_image&quot;:[{&quot;product_image_id&quot;:77961486,&quot;product_variant_id&quot;:84369289}],&quot;product&quot;:{&quot;id&quot;:10086912,&quot;shop_id&quot;:318540,&quot;title&quot;:&quot;SmartWatch
                Ultra Serie 8 IWO Original
                2023&quot;,&quot;handle&quot;:&quot;new-smart-watch-ultra-series-8-nfc-men-smartwatch-2023-wirelesscharge-bluetoothcall-men-women-fitness-bracelet-ios-android-phone&quot;,&quot;template_suffix&quot;:null,&quot;description&quot;:&quot;<div
                data-mce-fragment=\&quot;1\&quot; style=\&quot;text-align:
                left;\&quot; data-mce-style=\&quot;text-align: left;\&quot;>\n<center><iframe
                        src=\&quot;https:\/\/cdn.shopify.com\/videos\/c\/o\/v\/9aa8caa502c843adb531400e6e47b855.mp4\&quot;
                        height=\&quot;315\&quot; width=\&quot;420\&quot;><\/iframe><\/center>\n<img
                                    data-mce-fragment=\&quot;1\&quot;
                                    style=\&quot;margin-bottom: 1px; float:
                                    none;\&quot;
                                    src=\&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0765\/4336\/1337\/files\/1_24f872f7-7b94-4b32-9abf-6c8d9c9e7608.png?v=1686142605\&quot;
                                    data-mce-src=\&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0765\/4336\/1337\/files\/1_24f872f7-7b94-4b32-9abf-6c8d9c9e7608_480x480.png?v=1686142605\&quot;><img
                                    data-mce-fragment=\&quot;1\&quot;
                                    style=\&quot;margin-bottom: 1px; float:
                                    none;\&quot;
                                    src=\&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0765\/4336\/1337\/files\/2_79bb1e81-e3fd-4a18-9f64-8f4884642615.png?v=1686142605\&quot;
                                    data-mce-src=\&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0765\/4336\/1337\/files\/2_79bb1e81-e3fd-4a18-9f64-8f4884642615_480x480.png?v=1686142605\&quot;>\n<\/div>\n<div
                                        data-mce-fragment=\&quot;1\&quot;
                                        style=\&quot;text-align: left;\&quot;
                                        data-mce-style=\&quot;text-align:
                                        left;\&quot;>\n<img
                                            src=\&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0765\/4336\/1337\/files\/gifoferta_f4593c10-d160-41b1-9130-141a5450959c.gif?v=1686870303\&quot;
                                            style=\&quot;margin-bottom: 16px;
                                            float: none;\&quot;><span
                                            style=\&quot;text-align: left;
                                            font-size: 0.875rem;\&quot;>Frete
                                            Gr\u00e1tis para todo o
                                            Brasil\u00a0+ Cupom\u00a0'<\/span><strong
                                                    style=\&quot;text-align:
                                                    left; font-size:
                                                    0.875rem;\&quot;>PRIMEIRACOMPRA10<\/strong><span
                                                            style=\&quot;text-align:
                                                            left; font-size:
                                                            0.875rem;\&quot;>'
                                                            para 10% de desconto
                                                            na sua primeira
                                                            compra com a gente.<\/span><br>\n<\/div>\n<!-- Meta Pixel Code smartwatch 2.0 -->
                                                                    <script>\n  !function(f,b,e,v,n,t,s)\n  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\n  n.callMethod.apply(n,arguments):n.queue.push(arguments)};\n  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';\n  n.queue=[];t=b.createElement(e);t.async=!0;\n  t.src=v;s=b.getElementsByTagName(e)[0];\n  s.parentNode.insertBefore(t,s)}(window, document,'script',\n  'https:\/\/connect.facebook.net\/en_US\/fbevents.js');\n  fbq('init', '148586598190785');\n  fbq('track', 'PageView');\n<\/script> <noscript><img height=\&quot;1\&quot; width=\&quot;1\&quot; style=\&quot;display:none\&quot; src=\&quot;https:\/\/www.facebook.com\/tr?id=148586598190785&amp;amp;ev=PageView&amp;amp;noscript=1\&quot;><\/noscript> <!-- End Meta Pixel Code -->\n\n<!-- Meta Pixel Code conta 2-->\n<script>\n  !function(f,b,e,v,n,t,s)\n  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\n  n.callMethod.apply(n,arguments):n.queue.push(arguments)};\n  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';\n  n.queue=[];t=b.createElement(e);t.async=!0;\n  t.src=v;s=b.getElementsByTagName(e)[0];\n  s.parentNode.insertBefore(t,s)}(window, document,'script',\n  'https:\/\/connect.facebook.net\/en_US\/fbevents.js');\n  fbq('init', '1251019442444912');\n  fbq('track', 'PageView');\n<\/script>\n<noscript><img height=\&quot;1\&quot; width=\&quot;1\&quot; style=\&quot;display:none\&quot; src=\&quot;https:\/\/www.facebook.com\/tr?id=1251019442444912&amp;amp;ev=PageView&amp;amp;noscript=1\&quot;><\/noscript>\n<!-- End Meta Pixel Code -->&quot;,&quot;seo_title&quot;:&quot;SmartWatch Ultra Serie 8 IWO Original 2023&quot;,&quot;seo_description&quot;:&quot;\n\n\n\n\nFrete Gr\u00e1tis para todo o Brasil\u00a0+ Cupom\u00a0'PRIMEIRACOMPRA10' para 10% de desconto na sua primeira compra com a gente.\n\n \n  !function(f,b,e,v,n,t,s)\n  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\n  n.callMethod.apply(n,arguments):n.queue.push(arguments)};\n  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';\n  n.queue=[];t=b.createElement(e);t.async=!0;\n  t.src=v;s=b.getElementsByTagName(e)[0];\n  s.parentNode.insertBefore(t,s)}(window, document,'script',\n  'https:\/\/connect.facebook.net\/en_US\/fbevents.js');\n  fbq('init', '148586598190785');\n  fbq('track', 'PageView');\n  \n\n\n\n  !function(f,b,e,v,n,t,s)\n  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\n  n.callMethod.apply(n,arguments):n.queue.push(arguments)};\n  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';\n  n.queue=[];t=b.createElement(e);t.async=!0;\n  t.src=v;s=b.getElementsByTagName(e)[0];\n  s.parentNode.insertBefore(t,s)}(window, document,'script',\n  'https:\/\/connect.facebook.net\/en_US\/fbevents.js');\n  fbq('init', '1251019442444912');\n  fbq('track', 'PageView');\n\n\n&quot;,&quot;price&quot;:0,&quot;compare_at_price&quot;:0,&quot;cost_per_item&quot;:null,&quot;sku&quot;:null,&quot;taxable&quot;:0,&quot;barcode&quot;:null,&quot;weight&quot;:null,&quot;weight_unit&quot;:null,&quot;requires_shipping&quot;:1,&quot;inventory_policy&quot;:0,&quot;quantity&quot;:0,&quot;product_type_id&quot;:null,&quot;vendor_id&quot;:184993,&quot;added_via&quot;:&quot;shopify_app&quot;,&quot;published_at&quot;:&quot;-0001-11-30 00:00:00&quot;,&quot;deleted_at&quot;:null,&quot;created_at&quot;:&quot;2023-05-29 11:30:47&quot;,&quot;updated_at&quot;:&quot;2023-07-02 09:37:11&quot;,&quot;active&quot;:1,&quot;active_for_bots&quot;:1,&quot;simplybook_id&quot;:0,&quot;minimum_quantity&quot;:0,&quot;max_quantity&quot;:0,&quot;minimum_quantity_count&quot;:0,&quot;max_quantity_count&quot;:0,&quot;total_units_sold&quot;:0,&quot;images&quot;:[{&quot;id&quot;:77961472,&quot;product_id&quot;:10086912,&quot;position&quot;:2,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/mKAdqXZxPitENkwpX4dySZhTGwKqsm.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/mKAdqXZxPitENkwpX4dySZhTGwKqsm.jpg&quot;},{&quot;id&quot;:77961474,&quot;product_id&quot;:10086912,&quot;position&quot;:2,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/SoPYTfXjJtyNicfGw2pMPfR6BumhlC.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/SoPYTfXjJtyNicfGw2pMPfR6BumhlC.jpg&quot;},{&quot;id&quot;:77961476,&quot;product_id&quot;:10086912,&quot;position&quot;:2,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/03WKDKAMc6vSC4oa8OskSbanKPX8FD.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/03WKDKAMc6vSC4oa8OskSbanKPX8FD.jpg&quot;},{&quot;id&quot;:77961480,&quot;product_id&quot;:10086912,&quot;position&quot;:2,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/jPOoEBJrCU3lHPzox6vvM3sVEGk9As.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/jPOoEBJrCU3lHPzox6vvM3sVEGk9As.jpg&quot;},{&quot;id&quot;:77961484,&quot;product_id&quot;:10086912,&quot;position&quot;:2,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/zqewV7xmWM5NwTUNK0l5xLQi1YK4DJ.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/zqewV7xmWM5NwTUNK0l5xLQi1YK4DJ.jpg&quot;},{&quot;id&quot;:77961486,&quot;product_id&quot;:10086912,&quot;position&quot;:2,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/RXRNpcAwvkM4b9bYSPhJqSMmlGxecV.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/RXRNpcAwvkM4b9bYSPhJqSMmlGxecV.jpg&quot;},{&quot;id&quot;:79285944,&quot;product_id&quot;:10086912,&quot;position&quot;:3,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/dZDGMjRYNWEDv5RtFZkU0WY1wYk7mA.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/dZDGMjRYNWEDv5RtFZkU0WY1wYk7mA.jpg&quot;}]}},&quot;product&quot;:{&quot;id&quot;:10086912,&quot;shop_id&quot;:318540,&quot;title&quot;:&quot;SmartWatch Ultra Serie 8 IWO Original 2023&quot;,&quot;handle&quot;:&quot;new-smart-watch-ultra-series-8-nfc-men-smartwatch-2023-wirelesscharge-bluetoothcall-men-women-fitness-bracelet-ios-android-phone&quot;,&quot;template_suffix&quot;:null,&quot;description&quot;:&quot;<div data-mce-fragment=\&quot;1\&quot; style=\&quot;text-align: left;\&quot; data-mce-style=\&quot;text-align: left;\&quot;>\n<center><iframe src=\&quot;https:\/\/cdn.shopify.com\/videos\/c\/o\/v\/9aa8caa502c843adb531400e6e47b855.mp4\&quot; height=\&quot;315\&quot; width=\&quot;420\&quot;><\/iframe><\/center>\n<img data-mce-fragment=\&quot;1\&quot; style=\&quot;margin-bottom: 1px; float: none;\&quot; src=\&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0765\/4336\/1337\/files\/1_24f872f7-7b94-4b32-9abf-6c8d9c9e7608.png?v=1686142605\&quot; data-mce-src=\&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0765\/4336\/1337\/files\/1_24f872f7-7b94-4b32-9abf-6c8d9c9e7608_480x480.png?v=1686142605\&quot;><img data-mce-fragment=\&quot;1\&quot; style=\&quot;margin-bottom: 1px; float: none;\&quot; src=\&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0765\/4336\/1337\/files\/2_79bb1e81-e3fd-4a18-9f64-8f4884642615.png?v=1686142605\&quot; data-mce-src=\&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0765\/4336\/1337\/files\/2_79bb1e81-e3fd-4a18-9f64-8f4884642615_480x480.png?v=1686142605\&quot;>\n<\/div>\n<div data-mce-fragment=\&quot;1\&quot; style=\&quot;text-align: left;\&quot; data-mce-style=\&quot;text-align: left;\&quot;>\n<img src=\&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/0765\/4336\/1337\/files\/gifoferta_f4593c10-d160-41b1-9130-141a5450959c.gif?v=1686870303\&quot; style=\&quot;margin-bottom: 16px; float: none;\&quot;><span style=\&quot;text-align: left; font-size: 0.875rem;\&quot;>Frete Gr\u00e1tis para todo o Brasil\u00a0+ Cupom\u00a0'<\/span><strong style=\&quot;text-align: left; font-size: 0.875rem;\&quot;>PRIMEIRACOMPRA10<\/strong><span style=\&quot;text-align: left; font-size: 0.875rem;\&quot;>' para 10% de desconto na sua primeira compra com a gente.<\/span><br>\n<\/div>\n<!-- Meta Pixel Code smartwatch 2.0 --> <script>\n  !function(f,b,e,v,n,t,s)\n  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\n  n.callMethod.apply(n,arguments):n.queue.push(arguments)};\n  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';\n  n.queue=[];t=b.createElement(e);t.async=!0;\n  t.src=v;s=b.getElementsByTagName(e)[0];\n  s.parentNode.insertBefore(t,s)}(window, document,'script',\n  'https:\/\/connect.facebook.net\/en_US\/fbevents.js');\n  fbq('init', '148586598190785');\n  fbq('track', 'PageView');\n<\/script> <noscript><img height=\&quot;1\&quot; width=\&quot;1\&quot; style=\&quot;display:none\&quot; src=\&quot;https:\/\/www.facebook.com\/tr?id=148586598190785&amp;amp;ev=PageView&amp;amp;noscript=1\&quot;><\/noscript> <!-- End Meta Pixel Code -->\n\n<!-- Meta Pixel Code conta 2-->\n<script>\n  !function(f,b,e,v,n,t,s)\n  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\n  n.callMethod.apply(n,arguments):n.queue.push(arguments)};\n  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';\n  n.queue=[];t=b.createElement(e);t.async=!0;\n  t.src=v;s=b.getElementsByTagName(e)[0];\n  s.parentNode.insertBefore(t,s)}(window, document,'script',\n  'https:\/\/connect.facebook.net\/en_US\/fbevents.js');\n  fbq('init', '1251019442444912');\n  fbq('track', 'PageView');\n<\/script>\n<noscript><img height=\&quot;1\&quot; width=\&quot;1\&quot; style=\&quot;display:none\&quot; src=\&quot;https:\/\/www.facebook.com\/tr?id=1251019442444912&amp;amp;ev=PageView&amp;amp;noscript=1\&quot;><\/noscript>\n<!-- End Meta Pixel Code -->&quot;,&quot;seo_title&quot;:&quot;SmartWatch Ultra Serie 8 IWO Original 2023&quot;,&quot;seo_description&quot;:&quot;\n\n\n\n\nFrete Gr\u00e1tis para todo o Brasil\u00a0+ Cupom\u00a0'PRIMEIRACOMPRA10' para 10% de desconto na sua primeira compra com a gente.\n\n \n  !function(f,b,e,v,n,t,s)\n  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\n  n.callMethod.apply(n,arguments):n.queue.push(arguments)};\n  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';\n  n.queue=[];t=b.createElement(e);t.async=!0;\n  t.src=v;s=b.getElementsByTagName(e)[0];\n  s.parentNode.insertBefore(t,s)}(window, document,'script',\n  'https:\/\/connect.facebook.net\/en_US\/fbevents.js');\n  fbq('init', '148586598190785');\n  fbq('track', 'PageView');\n  \n\n\n\n  !function(f,b,e,v,n,t,s)\n  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\n  n.callMethod.apply(n,arguments):n.queue.push(arguments)};\n  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';\n  n.queue=[];t=b.createElement(e);t.async=!0;\n  t.src=v;s=b.getElementsByTagName(e)[0];\n  s.parentNode.insertBefore(t,s)}(window, document,'script',\n  'https:\/\/connect.facebook.net\/en_US\/fbevents.js');\n  fbq('init', '1251019442444912');\n  fbq('track', 'PageView');\n\n\n&quot;,&quot;price&quot;:0,&quot;compare_at_price&quot;:0,&quot;cost_per_item&quot;:null,&quot;sku&quot;:null,&quot;taxable&quot;:0,&quot;barcode&quot;:null,&quot;weight&quot;:null,&quot;weight_unit&quot;:null,&quot;requires_shipping&quot;:1,&quot;inventory_policy&quot;:0,&quot;quantity&quot;:0,&quot;product_type_id&quot;:null,&quot;vendor_id&quot;:184993,&quot;added_via&quot;:&quot;shopify_app&quot;,&quot;published_at&quot;:&quot;-0001-11-30 00:00:00&quot;,&quot;deleted_at&quot;:null,&quot;created_at&quot;:&quot;2023-05-29 11:30:47&quot;,&quot;updated_at&quot;:&quot;2023-07-02 09:37:11&quot;,&quot;active&quot;:1,&quot;active_for_bots&quot;:1,&quot;simplybook_id&quot;:0,&quot;minimum_quantity&quot;:0,&quot;max_quantity&quot;:0,&quot;minimum_quantity_count&quot;:0,&quot;max_quantity_count&quot;:0,&quot;total_units_sold&quot;:0,&quot;images&quot;:[{&quot;id&quot;:77961472,&quot;product_id&quot;:10086912,&quot;position&quot;:2,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/mKAdqXZxPitENkwpX4dySZhTGwKqsm.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/mKAdqXZxPitENkwpX4dySZhTGwKqsm.jpg&quot;},{&quot;id&quot;:77961474,&quot;product_id&quot;:10086912,&quot;position&quot;:2,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/SoPYTfXjJtyNicfGw2pMPfR6BumhlC.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/SoPYTfXjJtyNicfGw2pMPfR6BumhlC.jpg&quot;},{&quot;id&quot;:77961476,&quot;product_id&quot;:10086912,&quot;position&quot;:2,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/03WKDKAMc6vSC4oa8OskSbanKPX8FD.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/03WKDKAMc6vSC4oa8OskSbanKPX8FD.jpg&quot;},{&quot;id&quot;:77961480,&quot;product_id&quot;:10086912,&quot;position&quot;:2,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/jPOoEBJrCU3lHPzox6vvM3sVEGk9As.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/jPOoEBJrCU3lHPzox6vvM3sVEGk9As.jpg&quot;},{&quot;id&quot;:77961484,&quot;product_id&quot;:10086912,&quot;position&quot;:2,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/zqewV7xmWM5NwTUNK0l5xLQi1YK4DJ.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/zqewV7xmWM5NwTUNK0l5xLQi1YK4DJ.jpg&quot;},{&quot;id&quot;:77961486,&quot;product_id&quot;:10086912,&quot;position&quot;:2,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/RXRNpcAwvkM4b9bYSPhJqSMmlGxecV.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/RXRNpcAwvkM4b9bYSPhJqSMmlGxecV.jpg&quot;},{&quot;id&quot;:79285944,&quot;product_id&quot;:10086912,&quot;position&quot;:3,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;static\/products_images\/dZDGMjRYNWEDv5RtFZkU0WY1wYk7mA.jpg&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;aspect_ratio&quot;:&quot;1.00&quot;,&quot;width&quot;:800,&quot;height&quot;:600,&quot;url&quot;:&quot;https:\/\/assets.mycartpanda.com\/static\/products_images\/dZDGMjRYNWEDv5RtFZkU0WY1wYk7mA.jpg&quot;}]},&quot;title&quot;:&quot;SmartWatch Ultra Serie 8 IWO Original 2023 - Preto \/ SmartWatch Ultra&quot;,&quot;line_price&quot;:14990,&quot;original_price&quot;:14990,&quot;discounted_price&quot;:14990,&quot;original_line_price&quot;:14990,&quot;final_price&quot;:1,&quot;final_line_price&quot;:14990,&quot;url&quot;:&quot;\/products\/new-smart-watch-ultra-series-8-nfc-men-smartwatch-2023-wirelesscharge-bluetoothcall-men-women-fitness-bracelet-ios-android-phone?variant=84369289&quot;,&quot;image&quot;:&quot;static\/products_images\/RXRNpcAwvkM4b9bYSPhJqSMmlGxecV.jpg&quot;}],&quot;item_count&quot;:&quot;1&quot;,&quot;subtotal&quot;:14990,&quot;total&quot;:14990,&quot;total_price&quot;:14990,&quot;currency&quot;:&quot;R$&quot;,&quot;total_custom_option_price&quot;:0} "></div>
<div id="cartx-section-header" class="cartx-section ">
<div class="container-fluid header-section">
<div class="row">
<div class="col-8 col-md-7 header-logo">
</div>
<div class="col-4 col-md-5 header-image">
</div>
</div>
</div>
<style type="text/css">
    
    #cartx-section-header{
            display: none !important;
        }
        
    

    
    .header-text {
        text-align: ;
        
        
        
    }
    .header-text p {
        margin-bottom: 0px;
    }
    .header-logo {
        text-align: ;
        
    }
    .header-image {
        
            text-align: right;
        
    }
    #cartx-section-checkout-cost-details {
        
        
    }
    @media (max-width: 768px){
        .header-logo {
            
        }
    }
</style>
</div>

<div class="container checkout-cont ">
<div class="row check-out-row-outr">
<div class="col-ipad-12 col-xs-12 col-md-7 check-out-left">
<div id="carttimerfunction">
</div>
<div class="check-out-form">
<form method="post" name="checkoutForm" class="checkoutForm" id="checkoutForm" data-cart-currency-symbol="R$" autocomplete="off">
<input type="hidden" value="15000" name="cartTotalWeight" class="cartTotalWeight" style="display: block;">
<input type="hidden" value="149.9" name="checkoutSubTotalPrice" class="checkoutSubTotalPrice" style="display: block;">
<input type="hidden" value="148.40" name="checkoutTotalPrice" class="checkoutTotalPrice" style="display: block;">
<input type="hidden" value="0" name="checkoutTotalPriceGlobal" class="checkoutTotalPriceGlobal" style="display: block;">
<input type="hidden" value="0" name="totalShippingPrice" class="totalShippingPrice" style="display: block;">
<input type="hidden" value="0" name="totalShippingPriceGlobal" class="totalShippingPriceGlobal" style="display: block;">
<input type="hidden" value="0" name="totalDiscount" class="totalDiscount" style="display: block;">
<input type="hidden" value="0" name="include_shipping_amount" class="include_shipping_amount" style="display: block;">
<input type="hidden" value="" name="discount_category" class="discount_category" style="display: block;">
<input type="hidden" value="0" name="discountCode" class="discountCode" style="display: block;">
<input type="hidden" value="0" name="giftDiscountPrice" class="giftDiscountPrice" style="display: block;">
<input type="hidden" value="0" name="giftDiscountCode" class="giftDiscountCode" style="display: block;">
<input type="hidden" value="0" name="shipping_gateway" class="shipping_gateway" style="display: block;">
<input type="hidden" value="0" name="melhor_envio_service" class="melhor_envio_service" style="display: block;">
<input type="hidden" value="0" name="melhor_envio_company" class="melhor_envio_company" style="display: block;">
<input type="hidden" value="0" name="melhor_envio_packages" class="melhor_envio_packages" style="display: block;">
<input type="hidden" value="0" name="paid_by_client" class="paid_by_client" style="display: block;">
<input type="hidden" value="0" name="custom_price" class="custom_price" style="display: block;">
<input type="hidden" value="0" name="digital_cart_items" class="digital_cart_items" style="display: block;">
<input type="hidden" value="" name="country_code" class="country_code" style="display: block;">
<input type="hidden" value="" name="ocu_exists" class="ocu_exists" style="display: block;">
<input type="hidden" value="2804:14c:f288:8ea7:95c3:c52f:11f5:d569" name="browser_ip" class="browser_ip" style="display: block;">
<div id="cartx-section-1660265442007" class="cartx-section "><div class="container">
<div data-realtime="1660265442007.desktop_hide_checkout_image" class="checkout-image-section checkout-image-section-1660265442007 ">
<div data-realtime="1660265442007.mobile_hide_checkout_image" class="">
<a href="https://uaugringa.shop/products/new-smart-watch-ultra-series-8-nfc-men-smartwatch-2023-wirelesscharge-bluetoothcall-men-women-fitness-bracelet-ios-android-phone">
<style type="text/css">
                :root {
                  --image_width_1660265442007: 303px;
                  --image_position_1660265442007: center;
                  --padding_top_bottom_1660265442007: 8px;
                  --padding_top_bottom_mobile_1660265442007: 6px;

                  --mobile_logo_width_1660265442007: 482px;

                  --checkout_mob_logo_position_1660265442007: center;
              }

                .checkout-image-section-1660265442007 .desk_logo {
                    padding: var(--padding_top_bottom_1660265442007);
                }
                .checkout-image-section-mobile-1660265442007 {
                    padding: var(--padding_top_bottom_mobile_1660265442007);
                }
            </style>
<div data-realtime="1660265442007.image" style="text-align:var(--image_position_1660265442007);" class="logo desk_logo desk_logo-1660265442007 desktop_ch_logo ">
<img data-realtime="1660265442007.image" class="checkout-settings checkout-img-src-image" style="max-width: var(--image_width_1660265442007);width: 100%; display:none !important;" src="https://thumbor.cartpanda.com/vvN1CnfrqWAnskGZgHKS_lKlcYQ=/606x0/https://assets.mycartpanda.com/static/theme_images/ed/1f/e5/318540_8211761664.png">
<img data-realtime="1660265442007.image" class="checkout-settings checkout-img-src-image" style="max-width: var(--image_width_1660265442007);width: 100%; " src="https://assets.mycartpanda.com/static/theme_images/ed/1f/e5/318540_8211761664.png">
</div>
<div class="mobile-logo checkout-image-section-mobile-1660265442007">
<div data-realtime="1660265442007.checkout_mo_logo_image" style="text-align:var(--checkout_mob_logo_position_1660265442007);" class="logo ">
<img class="checkout-settings checkout-img-src-checkout_mo_logo_image" style="max-width: var(--mobile_logo_width_1660265442007);width: 100%; display:none !important;" src="https://thumbor.cartpanda.com/i7AAnQ1cJXgM5hwUrq50JXhFWnM=/964x0/https://assets.mycartpanda.com/static/theme_images/ed/1f/e5/318540_6362336981.png">
<img class="checkout-settings checkout-img-src-checkout_mo_logo_image" style="max-width: var(--mobile_logo_width_1660265442007);width: 100%; " src="https://assets.mycartpanda.com/static/theme_images/ed/1f/e5/318540_6362336981.png">
</div>
</div>
<style type="text/css">
                @media (max-width: 767px){
                    .check-out-left .desk_logo.desktop_ch_logo,
                    .checkout-header-section .desk_logo.desktop_ch_logo {
                        display: none;
                    }
                }
                @media (min-width: 767px){
                    .mobile-logo{
                        display: none;
                    }
                }
            </style>
</a>
</div>
</div>
</div>
</div><div id="cartx-section-checkout_summary" class="cartx-section "><div class="row mobile-price-smry new-checkout-summary-container">
<div class="col-12">
<div id="bottom_cart" class="col-3" style="display: none;"></div>
<div class="prices_row total-price show-summery new-checkout-summary-container-header ">
<div class="title">
<i class="fa fa-angle-down"></i>
<span data-realtime="checkout_summary.cart_summary_mobile_title">
Resumo do Pedido
</span>
</div>
<div class="total-text">
<div class="checkoutTotal">
<span>R$148,40<small class="text-muted" style="font-size: 50%">OU EM 12x DE R$&nbsp;15,46* NO CARTÃO</small></span>
</div>
<div class="checkoutTotal2" style="display: none;">
<span><small class="text-muted" style="font-size: 50%">OU EM 12x DE R$&nbsp;15,46* NO CARTÃO</small></span>
</div>
</div>
</div>
<div class="check-out-right on-mobile new-checkout-summary-container-body">
<div id="top_cart"></div>
<div class="cart-summery-dynamic-sections">
<div id="cartx-section-cart-products" class="cartx-section ">
<div class="product-list-loader" style="display: none;">
<img style="max-width: 45px;" src="https://pagamento.uaugringa.shop/images/spinner.gif">
</div>
<div class="row product-loading" style="display: none;">
<div class="col-12">
<div class="timeline-wrapper">
<div class="timeline-item">
<div class="animated-background">
<div class="background-masker header-top"></div>`
<div class="background-masker header-left"></div>
<div class="background-masker header-right"></div>
<div class="background-masker header-bottom"></div>
<div class="background-masker subheader-left"></div>
<div class="background-masker subheader-right"></div>
<div class="background-masker subheader-bottom"></div>
<div class="background-masker content-top"></div>
</div>
</div>
</div>
</div>
</div>
<div class="prdcts_list">
<div class="row checkout-product-row">
<div class="col-2 prdct-thumb">
<img src="https://thumbor.cartpanda.com/KtEKtVOXWdQGjCUavEPhnqBlPdA=/100x0/https://assets.mycartpanda.com/static/products_images/RXRNpcAwvkM4b9bYSPhJqSMmlGxecV.jpg" onerror="this.src='https://via.placeholder.com/65x65.png'">

</div>
<div class="col-7 prdct-name">
<h5 class="bolderFont">
SmartWatch Ultra Serie 8 IWO Original 2023
</h5>
<div class="variant-name">
Preto / SmartWatch Ultra
</div>
<div class="custom_options">
</div>
<span class="desktop-price bolderFont">R$ 149,90</span>
</div>
<div class="col-3 prdct-qty" data-variant="84369289">
<div class="product-price-mobile">
<span class="bolderFont">R$ 149,90</span>
</div>
<input type="hidden" name="" class="prdct_org_price" value="1000" style="display: block;">
<input type="hidden" name="" class="prdct_old_qty" value="1" style="display: block;">
<input type="hidden" name="" class="prdct_id" value="16729881608238" style="display: block;">
<div class="d-flex incremental-btn-wrap">

<input type="number" class="form-control prdct_qty" name="quantity" placeholder="Quantity" autocomplete="off" value="1" min="1" style="display: block;">
<button type="button" class="add incremental-btn btn-number hidden" data-type="plus" data-field="quantity" data-variant="84369289">+</button>
</div>
</div>

</div>
</div></div>
<div id="cartx-section-checkout-coupon" class="cartx-section index-section">
<div data-realtime="checkout-coupon.desktop_hide_coupon" class="coupon_row ">
<div data-realtime="checkout-coupon.mobile_hide_coupon" class="">
<fieldset class="coupon-sec">
<div class="coupon-sect">
<div class="coupon-head">
<span class="coupon-head-text">Tem cupom de desconto ou vale presente?</span>
</div>
<div class="coupon-cont" style="display:none;">
<div class="form-group">
<input type="text" class="form-control couponCodeW empty" data-realtime="checkout-coupon.placeholder_text" data-realtimetype="placeholder" name="couponCode" placeholder="Cupom de desconto" id="coupon" autocomplete="off" value="" style="display: block;">
</div>
<div class="apply-coupon-btn-wrap">
<input type="button" name="" data-realtime="checkout-coupon.button_text" data-realtimetype="value" value="Aplicar" class="black-btn couponFormSubmitBtn" style="display: block;">
</div>
</div>
</div>
<div class="selectedCoupons">
</div>
</fieldset>
<span class="coupon_error " style="display: none;"></span>
<span class="high_value_error" style="display: none;"></span>
<span class="coupon_success " data-hide="" style="display: none;"></span>
</div>
</div>

</div>
<div id="cartx-section-checkout-cost-details" class="cartx-section index-section">
<div class="prices_row ">
<ul>
<li>
<div class="row">
<div class="col-6 price-title bolderFont">
Subtotal
</div>
<div class="col-6 price-value checkoutSubTotal text-right bolderFont" style="">R$ 149,90</div>
</div>
</li>
<li>
<div class="row">
<div class="col-6 price-title bolderFont">
Entrega
</div>
<div class="col-6 price-value text-right totalShippingPriceText bolderFont">
---
</div>
</div>
</li>
<li class="discount_price_li discount-price-wrap" style="display:none;">
<div class="row">
<div class="col-6 price-title bolderFont">
Desconto
</div>
<div class="col-6 price-value text-right DiscountPriceText bolderFont">
---
</div>
</div>
</li>
<li class="discount_price_li custom-option-price-wrapper" style="display:none;">
<div class="row">
<div class="col-6 price-title bolderFont">
Custo de personalização
</div>
<div class="col-6 price-value text-right CustomOptionPriceText bolderFont">
---
</div>
</div>
</li>
<li class="discount_price_li gift-card-price-wrapper" style="display:none;">
<div class="row">
<div class="col-6 price-title bolderFont">
Cartão Presente
</div>
<div class="col-6 price-value text-right GiftCardDiscountText bolderFont">
---
</div>
</div>
</li>
<li class="cc_discount_price_li" style="display:block;">
<div class="row">
<div class="col-6 price-title bolderFont">
Desconto <span class="discount_gateway">Cartão</span>
</div>
<div class="col-6 price-value text-right CCDiscountPriceText bolderFont">- R$ 1,50</div>
</div>
</li>
</ul>
</div>
<div class="prices_row total-price">
<ul>
<li>
<div class="row align-items-start">
<div class="col-3 col-sm-2 final-total bolderFont ">
Total
</div>
<div class="col-9 col-sm-10 total-price-loader" style="display: none;">
<img style="max-width: 45px;" src="https://pagamento.uaugringa.shop/images/spinner.gif">
</div>
<div class=" col-9 col-sm-10   final-total text-right checkoutTotal bolderFont" style="">
<span>R$148,40<small class="text-muted" style="font-size: 50%">OU EM 12x DE R$&nbsp;15,46* NO CARTÃO</small></span>
</div>
<div class="col-9 col-sm-10 price-value text-right checkoutTotal2 bolderFont" style="display: none">
<span>R$ 149,90<small class="text-muted" style="font-size: 50%">OU EM 12x DE R$&nbsp;15,46* NO CARTÃO</small></span>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<style>
    @media (max-width: 600px) {
        .check-out-right.on-mobile{
            display: block;
        }
    }
</style></div><div id="cartx-section-checkout_personal_information" class="cartx-section "><fieldset class="cust-info pessonal_method-g hide-phone-code" style="margin-top: 0">
<legend class="checkout-titles d-flex">
<div class="inner-legend">
<div class="label_icon">
<span data-realtime="settings.layout_hide_icons" class="mr-2 d-none  checkout-icon-svg checkout-icon-image">
<svg width="25px" height="25px" viewBox="0 0 25 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

<title>avatar</title>
<desc>Created with Sketch.</desc>
<g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g id="Desktop-FINAL" transform="translate(-208.000000, -125.000000)">
<g id="avatar" transform="translate(208.000000, 125.000000)">
<g>
<circle id="Oval" fill="#F6F6F5" cx="12.5" cy="12.5" r="12.5"></circle>
<path d="M12.4744526,3 L12.5364964,3 C13.2737226,3.01459854 13.9343066,3.18978102 14.5,3.51459854 C15.2591241,3.94890511 16.1788321,4.87956204 16.270073,6.82481752 C16.2956204,7.08394161 16.5291971,9.79927007 15.1240876,11.3832117 C14.9719259,11.5545023 14.8069209,11.7063208 14.6293687,11.8384698 C15.3541412,12.3944294 17.0386424,13.6128605 18.2992701,13.9343066 C18.310219,13.9379562 18.3248175,13.9416058 18.3357664,13.9452555 C19.919708,14.4854015 19.9671533,16.1751825 19.9890511,16.8978102 L19.9908759,16.9447993 L19.9908759,16.9447993 L19.9927007,16.9890511 L19.9934582,17.0571449 C19.9958105,17.336803 19.9859629,18.2015722 19.8175182,18.649635 C19.7810219,18.7445255 19.7116788,18.8248175 19.6277372,18.879562 C19.5182482,18.9489051 16.8941606,20.6240876 12.5036496,20.6240876 C8.11313869,20.6240876 5.48905109,18.9525547 5.37956204,18.879562 C5.2919708,18.8248175 5.22627737,18.7445255 5.18978102,18.649635 C5.04098821,18.2734419 5.00881095,17.6100289 5.00354498,17.2374904 L5.00364964,16.9854015 C5.00729927,16.9562044 5.00729927,16.9270073 5.00729927,16.8941606 C5.02919708,16.1751825 5.07664234,14.4854015 6.66058394,13.9416058 C6.67153285,13.9379562 6.68248175,13.9343066 6.69708029,13.9306569 C7.95909759,13.6102773 9.63367431,12.3988543 10.3620969,11.8385361 C10.1824181,11.7080008 10.0170931,11.5554504 9.8649635,11.3832117 C8.45985401,9.79927007 8.69343066,7.08394161 8.7189781,6.82481752 C8.81021898,4.8649635 9.74452555,3.93430657 10.5109489,3.5 C11.2101582,3.10188564 11.9369678,3.01350872 12.3652845,3.00154391 L12.4744526,3 L12.5364964,3 Z M11.3271508,12.3282727 L11.324545,12.33 C11.3278044,12.3284746 11.3274776,12.3283737 11.3271508,12.3282727 Z" id="Combined-Shape" fill="#2688FF" fill-rule="nonzero"></path>
</g>
</g>
</g>
</g>
</svg></span>
<span style="font-size: 12px " data-realtime="settings.layout_hide_icons_number" class="mr-2 checkout-icon-number d-none">1</span>
</div>
<div class="label_text">
<span class="checkout-title-inner" data-realtime="checkout_personal_information.headline">
Informações Pessoais
</span>
</div>
</div>
</legend>
<span class="sub-legend">
<span data-realtime="settings.layout_hide_icons" class="d-none  checkout-icon-svg"></span>
<span class="sub-legend-inner" data-realtime="checkout_personal_information.subheadline">
Para quem devemos entregar o pedido?
</span>
</span>
<style>
        .containerLable {
          display: block;
          position: relative;
          padding-left: 35px;
          margin-bottom: 5px;
          cursor: pointer;
          font-size: 15px;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }
        .containerLable input {
          position: absolute;
          opacity: 0;
          cursor: pointer;
        }
        .checkmark {
          position: absolute;
          top: 3px;
          left: 10px;
          height: 16px;
          width: 16px;
          background-color: #eee;
          border-radius: 50%;
          border: 1.5px solid #ccc;
        }

        .containerLable:hover input ~ .checkmark {
          background-color: #ccc;
        }
        .containerLable input:checked ~ .checkmark {
          background-color: #000;
        }

        .checkmark:after {
          content: "";
          position: absolute;
          display: none;
        }

        .containerLable input:checked ~ .checkmark:after {
          display: block;
        }

        .containerLable .checkmark:after {
            top: 3px;
            left: 4px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: white;
        }
        .row.single_field.cpfCnpjFiled .form-group label:first-child {
            margin-right: 35px;
        }
        .checkInput {
            color: var(--checkout_text);
            padding: 14px 0px;
            height: var(--checkout_form_input_height);
        }
        .checkSpan{
            align-self: center;
            padding: 8px ;
            font-size: 14px;
            padding: 0px 8px 8px 8px;
            position: absolute;
        }
        input[type='checkbox'] {
            align-self: center;
            -webkit-appearance: none;
            border: 1px solid #cacece;
            padding: 9px;
            border-radius: 3px;
        }
        input[type='checkbox']:checked:after {
            content: '\2713';
            font-size: 16px;
            position: absolute;
            left: 18px;
        }
        input#legal_value:checked:after, input.ck-input:checked:after {
            top: -2px;
        }
        input#free_State:checked:after {
            top: 11px;
        }
        #save-information-div input[type='checkbox'] {
            -webkit-transform: scale(2);
            -o-transform: scale(2);
            transform: scale(0.7);
            box-shadow: none !important;
        }
        #save-information-div input:checked:after {
            top: -3px;
            left: 3px;
        }
        #save-information-div .checkSpan {
            font-size: 13px;
        }
        .save_information_safety {
            padding-left: 2px;
            font-size: 13px;
            display: flex;
        }

        .save_information_safety .logo_safety {
            min-width: 18px;
            height: 18px;
            margin-right: 4px;
        }
        .checkout-icon-number {
           color: #2C2C2C;
           background:#F1F1F1;
           border-radius: 50%;
           font-size:12px;
           width: 20px;
           height: 20px;
           display: flex;
           justify-content: center;
           line-height: 20px;
         }
         .number-default {
           font-size: 12px;
           width: 20px;
           height: 20px;
           line-height:20px;
           color: #2C2C2C;
           background-color: #F1F1F1;
         }
         
    </style>

<div class="row single_field">
<div class="col-md-12">
<div class="form-group float-label-control">
<input type="email" name="email" class="form-control empty" value="" placeholder="E-mail*" id="email" required="" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto; display: block;">
<label for="email">E-mail*</label>
<ul id="auto-list" style="display:none;"></ul>
</div>
<span class="email-name-error check-inputs-error"></span>
</div>
</div>

<div class="row single_field">
<div class="col-md-12">
<div class="form-group float-label-control">
<input type="text" class="form-control empty" name="fullName" value="" placeholder="Nome completo*" id="full-name" required="" autocomplete="off" minlength="3" style="display: block;">
<label for="full-name" class="first_name_label">Nome completo*</label>
<span class="full-name-error check-inputs-error"></span>
</div>
</div>
</div>
<div class="row single_field">
<div class="col-md-6">
<div class="form-group float-label-control">
<input type="tel" class="form-control empty" name="phoneNumber" value="" placeholder="Celular*" id="phone-number" required="required" autocomplete="off" maxlength="15" style="display: block;">
<span class="phone-code">+55</span>
<label for="phone-number">Celular*</label>
</div>
</div>
<div class="col-md-6 cpffield">
<div class="form-group float-label-control">
<input type="tel" class="form-control empty" name="ficalNumber" value="" placeholder="CPF*" id="ficalNumber" required="" autocomplete="off" maxlength="14" style="display: block;">
<label for="fical-no">CPF*</label>
</div>
</div>
<div class="col-md-6 cnpjfield" style="display:none">
<div class="form-group float-label-control">
<input type="tel" class="form-control empty" name="cnpjNumber" value="" placeholder="CNPJ*" id="cnpjNumber" required="" autocomplete="off" maxlength="18" style="display: block;">
<label for="fical-no">CNPJ*</label>
</div>
</div>
<div class="col-md-6 stateRegistration" style="display:none">
<div class="form-group float-label-control">
<input type="tel" class="form-control empty registrationNumber" name="registrationNumber" value="" placeholder="Inscrição estadual*" id="registration_Number" autocomplete="off" style="display: block;">
<label for="fical-no">Inscrição estadual*</label>
</div>
</div>
<div class="col-md-6 stateRegistration" style="display:none">
<div class="form-group checkInput">
<input type="checkbox" class="free_State" name="freeState" onclick="freeStateRegistration()" value="1" id="free_State" style="display: block;">
<span class="checkSpan">Isento</span>
</div>
</div>
<div class="col-md-6">
<div class="cpfCnpjFiled" style="display:none">
<div class="form-group">
<input type="checkbox" class="legal_value" name="legalVlaue" onclick="legalEntityChnage()" value="CPF" id="legal_value" style="display: block;">
<span class="checkSpan">Quero comprar com CNPJ</span>
</div>
</div>
</div>
</div>
</fieldset>
<style type="text/css">
    .hide-phone-code #phone-number{
        padding-left: 20px !important;
    }
    .hide-phone-code .phone-code{
        display: none !important;
    }
</style>
</div><div id="cartx-section-checkout_shipping_information" class="cartx-section "><fieldset class="cust-info section-address shipping-method_g" style="margin-top: 0; ">
<legend class="checkout-titles d-flex">
<div class="inner-legend">
<div class="label_icon">
<span data-realtime="settings.layout_hide_icons" class="mr-2 d-none  checkout-icon-svg checkout-icon-image">
<svg width="25px" height="25px" viewBox="0 0 25 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

<title>delivery-truck</title>
<desc>Created with Sketch.</desc>
<g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g id="Desktop-FINAL" transform="translate(-208.000000, -401.000000)">
<g id="Group-3" transform="translate(208.000000, 401.000000)">
<g id="delivery-truck">
<circle id="Oval" fill="#F6F6F5" cx="12.5" cy="12.5" r="12.5"></circle>
<g transform="translate(2.000000, 6.000000)">
<path d="M14.0071384,7.96477193 L12.7040794,9.10045224 L1.51426901,9.10049513 C1.30520468,9.10049513 1.13568031,9.27001949 1.13568031,9.47908382 L1.13568031,10.2362183 C1.13568031,10.4452827 1.30520468,10.614807 1.51426901,10.614807 L17.7928538,10.614807 L17.7928538,7.96477193 L14.0071384,7.96477193 Z" id="Path" fill="#7DB8FF" fill-rule="nonzero"></path>
<rect id="Rectangle" fill="#2688FF" x="0" y="0" width="14.6666667" height="9.16666667" rx="1.46666667"></rect>
<g id="Group" transform="translate(1.462378, 1.462378)" fill="#FFFFFF" fill-opacity="0.7" fill-rule="nonzero">
<path d="M11.4261697,6.14764912 L0.363342954,6.14764912 C0.178209315,6.14764912 0.0280896686,5.97812476 0.0280896686,5.76906043 L0.0280896686,5.76906043 C0.0280896686,5.5599961 0.178209315,5.39047173 0.363342954,5.39047173 L11.4261697,5.39047173 C11.6113034,5.39047173 11.761423,5.5599961 11.761423,5.76906043 L11.761423,5.76906043 C11.761423,5.97812476 11.6113034,6.14764912 11.4261697,6.14764912 Z" id="Path"></path>
<path d="M11.4261697,0.800019493 L0.363342954,0.800019493 C0.178209315,0.800019493 0.0280896686,0.630495127 0.0280896686,0.421430799 L0.0280896686,0.421430799 C0.0280896686,0.212366472 0.178209315,0.0428421053 0.363342954,0.0428421053 L11.4261697,0.0428421053 C11.6113034,0.0428421053 11.761423,0.212366472 11.761423,0.421430799 L11.761423,0.421430799 C11.761423,0.630538012 11.6113034,0.800019493 11.4261697,0.800019493 Z" id="Path"></path>
</g>
<path d="M19.1656881,1.90765302 L16.5261229,1.90765302 C16.2727919,1.90765302 16.0268758,1.99315555 15.8281885,2.15031774 C15.63442,2.30358919 15.5214074,2.53707617 15.5214074,2.78413567 L15.5214074,7.96481481 L15.5214074,7.96481481 C15.5214074,8.17387914 15.6909318,8.34340351 15.8999961,8.34340351 L17.6035595,8.34340351 L17.6035595,10.2362612 L21.5785692,10.2362612 L21.5785692,7.53201949 C21.5785692,7.06736062 21.4930136,6.60669006 21.3262339,6.17303704 L19.8723899,2.39298246 C19.7599025,2.10059259 19.4790058,1.90765302 19.1656881,1.90765302 Z" id="Combined-Shape" fill="#2688FF" fill-rule="nonzero"></path>
<path d="M18.7064098,2.66478752 L16.6100381,2.66478752 C16.4269792,2.66478752 16.2785419,2.83431189 16.2785419,3.04337622 L16.2785419,4.93623392 C16.2785419,5.14529825 16.4269792,5.31482261 16.6100381,5.31482261 L19.7054795,5.31482261 C19.8735557,5.31482261 19.9893616,5.12226901 19.9290179,4.94309552 L19.3252427,3.15011696 C19.2267101,2.8577271 18.9807541,2.66478752 18.7064098,2.66478752 Z" id="Path" fill-opacity="0.85" fill="#FFFFFF" fill-rule="nonzero"></path>
<rect id="Rectangle" fill="#7DB8FF" fill-rule="nonzero" x="17.6035595" y="8.34336062" width="3.97500975" height="1.8928577"></rect>
<circle id="Oval" fill="#FFFFFF" fill-rule="nonzero" cx="4.35355556" cy="10.4254698" r="1.73512671"></circle>
<path d="M4.35355556,12.5076218 C3.20539571,12.5076218 2.27140351,11.5736296 2.27140351,10.4254698 C2.27140351,9.27730994 3.20539571,8.34331774 4.35355556,8.34331774 C5.5017154,8.34331774 6.4357076,9.27730994 6.4357076,10.4254698 C6.4357076,11.5736296 5.5017154,12.5076218 4.35355556,12.5076218 Z M4.35355556,9.10049513 C3.62283821,9.10049513 3.02853801,9.69475244 3.02853801,10.4255127 C3.02853801,11.1562729 3.62283821,11.7504873 4.35355556,11.7504873 C5.0842729,11.7504873 5.6785731,11.15623 5.6785731,10.4254698 C5.6785731,9.69470955 5.08431579,9.10049513 4.35355556,9.10049513 Z" id="Shape" fill="#2688FF" fill-rule="nonzero"></path>
<circle id="Oval" fill="#2688FF" fill-rule="nonzero" cx="4.35355556" cy="10.4254698" r="1"></circle>
<circle id="Oval" fill="#FFFFFF" fill-rule="nonzero" cx="17.6035595" cy="10.4254698" r="1.73512671"></circle>
<path d="M17.6035595,12.5076218 C16.4553996,12.5076218 15.5214074,11.5736296 15.5214074,10.4254698 C15.5214074,9.27730994 16.4553996,8.34331774 17.6035595,8.34331774 C18.7517193,8.34331774 19.6857115,9.27730994 19.6857115,10.4254698 C19.6856686,11.5736296 18.7517193,12.5076218 17.6035595,12.5076218 Z M17.6035595,9.10049513 C16.8728421,9.10049513 16.2785419,9.69475244 16.2785419,10.4255127 C16.2785419,11.1562729 16.8727992,11.7504873 17.6035595,11.7504873 C18.3343197,11.7504873 18.928577,11.15623 18.928577,10.4254698 C18.928577,9.69470955 18.3342768,9.10049513 17.6035595,9.10049513 Z" id="Shape" fill="#2688FF" fill-rule="nonzero"></path>
<circle id="Oval" fill="#2688FF" fill-rule="nonzero" cx="17.6035595" cy="10.4254698" r="1"></circle>
<path d="M21.1999805,7.58622612 L21.5785692,7.58622612 L21.5785692,8.72194932 L21.1999805,8.72194932 C20.9909162,8.72194932 20.8213918,8.55242495 20.8213918,8.34336062 L20.8213918,7.96477193 C20.8213918,7.7557076 20.9909162,7.58622612 21.1999805,7.58622612 Z" id="Path" fill="#DEEDFF" fill-rule="nonzero"></path>
<path d="M21.1999805,10.6147641 L21.5785692,10.6147641 C21.7876335,10.6147641 21.9571579,10.4452398 21.9571579,10.2361754 L21.9571579,9.47904094 C21.9571579,9.26997661 21.7876335,9.10045224 21.5785692,9.10045224 L21.1999805,9.10045224 C20.9909162,9.10045224 20.8213918,9.26997661 20.8213918,9.47904094 L20.8213918,10.2361754 C20.8213918,10.4452827 20.9909162,10.6147641 21.1999805,10.6147641 Z" id="Path" fill="#2688FF" fill-rule="nonzero"></path>
</g>
</g>
</g>
</g>
</g>
</svg></span>
<span style="font-size: 12px " data-realtime="settings.layout_hide_icons_number" class=" mr-2 checkout-icon-number d-none">2</span>
</div>
<div class="label_text">
<span class="checkout-title-inner" data-realtime="checkout_shipping_information.headline">
Informações de Entrega
</span>
</div>
</div>
</legend>
<span class="sub-legend">
<span data-realtime="settings.layout_hide_icons" class="d-none  checkout-icon-svg"></span>
<span class="sub-legend-inner" data-realtime="checkout_shipping_information.subheadline">
Para onde devemos entregar o pedido?
</span>
</span>
<div class="row multiple_fields">
<div class="col-7 col-md-4 pr-0 cep_field">
<div class="form-group float-label-control" id="cep-input">
<div class="loader">
<div class="loader-table">
<div class="loader-table-cell">
<img style="max-width: 45px;" src="https://pagamento.uaugringa.shop/images/spinner.gif">
</div>
</div>
</div>
<input type="tel" class="form-control empty" name="zipcode" placeholder="CEP*" id="zip-code" value="" required="" autocomplete="off" maxlength="9" style="display: block;">
<label for="zip-code">CEP*</label>
<span class="check-inputs-error cep-input-error empty"></span>
</div>
</div>
<div class="col-md-8 col-6 custom_city_state" style="display:none;">

</div>
<div class="col-9 col-md-4 city_field hide-inputs empty">
<div class="form-group float-label-control">
<input type="text" class="form-control empty" name="city" placeholder="Cidade*" id="city" autocomplete="off" style="display: block;">
<label for="city">Cidade*</label></div>
</div>
<div class="col-3 col-md-4 state_field hide-inputs empty">
<div class="form-group float-label-control stateWrapper">

<div class="selectric-wrapper"><div class="selectric-hide-select"><select class="" name="state" id="state" tabindex="-1">
<option value="">Estado</option>
<option value="AC">AC</option>
<option value="AL">AL</option>
<option value="AP">AP</option>
<option value="AM">AM</option>
<option value="BA">BA</option>
<option value="CE">CE</option>
<option value="DF">DF</option>
<option value="ES">ES</option>
<option value="GO">GO</option>
<option value="MA">MA</option>
<option value="MT">MT</option>
<option value="MS">MS</option>
<option value="MG">MG</option>
<option value="PA">PA</option>
<option value="PB">PB</option>
<option value="PR">PR</option>
<option value="PE">PE</option>
<option value="PI">PI</option>
<option value="RJ">RJ</option>
<option value="RN">RN</option>
<option value="RS">RS</option>
<option value="RR">RR</option>
<option value="RO">RO</option>
<option value="SC">SC</option>
<option value="SP">SP</option>
<option value="SE">SE</option>
<option value="TO">TO</option>
</select></div><div class="selectric"><span class="label">Estado</span><b class="button">▾</b></div><div class="selectric-items" tabindex="-1"><div class="selectric-scroll"><ul><li data-index="0" class="selected">Estado</li><li data-index="1" class="">AC</li><li data-index="2" class="">AL</li><li data-index="3" class="">AP</li><li data-index="4" class="">AM</li><li data-index="5" class="">BA</li><li data-index="6" class="">CE</li><li data-index="7" class="">DF</li><li data-index="8" class="">ES</li><li data-index="9" class="">GO</li><li data-index="10" class="">MA</li><li data-index="11" class="">MT</li><li data-index="12" class="">MS</li><li data-index="13" class="">MG</li><li data-index="14" class="">PA</li><li data-index="15" class="">PB</li><li data-index="16" class="">PR</li><li data-index="17" class="">PE</li><li data-index="18" class="">PI</li><li data-index="19" class="">RJ</li><li data-index="20" class="">RN</li><li data-index="21" class="">RS</li><li data-index="22" class="">RR</li><li data-index="23" class="">RO</li><li data-index="24" class="">SC</li><li data-index="25" class="">SP</li><li data-index="26" class="">SE</li><li data-index="27" class="last">TO</li></ul></div></div><label class="hidden" aria-hidden="true">Hidden Label<input class="selectric-input empty" tabindex="0" style="display: block;"></label></div>
<label for="state">Estado*</label></div>
</div>
</div>
<div class="row multiple_fields hide-inputs empty tick_input_shipping" style="display: none;">
<div class="col-8 col-md-8 p-r-zero">
<div class="form-group float-label-control">
<input type="text" class="form-control empty" name="address" placeholder="Endereço*" id="address" autocomplete="off" maxlength="255" style="display: block;">
<label for="address">Endereço*</label></div>
</div>
<div class="col-md-4 col-4 house_number_field">
<div class="form-group float-label-control">
<input type="text" class="form-control empty" name="number" placeholder="Número*" id="number" autocomplete="nope" value="" style="display: block;">
<label for="number">Número*</label></div>
</div>
<div class="col-md-8 col-12 neighborhood_field p-r-zero">
<div class="form-group float-label-control">
<input type="text" class="form-control empty" name="neighborhood" placeholder="Bairro*" id="neighborhood" autocomplete="off" style="display: block;">
<label for="neighborhood">Bairro*</label></div>
</div>
<div class="col-md-4 col-12">
<div class="form group float-label-control">
<input type="text" class="form-control empty" name="compartment" placeholder="Complemento" id="compartment" autocomplete="off" maxlength="60" style="display: block;">
<label for="compartment">Complemento</label></div>
</div>
<input type="hidden" class="form-control" name="country" value="Brasil" placeholder="País*" id="country" readonly="readonly" required="" autocomplete="off" style="display: block;">

</div>
</fieldset>
<fieldset class="cust-info section-shipping-method hide-inputs">
<legend class="checkout-titles">Método de envio </legend>
<span class="sub-legend">Escolha o seu método de entrega abaixo
</span>
<div class="shipping_method_loader d-none">
<div class="funkyradio mt-2">
<div class="funkyradio-default">
<div class="radio-with-shipIcon" href="#">
<span><img src="https://pagamento.uaugringa.shop/images/spinner.gif" class="credit-card-icons desktop"></span>
<label>Carregando, por favor aguarde...</label>
</div>
</div>
</div>

</div>
<div class="row shipping_rates_option_div">
<div class="funkyradio col-md-12">
<div class="funkyradio-default">
<a class="radio-with-shipIcon" href="#">
<span><img src="https://pagamento.uaugringa.shop/images/shipping_truck.png" class="credit-card-icons desktop"></span>
<label class="no-radio" for="zip-code">Digite suas informações de entrega no campo acima</label></a>
</div>
</div>
<div class="hidden weightWiseShippingPrice" data-low-weight="0.00" data-high-weight="0.00" data-price="0.00"></div>
</div>
<div class="row hidden">
<div class="col-md-12">
<button type="button" class="get_shipping_rates">Obter taxas de envio</button>
</div>
</div>
<div class="row shipping_rates_div"></div>
</fieldset>
</div><div id="cartx-section-checkout_payment_method" class="cartx-section "><fieldset class="payment-info">
<legend class="border-bottom-unset checkout-titles d-flex">
<div class="inner-legend">
<div class="label_icon">
<span data-realtime="settings.layout_hide_icons" class="mr-2 d-none  checkout-icon-svg checkout-icon-image">
<svg width="25px" height="25px" viewBox="0 0 25 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

<title>credit-card</title>
<desc>Created with Sketch.</desc>
<g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g id="Desktop-FINAL" transform="translate(-209.000000, -831.000000)">
<g id="credit-card" transform="translate(209.000000, 831.000000)">
<circle id="Oval" fill="#F6F6F5" cx="12.5" cy="12.5" r="12.5"></circle>
<g transform="translate(2.000000, 6.000000)">
<path d="M0.582387931,12.11745 C0.213493188,11.8117944 -3.85419974e-16,11.3576439 0,10.8785732 L0,1.72142678 C-5.86692359e-17,1.24235612 0.213493188,0.788205644 0.582387931,0.48255 C0.958793259,0.170671299 1.43227825,8.97955857e-17 1.92110265,0 L19.0788974,0 C19.5677218,-2.33009349e-15 20.0412067,0.170671299 20.4176121,0.48255 C20.7865068,0.788205644 21,1.24235612 21,1.72142678 L21,10.8785732 C21,11.3576439 20.7865068,11.8117944 20.4176121,12.11745 C20.0412067,12.4293287 19.5677218,12.6 19.0788974,12.6 L1.92110265,12.6 C1.43227825,12.6 0.958793259,12.4293287 0.582387931,12.11745 Z" id="XMLID_114_" fill="#2688FF" fill-rule="nonzero"></path>
<rect id="XMLID_113_" fill-opacity="0.85" fill="#FFFFFF" fill-rule="nonzero" x="-1.77635684e-15" y="2.1" width="21" height="2.1"></rect>
<path d="M2.38636364,6.68181818 L10.0227273,6.68181818" id="Line-5" stroke="#F2F3F4" stroke-width="0.954545455" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M2.38636364,9.06818182 L6.20454545,9.06818182" id="Line-5-Copy" stroke="#F2F3F4" stroke-width="0.954545455" stroke-linecap="round" stroke-linejoin="round"></path>
<rect id="XMLID_105_" fill-opacity="0.85" fill="#FFFFFF" fill-rule="nonzero" x="13.0344828" y="6.35924765" width="5.34545455" height="3.43636364"></rect>
</g>
</g>
</g>
</g>
</svg></span>
<span style="font-size: 12px " data-realtime="settings.layout_hide_icons_number" class=" mr-2 checkout-icon-number d-none">3</span>
</div>
<div class="label_text">
<span class="checkout-title-inner" data-realtime="checkout_payment_method.headline">
Método de Pagamento
</span>
</div>
</div>
</legend>
<span class="sub-legend">
<span data-realtime="settings.layout_hide_icons" class="d-none  checkout-icon-svg"></span>
<span class="sub-legend-inner" data-realtime="checkout_payment_method.subheadline">
Escolha o seu método de pagamento abaixo
</span>
</span>
<div class="alert alert-light fade show d-none mt-3" role="alert" id="error-message" style="border: 1px solid #d9d9d9;border-radius: 15px;">
<div class="row">
<div class="col-md-8">
Pagamento negado
</div>
</div>
<span class="small">Tente outro cartão ou escolha outro método de pagamento.</span>
<div class="alert alert-danger p-2 mt-2 d-flex" role="alert" style="border-radius: 10px;">
<i class="fa fa-exclamation-circle mr-3 pt-1" aria-hidden="true"></i>
<span id="alert-text" class="text-dark">Error Message</span>
</div>
</div>
<style type="text/css">
   .with-payment-placeholder .payment-placeholder {
        position: absolute;
        top: calc(var(--checkout_form_input_height) / 2);
        left: 45px;
        transform: translate(0% , -50%);
        color: var(--customer_selected_field_description, #818181);
        font-family: var(--body_base_family) !important;
        font-weight: var(--placeholder_font_weight) !important;
        font-size: var(--placeholder_font_size) !important;
    }

    .payment-placeholder {
        display: none;
    }

   .payment-info input::-webkit-input-placeholder {
        /* WebKit browsers */
        color: var(--customer_selected_field_description, #818181);
        font-family: var(--body_base_family) !important;
        font-weight: var(--placeholder_font_weight) !important;
        font-size: var(--placeholder_font_size) !important;
    }
   .payment-info input::-moz-placeholder {
        /* Mozilla Firefox 4 to 18 */
        color: var(--customer_selected_field_description, #818181);
        font-family: var(--body_base_family) !important;
        font-weight: var(--placeholder_font_weight) !important;
        font-size: var(--placeholder_font_size) !important;
    }
    .payment-info input::-moz-placeholder {
        /* Mozilla Firefox 19+ */
        color: var(--customer_selected_field_description, #818181);
        font-family: var(--body_base_family) !important;
        font-weight: var(--placeholder_font_weight) !important;
        font-size: var(--placeholder_font_size) !important;
    }
    .payment-info input::-ms-input-placeholder {
        /* Internet Explorer 10+ */
        color: var(--customer_selected_field_description, #818181);
        font-family: var(--body_base_family) !important;
        font-weight: var(--placeholder_font_weight) !important;
        font-size: var(--placeholder_font_size) !important;
    }
    .payment-info input::placeholder {
        color: var(--customer_selected_field_description, #818181);
        font-family: var(--body_base_family) !important;
        font-weight: var(--placeholder_font_weight) !important;
        font-size: var(--placeholder_font_size) !important;
    }
    :root {
        --cvv_instruction_icon_color_checkout_payment_method : #E7F0FC;
        --cvv_instruction_icon_size_checkout_payment_method : 16px;
    }
</style>
<div class="row payment-method">
<div class="col-md-12 payment-method-inner">
<div class="panel-group mb-4" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel panel-default" data-recording-sensitive="">
<div class="panel-heading" data-gateway="cartpanda_cielo" role="tab" id="heading1" data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1" style="cursor:pointer;">
<h4 class="panel-title payment_img-title">
<a role="button" data-gateway="cartpanda_cielo" data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
<span class="dot-pr"></span>
<span>
Cartão de Crédito
<span class="discount_per" style="background: #222; color: #fff;">Envio rápido</span>
</span>
</a>
<div class="payment_img ">
<div class="inner_payment_img brand-visa"><img src="https://pagamento.uaugringa.shop/images/payment/visa.svg"></div>
<div class="inner_payment_img brand-mastercard"><img src="https://pagamento.uaugringa.shop/images/payment/mastercard.svg"></div>
<div class="inner_payment_img brand-amex"><img src="https://pagamento.uaugringa.shop/images/payment/amex.svg"></div>
<div class="inner_payment_img hideonmobile brand-dinersclub"><img src="https://pagamento.uaugringa.shop/images/payment/dinersclub.svg"></div>
<div class="inner_payment_img emais">E mais…</div>
</div>
</h4>
</div>
<div id="collapse1" class="panel-collapse cartpanda_cielo collapse show" role="tabpanel" aria-labelledby="heading1" data-parent="#accordion">
<div class="panel-body customclass">
<div class="row">
<div class="col-md-12">
<div class="with-payment-placeholder form-group card-number-input-container form-group-with-prefix success_input">
<div class="payment-method-input-prefix card-number-input-prefix">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/cc-transparent.svg" alt="">
</div>
<input type="tel" class="form-control cardNumber empty" data-inputname="cardNumber" id="cardNumbercartpanda_cielo" onselectstart="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" data-recording-ignore="events" maxlength="19" placeholder="Número do cartão" name="cardNumber" style="display: block;">
<label class="payment-placeholder" for="cardNumbercartpanda_cielo">Número do cartão</label>
<div class="card-logo">
<div data-type="loader"><i class="fa fa-spin fa-spinner"></i></div>
<div class="active" data-type="cc"></div>
<div data-type="alipay">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/alipay.svg">
</div>
<div data-type="amex">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/amex.svg">
</div>
<div data-type="dinersclub">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/dinersclub.svg">
</div>
<div data-type="discover">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/discover.svg">
</div>
<div data-type="elo">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/elo.svg">
</div>
<div data-type="hiper">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/hiper.svg">
</div>
<div data-type="hipercard">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/hipercard.svg">
</div>
<div data-type="jcb">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/jcb.svg">
</div>
<div data-type="maestro">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/maestro.svg">
</div>
<div data-type="mastercard">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/mastercard.svg">
</div>
<div data-type="mir">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/mir.svg">
</div>
<div data-type="paypal">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/paypal.svg">
</div>
<div data-type="unionpay">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/unionpay.svg">
</div>
<div data-type="visa">
<img src="https://pagamento.uaugringa.shop/images/payment/no-border/visa.svg">
</div>
</div>
<div class="card-error"></div>
</div>
</div>
<div class="col-md-12">
<div class="with-payment-placeholder form-group form-group-with-prefix ">
<div class="payment-method-input-prefix">
<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.3337 14V12.6667C13.3337 11.9594 13.0527 11.2811 12.5526 10.781C12.0525 10.281 11.3742 10 10.667 10H5.33366C4.62641 10 3.94814 10.281 3.44804 10.781C2.94794 11.2811 2.66699 11.9594 2.66699 12.6667V14" stroke="#D5DADC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M7.99967 7.33333C9.47243 7.33333 10.6663 6.13943 10.6663 4.66667C10.6663 3.19391 9.47243 2 7.99967 2C6.52692 2 5.33301 3.19391 5.33301 4.66667C5.33301 6.13943 6.52692 7.33333 7.99967 7.33333Z" stroke="#D5DADC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
 </div>
<input type="text" class="form-control cardholderName empty" data-inputname="cardholderName" placeholder="Nome impresso no cartão" id="cardholderNamecartpanda_cielo" autocomplete="off" data-recording-ignore="events" name="cardholderName" style="display: block;">
<label class="payment-placeholder" for="cardholderNamecartpanda_cielo">Nome impresso no cartão</label>
</div>
</div>
<div class="col-md-6 p-r-zero card-expiry-data">
<div class="form-group form-group-with-prefix with-payment-placeholder expiry-date-par  ">
<div class="payment-method-input-prefix">
<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.6667 3.6665H4.33333C3.59695 3.6665 3 4.26346 3 4.99984V14.3332C3 15.0696 3.59695 15.6665 4.33333 15.6665H13.6667C14.403 15.6665 15 15.0696 15 14.3332V4.99984C15 4.26346 14.403 3.6665 13.6667 3.6665Z" stroke="#D5DADC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M11.666 2.3335V5.00016" stroke="#D5DADC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M6.33398 2.3335V5.00016" stroke="#D5DADC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M3 7.6665H15" stroke="#D5DADC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</div>
<input type="tel" class="form-control cardExpiryDate empty" data-inputname="cardExpiryDate" id="cardExpiryDatecartpanda_cielo" autocomplete="off" data-recording-ignore="events" maxlength="5" placeholder="MM/AA" name="cardExpiryDate" style="display: block;">
<label class="payment-placeholder" for="cardExpiryDatecartpanda_cielo">MM/AA</label>
</div>
</div>
<div class="col-md-6 cvv-input-card">
<div class="with-payment-placeholder form-group form-group-with-prefix " id="cvv-input">
<div class="payment-method-input-prefix">
<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.6667 7.3335H3.33333C2.59695 7.3335 2 7.93045 2 8.66683V13.3335C2 14.0699 2.59695 14.6668 3.33333 14.6668H12.6667C13.403 14.6668 14 14.0699 14 13.3335V8.66683C14 7.93045 13.403 7.3335 12.6667 7.3335Z" stroke="#D5DADC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M4.66699 7.3335V4.66683C4.66699 3.78277 5.01818 2.93493 5.6433 2.30981C6.26842 1.68469 7.11627 1.3335 8.00033 1.3335C8.88438 1.3335 9.73223 1.68469 10.3573 2.30981C10.9825 2.93493 11.3337 3.78277 11.3337 4.66683V7.3335" stroke="#D5DADC" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</div>
<div class="cvv-suffix">
<svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg" data-toggle="tooltip" data-placement="top" title="" data-original-title="3 dígitos de segurança normalmente encontrados no verso do cartão. Alguns modelos podem apresentar 4 dígitos.">
<circle cx="5.5" cy="5.5" r="5.5"></circle>
<path d="M5.06434 6.32344H5.61581V6.29587C5.625 5.72602 5.77206 5.47786 6.17647 5.2251C6.58088 4.97923 6.81985 4.62537 6.81985 4.11756C6.81985 3.40065 6.29596 2.87675 5.48713 2.87675C4.74265 2.87675 4.15211 3.33631 4.11765 4.11756H4.69669C4.73116 3.57528 5.11029 3.35469 5.48713 3.35469C5.91912 3.35469 6.26838 3.63962 6.26838 4.08999C6.26838 4.45534 6.05928 4.71729 5.79044 4.88043C5.34007 5.15387 5.07123 5.42041 5.06434 6.29587V6.32344ZM5.35846 7.68374C5.58594 7.68374 5.77206 7.49762 5.77206 7.27013C5.77206 7.04265 5.58594 6.85653 5.35846 6.85653C5.13097 6.85653 4.94485 7.04265 4.94485 7.27013C4.94485 7.49762 5.13097 7.68374 5.35846 7.68374Z" fill="#28234A"></path>
</svg>
</div>
<input type="tel" class="form-control securityCode empty" data-inputname="securityCode" id="securityCodecartpanda_cielo" onselectstart="return false" onpaste="return false" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" data-recording-ignore="events" maxlength="4" placeholder="CVV" name="securityCode" style="display: block;">
<label class="payment-placeholder" for="securityCodecartpanda_cielo">CVV</label>
</div>
</div>
<div class="col-md-12">
<div class="form-group float-label-control">
<div class="selectric-wrapper selectric-form-control selectric-installments selectric-empty selectric-notempty"><div class="selectric-hide-select"><select class="form-control installments empty notempty" data-inputname="installments" id="installmentscartpanda_cielo" placeholder="Para ver as parcelas, primeiro digite seu cartão" tabindex="-1" name="installments"><option value="1" selected="">1x de R$&nbsp;149,90 </option><option value="2">2x de R$&nbsp;74,95 </option><option value="3">3x de R$&nbsp;54,18*</option><option value="4">4x de R$&nbsp;41,31*</option><option value="5">5x de R$&nbsp;33,56*</option><option value="6">6x de R$&nbsp;28,38*</option><option value="7">7x de R$&nbsp;24,63*</option><option value="8">8x de R$&nbsp;21,90*</option><option value="9">9x de R$&nbsp;19,80*</option><option value="10">10x de R$&nbsp;18,00*</option><option value="11">11x de R$&nbsp;16,61*</option><option value="12">12x de R$&nbsp;15,46*</option></select></div><div class="selectric"><span class="label">1x de R$&nbsp;149,90 </span><b class="button">▾</b></div><div class="selectric-items" tabindex="-1"><div class="selectric-scroll"><ul><li data-index="0" class="selected">1x de R$&nbsp;149,90 </li><li data-index="1" class="">2x de R$&nbsp;74,95 </li><li data-index="2" class="">3x de R$&nbsp;54,18*</li><li data-index="3" class="">4x de R$&nbsp;41,31*</li><li data-index="4" class="">5x de R$&nbsp;33,56*</li><li data-index="5" class="">6x de R$&nbsp;28,38*</li><li data-index="6" class="">7x de R$&nbsp;24,63*</li><li data-index="7" class="">8x de R$&nbsp;21,90*</li><li data-index="8" class="">9x de R$&nbsp;19,80*</li><li data-index="9" class="">10x de R$&nbsp;18,00*</li><li data-index="10" class="">11x de R$&nbsp;16,61*</li><li data-index="11" class="last">12x de R$&nbsp;15,46*</li></ul></div></div><label class="hidden" aria-hidden="true">Hidden Label<input class="selectric-input" tabindex="0" style="display: block;"></label></div>
<label for="installmentscartpanda_cielo">Parcelas</label>
</div>
</div>
<div class="col-md-12 inside-payment-buttons">
<div class="cd-checkout-btn"><div class="btn-inside-payment">
<div class="order-bump-hook"></div>
<button type="submit" class="complete-payment-checkout green-button-" id="complete-payment">
<div class="disp-flex">
<svg style="width: 14px;" aria-hidden="true" data-prefix="fas" data-icon="lock-alt" class="svg-inline--fa fa-lock-alt fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zM264 392c0 22.1-17.9 40-40 40s-40-17.9-40-40v-48c0-22.1 17.9-40 40-40s40 17.9 40 40v48zm32-168H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path></svg>
<span data-realtime="checkout_button.title">
Finalizar compra
</span>
</div>
</button>
<button type="submit" style="background-color: #00d25c;" class="" id="loader-button"> <img style="max-width: 45px;" src="https://pagamento.uaugringa.shop/images/spinner.gif"></button>
<div class="required-checkout-btns"><div class="save-information-class" style="">
<div class="form-group" id="save-information-div">
<input type="checkbox" class="save_information save_information_text not-display-block" name="save_information" value="1" checked="">
<span class="checkSpan save_information_text p-0 pl-1">Salvar minhas informações com segurança para compras futuras aqui ou em qualquer loja hospedada na Cartpanda</span>
</div>
</div></div>
</div></div>
</div>
</div>
</div>
</div>
</div>
<div class="panel panel-default pix-pay-section">
<div class="panel-heading  collapsed " role="tab" id="headingPix" data-status="cartpanda_pay" data-toggle="collapse" href="#collapsePix" aria-expanded="false" aria-controls="collapsePix" style="cursor:pointer;">
<h4 class="panel-title payment_img-title">
<a id="pix-payment" data-status="cartpanda_pay" class=" collapsed " role="button" data-toggle="collapse" href="#collapsePix" aria-expanded="false" aria-controls="collapsePix">
<span class="dot-pr"></span>
PIX
<span class="discount_per" style="background: #222; color: #fff;">Envio rápido</span>
</a>
<div class="payment_img ">
<div class="inner_payment_img">
<img src="https://pagamento.uaugringa.shop/images/payment/pix.svg" loading="lazy" class="boleto-card-icons">
</div>
</div>
</h4>
</div>
<div id="collapsePix" class="panel-collapse collapse  " role="tabpanel" aria-labelledby="headingPix" data-status="cartpanda_pay" data-parent="#accordion">
<div class="panel-body" style="padding: 0;">
<div class="text-container pix_data">
<p>Clique em "Finalizar Compra" para gerar o PIX.</p>
<p>Informações sobre o pagamento via PIX:</p>
<ul>
<li>Valor à vista <b class="checkoutTotal" style=""><span>R$148,40</span>;</b></li>
<li>Não pode ser parcelado! Use cartão de crédito para parcelar sua compra;</li>
<li>Prazo de até 30 minutos para compensar.</li>
</ul>
</div>
<input type="text" value="Pix" name="ebanking" style="height: 1px; width: 1px; border: none; display: block;">
<div class="col-md-12"> <div class="cd-checkout-btn"><div class="btn-inside-payment">
<div class="order-bump-hook"></div>
<button type="submit" class="complete-payment-checkout green-button-" id="complete-payment">
<div class="disp-flex">
<svg style="width: 14px;" aria-hidden="true" data-prefix="fas" data-icon="lock-alt" class="svg-inline--fa fa-lock-alt fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zM264 392c0 22.1-17.9 40-40 40s-40-17.9-40-40v-48c0-22.1 17.9-40 40-40s40 17.9 40 40v48zm32-168H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path></svg>
<span data-realtime="checkout_button.title">
Finalizar compra
</span>
</div>
</button>
<button type="submit" style="background-color: #00d25c;" class="" id="loader-button"> <img style="max-width: 45px;" src="https://pagamento.uaugringa.shop/images/spinner.gif"></button>
<div class="required-checkout-btns"><div class="save-information-class" style="">
<div class="form-group" id="save-information-div">
<input type="checkbox" class="save_information save_information_text not-display-block" name="save_information" value="1" checked="">
<span class="checkSpan save_information_text p-0 pl-1">Salvar minhas informações com segurança para compras futuras aqui ou em qualquer loja hospedada na Cartpanda</span>
</div>
</div></div>
</div></div> </div>
</div>
</div>
</div>
<div class="panel panel-default boleto-pay-section">
<div class="panel-heading  collapsed " role="tab" id="headingTwo" data-status="cartpanda_pay" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="cursor:pointer;">
<h4 class="panel-title payment_img-title">
<a id="boleto-payment" data-status="cartpanda_pay" class=" collapsed " role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
<span class="dot-pr"></span>
Boleto
</a>
<div class="payment_img ">
<div class="inner_payment_img">
<img src="https://pagamento.uaugringa.shop/images/payment/boleto.svg" loading="lazy" class="boleto-card-icons">
</div>
</div>
</h4>
</div>
<div id="collapseTwo" class="panel-collapse collapse  " role="tabpanel" aria-labelledby="headingTwo" data-status="cartpanda_pay" data-parent="#accordion">
<div class="panel-body" style="padding: 0;">
<div class="text-container boleto_data">
<p>Clique em "Finalizar Compra" para gerar o seu boleto.</p>
<p>Informações sobre o pagamento via boleto:</p>
<ul>
<li>Valor à vista <b class="checkoutTotal" style=""><span>R$148,40</span>;</b></li>
<li>Não pode ser parcelado! Use cartão de crédito para parcelar sua compra;</li>
<li>Prazo de até 2 dias úteis para compensar.</li>
</ul>
</div>
<div class="col-md-12">
<div class="cd-checkout-btn"><div class="btn-inside-payment">
<div class="order-bump-hook"></div>
<button type="submit" class="complete-payment-checkout green-button-" id="complete-payment">
<div class="disp-flex">
<svg style="width: 14px;" aria-hidden="true" data-prefix="fas" data-icon="lock-alt" class="svg-inline--fa fa-lock-alt fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zM264 392c0 22.1-17.9 40-40 40s-40-17.9-40-40v-48c0-22.1 17.9-40 40-40s40 17.9 40 40v48zm32-168H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path></svg>
<span data-realtime="checkout_button.title">
Finalizar compra
</span>
</div>
</button>
<button type="submit" style="background-color: #00d25c;" class="" id="loader-button"> <img style="max-width: 45px;" src="https://pagamento.uaugringa.shop/images/spinner.gif"></button>
<div class="required-checkout-btns"><div class="save-information-class" style="">
<div class="form-group" id="save-information-div">
<input type="checkbox" class="save_information save_information_text not-display-block" name="save_information" value="1" checked="">
<span class="checkSpan save_information_text p-0 pl-1">Salvar minhas informações com segurança para compras futuras aqui ou em qualquer loja hospedada na Cartpanda</span>
</div>
</div></div>
</div></div>
</div>
 <input type="text" value="Boleto" name="ebanking" style="height: 1px; width: 1px; border: none; display: block;">
</div>
</div>
</div>
</div>
<span class="gateway_error" style="display: none; color:red;"></span>
<div class="terms-text-payment" style="">
Ao prosseguir, você concorda com as <a target="_blank" class="terms-links" href="https://cartpanda.com/privacidade-dos-usuarios-cartpanda/">Políticas de Privacidade <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.6 122.88" style="enable-background:new 0 0 122.6 122.88" xml:space="preserve"><g><path d="M110.6,72.58c0-3.19,2.59-5.78,5.78-5.78c3.19,0,5.78,2.59,5.78,5.78v33.19c0,4.71-1.92,8.99-5.02,12.09 c-3.1,3.1-7.38,5.02-12.09,5.02H17.11c-4.71,0-8.99-1.92-12.09-5.02c-3.1-3.1-5.02-7.38-5.02-12.09V17.19 C0,12.48,1.92,8.2,5.02,5.1C8.12,2,12.4,0.08,17.11,0.08h32.98c3.19,0,5.78,2.59,5.78,5.78c0,3.19-2.59,5.78-5.78,5.78H17.11 c-1.52,0-2.9,0.63-3.91,1.63c-1.01,1.01-1.63,2.39-1.63,3.91v88.58c0,1.52,0.63,2.9,1.63,3.91c1.01,1.01,2.39,1.63,3.91,1.63h87.95 c1.52,0,2.9-0.63,3.91-1.63s1.63-2.39,1.63-3.91V72.58L110.6,72.58z M112.42,17.46L54.01,76.6c-2.23,2.27-5.89,2.3-8.16,0.07 c-2.27-2.23-2.3-5.89-0.07-8.16l56.16-56.87H78.56c-3.19,0-5.78-2.59-5.78-5.78c0-3.19,2.59-5.78,5.78-5.78h26.5 c5.12,0,11.72-0.87,15.65,3.1c2.48,2.51,1.93,22.52,1.61,34.11c-0.08,3-0.15,5.29-0.15,6.93c0,3.19-2.59,5.78-5.78,5.78 c-3.19,0-5.78-2.59-5.78-5.78c0-0.31,0.08-3.32,0.19-7.24C110.96,30.94,111.93,22.94,112.42,17.46L112.42,17.46z"></path></g></svg></a> do Cartpanda Go, e com os <a target="_blank" class="terms-links" href="https://cartpanda.com/termos-de-uso-cartpanda-go/">Termos de Serviço <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.6 122.88" style="enable-background:new 0 0 122.6 122.88" xml:space="preserve"><g><path d="M110.6,72.58c0-3.19,2.59-5.78,5.78-5.78c3.19,0,5.78,2.59,5.78,5.78v33.19c0,4.71-1.92,8.99-5.02,12.09 c-3.1,3.1-7.38,5.02-12.09,5.02H17.11c-4.71,0-8.99-1.92-12.09-5.02c-3.1-3.1-5.02-7.38-5.02-12.09V17.19 C0,12.48,1.92,8.2,5.02,5.1C8.12,2,12.4,0.08,17.11,0.08h32.98c3.19,0,5.78,2.59,5.78,5.78c0,3.19-2.59,5.78-5.78,5.78H17.11 c-1.52,0-2.9,0.63-3.91,1.63c-1.01,1.01-1.63,2.39-1.63,3.91v88.58c0,1.52,0.63,2.9,1.63,3.91c1.01,1.01,2.39,1.63,3.91,1.63h87.95 c1.52,0,2.9-0.63,3.91-1.63s1.63-2.39,1.63-3.91V72.58L110.6,72.58z M112.42,17.46L54.01,76.6c-2.23,2.27-5.89,2.3-8.16,0.07 c-2.27-2.23-2.3-5.89-0.07-8.16l56.16-56.87H78.56c-3.19,0-5.78-2.59-5.78-5.78c0-3.19,2.59-5.78,5.78-5.78h26.5 c5.12,0,11.72-0.87,15.65,3.1c2.48,2.51,1.93,22.52,1.61,34.11c-0.08,3-0.15,5.29-0.15,6.93c0,3.19-2.59,5.78-5.78,5.78 c-3.19,0-5.78-2.59-5.78-5.78c0-0.31,0.08-3.32,0.19-7.24C110.96,30.94,111.93,22.94,112.42,17.46L112.42,17.46z"></path></g></svg></a>
</div>
</div>
</div>
<style type="text/css">

.template-checkout .payment-method .payment-method-input-prefix,
.template-checkout .payment-method .card-logo,
.template-checkout .payment-method .cvv-suffix {
    height: var(--checkout_form_input_height);
    width: 50px;
}

.payment-method .form-group-with-prefix input {
    padding-left: 45px!important;
}




.cvv-suffix svg {
    width: var(--cvv_instruction_icon_size_checkout_payment_method);
    height: var(--cvv_instruction_icon_size_checkout_payment_method);
}

.cvv-suffix svg circle {
    fill: var(--cvv_instruction_icon_color_checkout_payment_method);
}

#save-information-div {
    margin-bottom: 0 !important;
}

@media (max-width:405px){
    #save-information-div {
        margin-bottom: 12px !important;
    }
}
</style>
<script src="https://htp.tokenex.com/iframe/iframe-v3.min.js"></script>
                                                                    <script
                                                                        type="text/javascript">
    $(document).on('keydown','.payment-info [type="tel"],.payment-info [type="text"]',function(){
        var val = $(this).val(),
            parent = $(this).closest('.with-payment-placeholder'),
            length = val.length;
        if(length > 0){
            $(parent).addClass('not-empty');
        }else{
            $(parent).removeClass('not-empty');
        }
    });
    $(document).on('keyup','.payment-info [type="tel"],.payment-info [type="text"]',function(){
        var val = $(this).val(),
            parent = $(this).closest('.with-payment-placeholder'),
            length = val.length;
        if(length > 0){
            $(parent).addClass('not-empty');
        }else{
            $(parent).removeClass('not-empty');
        }
    });
    $('#accordion').on('show.bs.collapse', function (e) {
        if(typeof orderBump !== 'undefined' && typeof orderBump.paymentOptionChanged === 'function') {
            if("inside_payment" != 'below_payment') {
                orderBump.paymentOptionChanged(e.target);
            }
        }
    });
</script>
                                                                </fieldset>
                                                            </div><div
                                                                id="cartx-section-checkout_button"
                                                                class="cartx-section
                                                                ">
                                                                <div class="row
                                                                    form-submit-btn">
                                                                    <div
                                                                        class="col-md-12
                                                                        submit_button">
                                                                        <div
                                                                            class="btn-inside-payment">
                                                                            <div
                                                                                class="order-bump-hook"></div>
                                                                            <button
                                                                                type="submit"
                                                                                class="complete-payment-checkout
                                                                                green-button-"
                                                                                id="complete-payment">
                                                                                <div
                                                                                    class="disp-flex">
                                                                                    <svg
                                                                                        style="width:
                                                                                        14px;"
                                                                                        aria-hidden="true"
                                                                                        data-prefix="fas"
                                                                                        data-icon="lock-alt"
                                                                                        class="svg-inline--fa
                                                                                        fa-lock-alt
                                                                                        fa-w-14
                                                                                        "
                                                                                        role="img"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0
                                                                                        0
                                                                                        448
                                                                                        512"><path
                                                                                            fill="currentColor"
                                                                                            d="M400
                                                                                            224h-24v-72C376
                                                                                            68.2
                                                                                            307.8
                                                                                            0
                                                                                            224
                                                                                            0S72
                                                                                            68.2
                                                                                            72
                                                                                            152v72H48c-26.5
                                                                                            0-48
                                                                                            21.5-48
                                                                                            48v192c0
                                                                                            26.5
                                                                                            21.5
                                                                                            48
                                                                                            48
                                                                                            48h352c26.5
                                                                                            0
                                                                                            48-21.5
                                                                                            48-48V272c0-26.5-21.5-48-48-48zM264
                                                                                            392c0
                                                                                            22.1-17.9
                                                                                            40-40
                                                                                            40s-40-17.9-40-40v-48c0-22.1
                                                                                            17.9-40
                                                                                            40-40s40
                                                                                            17.9
                                                                                            40
                                                                                            40v48zm32-168H152v-72c0-39.7
                                                                                            32.3-72
                                                                                            72-72s72
                                                                                            32.3
                                                                                            72
                                                                                            72v72z"></path></svg>
                                                                                    <span
                                                                                        data-realtime="checkout_button.title">
                                                                                        Finalizar
                                                                                        compra
                                                                                    </span>
                                                                                </div>
                                                                            </button>
                                                                            <button
                                                                                type="submit"
                                                                                style="background-color:
                                                                                #00d25c;"
                                                                                class=""
                                                                                id="loader-button">
                                                                                <img
                                                                                    style="max-width:
                                                                                    45px;"
                                                                                    src="https://pagamento.uaugringa.shop/images/spinner.gif"></button>
                                                                            <div
                                                                                class="required-checkout-btns"><div
                                                                                    class="save-information-class"
                                                                                    style="">
                                                                                    <div
                                                                                        class="form-group"
                                                                                        id="save-information-div">
                                                                                        <input
                                                                                            type="checkbox"
                                                                                            class="save_information
                                                                                            save_information_text
                                                                                            not-display-block"
                                                                                            name="save_information"
                                                                                            value="1"
                                                                                            checked="">
                                                                                        <span
                                                                                            class="checkSpan
                                                                                            save_information_text
                                                                                            p-0
                                                                                            pl-1">Salvar
                                                                                            minhas
                                                                                            informações
                                                                                            com
                                                                                            segurança
                                                                                            para
                                                                                            compras
                                                                                            futuras
                                                                                            aqui
                                                                                            ou
                                                                                            em
                                                                                            qualquer
                                                                                            loja
                                                                                            hospedada
                                                                                            na
                                                                                            Cartpanda</span>
                                                                                    </div>
                                                                                </div></div>
                                                                        </div>
                                                                        <div
                                                                            class="save-info-button">
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-md-12
                                                                        ">
                                                                        <div
                                                                            class="terms-text">
                                                                            <div
                                                                                class="term-text-inner">
                                                                                Ao
                                                                                prosseguir,
                                                                                você
                                                                                concorda
                                                                                com
                                                                                as
                                                                                <a
                                                                                    target="_blank"
                                                                                    class="terms-links"
                                                                                    href="https://cartpanda.com/privacidade-dos-usuarios-cartpanda/">Políticas
                                                                                    de
                                                                                    Privacidade
                                                                                    <svg
                                                                                        version="1.1"
                                                                                        id="Layer_1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                        x="0px"
                                                                                        y="0px"
                                                                                        viewBox="0
                                                                                        0
                                                                                        122.6
                                                                                        122.88"
                                                                                        style="enable-background:new
                                                                                        0
                                                                                        0
                                                                                        122.6
                                                                                        122.88"
                                                                                        xml:space="preserve"><g><path
                                                                                                d="M110.6,72.58c0-3.19,2.59-5.78,5.78-5.78c3.19,0,5.78,2.59,5.78,5.78v33.19c0,4.71-1.92,8.99-5.02,12.09
                                                                                                c-3.1,3.1-7.38,5.02-12.09,5.02H17.11c-4.71,0-8.99-1.92-12.09-5.02c-3.1-3.1-5.02-7.38-5.02-12.09V17.19
                                                                                                C0,12.48,1.92,8.2,5.02,5.1C8.12,2,12.4,0.08,17.11,0.08h32.98c3.19,0,5.78,2.59,5.78,5.78c0,3.19-2.59,5.78-5.78,5.78H17.11
                                                                                                c-1.52,0-2.9,0.63-3.91,1.63c-1.01,1.01-1.63,2.39-1.63,3.91v88.58c0,1.52,0.63,2.9,1.63,3.91c1.01,1.01,2.39,1.63,3.91,1.63h87.95
                                                                                                c1.52,0,2.9-0.63,3.91-1.63s1.63-2.39,1.63-3.91V72.58L110.6,72.58z
                                                                                                M112.42,17.46L54.01,76.6c-2.23,2.27-5.89,2.3-8.16,0.07
                                                                                                c-2.27-2.23-2.3-5.89-0.07-8.16l56.16-56.87H78.56c-3.19,0-5.78-2.59-5.78-5.78c0-3.19,2.59-5.78,5.78-5.78h26.5
                                                                                                c5.12,0,11.72-0.87,15.65,3.1c2.48,2.51,1.93,22.52,1.61,34.11c-0.08,3-0.15,5.29-0.15,6.93c0,3.19-2.59,5.78-5.78,5.78
                                                                                                c-3.19,0-5.78-2.59-5.78-5.78c0-0.31,0.08-3.32,0.19-7.24C110.96,30.94,111.93,22.94,112.42,17.46L112.42,17.46z"></path></g></svg></a>
                                                                                do
                                                                                Cartpanda
                                                                                Go,
                                                                                e
                                                                                com
                                                                                os
                                                                                <a
                                                                                    target="_blank"
                                                                                    class="terms-links"
                                                                                    href="https://cartpanda.com/termos-de-uso-cartpanda-go/">Termos
                                                                                    de
                                                                                    Serviço
                                                                                    <svg
                                                                                        version="1.1"
                                                                                        id="Layer_1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                        x="0px"
                                                                                        y="0px"
                                                                                        viewBox="0
                                                                                        0
                                                                                        122.6
                                                                                        122.88"
                                                                                        style="enable-background:new
                                                                                        0
                                                                                        0
                                                                                        122.6
                                                                                        122.88"
                                                                                        xml:space="preserve"><g><path
                                                                                                d="M110.6,72.58c0-3.19,2.59-5.78,5.78-5.78c3.19,0,5.78,2.59,5.78,5.78v33.19c0,4.71-1.92,8.99-5.02,12.09
                                                                                                c-3.1,3.1-7.38,5.02-12.09,5.02H17.11c-4.71,0-8.99-1.92-12.09-5.02c-3.1-3.1-5.02-7.38-5.02-12.09V17.19
                                                                                                C0,12.48,1.92,8.2,5.02,5.1C8.12,2,12.4,0.08,17.11,0.08h32.98c3.19,0,5.78,2.59,5.78,5.78c0,3.19-2.59,5.78-5.78,5.78H17.11
                                                                                                c-1.52,0-2.9,0.63-3.91,1.63c-1.01,1.01-1.63,2.39-1.63,3.91v88.58c0,1.52,0.63,2.9,1.63,3.91c1.01,1.01,2.39,1.63,3.91,1.63h87.95
                                                                                                c1.52,0,2.9-0.63,3.91-1.63s1.63-2.39,1.63-3.91V72.58L110.6,72.58z
                                                                                                M112.42,17.46L54.01,76.6c-2.23,2.27-5.89,2.3-8.16,0.07
                                                                                                c-2.27-2.23-2.3-5.89-0.07-8.16l56.16-56.87H78.56c-3.19,0-5.78-2.59-5.78-5.78c0-3.19,2.59-5.78,5.78-5.78h26.5
                                                                                                c5.12,0,11.72-0.87,15.65,3.1c2.48,2.51,1.93,22.52,1.61,34.11c-0.08,3-0.15,5.29-0.15,6.93c0,3.19-2.59,5.78-5.78,5.78
                                                                                                c-3.19,0-5.78-2.59-5.78-5.78c0-0.31,0.08-3.32,0.19-7.24C110.96,30.94,111.93,22.94,112.42,17.46L112.42,17.46z"></path></g></svg></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-12
                                                                    bottom-form-content-is"
                                                                    style="display:none;">
                                                                    <div
                                                                        class="bottom-form-content">
                                                                        <p>
                                                                            Uau
                                                                            Gringa
                                                                            -
                                                                            <span
                                                                                data-realtime="checkout_button.copyright_text">
                                                                                Todos
                                                                                os
                                                                                direitos
                                                                                reservados
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="bottom-form-images"
                                                                        style="display:block
                                                                        !important;visibility:
                                                                        visible
                                                                        !important;">
                                                                        <img
                                                                            src="https://pagamento.uaugringa.shop/images/icon-ssl.svg"
                                                                            loading="lazy"
                                                                            class="safe-payment-icon"
                                                                            style="display:inline-block
                                                                            !important;visibility:
                                                                            visible
                                                                            !important;">
                                                                        <img
                                                                            src="https://pagamento.uaugringa.shop/images/CP_TECNOLOGIA.png"
                                                                            loading="lazy"
                                                                            style="display:inline-block
                                                                            !important;visibility:
                                                                            visible
                                                                            !important;">
                                                                        <img
                                                                            src="https://pagamento.uaugringa.shop/images/icon-secure.svg"
                                                                            loading="lazy"
                                                                            class="safe-payment-icon">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-md-12
                                                                    bottom-form-content-is-cartpay"
                                                                    style="display:none;">
                                                                    <div
                                                                        class="bottom-form-content">
                                                                        <p>
                                                                            Uau
                                                                            Gringa
                                                                            -
                                                                            <span
                                                                                data-realtime="checkout_button.copyright_text">
                                                                                Todos
                                                                                os
                                                                                direitos
                                                                                reservados
                                                                            </span>
                                                                        </p>
                                                                        <p>
                                                                            <span>
                                                                                Ao
                                                                                prosseguir,
                                                                                você
                                                                                concorda
                                                                                com
                                                                                os
                                                                                <a
                                                                                    href="https://cartpanda.com/termos-de-uso-cartpanda-pay/"
                                                                                    target="_blank">
                                                                                    <b>Termos
                                                                                        de
                                                                                        Compra</b>
                                                                                </a>
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="bottom-form-images"
                                                                        style="display:block
                                                                        !important;visibility:
                                                                        visible
                                                                        !important;">
                                                                        <img
                                                                            src="https://pagamento.uaugringa.shop/images/icon-ssl.svg"
                                                                            loading="lazy"
                                                                            class="safe-payment-icon"
                                                                            style="display:inline-block
                                                                            !important;visibility:
                                                                            visible
                                                                            !important;">
                                                                        <img
                                                                            src="https://pagamento.uaugringa.shop/images/CP_TECNOLOGIA.png"
                                                                            loading="lazy"
                                                                            style="display:inline-block
                                                                            !important;visibility:
                                                                            visible
                                                                            !important;">
                                                                        <img
                                                                            src="https://pagamento.uaugringa.shop/images/CP_PAGAMENTOS.png"
                                                                            loading="lazy"
                                                                            style="display:inline-block
                                                                            !important;visibility:
                                                                            visible
                                                                            !important;">
                                                                        <img
                                                                            src="https://pagamento.uaugringa.shop/images/icon-secure.svg"
                                                                            loading="lazy"
                                                                            class="safe-payment-icon">
                                                                    </div>
                                                                </div>
                                                                <script
                                                                    type="text/javascript">
  var checkout_btn_pos = 'inside_payment';
  $(document).ready(function(){
    var bottom_html = $(document).find('.bottom-form-content-is').html();
    $(document).find('.bottom-form-content-new').html(bottom_html);
  })
</script>
                                                                <style>
.order-bump-card {
  margin: 0 !important;
}
</style>
                                                                <style>
    .terms-text-payment a {
      padding: 0;
    }
    .panel-body.customclass .cd-checkout-btn {
      margin-top: 20px;
    }
    #cartx-section-checkout_button,
    .save-information-class {
      display: none;
    }

    .btn-inside-payment .order-bump-card {
      margin: 0 !important;
    }

    .btn-inside-payment .save-information-class {
      display: block;
    }

    .cd-checkout-btn #complete-payment {
      display: block;
      margin-bottom: 15px !important;
    }
    .panel-body.customclass {
      padding-bottom: 0 !important;
    }
    .required-checkout-btns {
      margin-bottom: 30px;
    }
    .order-bump-container:last-child {
      margin-bottom: 20px !important;
    }
    .inside-payment-buttons {
      margin-top: calc( -1 * var(--form_field_space_between) );
    }
    @media screen and (max-width: 767px) {
      .save-information-class #save-information-div {
        display: flex;
        width: 100%;
        flex-wrap: wrap;
        align-items: center;
        justify-content: flex-start;
        position: relative;
      }
      .required-checkout-btns .save-information-class #save-information-div{
        margin-bottom: 12px !important;
      }
      .save-information-class .save_information.save_information_text {
        position: absolute !important;
        top: 0 !important;
      }
      .save-information-class #save-information-div .checkSpan {
        padding-left: 26px !important;
        position: static !important;
      }
    }
  </style>
                                                                <script>
    $(document).ready(function(){
      var checkoutBT = $('#cartx-section-checkout_button .btn-inside-payment').clone();
      var requiredBtns = $(document).find('.save-information-class').clone();
      $(document).find('.save-information-class').remove();
      $(document).find('.cd-checkout-btn').html(checkoutBT);
      $(document).find('.required-checkout-btns').html(requiredBtns);
      $(document).find('.terms-text-payment').show();
    });
  </script>
                                                            </div><div
                                                                id="cartx-section-1647120917812"
                                                                class="cartx-section
                                                                "><div
                                                                    data-realtime="1647120917812.mobile_hide_social_proof">
                                                                    <div
                                                                        data-realtime="1647120917812.desktop_hide_social_proof"
                                                                        class="checkout-inner-social-proof
                                                                        social_proof_section
                                                                        "
                                                                        id="social_proof_section_1647120917812">
                                                                        <div
                                                                            class="assurance-section
                                                                            ">
                                                                            <div>
                                                                                <div
                                                                                    class="wyustit">
                                                                                    <span
                                                                                        class="social-proof-title"
                                                                                        data-realtime="1647120917812.social_proof_title">
                                                                                    </span>
                                                                                </div>
                                                                                <div
                                                                                    class="wyustit-body">
                                                                                    <div
                                                                                        class="wyuscs">
                                                                                        <div
                                                                                            class="wyuscs1">
                                                                                            <img
                                                                                                src="https://thumbor.cartpanda.com/SnZxVv8j3XzixJ1bVCW5qRbpfzg=/64x0/https://assets.mycartpanda.com/shop_318540/png/1_06-20-2023_0545.png">
                                                                                        </div>
                                                                                        <div
                                                                                            class="wyuscs2">
                                                                                            <div
                                                                                                class="assurance-title">
                                                                                                <span>Mercado
                                                                                                    Pago</span>
                                                                                            </div>
                                                                                            <div
                                                                                                class="assurance-product-ratings">
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                            </div>
                                                                                            <div
                                                                                                class="assurance-description">
                                                                                                Nossos
                                                                                                pagamentos
                                                                                                são
                                                                                                gerenciados
                                                                                                pelo
                                                                                                Mercado
                                                                                                Pago.
                                                                                                Segurança
                                                                                                criptografada
                                                                                                em
                                                                                                todas
                                                                                                as
                                                                                                compras.
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="wyuscs">
                                                                                        <div
                                                                                            class="wyuscs1">
                                                                                            <img
                                                                                                src="https://thumbor.cartpanda.com/6D48tvj0w-Xd4AoVAMW0liXgVhs=/64x0/https://assets.mycartpanda.com/shop_318540/png/2_06-20-2023_0546.png">
                                                                                        </div>
                                                                                        <div
                                                                                            class="wyuscs2">
                                                                                            <div
                                                                                                class="assurance-title">
                                                                                                <span>Garantia
                                                                                                    de
                                                                                                    Reembolso</span>
                                                                                            </div>
                                                                                            <div
                                                                                                class="assurance-product-ratings">
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                            </div>
                                                                                            <div
                                                                                                class="assurance-description">
                                                                                                Receba
                                                                                                sua
                                                                                                compra
                                                                                                ou
                                                                                                nossa
                                                                                                equipe
                                                                                                devolverá
                                                                                                todo
                                                                                                seu
                                                                                                dinheiro
                                                                                                de
                                                                                                volta
                                                                                                na
                                                                                                sua
                                                                                                conta
                                                                                                em
                                                                                                poucos
                                                                                                minutos.
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="wyuscs">
                                                                                        <div
                                                                                            class="wyuscs1">
                                                                                            <img
                                                                                                src="https://thumbor.cartpanda.com/M8PYV_-4aeCP85FRADGZ7BqpB7s=/64x0/https://assets.mycartpanda.com/shop_318540/png/3_06-20-2023_0548.png">
                                                                                        </div>
                                                                                        <div
                                                                                            class="wyuscs2">
                                                                                            <div
                                                                                                class="assurance-title">
                                                                                                <span>Entrega
                                                                                                    Segura</span>
                                                                                            </div>
                                                                                            <div
                                                                                                class="assurance-product-ratings">
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                            </div>
                                                                                            <div
                                                                                                class="assurance-description">
                                                                                                Já
                                                                                                entregamos
                                                                                                milhares
                                                                                                de
                                                                                                produtos
                                                                                                para
                                                                                                todo
                                                                                                o
                                                                                                Brasil!
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="wyuscs">
                                                                                        <div
                                                                                            class="wyuscs1">
                                                                                            <img
                                                                                                src="https://thumbor.cartpanda.com/-O1X9XZzhYwu-LZdW04UnqkT-VY=/64x0/https://assets.mycartpanda.com/shop_318540/png/4_06-20-2023_0549.png">
                                                                                        </div>
                                                                                        <div
                                                                                            class="wyuscs2">
                                                                                            <div
                                                                                                class="assurance-title">
                                                                                                <span>Notas
                                                                                                    Fiscais</span>
                                                                                            </div>
                                                                                            <div
                                                                                                class="assurance-product-ratings">
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                            </div>
                                                                                            <div
                                                                                                class="assurance-description">
                                                                                                Emitimos
                                                                                                notas
                                                                                                fiscais
                                                                                                eletrônicas
                                                                                                de
                                                                                                todas
                                                                                                nossas
                                                                                                vendas.
                                                                                                Caso
                                                                                                queira,
                                                                                                basta
                                                                                                entrar
                                                                                                em
                                                                                                contato
                                                                                                com
                                                                                                nosso
                                                                                                suporte
                                                                                                e
                                                                                                receber
                                                                                                via
                                                                                                e-mail.
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="wyuscs">
                                                                                        <div
                                                                                            class="wyuscs1">
                                                                                            <img
                                                                                                src="https://thumbor.cartpanda.com/I3VcIrG9WPw35eyfOcS6vt-Q4PY=/64x0/https://assets.mycartpanda.com/shop_318540/png/5_06-20-2023_0552.png">
                                                                                        </div>
                                                                                        <div
                                                                                            class="wyuscs2">
                                                                                            <div
                                                                                                class="assurance-title">
                                                                                                <span>Ganhe
                                                                                                    Vantagem
                                                                                                    no
                                                                                                    Cartão</span>
                                                                                            </div>
                                                                                            <div
                                                                                                class="assurance-product-ratings">
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                                <i
                                                                                                    class="fa
                                                                                                    fa-star"></i>
                                                                                            </div>
                                                                                            <div
                                                                                                class="assurance-description">
                                                                                                Além
                                                                                                de
                                                                                                poder
                                                                                                parcelar,
                                                                                                compras
                                                                                                no
                                                                                                cartão
                                                                                                de
                                                                                                crédito
                                                                                                aceleram
                                                                                                a
                                                                                                entrega,
                                                                                                pois
                                                                                                a
                                                                                                compra
                                                                                                é
                                                                                                aprovada
                                                                                                na
                                                                                                hora,
                                                                                                assim
                                                                                                seu
                                                                                                pedido
                                                                                                já
                                                                                                pode
                                                                                                ser
                                                                                                enviado.
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <style>
    :root {
      --social_proof_title_color_1647120917812: #000000;
      --social_proof_review_title_color_1647120917812: #000000;
      --social_proof_description_color_1647120917812: #000000;
      --social_proof_padding_top_1647120917812: 0px;
      --social_proof_padding_bottom_1647120917812: 9px;
      --social_proof_border_color_1647120917812: #E8EAEC;
      --social_proof_border_width_1647120917812: 1px;
      --social_proof_border_radius_1647120917812: 7px;
      --margin_top_1647120917812:  0px;
      --margin_bottom_1647120917812:  0px;
    }

    #cartx-section-1647120917812 .checkout-inner-social-proof{
      border-radius: var(--social_proof_border_radius_1647120917812);
      border: var(--social_proof_border_width_1647120917812) solid var(--social_proof_border_color_1647120917812);
      margin-top: var(--margin_top_1647120917812);
      margin-bottom: var(--margin_bottom_1647120917812);
    }

    #cartx-section-1647120917812 .social-proof-title {
      color: var(--social_proof_title_color_1647120917812) !important;
    }

    #cartx-section-1647120917812 .assurance-title span {
      color: var(--social_proof_review_title_color_1647120917812) !important;
    }

    #cartx-section-1647120917812 .assurance-description {
      color: var(--social_proof_description_color_1647120917812) !important;
    }

    #cartx-section-1647120917812 .assurance-section {
      padding-bottom: var(--social_proof_padding_bottom_1647120917812) !important;
      padding-top: var(--social_proof_padding_top_1647120917812) !important;
    }

  </style>
                                                                    </div>
                                                                </div>
                                                            </div><div
                                                                id="cartx-section-1687292412832"
                                                                class="cartx-section
                                                                "><div
                                                                    data-realtime="1687292412832.desktop_hide_img_per_product"
                                                                    class="
                                                                    img_per_product_section"
                                                                    id="img_per_product_section_1687292412832">
                                                                    <div
                                                                        data-realtime="1687292412832.mobile_hide_img_per_product"
                                                                        class="">
                                                                        <div
                                                                            class="container">
                                                                            <style>
    :root {
      --img_per_product_title_color_1687292412832: #A3A4A4;
      --img_per_product_description_color_1687292412832: #A3A4A4;
      --image_width_1687292412832: 100%;
      --image_position_1687292412832: left;
      --padding_top_1687292412832:  0px;
      --padding_bottom_1687292412832:  0px;
      --margin_top_1687292412832:  0px;
      --margin_bottom_1687292412832:  0px;
    }
    .img_per_product_section{
        display: none;
    }

    #cartx-section-1687292412832 .img-per-product-title {
      color: var(--img_per_product_title_color_1687292412832) !important;
    }

    #cartx-section-1687292412832 .img-per-product-checkout {
      padding-top: var(--padding_top_1687292412832);
      padding-bottom: var(--padding_bottom_1687292412832);
      margin-top: var(--margin_top_1687292412832);
      margin-bottom: var(--margin_bottom_1687292412832);
    }

    .img-per-product-img img {
        width: 100%;
    }

  </style>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="text"
                                                                class="form-control
                                                                hidden"
                                                                name="docType"
                                                                id="docType"
                                                                data-checkout="docType"
                                                                style="display:
                                                                block;">
                                                            <input type="text"
                                                                class="form-control
                                                                hidden"
                                                                name="docNumber"
                                                                id="docNumber"
                                                                data-checkout="docNumber"
                                                                style="display:
                                                                block;">
                                                            <input type="hidden"
                                                                id="site_id"
                                                                data-checkout="site_id"
                                                                name="site_id"
                                                                value="MLB"
                                                                style="display:
                                                                block;">
                                                            <input type="text"
                                                                id="cardExpirationMonth"
                                                                name="cardExpirationMonth"
                                                                value=""
                                                                class="hidden"
                                                                data-checkout="cardExpirationMonth"
                                                                placeholder="12"
                                                                onselectstart="return
                                                                false"
                                                                onpaste="return
                                                                false"
                                                                oncopy="return
                                                                false"
                                                                oncut="return
                                                                false"
                                                                ondrag="return
                                                                false"
                                                                ondrop="return
                                                                false"
                                                                autocomplete="off"
                                                                style="display:
                                                                block;">
                                                            <input type="text"
                                                                id="cardExpirationYear"
                                                                name="cardExpirationYear"
                                                                value=""
                                                                class="hidden"
                                                                data-checkout="cardExpirationYear"
                                                                placeholder="2015"
                                                                onselectstart="return
                                                                false"
                                                                onpaste="return
                                                                false"
                                                                oncopy="return
                                                                false"
                                                                oncut="return
                                                                false"
                                                                ondrag="return
                                                                false"
                                                                ondrop="return
                                                                false"
                                                                autocomplete="off"
                                                                style="display:
                                                                block;">
                                                            <input type="hidden"
                                                                name="paymentMethodId"
                                                                style="display:
                                                                block;">
                                                            <input type="hidden"
                                                                name="recover_source"
                                                                id="recover_source"
                                                                style="display:
                                                                block;">
                                                            <div
                                                                id="cart_line_items"
                                                                style="display:
                                                                none;"></div>
                                                            <input type="hidden"
                                                                name="addCCDiscountPrice"
                                                                value="1.50"
                                                                style="display:
                                                                block;"></form>
                                                    </div>
                                                    <div
                                                        class="bottom-form-content-new">
                                                        <div
                                                            class="bottom-form-content">
                                                            <p>
                                                                Uau Gringa -
                                                                <span
                                                                    data-realtime="checkout_button.copyright_text">
                                                                    Todos os
                                                                    direitos
                                                                    reservados
                                                                </span>
                                                            </p>
                                                            <p>
                                                                <span>
                                                                    Ao
                                                                    prosseguir,
                                                                    você
                                                                    concorda com
                                                                    os
                                                                    <a
                                                                        href="https://cartpanda.com/termos-de-uso-cartpanda-pay/"
                                                                        target="_blank">
                                                                        <b>Termos
                                                                            de
                                                                            Compra</b>
                                                                    </a>
                                                                </span>
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="bottom-form-images"
                                                            style="display:block
                                                            !important;visibility:
                                                            visible
                                                            !important;">
                                                            <img
                                                                src="https://pagamento.uaugringa.shop/images/icon-ssl.svg"
                                                                loading="lazy"
                                                                class="safe-payment-icon"
                                                                style="display:inline-block
                                                                !important;visibility:
                                                                visible
                                                                !important;">
                                                            <img
                                                                src="https://pagamento.uaugringa.shop/images/CP_TECNOLOGIA.png"
                                                                loading="lazy"
                                                                style="display:inline-block
                                                                !important;visibility:
                                                                visible
                                                                !important;">
                                                            <img
                                                                src="https://pagamento.uaugringa.shop/images/CP_PAGAMENTOS.png"
                                                                loading="lazy"
                                                                style="display:inline-block
                                                                !important;visibility:
                                                                visible
                                                                !important;">
                                                            <img
                                                                src="https://pagamento.uaugringa.shop/images/icon-secure.svg"
                                                                loading="lazy"
                                                                class="safe-payment-icon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-ipad-12
                                                    col-xs-12 col-md-5
                                                    check-out-right on-desk">
                                                    <div
                                                        id="cartx-section-cart-products"
                                                        class="cartx-section ">
                                                        <div
                                                            class="product-list-loader"
                                                            style="display:
                                                            none;">
                                                            <img
                                                                style="max-width:
                                                                45px;"
                                                                src="https://pagamento.uaugringa.shop/images/spinner.gif">
                                                        </div>
                                                        <div class="row
                                                            product-loading"
                                                            style="display:
                                                            none;">
                                                            <div class="col-12">
                                                                <div
                                                                    class="timeline-wrapper">
                                                                    <div
                                                                        class="timeline-item">
                                                                        <div
                                                                            class="animated-background">
                                                                            <div
                                                                                class="background-masker
                                                                                header-top"></div>`
                                                                            <div
                                                                                class="background-masker
                                                                                header-left"></div>
                                                                            <div
                                                                                class="background-masker
                                                                                header-right"></div>
                                                                            <div
                                                                                class="background-masker
                                                                                header-bottom"></div>
                                                                            <div
                                                                                class="background-masker
                                                                                subheader-left"></div>
                                                                            <div
                                                                                class="background-masker
                                                                                subheader-right"></div>
                                                                            <div
                                                                                class="background-masker
                                                                                subheader-bottom"></div>
                                                                            <div
                                                                                class="background-masker
                                                                                content-top"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="prdcts_list">
                                                            <div class="row
                                                                checkout-product-row">
                                                                <div
                                                                    class="col-2
                                                                    prdct-thumb">
                                                                    <img
                                                                        src="https://thumbor.cartpanda.com/KtEKtVOXWdQGjCUavEPhnqBlPdA=/100x0/https://assets.mycartpanda.com/static/products_images/RXRNpcAwvkM4b9bYSPhJqSMmlGxecV.jpg"
                                                                        onerror="this.src='https://via.placeholder.com/65x65.png'">
                                                                </div>
                                                                <div
                                                                    class="col-7
                                                                    prdct-name">
                                                                    <h5
                                                                        class="bolderFont">
                                                                        SmartWatch
                                                                        Ultra
                                                                        Serie 8
                                                                        IWO
                                                                        Original
                                                                        2023
                                                                    </h5>
                                                                    <div
                                                                        class="variant-name">
                                                                        Preto /
                                                                        SmartWatch
                                                                        Ultra
                                                                    </div>
                                                                    <div
                                                                        class="custom_options">
                                                                    </div>
                                                                    <span
                                                                        class="desktop-price
                                                                        bolderFont">R$
                                                                        149,90</span>
                                                                </div>
                                                                <div
                                                                    class="col-3
                                                                    prdct-qty"
                                                                    data-variant="84369289">
                                                                    <div
                                                                        class="product-price-mobile">
                                                                        <span
                                                                            class="bolderFont">R$
                                                                            149,90</span>
                                                                    </div>
                                                                    <input
                                                                        type="hidden"
                                                                        name=""
                                                                        class="prdct_org_price"
                                                                        value="1000"
                                                                        style="display:
                                                                        block;">
                                                                    <input
                                                                        type="hidden"
                                                                        name=""
                                                                        class="prdct_old_qty"
                                                                        value="1"
                                                                        style="display:
                                                                        block;">
                                                                    <input
                                                                        type="hidden"
                                                                        name=""
                                                                        class="prdct_id"
                                                                        value="16729881608238"
                                                                        style="display:
                                                                        block;">
                                                                    <div
                                                                        class="d-flex
                                                                        incremental-btn-wrap">
                                                                        <input
                                                                            type="number"
                                                                            class="form-control
                                                                            prdct_qty"
                                                                            name="quantity"
                                                                            placeholder="Quantity"
                                                                            autocomplete="off"
                                                                            value="1"
                                                                            min="1"
                                                                            style="display:
                                                                            block;">
                                                                        <button
                                                                            type="button"
                                                                            class="add
                                                                            incremental-btn
                                                                            btn-number
                                                                            hidden"
                                                                            data-type="plus"
                                                                            data-field="quantity"
                                                                            data-variant="84369289">+</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div></div>
                                                    <div class="checcol-7
                                                        prdct-namekout-cart_summary-section">
                                                        <div
                                                            id="cartx-section-checkout-coupon"
                                                            class="cartx-section
                                                            index-section">
                                                            <div
                                                                data-realtime="checkout-coupon.desktop_hide_coupon"
                                                                class="coupon_row
                                                                ">
                                                                <div
                                                                    data-realtime="checkout-coupon.mobile_hide_coupon"
                                                                    class="">
                                                                    <fieldset
                                                                        class="coupon-sec">
                                                                        <div
                                                                            class="coupon-sect">
                                                                            <div
                                                                                class="coupon-head">
                                                                                <span
                                                                                    class="coupon-head-text">Tem
                                                                                    cupom
                                                                                    de
                                                                                    desconto
                                                                                    ou
                                                                                    vale
                                                                                    presente?</span>
                                                                            </div>
                                                                            <div
                                                                                class="coupon-cont"
                                                                                style="display:none;">
                                                                                <div
                                                                                    class="form-group">
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control
                                                                                        couponCodeW
                                                                                        empty"
                                                                                        data-realtime="checkout-coupon.placeholder_text"
                                                                                        data-realtimetype="placeholder"
                                                                                        name="couponCode"
                                                                                        placeholder="Cupom
                                                                                        de
                                                                                        desconto"
                                                                                        id="coupon"
                                                                                        autocomplete="off"
                                                                                        value=""
                                                                                        style="display:
                                                                                        block;">
                                                                                </div>
                                                                                <div
                                                                                    class="apply-coupon-btn-wrap">
                                                                                    <input
                                                                                        type="button"
                                                                                        name=""
                                                                                        data-realtime="checkout-coupon.button_text"
                                                                                        data-realtimetype="value"
                                                                                        value="Aplicar"
                                                                                        class="black-btn
                                                                                        couponFormSubmitBtn"
                                                                                        style="display:
                                                                                        block;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="selectedCoupons">
                                                                        </div>
                                                                    </fieldset>
                                                                    <span
                                                                        class="coupon_error
                                                                        "
                                                                        style="display:
                                                                        none;"></span>
                                                                    <span
                                                                        class="high_value_error"
                                                                        style="display:
                                                                        none;"></span>
                                                                    <span
                                                                        class="coupon_success
                                                                        "
                                                                        data-hide=""
                                                                        style="display:
                                                                        none;"></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div
                                                            id="cartx-section-checkout-cost-details"
                                                            class="cartx-section
                                                            index-section">
                                                            <div
                                                                class="prices_row
                                                                ">
                                                                <ul>
                                                                    <li>
                                                                        <div
                                                                            class="row">
                                                                            <div
                                                                                class="col-6
                                                                                price-title
                                                                                bolderFont">
                                                                                Subtotal
                                                                            </div>
                                                                            <div
                                                                                class="col-6
                                                                                price-value
                                                                                checkoutSubTotal
                                                                                text-right
                                                                                bolderFont"
                                                                                style="">R$
                                                                                149,90</div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div
                                                                            class="row">
                                                                            <div
                                                                                class="col-6
                                                                                price-title
                                                                                bolderFont">
                                                                                Entrega
                                                                            </div>
                                                                            <div
                                                                                class="col-6
                                                                                price-value
                                                                                text-right
                                                                                totalShippingPriceText
                                                                                bolderFont">
                                                                                ---
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="discount_price_li
                                                                        discount-price-wrap"
                                                                        style="display:none;">
                                                                        <div
                                                                            class="row">
                                                                            <div
                                                                                class="col-6
                                                                                price-title
                                                                                bolderFont">
                                                                                Desconto
                                                                            </div>
                                                                            <div
                                                                                class="col-6
                                                                                price-value
                                                                                text-right
                                                                                DiscountPriceText
                                                                                bolderFont">
                                                                                ---
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="discount_price_li
                                                                        custom-option-price-wrapper"
                                                                        style="display:none;">
                                                                        <div
                                                                            class="row">
                                                                            <div
                                                                                class="col-6
                                                                                price-title
                                                                                bolderFont">
                                                                                Custo
                                                                                de
                                                                                personalização
                                                                            </div>
                                                                            <div
                                                                                class="col-6
                                                                                price-value
                                                                                text-right
                                                                                CustomOptionPriceText
                                                                                bolderFont">
                                                                                ---
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="discount_price_li
                                                                        gift-card-price-wrapper"
                                                                        style="display:none;">
                                                                        <div
                                                                            class="row">
                                                                            <div
                                                                                class="col-6
                                                                                price-title
                                                                                bolderFont">
                                                                                Cartão
                                                                                Presente
                                                                            </div>
                                                                            <div
                                                                                class="col-6
                                                                                price-value
                                                                                text-right
                                                                                GiftCardDiscountText
                                                                                bolderFont">
                                                                                ---
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="cc_discount_price_li"
                                                                        style="display:block;">
                                                                        <div
                                                                            class="row">
                                                                            <div
                                                                                class="col-6
                                                                                price-title
                                                                                bolderFont">
                                                                                Desconto
                                                                                <span
                                                                                    class="discount_gateway">Cartão</span>
                                                                            </div>
                                                                            <div
                                                                                class="col-6
                                                                                price-value
                                                                                text-right
                                                                                CCDiscountPriceText
                                                                                bolderFont">-
                                                                                R$
                                                                                1,50</div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="prices_row
                                                                total-price">
                                                                <ul>
                                                                    <li>
                                                                        <div
                                                                            class="row
                                                                            align-items-start">
                                                                            <div
                                                                                class="col-3
                                                                                col-sm-2
                                                                                final-total
                                                                                bolderFont
                                                                                ">
                                                                                Total
                                                                            </div>
                                                                            <div
                                                                                class="col-9
                                                                                col-sm-10
                                                                                total-price-loader"
                                                                                style="display:
                                                                                none;">
                                                                                <img
                                                                                    style="max-width:
                                                                                    45px;"
                                                                                    src="https://pagamento.uaugringa.shop/images/spinner.gif">
                                                                            </div>
                                                                            <div
                                                                                class="
                                                                                col-9
                                                                                col-sm-10
                                                                                final-total
                                                                                text-right
                                                                                checkoutTotal
                                                                                bolderFont"
                                                                                style="">
                                                                                <span>R$148,40<small
                                                                                        class="text-muted"
                                                                                        style="font-size:
                                                                                        50%">OU
                                                                                        EM
                                                                                        12x
                                                                                        DE
                                                                                        R$&nbsp;15,46*
                                                                                        NO
                                                                                        CARTÃO</small></span>
                                                                            </div>
                                                                            <div
                                                                                class="col-9
                                                                                col-sm-10
                                                                                price-value
                                                                                text-right
                                                                                checkoutTotal2
                                                                                bolderFont"
                                                                                style="display:
                                                                                none">
                                                                                <span>R$
                                                                                    149,90<small
                                                                                        class="text-muted"
                                                                                        style="font-size:
                                                                                        50%">OU
                                                                                        EM
                                                                                        12x
                                                                                        DE
                                                                                        R$&nbsp;15,46*
                                                                                        NO
                                                                                        CARTÃO</small></span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div
                                                            id="cartx-section-checkout-social-proof"
                                                            class="cartx-section
                                                            ">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="cartx-section-footer"
                                            class="cartx-section ">
                                            <div class="container-fluid
                                                footer-section">
                                                <div class="col-xs-12
                                                    footer-text">
                                                </div>
                                                <div class="col-xs-12
                                                    footer-page-description">
                                                </div>
                                            </div>
                                            <style type="text/css">
    #cartx-section-footer {
      min-height: auto !important;
    }
    .footer-section {
        background: ;
    }
    .footer-page-description {
        text-align: ;
    }
    .footer-text {
        text-align: ;
    }
    #cartx-section-1687292412832 {
        
        
    }
</style>
                                        </div>
                                        <style>
    .modal-dialog {
        -webkit-animation: modal-dialog .3s;
        animation: modal-dialog .3s;
    }
    @keyframes modal-dialog {
        0%{transform:scale(.7)}
        45%{transform:scale(1.05)}
        80%{transform:scale(.95)}
        100%{transform:scale(1)}
    }
</style>
                                        <div id="cart-summery-sections-html"
                                            style="display:none;">
                                            <div
                                                id="cartx-section-cart-products"
                                                class="cartx-section ">
                                                <div class="product-list-loader"
                                                    style="display: none;">
                                                    <img style="max-width:
                                                        45px;"
                                                        src="https://pagamento.uaugringa.shop/images/spinner.gif">
                                                </div>
                                                <div class="row product-loading"
                                                    style="display: none;">
                                                    <div class="col-12">
                                                        <div
                                                            class="timeline-wrapper">
                                                            <div
                                                                class="timeline-item">
                                                                <div
                                                                    class="animated-background">
                                                                    <div
                                                                        class="background-masker
                                                                        header-top"></div>`
                                                                    <div
                                                                        class="background-masker
                                                                        header-left"></div>
                                                                    <div
                                                                        class="background-masker
                                                                        header-right"></div>
                                                                    <div
                                                                        class="background-masker
                                                                        header-bottom"></div>
                                                                    <div
                                                                        class="background-masker
                                                                        subheader-left"></div>
                                                                    <div
                                                                        class="background-masker
                                                                        subheader-right"></div>
                                                                    <div
                                                                        class="background-masker
                                                                        subheader-bottom"></div>
                                                                    <div
                                                                        class="background-masker
                                                                        content-top"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="prdcts_list">
                                                    <div class="row
                                                        checkout-product-row">
                                                        <div class="col-2
                                                            prdct-thumb">
                                                            <img
                                                                src="https://thumbor.cartpanda.com/KtEKtVOXWdQGjCUavEPhnqBlPdA=/100x0/https://assets.mycartpanda.com/static/products_images/RXRNpcAwvkM4b9bYSPhJqSMmlGxecV.jpg"
                                                                onerror="this.src='https://via.placeholder.com/65x65.png'">
                                                        </div>
                                                        <div class="col-7
                                                            prdct-name">
                                                            <h5
                                                                class="bolderFont">
                                                                SmartWatch Ultra
                                                                Serie 8 IWO
                                                                Original 2023
                                                            </h5>
                                                            <div
                                                                class="variant-name">
                                                                Preto /
                                                                SmartWatch Ultra
                                                            </div>
                                                            <div
                                                                class="custom_options">
                                                            </div>
                                                            <span
                                                                class="desktop-price
                                                                bolderFont">R$
                                                                149,90</span>
                                                        </div>
                                                        <div class="col-3
                                                            prdct-qty"
                                                            data-variant="84369289">
                                                            <div
                                                                class="product-price-mobile">
                                                                <span
                                                                    class="bolderFont">R$
                                                                    149,90</span>
                                                            </div>
                                                            <input type="hidden"
                                                                name=""
                                                                class="prdct_org_price"
                                                                value="1000"
                                                                style="display:
                                                                block;">
                                                            <input type="hidden"
                                                                name=""
                                                                class="prdct_old_qty"
                                                                value="1"
                                                                style="display:
                                                                block;">
                                                            <input type="hidden"
                                                                name=""
                                                                class="prdct_id"
                                                                value="16729881608238"
                                                                style="display:
                                                                block;">
                                                            <div class="d-flex
                                                                incremental-btn-wrap">
                                                                <input
                                                                    type="number"
                                                                    class="form-control
                                                                    prdct_qty"
                                                                    name="quantity"
                                                                    placeholder="Quantity"
                                                                    autocomplete="off"
                                                                    value="1"
                                                                    min="1"
                                                                    style="display:
                                                                    block;">
                                                                <button
                                                                    type="button"
                                                                    class="add
                                                                    incremental-btn
                                                                    btn-number
                                                                    hidden"
                                                                    data-type="plus"
                                                                    data-field="quantity"
                                                                    data-variant="84369289">+</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div></div>
                                            <div
                                                id="cartx-section-checkout-coupon"
                                                class="cartx-section
                                                index-section">
                                                <div
                                                    data-realtime="checkout-coupon.desktop_hide_coupon"
                                                    class="coupon_row ">
                                                    <div
                                                        data-realtime="checkout-coupon.mobile_hide_coupon"
                                                        class="">
                                                        <fieldset
                                                            class="coupon-sec">
                                                            <div
                                                                class="coupon-sect">
                                                                <div
                                                                    class="coupon-head">
                                                                    <span
                                                                        class="coupon-head-text">Tem
                                                                        cupom de
                                                                        desconto
                                                                        ou vale
                                                                        presente?</span>
                                                                </div>
                                                                <div
                                                                    class="coupon-cont"
                                                                    style="display:none;">
                                                                    <div
                                                                        class="form-group">
                                                                        <input
                                                                            type="text"
                                                                            class="form-control
                                                                            couponCodeW
                                                                            empty"
                                                                            data-realtime="checkout-coupon.placeholder_text"
                                                                            data-realtimetype="placeholder"
                                                                            name="couponCode"
                                                                            placeholder="Cupom
                                                                            de
                                                                            desconto"
                                                                            id="coupon"
                                                                            autocomplete="off"
                                                                            value=""
                                                                            style="display:
                                                                            block;">
                                                                    </div>
                                                                    <div
                                                                        class="apply-coupon-btn-wrap">
                                                                        <input
                                                                            type="button"
                                                                            name=""
                                                                            data-realtime="checkout-coupon.button_text"
                                                                            data-realtimetype="value"
                                                                            value="Aplicar"
                                                                            class="black-btn
                                                                            couponFormSubmitBtn"
                                                                            style="display:
                                                                            block;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="selectedCoupons">
                                                            </div>
                                                        </fieldset>
                                                        <span
                                                            class="coupon_error
                                                            " style="display:
                                                            none;"></span>
                                                        <span
                                                            class="high_value_error"
                                                            style="display:
                                                            none;"></span>
                                                        <span
                                                            class="coupon_success
                                                            " data-hide=""
                                                            style="display:
                                                            none;"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div
                                                id="cartx-section-checkout-cost-details"
                                                class="cartx-section
                                                index-section">
                                                <div class="prices_row ">
                                                    <ul>
                                                        <li>
                                                            <div class="row">
                                                                <div
                                                                    class="col-6
                                                                    price-title
                                                                    bolderFont">
                                                                    Subtotal
                                                                </div>
                                                                <div
                                                                    class="col-6
                                                                    price-value
                                                                    checkoutSubTotal
                                                                    text-right
                                                                    bolderFont"
                                                                    style="">R$
                                                                    149,90</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="row">
                                                                <div
                                                                    class="col-6
                                                                    price-title
                                                                    bolderFont">
                                                                    Entrega
                                                                </div>
                                                                <div
                                                                    class="col-6
                                                                    price-value
                                                                    text-right
                                                                    totalShippingPriceText
                                                                    bolderFont">
                                                                    ---
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class="discount_price_li
                                                            discount-price-wrap"
                                                            style="display:none;">
                                                            <div class="row">
                                                                <div
                                                                    class="col-6
                                                                    price-title
                                                                    bolderFont">
                                                                    Desconto
                                                                </div>
                                                                <div
                                                                    class="col-6
                                                                    price-value
                                                                    text-right
                                                                    DiscountPriceText
                                                                    bolderFont">
                                                                    ---
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class="discount_price_li
                                                            custom-option-price-wrapper"
                                                            style="display:none;">
                                                            <div class="row">
                                                                <div
                                                                    class="col-6
                                                                    price-title
                                                                    bolderFont">
                                                                    Custo de
                                                                    personalização
                                                                </div>
                                                                <div
                                                                    class="col-6
                                                                    price-value
                                                                    text-right
                                                                    CustomOptionPriceText
                                                                    bolderFont">
                                                                    ---
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class="discount_price_li
                                                            gift-card-price-wrapper"
                                                            style="display:none;">
                                                            <div class="row">
                                                                <div
                                                                    class="col-6
                                                                    price-title
                                                                    bolderFont">
                                                                    Cartão
                                                                    Presente
                                                                </div>
                                                                <div
                                                                    class="col-6
                                                                    price-value
                                                                    text-right
                                                                    GiftCardDiscountText
                                                                    bolderFont">
                                                                    ---
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li
                                                            class="cc_discount_price_li"
                                                            style="display:block;">
                                                            <div class="row">
                                                                <div
                                                                    class="col-6
                                                                    price-title
                                                                    bolderFont">
                                                                    Desconto
                                                                    <span
                                                                        class="discount_gateway">Cartão</span>
                                                                </div>
                                                                <div
                                                                    class="col-6
                                                                    price-value
                                                                    text-right
                                                                    CCDiscountPriceText
                                                                    bolderFont">-
                                                                    R$ 1,50</div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="prices_row
                                                    total-price">
                                                    <ul>
                                                        <li>
                                                            <div class="row
                                                                align-items-start">
                                                                <div
                                                                    class="col-3
                                                                    col-sm-2
                                                                    final-total
                                                                    bolderFont
                                                                    ">
                                                                    Total
                                                                </div>
                                                                <div
                                                                    class="col-9
                                                                    col-sm-10
                                                                    total-price-loader"
                                                                    style="display:
                                                                    none;">
                                                                    <img
                                                                        style="max-width:
                                                                        45px;"
                                                                        src="https://pagamento.uaugringa.shop/images/spinner.gif">
                                                                </div>
                                                                <div class="
                                                                    col-9
                                                                    col-sm-10
                                                                    final-total
                                                                    text-right
                                                                    checkoutTotal
                                                                    bolderFont"
                                                                    style="">
                                                                    <span>R$148,40<small
                                                                            class="text-muted"
                                                                            style="font-size:
                                                                            50%">OU
                                                                            EM
                                                                            12x
                                                                            DE
                                                                            R$&nbsp;15,46*
                                                                            NO
                                                                            CARTÃO</small></span>
                                                                </div>
                                                                <div
                                                                    class="col-9
                                                                    col-sm-10
                                                                    price-value
                                                                    text-right
                                                                    checkoutTotal2
                                                                    bolderFont"
                                                                    style="display:
                                                                    none">
                                                                    <span>R$
                                                                        149,90<small
                                                                            class="text-muted"
                                                                            style="font-size:
                                                                            50%">OU
                                                                            EM
                                                                            12x
                                                                            DE
                                                                            R$&nbsp;15,46*
                                                                            NO
                                                                            CARTÃO</small></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
    $(document).ready(function(){
        var htmldata = $('#cart-summery-sections-html').html();
        $(document).find('.cart-summery-dynamic-sections').html(htmldata);
    })
</script>
                                    </div>
                                    <meta name="shop"
                                        content="https://uaugringaimportados.mycartpanda.com"><script>window.Shopify={};</script><script>window.slug='uaugringaimportados'</script>
                                    <script>window.recaptchaSet='false'</script>
                                    <script>
            var onCartx = new Object();
            onCartx.theme = {"id":576990,"name":"Lift Starter","role":"main"}; var Cartpanda = Cartpanda || {}; Cartpanda.locale = 'pt-BR';
            onCartx.oncartx_domain = 'uaugringaimportados';
            (function() {
              function asyncLoad() {
                var urls = ["https:\/\/order-bump.cartpanda.com\/js\/front.js","https:\/\/ocu.cartpanda.com\/js\/front.js","https:\/pagamento.uaugringa.shop\/js\/analytics.min.js","https:\/pagamento.uaugringa.shop\/\/js\/services\/socket-client.js","https:\/pagamento.uaugringa.shop\/\/js\/services\/pixely.js?id=e9bc2099635083e9f0bf7f42a2e3c523"];
                if (!urls.lenght && typeof urls === 'object') {
                   urls = Object.keys(urls).map((key) => urls[key]);
                }
                for (var i = 0; i < urls.length; i++) {
                  var s = document.createElement('script');
                  s.type = 'text/javascript';
                  s.async = true;
                  s.src = urls[i];
                  var x = document.getElementsByTagName('script')[0];
                  x.parentNode.insertBefore(s, x);
                }
              };
              if(window.attachEvent) {
                window.attachEvent('onload', asyncLoad);
              } else {
                window.addEventListener('load', asyncLoad, false);
              }
            })();</script>
                                    <script defer=""
                                        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
                                    <script>
    var js_storefronturl = '';
    window.preview = false;
    if(js_storefronturl != '') {
        window.preview = true;
    }
</script>
                                    <script>
    var fb_pixel_option = 'default';
</script>
                                    <script src="https://pagamento.uaugringa.shop/js/libs/utilities.min.js"></script>
                                    <script
                                        src="https://pagamento.uaugringa.shop/js/libs/ga-events.js?id=8413413902"></script>
                                   
                                    <script type="text/javascript">
        // https://developers.google.com/analytics/devguides/collection/gtagjs/events
        jQuery(document).on('cart.loaded', function(e, cartItems) {
            if (typeof gtag != 'undefined' && typeof GaEvents != 'undefined') {
                cartToken = getCookie('cart_token');
                
                    
                

                jQuery('#email, #full-name, #phone-number, #ficalNumber, #zip-code, #address, #number, #neighborhood, #compartment, #city, #country, #state').one('keyup paste', function () {
                    
                        
                    
                });

                jQuery('#accordion').one('click', function () {
                    
                        
                    
                });

                jQuery('#zip-code').one('keyup paste', function () {
                    var email = jQuery('#email').val();
                    var name = jQuery('#full-name').val();
                    var phone = jQuery('#phone-number').val();
                    var cpf = jQuery('#ficalNumber').val();

                    var checkShepping = jQuery('.section-shipping-method').css('display');
                    if(checkShepping == 'flex' || checkShepping == 'block' && email != null && name != null && phone != null && cpf != null){
                        
                            
                        
                    }
                });
            }
        });
    </script>
                                   
                                    <script
                                        src="https://pagamento.uaugringa.shop/vendor/intl-tel-input/build/js/intlTelInput.min.js"></script>
                                    <script type="module">
    import  { LinkBundler } from  '/csscartpanda/linkbundler.js'
    window.linkBundler = new LinkBundler();
    linkBundler.hideQuantityEditor();
</script>
                                    <script>
    
        var bluesnap_public_key = "";
    
    
        var cybersource_public_key = "";
    
    
        var nmi_public_key = "";
    
    
        var authorize_public_key = "";
    
    var spreedlyBaseUrl = "https://core.spreedly.com/v1/payment_methods.json";
    var store_settings = {"cod_name":"COD","cod_status":0,"legal_entity":"CPF","cc_display":false,"boleto_display":false,"pix_display":false,"bogus_display":false,"timer_display":false,"reviews_display":false,"bnpl_display":false,"klarna_session_details":"","klarna_details":"","airwallexSessionDetails":"","airwallexDetails":"","klarna_js_url":"https:\/\/x.klarnacdn.net\/kp\/lib\/v1\/api.js","mp_js_url":"https:\/\/secure.mlstatic.com\/sdk\/javascript\/v1\/mercadopago.js?time=1688304750","ebanx_js_url":"https:\/\/js.ebanx.com\/ebanx-libjs-latest.min.js","upnid_js_url":"https:\/\/storage.googleapis.com\/upnid-cdn-production\/v0.js","upnid_public_key":"","pagseguro_js_url":"https:\/\/stc.pagseguro.uol.com.br\/pagseguro\/api\/v2\/checkout\/pagseguro.directpayment.js","mp_public_key":"APP_USR-cbcf1bce-4939-4c3a-9eda-2d4d9cc11d3e","cartpanda_mp_public_key":"TEST-c173f992-aeb9-499a-b7eb-3491f0890132","mp_active":true,"blank":"","cc_gateway_names":["cartpanda_cielo"],"cc_multiple_gateways":[{"id":327456,"shop_id":318540,"title":"Cart\u00e3o de Cr\u00e9dito","gateway":"cartpanda_cielo","type":"cc","created_at":"2023-06-05 10:14:56","updated_at":"2023-06-05 10:14:56"}],"bnpl_gateway_names":[""],"bnpl_multiple_gateways":[{"gateway":"","type":"bnpl"}],"enabled_cc_checkout":0,"boleto_active":"cartpanda_pay","cc_active":"cartpanda_cielo","pix_active":"cartpanda_pay","bnpl_active":"","email_auto_suggest":0,"mp_installments_without_fees":3,"g_installments_without_fees":2,"g_max_installments":0,"pagarme_is_installment_interest_fee_active":0,"cc_discount_message":"Envio r\u00e1pido","cc_discount_per":1,"cc_discount_installments":12,"discount_bg_color":"#222","discount_text_color":"#fff","boleto_discount_message":"","boleto_discount_per":0,"boleto_discount_bg_color":"","boleto_discount_text_color":"","pix_discount_message":"Envio r\u00e1pido","pix_discount_per":1,"pix_discount_bg_color":"#222","pix_discount_text_color":"#fff","sticky_layout":false,"logo":"","app_base_url":"https:\/\/pagamento.uaugringa.shop","konduto_key":"P43CB2B4253","enabled_swishjam":false,"clearsale_key":"","clearsale_session":"d983ed06-580a-45ce-b92e-b05af023e216","assurance_section":[],"subscribed_plan_exists":true,"g_multiple_installments":{"cartpanda_cielo":{"g_product_installments":1,"g_installments_without_fees":2,"g_installments_fees":{"1":0,"2":0,"3":8.44,"4":10.23,"5":11.93,"6":13.58,"7":15.01,"8":16.9,"9":18.86,"10":20.07,"11":21.92,"12":23.75},"minimum_installment_amount":0,"max_installments":0,"min_installments":0}},"custom_fees":{"1":0,"2":0,"3":8.44,"4":10.23,"5":11.93,"6":13.58,"7":15.01,"8":16.9,"9":18.86,"10":20.07,"11":21.92,"12":23.75},"checkout_installments":1,"installment_fee_rate":0,"ebanx_mode":"production","ebanx_public_key":"","theme_preview":null,"cart_token":"0bab4034-c8db-4744-8cc1-055a4b37a189","pagseguro_session_id":"","cartpanda_pagseguro_session_id":"","juno_public_key":"53A2CD625165D5E578246585698D2DEF5B7CD94BCEDC9C438C6704CD95F3C951D64360436EAA2E74","juno_mode":"production","shopify_redirect_url":"","taboola_pixels":[],"tiktok_pixel":{"id":106036,"shop_id":318540,"tiktok_pixel_id":null,"created_at":"2023-05-17 14:57:33","updated_at":"2023-05-17 14:57:33"},"pinterest_pixel":{"id":116460,"shop_id":318540,"pinterest_pixel_id":null,"created_at":"2023-05-17 14:57:33","updated_at":"2023-05-17 14:57:33"},"paypal_mode":null,"checkout_express_active":"false","buyer_country":null,"currency":"BRL","paypal_client_id":null,"popupCheckout":false,"popupCheckoutSettings":"","popupCheckoutContent":"","enable_field_confirmation":"1","enable_field_confirmation_mobile":"1","confirmation_sign_color":"#4BB47D","cc_token_enabled":1};
    
    var mp_js_url = "https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js?time=1688304750";
    var mp_public_key = "APP_USR-cbcf1bce-4939-4c3a-9eda-2d4d9cc11d3e";
    var cartpanda_mp_public_key = "TEST-c173f992-aeb9-499a-b7eb-3491f0890132";
    var upnid_public_key = "";
    var mp_active = true;
    var mp_installments_without_fees = 3;
    var app_base_url = "https://pagamento.uaugringa.shop";
    var cc_discount_per = "1";
    var cc_discount_installments = "12";
    var boleto_discount_per = "0";
    var pix_discount_per = "1";

    var theme_preview = "";
    var checkout_cart_token = "0bab4034-c8db-4744-8cc1-055a4b37a189";

    var ebanx_public_key = "";
    var ebanx_mode = "production";

    var pagseguro_session_id = "";
    var cartpanda_pagseguro_session_id = "";

    var checkout_installments = 1;
    var installment_fee_rate = 0;
    
        var multiple_installments = {"cartpanda_cielo":{"g_product_installments":1,"g_installments_without_fees":2,"g_installments_fees":{"1":0,"2":0,"3":8.44,"4":10.23,"5":11.93,"6":13.58,"7":15.01,"8":16.9,"9":18.86,"10":20.07,"11":21.92,"12":23.75},"minimum_installment_amount":0,"max_installments":0,"min_installments":0}};
    

    
        var installment_rates = {"1":0,"2":0,"3":8.44,"4":10.23,"5":11.93,"6":13.58,"7":15.01,"8":16.9,"9":18.86,"10":20.07,"11":21.92,"12":23.75};
    

    
        var installment_rates = {"1":0,"2":0,"3":8.44,"4":10.23,"5":11.93,"6":13.58,"7":15.01,"8":16.9,"9":18.86,"10":20.07,"11":21.92,"12":23.75};
    

    var boleto_active = "cartpanda_pay";
    
        var cc_active = "cartpanda_cielo";
    
    var pix_active = "cartpanda_pay";

    var max_installments = "0";
    var min_installments = "";
    var minimum_installment_amount = 0;
    var g_installments_without_fees = parseFloat("2") || 0;
    var pagarme_is_installment_interest_fee_active = parseFloat("0") || 0;

    var payments_fees_1x = parseFloat("0") || 0;
    var payments_fees_2x = parseFloat("0") || 0;
    var payments_fees_3x = parseFloat("8.44") || 0;
    var payments_fees_4x = parseFloat("10.23") || 0;
    var payments_fees_5x = parseFloat("11.93") || 0;
    var payments_fees_6x = parseFloat("13.58") || 0;
    var payments_fees_7x = parseFloat("15.01") || 0;
    var payments_fees_8x = parseFloat("16.9") || 0;
    var payments_fees_9x = parseFloat("18.86") || 0;
    var payments_fees_10x = parseFloat("20.07") || 0;
    var payments_fees_11x = parseFloat("21.92") || 0;
    var payments_fees_12x = parseFloat("23.75") || 0;
    var shop_country_code = 'BR';
    
        var diff_checkout_title_shop_ids = [154379];
    

    
        var country_details = {"id":31,"name":"Brazil","iso3":"BRA","iso2":"BR","iso_numeric":"076","phonecode":"55","capital":"Brasilia","currency":"BRL","currency_symbol":"R$","native":"Brasil","region":"Americas","subregion":"South America","timezones":"[{\"zoneName\":\"America\\\/Araguaina\",\"gmtOffset\":-10800,\"gmtOffsetName\":\"UTC-03:00\",\"abbreviation\":\"BRT\",\"tzName\":\"Bras\\u00edlia Time\"},{\"zoneName\":\"America\\\/Bahia\",\"gmtOffset\":-10800,\"gmtOffsetName\":\"UTC-03:00\",\"abbreviation\":\"BRT\",\"tzName\":\"Bras\\u00edlia Time\"},{\"zoneName\":\"America\\\/Belem\",\"gmtOffset\":-10800,\"gmtOffsetName\":\"UTC-03:00\",\"abbreviation\":\"BRT\",\"tzName\":\"Bras\\u00edlia Time\"},{\"zoneName\":\"America\\\/Boa_Vista\",\"gmtOffset\":-14400,\"gmtOffsetName\":\"UTC-04:00\",\"abbreviation\":\"AMT\",\"tzName\":\"Amazon Time (Brazil)[3\"},{\"zoneName\":\"America\\\/Campo_Grande\",\"gmtOffset\":-14400,\"gmtOffsetName\":\"UTC-04:00\",\"abbreviation\":\"AMT\",\"tzName\":\"Amazon Time (Brazil)[3\"},{\"zoneName\":\"America\\\/Cuiaba\",\"gmtOffset\":-14400,\"gmtOffsetName\":\"UTC-04:00\",\"abbreviation\":\"BRT\",\"tzName\":\"Brasilia Time\"},{\"zoneName\":\"America\\\/Eirunepe\",\"gmtOffset\":-18000,\"gmtOffsetName\":\"UTC-05:00\",\"abbreviation\":\"ACT\",\"tzName\":\"Acre Time\"},{\"zoneName\":\"America\\\/Fortaleza\",\"gmtOffset\":-10800,\"gmtOffsetName\":\"UTC-03:00\",\"abbreviation\":\"BRT\",\"tzName\":\"Bras\\u00edlia Time\"},{\"zoneName\":\"America\\\/Maceio\",\"gmtOffset\":-10800,\"gmtOffsetName\":\"UTC-03:00\",\"abbreviation\":\"BRT\",\"tzName\":\"Bras\\u00edlia Time\"},{\"zoneName\":\"America\\\/Manaus\",\"gmtOffset\":-14400,\"gmtOffsetName\":\"UTC-04:00\",\"abbreviation\":\"AMT\",\"tzName\":\"Amazon Time (Brazil)\"},{\"zoneName\":\"America\\\/Noronha\",\"gmtOffset\":-7200,\"gmtOffsetName\":\"UTC-02:00\",\"abbreviation\":\"FNT\",\"tzName\":\"Fernando de Noronha Time\"},{\"zoneName\":\"America\\\/Porto_Velho\",\"gmtOffset\":-14400,\"gmtOffsetName\":\"UTC-04:00\",\"abbreviation\":\"AMT\",\"tzName\":\"Amazon Time (Brazil)[3\"},{\"zoneName\":\"America\\\/Recife\",\"gmtOffset\":-10800,\"gmtOffsetName\":\"UTC-03:00\",\"abbreviation\":\"BRT\",\"tzName\":\"Bras\\u00edlia Time\"},{\"zoneName\":\"America\\\/Rio_Branco\",\"gmtOffset\":-18000,\"gmtOffsetName\":\"UTC-05:00\",\"abbreviation\":\"ACT\",\"tzName\":\"Acre Time\"},{\"zoneName\":\"America\\\/Santarem\",\"gmtOffset\":-10800,\"gmtOffsetName\":\"UTC-03:00\",\"abbreviation\":\"BRT\",\"tzName\":\"Bras\\u00edlia Time\"},{\"zoneName\":\"America\\\/Sao_Paulo\",\"gmtOffset\":-10800,\"gmtOffsetName\":\"UTC-03:00\",\"abbreviation\":\"BRT\",\"tzName\":\"Bras\\u00edlia Time\"}]","translations":"{\"br\":\"Brasil\",\"pt\":\"Brasil\",\"nl\":\"Brazili\u00eb\",\"hr\":\"Brazil\",\"fa\":\"\u0628\u0631\u0632\u06cc\u0644\",\"de\":\"Brasilien\",\"es\":\"Brasil\",\"fr\":\"Br\u00e9sil\",\"ja\":\"\u30d6\u30e9\u30b8\u30eb\",\"it\":\"Brasile\"}","latitude":"-10.00000000","longitude":"-55.00000000","emoji":"\ud83c\udde7\ud83c\uddf7","emojiU":"U+1F1E7 U+1F1F7","created_at":"2018-07-20 20:11:03","updated_at":"2023-07-02 10:23:02","flag":1,"wikiDataId":"Q155","exchange_rate":4.78,"exchange_rates_json":"{\"BRLAED\":0.766878,\"BRLAFN\":18.264741,\"BRLALL\":20.430571,\"BRLAMD\":80.585952,\"BRLANG\":0.376351,\"BRLAOA\":172.314378,\"BRLARS\":53.542015,\"BRLAUD\":0.313315,\"BRLAWG\":0.376476,\"BRLAZN\":0.356104,\"BRLBAM\":0.375726,\"BRLBBD\":0.417546,\"BRLBDT\":22.582797,\"BRLBGN\":0.374371,\"BRLBHD\":0.078672,\"BRLBIF\":593.23695,\"BRLBMD\":0.208961,\"BRLBND\":0.283496,\"BRLBOB\":1.44269,\"BRLBRL\":1,\"BRLBSD\":0.208967,\"BRLBTC\":7.0e-6,\"BRLBTN\":17.120712,\"BRLBWP\":2.816162,\"BRLBYN\":0.527103,\"BRLBYR\":3870.435206,\"BRLBZD\":0.420989,\"BRLCAD\":0.27652,\"BRLCDF\":503.061636,\"BRLCHF\":0.186942,\"BRLCLF\":0.006278,\"BRLCLP\":167.298245,\"BRLCNY\":1.514212,\"BRLCOP\":867.466657,\"BRLCRC\":113.328037,\"BRLCUC\":0.208861,\"BRLCUP\":5.375197,\"BRLCVE\":21.161038,\"BRLCZK\":4.545496,\"BRLDJF\":37.119819,\"BRLDKK\":1.424716,\"BRLDOP\":11.553729,\"BRLDZD\":28.348742,\"BRLEGP\":6.446445,\"BRLERN\":3.131181,\"BRLETB\":11.397251,\"BRLEUR\":0.191286,\"BRLFJD\":0.465126,\"BRLFKP\":0.164385,\"BRLGBP\":0.164434,\"BRLGEL\":0.544814,\"BRLGGP\":0.164429,\"BRLGHS\":2.390067,\"BRLGIP\":0.164386,\"BRLGMD\":12.430407,\"BRLGNF\":1805.59428,\"BRLGTQ\":1.637864,\"BRLGYD\":44.152109,\"BRLHKD\":1.635978,\"BRLHNL\":5.160107,\"BRLHRK\":1.441445,\"BRLHTG\":28.912747,\"BRLHUF\":71.326376,\"BRLIDR\":3139.500499,\"BRLILS\":0.774416,\"BRLIMP\":0.164348,\"BRLINR\":17.136859,\"BRLIQD\":273.448527,\"BRLIRR\":8819.232014,\"BRLISK\":28.444911,\"BRLJEP\":0.164351,\"BRLJMD\":32.190155,\"BRLJOD\":0.148372,\"BRLJPY\":30.128441,\"BRLKES\":29.348765,\"BRLKGS\":18.202416,\"BRLKHR\":862.510565,\"BRLKMF\":94.188493,\"BRLKPW\":187.86542,\"BRLKRW\":274.763724,\"BRLKWD\":0.064428,\"BRLKYD\":0.174034,\"BRLKZT\":94.257599,\"BRLLAK\":3914.90407,\"BRLLBP\":3134.103202,\"BRLLKR\":64.298849,\"BRLLRD\":37.594043,\"BRLLSL\":3.930818,\"BRLLTL\":0.583081,\"BRLLVL\":0.119448,\"BRLLYD\":1.004211,\"BRLMAD\":2.066071,\"BRLMDL\":3.820001,\"BRLMGA\":945.588719,\"BRLMKD\":11.832864,\"BRLMMK\":438.379011,\"BRLMNT\":734.553363,\"BRLMOP\":1.685031,\"BRLMRO\":70.497178,\"BRLMUR\":9.49742,\"BRLMVR\":3.195973,\"BRLMWK\":219.489437,\"BRLMXN\":3.57476,\"BRLMYR\":0.974299,\"BRLMZN\":13.333347,\"BRLNAD\":3.920274,\"BRLNGN\":158.698276,\"BRLNIO\":7.634717,\"BRLNOK\":2.242044,\"BRLNPR\":27.393257,\"BRLNZD\":0.340046,\"BRLOMR\":0.080445,\"BRLPAB\":0.208915,\"BRLPEN\":0.756765,\"BRLPGK\":0.734964,\"BRLPHP\":11.537823,\"BRLPKR\":59.803914,\"BRLPLN\":0.848587,\"BRLPYG\":1516.773467,\"BRLQAR\":0.76026,\"BRLRON\":0.948878,\"BRLRSD\":22.417441,\"BRLRUB\":18.541529,\"BRLRWF\":243.181308,\"BRLSAR\":0.783113,\"BRLSBD\":1.739049,\"BRLSCR\":2.794569,\"BRLSDG\":125.55691,\"BRLSEK\":2.253283,\"BRLSGD\":0.282323,\"BRLSHP\":0.164422,\"BRLSLL\":3687.378308,\"BRLSOS\":118.668353,\"BRLSRD\":7.942674,\"BRLSTD\":4764.261915,\"BRLSVC\":1.826805,\"BRLSYP\":524.463578,\"BRLSZL\":3.930715,\"BRLTHB\":7.352852,\"BRLTJS\":2.28188,\"BRLTMT\":0.730738,\"BRLTND\":0.646996,\"BRLTOP\":0.494654,\"BRLTRY\":5.438154,\"BRLTTD\":1.41586,\"BRLTWD\":6.504678,\"BRLTZS\":504.105243,\"BRLUAH\":7.709791,\"BRLUGX\":766.09877,\"BRLUYU\":7.822296,\"BRLUZS\":2407.806805,\"BRLVND\":4921.549035,\"BRLVUV\":24.835724,\"BRLWST\":0.568903,\"BRLXAF\":125.429346,\"BRLXAG\":0.009227,\"BRLXAU\":0.000267,\"BRLXCD\":0.564172,\"BRLXDR\":0.156739,\"BRLXOF\":125.429296,\"BRLXPF\":22.818202,\"BRLYER\":52.257936,\"BRLZAR\":3.928652,\"BRLZMK\":1777.478331,\"BRLZMW\":3.655872,\"BRLZWL\":67.214045,\"BRLCNH\":1.516464,\"BRLMRU\":7.21197,\"BRLSSP\":27.190386,\"BRLSTN\":4.764673,\"BRLUSD\":0.208996,\"BRLVES\":5.807216,\"BRLXPD\":0.000305,\"BRLXPT\":0.000335}","comma_as_decimal":0};
    

    var shopify_redirect_url = "";
    var subscribed_plan_exists = "true";
    var show_wo_installments_shop_slugs = ["pedra-urban","wons-store"];
</script>
                                    <script async=""
                                        src="https://www.google-analytics.com/analytics.js"></script>

                                    <script defer=""
                                        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                                        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                                        crossorigin="anonymous"></script>
                                    <script defer=""
                                        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                                        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                                        crossorigin="anonymous"></script>
                                    <script
                                        src="https://pagamento.uaugringa.shop/js/mask-selectric.js"></script>
                                    <script
                                        src="https://pagamento.uaugringa.shop/js/jquery.payform.min.js"></script>
                                    <script
                                        src="https://pagamento.uaugringa.shop/js/bootstrap-datepicker.min.js"></script>
                                    <script
                                        src="https://pagamento.uaugringa.shop/js/sweetalert.min.js"></script>
                                    <script
                                        src="https://pagamento.uaugringa.shop/js/inputs.js"></script>
                                    <!-- <script
                                        src="https://pagamento.uaugringa.shop/js/checkout.org.js?time=202307021032"></script> -->
                                    <script
                                        src="https://pagamento.uaugringa.shop/js/libs/sentry.js"></script>
                                    <script type="text/javascript">

</script>
                                    <script type="text/javascript">
        var __kdt = __kdt || [];
        __kdt.push({"public_key": "P43CB2B4253"}); // A chave p�blica identifica a sua loja
        (function() {
            var kdt = document.createElement('script');
            kdt.id = 'kdtjs'; kdt.type = 'text/javascript';
            kdt.async = true;
            kdt.src = 'https://i.k-analytix.com/k.js';
            var s = document.getElementsByTagName('body')[0];
            s.parentNode.insertBefore(kdt, s);
        })();

        window.visitorID = '';
        (function() {
            var period = 300;
            var limit = 20 * 1e3;
            var nTry = 0;
            var intervalID = setInterval(function() {
                var clear = limit/period <= ++nTry;
                if ((typeof(Konduto) !== "undefined") &&
                    (typeof(Konduto.getVisitorID) !== "undefined")) {
                    window.visitorID = window.Konduto.getVisitorID();
                    clear = true;
                }
                if (clear) {
                    clearInterval(intervalID);
                }
            }, period);
        })(window.visitorID);
    </script>
                                    <script type="text/javascript">
$("img").bind("error",function(e){
 console.log(e);
 var img = $(this).attr("src");
   if(img.split("https:").length > 2){
   $(this).attr("src",img.split("https:")[2]);
 }
});
</script>
                                    <script>
    jQuery(function(e) {
        var t = e("#min_max_number-").val();
        if(typeof t != 'undefined' && t) {
            min_max1 = t.split("-");
            var o = parseInt(min_max1[0]),
                a = parseInt(min_max1[1]);
            min = Math.ceil(o), max = Math.floor(a), setInterval(function() {
                var e = Math.floor(Math.random() * (max - min + 1) + min);
                if (e >= o && e <= a) {
                    for (var t = ("" + e).split(""), n = "", r = 0; r < t.length; r++) n += "<span>" + t[r] + "</span>";
                    $(document).find('.viewing-checkout-section').html(n)
                }
            }, 10e3)
        }
    });
</script>
                                    <script type="text/javascript">
      $(document).ready(function(){
        var logo_html = $('.top_cart').html();
        $('#top_cart').html(logo_html);
        var bottom_logo_html = $('.bottom_cart').html();
        $('#bottom_cart').html(bottom_logo_html);
      });
      

    (function ($) {

    $.fn.autoEmail = function (domains) {


        return this.each(function () {

            var $this = $(this);

            function addListeners() {
              var $results = $("#auto-list > li");
              $results.first().addClass("highlighted");
              $results.css("cursor","pointer");
              $results.click(function() {
                $this.val($(this).text());
                $this.focus();
                $this.parent().addClass('success_input').removeClass('error_input');
                $("#auto-list").hide();
              });
              $results.mouseenter(
                function() {
                  $(this).addClass("highlighted");
                  $(this).siblings().removeClass("highlighted");
                });

              $( "#auto-list" ).show();
            }


            // check for autocomplete after each key
            $this.keyup(function (e) {

              if (e.keyCode == 40 || e.keyCode == 38) { // if user clicks down or up arrow
                var $newHighlight;
                if (e.keyCode == 40){ // down arrow
                  $newHighlight = $(".highlighted").next();
                } else if (e.keyCode == 38) { // up arrow
                  // e.preventDefault(); // doesn't work cos a key up event
                  $newHighlight = $(".highlighted").prev();
                }
                $newHighlight.addClass("highlighted");
                $newHighlight.siblings().removeClass("highlighted");
              } else if (e.keyCode == 13) { // if user clicks enter
                var $selected = $(".highlighted");
                $this.val($selected.text());
                $("#auto-list").hide();
              } else {



                var exactMatches = [];
                var errorMatches = [];

                $("#auto-list").empty();
                $( "#auto-list" ).hide();

                // get substring to try appending with autocomplete email
                var emailsDirty = $(this).val().split("@");
                if (emailsDirty.length < 2 || emailsDirty[0] == "") {
                    return;
                }
                var emailDomain = emailsDirty[1];//get the text after @

                if (emailDomain.length === 0) {
                  exactMatches.push(domains[1],domains[4],domains[16],domains[17],domains[18]);
                } else {
                  for (i = 0; i < domains.length; i++){
                    var testString = domains[i].substr(0, emailDomain.length);
                    if (emailDomain === testString) {
                      exactMatches.push(domains[i]);
                    } else  if (getEditDistance(emailDomain,testString) < 2 && emailDomain.length > 1) {
                      errorMatches.push(domains[i]);
                    }
                  }
                }



                if (exactMatches.length > 0) {
                  for(i = 0; i < exactMatches.length; i++ ) {
                    // take first domain match for autocomplete
                    var subStr = exactMatches[i].substr(emailDomain.length, exactMatches[i].length);

                    // insert exact match into list
                    $( "#auto-list" ).append("<li>"+ $this.val() + "<b>" + subStr + "</b></li>");
                  }
                  addListeners();

                } else if (errorMatches.length > 0) {
                  for(i = 0; i < errorMatches.length; i++ ) {
                    // take first domain match for autocomplete
                    var subStr = errorMatches[i].substr(emailDomain.length, errorMatches[i].length);

                    // insert error corrected match into list
                    $( "#auto-list" ).append("<li>"+ emailsDirty[0] + "@<b>" + errorMatches[i] + "</b></li>");
                  }
                  addListeners();
                }



              } // end of else statement


            }); // end of keyup event

        });

    };

})(jQuery);


// Compute the edit distance between the two given strings
function getEditDistance(a, b) {
  if(a.length === 0) return b.length;
  if(b.length === 0) return a.length;

  var matrix = [];

  // increment along the first column of each row
  var i;
  for(i = 0; i <= b.length; i++){
    matrix[i] = [i];
  }

  // increment each column in the first row
  var j;
  for(j = 0; j <= a.length; j++){
    matrix[0][j] = j;
  }

  // Fill in the rest of the matrix
  for(i = 1; i <= b.length; i++){
    for(j = 1; j <= a.length; j++){
      if(b.charAt(i-1) == a.charAt(j-1)){
        matrix[i][j] = matrix[i-1][j-1];
      } else {
        matrix[i][j] = Math.min(matrix[i-1][j-1] + 1, // substitution
                                Math.min(matrix[i][j-1] + 1, // insertion
                                         matrix[i-1][j] + 1)); // deletion
      }
    }
  }

  return matrix[b.length][a.length];
};
</script>
                                    <script src="https://pagamento.uaugringa.shop/js/moment.min.js"></script>
                                    <script>(function(){var js = "window['__CF$cv$params']={r:'7e07414d7d6d9510',m:'D3QFx67tGB3J3.C1yX0Sq.LyH_1tX82uPwxlpTYSy2E-1688304750-0-AZKXI4OTjQ/yEwsLmQy5+HwNaKBQW6RA1f3hdHQ1X5FV'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='https://pagamento.uaugringa.shop/cdn-cgi/challenge-platform/scripts/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.nonce = '';_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script><iframe
                                        height="1" width="1" style="position:
                                        absolute; top: 0px; left: 0px; border:
                                        none; visibility: hidden;"></iframe>
                                </body></html>