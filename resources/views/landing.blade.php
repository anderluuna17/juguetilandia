<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juguetilandia</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @if (isset($hero_slides))
    <div class="carousel-container">
        
        <div class="carousel-slides">
            @foreach ($hero_slides as $slide)
            <div class="carousel-slide" style="background-image: url('{{ asset($slide['image']) }}')">
                <div class="slide-content">
                    <h1>{{ $slide['title'] }}</h1>
                    <p>{{ $slide['subtitle'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <button class="carousel-btn prev" id="prevBtn">‹</button>
        <button class="carousel-btn next" id="nextBtn">›</button>
        
    </div>
    @endif

</body>
</html>