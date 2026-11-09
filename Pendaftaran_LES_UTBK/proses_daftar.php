<?php
// Cek apakah form disubmit
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: daftar.php');
    exit;
}
// Ambil dan nerima data
 $nama     = trim($_POST['nama'] ?? '');
 $email    = trim($_POST['email'] ?? '');
 $whatsapp = trim($_POST['whatsapp'] ?? '');
 $sekolah  = trim($_POST['sekolah'] ?? '');
 $paket    = trim($_POST['paket'] ?? '');
 $metode   = trim($_POST['metode'] ?? '');

// Validasi: jika ada yang kosong, kembali ke form dengan error
if ($nama === '' || $email === '' || $whatsapp === '' || $sekolah === '' || $paket === '') {
    $error = 'Semua field harus diisi! Mohon lengkapi';
    $old_nama     = $nama;
    $old_email    = $email;
    $old_whatsapp = $whatsapp;
    $old_sekolah  = $sekolah;
    $old_paket    = $paket;

    ob_start();
    $judul = 'Form Pendaftaran';
    include('view/form_daftar.php');
    $content = ob_get_clean();
    include('view/layout.php');
    exit;
}
// Jika validasi lolos, tampilkan halaman hasil
ob_start();
 $judul = 'Hasil Pendaftaran';
include('view/hasil_daftar.php');
 $content = ob_get_clean();
include('view/layout.php');
?>