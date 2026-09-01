<?php
if (!isset($config)) {
    require_once __DIR__ . '/../config/config.php';
}
?>
    <!-- ============ FOOTER ============ -->
    <footer class="footer-section" data-testid="footer">
        <div class="footer-glow"></div>
        <div class="container position-relative">
            <div class="row gy-4 align-items-center">

                <div class="col-md-4 text-center text-md-start">
                    <a href="#home" class="footer-logo" data-testid="footer-logo">
                        <span class="logo-dot"></span><?= htmlspecialchars($config['first_name']) ?><span class="logo-accent">.</span>
                    </a>
                    <p class="footer-tagline mb-0"><?= htmlspecialchars($config['role']) ?></p>
                </div>

                <div class="col-md-4 text-center">
                    <ul class="footer-links" data-testid="footer-quick-links">
                        <li><a href="#home" data-testid="footer-link-home">Home</a></li>
                        <li><a href="#about" data-testid="footer-link-about">About</a></li>
                        <li><a href="#portfolio" data-testid="footer-link-portfolio">Portfolio</a></li>
                        <li><a href="#contact" data-testid="footer-link-contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-4 text-center text-md-end">
                    <div class="footer-socials" data-testid="footer-socials">
                        <a href="<?= htmlspecialchars($config['github']) ?>" target="_blank" rel="noopener" aria-label="GitHub" data-testid="footer-social-github"><i class="fa-brands fa-github"></i></a>
                        <a href="<?= htmlspecialchars($config['linkedin']) ?>" target="_blank" rel="noopener" aria-label="LinkedIn" data-testid="footer-social-linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="<?= htmlspecialchars($config['instagram']) ?>" target="_blank" rel="noopener" aria-label="Instagram" data-testid="footer-social-instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/<?= htmlspecialchars($config['whatsapp']) ?>" target="_blank" rel="noopener" aria-label="WhatsApp" data-testid="footer-social-whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <hr class="footer-divider">

            <p class="footer-copy text-center mb-0" data-testid="footer-copyright">
                &copy; <?= date('Y') ?> <?= htmlspecialchars($config['full_name']) ?>. All Rights Reserved.
            </p>
        </div>
    </footer>

    <!-- Back to Top -->
    <button id="backToTop" class="back-to-top" data-testid="back-to-top" aria-label="Kembali ke atas">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
