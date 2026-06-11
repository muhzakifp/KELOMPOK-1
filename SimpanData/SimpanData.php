<?php
require_once '../Service/koneksi.php';
require_once '../fileOOP/Kendaraan.php';
require_once "../fileOOP/MobilKonvesional.php";
require_once "../fileOOP/MobilListrik.php";
require_once "../fileOOP/MotorBesar.php";

class SimpanData extends Koneksi{
    
    public function tampilDatabaseKendaraan(){
        $query = "SELECT * FROM kendaraan ";
        return mysqli_query($this->koneksi,$query);
    }
    public function tampilDatabaseMobilKonvesional(){
        $query = "SELECT kendaraan.*, mobil_konvesional.* FROM kendaraan 
        INNER JOIN mobil_konvesional ON mobil_konvesional.id_kendaraan = kendaraan.id_kendaraan";
        return mysqli_query($this->koneksi,$query);
    }
    public function tampilDatabaseMobilListrik(){
        $query = "SELECT kendaraan.*, mobil_listrik.* FROM kendaraan 
        INNER JOIN mobil_listrik ON mobil_listrik.id_kendaraan = kendaraan.id_kendaraan";
        return mysqli_query($this->koneksi,$query);
    }
    public function tampilDatabaseMotorBesar(){
        $query = "SELECT kendaraan.*, motor_besar.* FROM kendaraan 
        INNER JOIN motor_besar ON motor_besar.id_kendaraan = kendaraan.id_kendaraan";
        return mysqli_query($this->koneksi,$query);
    }


    public function simpanKendaraan(Kendaraan $kendaraan){

        if($kendaraan instanceof MobilKonvesional){
            $tipe ="Mobil Konvesional";
        }
        else if ($kendaraan instanceof MobilListrik){
            $tipe = "Mobil Listrik";
        }
        else if ($kendaraan instanceof MotorBesar){
            $tipe = "Motor Besar";
        }
        else{echo "Kendaraan tidak valid"; return false;}

        // variabel untuk atribut kendaraan
        $idKendaraan =  $kendaraan->aksesIDkendaraan();
        $brandKendaraan =  $kendaraan->aksesBrand();
        $modelKendaraan = $kendaraan->aksesModel();
        $tahunKendaraan = $kendaraan->aksesTahun();
        $hargaDasarK = $kendaraan->aksesHarga();

       $queryKendaraan = "INSERT INTO kendaraan (id_kendaraan,brand,model,tahun,harga_dasar,kategori_kendaraan) VALUES
       ('$idKendaraan','$brandKendaraan','$modelKendaraan','$tahunKendaraan','$hargaDasarK','$tipe')" ;
        $simpanKendaraan = mysqli_query($this->koneksi,$queryKendaraan);

        if(!$simpanKendaraan){return false;}

       if($kendaraan instanceof MobilKonvesional){
        // variabel untuk atribut mobil konvesional
        $kapasitasMesin = $kendaraan->aksesKapMesin();
        $jenisBBM = $kendaraan->aksesjenisbbm();

        $query = "INSERT INTO mobil_konvesional (id_kendaraan, kapasitas_mesin, jenis_bbm) VALUES 
        ('$idKendaraan','$kapasitasMesin','$jenisBBM')";
        return mysqli_query($this->koneksi,$query);
           
       }
       else if($kendaraan instanceof MobilListrik){
            //variabel untuk atribut mobil listrik
            $kapasitasBatre = $kendaraan->aksesKapBaterai();
            $jarakTempuh = $kendaraan->aksesJarak();

           $query = "INSERT INTO mobil_listrik (id_kendaraan, kapasitas_baterai, jarak_tempuh) VALUES 
           ('$idKendaraan','$kapasitasBatre','$jarakTempuh')";
            return mysqli_query($this->koneksi,$query);
       }
       else if($kendaraan instanceof MotorBesar){
         //variabel untuk atribut motor besar
        $tipeRantai = $kendaraan->aksesTipRantai();
        $modeBerkendara = $kendaraan->aksesModBerkendara();

        $query = "INSERT INTO motor_besar (id_kendaraan, tipe_rantai, mode_berkendara) VALUES 
        ('$idKendaraan','$tipeRantai','$modeBerkendara')";
        return mysqli_query($this->koneksi,$query);
       }
       else{echo "Kendaraan tidak valid"; return false;}
    }
}
?>