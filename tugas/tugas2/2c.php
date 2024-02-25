<!DOCTYPE html>
<html>
<head>
    <title>nomber di box</title>
    <style>
        .box {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: orange;
        }
        .row {
            display: flex;
        }
    </style>
</head>
<body>

<?php

for ($i = 10; $i >= 1; $i--) {
    echo "<div class='row'>";
    for ($j = 1; $j <= $i; $j++) {
        echo "<div class='box'>$j</div>";
    }
    echo "<br>";
    echo "</div>";
}
?>

</body>
</html>