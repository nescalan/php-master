<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de Formulario</title>
</head>
<body>
    <h1>45 Comprobar envío de formulario</h1>

    <form action="valida_envio.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre: ">
        <input type="email" name="correo" id="" placeholder="Correo: ">

        <input type="submit" value="enviar" name="submit">
    </form>
</body>
</html>