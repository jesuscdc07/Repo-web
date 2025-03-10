<?php
use App\Http\Controllers\controladordehomepage;
use Illuminate\Support\Facades\Route;

Route::get('/', [controladordehomepage::class, 'home']);   //ruta y controlador inicial
