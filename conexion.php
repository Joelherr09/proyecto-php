<?php
// crear los parametros de conexión
$server = "localhost";
$usuario = "administrador";
$pass = "asd123";
$base = "FrontEnd2023";

// construir la cadena de conexión
$connect = mysqli_connect($server,$usuario,$pass,$base);


// Para Verificar Conexión
if(!$connect){
    echo "<div class='alert alert-danger'> Error: ".mysqli_connect_error()."</div>";
}else{
}


?>