<?php
// ngambil paket dari URL jika ada (dari tombol "Pilih Paket" di halaman utama)
 $old_paket = isset($_GET['paket']) ? $_GET['paket'] : '';
 $old_nama = '';
 $old_email = '';
 $old_whatsapp = '';
 $old_sekolah = '';

ob_start();
 $judul = 'Form Pendaftaran';
include('view/form_daftar.php');
 $content = ob_get_clean();
include('view/layout.php');
?>