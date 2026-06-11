<?php

require_once '../SimpanData/SimpanData.php';
require_once '../fileOOP/MotorBesar.php';

$database = new SimpanData();

$motor = new MotorBesar(
    "B 4567 K",
    "Honda",
    "CBR1000RR",
    2024,
    550000000,
    "O-Ring",
    "Sport"
);
$result = $database->simpanKendaraan($motor);


if($result){
    echo "Data berhasil disimpan";
}else{
    echo "Data gagal disimpan";
}