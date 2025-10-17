<?php

namespace App\Strategies; 

use App\Builders\LandingPageBuilder; // <-- Importa la interfaz correcta
use App\Strategies\PageBuildingStrategy; // Importa la interfaz que implementa

class ChristmasPageStrategy implements PageBuildingStrategy {
    public function buildPage(LandingPageBuilder $builder): array {
        // El plan de construcción para Navidad es diferente.
        // Añade un banner y no muestra la propuesta de valor.
        return $builder->buildChristmasBannerSection() // Sección especial
                       ->buildHeroSection()
                       ->buildProductsSection()
                       ->getPage();
    }
}