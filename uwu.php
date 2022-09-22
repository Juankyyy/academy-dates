<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$id = $_POST["idestudiante"];
session_start();
$_SESSION['nombre'] = $nombre;
require './conn.php';
$sql = "SELECT * FROM login WHERE nombres = '$nombre' and apellidos = '$apellido' and idestudiantes = $id";
$resultado = mysqli_query($xcon, $sql);
$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location:index.html");
}else{
    echo "ERROR tonto";
}
mysqli_free_result($resultado);
mysqli_close($xcon);
?>

