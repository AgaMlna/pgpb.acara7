<?php
$nama = "Aga Maulana";
$usia = 20;
$nilaiMatematika = 85;
$nilaiFisika = 90;
$nilaiKimia = 88;

// Menggunakan echo untuk menampilkan teks dan variabel
echo "<h2>Data Siswa</h2>";
echo "<p>Nama: $nama</p>"; 
echo "<p>Usia: $usia</p>";
echo "<p>Nilai Matematika: $nilaiMatematika</p>";
echo "<p>Nilai Fisika: $nilaiFisika</p>";
echo "<p>Nilai Kimia: $nilaiKimia</p>";
echo "<p>Rata-rata nilai: " . (($nilaiMatematika + $nilaiFisika + $nilaiKimia) / 3) . "</p>"; 

// Menggunakan print untuk menampilkan teks dan variabel
print "<h2>Nilai</h2>";
print "<p>Nama: $nama</p>"; 
print "<p>Usia: $usia</p>";
print "<p>Nilai Matematika: $nilaiMatematika</p>";
print "<p>Nilai Fisika: $nilaiFisika</p>";
print "<p>Nilai Kimia: $nilaiKimia</p>";
print "<p>Rata-rata nilai: " . (($nilaiMatematika + $nilaiFisika + $nilaiKimia) / 3) . "</p>";
?>

