<?php

class Koneksi{
    private $localhost = 'localhost';
    private $username = 'root';
    private $pw = '';
    protected $database = 'sr_kendaraan';
    protected $koneksi;

    public function __construct(){
       $this->koneksi = mysqli_connect($this->localhost,$this->username,$this->pw,$this->database);

       if(!$this->koneksi){
        echo "ERROR - Koneksi terputus ".mysqli_error();
       }
       //echo "Koneksi terhubung";
    }

    public  function aksesKoneksi(){
        return $this->koneksi;
    }
}


?>

