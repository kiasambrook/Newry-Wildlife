import $ from "jquery";

$(document).ready(function () {
    // Add this script at the end of your HTML body or in a separate JavaScript file

    // Get the toggle button and mobile menu overlay
    const toggleBtn = document.getElementById('menu-toggle');
    const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
    const closeBtn = document.getElementById('close-btn');

    // Toggle mobile menu visibility on toggle button click
    toggleBtn.addEventListener('click', () => {
        mobileMenuOverlay.classList.remove('hidden');
        mobileMenuOverlay.classList.add('mobile-menu-overlay-active');
    });

    closeBtn.addEventListener('click', () => {
        mobileMenuOverlay.classList.add('hidden');
        mobileMenuOverlay.classList.remove('mobile-menu-overlay-active');
    });
});
