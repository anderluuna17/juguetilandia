<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Muestra la página de inicio (landing page).
     */
    public function show()
    {
        // Esta línea le dice a Laravel que busque y muestre el archivo
        // resources/views/landing.blade.php
        return view('landing');
    }
}