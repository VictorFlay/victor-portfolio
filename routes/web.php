<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/servico', function () {
    return view('servico');
});

Route::get('/portfolio-home', function () {
    return view('portfolio-home');
});

Route::get('/pizzaria-home', function () {
    return view('pizzaria-home');
});

Route::get('/pizzaria-cardapio', function () {
    return view('pizzaria-cardapio');
});
Route::get('/pizzaria-sobre', function () {
    return view('pizzaria-sobre');
});


//routes>web.php     Caminho das rotas
//resources>views>   Caminho das views


/*
//Endereço que o usuário digita na página de navegação.

//Há dois tipos de rotas: API e Channels (???)


//"Hoje criamos programas que são reutilizáveis; por isso temos o Composer."
//API: Programa que fica em determinado lugar, para podermos reaproveitá-lo. Usá-lo.
//Com Laravel criamos APIs.

//Channels: Bancos de Dados em tempo real.
//Quando a informação chega, channel te avisa. 

"Criar rota é a parte mais básica de desenvolvimento com Laravel"

*/