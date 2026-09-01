/* ============================================================
   LIQUID GLASS PORTFOLIO — main.js (Vanilla JS)
   ============================================================ */
(function () {
    'use strict';

    /* ---------- 1. THEME (light / dark, localStorage, system default) ---------- */
    var themeToggle = document.getElementById('themeToggle');

    function applyTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
    }

    if (themeToggle) {
        themeToggle.addEventListener('click', function () {
            var current = document.documentElement.getAttribute('data-theme');
            applyTheme(current === 'dark' ? 'light' : 'dark');
        });
    }

    // Ikuti perubahan tema sistem jika user belum memilih manual
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function (e) {
        if (!localStorage.getItem('theme')) {
            applyTheme(e.matches ? 'dark' : 'light');
        }
    });

    /* ---------- 2. LOADING SCREEN ---------- */
    var loader = document.getElementById('loading-screen');
    window.addEventListener('load', function () {
        setTimeout(function () {
            if (loader) loader.classList.add('loaded');
        }, 600);
    });
    // Fallback: paksa hilang setelah 3.5 detik
    setTimeout(function () {
        if (loader) loader.classList.add('loaded');
    }, 3500);

    /* ---------- 3. SMOOTH SCROLL (Lenis + fallback anchor) ---------- */
    var lenis = null;
    if (typeof Lenis !== 'undefined' && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        lenis = new Lenis({ duration: 1.15, smoothWheel: true });
        function raf(time) { lenis.raf(time); requestAnimationFrame(raf); }
        requestAnimationFrame(raf);
    }

    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
        link.addEventListener('click', function (e) {
            var id = link.getAttribute('href');
            if (id.length < 2) return;
            var target = document.querySelector(id);
            if (!target) return;
            e.preventDefault();
            closeMobileMenu();
            if (lenis) {
                lenis.scrollTo(target, { offset: -70 });
            } else {
                window.scrollTo({ top: target.getBoundingClientRect().top + window.pageYOffset - 70, behavior: 'smooth' });
            }
        });
    });

    /* ---------- 4. NAVBAR: scroll state + hamburger ---------- */
    var navbar = document.getElementById('mainNavbar');
    var hamburger = document.getElementById('hamburger');
    var navMenu = document.getElementById('navMenu');
    var backToTop = document.getElementById('backToTop');

    function onScroll() {
        var y = window.pageYOffset;
        if (navbar) navbar.classList.toggle('scrolled', y > 40);
        if (backToTop) backToTop.classList.toggle('show', y > 480);
        updateActiveLink();
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    if (lenis) lenis.on('scroll', onScroll);

    function closeMobileMenu() {
        if (navMenu) navMenu.classList.remove('open');
        if (hamburger) {
            hamburger.classList.remove('open');
            hamburger.setAttribute('aria-expanded', 'false');
        }
    }

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function () {
            var open = navMenu.classList.toggle('open');
            hamburger.classList.toggle('open', open);
            hamburger.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
        document.addEventListener('click', function (e) {
            if (!navMenu.contains(e.target) && !hamburger.contains(e.target)) closeMobileMenu();
        });
    }

    /* ---------- 5. ACTIVE NAV LINK (scroll spy) ---------- */
    var sections = document.querySelectorAll('main section[id]');
    var navLinks = document.querySelectorAll('.nav-link-item');

    function updateActiveLink() {
        var pos = window.pageYOffset + 120;
        var currentId = 'home';
        sections.forEach(function (sec) {
            if (sec.offsetTop <= pos) currentId = sec.id;
        });
        navLinks.forEach(function (l) {
            l.classList.toggle('active', l.getAttribute('href') === '#' + currentId);
        });
    }
    updateActiveLink();

    /* ---------- 6. SCROLL REVEAL (IntersectionObserver) ---------- */
    var revealEls = document.querySelectorAll('.reveal-on-scroll');
    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        revealEls.forEach(function (el) { observer.observe(el); });
    } else {
        revealEls.forEach(function (el) { el.classList.add('is-visible'); });
    }

    /* ---------- 7. HERO PARALLAX (subtle tilt pada profile scene) ---------- */
    var scene = document.getElementById('profileScene');
    var hero = document.getElementById('home');
    if (scene && hero && window.matchMedia('(hover: hover)').matches) {
        hero.addEventListener('mousemove', function (e) {
            var r = hero.getBoundingClientRect();
            var x = (e.clientX - r.left) / r.width - 0.5;
            var y = (e.clientY - r.top) / r.height - 0.5;
            scene.style.transform = 'perspective(900px) rotateY(' + (x * 7) + 'deg) rotateX(' + (-y * 7) + 'deg)';
        });
        hero.addEventListener('mouseleave', function () {
            scene.style.transform = 'perspective(900px) rotateY(0deg) rotateX(0deg)';
        });
        scene.style.transition = 'transform .25s ease-out';
    }

    /* ---------- 8. BACK TO TOP ---------- */
    if (backToTop) {
        backToTop.addEventListener('click', function () {
            if (lenis) { lenis.scrollTo(0); }
            else { window.scrollTo({ top: 0, behavior: 'smooth' }); }
        });
    }
})();
