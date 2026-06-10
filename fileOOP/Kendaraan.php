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


    public function aksesIDkendaraan(){ return $this->id_kendaraan;}
    public function aksesBrand(){ return $this->brand;}
    public function aksesModel(){ return $this->model;}
    public function aksesTahun(){ return $this->tahun;}
    public function aksesHarga(){ return $this->hargaDasar;}

    abstract function hitungPajakTahunan();
    abstract function tampilkanSpesifikasi();
  
}
?>