<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function atualizaCorTema(Request $request){

        session('usuario_checkout')['cor'] = $request->cor;

        return response()->json(['status' => 200]);
    }
}
