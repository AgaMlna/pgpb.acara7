<?php
$nama = "Aga Maulana"; 
$usia = 20; 
$nilaiMatematika = 85;
$nilaiFisika = 90; 
$nilaiKimia = 88; 
$rataRata = ($nilaiMatematika + $nilaiFisika + $nilaiKimia) / 3; 

// Casting ke String
$usiaStr = (string) $usia;
$nilaiMatematikaStr = (string) $nilaiMatematika;
$rataRataStr = (string) $rataRata;
echo "Nama: $nama<br>";
echo "Nilai Matematika (String): $nilaiMatematikaStr<br>";
echo "Rata-rata Nilai (String): $rataRataStr<br>";

// Casting ke Integer
$rataRataInt = (int) $rataRata;
echo "<br>Rata-rata Nilai (Integer): $rataRataInt<br>";

// Casting ke Float
$usiaFloat = (float) $usia;
echo "Usia (Float): $usiaFloat<br>";

// Casting ke Boolean
$isPassed = (bool) ($rataRata > 75); // Jika rata-rata > 75, boolean true (lulus)
echo "Apakah Lulus? (Boolean): " . ($isPassed ? 'Ya' : 'Tidak') . "<br>";

// Casting ke Array
$nilaiArray = (array) $rataRata;
echo "Rata-rata Nilai dalam Bentuk Array: ";
print_r($nilaiArray);
echo "<br>";
?>
