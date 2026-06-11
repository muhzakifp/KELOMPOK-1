<?php
require_once 'Kendaraan.php';

class MotorBesar extends Kendaraan {
    private $tipeRantai;
    private $modeBerkendara;
 
    
    public function __construct($id , $merk , $model , $tahun , $harga , $tipeRantai , $modeBerkendara ) {
        parent::__construct($id, $merk, $model, $tahun, $harga);
        $this->tipeRantai = $tipeRantai;
        $this->modeBerkendara = $modeBerkendara;
    }

    public function aksesTipRantai(){return $this->tipeRantai;}
    public function aksesModBerkendara(){return $this->modeBerkendara;}


    public function tampilkanSpesifikasi()
    {
        return "
        ID Kendaraan : ".$this->aksesIDkendaraan()."<br>
        Brand : ".$this->aksesBrand()."<br>
        Model : ".$this->aksesModel()."<br>
        Tahun : ".$this->aksesTahun()."<br>
        Harga Dasar : ".$this->aksesHarga()."<br>
        Tipe Rantai : ".$this->tipeRantai."<br>
        Mode Berkendara : ".$this->modeBerkendara;
    }

    public function hitungPajakTahunan() {
        $harga = $this->aksesHarga();
        $pajak = 1.5/100 * $harga;
        return $pajak;
    }

}

?>