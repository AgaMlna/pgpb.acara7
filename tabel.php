<!DOCTYPE html>
<html>
<body>
<?php

$places = array("Jakarta", "Surabaya", "Bandung", "Yogyakarta");
$population = array("10,562,088", "2,874,314", "2,444,160", "422,732");
$area = array("661.52 km²", "326.81 km²", "167.67 km²", "32.5 km²"); 

echo "<table border='1'>";
echo "<tr><th>Nama Kota</th><th>Jumlah Penduduk</th><th>Luas Wilayah</th></tr>"; 

for ($i = 0; $i < count($places); $i++) {
    echo "<tr><td>$places[$i]</td><td>$population[$i]</td><td>$area[$i]</td></tr>"; 
}
echo "</table>";

?>
</body>
</html>

