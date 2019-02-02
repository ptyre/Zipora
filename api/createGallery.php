<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $pict = $_POST['_pict'];
    $info = $_POST['_info'];
    $tgl = $_POST['_tgl'];
    $jenis = $_POST['_jenis'];

    if( $pict != "" && $tgl != "" && $jenis != "")
    {
        $query = "INSERT INTO `tb_galery`(`id`, `pict`, `info`, `tgl`, `jenis`) VALUES (NULL, '$pict', '$info', '$tgl', '$jenis')";
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