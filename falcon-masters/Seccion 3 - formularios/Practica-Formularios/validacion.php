<?php
$realUser = 'Jorge';
$realPassword = 'Nxbwcp7h';

$user = $_POST['user'];
$password = $_POST['password'];

if ($user == $realUser) {
    echo 'Bienvenido: ' . $user;

} else {
    echo 'Usuario o Contraseña incorrecta ';
};