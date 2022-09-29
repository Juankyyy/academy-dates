<?php 
	session_start();
	include_once './conn.php';
	$correo = $_POST['correo'];
	$contra = $_POST['password'];
	$idE = $_POST['idestudiante'];
	$sentencia = $bd->prepare('select * from estudiantes where 
								correo = ? and contraseña = ? and idestudiantes = ?;');
	$sentencia->execute([$correo, $contra, $idE]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: login.html');
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['nombre'] = $datos->nombres;
		header('Location: index.php');
	}
?>