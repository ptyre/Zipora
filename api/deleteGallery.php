<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $id_gallery = $_POST['_idgallery'];

    if( $id_gallery != "")
    {
        $query = "DELETE FROM `tb_galery` WHERE id = '$id_gallery'";
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