<?php

namespace App\Builders;

class DefaultPageBuilder implements LandingPageBuilder
{
    private $page = [];

    public function buildHeroSection() { /* ... */ return $this; }
    public function buildValuePropSection() { /* ... */ return $this; }
    public function buildProductsSection() { /* ... */ return $this; }

    // Podríamos añadir secciones especiales
    public function buildChristmasBannerSection() {
        $this->page['christmas_banner'] = [
            'message' => '¡Felices Fiestas! Encuentra el regalo perfecto.',
            'image' => 'images/banner-navidad.jpg'
        ];
        return $this;
    }

    public function getPage(): array { return $this->page; }
}