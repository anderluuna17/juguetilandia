<?php

namespace App\Builders;

class DefaultPageBuilder implements LandingPageBuilder
{
    private $page = [];

public function buildHeroSection()
{
    $this->page['hero_slides'] = [
        [ 'image' => '/images/image.png', 'title' => '...', 'subtitle' => '...'],
        [ 'image' => '/images/image-2.png', 'title' => '...', 'subtitle' => '...'],
    ];
    return $this;
}
    // ▼▼▼ ESTOS SON LOS MÉTODOS QUE FALTAN ▼▼▼

    public function buildValuePropSection() {
        // Puedes añadir la lógica después, pero la función DEBE existir
        // $this->page['value_prop'] = [ ... ];
        return $this;
    }

    public function buildProductsSection() {
        // $this->page['products'] = [ ... ];
        return $this;
    }

    public function buildChristmasBannerSection() {
        // $this->page['christmas_banner'] = [ ... ];
        return $this;
    }

    // Este método ya lo tenías
    public function getPage(): array {
        return $this->page;
    }
}