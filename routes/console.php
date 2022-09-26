<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

/*
//Endereço que o usuário digita na página de navegação.

//Há dois tipos de rotas: API e Channels (???)


//"Hoje criamos programas que são reutilizáveis; por isso temos o Composer."
//API: Programa que fica em determinado lugar, para podermos reaproveitá-lo. Usá-lo.
//Com Laravel criamos APIs.

//Channels: Bancos de Dados em tempo real.
//Quando a informação chega, channel te avisa. 

*/