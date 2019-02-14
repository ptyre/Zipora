<?php
	include '../connection.php';

	$con = mysqli_connect($host, $user, $password, $db);

	if (!$con) {
		die(mysqli_connect_error($con));
	}

	$jenis = $_POST['jenis'];

	$query = "SELECT tb_galery.id, tb_galery.pict, tb_galery.info, tb_galery.tgl, tb_galery.jenis FROM tb_galery WHERE jenis = '$jenis'";
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