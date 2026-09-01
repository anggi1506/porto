<?php
if (!isset($config)) {
    require_once __DIR__ . '/../config/config.php';
}
?>
    <!-- ============ NAVBAR (Liquid Glass) ============ -->
    <nav class="navbar glass-navbar fixed-top" id="mainNavbar" data-testid="main-navbar">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="#home" class="navbar-brand nav-logo" data-testid="nav-logo">
                <span class="logo-dot"></span><?= htmlspecialchars($config['first_name']) ?><span class="logo-accent">.</span>
            </a>

            <ul class="nav-menu" id="navMenu" data-testid="nav-menu">
                <li><a href="#home"       class="nav-link-item active" data-testid="nav-link-home">Home</a></li>
                <li><a href="#about"      class="nav-link-item" data-testid="nav-link-about">About</a></li>
                <li><a href="#skills"     class="nav-link-item" data-testid="nav-link-skills">Skills</a></li>
                <li><a href="#education"  class="nav-link-item" data-testid="nav-link-education">Education</a></li>
                <li><a href="#portfolio"  class="nav-link-item" data-testid="nav-link-portfolio">Portfolio</a></li>
                <li><a href="#hobby"      class="nav-link-item" data-testid="nav-link-hobby">Hobby</a></li>
                <li><a href="#contact"    class="nav-link-item" data-testid="nav-link-contact">Contact</a></li>
                <li class="d-lg-none mt-3">
                    <a href="#contact" class="btn-glow w-100" data-testid="nav-cta-mobile">Let's Talk</a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-2">
                <button class="theme-toggle" id="themeToggle" data-testid="theme-toggle" aria-label="Ganti tema terang / gelap">
                    <i class="fa-solid fa-sun theme-icon-sun"></i>
                    <i class="fa-solid fa-moon theme-icon-moon"></i>
                </button>
                <a href="#contact" class="btn-glow d-none d-lg-inline-flex" data-testid="nav-cta">Let's Talk</a>
                <button class="hamburger d-lg-none" id="hamburger" data-testid="hamburger-btn" aria-label="Buka menu navigasi" aria-expanded="false">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </nav>
