<?php

//use Illuminate.Support\Facades\Route;
use App\Http\Controllers\LandingPageController; // Importamos el controlador

// Esta es la ruta principal de tu sitio web
Route::get('/', [LandingPageController::class, 'show']);