<?php
$nilai = 85;

// Menggunakan switch untuk menampilkan kategori berdasarkan nilai
switch (true) {
  case ($nilai >= 85):
    echo "Kategori: Sangat Baik";
    break;
  case ($nilai >= 70 && $nilai < 85):
    echo "Kategori: Baik";
    break;
  case ($nilai >= 60 && $nilai < 70):
    echo "Kategori: Cukup";
    break;
  default:
    echo "Kategori: Remedial";
    break;
}
?>
