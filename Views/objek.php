<?php

require_once '../SimpanData/SimpanData.php';
require_once '../fileOOP/MotorBesar.php';

$database = new SimpanData();

$motor = new MotorBesar(
    "MB001",
    "Honda",
    "CBR1000RR",
    2024,
    550000000,
    "O-Ring",
    "Sport"
);

if($database->simpanKendaraan($motor)){
    echo "Data berhasil disimpan";
}else{
    echo "Data gagal disimpan";
}