<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");

    mysqli_select_db($conn, "prakweb_a_203040035_pw");

    return $conn;
}

// function untuk melakukan query dan memasukkannya ke dalam array
function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $judul_buku = htmlspecialchars ($data["judul_buku"]);
    $jenis_buku = htmlspecialchars ($data["jenis_buku"]);
    $penulis_buku = htmlspecialchars ($data["penulis_buku"]);
    $terbit_buku = htmlspecialchars ($data["terbit_buku"]);
    $gambar_buku = htmlspecialchars ($data["gambar_buku"]);
    // $img = htmlspecialchars ($data["img"]);

    // upload img
    $gambar_buku = upload();
    if (!$gambar_buku) {
        return false;
    }

    $query = "INSERT INTO
                buku
            VALUES
                (null, '$judul_buku', '$jenis_buku', '$penulis_buku', '$terbit_buku', '$gambar_buku');
            ";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id_buku = $data['id_buku'];
    $judul_buku = htmlspecialchars ($data["judul_buku"]);
    $jenis_buku = htmlspecialchars ($data["jenis_buku"]);
    $penulis_buku = htmlspecialchars ($data["penulis_buku"]);
    $terbit_buku = htmlspecialchars ($data["terbit_buku"]);
    $gambar_buku = htmlspecialchars ($data["gambar_buku"]);

    $query = "UPDATE buku
                SET
                judul_buku = '$judul_buku',
                jenis_buku = '$jenis_buku',
                penulis_buku = '$penulis_buku',
                terbit_buku = '$terbit_buku',
                gambar_buku = '$gambar_buku'
            WHERE id_buku = $id_buku";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// fungsi menghapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id_buku") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}