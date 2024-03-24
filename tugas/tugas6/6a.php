<?php

if (isset($_GET["number"])) {
    $num = intval($_GET["number"]);
} else {
    exit;
}

// $arr_number = range(1,$number);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOX</title>
    <style>

        * {
            margin: 0;
            padding: 0;
        }
        .wrapper {
            display: flex;
        }

        .box {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .orange {
            background-color: orange;
        }

        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <?php for ($num ; $num >= 1; $num--) : ?>
        <div class="wrapper">
            <?php for ($j = 1; $j <= $num; $j++) : ?>
                <p class="box <?php echo ($num % 2 == 0) ? 'orange' : 'white'; ?>"><?= $num ?></p>
            <?php endfor ; ?>
        </div>
    <?php endfor ; ?>
</div>
    
</body>
</html>