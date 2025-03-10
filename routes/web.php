<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');   //cambiar welcome por ruta personalizada
});

