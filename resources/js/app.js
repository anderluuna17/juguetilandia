
document.addEventListener("DOMContentLoaded", () => {

    // 1. Encontramos nuestros elementos
    const slides = document.querySelectorAll(".carousel-slide");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    // Si no hay slides, no hacemos nada
    if (slides.length === 0) {
        return;
    }

    let currentSlide = 0;

    // 2. Función para mostrar el slide correcto
    function showSlide(index) {
        // Ocultamos todos los slides
        slides.forEach(slide => {
            slide.style.display = 'none';
        });

        // Mostramos solo el slide que queremos
        slides[index].style.display = 'flex';
    }

    // 3. Lógica de los botones
    nextBtn.addEventListener('click', () => {
        currentSlide++;
        if (currentSlide >= slides.length) {
            currentSlide = 0; // Volvemos al inicio
        }
        showSlide(currentSlide);
    });

    prevBtn.addEventListener('click', () => {
        currentSlide--;
        if (currentSlide < 0) {
            currentSlide = slides.length - 1; // Vamos al final
        }
        showSlide(currentSlide);
    });

    // 4. Mostrar el primer slide al cargar la página
    showSlide(currentSlide);
});
