<?php

/* karna menggunakan nilai phi yang ada di php saya menggunakan
 number_format dan substr agar angka di belakang koma tidak di bulatkan ke atas ataupun ke bawah.
 */


echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran ($r) {
    $hasil = M_PI * ($r * $r);
    $format_hasil = number_format($hasil, 2,',','.');
    $hasil_akhir = substr($format_hasil,0,-3);

    return $hasil_akhir . " cm<sup>2</sup>";
}


$nilai_jari2_a = 10;

echo "Jari-jari = $nilai_jari2_a cm <br>";

echo "Luas lingkaran = " . hitungLuasLingkaran($nilai_jari2_a);

echo "<hr>";


echo "<h4>Menghitung keliling Lingkaran</h4>";
function hitungKelilingLingkaran ($r) {
$hasil = M_PI * 2 * $r;


$string_hasil = number_format($hasil, 3,',');
$hasil_akhir = substr($string_hasil, 0, -2);
return $hasil_akhir . " cm";





}

$nilai_jari2_b = 20;

echo "Jari-jari = $nilai_jari2_b cm <br>";

echo "Keliling lingkaran = " . hitungKelilingLingkaran($nilai_jari2_b);


