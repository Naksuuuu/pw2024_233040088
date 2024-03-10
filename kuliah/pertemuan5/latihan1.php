<?php

// 1. belajar membuat array di php
$hari = array("Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"); // cara lama
$bulan = ["Januari","Februari","Maret"];
$mahasiswa = ["Ariel Wijaya", 3.68 , false];
// 2. cara mencetak isi array
foreach ($hari as $x) {
    echo "$x <br>";
}

echo "<hr>";


// 3. manipulasi array
    // menambah isi array di akhir

    $hari[] = "minggu";
        // atau array_push($hari);

    array_push($bulan,"april");
    
        // print_r($bulan);
    echo $bulan[3];

    // menambah di depan

    array_unshift($mahasiswa, 233040088, "Kelas C");


    // menghapus isi array di akhir
    array_pop($hari);

    // mengahpus isi array di awal

    array_shift($hari);






// cetak seluruh array (khusus untuk debugging)
echo "<br> <hr>";
var_dump($hari);

echo "<br> <hr>";
print_r($bulan);

echo "<br> <hr>";
print_r($mahasiswa);