<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $name = $_POST['_name'];
    $email = $_POST['_email'];
    $alamat = $_POST['_alamat'];
    $telp = $_POST['_telp'];
    $institusi = $_POST['_institusi'];
    $tgl_masuk = $_POST['_tgl_masuk'];
    $id_class = $_POST['_id_class'];

    if($name != "")
    {
        $query = "INSERT INTO `tb_member`(`id_member`, `name`, `email`, `telp`,`alamat`, `institusi`, `tgl_masuk`, `id_class`) VALUES (NULL, '$name', '$email', '$telp', '$alamat', '$institusi', '$tgl_masuk', '$id_class')";
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