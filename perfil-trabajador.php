<?php

session_start(); // llamar a la sesión activa

include("templates/cabecera.php");
include("templates/menu.php");
?>



<div class="conteiner bg-light bg-opacity-25 m-5 shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row">
            <div class="foto col-2 m-5 ">
                <img src="img/perfilmc.jpg" alt="">
            </div>
            <div class="col-6 m-5">
                <div class="info-perfil">
                    <h1><?php echo $_SESSION['usuario']; ?></h1>
                    <h4>Profesión</h4>
                    <h5>Ciudad</h5>
                    <h5>Fecha de Ingreso</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="conteiner bg-light bg-opacity-25 m-5 shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row">
            <div class="foto col-4 m-5">
                <h1>Opciones</h1>
                <br>
                <ul style="font-size: 1.25em;">
                    <li><a class="nav-link" href="vista-cambio-clave.php">Cambiar contraseña</a></li>
                    <li><a class="nav-link" href="vista-eliminar-cuenta.php">Eliminar cuenta</a></li>
                    <li><a class="nav-link" href="vista-actualizar-datos.php">Cambiar datos</a></li>
                </ul>


            </div>

        </div>
    </div>

<?php include("templates/footer.php"); ?>