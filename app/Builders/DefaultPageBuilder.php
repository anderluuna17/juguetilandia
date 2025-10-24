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
        $this->page['value_props'] = [
            [
                'title' => 'Juguetes que inspiran mentes curiosas.',
                'text' => 'Fomentamos el aprendizaje y la creatividad a través del juego. ¡El regalo perfecto para su desarrollo!',
                'image' => asset('images/niños1.jpg'), // <-- Cambia esta imagen
                'css_class' => 'bg-purple',
                'text_color' => 'text-white'
            ],
            [
                'title' => 'CREA MOMENTOS QUE INSPIREN SUS IDEAS',
                'text' => 'Con la herramienta correcta, cada momento de diversión se convierte en un peldaño en su desarrollo. Es hora de despertar su genio jugando.',
                'image' => asset('images/niños2.jpg'), // <-- Cambia esta imagen
                'css_class' => 'bg-orange',
                'text_color' => 'text-dark'
            ]
        ];
        return $this;
    }

    public function buildProductsSection() {
        $this->page['products'] = [
            // El producto grande de la izquierda
            'featured' => [
                'image' => asset('images/juguetes1.jpg'),
                'alt' => 'Juguete de madera grande con formas'
            ],
            // El grid de 4 productos de la derecha
            'grid' => [
                [
                    'image' => asset('images/juguetes2.jpg'),
                    'alt' => 'Bloques de madera'
                ],
                [
                    'image' => asset('images/juguetes3.jpg'),
                    'alt' => 'Bloques de madera morados'
                ],
                [
                    'image' => asset('images/juguetes4.jpg'),
                    'alt' => 'Aros apilables'
                ],
                [
                    'image' => asset('images/juguetes5.jpg'),
                    'alt' => 'Juguete de madera pequeño'
                ],
            ]
        ];
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