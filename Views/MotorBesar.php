<?php
$title = "Daftar Motor Besar - Sistem Kendaraan";

require_once '../SimpanData/SimpanData.php';
require_once '../fileOOP/MotorBesar.php';

$database = new SimpanData();

$result = $database->tampilDatabaseMotorBesar();

$daftarMotor = [];

while($row = mysqli_fetch_assoc($result))
{
    $daftarMotor[] = new MotorBesar(
        $row['id_kendaraan'],
        $row['brand'],
        $row['model'],
        $row['tahun'],
        $row['harga_dasar'],
        $row['tipe_rantai'],
        $row['mode_berkendara']
    );
}

$no = 1;

ob_start();
?>

<div class="px-3 sm:px-5 lg:px-6">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-sm font-semibold text-gray-900 dark:text-white">
                Daftar Motor Besar
            </h1>
            <p class="mt-1 text-xs text-gray-700 dark:text-gray-300">
                Daftar motor besar yang dikelola melalui implementasi abstract class dan database.
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
                                Brand
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

                            <th scope="col"
                                class="sticky top-0 z-10 border-b border-gray-300 bg-white/75 px-2 py-3 text-left text-xs font-semibold text-gray-900 backdrop-blur-sm backdrop-filter dark:border-white/15 dark:bg-gray-900/75 dark:text-white">
                                Detail Informasi
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (!empty($daftarMotor)) : ?>

                            <?php
                            $totalData = count($daftarMotor);

                            foreach ($daftarMotor as $index => $m) :

                                $isLast = ($index === $totalData - 1);

                                $borderClass = $isLast
                                    ? ''
                                    : 'border-b border-gray-200 dark:border-white/10';
                            ?>

                                <tr>
                                    <td class="<?php echo $borderClass; ?> py-3 pr-2 pl-3 text-xs font-medium whitespace-nowrap text-gray-900 sm:pl-5 lg:pl-6 dark:text-white">
                                        <?php echo $no++; ?>
                                    </td>

                                    <td class="<?php echo $borderClass; ?> px-2 py-3 text-xs whitespace-nowrap text-gray-500 dark:text-gray-400">
                                        <?php echo htmlspecialchars($m->aksesIDkendaraan()); ?>
                                    </td>

                                    <td class="<?php echo $borderClass; ?> px-2 py-3 text-xs whitespace-nowrap text-gray-900 font-medium dark:text-white">
                                        <?php echo htmlspecialchars($m->aksesBrand()); ?>
                                    </td>

                                    <td class="<?php echo $borderClass; ?> px-2 py-3 text-xs whitespace-nowrap text-gray-500 dark:text-gray-400">
                                        <?php echo htmlspecialchars($m->aksesModel()); ?>
                                    </td>

                                    <td class="<?php echo $borderClass; ?> px-2 py-3 text-xs whitespace-nowrap text-gray-500 dark:text-gray-400">
                                        <?php echo htmlspecialchars($m->aksesTahun()); ?>
                                    </td>

                                    <td class="<?php echo $borderClass; ?> px-2 py-3 text-xs whitespace-nowrap text-gray-500 dark:text-gray-400">
                                        Rp <?php echo number_format($m->aksesHarga(), 0, ',', '.'); ?>
                                    </td>

                                    <td class="<?php echo $borderClass; ?> px-2 py-3 text-xs whitespace-nowrap text-gray-500 dark:text-gray-400">
                                        Rp <?php echo number_format($m->hitungPajakTahunan(), 0, ',', '.'); ?>
                                    </td>

                                    <td class="<?php echo $borderClass; ?> px-2 py-3 text-xs text-gray-500 dark:text-gray-400">
                                        <?php echo $m->tampilkanSpesifikasi(); ?>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        <?php else : ?>

                            <tr>
                                <td colspan="8"
                                    class="py-8 text-center text-sm text-gray-500 dark:text-gray-400 italic">
                                    Belum ada data motor besar yang terdaftar.
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