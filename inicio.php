<?php // esta es la etiqueta de apertura del script de php

// $nombre = $_POST['usuario'];
/*
var_dump($_POST);
var_dump($_GET);
var_dump($_REQUEST);
*/

session_start();


include("conexion.php");

//2 rescatar las credenciales enviadas desde el index
$correo = $_POST['correo-login'];
$clave = $_POST['clave-login'];

//3 Crear una variable con la consulta SQL
$query = "SELECT id,nombre,apellido,correo,clave,perfil 
          FROM usuarios 
          WHERE correo = '".$correo."' and clave = '".$clave."' ;";

//4 Ejecutar la consulta sobre una conexión
$resultado = mysqli_query($connect,$query);

//5 Verificar si exiten o no usuarios con esas credenciales
if(mysqli_num_rows($resultado)==0){
    header("location: index.html");
    
    echo "Se ha producido un error al realizar el registro.";
}else{
    $registro = mysqli_fetch_assoc($resultado);
    $_SESSION['usuario'] = $registro['nombre']." ".$registro['apellido'];
    $_SESSION['perfil'] = $registro['perfil'];
    header("location: perfil-trabajador.php");
    /*
    $nombre = $registro['nombre'];
    $usuario = $registro['nombre']." ".$registro['apellido'];
    $perfil = $registro['perfil'];
    echo "Bienvenido ".$usuario." con el perfil de ".$perfil;
    */
}

include("templates/cabecera.php");
include("templates/menu.php");
include("perfil-trabajador.php");
include("templates/footer.php");



?>

?>