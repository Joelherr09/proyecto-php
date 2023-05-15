<?php 
session_start();
include("conexion.php");

// Obtener datos del Formulario de Registro en Index

$nombre_registro = $_POST['nombre'];
$apellido_registro = $_POST['apellido'];
$correo_registro = $_POST['correo']; //correo
$clave_registro = $_POST['clave'];
$perfil_registro = $_POST['perfil'];

// Crear Consulta SQL

$query_registro = "INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `clave`, `perfil`) VALUES
(NULL,'$nombre_registro', '$apellido_registro', '$correo_registro', '$clave_registro', '$perfil_registro');";


// Ejecutar Consulta

$resultado_registro = mysqli_query($connect,$query_registro);


$_SESSION['usuario'] = $nombre_registro." ".$apellido_registro;
$_SESSION['perfil'] = $perfil_registro;

header("location: perfil-trabajador.php");

include("templates/cabecera.php");
include("templates/menu.php");
include("templates/footer.php");

?>