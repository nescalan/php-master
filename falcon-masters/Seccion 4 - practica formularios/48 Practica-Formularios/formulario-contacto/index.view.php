<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Contacto</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Nombre: " value="">
        <input type="text" class="form-control" name="correo" id="correo"  placeholder="Correo: " value="">
        <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"></textarea>

        <?php if(!empty($errores)): ?>
            <div class="alert error">
                <?php echo $errores; ?>
            </div>

        <?php elseif($enviado) : ?>
            <div class="alert success">
                <p>Enviado correctamente!!! </p> 
            </div>
        <?php endif; ?>

        <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>
    </div>
</body>
</html>