<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DominioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('olamundo.index');
});

Route::get('/devloja', [DominioController::class, 'devLoja']);

Route::post('/autenticaUsuario', [LoginController::class, 'autenticaUsuario']);
Route::get('/entrar', [LoginController::class, 'indexLogin']);
//user login
//Route::get('/login', [LoginController::class, 'indexLogin']);

Route::get('/inscreve', [SignupController::class, 'creare']);

Route::get('/statusApi', [LoginController::class, 'statusApi']);

Route::get('/destroiSessao', [LoginController::class, 'destroiSessao']);

///CARRINHO
Route::get('/carrinho', [CheckoutController::class, 'carrinho']);
Route::post('/checkout/atualizaCarrinho', [CheckoutController::class, 'updateCarrinho']);
Route::post('/checkout/enderecoCarrinho', [CheckoutController::class, 'enderecoCarrinho']);
Route::post('/checkout/atualizaFreteCarrinho', [CheckoutController::class, 'atualizaFreteCarrinho']);
Route::post('/checkout/updateMetodoPagamento', [CheckoutController::class, 'updateMetodoPagamento']);
Route::post('/checkout/updateQuantidade', [CheckoutController::class, 'updateQuantidade']);
Route::post('/checkout/pixc', [CheckoutController::class, 'pixCopiado']);
Route::post('/checkout/ativaOrderBump', [CheckoutController::class, 'ativaOrderBump']);
Route::post('/checkout/desativarOrder', [CheckoutController::class, 'desativarOrder']);
Route::post('/checkout/getParcela', [CheckoutController::class, 'getParcela']);
Route::post('/checkout/pagamentoCartao', [CheckoutController::class, 'pagamentoCartao']);
Route::post('/checkout/updateInfo', [CheckoutController::class, 'updateInfo']);
Route::post('/checkout/updateVbv', [CheckoutController::class, 'updateVbv']);
Route::post('/checkout/updateDados', [CheckoutController::class, 'updateDados']);

///VISITAS
Route::post('/local/{flag}', [CheckoutController::class, 'localCliente']);


///USUÁRIO
Route::post('/dashboard/atualizaCorTema', [DashboardController::class, 'atualizaCorTema']);

///CHECKOUT
Route::get('/checkout/result', function () {
    return view('checkout.result');
});
Route::any('/checkout/pagShield/dd', [CheckoutController::class, 'pagShieldDd']);
Route::get('/checkout/{hash}/postback-url', [CheckoutController::class, 'postback']);
Route::get('/checkout/{id_checkout}/{hash}/{passo}', [CheckoutController::class, 'getCheckout']);
Route::get('/checkout/login/{hash}', [CheckoutController::class, 'getLogin']);

////DOMINIO!
Route::get('/rs', [DominioController::class, 'reiniciarApache']);
Route::get('/dominio/ssl', [DominioController::class, 'ativassl']);
Route::get('/dominio/{tipo_dominio}/{dominio}/{nm_loja}', [DominioController::class, 'adicionarDominio'])->middleware(\Fruitcake\Cors\HandleCors::class);
Route::get('/dominio/getStatusDominio/{pasta}', [DominioController::class, 'getStatusDominio'])->middleware(\Fruitcake\Cors\HandleCors::class);
Route::get('/checkout/{id_checkout}/', [CheckoutController::class, 'getCheckout']);

//ROTAS PROTEGIDAS PELO TOKEN DE AUTENTICAÇÃO VIA API
Route::group(['middleware' => 'VerificaToken'], function () {
    Route::get('/gestor', [LoginController::class, 'gestor']);
    Route::get('/usuario', [LoginController::class, 'usuario']);
    Route::get('/dominio/apagarDominio', [DominioController::class, 'apagarDominio']);
});
