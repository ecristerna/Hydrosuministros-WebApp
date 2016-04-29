<?php
/**
 * Created by PhpStorm.
 * User: Cesar
 * Date: 4/15/2016
 * Time: 7:56 AM
 */

header('Content-type: application/json');

ob_start();

require "../PHPMailer-master/PHPMailerAutoload.php";

$nombre = $_POST["Nombre"];
$empresa = $_POST["Empresa"];
$telefono = $_POST["Telefono"];
$email = $_POST["Email"];
$descripcion = htmlspecialchars($_POST["comment"]);

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->IsSMTP(); //send via SMTP
// info@hydrosumint.mx

$mail->Host = "localhost";

$mail->setFrom($email, $nombre);
$mail->addAddress("ecristerna@icloud.com");     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Solicitud de Reparación";

// image upload handler
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["Imagen"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["Imagen"]["tmp_name"]);

    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    $uploadOk = 0;
}

if ($uploadOk == 1) {
    $mail->AddEmbeddedImage($target_file, "my-attach", $target_file);

    $mail->Body    = "Nombre: " . $nombre . "<br>" . "Empresa: " . $empresa . "<br>" .  "Telefono: " . $telefono . "<br>" .
        "Correo: " . $email . "<br>" . "Comentarios: " . $descripcion . "<br><br><br>" .
        '<img alt="PHPMailer" src="cid:my-attach">';
    $mail->AltBody = "Nombre: " . $nombre . "\n" . "Empresa: " . $empresa . "\n" . "Telefono: " . $telefono.  "\n" .
        "Correo: " . $email  . "\n" . "Comentarios: " . $descripcion . "\n\n\n" .
        '<img alt="PHPMailer" src="cid:my-attach">';
} else {
    $mail->Body    = "Nombre: " . $nombre . "<br>" . "Empresa: " . $empresa . "<br>" .  "Telefono: " . $telefono . "<br>" .
        "Correo: " . $email . "<br>" . "Comentarios: " . $descripcion . "<br><br><br>";
    $mail->AltBody = "Nombre: " . $nombre . "\n" . "Empresa: " . $empresa . "\n" . "Telefono: " . $telefono.  "\n" .
        "Correo: " . $email . "\n" . "Comentarios: " . $descripcion . "\n\n\n";
}

if(!$mail->send()) {
    header('HTTP/1.1 406 User not found');
    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
} else {
    header("Location: ../reparaciones.php");
}

die();
?>
