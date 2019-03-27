<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $id_admin = $_POST['_id_admin'];

    if( $id_admin != "")
    {
        $query = "DELETE FROM `tb_admin` WHERE id = '$id_admin'";
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