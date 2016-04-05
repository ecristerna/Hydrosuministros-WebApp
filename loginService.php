<?php
	header('Content-type: application/json');
	$userName = $_POST['userName'];
	$userPassword = $_POST['userPassword'];

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "poidh";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) 
	{
	    header('HTTP/1.1 500 Bad connection to Database');
	    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
	}
	else
	{
        //DEPENDE DE LA NUEVA BASE DE DATOS
		$sql = "SELECT id, username FROM users WHERE email = '$userName' AND password = '$userPassword'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0)
		{
			// output data of each row
		    while($row = $result->fetch_assoc()) 
		    {
		    	$response = array('id' => $row['id'], 'username' => $row['username']);   
				
				//SESSION START
				session_start();
				$_SESSION['username'] = $row['username'];
				$_SESSION['id'] = $row['id'];
                          
				//COOKIE
                setcookie("email",$userName,3600*24*60+time());                  								
		    }
				
		    echo json_encode($response);
		}
		else
		{
	    	header('HTTP/1.1 406 User not found');
	        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
		}
	} 

?>
