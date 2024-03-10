<?php

$binatang = ["😺","🐰","🐵","🐼","🐨"];

array_push($binatang,"🐊");


$makanan = ["🍙","🍢","🍩","🍳"];

// foreach ($binatang as $x) {
   
//     echo "<ol>
//     <li>$x</li>
//     </ol>";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ol>
    <?php for($i = 0; $i < count($binatang); $i++) { 
    echo "<li>$binatang[$i]</li>";
     } ?>
</ol>
<br> <hr>
<h3>Daftar makanan</h3>
<ul>
    <?php for($i = 0; $i < count($makanan); $i++) { 
    echo "<li>$makanan[$i]</li>";
     } ?>
</ul>    

<br><hr>
<h3>Daftar binatang</h3>

<ol>
    <?php  
    foreach ($binatang as $b) {
    echo "<li>$b</li>";
    } 
     ?>
</ol>

<br><hr>
<h3>Daftar binatang</h3>

<ol>
    <?php  
    foreach ($makanan as $m) {
    echo "<li>$m</li>";
    } 
     ?>
</ol>


</body>
</html>