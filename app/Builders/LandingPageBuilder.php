<?php

namespace App\Builders;

interface LandingPageBuilder
{
    public function buildHeroSection();
    public function buildValuePropSection();
    public function buildProductsSection();
    public function buildChristmasBannerSection(); // Asegúrate que este método esté aquí
    public function getPage(): array;
}