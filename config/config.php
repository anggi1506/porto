<?php
/**
 * ============================================================
 *  KONFIGURASI UTAMA WEBSITE
 *  Ganti nilai placeholder di bawah ini dengan data asli Anda.
 *  Cukup edit file ini — seluruh halaman akan mengikuti.
 * ============================================================
 */

$config = [
    // ---------- IDENTITAS ----------
    'full_name'   => 'Anggi Nanda Pratama',                 // Ganti dengan nama lengkap Anda
    'first_name'  => 'Anggi',                        // Nama panggilan untuk sapaan hero
    'role'        => 'Sarjana Sistem Informasi',
    'tagline'     => 'Saya memiliki ketertarikan dalam pengembangan website dan teknologi informasi, dengan kemampuan dalam HTML, PHP, CSS, dan Bootstrap.',

    // ---------- KONTAK ----------
    'email'       => 'angginandap12@gmail.com',       // Ganti dengan email Anda
    'whatsapp'    => '081369079862',               // Format: kode negara tanpa "+", contoh 62812xxxx
    'address'     => 'Binjai, Sumatera Utara, Indonesia',

    // ---------- SOSIAL MEDIA (placeholder) ----------
    'github'      => 'https://github.com/username',
    'linkedin'    => 'https://linkedin.com/in/username',
    'instagram'   => 'https://instagram.com/username',

    // ---------- FOTO PROFIL ----------
    // Ganti dengan foto lokal: assets/images/profile/foto.jpg
    'profile_photo' => 'assets/images/profile.jpeg',

    // ---------- DATABASE (opsional, untuk contact form) ----------
    // Jika MySQL tersedia (XAMPP default), isi di bawah ini dan import database/database.sql
    // Jika koneksi gagal, pesan otomatis disimpan ke contact/data/messages.json
    'db_host'     => 'localhost',
    'db_user'     => 'root',
    'db_pass'     => '',
    'db_name'     => 'portfolio_db',
];
