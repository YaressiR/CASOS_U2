<?php
session_start();

// Inicializar las variables de sesión si no existen
if (!isset($_SESSION['candidata1'])) $_SESSION['candidata1'] = 0;
if (!isset($_SESSION['candidata2'])) $_SESSION['candidata2'] = 0;
if (!isset($_SESSION['candidata3'])) $_SESSION['candidata3'] = 0;
if (!isset($_SESSION['candidata4'])) $_SESSION['candidata4'] = 0;

// Verificar si se han enviado los botones y actualizar las sesiones en consecuencia
if (isset($_POST['btnBoton1'])) $_SESSION['candidata1'] += 1;
if (isset($_POST['btnBoton2'])) $_SESSION['candidata2'] += 1;
if (isset($_POST['btnBoton3'])) $_SESSION['candidata3'] += 1;
if (isset($_POST['btnBoton4'])) $_SESSION['candidata4'] += 1;

// Calcular el total
$_SESSION['total'] = $_SESSION['candidata1'] + $_SESSION['candidata2'] +
                     $_SESSION['candidata3'] + $_SESSION['candidata4'];

// Redirigir a la página index.php
header('Location: index.php');
exit();
?>