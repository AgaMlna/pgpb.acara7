<?php
// Data awal
$x = 10;
$y = 5;

// PHP Arithmetic Operators 
$penjumlahan = $x + $y;
$pengurangan = $x - $y;
$perkalian = $x * $y;
$pembagian = $x / $y;
$modulus = $x % $y;

echo "Penjumlahan (x + y): $penjumlahan<br>";
echo "Pengurangan (x - y): $pengurangan<br>";
echo "Perkalian (x * y): $perkalian<br>";
echo "Pembagian (x / y): $pembagian<br>";
echo "Modulus (x % y): $modulus<br><br>";

// PHP Assignment Operators (x = y dan x += y)
$x = 10; 
echo "(x = 10): $x<br>";

$x += $y; // x = x + y
echo "(x += y): $x<br><br>";

// PHP Comparison Operators (Perbandingan: equal dan identical)
$x = 10;
$y = "10"; 

$isEqual = ($x == $y); 
$isIdentical = ($x === $y);

echo "Apakah x == y (equal)? " . var_export($isEqual, true) . "<br>";
echo "Apakah x === y (identical)? " . var_export($isIdentical, true) . "<br>";
?>
