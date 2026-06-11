<?php

require_once '../SimpanData/SimpanData.php';
require_once '../fileOOP/MotorBesar.php';

$database = new SimpanData();


$motor = new MotorBesar("AAA 7654 BC", "Vario","Vario123",2020,25000000,"O-Ring","Standart");


$result = $database->simpanKendaraan($motor);


if($result){
    echo "Data berhasil disimpan";
}else{
    echo "Data gagal disimpan";
}