<?php
// Pastikan config selalu tersedia
if (!isset($config)) {
    require_once __DIR__ . '/../config/config.php';
}
?>
<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title><?= htmlspecialchars($config['full_name']) ?> | Personal Portfolio</title>
    <meta name="description" content="Personal Portfolio <?= htmlspecialchars($config['full_name']) ?> — <?= htmlspecialchars($config['role']) ?> dengan keahlian HTML, PHP, CSS, dan Bootstrap.">
    <meta name="keywords" content="portfolio, sistem informasi, web developer, HTML, PHP, CSS, Bootstrap, <?= htmlspecialchars($config['full_name']) ?>">
    <meta name="author" content="<?= htmlspecialchars($config['full_name']) ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($config['full_name']) ?> | Personal Portfolio">
    <meta property="og:description" content="<?= htmlspecialchars($config['role']) ?> — Modern Liquid Glass Portfolio">
    <meta property="og:type" content="website">

    <!-- Favicon (placeholder SVG) -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='24' fill='%233BA9FF'/><text x='50' y='68' font-size='52' font-family='sans-serif' font-weight='bold' text-anchor='middle' fill='white'>P</text></svg>">

    <!-- Anti-FOUC: set tema sebelum render -->
    <script>
        (function () {
            var saved = localStorage.getItem('theme');
            var theme = saved || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 + Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

    <!-- ============ LOADING SCREEN ============ -->
    <div id="loading-screen" data-testid="loading-screen" aria-hidden="true">
        <div class="loader-orb"></div>
        <div class="loader-text">Loading Portfolio<span class="loader-dots"><span>.</span><span>.</span><span>.</span></span></div>
    </div>
