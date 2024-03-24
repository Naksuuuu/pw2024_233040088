<?php 

if (isset($_POST["submit"])) {
    if($_POST["username"] === "admin" && $_POST["password"] === "admin") {
        
        header("Location: 6cadmin.php ");

        exit;

    } else {
        $err = true;

    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>LOGIN ADMIN</h1>
    <br>

    <?php if(isset($err)) : ?>
        <p style="color: red; font-style: italic;">username / password salah!</p>
        <?php endif ; ?>

    <br>
<form action="" method="post">

<label for="username">Username</label>
<input type="text" name="username" id="username">

<br> <br>

<label for="password">Password</label>
<input type="password" name="password" id="password">

<br> <br>

<button type="submit" name="submit">Login</button>

</form>
</div>
    
</body>
</html>