<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $nameclass = $_POST['_name_class'];
    $deskripsi = $_POST['_deskripsi'];

    if( $nameclass != "")
    {
        $query = "INSERT INTO `tb_class` (`id_class`, `name_class`, `deskripsi`) VALUES (NULL, '$nameclass', '$deskripsi');";
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