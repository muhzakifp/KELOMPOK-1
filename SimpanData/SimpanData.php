<?php
require '../KonekDB/koneksi.php';
require "../fileOOP/Kendaraan.php";
require "../fileOOP/MobilKonvensional.php";
require "../fileOOP/MobilListrik.php";
require "../fileOOP/MotorBesar.php";

class SimpanData extends Koneksi{
    
    public function databaseKendaraan(){
        //untuk query database disini - nanti saya tulis
    }

    public function simpanKendaraan(Kendaraan $kendaraan){
        //query database dan sytanks php
    }

}
?>