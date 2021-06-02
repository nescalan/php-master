<!-- Escribe el código necesario para encontrar los 3 números más grandes y los 3 números más bajos de la siguiente lista:

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61] -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <hr>
    <p>
    Escribe el código necesario para encontrar los 3 números más grandes y los 3 números más bajos de la siguiente lista:
    </p>

    <?php
    $valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];


    foreach($valores as $key) {
        echo $key . ', ';
    }

    echo "<br>";
    echo "<hr>";

    sort($valores, 0);
    for ($i=0; $i<3;$i++) {
        echo $valores[$i] . ', ';
    }

    echo "<br>";
    echo "<hr>";

    rsort($valores, 0);
    for ($i=0; $i<3;$i++) {
        echo $valores[$i] . ', ';
    }
    ?>

</body>
</html>