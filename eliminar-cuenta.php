<?php  
session_start();
include("conexion.php");


// Traer la clave de confirmación para eliminar la cuenta
$clave_confirmacion = $_POST['clave-eliminar-cuenta'];


// Crear query para eliminar la cuenta
$query_eliminar_cuenta = "DELETE FROM usuarios WHERE clave = '$clave_confirmacion'";

// Ejecutar query
$eliminar_cuenta = mysqli_query($connect, $query_eliminar_cuenta);

if(!$eliminar_cuenta){
    echo "<div class='alert alert-danger'> Ha ocurrido un error al eliminar la cuenta! </div>";
    //exit();// detiene la ejecución del código
    header("location: perfil-trabajador.php");
}else{
    header("location: salir.php");
}





include("templates/cabecera.php");
include("templates/menu.php");
include("templates/footer.php");

?>