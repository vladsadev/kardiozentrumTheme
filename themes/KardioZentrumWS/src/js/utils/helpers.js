// src/js/utils/helpers.js
/**
 * Debounce function for performance optimization
 * @param {Function} func - Function to debounce
 * @param {number} wait - Milliseconds to wait
 * @return {Function} - Debounced function
 */
export function debounce(func, wait = 100) {
    let timeout;
    return function(...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            func.apply(this, args);
        }, wait);
    };
}

/**
 * Format date to locale string
 * @param {string|Date} date - Date to format
 * @return {string} - Formatted date
 */
export function formatDate(date) {
    const d = new Date(date);
    return d.toLocaleDateString(document.documentElement.lang || 'es-ES', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
}

/**
 * Check if an element is in viewport
 * @param {HTMLElement} el - Element to check
 * @param {number} offset - Offset in pixels
 * @return {boolean} - True if element is in viewport
 */
export function isInViewport(el, offset = 0) {
    if (!el) return false;

    const rect = el.getBoundingClientRect();
    return (
        rect.top <= (window.innerHeight + offset) &&
        rect.bottom >= (0 - offset)
    );
}