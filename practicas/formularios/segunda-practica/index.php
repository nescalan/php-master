<?php

$errores = '';
$enviado = '';

    // PASO 1: Validar el botón "submit"
if(isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $textarea = $_POST['textarea'];


    // PASO 2: Validar el campo "nombre"
    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor, ingresa un nombre válido. <br />';
    }

    // PASO 3: Validar el campo "correo"
    if (!empty($correo)) {
        $correo = trim($correo);
    } else {
        $errores .= 'El correo no puede estar vacío. <br />';
    }

    // PASO 4: Validar que el campo "texto"
    if (!empty($textarea)) {
        $textarea = htmlspecialchars($textarea);
        $textarea = trim($textarea);
        $textarea = stripslashes($textarea);
    } else {
        $errores .= 'Por favor, ingresa el mensaje';
    }

    // PASO 5: Si no hay errores enviamos el formulario
    if ($errores) {
        // Se debe realizar el envio del formulario
    }
    
}

include './form.view.php';