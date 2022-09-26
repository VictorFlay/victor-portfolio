<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/*
//Endereço que o usuário digita na página de navegação.

//Há dois tipos de rotas: API e Channels (???)


//"Hoje criamos programas que são reutilizáveis; por isso temos o Composer."
//API: Programa que fica em determinado lugar, para podermos reaproveitá-lo. Usá-lo.
//Com Laravel criamos APIs.

//Channels: Bancos de Dados em tempo real.
//Quando a informação chega, channel te avisa. 

*/