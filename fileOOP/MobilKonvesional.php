<?php
require_once 'Kendaraan.php';

class MobilKonvesional extends Kendaraan
{
    private $kapasitasMesin;
    private $jenisBahanBakar;

    public function __construct($id,$brand,$model,$tahun,$hargaDasar,$kapasitasMesin,$jenisBahanBakar) {
        parent::__construct($id,$brand,$model,$tahun,$hargaDasar);

        $this->kapasitasMesin = $kapasitasMesin;
        $this->jenisBahanBakar = $jenisBahanBakar;
    }

    public function aksesKapMesin(){return $this->kapasitasMesin;}
    public function aksesjenisbbm(){return $this->jenisBahanBakar;}

    public function hitungPajakTahunan()
    {
        return (0.02 * $this->hargaDasar) +
               ($this->kapasitasMesin * 500);
    }

    public function tampilkanSpesifikasi()
    {
        return "
        ID Kendaraan : {$this->id_kendaraan}<br>
        Brand        : {$this->brand}<br>
        Model        : {$this->model}<br>
        Tahun        : {$this->tahun}<br>
        Harga Dasar  : Rp" . number_format($this->hargaDasar, 0, ',', '.') . "<br>
        Kapasitas Mesin : {$this->kapasitasMesin} cc<br>
        Jenis Bahan Bakar : {$this->jenisBahanBakar}<br>
        Pajak Tahunan : Rp" . number_format($this->hitungPajakTahunan(), 0, ',', '.');
    }
}
?>