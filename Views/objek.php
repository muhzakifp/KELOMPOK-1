<?php

require_once '../SimpanData/SimpanData.php';
require_once '../fileOOP/MotorBesar.php';
require_once '../fileOOP/MobilKonvesional.php';

$database = new SimpanData();


$motor = new MotorBesar("AAA 7654 BC", "Vario","Vario123",2020,25000000,"O-Ring","Standart");
$mobilK = new MobilKonvesional("B 2331 AW", "Honda", "Brio Satya", 2024, 200000000, 1200, "Bensin");

$result = $database->simpanKendaraan($motor);
$resultMobilK = $database->simpanKendaraan($mobilK);


if($result){
    echo "Data berhasil disimpan";
}else{
    echo "Data gagal disimpan";
}

if($resultMobilK){
    echo "Data Mobil Konvesional berhasil disimpan";
}else{
    echo "Data Mobil Konvesional gagal disimpan";
}