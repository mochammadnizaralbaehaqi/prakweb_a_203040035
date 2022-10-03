<?php
require "functions.php";

// apakah tombol tambah sudah ditekan
if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0){
        echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

        <!-- css -->
        <link rel="stylesheet" href="../css/style.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <title>Tambah Data</title>

    <body>

        <h4 class="light center grey-text text-darken-3">Form Tambah Data Buku</h4>

    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="judul">Judul :</label>
                    <input type="text" name="judul" id="judul" required autocomplete="off" autofocus>
                </li>

                <li>
                    <label for="jenis">Jenis :</label>
                    <input type="text" name="jenis" id="jenis" required autocomplete="off">
                </li>

                <li>
                    <label for="penulis">Penulis :</label>
                    <input type="text" name="penulis" id="penulis" required autocomplete="off">
                </li>

                <li>
                    <label for="terbit">Terbit :</label>
                    <input type="text" name="terbit" id="terbit" required autocomplete="off">
                </li>

                <li>
                    <label for="img">Gambar :</label>
                    <input type="file" name="img" id="img" autocomplete="off">
                </li>

                <br>

                <div class="center-align">
                    <button class="waves-effect waves-light btn-small" type="submit" name="tambah">TAMBAH</button>

    <br><br>

                    <button class="waves-effect waves-light btn-small" type="submit">
                        <a href="../index.php" style="text-decoration: none; color: black;">KEMBALI</a>
                    </button>
                </div>
            </ul>
        </form>
    </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
</html>