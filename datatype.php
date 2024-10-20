<?php
// String
$nama = "Aga Maulana"; 
echo "Nama: $nama<br>"; // Menampilkan nama

// Integer
$usia = 20; 
echo "Usia: ";
var_dump($usia);
echo "<br>"; 

// String 
$alamat = "Yogyakarta";
echo "Alamat: ";
var_dump($alamat);
echo "<br>"; 

// Boolean 
$keanggotaanKlub = true; 
echo "Keanggotaan Klub: ";
var_dump($keanggotaanKlub);
echo "<br>"; 

// Array 
$daftarHobi = array("Menggambar", "Membaca", "Bersepeda"); 
echo "Daftar Hobi: ";
var_dump($daftarHobi);
echo "<br>";

// Object
class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message() {
        return "Mobil saya adalah " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("Hitam", "BMW");
echo "Mobil: ";
var_dump($myCar);
echo "<br>"; 
?>


