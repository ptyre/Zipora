<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $id_class = $_POST['_id_class'];
    $nameclass = $_POST['_name_class'];
    $deskripsi = $_POST['_deskripsi'];

    if( $id_class != "")
    {
        $query = "UPDATE `tb_class` SET `name_class`= '$nameclass',`deskripsi`= '$deskripsi' WHERE id_class = '$id_class'";
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