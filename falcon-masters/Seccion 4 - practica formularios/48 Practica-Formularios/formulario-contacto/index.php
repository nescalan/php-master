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
        $errores .= 'Por favor, ingresa un nombre válido. <br />'; //2.3- Mensaje de solicitando el ingreso de un nombre
    }

    if (!empty($correo)) { // 3.- Verifica que el campo correo no esté vacío
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); 
        
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor, ingresa un correo válido. <br />';
        }   
    }  else {
            $errores .= 'Por favor, ingresa un correo. <br />';
    }

    if(!empty($mensaje)) { // 5.- Verifica que el campo "mensaje" no esté vacío
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    } else {
        $errores .= 'Por favor, ingresa el mensaje';
    }

    if(!$errores) {
        $enviar_a = 'nescalan@gmail.com'; // envia al correo indicado el contenido del formulario
        $asunto = 'Correo enviado desde mi formulario php';
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado .= "Correo: $correo \n";
        $mensaje_preparado .= "Mensaje: " . $mensaje;

        // mail($enviar_a, $asunto, $mensaje_preparado);
        $enviado = 'true';
    }

}

require 'index.view.php';