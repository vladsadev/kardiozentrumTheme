document.addEventListener('DOMContentLoaded', function () {
    // Obtenemos la ruta actual
    const rutaActual = window.location.pathname;
    const topInfoBar = document.getElementById('top-information-bar');

    // Comprobar si estamos en la página de inicio
    if (rutaActual === '/') {
        // Código específico para la página de inicio
        window.addEventListener('scroll', function () {
            // Posición actual del scroll
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            // console.log(scrollTop);
            if (scrollTop > 150) {
                topInfoBar.style.display = 'none';
            } else {
                topInfoBar.style.display = 'block';
            }

        });
    } else if (rutaActual != '/') {
        topInfoBar.style.display = 'none';

    }
});