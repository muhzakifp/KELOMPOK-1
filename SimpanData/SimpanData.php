<?php
require '../Service/koneksi.php';
require "../fileOOP/Kendaraan.php";
require "../fileOOP/MobilKonvensional.php";
require "../fileOOP/MobilListrik.php";
require "../fileOOP/MotorBesar.php";

class SimpanData extends Koneksi{
    
    public function tampilDatabaseKendaraan(){
        //untuk query database disini - nanti saya tulis
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
        else{echo "Kendaraan tidak valid";}

       $query = "INSERT INTO kendaraan (id_kendaraan,brand,model,tahun,harga_dasar,kategori_kendaraan) VALUES
       ('$kendaraan->aksesIDkendaraan()','$kendaraan->aksesBrand()','$kendaraan->aksesModel()','$kendaraan->aksesTahun()','$kendaraan->aksesHarga()','$kategoti')" ;
       return mysqli_query($this->koneksi,$query);

       if($kendaraan instanceof MobilKonvesional){
        $query = "INSERT INTO mobil_konvesional (id_kendaraan, kapasitas_mesin, jenis_bbm) VALUES ()";
        return mysqli_query($this->koneksi,$query);
           
       }
       else if($kendaraan instanceof MobilListrik){
           $query = "INSERT INTO mobil_listrik (id_kendaraan, kapasitas_baterai, jarak_tempuh) VALUES ()";
            return mysqli_query($this->koneksi,$query);
       }
       else if($kendaraan instanceof MotorBesar){
        $query = "INSERT INTO motor_besar (id_kendaraan, tipe_rantai, mode_berkendara) VALUES ()";
        return mysqli_query($this->koneksi,$query);
       }
       else{echo "Kendaraan tidak valid";}
    }




}
?>