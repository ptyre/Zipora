<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $id_gallery = $_POST['_id_gallery'];
    $info = $_POST['_info'];
    $tgl = $_POST['_tgl'];
    $jenis = $_POST['_jenis'];

    if( $id_gallery != "")
    {
        $query = "UPDATE `tb_galery` SET `info`= '$info',`tgl`= '$tgl',`jenis`= '$jenis' WHERE id = '$id_gallery'";
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