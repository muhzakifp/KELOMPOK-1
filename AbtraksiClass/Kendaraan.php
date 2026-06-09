<?php
require '../koneksi.php';

abstract class Kendaraan{
    private $id_kendaraan;
    protected $brand;
    protected $tahun;
    protected $hargaDasar;

    public function __construct($id, $brand, $tahun, $harga){
        $this->id_kendaraan = $id;
        $this->brand = $brand;
        $this->tahun = $tahun;
        $this->hargaDasar = $harga;
    }

    abstract function hitungPajakTahunan();
    abstract function tampilkanSpesifikasi();
  
}
?>