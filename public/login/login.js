$(document).ready(function(){

    $("#divbotaologin").click(()=>{
        _global.validaLogin();
    })

    $("#close").click(()=>{
        $(this).removeClass("active");
    })

    let retorno;
    let _global = {
        validaLogin: ()=>{
            $("#formlogin").on('submit', function(evt){
                $("#divloading").addClass("bar");

                evt.preventDefault();
                retorno = $(this).serialize();
            })
            
            async function submit(){
                $("#formlogin").submit();
            }

            submit().then(()=>{
                const str = retorno;
                const params = Object.fromEntries(new URLSearchParams(str));

                if(params.usuario.length < 1 || params.password.length < 1){
                    $(".toast-text").text("Verifique as informações digitadas")
                    $("#divloading").removeClass("bar")
                    $("#toast").addClass("active");
                    setTimeout(()=>{
                        $("#toast").removeClass("active");
                    },3000)
                }else{
                    $.ajax({
                        url: '/autenticaUsuario',
                        type: 'POST',
                        data: { usuario : params.usuario,
                                senha : params.password
                            },
                        success: (retorno)=>{ 
                            setTimeout(()=>{
                                if(retorno.status == 200){
                                    $(".toast-text").text("Bem-Vindo! "+retorno.usuario)
                                    $("#toast").addClass("active");
                                    $("#toast").addClass("toastsucesso");

                                    setTimeout(()=>{
                                        $("#toast").removeClass("active");
                                        location.href = "/gestor"
                                    },3000)

                                }else if(retorno.status == 400){
                                    $(".toast-text").text("Ooops... Seu token está vencido :(")
                                    $("#divloading").removeClass("bar")
                                    $("#toast").addClass("active");

                                    setTimeout(()=>{
                                        $("#toast").removeClass("active");
                                    },3000)
                                }else if(retorno.status == 401){
                                    $(".toast-text").text("Ooops... Credenciais inválidas")
                                    $("#divloading").removeClass("bar")
                                    $("#toast").addClass("active");

                                    setTimeout(()=>{
                                        $("#toast").removeClass("active");
                                    },3000)
                                
                                }
                                
                            },1000)

                        }
                    })
                }
                    
            })

        }

    }

})