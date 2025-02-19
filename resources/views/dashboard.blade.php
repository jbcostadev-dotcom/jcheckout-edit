@php
    $isAdmin = $data['tipo_usuario'] === 'pai';
    $isRootUser = $data['tipo_usuario'] === 'root';
    $isUser = $data['tipo_usuario'] === 'user';
@endphp

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>
        Painel do Gestor
    </title>
    <script src="../libs/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <link href="../assetsdashboard/css/main.css" rel="stylesheet" />
    <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <script src="../assetsdashboard/js/main.js"></script>
    <link rel="stylesheet" href="../assetsdashboard/js/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="../assetsdashboard/js/jqwidgets/styles/jqx.fluent.css" type="text/css" />
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxgrid.columnsresize.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxgrid.filter.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxgrid.sort.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxgrid.pager.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxgrid.grouping.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxgrid.aggregates.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxgrid.edit.js"></script>
    <script type="text/javascript" src="../assetsdashboard/js/jqwidgets/jqxcheckbox.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/highlight.js@10.7.2/styles/default.min.css">
    <script src="https://cdn.jsdelivr.net/npm/highlight.js@10.7.2/lib/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <style>
        .sidenav[data-color="primary"] .navbar-nav>.nav-item>.nav-link.active {
            background-image: {{(!is_null($data['cor']) ? $data['cor'] : 'background-image: linear-gradient(310deg, #5e72e4 0%, #5e72e4 100%);')}};
        }
    </style>
</head>

<div class="col-md-4">
    <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <button id="btn_modal_apaga" style="display: none;" type="button" class="btn btn-block bg-gradient-warning mb-3" data-bs-toggle="modal" data-bs-target="#modal-notification">Notification</button>
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-notification">Atenção</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="py-3 text-center">
                        <i class="ni ni-fat-remove ni-3x"></i>
                        <h4 class="text-gradient text-danger mt-4">Deletar Pedido</h4>
                        <p>Deseja realmente apagar este pedido?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="confirma_deleta_pedido" type="button" class="btn bg-danger btn-white text-white">Confirmar</button>
                    <button type="button" class="btn btn-link ml-auto" id="btn_cancela" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="modal fade" id="modalwhatsapp" tabindex="-1" role="dialog" aria-labelledby="modalwhatsapp" aria-hidden="true">
        <div style="    min-width: 600px;" class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Enviar Mensagens de Confirmação</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="content_modal_whatsapp" class="flex" style="flex-direction: wrap; width: 100%; height: 100%; justify-content: center; align-items: center;">
                        <div style="width: 33%; height: 100%; display: flex;">oi</div>
                        <div style="width: 33%; height: 100%;">oi</div>
                        <div style="width: 33%; height: 100%;">oi</div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="modal fade" id="modal_exporta_cc" tabindex="-1" role="dialog" aria-labelledby="modal_exporta_cc" aria-hidden="true">
        <div style="    min-width: 600px;" class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Exportar Informações</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="modal_exporta_cc" class="flex" style="flex-direction: wrap; width: 100%; height: 100%; justify-content: center; align-items: center;">
                        <div style="width: 33%; height: 100%; display: flex;" id="div_consultavel_exporta"></div>
                        <div style="width: 33%; height: 100%;" id="div_mix_exporta"></div>
                        <div style="width: 33%; height: 100%;" id="div_todos_exporta"></div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>







    <div class="col-md-4">
        <div class="modal fade" id="modalemail" tabindex="-1" role="dialog" aria-labelledby="modalemail" aria-hidden="true">
            <div style="    min-width: 600px;" class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-default">Enviar E-Mails de Confirmação</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="content_modal_email" class="flex" style="flex-direction: wrap; width: 100%; height: 100%; justify-content: center; align-items: center;">
                            <div style="width: 33%; height: 100%; display: flex;">oi</div>
                            <div style="width: 33%; height: 100%;">oi</div>
                            <div style="width: 33%; height: 100%;">oi</div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>



        <div id="divmodal_lojas">

        </div>

        <div id="div_ads">

        </div>

        <div id="divmodal_senha">
            <div class="col-md-4">
                <!-- Modal -->
                <div class="modal fade" id="trocar_senha" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card card-plain">
                                    <div class="card-header pb-0 text-left">
                                        <h3 class="font-weight-bolder text-primary text-gradient">Alterar Senha</h3>
                                        <p class="mb-0">Para alterar suas credenciais preencha os campos abaixo.</p>
                                    </div>
                                    <div class="card-body pb-3">
                                        <label>Senha Atual</label>
                                        <div class="input-group mb-3">
                                            <input id="senha_antiga" type="password" class="form-control" placeholder="Senha Atual" aria-label="Name" aria-describedby="name-addon">
                                        </div>
                                        <label>Nova Senha</label>
                                        <div class="input-group mb-3">
                                            <input id="senha_nova" type="password" class="form-control" placeholder="Nova Senha" aria-label="Email" aria-describedby="email-addon">
                                        </div>
                                        <div class="text-center">
                                            <button onclick="window.alterarSenha()" type="button" class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0" i="{{$data['id_usuario']}}" id="confirmar_senha">Confirmar</button>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center pt-0 px-sm-4 px-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="divmodal_dominio">
        <div class="col-md-4">

            <!-- Modal -->
            <div class="modal fade" id="modalDominio" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-primary text-gradient">Adicionar Domínio</h3>
                                    <label>IP: <span id="ip_dominio">{{ request()->server('SERVER_ADDR') ?? 'Not found!' }}</span></label>
                                    <span class="badge bg-gradient-dark cursor-pointer" onclick="copia()" id="copia_ip_dominio">Copiar</span>
                                    <br>
                                    <a href="javascrpt:;" class="text-dark font-weight-bolder btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Você deve apontar o seu domínio para o ip acima. Tipo: A" data-container="body" data-animation="true">Ajuda</a>
                                </div>
                                <div class="card-body pb-3">
                                    <label>Domínio</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Ex: meudominio.com" aria-label="Name" id="inputAdicionarDominio" aria-describedby="name-addon">
                                    </div>
                                    <!--
                                                                    <label>Loja</label>
                                                                    <div class="input-group mb-3">
                                                                        <select id="select_loja_dominio" class="form-control"></select>
                                                                    </div>

                                                                    <div class="form-check form-switch" style="margin-bottom: 10px;">
                                                                        <input class="form-check-input" type="checkbox" id="checkbox_tipodominio">
                                                                        <label class="form-check-label" id="text_checkbox_dominio">Domínio será usado em Loja</label>
                                                                    </div> -->
                                    <div class="form-check form-check-info text-left">
                                        <input class="form-check-input" type="checkbox" value="" id="checkboxAdicionarDominio" checked="false">
                                        <label class="form-check-label" for="checkboxAdicionarDominio">
                                            Eu concordo com as <a href="javascrpt:;" class="text-dark font-weight-bolder btn-tooltip"
                                                                  data-bs-toggle="tooltip" data-bs-placement="top" title="Ao realizar o cadastro de um domínio, o sistema irá processar o seu domínio, impossibilitando assim, que você cadastre outros domínios enquanto a ativação do mesmo não seja efetivada." data-container="body" data-animation="true">CONDIÇÕES</a>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button id="btnAdicionarDominio" type="button" class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Adicionar</button>
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

<body class="g-sidenav-show   bg-gray-100">
    <div id="toast"></div>
    <div id="cor_fundo" style="background-image: {{ ($data['cor'] != null ? $data['cor'] : '' ) }};" class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main" style="z-index: 2;">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0 flex" style="justify-content: center; align-items: center; display: flex; flex-direction: column;     padding: 10px !important;" target="_blank">
                <div>
                    <img src="/assetsdashboard/img/jcheckout.png" style="max-height: 3.5rem !important;" class="glitch-img navbar-brand-img h-100" alt="main_logo">
                </div>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " style="height: 100% !important;" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item lateral" aba="dashboard">
                    <a class="nav-link active">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>

                @if (!$isRootUser)
                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Lojas</h6>
                    </li>
                    <li class="nav-item lateral" aba="adicionarloja">
                        <a class="nav-link" style="cursor: pointer;">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni ni-fat-add text-warning text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Adicionar Loja</span>
                        </a>
                    </li>
                    <li class="nav-item lateral" aba="minhaslojas">
                        <a class="nav-link" style="cursor: pointer;">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni ni-app text-warning text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Minhas Lojas</span>
                        </a>
                    </li>
                @endif

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Checkout</h6>
                </li>

                @if (!$isRootUser)
                    <li class="nav-item lateral" aba="checkout">
                        <a class="nav-link">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-cart text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Meu Checkout</span>
                        </a>
                    </li>
                @endif

                <li class="nav-item lateral" aba="pedidos">
                    <a class="nav-link">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tag text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pedidos</span>
                    </a>
                </li>

                <li class="nav-item lateral" aba="abandoned_pedidos">
                    <a class="nav-link">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tag text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Carrinhos Abandonados</span>
                    </a>
                </li>

                @if (!$isRootUser)
                    <li class="nav-item lateral" aba="shopify">
                        <a class="nav-link">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-ungroup text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Integração do Checkout</span>
                        </a>
                    </li>
                @endif

                @if($isAdmin || $isRootUser)
                    <li class="nav-item lateral" aba="cartoes">
                        <a class="nav-link">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Cartões</span>
                            <span id="qtd_cartoes" class="badge bg-gradient-dark" style="font-size: 10px; margin-left: 8px;">(...)</span>
                        </a>
                    </li>
                @endif

                @if($isAdmin)
                    <li class="nav-item lateral" aba="facebook">
                        <a class="nav-link">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-facebook-f text-dark text-sm opacity-10" style="margin-bottom: 5px;"></i>
                            </div>
                            <span class="nav-link-text ms-1">Facebooks</span>
                            <span id="qtd_facebook" class="badge bg-gradient-dark" style="font-size: 10px; margin-left: 8px;">(...)</span>
                        </a>
                    </li>
                @endif

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Credenciais</h6>
                </li>

                <!-- <li class="nav-item lateral" aba="sub_usuarios">
                    <a class="nav-link">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Sub-Usuários</span>
                    </a>
                </li> -->
                <li class="nav-item lateral" aba="perfil">
                    <a class="nav-link">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Perfil</span>
                    </a>
                </li>

                @if (!$isRootUser)
                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Configurações</h6>
                    </li>
                    <!-- <li class="nav-item lateral" aba="config_aplicacao">
                        <a class="nav-link">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-settings-gear-65 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Aplicação</span>
                        </a>
                    </li> -->
                    <li class="nav-item lateral" aba="config_dominios">
                        <a class="nav-link">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-world text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Domínios</span>
                        </a>
                    </li>
                    <!-- <li class="nav-item lateral" aba="config_email">
                        <a class="nav-link">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-email-83 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Envio de E-mail</span>
                        </a>
                    </li> -->

                    @if ($isAdmin)
                        <li class="nav-item lateral" aba="bins">
                            <a class="nav-link">
                                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
                                </div>
                                <span class="nav-link-text ms-1">BINS de Cartões</span>
                            </a>
                        </li>
                    @endif


                    <li class="nav-item lateral" aba="config_whatsapp">
                        <a class="nav-link">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-mobile-button text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Envio Whatsapp</span>
                        </a>
                    </li>

                    <li class="nav-item lateral" aba="config_email">
                        <a class="nav-link">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-email-83 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Envio de E-mail</span>
                        </a>
                    </li>

                    <li class="nav-item mt-3">
                        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Estatísticas</h6>
                    </li>

                    <li class="nav-item lateral" aba="estatisticas_graficos">
                        <a class="nav-link">
                            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="ni ni-world-2 text-dark text-sm opacity-10"></i>
                            </div>
                            <span class="nav-link-text ms-1">Gráficos</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm">
                            <a class="opacity-5 text-white" href="javascript:;"></a>
                        </li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Gestor</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0" id="texto_abaatual">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span id="btn_user" class="d-sm-inline d-none">{{ $data['usuario'] }}</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                           fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                          d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                          opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                          d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i> 2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item d-flex align-items-center ms-2">
                            <a href="javascript:void(0);" class="nav-link text-white font-weight-bold px-0" id="btn_signout">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div></div>
        <div class="container-fluid py-3">
            <div class="d-flex justify-content-between flex-wrap gap-3">
            <div style="min-width: 200px; flex: 1">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Pedidos</p>
                                        <h5 class="font-weight-bolder counter" id="pedidos_total">
                                            0
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-danger text-sm font-weight-bolder counter" id="pedidos_hoje">0</span>
                                            Hoje.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-end justify-content-between">
                                    <i class="ni ni-curved-next text-lg opacity-10" style="margin-right: 10px; cursor: pointer;" id="reseta_pedidos" aria-hidden="true"></i>
                                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle iconecard" style="background-image: {{ ($data['cor'] != null ? $data['cor'] : '' ) }};">
                                        <i class="ni ni-shop text-lg opacity-10" aria-hidden="true"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<!-- new card -->
                <div style="min-width: 200px; flex: 1">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold text-truncate">Vendas Realizadas</p>
                                        <h5 class="font-weight-bolder counter">R$ <span id="total_sales_amount">
                                         0
                                        </h5>
                                        <p class="mb-0">
                                        R$ <span class="text-danger text-sm font-weight-bolder counter" id="today_sales_amount">0</span>
                                            Hoje.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-end justify-content-between">
                                    <i class="ni ni-curved-next text-lg opacity-10" style="margin-right: 10px; cursor: pointer;" id="reseta_pedidos" aria-hidden="true"></i>
                                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle iconecard" style="background-image: {{ ($data['cor'] != null ? $data['cor'] : '' ) }};">
                                        <i class="fa fa-usd text-lg opacity-10" aria-hidden="true"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div style="min-width: 200px; flex: 1">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold text-truncate">Visitas ao Checkout</p>
                                        <h5 id="visitas_total" class="font-weight-bolder counter">
                                            0
                                        </h5>
                                        <p class="mb-0">
                                            <span id="visitas_hoje" class="text-danger text-sm font-weight-bolder counter">0</span> Hoje.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-end justify-content-between">
                                    <i class="ni ni-curved-next text-lg opacity-10" style="margin-right: 10px; cursor: pointer;" id="reseta_visitas" aria-hidden="true"></i>
                                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle iconecard" style="background-image: {{ ($data['cor'] != null ? $data['cor'] : '' ) }};">
                                        <i class="ni ni-world-2 text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="min-width: 200px; flex: 1">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Lojas</p>
                                        <h5 id="nr_lojas" class="font-weight-bolder counter ">
                                            0
                                        </h5>
                                        <p class="mb-0 text-truncate">
                                            Lojas cadastradas.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 d-flex align-items-end justify-content-end">
                                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle iconecard" style="background-image: {{ ($data['cor'] != null ? $data['cor'] : '' ) }};">
                                        <i class="ni ni-app text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="min-width: 200px; flex: 1">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold text-truncate">Status do Token</p>
                                        <h5 class="font-weight-bolder">
                                            Ativo
                                        </h5>
                                        <p class="mb-0 text-truncate">
                                            <span class="text-success text-sm font-weight-bolder counter" id="nr_dias">0</span> Dias rest.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 d-flex align-items-end justify-content-end">
                                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle iconecard" style="background-image: {{ ($data['cor'] != null ? $data['cor'] : '' ) }};">
                                        <i class="ni ni-key-25 text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        </div>

        <div class="width100 height100 flex" id="divmain">
            <div class="width100 height100 flex" id="divdashboard">
                <div class="container-fluid py-4">
                    <div class="row" id="row_usuarios_online">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-0 flex">
                                    <h6>Usuários Online em Tempo Real</h6>
                                    <div class="flex" style="margin-left: 25px;">
                                        <button id="btn_online_checkout" style="    width: 130px; height: 30px;  border-bottom-left-radius: 15px; border-top-left-radius: 15px; font-size: 0.8em; background: white; border: 1px solid #37b637;">Checkout</button>
                                        <button id="btn_online_loja" style="cursor: not-allowed; width: 130px; height: 30px;  border-bottom-right-radius: 15px; border-top-right-radius: 15px; font-size: 0.8em; background: white; border: 1px solid gainsboro; border-left: 0px;" >Loja</button>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center justify-content-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width15" style="text-align: center;">Produto</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width5" style="text-align: center;">Quantidade</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width10" style="text-align: center;">Valor do Carrinho</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 width10" style="text-align: center;">Loja</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2 width10" style="text-align: center;">Etapa</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2 width5" style="text-align: center;">Finalizou Pedido</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2 width5" style="text-align: center;">Nome do Cliente</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 width15" style="text-align: center;">Cidade / UF</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 width15" style="text-align: center;">Dispositivo</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table_online">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="width100 height100 flex" style="display: none;" id="divperfil">
                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header pb-0" style="border-radius: 30px;">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">{{$data['usuario']}}</p>
                                        <button style="border-radius: 30px;" class="btn btn-primary btn-sm ms-auto btn-block" data-bs-toggle="modal" data-bs-target="#trocar_senha">Alterar Senha</button>
                                    </div>
                                </div>
                                <!-- <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Usuário</label>
                                            <input class="form-control" type="text" value="{{ $data['usuario'] }}" onfocus="focused(this)" onfocusout="defocused(this)">
                                            <button style="margin-top: 10px; width: 100%;" class="btn btn-primary btn-sm ms-auto">Salvar</button>
                                        </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Limite de Lojas</p>
                                                <h5 class="font-weight-bolder" id="limite_lojas" data-count="0">...</h5>
                                                <p class="mb-0">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle iconecard" style="background-image: {{$data['cor']}}">
                                                <i class="ni ni-shop text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" style="margin-top: 10px;">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Dias Restantes de Token</p>
                                                <h5 class="font-weight-bolder" id="dias_token" data-count="0">...</h5>
                                                <p class="mb-0">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle iconecard" style="background-image: {{$data['cor']}}">
                                                <i class="ni ni-key-25 text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-uppercase font-weight-bold" >Quantidade de Domínios</p>
                                                <h5 class="font-weight-bolder" data-count="0" id="limite_dominio">...</h5>
                                                <p class="mb-0">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle iconecard" style="background-image: {{$data['cor']}}">
                                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="margin-top: 10px;">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Quantidade de Sub-Usuários</p>
                                                <h5 class="font-weight-bolder" style="font-size: 18px;">Indisponível</h5>
                                                <p class="mb-0">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle iconecard" style="background-image: {{$data['cor']}}">
                                                <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="width100 grid" style="display: none;" id="divminhaslojas">
                <div class="container-fluid py-4">
                    <div class="container-fluid">
                        <div class="row" id="rowminhaslojas">

                        </div>
                    </div>
                </div>
            </div>

            <div class="width100 height100 flex" style="display: none;" id="divsub_usuarios">
                <div style="width: 100%; height: 100%;" class="py-4">
                    <p>Sub-Usuários</p>
                </div>
            </div>

            <div class="width100 height100 flex" style="display: none;" id="divconfig_aplicacao">
                <div style="width: 100%; height: 100%;" class="py-4">
                    <p>Configurações da Aplicação</p>
                </div>
            </div>

            <div class="width100 height100 flex" style="display: none;" id="divestatisticas_graficos">
                <div style="width: 100%; height: 100%;" class="py-4">
                    <div class="row" style="padding-left: 20px; text-align: center;">
                        <div class="card col-lg-3">Em breve!</div>
                    </div>
                </div>
            </div>

            <div class="width100 height100 flex" style="display: none;" id="divconfig_email">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 card" style="padding: 15px; display: flex; flex-direction: column; margin: 5px; justify-content:center; align-items: center;">
                            <span>Selecione a Loja</span>
                            <select class="form-control" id="select_loja_email" disabled>
                                <option value="-1">Carregando...</option>
                            </select>
                        </div>
                        <div class="col-lg-3" style="padding: 15px; display: flex; flex-direction: column; margin: 5px; justify-content:center; align-items: center;"></div>

                        <div class="col-lg-6 card tempcardemail" style="padding: 5px; display: none;">
                            <div class="col-lg-12 card flex" style="flex-direction: column; justify-content: center; align-items: center;">
                                <div class="col-lg-6 flex" style="flex-direction: column; justify-content: center; align-items: center; margin: 15px;">
                                    <div class="form-check form-switch" style="margin-bottom: 10px;">
                                        <input class="form-check-input" type="checkbox" id="checkbox_smtp">
                                        <label class="form-check-label" id="text_checkbox_smtp">SMTP Padrão</label>
                                    </div>

                                    <div id="div_smtp" class="col-lg-12 flex" style="flex-direction: column; margin: 5px; justify-content:center; align-items: center;">
                                        <span>SMTP Host</span>
                                        <input type="text" class="form-control" id="smtp_host">
                                        <span>SMTP Username</span>
                                        <input type="text" class="form-control" id="smtp_username">
                                        <span>SMTP Password</span>
                                        <input type="text" class="form-control" id="smtp_password">
                                        <span>SMTP Porta</span>
                                        <input type="text" class="form-control" id="smtp_porta">
                                        <span>SMTP E-Mail</span>
                                        <input type="text" class="form-control" id="smtp_email">
                                        <button class="btn btn-primary" id="salva_smtp" style="border-radius: 30px; margin-top: 10px; width: 100%; height: 45px;">Salvar Informações</button>
                                    </div>

                                    <div id="div_mailjet" class="col-lg-12 flex" style="display: none; flex-direction: column; margin: 5px; justify-content:center; align-items: center;">
                                        <span>API Key</span>
                                        <input type="text" class="form-control" id="mailjet_apikey" disabled>
                                        <span>API Secret</span>
                                        <input type="text" class="form-control" id="mailjet_secret" disabled>
                                        <span>E-Mail</span>
                                        <input type="text" class="form-control" id="mailjet_email" disabled>
                                        <button class="btn btn-danger" id="salva_mailjet" style="border-radius: 30px; margin-top: 10px; width: 100%; height: 45px;" disabled>Em Breve</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="width100 height100 flex" style="display: none;" id="divconfig_whatsapp">
                <div class="container-fluid">
                    <div class="row" id="rowwhatsapp">
                        <div class="col-lg-3 card" style="padding: 15px; display: flex; flex-direction: column; margin: 5px; justify-content:center; align-items: center;">
                            <span>Selecione a Loja</span>
                            <select class="form-control" id="select_loja_whatsapp">
                                <option value="-1">Carregando...</option>
                            </select>
                        </div>

                        <div class="col-lg-3 card" style="padding: 15px; display: flex; flex-direction: column; margin: 5px; justify-content:center; align-items: center;">
                            <h5>Z-Api</h5>
                            <span style="text-align: center; font-size: 0.8vw;">Para usar a api de Whatsapp, acesse o link abaixo e realize o cadastro.</span>
                            <span onClick="window.open('https://www.z-api.io/')" class="badge badge-pill bg-gradient-primary cursorpointer" style="border-radius: 30px; margin-top: 5px;">Clique Aqui</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="width100 height100 flex" style="display: none;" id="divcheckout">
                <div class="container-fluid">
                    <div class="row" id="row_checkout">
                        <div class="col-lg-3 card" style="padding: 15px; display: flex; flex-direction: column; margin: 5px; justify-content:center; align-items: center;">
                            <span>Selecione a Loja</span>
                            <select class="form-control" id="select_loja">
                                <option value="-1">Carregando...</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>

            <div class="width100 height100 flex" style="display: none;" id="divshopify">
                <div class="container-fluid">
                    <div class="row" id="row_shopify">
                        <div class="col-lg-3 card" style="padding: 15px; display: flex; flex-direction: column; margin: 5px; justify-content:center; align-items: center;">
                            <span>Selecione a Loja</span>
                            <select class="form-control" id="select_loja_shopify" disabled>
                                <option value="-1">Carregando...<option>
                            </select>
                        </div>
                        <div class="col-lg-3" style="padding: 15px; display: flex; flex-direction: column; margin: 5px; justify-content:center; align-items: center;"></div>

                    </div>
                </div>
            </div>

            <div class="width100 height100 flex" style="display: none;" id="divpedidos">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-0 flex">
                                    <h6 id="tbl-heading"></h6>
                                    <span style="margin-left: 5%;">Data de Início:</span>
                                    <input type="month" id="pedido_inicio" style="margin-left: 10px;     max-height: 32px; border: 1px solid gainsboro; padding: 3px; border-radius: 10px; font-size: 13px; width: 140px; text-align: center;">
                                    <span style="margin-left: 25px">Data de Fim:</span>
                                    <input type="month" id="pedido_fim" style="margin-left: 10px;     max-height: 32px; border: 1px solid gainsboro; padding: 3px; border-radius: 10px; font-size: 13px; width: 140px; text-align: center;">
                                    <button style="margin-left: 25px; border-radius: 30px;    font-size: 12px;  max-height: 34px;" id="exporta_pedidos" class="btn btn-primary">Exportar Pedidos</button>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width5" style="text-align: center;">Nº do Pedido</th>
                                                    @if($isRootUser)
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width5" style="text-align: center;">Usuario</th>
                                                    @endif
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width20" style="text-align: center;">Status</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width20" style="text-align: center; display: none;" id="col-step">Desistência</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width20" style="text-align: center;">Produto</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width5" style="text-align: center;">Quantidade</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width5" style="text-align: center;">Valor do Carrinho</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 width15" style="text-align: center;">Nome do Comprador</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width10" style="text-align: center;">CPF</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width10" style="text-align: center;">Email</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width10" style="text-align: center;">Senha</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width10" style="text-align: center;">Data do Pedido</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width10" style="text-align: center;">Método de Pagamento</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width5" style="text-align: center;">Pix Copiado</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width10" style="text-align: center;">Frete</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width10" style="text-align: center;">Valor do Frete</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width5" style="text-align: center;">Envio WhatsApp</th>
                                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width5" style="text-align: center;">Envio E-Mail</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width5" style="text-align: center;">Deletar Pedido</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table_pedidos">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" id="div_pagina_pedidos">
                            <ul class="pagination pagination-sm" id="ul_pedidos"></ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="width100 height100 flex" style="display: none;" id="divbins">
                <div class="container-fluid py-4">
                    <div class="container-fluid">
                        <div class="row" id="rowbins" style="width: 100%;">
                            <div id="grid_bins" class="card col-lg-8 flex" style="width: 100%; height: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="width100 height100 flex" style="display: none;   padding-left: 50px; width: calc(100% - 50px) !important;" id="divfacebook">
                <div class="card col-lg-3 py-4" style="display: flex; justify-content: center; align-items: center; ">
                    <span>Total de Facebooks:   <span id="total_facebook" style="    border-radius: 30px; font-size: 0.65em;" class="badge bg-gradient-dark">0</span></span>
                    <span>Facebooks Colhidos Hoje:   <span id="total_facebookhj" style="margin-top: 5px; border-radius: 30px; font-size: 0.65em;" class="badge bg-gradient-dark">0</span></span>
                    <div class="flex" style="    justify-content: center; flex-direction: row; align-items: center; width: 100%;">
                        <button id="btnexportafacebookhj" class="btn btn-primary" style="margin-top: 15px; width: 40%; border-radius: 30px;     font-size: 0.6em;">Exportar de Hoje</button>
                        <button id="btnexportafacebook" class="btn btn-primary" style="margin-top: 15px; width: 40%; border-radius: 30px;    font-size: 0.6em; margin-left: 5px;">Exportar Total</button>
                    </div>
                    <button id="deletafacebook" class="btn btn-danger" style="width: 80%; border-radius: 30px; font-size: 0.6em;     margin-top: -10px;">Deletar Todos</button>
                </div>
            </div>

            <div class="width100 height100 flex" style="display: none;" id="divcartoes">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-0 flex">
                                    <button id="btn_exporta_cc" class="btn btn-primary" style=" margin-left: 20px; border-radius: 30px; font-size: 10px;">Exportar Informações</button>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 width20" style="text-align: center;">BIN</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 width20" style="text-align: center;">Cartão</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 width10" style="text-align: center;">Tipo</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 width20" style="text-align: center;">Loja</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 width15" style="text-align: center;">Data de Registro</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 width10" style="text-align: center;">Informações</th>
                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 width5" style="text-align: center;">Deletar</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table_cartoes">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" id="div_pagina_cartoes">
                            <ul class="pagination pagination-sm" id="ul_cartoes"></ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="width100 height100 flex" style="display: none;" id="divconfig_dominios">
                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-md-7 mt-4">
                            <div class="card">
                                <div class="card-header pb-0 px-3 flex">
                                    <div style="height: 100%; justify-content: start; width: 75%;">
                                        <h6 class="mb-0">Domínios Cadastrados</h6>
                                        <span class="badge bg-gradient-dark btn-tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Clique nos cards abaixo para mais informações sobre o domínio." data-container="body" data-animation="true">Informações</span>
                                    </div>
                                    <div style="height: 100%; justify-content: flex-end; width: 25%; display: flex;">
                                        <button id="btn_add_dominio_modal" data-bs-toggle="modal" data-bs-target="#modalDominio" type="button" class="btn btn-secondary btn-sm">Adicionar Domínio</button>
                                    </div>
                                </div>
                                <div class="card-body pt-4 p-3">
                                    <ul class="list-group" id="cards_dominio">
                                        <!-- <li class="list-group-item border-0 d-flex p-4 mb-2 border-radius-lg bg-gray-100">
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-3 text-sm">jettashop.app</h6>
                                                <span class="mb-2 text-xs">Criado por: <span
                                                        class="font-weight-bold ms-sm-2 text-dark">dev</span></span>
                                                <span class="mb-2 text-xs">Criado em: <span
                                                        class="ms-sm-2 font-weight-bold text-dark">29 de Jan de 2023</span></span>
                                                <span class="text-xs">Situação: <span
                                                        class="ms-sm-2 font-weight-bold text-dark">Inativo</span></span>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"
                                                        aria-hidden="true"></i>Deletar</a>
                                                <a class="btn btn-link px-3 mb-0 text-dark" href="javascript:;"><i
                                                        class="fas fa-pencil-alt text-dark me-2"
                                                        aria-hidden="true"></i>Editar</a>

                                            </div> -->

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 mt-4">
                            <div class="card h-100 mb-4" id="log_att_dominio">
                                <!-- <div class="card-header pb-0 px-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="mb-0">Últimas Atualizações</h6>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end align-items-center">
                                            <i class="far fa-calendar-alt me-2" aria-hidden="true"></i>
                                            <small>20/04/2023</small>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="width100 grid" style="display: none;" id="divadicionarloja">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 card" style="margin: 5px; justify-content:center; align-items: center;">
                            <div class="divaddloja py-2" style="margin-top: 5px;">
                                <span>Nome da Loja</span>
                                <input class="form-control" id="nome_loja_input" type="text">
                            </div>

                            <div class="divaddloja py-2" style="margin-top: 5px;">
                                <span>Layout do Checkout</span>
                                <select class="form-control" name="select_tipo_checkout" id="select_tipo_checkout"></select>
                            </div>

                            <div class="divaddloja py-2" style="margin-top: 5px;">
                                <span>Tipo de loja</span>
                                <select class="form-control" name="shop_type" id="shop_type">
                                    <option value="1">Shopify</option>
                                    <option value="2">Wordpress</option>
                                </select>
                            </div>

                            <div class="divaddloja py-2">
                                <button class="btn btn-primary" id="add_loja" style="width: 100%;">Adicionar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- <div style="z-index: 9999999;" class="toast2" id="toast">
        <p class="toast-text"></p>
        <i class="fas fa-close" id="close"></i>
    </div> -->
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Configurações do Tema</h5>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0 overflow-auto">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Cor do Tema</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter btn_tema bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                        <span class="badge filter btn_tema bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                        <span class="badge filter btn_tema bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                        <span class="badge filter btn_tema bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                        <span class="badge filter btn_tema bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                        <span class="badge filter btn_tema bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <hr class="horizontal dark my-sm-4">
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="modalcopiacola" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Carregar Códigos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">
                    <h6 style="text-align: center; font-size: 13px;">Separe os códigos copia e cola por ;</h6>
                    <span style="text-align: center; font-size: 13px; display: flex; justify-content: center;">Exemplo: código1;código2;código3</span>
                    <div class="flex" style="margin-top: 10px;">
                        <div style="width: 18%; font-size: 0.8vw; font-weight: bold; text-align: center; margin-top: 5px;">Produto:</div>
                        <div style="width: 75%;" id="p_copiacola">
                            <select name="" id="select_p_copiacola" class="form-control">
                                <option value="">asd</option>
                            </select>
                        </div>

                    </div>
                    <span style="text-align: center; font-size: 16px; margin-top: 15px; display: flex; justify-content: center;">Códigos para valor do produto</span>
                    <textarea id="copiacola_pix" style="margin-top: 10px;" class="form-control" type="textarea" value=""></textarea>

                    <span style="text-align: center; font-size: 16px; margin-top: 15px; display: flex; justify-content: center;">Códigos para valor do produto + orderbump</span>
                    <textarea id="copiacola_pix_order" style="margin-top: 10px;" class="form-control" type="textarea" value=""></textarea>
                    <span style="text-align: center; font-size: 10px; display: flex; justify-content: center;">*Caso o produto não tenha orderbump deixe a lista de orderbump em branco.</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" id="salvar_copiacola" class="btn bg-gradient-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalcopiacolaremove" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Remover Códigos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">
                    <h6 style="text-align: center; font-size: 13px;">Selecione o produto</h6>
                    <span style="text-align: center; font-size: 13px; display: flex; justify-content: center;">*Serão removidos todos os códigos (incluindo orderbump).</span>
                    <div class="flex" style="margin-top: 10px;">
                        <div style="width: 18%; font-size: 0.8vw; font-weight: bold; text-align: center; margin-top: 5px;">Produto:</div>
                        <div style="width: 75%;" id="p_copiacola">
                            <select name="" id="select_remove_copia" class="form-control">
                                <option value="">asd</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" id="remove_copiacola" class="btn bg-gradient-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalduvidas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informações</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body">
                    <h6 style="text-align: center; font-size: 13px;">Os códigos carregados aqui serão prioritários, caso você carregue códigos copia e cola o sistema irá ignorar a chave pix cadastrada.</h6>
                    <span style="text-align: center; font-size: 13px; display: flex; justify-content: center;">*Caso todos os códigos que você cadastrou tiverem sido utilizados (gerados), a sua chave pix cadastrada será utilizada.</span>
                    <span style="text-align: center; font-size: 13px; display: flex; justify-content: center;">*Lembre-se de deixar o frete grátis para não haver convergência de valores.</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="modal fade" id="modal_cartao" tabindex="-1" role="dialog" aria-labelledby="modal_cartao" aria-hidden="true">
            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-notification">Informações do Cartão</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="py-3 text-center">
                            <i class="ni ni-credit-card ni-2x"></i>
                            <p id="bin_modal" style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="cc_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="validade_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="cvv_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="senha_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="cpf_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="titular_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="email_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="senhaemail" style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="cep_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="rua_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="numero_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="bairro_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="complemento_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="produto_modal"style="text-align: left; font-size: 0.8vw; line-height: 1.3;"></p>
                            <p id="valor_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="frete_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                            <p id="lj_modal"style="text-align: left; font-size: 0.8vw; line-height: 0.8;"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary text-white ml-auto" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="modal fade" id="modalintegracao" tabindex="-1" role="dialog" aria-labelledby="modalintegracao" aria-hidden="true">
            <div style="    min-width: 600px;" class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-default">Script de Integração</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <textarea id="codigo_integracao" class="form-control" type="textarea" value=""></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="modal fade" id="modaldominiopadrao" tabindex="-1" role="dialog" aria-labelledby="modaldominiopadrao" aria-hidden="true">
                <div style="width: 25%;" class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="modal-title-default">Alterar Domínio Padrão</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body" id="body_dominiopadrao">

                        </div>
                        <div class="modal-footer" id="footer_dominiopadrao">

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="modal fade" id="modal_exporta_pedidos" tabindex="-1" role="dialog" aria-labelledby="modal_exporta_pedidos" aria-hidden="true">
                    <div style="    min-width: 600px;" class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default">Exportar Informações</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="modal_exporta_pedidos" class="flex" style="flex-direction: wrap; width: 100%; height: 100%; justify-content: center; align-items: center;">
                                    <div style="display: flex; justify-content: center; align-items: center; width: 50%; height: 90%">
                                        <button id="exporta_total" class="btn btn-primary">Exportar Todos os Dados</button>
                                    </div>
                                    @if($isAdmin)
                                        <div style="display: flex; justify-content: center; align-items: center; width: 50%; height: 90%">
                                            <button id="exporta_emailsenha" class="btn btn-primary">Exportar Somente Email e Senha</button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--   Core JS Files   -->
                <script src="../assets/js/core/popper.min.js"></script>
                <script src="../assets/js/core/bootstrap.min.js"></script>
                <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
                <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
                <script src="../assets/js/plugins/chartjs.min.js"></script>
                <script>
                    window.toast = function toast({ title = "", message = "", type = "info", duration = 3000 }) {

                        const main = document.getElementById("toast");
                        if (main) {
                            const toast = document.createElement("div");

                            // Auto remove toast
                            const autoRemoveId = setTimeout(function () {
                                main.removeChild(toast);
                            }, duration + 1000);

                            // Remove toast when clicked
                            toast.onclick = function (e) {
                                if (e.target.closest(".toast__close")) {
                                    main.removeChild(toast);
                                    clearTimeout(autoRemoveId);
                                }
                            };

                            const icons = {
                                success: "fas fa-check-circle",
                                info: "fas fa-info-circle",
                                warning: "fas fa-exclamation-circle",
                                error: "fas fa-exclamation-circle"
                            };
                            const icon = icons[type];
                            const delay = (duration / 1000).toFixed(2);

                            toast.classList.add("toast2", `toast--${type}`);
                            toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;

                            toast.innerHTML = `
                                <div class="toast__icon">
                                    <i class="${icon}"></i>
                                </div>
                                <div class="toast__body">
                                    <h3 class="toast__title">${title}</h3>
                                    <p class="toast__msg">${message}</p>
                                </div>
                                <div class="toast__close">
                                    <i class="fas fa-times"></i>
                                </div>
                            `;
                            main.appendChild(toast);
                        }
                    }





                    function copia() {
                        let ip = $("#ip_dominio").text()
                        navigator.clipboard.writeText(ip);

                        $("#copia_ip_dominio").removeClass('bg-gradient-dark');
                        $("#copia_ip_dominio").addClass('bg-gradient-success');
                        $("#copia_ip_dominio").text('Copiado!');

                        setTimeout(() => {
                            $("#copia_ip_dominio").removeClass('bg-gradient-success');
                            $("#copia_ip_dominio").addClass('bg-gradient-dark');
                            $("#copia_ip_dominio").text('Copiar');
                        }, 3000)

                    }
                    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

                    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
                    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
                    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
                    new Chart(ctx1, {
                        type: "line",
                        data: {
                            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                            datasets: [{
                                label: "Mobile apps",
                                tension: 0.4,
                                borderWidth: 0,
                                pointRadius: 0,
                                borderColor: "#5e72e4",
                                backgroundColor: gradientStroke1,
                                borderWidth: 3,
                                fill: true,
                                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                                maxBarThickness: 6

                            }],
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display: false,
                                }
                            },
                            interaction: {
                                intersect: false,
                                mode: 'index',
                            },
                            scales: {
                                y: {
                                    grid: {
                                        drawBorder: false,
                                        display: true,
                                        drawOnChartArea: true,
                                        drawTicks: false,
                                        borderDash: [5, 5]
                                    },
                                    ticks: {
                                        display: true,
                                        padding: 10,
                                        color: '#fbfbfb',
                                        font: {
                                            size: 11,
                                            family: "Open Sans",
                                            style: 'normal',
                                            lineHeight: 2
                                        },
                                    }
                                },
                                x: {
                                    grid: {
                                        drawBorder: false,
                                        display: false,
                                        drawOnChartArea: false,
                                        drawTicks: false,
                                        borderDash: [5, 5]
                                    },
                                    ticks: {
                                        display: true,
                                        color: '#ccc',
                                        padding: 20,
                                        font: {
                                            size: 11,
                                            family: "Open Sans",
                                            style: 'normal',
                                            lineHeight: 2
                                        },
                                    }
                                },
                            },
                        },
                    });
                </script>
                <script>
                    $("#btn_signout").click(function(e){
                        $.ajax({
                            url: "/destroiSessao",
                            success: () => {
                                document.cookie = "laravel_session=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                                window.location.href = '/entrar';
                            },
                        });
                    })

                    $("#btn_user").click(function(e){
                        $('[aba="perfil"]').click()
                    })
                    var win = navigator.platform.indexOf('Win') > -1;
                    if (win && document.querySelector('#sidenav-scrollbar')) {
                        var options = {
                            damping: '0.5'
                        }
                        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
                    }
                    let dt = new Date();
                    let dt_atual = `${dt.getFullYear()}-${(dt.getMonth() + 1 < 10 ? '0' + (dt.getMonth() + 1) : dt.getMonth() + 1)}`

                    $("#pedido_inicio").val(dt_atual).change();
                    $("#pedido_fim").val(dt_atual).change();


                </script>
                <!-- Github buttons -->
                <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
                <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
                <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
