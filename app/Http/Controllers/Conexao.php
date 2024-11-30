<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Session\Session;

class Conexao extends Controller {

    private $urlApi;


    public function __construct(){
        $queryUrl = DB::select(DB::raw("
            SELECT rota_api
            FROM rota_api
        "));

        $this->urlApi = $queryUrl[0]->rota_api;
    }

    private function tokenApi(){
        return session('usuario_checkout')['api_token'];
    }

    public function conectar($metodo, $parametros = [], $tipo){
        try {
            $request = Http::$tipo( $this->urlApi . $metodo, $parametros,[
                $parametros
            ]);
            return $request->body();

        }catch(\Exception $e){
            return $e;
        }
        

    }

    
}