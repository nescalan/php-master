<?php

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) { // 1.- Verifica si el boton fue pulsado
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    
    if (!empty($nombre)) { // 2.- Verifica que el campo nombre no esté vacío
        $nombre = trim($nombre); // 2.1.- Limpiar espacios en blanco al inicio y al final de la variable
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); // 2.2.- Limpia la variable de caracteres especiales (basura)
    } else {
        $errores .= 'El campo de nombre está en blanco, debes ingresar uno. <br />'; //2.3- Mensaje de solicitando el ingreso de un nombre
    }

    if (!empty($correo)) { // 3.- Verificar que el campo "correo" no esté vacío
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); 
        
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor, ingresa un correo válido. <br />';
        }   
    }  else {
            $errores .= 'No ingresaste ningún correo. <br />';
    }
}


require 'index.view.php';