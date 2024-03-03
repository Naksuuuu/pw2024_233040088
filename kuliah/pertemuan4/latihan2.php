<?php

function total_volume_dua_kubus($kubusA, $kubusB) {

$volumeA = $kubusA * $kubusA * $kubusA ;
$volumeB = $kubusB * $kubusB * $kubusB ;

$total = $volumeA + $volumeB;
return $total;
   

}

echo "total volume kubus A&B = " . total_volume_dua_kubus(9,4);

echo "<br>";

echo "total volume kubus C&D = " . total_volume_dua_kubus(10,15);


