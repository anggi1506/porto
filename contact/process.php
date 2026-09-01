<?php
/**
 * ============================================================
 *  CONTACT FORM PROCESSOR
 *  - Mencoba menyimpan ke MySQL (lihat config/config.php)
 *  - Jika MySQL tidak tersedia / gagal → fallback ke JSON file
 *  Redirect kembali ke index.php dengan ?status=success|error
 * ============================================================
 */
require_once __DIR__ . '/../config/config.php';

// Hanya terima POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php#contact');
    exit;
}

// ---------- Ambil & sanitasi input ----------
$nama   = trim($_POST['nama']   ?? '');
$email  = trim($_POST['email']  ?? '');
$subjek = trim($_POST['subjek'] ?? '');
$pesan  = trim($_POST['pesan']  ?? '');

// ---------- Validasi dasar ----------
if ($nama === '' || $subjek === '' || $pesan === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../index.php?status=error#contact');
    exit;
}

$data = [
    'nama'       => htmlspecialchars($nama, ENT_QUOTES, 'UTF-8'),
    'email'      => htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
    'subjek'     => htmlspecialchars($subjek, ENT_QUOTES, 'UTF-8'),
    'pesan'      => htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8'),
    'created_at' => date('Y-m-d H:i:s'),
];

$saved = false;

// ---------- Opsi 1: Simpan ke MySQL (jika tersedia) ----------
// CATATAN KONFIGURASI:
// 1. Buat database dengan meng-import database/database.sql via phpMyAdmin
// 2. Sesuaikan kredensial di config/config.php (db_host, db_user, db_pass, db_name)
// 3. Jika koneksi gagal, pesan otomatis disimpan ke JSON (fallback di bawah)
if (function_exists('mysqli_connect')) {
    mysqli_report(MYSQLI_REPORT_OFF);
    $conn = @mysqli_connect($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);

    if ($conn) {
        $stmt = mysqli_prepare($conn, 'INSERT INTO contacts (nama, email, subjek, pesan, created_at) VALUES (?, ?, ?, ?, ?)');
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'sssss', $data['nama'], $data['email'], $data['subjek'], $data['pesan'], $data['created_at']);
            $saved = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        mysqli_close($conn);
    }
}

// ---------- Opsi 2 (fallback): Simpan ke file JSON ----------
if (!$saved) {
    $dir  = __DIR__ . '/data';
    $file = $dir . '/messages.json';

    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }

    $messages = [];
    if (file_exists($file)) {
        $decoded = json_decode(file_get_contents($file), true);
        if (is_array($decoded)) $messages = $decoded;
    }

    $messages[] = $data;
    $saved = (bool) file_put_contents($file, json_encode($messages, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

// ---------- Masa depan: kirim email ----------
// Untuk mengirim notifikasi email, tambahkan konfigurasi mail()/SMTP di sini.
// Contoh (XAMPP perlu konfigurasi sendmail):
// mail($config['email'], 'Portfolio: ' . $data['subjek'], $data['pesan'], 'From: ' . $data['email']);

header('Location: ../index.php?status=' . ($saved ? 'success' : 'error') . '#contact');
exit;
