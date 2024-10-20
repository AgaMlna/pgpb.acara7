<?php
// Output Variables
$nama = "Aga Maulana";
$usia = 20;
$nilaiMatematika = 85;
$nilaiFisika = 90;
$nilaiKimia = 88;

// Menampilkan informasi menggunakan echo
echo "Nama: $nama<br>"; 
echo "Usia: $usia<br>"; 
echo "Nilai Matematika: $nilaiMatematika<br>"; 
echo "Nilai Fisika: $nilaiFisika<br>"; 
echo "Nilai Kimia: $nilaiKimia<br>"; 

// Menampilkan hasil penjumlahan dua variabel
$jumlahNilai = $nilaiMatematika + $nilaiFisika + $nilaiKimia;
echo "Jumlah total nilai: $jumlahNilai<br>"; 

// Menghitung dan menampilkan rata-rata nilai
$rataRata = $jumlahNilai / 3;
echo "Rata-rata nilai: " . $rataRata . "<br>"; 

// Mengoutput tipe data variabel
echo "<br>Tipe data variabel:<br>";
var_dump($nama);            
var_dump($usia);            
var_dump($nilaiMatematika); 
var_dump($nilaiFisika);    
var_dump($nilaiKimia);      

// Mengassign string ke variabel lain
$greeting = "Selamat datang, $nama!";
echo "<br>$greeting<br>"; 

// Mengassign nilai yang sama ke beberapa variabel
$var1 = $var2 = $var3 = "Pelajaran";
echo "Nilai dari var1: $var1, var2: $var2, var3: $var3<br>"; 
?>

