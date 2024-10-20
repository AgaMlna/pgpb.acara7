<?php
$usia = 20;                
$berat = 70.5;             
$nilaiFisika = 90;          
$nilaiMatematika = "85";    
$jarakLari = "5000";      

// Menampilkan tipe data dari setiap variabel
echo "Tipe data variabel:<br>";
var_dump($usia);           
var_dump($berat);          
var_dump($nilaiFisika);     
var_dump($nilaiMatematika); 
var_dump($jarakLari);      

echo "<br>";

// Memeriksa infinity
$infinity = 1.9e411; 
echo "Apakah \$infinity infinite? " . (is_infinite($infinity) ? "Ya" : "Tidak") . "<br>";
var_dump($infinity);

echo "<br>";
?>
