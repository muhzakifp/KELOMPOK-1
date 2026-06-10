<?php
$title = "Beranda - SIAKAD";

ob_start();
?>

<!-- Konten Start -->
<h1 class="text-2xl font-bold text-gray-900 dark:text-white">Selamat Datang di SIAKAD</h1>
<p class="mt-2 text-gray-600 dark:text-gray-400">Sistem Informasi Akademik untuk memudahkan pengelolaan data akademik
    Anda.</p>
<!-- Konten End -->

<?php
$content = ob_get_clean();

// Memanggil layout utama
require_once 'Layout.php';
?>