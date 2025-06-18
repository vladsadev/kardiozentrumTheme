document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper', {
        loop: true,
        speed: 1000,
        spaceBetween: 30,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        grapCursor: true,
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            // 1024: {
            //   slidesPerView: 3,
            // },
        },
    });
});