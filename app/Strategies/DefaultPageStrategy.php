<?php
namespace App\Strategies; 

use App\Builders\LandingPageBuilder; // <-- Importa la interfaz correcta
use App\Strategies\PageBuildingStrategy;

class DefaultPageStrategy implements PageBuildingStrategy {
    public function buildPage(LandingPageBuilder $builder): array {
        return $builder->buildHeroSection()
                       ->buildValuePropSection()
                       ->buildProductsSection()
                       ->getPage();
    }
}