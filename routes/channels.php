<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
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