<?php
session_start();
session_unset();
session_destroy();
session_start();
$_SESSION['hasVisited']="yes";
header("Location: index.php");
die();
?>