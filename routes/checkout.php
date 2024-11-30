<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\VerificaToken;
/*
|--------------------------------------------------------------------------
| JSPH KLAU$ :D
|--------------------------------------------------------------------------
|
| ROTAS PROTEGIDAS PELO TOKEN!
|
*/


Route::get('/mid', function () {
    return view('welcome');
});
