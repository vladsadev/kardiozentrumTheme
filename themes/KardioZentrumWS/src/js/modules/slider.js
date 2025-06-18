document.addEventListener('DOMContentLoaded', function () {
    // Obtener la ruta actual
    const rutaActual = window.location.pathname;
    // Comprobar si estamos en la página de inicio
    // if (rutaActual === '/' || rutaActual === '/index.html' || rutaActual === '/inicio') {
    if (rutaActual === '/') {
        // Código específico para la página de inicio
        JSSliderPaginaInicio();
    }
});

function JSSliderPaginaInicio() {
    // Variables para el slider
    const slides = document.querySelectorAll('.slide') ?? null;
    let currentSlide = 0;
    let interval;

    // Función para mostrar un slide específico
    function showSlide(index) {
        // Ocultar todos los slides
        slides.forEach(slide => {
            slide.classList.remove('active');
        });

        // Mostrar el slide actual
        slides[index].classList.add('active');
        currentSlide = index;
    }

    // Función para mostrar el siguiente slide
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    // Función para mostrar el slide anterior
    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    // Iniciar el slider automático
    function startSlider() {
        interval = setInterval(nextSlide, 5000); // Cambiar slide cada 5 segundos
    }

    // Detener el slider automático
    function stopSlider() {
        clearInterval(interval);
    }

    // Iniciar el slider
    startSlider();

}
