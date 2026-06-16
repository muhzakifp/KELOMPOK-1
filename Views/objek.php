<?php

require_once '../SimpanData/SimpanData.php';
require_once '../fileOOP/MotorBesar.php';
require_once '../fileOOP/MobilKonvesional.php';
require_once '../fileOOP/MobilListrik.php';

$database = new SimpanData();


$motor = new MotorBesar("R 7654 SK", "Vario","Vario123",2020,25000000,"O-Ring","Economic");
$mobilK = new MobilKonvesional("B 2331 AW", "Honda", "Brio Satya", 2024, 200000000, 1200, "Pertamax");
$mobilL = new MobilListrik("R 5765 WF","Lexus","Lexus RZ", 2025, 300000000, 50, 240 );

$dataKendaraan = [$motor,$mobilK,$mobilL];

foreach($dataKendaraan as $data){
    $database->simpanKendaraan($data);
}


