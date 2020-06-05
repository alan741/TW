<?php
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
$host="localhost";
$usuario="root";
$contraseña="";
$base="tastywings";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> 
		mysqli_connect_error());
}

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$nickname = $_POST['Nickname'];
$password = $_POST['Password'];

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$res=$conexion->query("insert into empleado (Nombre,Apellido, nickname, password) values('$nombre', '$apellido', '$nickname', '$password')");
if($res){
echo 'Accion exitosa.';
}
?>
