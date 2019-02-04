<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $id_buku = $_POST['_id_buku'];

    if( $id_buku != "")
    {
        $query = "DELETE FROM `tb_buku` WHERE id_buku = '$id_buku'";
        $result = mysqli_query($con, $query);
        if( $result)
        {
            echo json_encode(array('announcement' => "Delete berhasil"));
        }
        else
        {
            echo json_encode(array('announcement' => "Delete gagal"));
        }
    }
    else
    {
        echo json_encode(array('announcement' => "tidak ada data"));
    }
?>