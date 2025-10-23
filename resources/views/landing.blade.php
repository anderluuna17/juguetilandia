<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juguetilandia</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <header class="main-header">
        <nav class="main-nav">
            <div class="nav-brand"><a href="#" onclick="return false;">JUGUETILANDIA</a></div>
            <div class="nav-links">
                <a href="#" onclick="return false;">JUGUETES</a>
                <a href="#" onclick="return false;">CONÓCENOS</a>
            </div>
            <div class="nav-auth">
                <a href="#" onclick="return false;">Sign in</a>
                <a href="#" onclick="return false;" class="btn-signup">Sign up</a>
            </div>
        </nav>
    </header>

    <section class="hero-section">
        
        @if (isset($hero_slides))
        <div class="carousel-container"> <div class="carousel-slides">
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
        @else
        <div class="carousel-container" style="display:flex; align-items:center; justify-content:center; background-color:#fff; color:red;">
            <h1>Error: El controlador no está enviando los datos de $hero_slides.</h1>
        </div>
        @endif

    </section>

</body>
</html>