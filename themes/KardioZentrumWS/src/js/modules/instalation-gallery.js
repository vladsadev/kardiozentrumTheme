document.addEventListener('DOMContentLoaded', function() {
    console.log("ok, en carga");
    const InstallationsGallery = {
        init() {
            this.bindEvents();
            this.setupAccessibility();
        },

        bindEvents() {
            // Category navigation
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    const categoryIndex = e.currentTarget.dataset.category;
                    this.switchCategory(categoryIndex);
                });
            });

            // Carousel navigation
            document.querySelectorAll('.carousel-btn').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    const direction = e.currentTarget.dataset.direction;
                    const carousel = e.currentTarget.closest('.images-carousel');
                    const categoryIndex = carousel.dataset.category;
                    this.scrollCarousel(categoryIndex, direction);
                });
            });

            // Image modal
            document.querySelectorAll('.image-item img').forEach(img => {
                img.addEventListener('click', (e) => {
                    this.openModal(e.target.dataset.full || e.target.src, e.target.alt);
                });
            });

            // Close modal
            document.getElementById('close-modal')?.addEventListener('click', () => {
                this.closeModal();
            });

            document.getElementById('image-modal')?.addEventListener('click', (e) => {
                if(e.target.id === 'image-modal') {
                    this.closeModal();
                }
            });

            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if(e.key === 'Escape') {
                    this.closeModal();
                }
            });
        },

        switchCategory(categoryIndex) {
            // Update navigation
            document.querySelectorAll('.category-btn').forEach((btn, index) => {
                if(index == categoryIndex) {
                    btn.classList.add('active', 'bg-blue-600', 'text-white', 'shadow-lg', 'transform', 'scale-105');
                    btn.classList.remove('bg-gray-100', 'text-gray-700');
                } else {
                    btn.classList.remove('active', 'bg-blue-600', 'text-white', 'shadow-lg', 'transform', 'scale-105');
                    btn.classList.add('bg-gray-100', 'text-gray-700');
                }
            });

            // Update content with smooth transition
            document.querySelectorAll('.category-content').forEach((content, index) => {
                if(index == categoryIndex) {
                    content.classList.remove('opacity-0', 'hidden');
                    content.classList.add('opacity-100', 'block');
                } else {
                    content.classList.add('opacity-0', 'hidden');
                    content.classList.remove('opacity-100', 'block');
                }
            });

            // Smooth scroll to top of gallery
            document.getElementById('installations-gallery')?.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        },

        scrollCarousel(categoryIndex, direction) {
            const container = document.querySelector(`.images-carousel[data-category="${categoryIndex}"] .images-container`);
            if(!container) return;

            const scrollAmount = 340; // ancho de imagen + gap
            const newScrollLeft = direction === 'next'
                ? container.scrollLeft + scrollAmount
                : container.scrollLeft - scrollAmount;

            container.scrollTo({
                left: newScrollLeft,
                behavior: 'smooth'
            });
        },

        openModal(imageSrc, imageAlt) {
            const modal = document.getElementById('image-modal');
            const modalImage = document.getElementById('modal-image');

            if(modal && modalImage) {
                modalImage.src = imageSrc;
                modalImage.alt = imageAlt;
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';

                // Focus management for accessibility
                modal.focus();
            }
        },

        closeModal() {
            const modal = document.getElementById('image-modal');
            if(modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }
        },

        setupAccessibility() {
            // Add ARIA labels
            document.querySelectorAll('.category-btn').forEach((btn, index) => {
                btn.setAttribute('aria-label', `Ver categoría ${btn.textContent.trim()}`);
                btn.setAttribute('role', 'tab');
            });

            document.querySelectorAll('.carousel-btn').forEach(btn => {
                const direction = btn.dataset.direction;
                btn.setAttribute('aria-label', direction === 'next' ? 'Siguiente imagen' : 'Imagen anterior');
            });
        }
    };

    // Initialize gallery if present
    if(document.getElementById('installations-gallery')) {
        InstallationsGallery.init();
    }
});