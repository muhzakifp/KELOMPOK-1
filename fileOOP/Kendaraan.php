<?php

abstract class Kendaraan{
    private $id_kendaraan;
    protected $brand;
    protected $model;
    protected $tahun;
    protected $hargaDasar;

    public function __construct($id, $brand, $model, $tahun, $harga){
        $this->id_kendaraan = $id;
        $this->brand = $brand;
        $this->brand = $model;
        $this->tahun = $tahun;
        $this->hargaDasar = $harga;
    }

    abstract function hitungPajakTahunan();
    abstract function tampilkanSpesifikasi();
  
}
?>