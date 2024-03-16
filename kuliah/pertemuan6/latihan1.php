 <?php
//  pertemuan dengan menonton youtube (online)

// assosiative array

$mahasiswa = [
    [
    "nama" => "Ariel Wijaya Kusuma",
    "nrp" => "233040088",
    "email" => "arielkusuma17@gmail.com",
    "kelas" => "C"
    ],
    [
        "nama" => "random",
        "nrp" => "233040111",
        "email" => "random@gmail.com",
        "kelas" => "b",
        ]


];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>Nrp : <?= $mhs["nrp"] ?></li>
            <li>Email : <?= $mhs["email"] ?></li>
            <li>Kelas : <?= $mhs["kelas"] ?></li>

        </ul>
    

    <?php endforeach; ?>
    
    
</body>
</html>

