<?php
require_once '../Service/koneksi.php';
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

       $query = "INSERT INTO kendaraan (id_kendaraan,brand,model,tahun,harga_dasar,kategori_kendaraan) VALUES
       ('".$kendaraan->aksesIDkendaraan()."','".$kendaraan->aksesBrand()."','".$kendaraan->aksesModel()."','".$kendaraan->aksesTahun()."','".$kendaraan->aksesHarga()."','$tipe')" ;
        mysqli_query($this->koneksi,$query);

       if($kendaraan instanceof MobilKonvesional){
        $query = "INSERT INTO mobil_konvesional (id_kendaraan, kapasitas_mesin, jenis_bbm) VALUES 
        ('".$kendaraan->aksesIDkendaraan()."','".$kendaraan->aksesKapMesin()."','".$kendaraan->aksesjenisbbm()."')";
        return mysqli_query($this->koneksi,$query);
           
       }
       else if($kendaraan instanceof MobilListrik){
           $query = "INSERT INTO mobil_listrik (id_kendaraan, kapasitas_baterai, jarak_tempuh) VALUES 
           ('".$kendaraan->aksesIDkendaraan()."','".$kendaraan->aksesKapBaterai()."','".$kendaraan->aksesJarak()."')";
            return mysqli_query($this->koneksi,$query);
       }
       else if($kendaraan instanceof MotorBesar){
        $query = "INSERT INTO motor_besar (id_kendaraan, tipe_rantai, mode_berkendara) VALUES 
        ('".$kendaraan->aksesIDkendaraan()."','".$kendaraan->aksesTipRantai()."','".$kendaraan->aksesModBerkendara()."')";
        return mysqli_query($this->koneksi,$query);
       }
       else{echo "Kendaraan tidak valid";}
    }




}
?>