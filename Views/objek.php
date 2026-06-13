<?php

require_once '../SimpanData/SimpanData.php';
require_once '../fileOOP/MotorBesar.php';
require_once '../fileOOP/MobilKonvesional.php';

$database = new SimpanData();


$motor = new MotorBesar("R 7654 SK", "Vario","Vario123",2020,25000000,"O-Ring","Economic");
$mobilK = new MobilKonvesional("B 2331 AW", "Honda", "Brio Satya", 2024, 200000000, 1200, "Pertamax");
//tinggal objek mobil listrik

$dataKendaraan = [$motor,$mobilK];

foreach($dataKendaraan as $data){
    $database->simpanKendaraan($data);
}


