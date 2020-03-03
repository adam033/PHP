<?php
$arrNilai = array ("Ani" =>80, "Otim" => 90, "Ana" => 75,"Budi" => 85);

echo "Menampilkan isi array dengan foreach : <br>";
foreach($arrNilai as $nama => $nilai){
    echo "Nilai $nama = $nilai<br>";
}
reset ($arrNilai);
echo "<br>MEnampilkan isi array dengan while dan list : <br>";
while (list ($nama, $nilai) = each($arrNilai)){
    echo "Nilai $nama = $nilai<br>";
}
?>