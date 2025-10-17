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
        $builder = new DefaultPageBuilder(); // Contratamos al equipo de construcción
        $strategy = null;

        // Decidimos qué plano usar según la temporada
        if (date('m') == 10) { // Si es Diciembre
            $strategy = new ChristmasPageStrategy();
        } else {
            $strategy = new DefaultPageStrategy();
        }

        // Le decimos al Jefe de Obra que construya la página usando al equipo
        $pageData = $strategy->buildPage($builder);

        return view('landing', $pageData);
    }
}