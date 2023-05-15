<?php

session_start(); // llamar a la sesión activa

include("templates/cabecera.php");
include("templates/menu.php");
?>




<div class="conteiner bg-light bg-opacity-25 m-5 shadow-lg p-3 mb-5 bg-body rounded">
    <h1>Actualizar Datos de la Cuenta</h1>
    <form class="row g-3" action="actualizar-datos.php" method="POST" name="form-actualizar">
        <div class="row g-3">
            <div class="col">
                <label for="nombre_cambio" class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="First name" id="nombre_cambio"
                    name="nombre_cambio" aria-label="First name">
            </div>
            <div class="col">
                <label for="apellido_cambio" class="form-label">Apellido</label>
                <input type="text" class="form-control" placeholder="Last name"
                    id="apellido_cambio" name="apellido_cambio" aria-label="Last name">
            </div>
        </div>
        <div class="col-md-6">
            <label for="correo_cambio" class="form-label">Email</label>
            <input type="email" class="form-control" id="correo_cambio" name="correo_cambio"
                placeholder="alguien@gmail.com">
        </div>
        <div class="col-md-6">
            <label for="perfil_cambio" class="form-label">Nombre de Usuario</label>
            <input type="text" class="form-control" id="perfil_cambio" name="perfil_cambio"
                placeholder="Nombre de Usuario">
        </div>
        <div class="col-md-6">
                <h6>Ingresa tu contraseña para confirmar cambios</h6>
                <label for="clave-eliminar-cuenta"></label>
                <input type="password" class="form-control" id="clave-eliminar-cuenta" name="clave-eliminar-cuenta" >
                
        </div>
        <button name="submit" value="form-actualizar" class="btn btn-primary">Actualizar!</button>
    </form>


</div>



<?php include("templates/footer.php"); ?>