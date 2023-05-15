<?php

session_start(); // llamar a la sesión activa

include("templates/cabecera.php");
include("templates/menu.php");
?>




<div class="bg-light bg-opacity-25 m-5 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="row">
        <form action="cambio-clave.php" method="POST">
            <div class="form-floating">
                <h4>Cambiar Contraseña</h4>
                <label for="clave-nueva">Contraseña Nueva</label>
                <input type="password" class="form-control" id="clave-nueva" name="clave-nueva">
                
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>

        </form>
    </div>
</div>

<?php include("templates/footer.php"); ?>