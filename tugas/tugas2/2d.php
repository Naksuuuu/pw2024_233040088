<!DOCTYPE html>
<html>
<head>
    <title>papan catur</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            width: 340px; 
        }
        .box {
            width: 60px;
            height: 60px;
            border: 1px solid black;
            display: inline-block;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            if (($i + $j) % 2 == 0) {
                echo "<div class='box black'></div>";
            } else {
                echo "<div class='box white'></div>";
            }
        }
    }
    ?>
</div>

</body>
</html>