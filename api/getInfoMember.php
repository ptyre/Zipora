<?php
	include 'connection.php';

	$con = mysqli_connect($host, $user, $password, $db);

	if (!$con) {
		die(mysqli_connect_error($con));
	}

	$qr = "SELECT tb_member.id_member, tb_member.name, tb_member.email, tb_member.alamat, tb_member.institusi, tb_member.tgl_masuk, tb_class.name_class FROM tb_member INNER JOIN tb_class ON tb_class.id_class = tb_member.id_member";
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