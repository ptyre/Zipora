<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $jenis_info = $_POST['_jenis_info'];

    if($jenis_info != "")
    {
        $query = "INSERT INTO `tb_jenisinfo`(`id`, `jenisinformasi`) VALUES (NULL,'$jenis_info')";
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