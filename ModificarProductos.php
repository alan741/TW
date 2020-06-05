<?php

error_reporting(0);
header('Content-type: application/json; charset=utf-8');
$var = $_POST['inputNombre'];
$var2 = $_POST['inputPrecio'];
$var3 = $_POST['inputID'];
$conexion = new mysqli('localhost', 'root', '', 'tastywings');

if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
} else {
	$conexion->set_charset("utf8");
	$statement = $conexion->prepare("UPDATE producto SET Nombre = '$var', Precio = '$var2' WHERE ProductoID = '$var3'");
	$statement->execute();
        
        echo json_encode($respuesta = []);
}
