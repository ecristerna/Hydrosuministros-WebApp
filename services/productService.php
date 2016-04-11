<?php
	header('Content-type: application/json');
	require_once __DIR__ . '/dbServices.php';
	session_start();
	if ( isset($_SESSION["username"])){
		$result = getAllProducts();
		if ($result['message'] == 'OK') {
			echo json_encode($result);
		} else {
			die(json_encode($result));
		}
	} else {
		// return error
		$response = array('error' => 'Favor de iniciar sesion');
		header("HTTP/1.1 417 SESSION NOT SET");
		die(json_encode($response));
	}

?>