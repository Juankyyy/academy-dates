<?php
session_start();
require_once 'conn2.php';



try {
	$idest = $_POST['idestudiante'];
	$nombre = $_POST['nombres'];
	$apellido = $_POST['apellidos'];
	$correo = $_POST['correo'];
	$contra = $_POST['contraseña'];
	$grado = $_POST['grado'];
	$seccion = $_POST['seccion'];
	// md5 encrypted
	// $password = md5($_POST['password']);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO `estudiantes` VALUES ($idest, '$apellido', '$nombre', $grado, $seccion, '$correo', '$contra')";
	$conn->exec($sql);
} catch (PDOException $e) {
	echo $e->getMessage();
}
if($conn){
	$_SESSION['message'] = array("text" => "User successfully created.", "alert" => "info");
	$conn = null;
	header('location:index.php');
	session_start();
	session_destroy();
	header('Location:login.html');
}else{
	header('location:register.html');
}
