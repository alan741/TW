<?php

error_reporting(0);
header('Content-type: application/json; charset=utf-8');
$var = $_POST['inputNewNombre'];
$var2 = $_POST['inputNewPrecio'];
$conexion = new mysqli('localhost', 'root', '', 'tastywings');

if($conexion->connect_errno){
	$respuesta = [
		'error' => true
	];
} else {
	$conexion->set_charset("utf8");
	$statement = $conexion->prepare("INSERT INTO producto(Nombre,Precio) VALUES ('$var','$var2')");
	$statement->execute();
        
        echo json_encode($respuesta = []);
}

