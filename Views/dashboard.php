<?php

require_once '../Views/objek.php';
require_once '../SimpanData/SimpanData.php';


$title = "Beranda - SIAKAD";

ob_start();
?>

<!-- 
    SIAKAD - Sistem Informasi Akademik
    Dashboard Utama
    Menampilkan ringkasan informasi akademik, statistik, dan akses cepat ke fitur utama.
-->

<!-- Konten Dashboard Start -->
<!-- Contoh Penggunaan Layout -->
<div class="card class=" mb-4">
    <div class="card-body">
        <h5 class="card-title">Selamat Datang di SIAKAD</h5>
        <p class="card-text">Sistem Informasi Akademik untuk memudahkan pengelolaan data akademik Anda.</p>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-4 mt-4">
    <div class="bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 rounded-xl p-4">
        <h6 class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Kendaraan</h6>
        <p class="text-2xl font-semibold text-gray-900 dark:text-white">1,234</p>
    </div>
    <div class="bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 rounded-xl p-4">
        <h6 class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Mobil Konvesional</h6>
        <p class="text-2xl font-semibold text-gray-900 dark:text-white">56</p>
    </div>
    <div class="bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 rounded-xl p-4">
        <h6 class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Mobil Listrik</h6>
        <p class="text-2xl font-semibold text-gray-900 dark:text-white">78</p>
    </div>
    <div class="bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 rounded-xl p-4">
        <h6 class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Motor Besar</h6>
        <p class="text-2xl font-semibold text-gray-900 dark:text-white">34</p>
    </div>
</div>
<!-- Konten Dashboard End -->


<?php
$content = ob_get_clean();

// Memanggil layout utama
require_once 'Layout.php';
?>