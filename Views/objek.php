<?php

require_once '../SimpanData/SimpanData.php';
require_once '../fileOOP/MotorBesar.php';

$database = new SimpanData();


$motor = new MotorBesar(
    "D 8888 MOG", 
    "Honda",
    "CBR1000RR",
    2024,
    550000,
    "O-Ring",
    "Sport"
);
$result = $database->simpanKendaraan($motor);


if($result){
    echo "Data berhasil disimpan";
}else{
    echo "Data gagal disimpan";
}