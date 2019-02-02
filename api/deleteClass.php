<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $id_class = $_POST['_id_class'];

    if( $id_class != "")
    {
        $query = "DELETE FROM `tb_class` WHERE id_class = '$id_class'";
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