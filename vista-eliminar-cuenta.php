<?php

session_start(); // llamar a la sesión activa

include("templates/cabecera.php");
include("templates/menu.php");
?>




<div class="conteiner bg-light bg-opacity-25 m-5 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row">
        <form action="eliminar-cuenta.php" method="POST">
            <div class="form-floating">
                <h1>Eliminar Cuenta</h1>
                <h2>Ingresa tu contraseña</h2>
                <input type="password" class="form-control" id="clave-eliminar-cuenta" name="clave-eliminar-cuenta" placeholder="Contraseña">
                <label for="clave-eliminar-cuenta">Contraseña Nueva</label>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>

<?php include("templates/footer.php"); ?>