<?php
ob_start();
$judul = 'Beranda';
include('view/home.php');
$content = ob_get_clean();
include('view/layout.php');
?>