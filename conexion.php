<?php
$hostname='localhost';
$database='administrador';
$username='root';
$password='';
$conexion = new mysqli($hostname, $username, $password, $database);
if($conexion->connect_errno){
	echo"conexion incorrecta";
}
else{
	echo "conexion correcta";
}