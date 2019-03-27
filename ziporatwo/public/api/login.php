<?php
	include 'connection.php';

	$con = mysqli_connect($host, $user, $password, $db);
	if (!$con) {
		die(mysqli_connect_error($con));
	}
	$username = $_POST['_username'];
	$password = $_POST['_password'];

	$qr = "SELECT * FROM tb_admin WHERE password = '" . $password . "' AND username = '" . $username . "' AND status = 'false'";
	$result = mysqli_query($con, $qr);

	if (mysqli_num_rows($result) == 1) {
		$arr_adm = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$arr_adm[] = $row;
		}
		echo json_encode($arr_adm);
		// echo '$getJsonData';
	}
	else {
		echo 'Gagal';
	}
?>