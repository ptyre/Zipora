<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $id = $_POST('_id');
    $judul = $_POST('_judul');
    $informasi = $_POST('_informasi');
    $id_jenisinfo = $_POST('_id_jenisinfo');

    if( $id != "")
    {
        $query = "UPDATE `tb_informasi` SET `judul`= '$judul',`informasi`= '$informasi',`id_jenisinfo`= '$id_jenisinfo', WHERE id = '$id'";
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