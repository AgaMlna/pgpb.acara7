<?php
// Membuat Array
$pelajaran = array("Matematika", "Fisika", "Kimia");
$nilai = array(85, 90, 88);
$alatPraktikum = array("Theodolit", "Kompas", "Baak ukur");

// Mengakses Elemen Array
echo "Pelajaran pertama: " . $pelajaran[0] . "<br>"; 
echo "Nilai Fisika: " . $nilai[1] . "<br>"; 
echo "Alat praktikum pertama: " . $alatPraktikum[0] . "<br>"; 

// Menambah Elemen ke Array
$pelajaran[] = "Biologi"; 
$nilai[] = 92;
$alatPraktikum[] = "Mikroskop"; 

echo "Pelajaran setelah ditambahkan: ";
print_r($pelajaran);
echo "<br>";

// Menghapus Elemen dari Array
unset($alatPraktikum[2]); 
echo "Alat praktikum setelah dihapus: ";
print_r($alatPraktikum); 
echo "<br>";

// Menghitung Jumlah Elemen dalam Array
echo "Jumlah pelajaran: " . count($pelajaran) . "<br>"; 
echo "Jumlah nilai: " . count($nilai) . "<br>"; 
echo "Jumlah alat praktikum: " . count($alatPraktikum) . "<br>"; 

// Mengurutkan Array (Sort)
sort($nilai); 
echo "Nilai setelah diurutkan: ";
print_r($nilai); 
?>
