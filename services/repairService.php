<?php
/**
 * Created by PhpStorm.
 * User: Cesar
 * Date: 4/15/2016
 * Time: 7:56 AM
 */

header('Content-type: application/json');

require "../PHPMailer-master/PHPMailerAutoload.php";

$nombre = $_POST["Nombre"];
$empresa = $_POST["Empresa"];
$telefono = $_POST["Telefono"];
$email = $_POST["Email"];
$descripcion = $_POST["comment"];

// image upload handler
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["Imagen"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["Imagen"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["Imagen"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Imagen"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->IsSMTP(); //send via SMTP

$mail->Host = "localhost";

$mail->setFrom($email, $nombre);
$mail->addAddress("ecristerna@icloud.com");     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->AddEmbeddedImage($target_file, "my-attach", $target_file);
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
