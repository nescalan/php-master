<?php

// print_r($_POST);

if (!$_POST) {
    header('Location: http://localhost/php-master/falcon-masters/Seccion%203%20-%20formularios/formularios/');
}

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos'];

echo 'Hola, ' . $nombre . ' eres ' . $sexo;

 
