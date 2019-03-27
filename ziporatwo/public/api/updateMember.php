<?php
    include 'connection.php';

    $con = mysqli_connect($host, $user, $password, $db);
    if (!$con) {
            die(mysqli_connect_error($con));
    }

    $id_member = $_POST['_id_member'];
    $name = $_POST['_name'];
    $email = $_POST['_email'];
    $alamat = $_POST['_alamat'];
    $telp = $_POST['_telp'];
    $institusi = $_POST['_institusi'];

    if( $id_member != "")
    {
        $query = "UPDATE `tb_member` SET `name`= '$name',`email`= '$email',`alamat`= '$alamat',`telp`= '$telp' ,`institusi`= '$institusi' WHERE id_member = $id_member";
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