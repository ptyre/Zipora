<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $username = $_POST['_username'];
    $password = $_POST['_password'];
    $namename = $_POST['_name'];

    if( $username != "")
    {
        $query = "INSERT INTO `tb_admin`(`id`, `username`, `password`, `nama`, `status`) VALUES (NULL,'$username',MD5('$password'),'$namename','false')";
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