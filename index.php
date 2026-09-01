<?php
/**
 * ============================================================
 *  PERSONAL PORTFOLIO — Sarjana Sistem Informasi
 *  Liquid Glass / Apple-inspired Design
 *  PHP Native — siap jalan di XAMPP (htdocs/portfolio)
 * ============================================================
 */
require_once __DIR__ . '/config/config.php';

// Status pengiriman contact form (redirect dari contact/process.php)
$formStatus = $_GET['status'] ?? '';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<main>

    <!-- ==================================================
         HERO / HOME
    ================================================== -->
    <section id="home" class="hero-section" data-testid="hero-section">
        <!-- Liquid blobs dekoratif -->
        <div class="blob blob-blue" aria-hidden="true"></div>
        <div class="blob blob-cyan" aria-hidden="true"></div>
        <div class="blob blob-lime" aria-hidden="true"></div>
        <div class="hero-grid-lines" aria-hidden="true"></div>

        <div class="container position-relative">
            <div class="row align-items-center g-5">

                <!-- Kolom teks -->
                <div class="col-lg-7">
                    <p class="hero-eyebrow reveal-hero" style="--d:.15s">
                        <span class="eyebrow-pulse"></span> Welcome to my portfolio
                    </p>

                    <h1 class="hero-title" data-testid="hero-title">
                        <span class="line-mask"><span class="line-inner" style="--d:.25s">Hi, I'm</span></span>
                        <span class="line-mask"><span class="line-inner gradient-text" style="--d:.4s"><?= htmlspecialchars($config['full_name']) ?></span></span>
                    </h1>

                    <h2 class="hero-role reveal-hero" style="--d:.55s" data-testid="hero-role">
                        <?= htmlspecialchars($config['role']) ?>
                    </h2>

                    <p class="hero-desc reveal-hero" style="--d:.7s" data-testid="hero-desc">
                        <?= htmlspecialchars($config['tagline']) ?>
                    </p>

                    <div class="hero-cta reveal-hero" style="--d:.85s">
                        <a href="#portfolio" class="btn-glow" data-testid="hero-cta-portfolio">
                            Lihat Portfolio <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                        <a href="#contact" class="btn-glass" data-testid="hero-cta-contact">
                            Hubungi Saya
                        </a>
                    </div>

                    <div class="hero-meta reveal-hero" style="--d:1s">
                        <span><i class="fa-solid fa-location-dot"></i> <?= htmlspecialchars($config['address']) ?></span>
                        <span class="hero-meta-sep"></span>
                        <span><i class="fa-solid fa-graduation-cap"></i> S1 Sistem Informasi</span>
                    </div>
                </div>

                <!-- Kolom foto -->
                <div class="col-lg-5">
                    <div class="profile-scene reveal-hero" style="--d:.6s" id="profileScene">
                        <div class="profile-ring" aria-hidden="true"></div>
                        <div class="profile-frame glass-card" data-testid="hero-profile-frame">
                            <img src="<?= htmlspecialchars($config['profile_photo']) ?>"
                                 alt="Foto profil <?= htmlspecialchars($config['full_name']) ?>"
                                 loading="eager" width="420" height="520">
                            <div class="profile-shine" aria-hidden="true"></div>
                        </div>

                        <!-- Floating glass chips -->
                        <div class="float-chip chip-1 glass-card" aria-hidden="true">
                            <i class="fa-brands fa-php"></i>
                        </div>
                        <div class="float-chip chip-2 glass-card" aria-hidden="true">
                            <i class="fa-brands fa-html5"></i>
                        </div>
                        <div class="float-chip chip-3 glass-card" aria-hidden="true">
                            <i class="fa-brands fa-bootstrap"></i>
                        </div>
                        <div class="float-badge glass-card" aria-hidden="true">
                            <span class="badge-dot"></span> Open to Work
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#about" class="scroll-hint" data-testid="scroll-hint" aria-label="Scroll ke bawah">
            <span class="mouse"><span class="wheel"></span></span>
        </a>
    </section>

    <!-- ============ MARQUEE STRIP ============ -->
    <div class="marquee-strip" aria-hidden="true">
        <div class="marquee-track">
            <?php for ($i = 0; $i < 2; $i++): ?>
            <div class="marquee-group">
                <span>Web Development</span><i class="fa-solid fa-star-of-life"></i>
                <span>Sarjana Sistem Informasi</span><i class="fa-solid fa-star-of-life"></i>
                <span>HTML &middot; PHP &middot; CSS &middot; Bootstrap</span><i class="fa-solid fa-star-of-life"></i>
                <span>Clean Code</span><i class="fa-solid fa-star-of-life"></i>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- ==================================================
         ABOUT
    ================================================== -->
    <section id="about" class="section-pad" data-testid="about-section">
        <div class="container">
            <div class="section-head reveal-on-scroll">
                <span class="section-number">01</span>
                <h2 class="section-title">Tentang <span class="gradient-text">Saya</span></h2>
                <p class="section-sub">Mengenal lebih dekat latar belakang dan ketertarikan saya di dunia teknologi.</p>
            </div>

            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7 reveal-on-scroll">
                    <div class="glass-card about-card h-100">
                        <h3 class="about-heading">Profil Profesional</h3>
                        <p>
                            Saya adalah seorang <strong>Sarjana Sistem Informasi</strong> lulusan STMIK Methodist Binjai
                            yang memiliki ketertarikan besar di bidang teknologi informasi dan pengembangan website.
                        </p>
                        <p>
                            Saya memiliki kemampuan dalam <strong>HTML, PHP, CSS, dan Bootstrap</strong> — mulai dari dasar
                            hingga pengembangan — serta menyukai proses belajar teknologi baru. Dunia digital dan
                            sistem informasi adalah bidang yang terus saya eksplorasi dan kembangkan.
                        </p>
                        <div class="about-facts">
                            <div class="fact-item">
                                <i class="fa-solid fa-graduation-cap"></i>
                                <div><strong>S1 Sistem Informasi</strong><small>STMIK Methodist Binjai</small></div>
                            </div>
                            <div class="fact-item">
                                <i class="fa-solid fa-code"></i>
                                <div><strong>Web Development</strong><small>Fokus utama keahlian</small></div>
                            </div>
                            <div class="fact-item">
                                <i class="fa-solid fa-seedling"></i>
                                <div><strong>Lifelong Learner</strong><small>Selalu belajar teknologi baru</small></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="row g-4 h-100">
                        <div class="col-6 reveal-on-scroll" style="--rd:.1s">
                            <div class="glass-card stat-card h-100" data-testid="stat-tech">
                                <span class="stat-number gradient-text">4</span>
                                <span class="stat-label">Core Technologies<br><small>HTML · PHP · CSS · Bootstrap</small></span>
                            </div>
                        </div>
                        <div class="col-6 reveal-on-scroll" style="--rd:.2s">
                            <div class="glass-card stat-card h-100" data-testid="stat-edu">
                                <span class="stat-number gradient-text">S1</span>
                                <span class="stat-label">Sistem Informasi<br><small>STMIK Methodist Binjai</small></span>
                            </div>
                        </div>
                        <div class="col-6 reveal-on-scroll" style="--rd:.3s">
                            <div class="glass-card stat-card h-100" data-testid="stat-focus">
                                <span class="stat-number gradient-text"><i class="fa-solid fa-laptop-code"></i></span>
                                <span class="stat-label">Fokus<br><small>Pengembangan Website</small></span>
                            </div>
                        </div>
                        <div class="col-6 reveal-on-scroll" style="--rd:.4s">
                            <div class="glass-card stat-card h-100" data-testid="stat-passion">
                                <span class="stat-number gradient-text"><i class="fa-solid fa-bolt"></i></span>
                                <span class="stat-label">Semangat<br><small>Dunia Digital & TI</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================================================
         SKILLS
    ================================================== -->
    <section id="skills" class="section-pad section-alt" data-testid="skills-section">
        <div class="blob blob-blue blob-section" aria-hidden="true"></div>
        <div class="container position-relative">
            <div class="section-head reveal-on-scroll">
                <span class="section-number">02</span>
                <h2 class="section-title">Keahlian <span class="gradient-text">Saya</span></h2>
                <p class="section-sub">Teknologi inti yang saya gunakan untuk membangun website.</p>
            </div>

            <div class="row g-4">
                <?php
                // level: label kategori (tanpa klaim persentase) + lebar bar visual
                $skills = [
                    ['icon' => 'fa-brands fa-html5',     'color' => 'orange', 'name' => 'HTML',      'desc' => 'Struktur halaman web yang semantic dan accessible.', 'level' => 'Intermediate',       'width' => 78],
                    ['icon' => 'fa-brands fa-php',       'color' => 'purple', 'name' => 'PHP',       'desc' => 'Logika backend native untuk website dinamis.',          'level' => 'Developing Skills',  'width' => 62],
                    ['icon' => 'fa-brands fa-css3-alt',  'color' => 'blue',   'name' => 'CSS',       'desc' => 'Styling modern, animasi, dan responsive layout.',       'level' => 'Intermediate',       'width' => 74],
                    ['icon' => 'fa-brands fa-bootstrap', 'color' => 'violet', 'name' => 'Bootstrap', 'desc' => 'Framework CSS untuk UI cepat dan konsisten.',           'level' => 'Familiar',           'width' => 68],
                ];
                foreach ($skills as $i => $s): ?>
                <div class="col-md-6 col-lg-3 reveal-on-scroll" style="--rd:<?= $i * 0.1 ?>s">
                    <div class="glass-card skill-card h-100" data-testid="skill-card-<?= strtolower($s['name']) ?>">
                        <div class="skill-icon skill-<?= $s['color'] ?>">
                            <i class="<?= $s['icon'] ?>"></i>
                        </div>
                        <h3 class="skill-name"><?= $s['name'] ?></h3>
                        <p class="skill-desc"><?= $s['desc'] ?></p>
                        <div class="skill-progress">
                            <div class="skill-bar" style="--w:<?= $s['width'] ?>%"></div>
                        </div>
                        <span class="skill-level"><?= $s['level'] ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ==================================================
         EDUCATION (Timeline)
    ================================================== -->
    <section id="education" class="section-pad" data-testid="education-section">
        <div class="container">
            <div class="section-head reveal-on-scroll">
                <span class="section-number">03</span>
                <h2 class="section-title">Riwayat <span class="gradient-text">Pendidikan</span></h2>
                <p class="section-sub">Perjalanan pendidikan yang membentuk fondasi saya.</p>
            </div>

            <div class="timeline">
                <?php
                $education = [
                    ['icon' => 'fa-graduation-cap', 'school' => 'STMIK Methodist Binjai', 'major' => 'S1 — Program Studi Sistem Informasi', 'note' => 'Lulus dengan gelar Sarjana Sistem Informasi.', 'tag' => 'Perguruan Tinggi', 'highlight' => true],
                    ['icon' => 'fa-school',         'school' => 'SMA Gajah Mada Binjai',  'major' => 'Sekolah Menengah Atas',                'note' => 'Pendidikan menengah atas.',                          'tag' => 'SMA',  'highlight' => false],
                    ['icon' => 'fa-school',         'school' => 'SMP Gajah Mada Binjai',  'major' => 'Sekolah Menengah Pertama',             'note' => 'Pendidikan menengah pertama.',                       'tag' => 'SMP',  'highlight' => false],
                    ['icon' => 'fa-building-columns','school' => 'SMPN 18 Bekasi',        'major' => 'Sekolah Menengah Pertama',             'note' => 'Pernah menempuh pendidikan kelas 7 di SMPN 18 Bekasi.', 'tag' => 'SMP', 'highlight' => false],
                    ['icon' => 'fa-book-open-reader','school' => 'PEC Bekasi',            'major' => 'Pendidikan Tambahan / Kursus',         'note' => 'Pengalaman pendidikan tambahan di luar sekolah formal.', 'tag' => 'Kursus', 'highlight' => false],
                ];
                foreach ($education as $i => $e): ?>
                <div class="timeline-item reveal-on-scroll" style="--rd:<?= $i * 0.08 ?>s">
                    <div class="timeline-node <?= $e['highlight'] ? 'node-highlight' : '' ?>">
                        <i class="fa-solid <?= $e['icon'] ?>"></i>
                    </div>
                    <div class="glass-card timeline-card" data-testid="timeline-card-<?= $i + 1 ?>">
                        <span class="timeline-tag"><?= $e['tag'] ?></span>
                        <h3 class="timeline-school"><?= $e['school'] ?></h3>
                        <p class="timeline-major"><?= $e['major'] ?></p>
                        <p class="timeline-note"><?= $e['note'] ?></p>
                        <?php if ($e['highlight']): ?>
                        <span class="timeline-badge"><i class="fa-solid fa-award"></i> Sarjana Sistem Informasi</span>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ==================================================
         PORTFOLIO
    ================================================== -->
    <section id="portfolio" class="section-pad section-alt" data-testid="portfolio-section">
        <div class="blob blob-cyan blob-section" aria-hidden="true"></div>
        <div class="container position-relative">
            <div class="section-head reveal-on-scroll">
                <span class="section-number">04</span>
                <h2 class="section-title">Portfolio <span class="gradient-text">Saya</span></h2>
                <p class="section-sub">Showcase project — placeholder di bawah dapat diganti dengan project asli.</p>
            </div>

            <div class="row g-4">
                <?php
                $projects = [
                    ['img' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?crop=entropy&cs=srgb&fm=jpg&ixid=M3w4NjA1OTV8MHwxfHNlYXJjaHwxfHxtb2Rlcm4lMjB3ZWIlMjBkZXNpZ24lMjBjb2RpbmclMjBsYXB0b3B8ZW58MHx8fHwxNzg4MjMyMDM4fDA&ixlib=rb-4.1.0&q=85',
                     'num' => '01', 'title' => 'Web Application',
                     'desc' => 'Tempat untuk menampilkan proyek website yang telah dikembangkan.',
                     'tags' => ['HTML', 'CSS', 'PHP', 'Bootstrap']],
                    ['img' => 'https://images.unsplash.com/photo-1555066931-bf19f8fd1085?crop=entropy&cs=srgb&fm=jpg&ixid=M3w4NjA1OTV8MHwxfHNlYXJjaHwzfHxtb2Rlcm4lMjB3ZWIlMjBkZXNpZ24lMjBjb2RpbmclMjBsYXB0b3B8ZW58MHx8fHwxNzg4MjMyMDM4fDA&ixlib=rb-4.1.0&q=85',
                     'num' => '02', 'title' => 'Information System',
                     'desc' => 'Deskripsi placeholder — ganti dengan detail sistem informasi yang Anda bangun.',
                     'tags' => ['PHP', 'MySQL', 'Bootstrap']],
                    ['img' => 'https://images.unsplash.com/photo-1672309046475-4cce2039f342?crop=entropy&cs=srgb&fm=jpg&ixid=M3w4NjA1OTV8MHwxfHNlYXJjaHw0fHxtb2Rlcm4lMjB3ZWIlMjBkZXNpZ24lMjBjb2RpbmclMjBsYXB0b3B8ZW58MHx8fHwxNzg4MjMyMDM4fDA&ixlib=rb-4.1.0&q=85',
                     'num' => '03', 'title' => 'Personal Project',
                     'desc' => 'Deskripsi placeholder — ganti dengan project pribadi Anda di sini.',
                     'tags' => ['HTML', 'CSS', 'JavaScript']],
                ];
                foreach ($projects as $i => $p): ?>
                <div class="col-md-6 col-lg-4 reveal-on-scroll" style="--rd:<?= $i * 0.12 ?>s">
                    <article class="glass-card portfolio-card h-100" data-testid="portfolio-card-<?= $i + 1 ?>">
                        <div class="portfolio-thumb">
                            <img src="<?= $p['img'] ?>" alt="<?= htmlspecialchars($p['title']) ?> — placeholder" loading="lazy" width="600" height="400">
                            <span class="portfolio-num"><?= $p['num'] ?></span>
                            <div class="portfolio-overlay">
                                <a href="#" class="overlay-btn" data-testid="portfolio-detail-<?= $i + 1 ?>" aria-label="Detail <?= htmlspecialchars($p['title']) ?>"><i class="fa-solid fa-eye"></i></a>
                                <a href="#" class="overlay-btn" data-testid="portfolio-demo-<?= $i + 1 ?>" aria-label="Demo <?= htmlspecialchars($p['title']) ?>"><i class="fa-brands fa-github"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-body">
                            <span class="placeholder-label"><i class="fa-solid fa-circle-info"></i> Portfolio Placeholder — dapat diganti dengan project asli</span>
                            <h3 class="portfolio-title"><?= $p['title'] ?></h3>
                            <p class="portfolio-desc"><?= $p['desc'] ?></p>
                            <div class="portfolio-tags">
                                <?php foreach ($p['tags'] as $t): ?><span><?= $t ?></span><?php endforeach; ?>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ==================================================
         HOBBY
    ================================================== -->
    <section id="hobby" class="section-pad" data-testid="hobby-section">
        <div class="container">
            <div class="section-head reveal-on-scroll">
                <span class="section-number">05</span>
                <h2 class="section-title">Hobi <span class="gradient-text">Saya</span></h2>
                <p class="section-sub">Aktivitas yang saya nikmati di waktu luang.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10 reveal-on-scroll">
                    <div class="glass-card hobby-card" data-testid="hobby-card">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-5">
                                <div class="hobby-thumb">
                                    <img src="https://images.unsplash.com/photo-1759701547448-f3f336e478cd?crop=entropy&cs=srgb&fm=jpg&ixid=M3w3NTY2NzB8MHwxfHNlYXJjaHwyfHxtb2JpbGUlMjBnYW1pbmclMjBzbWFydHBob25lJTIwZXNwb3J0c3xlbnwwfHx8fDE3ODgyMzIwMzh8MA&ixlib=rb-4.1.0&q=85"
                                         alt="Bermain game mobile di smartphone" loading="lazy" width="600" height="450">
                                    <div class="hobby-thumb-glow" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="hobby-body">
                                    <div class="hobby-icon"><i class="fa-solid fa-gamepad"></i></div>
                                    <h3 class="hobby-title">Mobile Legends</h3>
                                    <p class="hobby-desc">
                                        Di waktu luang, saya menikmati bermain Mobile Legends sebagai salah satu
                                        aktivitas hiburan — sekaligus melatih strategi, kerja sama tim, dan
                                        pengambilan keputusan cepat.
                                    </p>
                                    <div class="hobby-chips">
                                        <span><i class="fa-solid fa-users"></i> Team Play</span>
                                        <span><i class="fa-solid fa-chess"></i> Strategy</span>
                                        <span><i class="fa-solid fa-face-smile"></i> Fun</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================================================
         CONTACT
    ================================================== -->
    <section id="contact" class="section-pad section-alt" data-testid="contact-section">
        <div class="blob blob-lime blob-section" aria-hidden="true"></div>
        <div class="container position-relative">
            <div class="section-head reveal-on-scroll">
                <span class="section-number">06</span>
                <h2 class="section-title">Let's Work <span class="gradient-text">Together</span></h2>
                <p class="section-sub">Punya ide atau project? Kirim pesan — saya akan segera membalas.</p>
            </div>

            <div class="row g-4">
                <!-- Info kontak -->
                <div class="col-lg-5 reveal-on-scroll">
                    <div class="contact-info h-100 d-flex flex-column gap-3">
                        <div class="glass-card contact-item">
                            <div class="contact-item-icon"><i class="fa-solid fa-envelope"></i></div>
                            <div><small>Email</small><strong><?= htmlspecialchars($config['email']) ?></strong></div>
                        </div>
                        <div class="glass-card contact-item">
                            <div class="contact-item-icon"><i class="fa-brands fa-whatsapp"></i></div>
                            <div><small>WhatsApp</small><strong>+<?= htmlspecialchars($config['whatsapp']) ?></strong></div>
                        </div>
                        <div class="glass-card contact-item">
                            <div class="contact-item-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div><small>Lokasi</small><strong><?= htmlspecialchars($config['address']) ?></strong></div>
                        </div>
                        <div class="glass-card contact-item contact-socials">
                            <a href="<?= htmlspecialchars($config['github']) ?>" target="_blank" rel="noopener" aria-label="GitHub" data-testid="contact-social-github"><i class="fa-brands fa-github"></i></a>
                            <a href="<?= htmlspecialchars($config['linkedin']) ?>" target="_blank" rel="noopener" aria-label="LinkedIn" data-testid="contact-social-linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="<?= htmlspecialchars($config['instagram']) ?>" target="_blank" rel="noopener" aria-label="Instagram" data-testid="contact-social-instagram"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://wa.me/<?= htmlspecialchars($config['whatsapp']) ?>" target="_blank" rel="noopener" aria-label="WhatsApp" data-testid="contact-social-whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="col-lg-7 reveal-on-scroll" style="--rd:.15s">
                    <div class="glass-card contact-form-card">
                        <?php if ($formStatus === 'success'): ?>
                        <div class="alert-glass alert-success-glass" data-testid="form-success-alert">
                            <i class="fa-solid fa-circle-check"></i> Pesan berhasil dikirim. Terima kasih!
                        </div>
                        <?php elseif ($formStatus === 'error'): ?>
                        <div class="alert-glass alert-error-glass" data-testid="form-error-alert">
                            <i class="fa-solid fa-triangle-exclamation"></i> Mohon lengkapi semua field dengan benar.
                        </div>
                        <?php endif; ?>

                        <form action="contact/process.php" method="POST" data-testid="contact-form" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nama" class="form-label-glass">Nama</label>
                                    <input type="text" class="input-glass" id="nama" name="nama" placeholder="Nama lengkap Anda" required data-testid="form-input-nama">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label-glass">Email</label>
                                    <input type="email" class="input-glass" id="email" name="email" placeholder="nama@email.com" required data-testid="form-input-email">
                                </div>
                                <div class="col-12">
                                    <label for="subjek" class="form-label-glass">Subjek</label>
                                    <input type="text" class="input-glass" id="subjek" name="subjek" placeholder="Topik pesan" required data-testid="form-input-subjek">
                                </div>
                                <div class="col-12">
                                    <label for="pesan" class="form-label-glass">Pesan</label>
                                    <textarea class="input-glass" id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda..." required data-testid="form-input-pesan"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-glow w-100" data-testid="form-submit-btn">
                                        Kirim Pesan <i class="fa-solid fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
