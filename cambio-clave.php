<?php  
session_start();
include("conexion.php");

// Traer la Clave Nueva
$clave_nueva = $_POST['clave-nueva'];


//Paser el nombra del perfil de la session actual
$perfil_session = $_SESSION['perfil'];

// Crear query para actualizar contraseña
$query_cambio_clave = "UPDATE usuarios SET clave = '$clave_nueva' WHERE perfil = '$perfil_session'";

// Ejecutar query
$resultado_cambio_clave = mysqli_query($connect, $query_cambio_clave);

if(!$resultado_cambio_clave){
    echo "<div class='alert alert-danger'> Ha ocurrido un error al cambiar la contraseña! </div>";
    //exit();// detiene la ejecución del código
}else{
    echo "<div class='alert alert-success'>Contraseña actualizada!</div>";
    header("location: perfil-trabajador.php");
}





include("templates/cabecera.php");
include("templates/menu.php");
include("templates/footer.php");

?>