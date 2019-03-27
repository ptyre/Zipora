<?php
	include '../connection.php';

	$con = mysqli_connect($host, $user, $password, $db);

	if (!$con) {
		die(mysqli_connect_error($con));
	}

	$id = $_POST['id'];

	$query = "SELECT tb_informasi.id, tb_informasi.judul, tb_informasi.pict, tb_informasi.informasi, tb_informasi.tgl, tb_jenisinfo.jenisinformasi FROM tb_informasi INNER JOIN tb_jenisinfo ON tb_jenisinfo.id = tb_informasi.id_jenisinfo WHERE jenisinformasi != 'article' AND tb_informasi.id = '$id'";
	$result = mysqli_query($con, $query);

	if (mysqli_num_rows($result) > 0) {
		$arr_rak = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$arr_rak[] = $row;
		}
		echo json_encode($arr_rak);
	}
	else {
		echo "Tidak terdapat";
	}