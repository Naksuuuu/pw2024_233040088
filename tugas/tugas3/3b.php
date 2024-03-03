<?php

function cetak_angka($baris) {

    $nilai_awal = 1;
    for($i = 1; $i <= $baris; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo $nilai_awal++ . " ";
        }
    
        echo "<br>";
    }
}

echo cetak_angka(5);