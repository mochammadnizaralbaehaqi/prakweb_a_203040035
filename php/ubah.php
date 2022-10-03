<?php
require "functions.php";

$id = $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id_buku = $id")[0];

if (isset($_POST["ubah"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
                </script>";
    }else {
        echo "<script>
                alert('Data gagal diubah!');
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
    <title>Ubah Data</title>

    <body>

        <h4 class="light center grey-text text-darken-3">Ubah Data Buku</h4>

    <div class="container">
        <form action="" method="POST">
            <ul>
                <li>
                    <input type="hidden" name="id_buku" id="id_buku" value="<?= $buku['id_buku']; ?>">
                </li>

                <li>
                    <label for="judul_buku">Judul :</label>
                    <input type="text" name="judul_buku" id="judul_buku" required value="<?= $buku['judul_buku']; ?>">
                </li>

                <li>
                    <label for="jenis_buku">Jenis :</label>
                    <input type="text" name="jenis_buku" id="jenis_buku" required value="<?= $buku['jenis_buku']; ?>">
                </li>

                <li>
                    <label for="penulis_buku">Penulis :</label>
                    <input type="text" name="penulis_buku" id="penulis_buku" required value="<?= $buku['penulis_buku']; ?>">
                </li>

                <li>
                    <label for="terbit_buku">Terbit :</label>
                    <input type="text" name="terbit_buku" id="terbit_buku" required value="<?= $buku['terbit_buku']; ?>">
                </li>

                <li>
                    <label for="gambar_buku">Gambar :</label>
                    <input type="text" name="gambar_buku" id="gambar_buku" required value="<?= $buku['gambar_buku']; ?>">
                </li>

    <br>

                <div class="center-align">
                    <button class="waves-effect waves-light btn-small" type="submit" name="ubah">UBAHk</button>
                    <button class="waves-effect waves-light btn-small" type="submit">
                        <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
                    </button>
                </div>
            </ul>
        </form>
    </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="../js/materialize.min.js"></script>
    </body>
</html>