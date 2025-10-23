<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use App\Builders\DefaultPageBuilder;
use App\Strategies\ChristmasPageStrategy;
use App\Strategies\DefaultPageStrategy;
use App\Builders\LandingPageBuilder;

class LandingPageController extends Controller
{
    public function show()
    {
        // 1. Creamos el constructor
        $builder = new DefaultPageBuilder(); 
        
        // 2. FORZAMOS la estrategia por defecto (la que tiene el carrusel)
        $strategy = new DefaultPageStrategy(); 
    
        // 3. Construimos la página
        $pageData = $strategy->buildPage($builder);
        
        // 4. Enviamos los datos a la vista
        return view('landing', $pageData);
    }
}