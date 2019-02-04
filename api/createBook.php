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
    $deskripsi_pendik = $_POST['_deskripsi_pendek'];
    $pict = $_POST['_pict'];

    if( $pict != "" && $id_buku != "" && $pengarang != "")
    {
        $query = "INSERT INTO `tb_buku`(`id_buku`, `judul_buku`, `pengarang`, `penerbit`, `tahun`, `kota`, `deskripsi`, `deskripsi_pendek`, `pict`) VALUES ('$id_buku','$judul_buku','$pengarang','$penerbit','$tahun','$kota','$deskripsi','$deskripsi_pendek','$pict')";
        $result = mysqli_query($con, $query);
        if( $result)
        {
            echo json_encode(array('announcement' => "Insert berhasil"));
        }
        else
        {
            echo json_encode(array('announcement' => "insert gagal"));
        }
    }
    else
    {
        echo json_encode(array('announcement' => "tidak ada data"));
    }
?>