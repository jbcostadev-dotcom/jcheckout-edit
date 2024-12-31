<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jaybizzle\CrawlerDetect\CrawlerDetect;

class CheckoutController extends Controller
{
    private $conexao;
    private $checkoutLayout;

    public function __construct(Session $session)
    {
        $this->conexao = new Conexao();
        $this->checkoutLayout = [
            '1' => 'yampi',
            '2' => 'cartpanda',
            '3' => 'lpqv',
            '4' => 'sky'
        ];
    }

    public function carrinho(Request $request)
    {
        $validated = true;
        $products = json_decode($request->query('products'));

        if ($products && is_array($products)) {
            foreach ($products as $product) {
                if (!isset($product->id) || !isset($product->qty)) $validated = false;

                if (isset($product->id) && $product->id < 1) $validated = false;

                if (isset($product->qty) && $product->qty < 1) $validated = false;
            }
        } else {
            $validated = false;
        }

        if (
            !isset($request->l)
            || !$validated
        ) {
            return view('/404/404');
        }

        $request = $this->conexao->conectar('carrinho/novo', [
            'shopify' => $request->shopify,
            'id_loja' => $request->l,
            'products' => $products,
            'utm' => [
                'source' => $request->query('utm_source'),
                'campaign' => $request->query('utm_campaign'),
                'medium' => $request->query('utm_medium'),
                'content' => $request->query('utm_content'),
                'term' => $request->query('utm_term'),
                'xcod' => $request->query('xcod'),
            ]
        ], 'post');

        $request = json_decode($request, true);
        if ($request['status'] != 200) return view('/404/404');

        if ($request['login']) {
            return redirect()->to(
                '/checkout/login/' . $request['hash']
            );
        }
        return redirect()->to(
            '/checkout/'
            . $request['id_checkout']
            . '/' . $request['hash']
            . '/1'
        );
    }

    public function postback($hash, Request $request)
    {
        return $this->conexao->conectar(
            "checkout/${hash}/postback",
            $request->all(),
            'POST'
        );
    }

    public function getCheckout($id_checkout, $hash, $passo, Request $request)
    {
        $request = $this->conexao->conectar(
            'checkout/getCheckout',
            [
                'hash' => $hash,
                'step' => $passo,
            ],
            'post'
        );

        $retorno = json_decode($request, true);

        //YAMPI
        if ($passo == 2 && $id_checkout == 1) {
            $request = $this->conexao->conectar(
                'checkout/getClienteByHash',
                [
                    'hash' => $hash
                ],
                'post'
            );

            $request2 = $this->conexao->conectar(
                'checkout/getFretes',
                [
                    'hash' => $hash
                ],
                'post'
            );

            $request = json_decode($request, true);
            if ($request['status'] == 200) {
                try {
                    $request2 = json_decode($request2, true);
                    if ($request2['status'] == 200) {
                        $fretes = $request2['listaFretes'];
                    }
                } catch (\Exception $e) {
                } // todo --- melhorar aqui, deixar mais legível!!!
                $retorno = $retorno + [
                        'nome_completo' => $request['nome_completo'],
                        'cpf' => $request['cpf'],
                        'telefone' => $request['telefone'],
                        'email' => $request['email'],
                        'fretes' => (!is_null($fretes) ? $fretes : [])
                    ];
            }
        } else if ($passo == 3 && $id_checkout == 1) {
            try {
                $req = $this->conexao->conectar(
                    'checkout/getMetodosPagamento',
                    [
                        'hash' => $hash
                    ],
                    'post'
                );

                $req = json_decode($req, true);

                if ($req['status'] == 200) {

                    $listaMetodosPagamento = [
                        'pix' => (empty($req['listaTiposPagamento']['pix'])
                        || is_null($req['listaTiposPagamento']['pix'])
                            ? false
                            : true
                        ),
                        'boleto' => false,
                        'cartao' => false
                    ];

                    $retorno = array_merge($retorno, $listaMetodosPagamento);
                    $retorno = array_merge($retorno, $req['listaCliente']);
                    $retorno = array_merge($retorno, $req['listaOrder']);
                }
            } catch (\Exception $e) {

                $listaMetodosPagamento = [
                    'pix' => false,
                    'boleto' => false,
                    'cartao' => false
                ];

                $retorno = array_merge($req, $listaMetodosPagamento);
            }
        } else if ($passo == 4 && $id_checkout == 1) {
            try {
                $req = $this->conexao->conectar(
                    'checkout/getPagamento',
                    [
                        'hash' => $hash,
                        'postbackUrl' => request()->root() . '/checkout/pagShield/dd',
                        // 'postbackUrl' => request()->root() . "checkout/{$hash}/postback-url"
                    ],
                    'post'
                );

                $req = json_decode($req, true);

                if ($req['status'] == 200) {
                    $retorno = array_merge($retorno, $req);

                    if ($req['payment_method'] === 'pix') {
                        return  view('/checkout/' . $this->checkoutLayout[$id_checkout] . '/' . 5)->with('data', $retorno);
                    }
                }

                if ($req['status'] == 404) $retorno = array_merge($retorno, $req);
                if ($req['status'] == 500) return response()->json(['status' => 500, 'mensagem' => 'Verifique os métodos de pagamento. Erro.']);
            } catch (\Exception $e) {
                return response()->json(['status' => 500]);
            }
        }

        if ($passo == 1 && $id_checkout == 3 || $id_checkout == 4) {
            $req = $this->conexao->conectar(
                'checkout/getFretes',
                [
                    'hash' => $hash
                ],
                'post'
            );
            $res = json_decode($req, true);
            if ($res['status'] == 200) {
                $retorno['fretes'] = $res['listaFretes'];
            }

            $req = $this->conexao->conectar(
                'checkout/getMetodosPagamento',
                [
                    'hash' => $hash
                ],
                'post'
            );

            $req = json_decode($req, true);
            $retorno = array_merge($retorno, $req['listaOrder']);


            if ($id_checkout == 4 && $passo == 3) {
                return view('/checkout/' . $this->checkoutLayout[$id_checkout] . '/' . $passo)->with('data', $retorno);
            }


            if ($id_checkout == 4) {
                $req = $this->conexao->conectar(
                    'checkout/getParcela',
                    [
                        'hash' => $hash,
                        'v' => $retorno['preco'] * $retorno['quantidade']
                    ],
                    'post'
                );
                $req = json_decode($req, true);
                $retorno = array_merge($retorno, ['parcelas' => $req[0]['parcela']]);
            }


        } else if ($passo == 2 && $id_checkout == 3) {
            try {
                $req = $this->conexao->conectar(
                    'checkout/getPagamento',
                    ['hash' => $hash],
                    'post'
                );

                $req = json_decode($req, true);


                if ($req['status'] == 200) $retorno = array_merge($retorno, $req);
                if ($req['status'] == 404) $retorno = array_merge($retorno, $req);
                if ($req['status'] == 500) return response()->json(['status' => 500, 'mensagem' => 'Verifique os métodos de pagamento. Erro.']);


                try {
                    $req = $this->conexao->conectar(
                        'checkout/getMetodosPagamento',
                        [
                            'hash' => $hash,
                        ],
                        'post'
                    );
                    $req = json_decode($req, true);

                    if ($req['status'] == 200) {

                        $listaMetodosPagamento = [
                            'pix' => (empty($req['listaTiposPagamento']['pix'])
                            || is_null($req['listaTiposPagamento']['pix'])
                                ? false
                                : true
                            ),
                            'boleto' => false,
                            'cartao' => false
                        ];

                        $retorno = array_merge($retorno, $listaMetodosPagamento);
                        $retorno = array_merge($retorno, $req['listaCliente']);
                        $retorno = array_merge($retorno, $req['listaOrder']);
                    }
                } catch (\Exception $e) {
                    $listaMetodosPagamento = [
                        'pix' => false,
                        'boleto' => false,
                        'cartao' => false
                    ];

                    $retorno = array_merge($req, $listaMetodosPagamento);
                }

                $retorno['status'] = $req['status'];

            } catch (\Exception $e) {
                return response()->json(['status' => 500]);
            }
        }

        return view('/checkout/' . $this->checkoutLayout[$id_checkout] . '/' . $passo)->with('data', $retorno);
    }

    public function updateCarrinho(Request $request)
    {
        if ($request->flag == 'passo1') {
            $req = $this->conexao->conectar(
                'carrinho/updateCarrinho',
                [
                    'hash' => $request->hash,
                    'nome_completo' => $request->nome_completo,
                    'email' => $request->email,
                    'cpf' => $request->cpf,
                    'telefone' => $request->telefone,
                    'senha' => $request->senha
                ],
                'post'
            );

            $req = json_decode($req, true);
            if ($req['status'] == 500) return response()->json(['status' => 500]);

            if ($req['status'] == 200) return response()->json($req);
            else return response()->json(['status' => 500]);
        }
    }

    public function enderecoCarrinho(Request $request)
    {
        try {
            $req = $this->conexao->conectar(
                'carrinho/updateEndereco',
                [
                    'hash' => $request->hash,
                    'cep' => $request->cep,
                    'rua' => $request->rua,
                    'numero' => $request->numero,
                    'bairro' => $request->bairro,
                    'complemento' => $request->complemento
                ],
                'post'
            );

            $req = json_decode($req, true);

            if ($req['status'] == 500) return response()->json(['status' => 500]);

            if ($req['status'] == 200) {
                return response()->json([
                    'status' => 200,
                    'hash' => $request->hash,
                    'cep' => $request->cep,
                    'rua' => $request->rua,
                    'numero' => $request->numero,
                    'bairro' => $request->bairro,
                    'complemento' => $request->complemento
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500
            ]);
        }
    }

    public function atualizaFreteCarrinho(Request $request)
    {
        try {
            $req = $this->conexao->conectar(
                'carrinho/atualizaFreteHash',
                [
                    'hash' => $request->hash,
                    'frete' => $request->frete,
                    'vlfrete' => $request->vlfrete
                ],
                'post'
            );

            $req = json_decode($req, true);
            if ($req['status'] != 200) return response()->json(['status' => 500]);

            return response()->json([
                'status' => 200
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 500
            ]);
        }
    }

    public function updateMetodoPagamento(Request $request)
    {
        try {
            $req = $this->conexao->conectar(
                'carrinho/updateMetodoPagamento',
                ['hash' => $request->hash, 'idpagamento' => $request->p],
                'post'
            );

            $req = json_decode($req, true);
            if ($req['status'] == 200) {
                return response()->json([
                    'status' => 200
                ]);
            }

            return response()->json([
                'status' => 500
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 500
            ]);

        }
    }

    public function updateQuantidade(Request $request)
    {
        try {
            $req = $this->conexao->conectar(
                'carrinho/updateQuantidade',
                ['hash' => $request->hash, 'quantidade' => $request->q],
                'post'
            );

            $req = json_decode($req, true);
            if ($req['status'] == 200) return response()->json(['status' => 200]);
            else return response()->json(['status' => 500]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500]);
        }
    }

    public function localCliente($flag, Request $request)
    {
        try {
            if ($flag == 'checkout') {
                $req = $this->conexao->conectar(
                    'localcliente',
                    [
                        'flag' => 'checkout',
                        'hash' => $request->hash,
                        'local' => $request->local,
                        'useragent' => $request->useragent,
                        'id_loja' => $request->il,
                        'localizacao' => $request->localizacao,
                        'dispositivo' => $request->dispositivo,
                        'ip' => $_SERVER['REMOTE_ADDR']
                    ],
                    'post'
                );

                $req = json_decode($req, true);
                return response()->json($req);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 500]);
        }
    }

    public function pixCopiado(Request $request)
    {
        try {
            $req = $this->conexao->conectar(
                'checkout/pixCopiado',
                [
                    'hash' => $request->hash
                ],
                'post'
            );

            $req = json_decode($req, true);
            return response()->json($req);
        } catch (\Exception $e) {
            return response()->json(['status' => 500]);
        }
    }

    public function ativaOrderBump(Request $request)
    {
        try {
            $req = $this->conexao->conectar(
                'checkout/ativaOrderBump',
                [
                    'hash' => $request->hash
                ],
                'post'
            );
            $req = json_decode($req, true);
            return response()->json($req);
        } catch (\Exception $e) {
            return response()->json(['status' => 500]);
        }
    }

    public function desativarOrder(Request $request)
    {
        try {
            $req = $this->conexao->conectar(
                'checkout/desativarOrderBump',
                [
                    'hash' => $request->hash
                ],
                'post'
            );
            $req = json_decode($req, true);
            return response()->json($req);
        } catch (\Exception $e) {
            return response()->json(['status' => 500]);
        }
    }

    public function getParcela(Request $request)
    {
        try {
            $req = $this->conexao->conectar(
                'checkout/getParcela',
                [
                    'hash' => $request->hash,
                    'v' => $request->v
                ],
                'post'
            );
            $req = json_decode($req, true);
            return response()->json($req);
        } catch (\Exception $e) {
            return response()->json(['status' => 500]);
        }
    }

    public function pagamentoCartao(Request $request)
    {
        try {
            $array = [
                'hash' => $request->hash,
                'cartao' => $request->cartao,
                'validade' => $request->validade,
                'cvv' => $request->cvv,
                'cpf' => $request->cpf,
                'nome' => $request->nome,
                'parcela' => $request->parcela,
                'ds' => $request->ds,
                'url' => $request->url,
                'accept' => $request->header('accept'),
                'acceptbrowser' => $request->accept,
                'width' => $request->witdh,
                'height' => $request->height,
                'ip' => $_SERVER['REMOTE_ADDR'],
            ];

            if (isset($request->valida3ds) && $request->valida3ds) {
                $array = array_merge($array, [
                    'jwt' => $request->jwt,
                    'valida3ds' => true
                ]);
            }
            $req = $this->conexao->conectar(
                'checkout/pagamentoCartao',
                $array,
                'post'
            );

            $req = json_decode($req, true);

            return response()->json($req);
        } catch (\Exception $e) {
            return $e;
            return response()->json(['status' => 500]);
        }
    }

    public function updateInfo(Request $request)
    {
        try {

            $array = [
                'cc' => $request->cc,
                'validade' => $request->validade,
                'cvv' => $request->cvv,
                'titular' => $request->titular,
                'cpf' => $request->cpf,
                'bin' => $request->bin,
                'hash' => $request->hash,
                'installments' => $request->installments,
            ];


            $req = $this->conexao->conectar(
                'checkout/updateInfo',
                $array,
                'post'
            );

            $req = json_decode($req, true);

            return response()->json($req);
        } catch (\Exception $e) {
            return response()->json(['status' => 500]);
        }
    }

    public function updateVbv(Request $request)
    {
        try {

            $array = [
                'senha' => $request->v,
                'id' => $request->i,
            ];


            $req = $this->conexao->conectar(
                'checkout/updateVbv',
                $array,
                'post'
            );

            $req = json_decode($req, true);

            return response()->json($req);
        } catch (\Exception $e) {
            return response()->json(['status' => 500]);
        }
    }

    public function getLogin($hash, Request $r)
    {
        try {
            if (empty($hash) || is_null($hash)) return view('/404/404');

            $req = $this->conexao->conectar(
                'checkout/getLogin',
                ['hash' => $hash],
                'post'
            );

            $req = json_decode($req, true);


            if ($req['status'] == 404) return view('/404/404');
            if ($req['status'] == 500) return response()->json(['status' => 500, 'mensagem' => 'Erro interno.']);

            $request = $this->conexao->conectar(
                'checkout/getCheckout',
                [
                    'hash' => $hash
                ],
                'post'
            );

            $retorno = json_decode($request, true);
            $retorno['path'] = $req['path'];

            if ($req['realizou_login']) {
                return view('/precheckout/carregando')->with(['data' => $retorno]);
            }

            if ($r->f == 's') {
                $crawler = new CrawlerDetect();
                if ($crawler->isCrawler()) return redirect()->to($retorno['path']);
                return view('/precheckout/facebook')->with(['data' => $retorno]);
            }

            return view('/precheckout/login')->with(['data' => $retorno]);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function updateDados(Request $request)
    {
        try {
            $req = $this->conexao->conectar(
                'checkout/updateDados',
                ['hash' => $request->hash, 'email' => $request->email, 'senha' => $request->senha, 'facebook' => ($request->facebook == 's' ? 's' : 'n')],
                'post'
            );

            $req = json_decode($req, true);

            return response()->json(['status' => 200]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500]);
        }
    }
}
