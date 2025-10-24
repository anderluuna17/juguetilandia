<?php

namespace App\Builders;

class DefaultPageBuilder implements LandingPageBuilder
{
    private $page = [];

public function buildHeroSection()
{
    $this->page['hero_slides'] = [
        [ 'image' => '/images/image.png', 'title' => 'LOS MEJORES JUGUETES', 'subtitle' => 'DESARROLLO, AGILIDAD Y MÁS'],
        [ 'image' => '/images/image-2.png', 'title' => 'MOMENTOS CLAVES', 'subtitle' => 'LOS JUGUETES SIEMPRE SERÁN UN BUEN CAMINO PARA EL DESARROLLO'],
    ];
    return $this;
}
    public function buildValuePropSection() {
        $this->page['value_props'] = [
            [
                'title' => '¿Quienes somos?',
                'text' => 'Somos un equipo de creadores apasionados que creemos que un juguete es mucho más que un objeto: es una chispa para la imaginación, una herramienta para descubrir el mundo y el cómplice de las mejores aventuras. Nos dedicamos a diseñar juguetes seguros, duraderos y, sobre todo, capaces de crear momentos inolvidables de alegría y aprendizaje para los más pequeños.',
                'image' => asset('images/niños1.jpg'), 
                'css_class' => 'bg-purple',
                'text_color' => 'text-white'
            ],
            [
                'title' => 'CREA MOMENTOS QUE INSPIREN SUS IDEAS',
                'text' => 'Con la herramienta correcta, cada momento de diversión se convierte en un peldaño en su desarrollo. Es hora de despertar su genio jugando.',
                'image' => asset('images/niños2.jpg'),
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

    public function getPage(): array {
        return $this->page;
    }
}