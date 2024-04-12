<?php
if (isset($_GET['logout'])) {
    // Destruir todas las variables de sesión
    session_destroy();
    // Redirigir a la página de inicio de sesión o a donde desees después de cerrar sesión
    header("Location: /login.php");
    exit();
}


session_start();

// Destruir todas las variables de sesión
session_destroy();

// Redirigir a la página de inicio de sesión o a donde desees después de cerrar sesión
header("Location: /login.php");
exit();
?>