<?php
/**
 * Created by PhpStorm.
 * User: Cesar
 * Date: 4/15/2016
 * Time: 7:56 AM
 */

header('Content-type: application/json');

require "../PHPMailer-master/PHPMailerAutoload.php";

$nombreDirectorio = "../images/";

$nombre = $_POST["Nombre"];
$empresa = $_POST["Empresa"];
$imagen = addslashes(@file_get_contents($_FILES['Imagen']['tmp_name']));
$telefono = $_POST["Telefono"];
$email = $_POST["Email"];
$descripcion = $_POST["comment"];

$nombreArchivoImagen ="";

if($imagen === FALSE) {
    $imagen = null;
} else {
    $nombreArchivoImagen = $_FILES['imagenPerfil']['name'];
    $nombreArchivoImagen = preg_replace("/[\s_]/", "-", $nombreArchivoImagen);
    $nombreArchivoImagen = time() . "-" . $nombreArchivoImagen;
    move_uploaded_file ($_FILES['imagenPerfil']['tmp_name'], $nombreDirectorio . $nombreArchivoImagen);
}

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->IsSMTP(); //send via SMTP

$mail->Host = "localhost";

$mail->setFrom($email, $nombre);
$mail->addAddress("ecristerna@icloud.com");     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->AddEmbeddedImage($nombreArchivoImagen, "my-attach", $nombreArchivoImagen);
$mail->Subject = "Solicitud de reparacion";
$mail->Body    = "Nombre: " . $nombre . "\n" . "Empresa: " . $empresa . "\n" .  "Telefono: " . $telefono .
    'Imagen: <img alt="PHPMailer" src="cid:my-attach">';
$mail->AltBody = "Nombre: " . $nombre . "\n" . "Empresa: " . $empresa . "\n" . "Telefono: " . $telefono.
    'Imagen: <img alt="PHPMailer" src="cid:my-attach">';;

if(!$mail->send()) {
    header('HTTP/1.1 406 User not found');
    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
} else {
    echo json_encode("Message has been sent");
}

?>
