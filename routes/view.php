<?php

use Illuminate\Support\Facades\Route;

/**
 * OBS:
 * Para que o Laravel identifique outros arquivos como arquivos
 * de rota, os mesmos devem ser adicionados em:
 *
 *      @return \App\Providers\RouteServiceProvider
 */

/**
 * Retorna uma view, por padrão é desconsiderado o sufixo ".blade.php"
 */
Route::get('/', function () {

    // "view" é um helper do próprio Laravel, basicamente uma função global.
    return view('welcome');
});

/**
 * Para indicar uma view dentro de algum diretório basta usar um "." ou "/" separando
 * o diretório da view.
 *
 * -- patch: message/welcome.blade.php
 *
 * -- usage: message.welcome
 *
 * OBS: O diretório informado leva como base uma view dentro da pasta padrão
 * do Laravel
 */
Route::get('/welcome', function () {
    return view('message.welcome');
});

Route::get('/welcome2', function () {
    return view('message/welcome2');
});
