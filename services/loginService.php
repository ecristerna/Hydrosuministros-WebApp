<?php
	header('Content-type: application/json');
	require_once __DIR__ . '/dbServices.php';

	$userName = $_POST['userName'];
	$userPassword = $_POST['userPassword'];

	$result = login( $userName, $userPassword);

	if ($result['message'] == 'OK') {
		// save the session
		session_start();
		$_SESSION["username"] = $userName;
		$_SESSION['id'] = $result['id'];

		//COOKIE
		setcookie("email",$userName,3600*24*60+time());

		$response = array('firstName' => $result['firstName'], 'lastName' => $result['lastName'], 'userName' => $result['userName']);
		echo json_encode($response);
	}  else {
		die(json_encode($result));
	}

?>
