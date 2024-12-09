<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SignupController extends Controller
{
    public function creare()
    {
        $apiBaseUrl = DB::table('rota_api')->value('rota_api') ?? abort(404);

        return view('signup', compact('apiBaseUrl'));
    }
}
