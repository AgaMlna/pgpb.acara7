<?php
$nama = "Aga Maulana";
$usia = 20;
$nilai = [
    "Matematika" => 85,
    "Fisika" => 90,
    "Kimia" => 88,
    "Biologi" => 92
];

// WHILE Loop: Menampilkan nama dan usia
echo "Menggunakan WHILE Loop:<br>";
$counter = 0;
while ($counter < 3) { // Loop 3 kali
    echo "Nama: $nama, Usia: $usia<br>";
    $counter++;
}

// DO-WHILE Loop: Menampilkan pesan setidaknya sekali
echo "<br>Menggunakan DO-WHILE Loop:<br>";
$counter = 0;
do {
    echo "Nama: $nama, Usia: $usia<br>";
    $counter++;
} while ($counter < 1); 

// FOR Loop: Menampilkan nilai tiap mata pelajaran
echo "<br>Menggunakan FOR Loop:<br>";
$subjects = array_keys($nilai); 
$subjectCount = count($subjects);

for ($i = 0; $i < $subjectCount; $i++) {
    $subject = $subjects[$i];
    echo "Nilai $subject: " . $nilai[$subject] . "<br>";
}

// FOREACH Loop: Menghitung dan menampilkan rata-rata nilai
echo "<br>Menggunakan FOREACH Loop untuk menghitung rata-rata:<br>";
$totalNilai = 0;
$totalPelajaran = 0;

foreach ($nilai as $subject => $nilaiPelajaran) {
    echo "Nilai $subject: $nilaiPelajaran<br>";
    $totalNilai += $nilaiPelajaran;
    $totalPelajaran++;
}

$rataRata = $totalNilai / $totalPelajaran;
echo "Rata-rata nilai: $rataRata<br>";
?>
