<?php

require 'Kendaraan.php';

class MobilListrik extends Kendaraan
{
    private $kapasitasBaterai;
    private $jarakTempuh;

    public function __construct(
        $id_kendaraan,
        $brand,
        $model,
        $tahun,
        $hargaDasar,
        $kapasitasBaterai,
        $jarakTempuh
    ){
        parent::__construct(
            $id_kendaraan,
            $brand,
            $model,
            $tahun,
            $hargaDasar
        );

        $this->kapasitasBaterai = $kapasitasBaterai;
        $this->jarakTempuh = $jarakTempuh;
    }

    public function hitungPajakTahunan()
    {
        return $this->hargaDasar * 0.005;
    }

    public function tampilkanSpesifikasi()
    {
        return [
            'ID Kendaraan'      => $this->id_kendaraan,
            'Brand'             => $this->brand,
            'Model'             => $this->model,
            'Tahun'             => $this->tahun,
            'Harga Dasar'       => $this->hargaDasar,
            'Kapasitas Baterai' => $this->kapasitasBaterai . ' kWh',
            'Jarak Tempuh'      => $this->jarakTempuh . ' km',
            'Pajak Tahunan'     => $this->hitungPajakTahunan()
        ];
    }
}

?>