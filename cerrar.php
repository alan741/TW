<?php session_start();

session_destroy();
$_SESSION = array(); //La sesion se limpia

header('Location: index.php');
?>