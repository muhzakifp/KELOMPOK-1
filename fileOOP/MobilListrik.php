<?php

require_once 'Kendaraan.php';

class MobilListrik extends Kendaraan
{
    private $kapasitasBaterai;
    private $jarakTempuh;

    public function __construct($id_kendaraan,$brand,$model,$tahun,$hargaDasar,$kapasitasBaterai,$jarakTempuh){
        parent::__construct($id_kendaraan,$brand,$model,$tahun,$hargaDasar);
        $this->kapasitasBaterai = $kapasitasBaterai;
        $this->jarakTempuh = $jarakTempuh;
    }

    public function hitungPajakTahunan()
    {
        return $this->hargaDasar * 0.005;
    }

    public function tampilkanSpesifikasi()
    {
        return 'ID Kendaraan: ' . $this->id_kendaraan . '<br>' .
            'Brand: ' . $this->brand . '<br>' .
            'Model: ' . $this->model . '<br>' .
            'Tahun: ' . $this->tahun . '<br>' .
            'Harga Dasar: Rp ' . number_format($this->hargaDasar, 0, ',', '.') . '<br>' .
            'Kapasitas Baterai: ' . $this->kapasitasBaterai . ' kWh<br>' .
            'Jarak Tempuh: ' . $this->jarakTempuh . ' km<br>' .
            'Pajak Tahunan: Rp ' . number_format($this->hitungPajakTahunan(), 0, ',', '.');
    }

    public function aksesKapBaterai(){return $this->kapasitasBaterai;}
    public function aksesJarak(){return $this->jarakTempuh;}
}

?>