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
if ($result['message'] == 'OK') {
    $password = $result['password'];
}  else {
    die(json_encode($result));
}

require "../PHPMailer-master/PHPMailerAutoload.php";

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->IsSMTP(); //send via SMTP

$mail->Host = "localhost";

$mail->setFrom("ecristerna.94@gmail.com"); // info@hydrosumint.mx

$mail->addAddress($mail);     // Add a recipient


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Recupera tu passsword";
$mail->Body    = "Tu password es : " . $password;
$mail->AltBody = "Tu password es : " . $password;

?>