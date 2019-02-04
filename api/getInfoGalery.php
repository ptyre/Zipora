<?php
	include 'connection.php';

	$con = mysqli_connect($host, $user, $password, $db);

	if (!$con) {
		die(mysqli_connect_error($con));
	}

	$qr = "SELECT tb_galery.id, tb_jenisgallery.nama_jenis, tb_galery.tgl, tb_galery.info ,tb_galery.pict FROM tb_galery INNER JOIN tb_jenisgallery ON tb_jenisgallery.id_jenisgalery = tb_galery.jenis";
	$result = mysqli_query($con, $qr);

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