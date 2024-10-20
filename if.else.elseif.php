<?php
$nama = "Aga Maulana";
$usia = 20;
$nilaiMatematika = 85;
$nilaiFisika = 90;
$nilaiKimia = 88;

// Menghitung rata-rata nilai
$rataRata = ($nilaiMatematika + $nilaiFisika + $nilaiKimia) / 3;

// Menggunakan if statement untuk memeriksa usia
if ($usia >= 18) {
    echo "$nama, Anda sudah dewasa karena usia Anda $usia tahun.<br>";
}

// Menggunakan if...else statement untuk memeriksa status lulus atau tidak
if ($rataRata >= 75) {
    echo "$nama, Anda lulus dengan rata-rata nilai $rataRata.<br>";
} else {
    echo "$nama, Anda tidak lulus. Rata-rata nilai Anda hanya $rataRata.<br>";
}

// Menggunakan if...elseif...else statement untuk memberikan grade nilai
if ($rataRata >= 90) {
    echo "Grade: A<br>";
} elseif ($rataRata >= 80) {
    echo "Grade: B<br>";
} elseif ($rataRata >= 70) {
    echo "Grade: C<br>";
} else {
    echo "Grade: D<br>";
}

// Menggunakan switch statement untuk memberi komentar pada rata-rata nilai
switch (true) {
    case ($rataRata >= 90):
        echo "Komentar: Sangat Baik!<br>";
        break;
    case ($rataRata >= 80):
        echo "Komentar: Baik.<br>";
        break;
    case ($rataRata >= 70):
        echo "Komentar: Cukup.<br>";
        break;
    default:
        echo "Komentar: Perlu Peningkatan.<br>";
        break;
}
?>
