<?php
/**
 * Created by PhpStorm.
 * User: Cesar
 * Date: 4/29/2016
 * Time: 8:17 AM
 */
header('Content-type: application/json');
require_once __DIR__ . '/dbService.php';
$email = $_POST["email"];

// get password from DB
$result = getPasswordByEmail($email);
$password = "";
$emailFrom = "ecristerna.94@gmail.com";
$nameFrom = "Hydrouministros Inteligentes";
if ($result['message'] == 'OK') {
    $password = $result['password'];
}  else {
    header('HTTP/1.1 406 User not found');
    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
}

require "../PHPMailer-master/PHPMailerAutoload.php";

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->IsSMTP(); //send via SMTP
$mail->Host = "localhost";
$mail->setFrom($emailFrom, $nameFrom); // info@hydrosumint.mx
$mail->addAddress($email);     // Add a recipient
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Recupera tu passsword";
$mail->Body    = "Tu password es : " . $password;
$mail->AltBody = "Tu password es : " . $password;

//header("Location: ../reparaciones.php");
if(!$mail->send()) {
    header('HTTP/1.1 406 User not found');
    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
} else {
    echo json_encode("Message has been sent");
}
//die();

?>