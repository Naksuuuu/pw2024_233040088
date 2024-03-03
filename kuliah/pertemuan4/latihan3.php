<?php

function cetak_angka($c) {
    for($i = 1; $i <= $c; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo $i . " ";
        }
    
        echo "<br>";
    }
}

echo cetak_angka(5);