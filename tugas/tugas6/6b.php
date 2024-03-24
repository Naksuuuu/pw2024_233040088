
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
<br>
<br>

<form action="" method="post">
    <label for="number">Masukan angka:</label>
    <input type="text" name="number" id="number">

    <button type="submit" name="submit">Tampilkan</button>
</form>

<br>
<br>

<div class="container">
    <?php 
    if (isset($_POST["submit"])) {
        $num = intval($_POST["number"]);
    } else {
        exit;
    }
    ?>
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