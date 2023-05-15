<?php
session_start(); // llamar a la sesión activa
session_unset(); // vaciar la sesión activa
session_destroy(); // elimino la sesión
header("location: index.html");
?>