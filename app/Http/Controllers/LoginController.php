<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function getRotaApi()
    {
        $query = DB::select(DB::raw('SELECT rota_api FROM rota_api'));
        return $query[0]->rota_api;
    }

    public function headersRequisicao($token = '')
    {
        $lista = [
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];

        return $lista;
    }

    public function getStatusToken($token)
    {
        $verificaStatusToken = Http::get($this->getRotaApi() . '/api/statusToken', [
            'token' => $token
        ]);

        $jsonRetorno = json_decode($verificaStatusToken->body(), true);

        if ($jsonRetorno['status'] == 401) {
            return false;
        }
    }

    public function statusApi()
    {
        $data = session('usuario_checkout');
        $verifica = Http::withHeaders([
            'Authorization' => 'Bearer ' . $data['api_token']
        ])->get($data['url_api'] . 'verificaToken');

        $retorno = json_decode($verifica, true);

        if ($retorno['status'] == 200) {
            return response()->json([
                'status' => 200
            ]);
        } else {
            session()->put('usuario_checkout', null);
            return response()->json([
                'status' => 401
            ]);
        }
    }

    public function getListaCsrf()
    {
        return ['X-CSRF-TOKEN' => csrf_token()];
    }

    public function usuario()
    {
        return response()->json(session('usuario_checkout'));
    }

    public function autenticaUsuario(Request $request)
    {
        $rotaapi = $this->getRotaApi();

        $login = Http::get($rotaapi . 'autenticaUsuario', [
            'usuario' => $request->usuario,
            'senha' => $request->senha
        ]);

        $response = json_decode($login, true);

        if ($response['status'] == 200) {
            $lista_sessao = [
                'api_token' => $response['api_token'],
                'tipo_usuario' => $response['tipo_usuario'],
                'token_checkout' => $response['token_checkout'],
                'id_usuario' => $response['id_usuario'],
                'usuario' => $response['usuario'],
                'suitpay' => $response['suitpay'],
                'cor' => ($response['cor_tema'] != null ? $response['cor_tema'] : null),
                'url_api' => $this->getRotaApi()
            ];
            session()->put('usuario_checkout', $lista_sessao);

            return response()->json([
                'status' => 200,
                'usuario' => $response['usuario'],
                'mensagem' => 'Autorizado com sucesso.'
            ]);
        } else {
            return response()->json([
                'status' => $response['status'],
                'mensagem' => 'Não autorizado.'
            ]);
        }
    }

    public function indexLogin()
    {
        if (!empty(session('usuario_checkout'))) {
            return redirect('/gestor');
        }
        return view('login');
    }

    public function gestor()
    {
        $data = session('usuario_checkout');
        session()->put('url_api', $this->getRotaApi() . '/api/');
     
        return view('dashboard')->with('data', $data); 

    }

    public function destroiSessao()
    {
        session()->forget('usuario_checkout');
        session()->flush();

        return true;
    }
}
