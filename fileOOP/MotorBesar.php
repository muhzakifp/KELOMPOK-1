<?php
require 'Kendaraan.php';

class MotorBesar extends Kendaraan {
    private $tipeRantai;
    private $modeBerkendara;
    protected $koneksi;
    
    public function __construct($koneksi, $id = null, $merk = null, $model = null, $tahun = null, $harga = null, $tipeRantai = null, $modeBerkendara = null) {
        parent::__construct($id, $merk, $model, $tahun, $harga);
        $this->koneksi = $koneksi;
        $this->tipeRantai = $tipeRantai;
        $this->modeBerkendara = $modeBerkendara;
    }

    public function tampilkanSemuaData() {
        $query = "SELECT k.*, mb.tipe_rantai, mb.mode_berkendara 
                  FROM kendaraan k 
                  JOIN motor_besar mb ON k.id_kendaraan = mb.id_kendaraan 
                  WHERE k.kategori_kendaraan = 'Motor Besar'";
        
        $result = mysqli_query($this->koneksi, $query);
        $data = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = new MotorBesar(
                $this->koneksi,
                $row['id_kendaraan'],
                $row['brand'],
                $row['model'],
                $row['tahun'],
                $row['harga_dasar'],
                $row['tipe_rantai'],
                $row['mode_berkendara']
            );
        }
        return $data;
    }

    public function tampilData(){
        echo "ID Kendaraan: " . $this->aksesIDkendaraan() . "<br>";
        echo "Brand: " . $this->aksesBrand() . "<br>";
        echo "Model: " . $this->aksesModel() . "<br>";
        echo "Tahun: " . $this->aksesTahun() . "<br>";
        echo "Harga Dasar: " . $this->aksesHarga() . "<br>";
        echo "Tipe Rantai: " . $this->tipeRantai . "<br>";
        echo "Mode Berkendara: " . $this->modeBerkendara . "<br>";
    }

    public function hitungPajakTahunan() {
        $harga = $this->aksesHarga();
        $pajak = 1.5/100 * $harga;
        return $pajak;
    }

    public function tampilkanSpesifikasi() {
        //Code menampilkan informasi spesifik motor besar
    }
}

?>