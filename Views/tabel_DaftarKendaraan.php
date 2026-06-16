<?php
$title = "Daftar Semua Kendaraan - Sistem Kendaraan";

require_once 'objek.php';
require_once '../SimpanData/SimpanData.php';
require_once '../fileOOP/MobilKonvesional.php';
require_once '../fileOOP/MobilListrik.php';
require_once '../fileOOP/MotorBesar.php';

$database = new SimpanData();

// Mengambil seluruh data dari tabel induk (kendaraan)
$result = $database->tampilDatabaseKendaraan();

$daftarKendaraan = [];

while($row = mysqli_fetch_assoc($result))
{
    // Mengubah string kategori ke format lowercase demi kemudahan pengecekan
    $kategori = strtolower($row['kategori_kendaraan']);

    // Mengambil data spesifik berdasarkan relasi tabel anak jika diperlukan, 
    // atau jika data dasar tabel induk sudah mencukupi untuk tampilan ringkas.
    if ($kategori === 'mobil konvesional') {
        // Ambil data kapasitas_mesin dan jenis_bbm (default kosong jika tidak join, atau sesuaikan)
        $kapasitasMesin = isset($row['kapasitas_mesin']) ? $row['kapasitas_mesin'] : 0;
        $jenisBBM = isset($row['jenis_bbm']) ? $row['jenis_bbm'] : '-';
        
        $daftarKendaraan[] = new MobilKonvesional(
            $row['id_kendaraan'],
            $row['brand'],
            $row['model'],
            $row['tahun'],
            $row['harga_dasar'],
            $kapasitasMesin,
            $jenisBBM
        );
    } 
    elseif ($kategori === 'mobil listrik') {
        $kapasitasBaterai = isset($row['kapasitas_baterai']) ? $row['kapasitas_baterai'] : 0;
        $jarakTempuh = isset($row['jarak_tempuh']) ? $row['jarak_tempuh'] : 0;

        $daftarKendaraan[] = new MobilListrik(
            $row['id_kendaraan'],
            $row['brand'],
            $row['model'],
            $row['tahun'],
            $row['harga_dasar'],
            $kapasitasBaterai,
            $jarakTempuh
        );
    } 
    elseif ($kategori === 'motor besar') {
        $tipeRantai = isset($row['tipe_rantai']) ? $row['tipe_rantai'] : '-';
        $modeBerkendara = isset($row['mode_berkendara']) ? $row['mode_berkendara'] : '-';

        $daftarKendaraan[] = new MotorBesar(
            $row['id_kendaraan'],
            $row['brand'],
            $row['model'],
            $row['tahun'],
            $row['harga_dasar'],
            $tipeRantai,
            $modeBerkendara
        );
    }
}

$no = 1;

ob_start();
?>

<div class="px-3 sm:px-5 lg:px-6">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-sm font-semibold text-gray-900 dark:text-white">
                Daftar Semua Kendaraan
            </h1>
            <p class="mt-1 text-xs text-gray-700 dark:text-gray-300">
                Seluruh data armada kendaraan konvensional, listrik, maupun motor besar yang terpusat melalui struktur pewarisan (inheritance).
            </p>
        </div>
    </div>

    <div class="mt-6 flow-root">
        <div class="-mx-3 -my-2 overflow-x-auto sm:-mx-5 lg:-mx-6">
            <div class="inline-block min-w-full py-2 align-middle">
                <table class="min-w-full border-separate border-spacing-0">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 py-3 pr-2 pl-3 text-left text-xs font-semibold text-gray-900 backdrop-blur-sm backdrop-filter sm:pl-5 lg:pl-6 dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                No
                            </th>

                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 px-2 py-3 text-left text-xs font-semibold text-gray-900 backdrop-blur-sm backdrop-filter dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                ID Kendaraan
                            </th>

                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 px-2 py-3 text-left text-xs font-semibold text-gray-900 backdrop-blur-sm backdrop-filter dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                Kategori
                            </th>

                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 px-2 py-3 text-left text-xs font-semibold text-gray-900 backdrop-blur-sm backdrop-filter dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                Brand / Merk
                            </th>

                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 px-2 py-3 text-left text-xs font-semibold text-gray-900 backdrop-blur-sm backdrop-filter dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                Model
                            </th>

                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 px-2 py-3 text-left text-xs font-semibold text-gray-900 backdrop-blur-sm backdrop-filter dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                Tahun
                            </th>

                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 px-2 py-3 text-left text-xs font-semibold text-gray-900 backdrop-blur-sm backdrop-filter dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                Harga Dasar
                            </th>

                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 px-2 py-3 text-left text-xs font-semibold text-gray-900 backdrop-blur-sm backdrop-filter dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                Pajak Tahunan
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (!empty($daftarKendaraan)) : ?>

                            <?php
                            $totalData = count($daftarKendaraan);

                            foreach ($daftarKendaraan as $index => $k) :
                                $isLast = ($index === $totalData - 1);
                                $borderClass = $isLast ? '' : 'border-b border-gray-200 dark:border-white/10';
                                
                                // Set warna label badge berdasarkan kategori objek kustom menggunakan operator instanceof
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

                                <tr>
                                    <td class="<?php echo $borderClass; ?> py-3 pr-2 pl-3 text-xs font-medium whitespace-nowrap text-gray-900 sm:pl-5 lg:pl-6 dark:text-white">
                                        <?php echo $no++; ?>
                                    </td>

                                    <td class="<?php echo $borderClass; ?> px-2 py-3 text-xs whitespace-nowrap text-gray-500 dark:text-gray-400">
                                        <?php echo htmlspecialchars($k->aksesIDkendaraan()); ?>
                                    </td>

                                    <td class="<?php echo $borderClass; ?> px-2 py-3 text-xs whitespace-nowrap">
                                        <span class="inline-flex items-center rounded-md px-2 py-0.5 text-xs font-medium <?php echo $badgeColor; ?>">
                                            <?php echo $namaKategori; ?>
                                        </span>
                                    </td>

                                    <td class="<?php echo $borderClass; ?> px-2 py-3 text-xs whitespace-nowrap text-gray-900 font-medium dark:text-white">
                                        <?php echo htmlspecialchars($k->aksesBrand()); ?>
                                    </td>

                                    <td class="<?php echo $borderClass; ?> px-2 py-3 text-xs whitespace-nowrap text-gray-500 dark:text-gray-400">
                                        <?php echo htmlspecialchars($k->aksesModel()); ?>
                                    </td>

                                    <td class="<?php echo $borderClass; ?> px-2 py-3 text-xs whitespace-nowrap text-gray-500 dark:text-gray-400">
                                        <?php echo htmlspecialchars($k->aksesTahun()); ?>
                                    </td>

                                    <td class="<?php echo $borderClass; ?> px-2 py-3 text-xs whitespace-nowrap text-gray-500 dark:text-gray-400">
                                        Rp <?php echo number_format($k->aksesHarga(), 0, ',', '.'); ?>
                                    </td>

                                    <td class="<?php echo $borderClass; ?> px-2 py-3 text-xs whitespace-nowrap text-gray-500 dark:text-gray-400 font-semibold">
                                        Rp <?php echo number_format($k->hitungPajakTahunan(), 0, ',', '.'); ?>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        <?php else : ?>

                            <tr>
                                <td colspan="8"
                                    class="py-8 text-center text-sm text-gray-500 dark:text-gray-400 italic">
                                    Belum ada data kendaraan apa pun yang tersimpan di database.
                                </td>
                            </tr>

                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'Layout.php';
?>