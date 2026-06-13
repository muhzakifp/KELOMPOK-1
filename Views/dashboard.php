<?php

require_once '../SimpanData/SimpanData.php';
require_once '../fileOOP/MobilKonvesional.php';
require_once '../fileOOP/MobilListrik.php';
require_once '../fileOOP/MotorBesar.php';

// Judul halaman
$title = "Showroom Kendaraan - Dashboard";

// Inisialisasi operasi database
$database = new SimpanData();

// 1. Mengambil data statistik untuk Kartu dan Pie Chart
$totalSemua = $database->hitungTotalKendaraan();
$totalKonvensional = $database->hitungTotalKendaraan('Mobil Konvesional');
$totalListrik = $database->hitungTotalKendaraan('Mobil Listrik');
$totalMotor = $database->hitungTotalKendaraan('Motor Besar');

// 2. Mengambil data Tahun untuk Bar Chart
$sqlTahun = "SELECT tahun, COUNT(id_kendaraan) as total FROM kendaraan GROUP BY tahun ORDER BY tahun ASC";
$resultTahun = mysqli_query($database->aksesKoneksi(), $sqlTahun);
$labelTahun = [];
$dataTahun = [];

if ($resultTahun && mysqli_num_rows($resultTahun) > 0) {
    while ($row = mysqli_fetch_assoc($resultTahun)) {
        $labelTahun[] = $row['tahun'];
        $dataTahun[] = $row['total'];
    }
}

// 3. Mengambil 5 kendaraan terbaru berdasarkan tahun rilis untuk Tabel
$sqlTerbaru = "SELECT * FROM kendaraan ORDER BY tahun DESC LIMIT 5"; 
$resultTerbaru = mysqli_query($database->aksesKoneksi(), $sqlTerbaru);
$kendaraanTerbaru = [];

if ($resultTerbaru && mysqli_num_rows($resultTerbaru) > 0) {
    while ($row = mysqli_fetch_assoc($resultTerbaru)) {
        $objek = null;
        if ($row['kategori_kendaraan'] === 'Mobil Konvesional') {
            $objek = new MobilKonvesional($row['id_kendaraan'], $row['brand'], $row['model'], $row['tahun'], $row['harga_dasar'], 0, '-'); 
        } elseif ($row['kategori_kendaraan'] === 'Mobil Listrik') {
            $objek = new MobilListrik($row['id_kendaraan'], $row['brand'], $row['model'], $row['tahun'], $row['harga_dasar'], 0, 0); 
        } elseif ($row['kategori_kendaraan'] === 'Motor Besar') {
            $objek = new MotorBesar($row['id_kendaraan'], $row['brand'], $row['model'], $row['tahun'], $row['harga_dasar'], '-', '-'); 
        }
        
        if ($objek) {
            $kendaraanTerbaru[] = $objek;
        }
    }
}

ob_start();
?>

<div class="mb-6">
    <div class="bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 rounded-2xl p-6 flex items-center gap-6">
        <div class="bg-blue-100 dark:bg-blue-900/50 p-4 rounded-xl text-blue-600 dark:text-blue-400">
            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
            </svg>
        </div>
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Dashboard</h1>
            <p class="mt-1 text-base text-gray-600 dark:text-gray-400">Selamat datang di sistem manajemen Showroom Kendaraan. Berikut adalah ringkasan seluruh inventaris showroom Anda.</p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 rounded-2xl p-5 flex items-start gap-4">
        <div class="p-3.5 rounded-lg bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
        </div>
        <div>
            <h6 class="text-base font-semibold text-gray-500 dark:text-gray-400">Total Kendaraan</h6>
            <p class="text-3xl font-bold text-gray-900 dark:text-white mt-1.5"><?php echo number_format($totalSemua, 0, ',', '.'); ?></p>
        </div>
    </div>
    
    <div class="bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 rounded-2xl p-5 flex items-start gap-4">
        <div class="p-3.5 rounded-lg bg-emerald-100 dark:bg-emerald-900/50 text-emerald-600 dark:text-emerald-400">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
            </svg>
        </div>
        <div>
            <h6 class="text-base font-semibold text-gray-500 dark:text-gray-400">Mobil Listrik</h6>
            <p class="text-3xl font-bold text-gray-900 dark:text-white mt-1.5"><?php echo number_format($totalListrik, 0, ',', '.'); ?></p>
        </div>
    </div>
    
    <div class="bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 rounded-2xl p-5 flex items-start gap-4">
        <div class="p-3.5 rounded-lg bg-orange-100 dark:bg-orange-900/50 text-orange-600 dark:text-orange-400">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.866 8.21 8.21 0 003 2.48z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
            </svg>
        </div>
        <div>
            <h6 class="text-base font-semibold text-gray-500 dark:text-gray-400">Mobil Konvensional</h6>
            <p class="text-3xl font-bold text-gray-900 dark:text-white mt-1.5"><?php echo number_format($totalKonvensional, 0, ',', '.'); ?></p>
        </div>
    </div>
    
    <div class="bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 rounded-2xl p-5 flex items-start gap-4">
        <div class="p-3.5 rounded-lg bg-red-100 dark:bg-red-900/50 text-red-600 dark:text-red-400">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.79l.867-1.221m7.264-10.231l.867-1.221m-4.522 10.982l.346-1.458m2.351-12.048l.346-1.458" />
            </svg>
        </div>
        <div>
            <h6 class="text-base font-semibold text-gray-500 dark:text-gray-400">Motor Besar</h6>
            <p class="text-3xl font-bold text-gray-900 dark:text-white mt-1.5"><?php echo number_format($totalMotor, 0, ',', '.'); ?></p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
    <div class="bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 rounded-2xl p-6">
        <h5 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Komposisi Kategori Kendaraan</h5>
        <div class="relative h-64 w-full flex justify-center">
            <canvas id="kategoriPieChart"></canvas>
        </div>
    </div>

    <div class="bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 rounded-2xl p-6">
        <h5 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Statistik Kendaraan Berdasarkan Tahun</h5>
        <div class="relative h-64 w-full">
            <canvas id="tahunBarChart"></canvas>
        </div>
    </div>
</div>

<div class="bg-white dark:bg-gray-800 shadow-sm border border-gray-200 dark:border-gray-700 rounded-2xl p-6">
    <div class="flex items-center justify-between mb-5">
        <h5 class="text-lg font-bold text-gray-900 dark:text-white">Daftar Kendaraan Terbaru</h5>
        <a href="DaftarKendaraan.php" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Lihat Semua</a>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 rounded-l-lg">Kategori</th>
                    <th scope="col" class="px-6 py-3">Merek</th>
                    <th scope="col" class="px-6 py-3">Model</th>
                    <th scope="col" class="px-6 py-3">Tahun</th>
                    <th scope="col" class="px-6 py-3 rounded-r-lg">Harga Dasar (IDR)</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($kendaraanTerbaru)): ?>
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center bg-gray-50 dark:bg-gray-800/50">
                            <svg class="w-16 h-16 mx-auto text-gray-300 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            <p class="mt-4 text-base font-semibold text-gray-600 dark:text-gray-400">Belum ada data kendaraan terbaru.</p>
                            <p class="text-sm text-gray-500 dark:text-gray-500 mt-1">Silakan tambahkan data kendaraan terlebih dahulu melalui form input data.</p>
                        </td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($kendaraanTerbaru as $k): 
                        $badgeColor = "bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300";
                        $namaKategori = "Kendaraan";

                        if ($k instanceof MobilKonvesional) {
                            $badgeColor = "bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-400";
                            $namaKategori = "Mobil Konvensional";
                        } elseif ($k instanceof MobilListrik) {
                            $badgeColor = "bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400";
                            $namaKategori = "Mobil Listrik";
                        } elseif ($k instanceof MotorBesar) {
                            $badgeColor = "bg-purple-100 text-purple-800 dark:bg-purple-900/30 dark:text-purple-400";
                            $namaKategori = "Motor Besar";
                        }
                    ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center rounded-md px-2.5 py-0.5 text-xs font-medium <?php echo $badgeColor; ?>">
                                    <?php echo $namaKategori; ?>
                                </span>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white"><?php echo htmlspecialchars($k->aksesBrand()); ?></td>
                            <td class="px-6 py-4"><?php echo htmlspecialchars($k->aksesModel()); ?></td>
                            <td class="px-6 py-4"><?php echo htmlspecialchars($k->aksesTahun()); ?></td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">Rp <?php echo number_format($k->aksesHarga(), 0, ',', '.'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    
    // 1. Inisialisasi Pie Chart (Komposisi Kategori)
    const ctxPie = document.getElementById('kategoriPieChart').getContext('2d');
    new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: ['Mobil Konvensional', 'Mobil Listrik', 'Motor Besar'],
            datasets: [{
                data: [
                    <?php echo $totalKonvensional; ?>, 
                    <?php echo $totalListrik; ?>, 
                    <?php echo $totalMotor; ?>
                ],
                backgroundColor: [
                    'rgba(249, 115, 22, 0.9)',  // Orange untuk Konvensional
                    'rgba(16, 185, 129, 0.9)',  // Emerald untuk Listrik
                    'rgba(239, 68, 68, 0.9)'    // Merah untuk Motor Besar
                ],
                borderWidth: 2,
                borderColor: '#ffffff',
                hoverOffset: 6
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });

    // 2. Inisialisasi Bar Chart (Tahun Masuk)
    const ctxBar = document.getElementById('tahunBarChart').getContext('2d');
    new Chart(ctxBar, {
        type: 'bar',
        data: {
            // json_encode otomatis mengubah array PHP menjadi array JavaScript
            labels: <?php echo json_encode($labelTahun); ?>,
            datasets: [{
                label: 'Jumlah Kendaraan',
                data: <?php echo json_encode($dataTahun); ?>,
                backgroundColor: 'rgba(59, 130, 246, 0.85)', // Warna Biru
                borderRadius: 4,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: { 
                    beginAtZero: true, 
                    ticks: { precision: 0 } // Menghilangkan angka desimal pada sumbu Y
                }
            },
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.raw + ' Unit Kendaraan';
                        }
                    }
                }
            }
        }
    });
});
</script>

<?php
$content = ob_get_clean();

// Memanggil Layout dasar utama
require_once 'Layout.php';
?>