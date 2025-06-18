class MedicalScroller {
    constructor() {
        this.scroller = document.querySelector('.scroller');
        this.scrollerInner = document.querySelector('.scroller__inner');
        this.controls = document.querySelectorAll('.control-btn');
        this.reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
        this.isPlaying = true;
        this.currentDirection = 'left';
        this.currentSpeed = 'normal';

        this.init();
    }

    init() {
        if (!this.reducedMotion) {
            this.addAnimation();
        }

        this.bindEvents();
        this.addHoverPause();
        this.addIntersectionObserver();
    }

    addAnimation() {
        if (this.scroller.hasAttribute('data-animated')) return;

        this.scroller.setAttribute('data-animated', 'true');

        // Duplicar contenido
        const originalCards = Array.from(this.scrollerInner.children);
        const fragment = document.createDocumentFragment();

        originalCards.forEach(card => {
            const duplicate = card.cloneNode(true);
            duplicate.setAttribute('aria-hidden', 'true');
            duplicate.classList.add('duplicated');
            fragment.appendChild(duplicate);
        });

        this.scrollerInner.appendChild(fragment);
    }

    bindEvents() {
        this.controls.forEach(btn => {
            btn.addEventListener('click', () => {
                const action = btn.dataset.action;
                this.handleControl(action, btn);
            });
        });

        // Listener para prefers-reduced-motion
        window.matchMedia("(prefers-reduced-motion: reduce)")
            .addEventListener('change', (e) => {
                this.reducedMotion = e.matches;
                this.toggleAnimations();
            });
    }

    handleControl(action, btn) {
        // Actualizar estados activos
        this.updateActiveState(btn, action);

        switch (action) {
            case 'play':
                this.play();
                break;
            case 'pause':
                this.pause();
                break;
            case 'direction':
                this.toggleDirection();
                break;
            case 'speed-slow':
                this.setSpeed('slow');
                break;
            case 'speed-normal':
                this.setSpeed('normal');
                break;
            case 'speed-fast':
                this.setSpeed('fast');
                break;
        }
    }

    updateActiveState(clickedBtn, action) {
        if (action.includes('speed') || action === 'play' || action === 'pause') {
            // Para botones mutuamente excluyentes
            const group = action.includes('speed') ? 'speed' : 'playback';

            this.controls.forEach(btn => {
                const btnAction = btn.dataset.action;
                if (group === 'speed' && btnAction.includes('speed')) {
                    btn.classList.remove('active');
                } else if (group === 'playback' && (btnAction === 'play' || btnAction === 'pause')) {
                    btn.classList.remove('active');
                }
            });
        }

        clickedBtn.classList.add('active');
    }

    play() {
        this.isPlaying = true;
        this.scrollerInner.style.animationPlayState = 'running';
    }

    pause() {
        this.isPlaying = false;
        this.scrollerInner.style.animationPlayState = 'paused';
    }

    toggleDirection() {
        this.currentDirection = this.currentDirection === 'left' ? 'right' : 'left';
        this.scroller.setAttribute('data-direction', this.currentDirection);

        // Actualizar el texto del botón
        const dirBtn = document.querySelector('[data-action="direction"]');
        const icon = dirBtn.querySelector('i');
        icon.className = this.currentDirection === 'left' ? 'fas fa-arrow-left' : 'fas fa-arrow-right';
    }

    setSpeed(speed) {
        this.currentSpeed = speed;
        this.scroller.setAttribute('data-speed', speed);
    }

    addHoverPause() {
        if (this.scroller.hasAttribute('data-pause-on-hover')) {
            this.scroller.addEventListener('mouseenter', () => {
                if (this.isPlaying) {
                    this.scrollerInner.style.animationPlayState = 'paused';
                }
            });

            this.scroller.addEventListener('mouseleave', () => {
                if (this.isPlaying) {
                    this.scrollerInner.style.animationPlayState = 'running';
                }
            });
        }
    }

    addIntersectionObserver() {
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && this.isPlaying) {
                        this.scrollerInner.style.animationPlayState = 'running';
                    } else {
                        this.scrollerInner.style.animationPlayState = 'paused';
                    }
                });
            }, {threshold: 0.1});

            observer.observe(this.scroller);
        }
    }

    toggleAnimations() {
        if (this.reducedMotion) {
            this.scroller.removeAttribute('data-animated');
            const duplicated = this.scroller.querySelectorAll('.duplicated');
            duplicated.forEach(el => el.remove());
        } else {
            this.addAnimation();
        }
    }
}
const rutaActual = window.location.pathname;

if (rutaActual === '/') {
    // Código específico para la página de inicio
    // Inicializar cuando el DOM esté listo
    document.addEventListener('DOMContentLoaded', () => {
        window.medicalScroller = new MedicalScroller();

        // Animaciones de entrada
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = '0.2s';
                    entry.target.classList.add('fade-in-up');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-up').forEach(el => {
            observer.observe(el);
        });
    });

}

