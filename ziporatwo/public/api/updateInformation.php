<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $id = $_POST['_id'];
    $judul = $_POST['_judul'];
    $informasi = $_POST['_informasi'];
    $tgl = $_POST['_tgl'];

    if( $id != "")
    {
        $query = "UPDATE tb_informasi SET judul = '$judul', informasi = '$informasi', tgl = '$tgl' WHERE id = '$id'";
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