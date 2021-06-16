<?php

$errores = ''; 

if (isset($_POST['submit'])) {
    $nombre =$_POST['nombre'];
    $correo =$_POST['correo'];

        if (!empty($nombre)) {
            // $nombre = trim($nombre);
            // $nombre = htmlspecialchars($nombre);    
            // $nombre = stripslashes($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
            echo 'Tu nombre es: ' . $nombre . ' y tu correo es: ' . $correo;
        } else {
            $errores .= 'Por favor, agregar un nombre ';
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>46 Validacion de Formulario</title>
</head>
<body>
    <h1>46 Validacion de Formulario</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" name="nombre" placeholder="Nombre: ">
        <input type="email" name="correo" id="" placeholder="Correo: ">

        <?php if(!empty($errores)) : ? >

        

        <input type="submit" value="enviar" name="submit">
    </form>
</body>
</html>