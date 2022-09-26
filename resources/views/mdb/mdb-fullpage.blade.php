    @include('mdb.cabecalho', ['title' => 'Home'])
  <!-- Aqui começa o CONTEÚDO -->  <!-- "AQUI QUEM CUIDA É O .blade" -->
    
    @yield('content')
    
  <!-- Aqui termina o CONTEÚDO -->

    @include('mdb.rodape')




<?php
/*

O Blade é uma Template Engine: "motor de renderização"/ Sistema de renderização

*/
?>