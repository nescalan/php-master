<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Personal</title>
</head>

<body>
    <form>
        <input type="text" name="estudiante" id="estudiante">
        <input type="submit" value="Enviar nombre">
        <?php
            if (isset($_GET['estudiante'])) {
                echo "El estudiante ingresado es: " . $_GET['estudiante'];
            } else {
                echo "No se ha presentado estudiante";
            }
        ?>
    </form>
    <p>----------------------------------------</p>
    <form method="POST">
        <p>
            Nombre estudiante:
            <input type="text" name="estudiante-post" id="estudiante">
            <input type="submit" value="Enviar nombre">
        </p>
    </form>
    <?php
        if (isset($_POST['estudiante-post'])) {
            echo "El estudiante ingresado por POST es: " . $_POST['estudiante-post'];
        } else {
            echo "Todavía no ha ingresado un nombre";
        }
    ?>
</body>

</html>