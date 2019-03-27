<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $id_buku = $_POST['_id_buku'];
    $judul_buku = $_POST['_judul_buku'];
    $pengarang = $_POST['_pengarang'];
    $penerbit = $_POST['_penerbit'];
    $tahun = $_POST['_tahun'];
    $kota = $_POST['_kota'];
    $deskripsi = $_POST['_deskripsi'];
    $deskripsi_pendek = $_POST['_deskripsi_pendek'];

    if( $id_buku != "")
    {
        $query = "UPDATE `tb_buku` SET `judul_buku`= '$judul_buku',`pengarang`= '$pengarang',`penerbit`= '$penerbit',`tahun`= '$tahun',`kota`= '$kota',`deskripsi`= '$deskripsi',`deskripsi_pendek`= '$deskripsi_pendek' WHERE id_buku = '$id_buku'";
        $result = mysqli_query($con, $query);
        if( $result)
        {
            echo json_encode(array('announcement' => "Update berhasil"));
        }
        else
        {
            echo json_encode(array('announcement' => "Update gagal"));
        }
    }
    else
    {
        echo json_encode(array('announcement' => "tidak ada data"));
    }
?>