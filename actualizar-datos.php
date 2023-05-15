<?php
session_start();
include("conexion.php");


/*

    Este código de momento no funciona.
    Hay que lograr que sea posible actualizar 

*/


// Traer la clave de confirmación para eliminar la cuenta
$clave_confirmacion = $_POST['clave-eliminar-cuenta'];

// Obtener datos del Formulario de Registro en Index

$nombre_cambio = $_POST['nombre'];
$apellido_cambio = $_POST['apellido'];
$correo_cambio = $_POST['correo'];
$perfil_cambio = $_POST['perfil'];

// Validación Query

$query_actualizar = "";

if (!empty($nombre_cambio)) {
    $query_actualizar .= "UPDATE usuarios SET nombre = '$nombre_cambio' ";
}
if (!empty($apellido_cambio)) {
    $query_actualizar .= ", apellido = '$apellido_cambio' ";
}
if (!empty($correo_cambio)) {
    $query_actualizar .= ", correo = '$correo_cambio' ";
}
if (!empty($perfil_cambio)) {
    $query_actualizar .= ", perfil = '$perfil_cambio' ";
}

$query_actualizar .= "WHERE clave = '$clave_confirmacion'";

$actualizar_query = mysqli_query($connect,$query_actualizar);

// Redireccionar a Perfil

header("location: perfil-trabajador.php");


include("templates/cabecera.php");
include("templates/menu.php");
include("templates/footer.php");

?>