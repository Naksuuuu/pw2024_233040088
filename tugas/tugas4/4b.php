<?php

$komputer = ["Motherboard","Processor","Hard Disk","PC Coller","VGA Card","SSD"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macam Macam Perangkat Keras Komputer</title>
</head>
<body>


<h2>Macam-macam perangkat keras Komputer</h2>
<ol>
    <?php
    foreach($komputer as $k) {
        echo "<li>$k</li>";
    }
    ?>
</ol>
<br> <hr>

<h2>Macam-macam perangkat keras Komputer Baru</h2>

<ol>
    <?php  

    array_push($komputer,"Card Reader","Modem");

    sort($komputer);

    foreach ($komputer as $k) {
    echo "<li>$k</li>";
    } 
     ?>
</ol>




</body>
</html>