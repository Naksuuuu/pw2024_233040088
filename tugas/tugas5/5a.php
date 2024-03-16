<?php


$mahasiswa = [
    [
        "nama" => "Ariel Wijaya Kusuma",
        "nrp" => "233040088",
        "email" => "arielkusuma17@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "lancelot.jpg"
    ],
    [
        "nama" => "Hayabusa",
        "nrp" => "233040001",
        "email" => "hayabusa17@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "hayabusa.jpg"
    ],
    [
        "nama" => "Nolan",
        "nrp" => "233040002",
        "email" => "nolan17@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nolan.jpeg"
    ],
    [
        "nama" => "Fanny",
        "nrp" => "233040003",
        "email" => "fanny17@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "fanny.jpg"
    ],
    [
        "nama" => "Harley",
        "nrp" => "233040004",
        "email" => "harley17@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "harley.jpg"
    ],
    [
        "nama" => "Ahmad Brody",
        "nrp" => "233040005",
        "email" => "brody17@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "brody.jpg"
    ],
    [
        "nama" => "Alucard",
        "nrp" => "233040006",
        "email" => "alucard17@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "alucard.jpg"
    ],
    [
        "nama" => "Saber",
        "nrp" => "233040007",
        "email" => "saber17@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "saber.jpg"
    ],
    [
        "nama" => "Ling",
        "nrp" => "233040008",
        "email" => "ling17@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ling.jpg"
    ],
    [
        "nama" => "Zilong",
        "nrp" => "233040009",
        "email" => "zilong17@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "zilong.jpg"
    ],


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
            <li><img src="img/<?= $mhs["gambar"]?>" alt=""></li>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>Nrp : <?= $mhs["nrp"] ?></li>
            <li>Email : <?= $mhs["email"] ?></li>
            <li>Jurusan : <?= $mhs["jurusan"] ?></li>

        </ul>
        <hr>
    <?php endforeach; ?>
    
    
</body>
</html>

