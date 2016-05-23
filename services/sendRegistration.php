<?php
header('Content-type: application/json');

$nombre = $_POST["nombre"];
$empresa = $_POST["empresa"];
$puesto = $_POST["puesto"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];

require "../PHPMailer-master/PHPMailerAutoload.php";

$mail = new PHPMailer;

// $mail->SMTPDebug = 3; // Enable verbose debug output

// $mail->IsSMTP(); //send via SMTP

$mail->Host = "localhost";

$mail->setFrom($email, $nombre);
$mail->addAddress("ventasmty@hydrosumint.mx");     // Add a recipient
// info@hydrosumint.mx

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Registro a sitio web";
$mail->Body    = "Nombre: " . $nombre . "<br>" . "Empresa: " . $empresa . "<br>" . "Puesto: " . $puesto . "<br>" . "Telefono: " . $telefono;
$mail->AltBody = "Nombre: " . $nombre . "\n" . "Empresa: " . $empresa . "\n" . "Puesto: " . $puesto . "\n" . "Telefono: " . $telefono;

if(!$mail->send()) {
    header('HTTP/1.1 406 User not found');
    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
} else {
    echo json_encode("Message has been sent");
}

?>
