<?php
namespace App\Strategies; 

use App\Builders\LandingPageBuilder; // <-- IMPORTANTE: Añade esta línea
// app/Strategies/PageBuildingStrategy.php
interface PageBuildingStrategy {
    public function buildPage(LandingPageBuilder $builder): array;
}