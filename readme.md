# Personal Portfolio — Sarjana Sistem Informasi

Website portfolio pribadi modern dengan desain **Liquid Glass / iPhone Fluid Glass**, dibangun menggunakan **PHP Native** — tanpa framework backend. Siap dijalankan di XAMPP.

## Fitur

- Desain Liquid Glass (glassmorphism, blur, glossy highlight, floating blobs)
- Light / Dark Mode (tersimpan di `localStorage`, default mengikuti pengaturan sistem)
- Fully responsive (mobile-first, hamburger menu)
- Single page dengan smooth scrolling (Lenis)
- Scroll reveal animation (IntersectionObserver)
- Loading screen, back-to-top, marquee strip
- Section: Home, Tentang Saya, Keahlian, Pendidikan (timeline), Portfolio (placeholder), Hobi, Kontak
- Contact form PHP: simpan ke **MySQL** jika tersedia, otomatis **fallback ke JSON** (`contact/data/messages.json`)
- Semua data pribadi cukup diganti di **satu file**: `config/config.php`

## Struktur Project

```
/portfolio
├── index.php
├── config/
│   └── config.php          # <-- GANTI DATA PRIBADI DI SINI
├── assets/
│   ├── css/
│   │   ├── style.css
│   │   └── responsive.css
│   ├── js/
│   │   └── main.js
│   └── images/
│       ├── profile/
│       ├── portfolio/
│       └── icons/
├── includes/
│   ├── header.php
│   ├── navbar.php
│   └── footer.php
├── contact/
│   ├── process.php
│   └── data/messages.json  # fallback penyimpanan pesan
├── database/
│   └── database.sql        # import via phpMyAdmin (opsional)
└── README.md
```

## Cara Menjalankan di XAMPP

1. Salin folder `portfolio` ke `C:\xampp\htdocs\`
2. Jalankan Apache di XAMPP Control Panel
3. Buka `http://localhost/portfolio`

### Menjalankan tanpa XAMPP (PHP CLI)

```bash
cd portfolio
php -S localhost:8000
```

## Konfigurasi

### Data pribadi

Edit `config/config.php` — nama, email, WhatsApp, alamat, sosial media, dan foto profil.

### Contact form dengan MySQL (opsional)

1. Jalankan Apache + MySQL di XAMPP
2. Buka `http://localhost/phpmyadmin` → Import `database/database.sql`
3. Sesuaikan kredensial di `config/config.php` (`db_host`, `db_user`, `db_pass`, `db_name`)

Jika MySQL tidak aktif, pesan tetap tersimpan otomatis ke `contact/data/messages.json`.

## Teknologi

HTML5 · PHP Native · CSS3 · Vanilla JavaScript · Bootstrap 5 · Font Awesome · Lenis (smooth scroll) · Google Fonts (Plus Jakarta Sans)
