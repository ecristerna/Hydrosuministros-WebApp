<?php
/**
 * Created by PhpStorm.
 * User: Cesar
 * Date: 4/8/2016
 * Time: 8:24 AM
 */
function connect() {
    $servername = "localhost";
    $username = "hydrosu1_admin";
    $password = "hydrosu1Admin";
    $dbname = "hydrosu1_INVENTARIO";

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
    return array('message' => $header, 'code' => $type);
}

function login($email, $password){
    $conn = connect();
    if ($conn != null) {
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $response = array('message' => 'OK', 'id' => $row['id'], 'firstName' => $row['firstName'], 'lastName' => $row['lastName'], 'userName' => $row['userName']);
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

function getAllProducts() {
    $conn = connect();
    if ($conn != null) {
        $sql = "SELECT * FROM inventario";
        $result = $conn->query($sql);

        $results = array();

        while ($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
        $conn->close();
        
        return $response = array("message" => "OK", "results" => $results);
    }
    else {
        $conn->close();
        return errors(500);
    }
}

function getPasswordByEmail($email){
    $conn = connect();
    if ($conn != null) {
        $sql = "SELECT password FROM user WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $response = array('message' => 'OK', 'password' => $row['password']);
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
