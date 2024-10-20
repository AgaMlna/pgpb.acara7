<?php
$nama = "Aga Maulana";
$pesan = "Selamat datang di W3Schools, $nama!";
$pesanTanpaVariabel = 'Selamat datang di W3Schools, $nama!'; 

// Menggunakan double quotes 
echo "Menggunakan double quotes: $pesan<br>"; 

// Menggunakan single quotes 
echo "Menggunakan single quotes: $pesanTanpaVariabel<br>"; 

// Menghitung panjang string menggunakan strlen()
$panjangNama = strlen($nama);
echo "Panjang string 'Aga Maulana' adalah: $panjangNama karakter<br>";

// Menghitung jumlah kata menggunakan str_word_count()
$jumlahKata = str_word_count($pesan);
echo "Jumlah kata dalam pesan: $jumlahKata kata<br>";

// Mencari teks dalam string menggunakan strpos()
$posisiTeks = strpos($pesan, "W3Schools");
if ($posisiTeks !== false) {
    echo "Teks 'W3Schools' ditemukan di posisi: $posisiTeks<br>";
} else {
    echo "Teks 'W3Schools' tidak ditemukan.<br>";
}

// Mencari teks yang tidak ada dalam string
$posisiTeksTidakAda = strpos($pesan, "Universitas");
if ($posisiTeksTidakAda !== false) {
    echo "Teks 'Universitas' ditemukan di posisi: $posisiTeksTidakAda<br>";
} else {
    echo "Teks 'Universitas' tidak ditemukan.<br>";
}
?>
