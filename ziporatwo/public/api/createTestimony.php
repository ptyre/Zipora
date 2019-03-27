<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $nama = $_POST['_nama'];
    $text = $_POST['_text'];
    $pict = $_POST['_picture'];

    if( $nama != "")
    {
        $query = "INSERT INTO `tb_testimoni`(`id`, `nama`, `text`, `pict`) VALUES (NULL, '$nama', '$text','$pict')";
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