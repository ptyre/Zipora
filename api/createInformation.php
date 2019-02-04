<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $judul = $_POST['_judul'];
    $pict = $_POST['_pict'];
    $informasi = $_POST['_informasi'];
    $id_jenisinfo = $_POST['_id_jenisinfo'];
    $tgl = $_POST['_tgl'];

    if( $judul != "")
    {
        $query = "INSERT INTO `tb_informasi`(`id`, `judul`, `pict`, `informasi`, `id_jenisinfo`, `tgl`) VALUES (NULL, '$judul', '$pict', '$informasi', '$id_jenisinfo', '$tgl')";
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