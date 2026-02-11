/**
 * Siloam College - Main JavaScript
 * Optimized for performance
 */

// ==================== Dark Mode Toggle (Global) ====================
function toggleDarkMode() {
    const html = document.documentElement;
    const isDark = html.getAttribute('data-bs-theme') === 'dark';

    if (isDark) {
        html.setAttribute('data-bs-theme', 'light');
        localStorage.setItem('theme', 'light');
    } else {
        html.setAttribute('data-bs-theme', 'dark');
        localStorage.setItem('theme', 'dark');
    }

    // Update toggle checkbox state
    const toggle = document.getElementById('darkModeToggle');
    if (toggle) {
        toggle.checked = !isDark;
    }
}

// Initialize dark mode from saved preference
function initDarkMode() {
    const savedTheme = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const theme = savedTheme || (prefersDark ? 'dark' : 'light');

    document.documentElement.setAttribute('data-bs-theme', theme);

    const toggle = document.getElementById('darkModeToggle');
    if (toggle) {
        toggle.checked = theme === 'dark';
    }
}

// ==================== Locale/Language Switcher (Global) ====================
function setLocale(locale) {
    localStorage.setItem('locale', locale);

    // Update checkmarks
    document.getElementById('lang-en-check')?.classList.toggle('d-none', locale !== 'en');
    document.getElementById('lang-sw-check')?.classList.toggle('d-none', locale !== 'sw');

    // Redirect to Laravel locale switching route
    window.location.href = '/locale/' + locale;
}

// Initialize locale from saved preference
function initLocale() {
    const savedLocale = localStorage.getItem('locale') || 'en';

    document.getElementById('lang-en-check')?.classList.toggle('d-none', savedLocale !== 'en');
    document.getElementById('lang-sw-check')?.classList.toggle('d-none', savedLocale !== 'sw');
}

// ==================== Main Application Code ====================
(function() {
    'use strict';

    // ==================== Phone Input (International) ====================
    function initPhoneInput() {
        const phoneInput = document.querySelector("#phone");
        if (!phoneInput || typeof window.intlTelInput !== 'function') return;

        const iti = window.intlTelInput(phoneInput, {
            initialCountry: "ke", // Default to Kenya
            preferredCountries: ["ke", "ug", "tz"],
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js",
        });

        // Replace phone value with full international number on submit
        if (phoneInput.form) {
            phoneInput.form.addEventListener("submit", function() {
                phoneInput.value = iti.getNumber();
            });
        }
    }

    // ==================== Navbar Scroll Behavior ====================
    function initNavbarScroll() {
        const navbar = document.getElementById("mainNavbar");
        if (!navbar) return;

        let lastScrollTop = 0;
        let ticking = false;

        window.addEventListener("scroll", function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                    if (scrollTop > lastScrollTop && scrollTop > 100) {
                        // Scrolling down - hide navbar (use transform for better performance)
                        navbar.style.transform = "translateY(-100%)";
                    } else {
                        // Scrolling up - show navbar
                        navbar.style.transform = "translateY(0)";
                    }

                    lastScrollTop = scrollTop;
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });

        // Add transition for smooth animation
        navbar.style.transition = "transform 0.3s ease";
    }

    // ==================== Dropdown Submenu ====================
    function initDropdownSubmenu() {
        document.querySelectorAll('.dropdown-submenu > a').forEach(function(el) {
            el.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const submenu = this.nextElementSibling;
                if (submenu) {
                    submenu.classList.toggle('show');
                }
            });
        });
    }

    // ==================== Initialize on DOM Ready ====================
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    function init() {
        initPhoneInput();
        initNavbarScroll();
        initDropdownSubmenu();
        initDarkMode();
        initLocale();
    }

})();
