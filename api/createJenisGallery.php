<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $nama_jenis = $_POST['_nama_jenis'];

    if($nama_jenis != "")
    {
        $query = "INSERT INTO `tb_jenisgallery`(`id_jenisgalery`, `nama_jenis`) VALUES (NULL, '$nama_jenis')";
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