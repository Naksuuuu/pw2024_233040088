 <?php

 // pengulangan : while,for
 // while (kondisi) {
    // selama kondisi bernilai true maka aksi akan di jalankan
 // aksi
 // }

 echo "Mulai <br>";

 $nilai = 1;

 while($nilai <= 20) {
    if ($nilai % 2 == 0) {
        echo "Hello wordl $nilai" . "x <br>";
    }
    
    $nilai++;
 }

 echo "Selesai ";

 echo "<hr>";

 echo "mulai <br>";

 for ($i = 10; $i >= 1; $i--) {
    echo "Hello World $i x <br>";
 }

 echo "Selesai <br>";