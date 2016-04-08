<?php
/**
 * Created by PhpStorm.
 * User: Cesar
 * Date: 4/8/2016
 * Time: 8:24 AM
 */
function connect() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DBNAME";

    $connection = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($connection->connect_error) {
        return null;
    }
    else {
        return $connection;
    }
}

function errors($type) {
    $header = "HTTP/1.1 ";
    switch($type)
    {
        case 500:	$header .= "500 Bad connection to Database";
            break;
        case 206:	$header .= "206 Wrong Credentials";
            break;
        case 406:	$header .= "406 User Not Found";
            break;
        case 417:	$header .= "417 No content set in the cookie/session";
            break;
        case 412:     $header .= "412 User already exists";
            break;
        default:	$header .= "404 Request Not Found";
    }
    header($header);
    return array('message' => 'ERROR', 'code' => $type);
}

function login($username, $password){
    $conn = connect();
    if ($conn != null) {
        $sql = "SELECT firstName, lastName, userName FROM user WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $response = array('message' => 'OK','firstName' => $row['firstName'], 'lastName' => $row['lastName']
                , 'userName' => $row['userName']);
            }
            $conn->close();
            return $response;
        }
        else {
            $conn->close();
            return errors(406);
        }
    }
    else {
        $conn->close();
        return errors(500);
    }
}

?>