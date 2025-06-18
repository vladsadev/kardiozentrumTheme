// src/js/components/modals.js
export function initModals() {
    // Get all modal triggers
    const modalTriggers = document.querySelectorAll('[data-modal-target]');
    const closeButtons = document.querySelectorAll('[data-modal-close]');

    if (!modalTriggers.length) return;

    // Setup modal triggers
    modalTriggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const modalId = trigger.getAttribute('data-modal-target');
            const modal = document.getElementById(modalId);

            if (modal) {
                // Show modal and prevent body scrolling
                modal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');

                // Add animation class
                setTimeout(() => {
                    modal.querySelector('.modal-container').classList.add('scale-100', 'opacity-100');
                }, 10);
            }
        });
    });

    // Setup close buttons
    closeButtons.forEach(button => {
        button.addEventListener('click', closeModal);
    });

    // Close on backdrop click
    document.addEventListener('click', (event) => {
        if (event.target.classList.contains('modal-backdrop')) {
            closeModal(event);
        }
    });

    // Close on ESC key
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            const openModal = document.querySelector('.modal-backdrop:not(.hidden)');
            if (openModal) {
                closeModal({ target: openModal });
            }
        }
    });

    function closeModal(event) {
        const modal = event.target.closest('.modal-backdrop');
        if (!modal) return;

        // Remove animation class first
        const container = modal.querySelector('.modal-container');
        container.classList.remove('scale-100', 'opacity-100');

        // Hide modal after animation completes
        setTimeout(() => {
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }, 300);
    }
}