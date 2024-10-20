<?php
$usia = 20;
$nilaiMatematika = 85;
$nilaiFisika = 90;
$nilaiKimia = 88;

// Fungsi pi()
echo "Nilai PI: " . pi() . "<br>";

// Fungsi min() dan max()
echo "Nilai terendah (min): " . min($nilaiMatematika, $nilaiFisika, $nilaiKimia) . "<br>";
echo "Nilai tertinggi (max): " . max($nilaiMatematika, $nilaiFisika, $nilaiKimia) . "<br>";

// Fungsi abs()
$selisih = $nilaiFisika - $nilaiMatematika;
echo "Nilai mutlak dari selisih Nilai Fisika dan Matematika: " . abs($selisih) . "<br>";

// Fungsi sqrt()
echo "Akar kuadrat dari usia: " . sqrt($usia) . "<br>";

// Fungsi round()
$rataRata = ($nilaiMatematika + $nilaiFisika + $nilaiKimia) / 3;
echo "Rata-rata nilai (sebelum dibulatkan): $rataRata<br>";
echo "Rata-rata nilai (dibulatkan): " . round($rataRata) . "<br>";

// Fungsi rand()
echo "Angka acak antara 10 dan 100: " . rand(10, 100) . "<br>";

?>
