<?php
	header('Content-type: application/json');
	require_once __DIR__ . '/dbService.php';

	$email = $_POST['email'];
	$userPassword = $_POST['userPassword'];

	$result = login($email, $userPassword);

	if ($result['message'] == 'OK') {
		// save the session
		session_start();
		$_SESSION["username"] = $result['userName'];
		$_SESSION['id'] = $result['id'];

		$userName = $result['userName'];

		//COOKIE
		setcookie("email", $userName, 3600*24*60 + time());
		echo json_encode($result);
	}  else {
		die(json_encode($result));
	}

?>
