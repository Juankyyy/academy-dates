<?php 
	session_start();
	include_once './conn.php';
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$idE = $_POST['idestudiante'];
	$sentencia = $bd->prepare('select * from estudiantes where 
								nombres = ? and apellidos = ? and idestudiantes = ?;');
	$sentencia->execute([$nombre, $apellido, $idE]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: login.html');
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['nombre'] = $datos->nombres;
		header('Location: index.php');
	}
?>