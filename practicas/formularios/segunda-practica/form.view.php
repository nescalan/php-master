<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="index.php" method="POST">
            <div class="mb-3">
                <h1>Formulario de validacion</h1>
                <br>
                <label for="nombre" class="form-label">Name</label>
                <input type="text" class="form-control" id="nombres" placeholder="name" name="nombre" value="<?php if(!$enviado && isset($nombre)) {echo $nombre;} ?>">
                <label for="correo" class="form-label">Email address</label>
                <input type="email" class="form-control" id="correos" placeholder="name@example.com" name="correo">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textarea"></textarea>
            </div>

            <?php
            if (!empty($errores)){
                echo $errores;
            } elseif($enviado) {
                echo 'Enviado Correctamente!!!';
            }
            
            ?>

            <input type="submit" value="Enviar" name="submit">
        </div>
    </form>
</body>
</html>