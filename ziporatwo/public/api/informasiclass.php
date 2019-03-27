<?php
	include 'connection.php';

	$con = mysqli_connect($host, $user, $password, $db);

	if (!$con) {
		die(mysqli_connect_error($con));
	}

	$query = mysqli_query($con, "SELECT id, judul, informasi, pict, tgl FROM tb_informasi");

	$result = array();
	while ($row = mysqli_fetch_array($query)) {
		array_push($result, array(
			'id' => $row['id'],
			'judul' => $row['judul'],
			'informasi' => $row['informasi'],
			'pict' => $row['pict'],
			'tgl' => $row['tgl']
		));
	}

	$query = mysqli_query($con, "SELECT name_class, deskripsi FROM tb_class");
	$result2 = array();
	while ($row = mysqli_fetch_assoc($query)) {
		array_push($result2, array(
			'name_class' => $row['name_class'],
			'deskripsi' => $row['deskripsi']
		));
	}
	echo json_encode(array(
		'class' => $result2,
		'result' => $result
	));

	// $qr = "SELECT * FROM tb_admin";
	// $result = mysqli_query($con, $qr);

	// if (mysqli_num_rows($result) > 0) {
	// 	$arr_rak = array();
	// 	while ($row = mysqli_fetch_assoc($result)) {
	// 		$arr_rak[] = $row;
	// 	}
	// 	echo json_encode($arr_rak);
	// }
	// else {
	// 	echo "Tidak terdapat";
	// }