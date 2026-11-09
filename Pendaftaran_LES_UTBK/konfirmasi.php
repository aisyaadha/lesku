<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: daftar.php');
    exit;
}

$nama     = trim($_POST['nama'] ?? '');
$email    = trim($_POST['email'] ?? '');
$whatsapp = trim($_POST['whatsapp'] ?? '');
$sekolah  = trim($_POST['sekolah'] ?? '');
$paket    = trim($_POST['paket'] ?? '');

ob_start();
$judul = 'Konfirmasi Pendaftaran';
include('view/konfirmasi.php');
$content = ob_get_clean();

include('view/layout.php');
?>