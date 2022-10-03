<?php
    //menghubungkan dengan file php lainnya
        require "php/functions.php";

    //melakukan query
        $buku = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="php/style.css">
</head>
<body>
    <div class="container">
    <h1>DAFTAR BUKU</h1>

    <div class="add">
        <div class="container">
            <div class="center-align">
                <br>
                <button type="button" class="btn btn-warning"><a class="white-text" href="php/tambah.php">TAMBAH</a></button>
                <br><br>
            </div>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Jenis</th>
                <th scope="col">Penulis</th>
                <th scope="col">Terbit</th>
            </tr>
        </thead>

    <tbody>
        <?php $i = 1;
        foreach($buku as $b) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><img src="pw/<?= $b['gambar_buku']?>" width = 100></td>
                <td><?= $b['judul_buku']?></td>
                <td><?= $b['jenis_buku']?></td>
                <td><?= $b['penulis_buku']?></td>
                <td><?= $b['terbit_buku']?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </div>
</body>

</body>
</html>