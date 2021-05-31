<?php 
$arreglo = [
    'keyStr1' => 'lado',
            0 => 'ledo',
    
    'keyStr2' => 'lido',
            1 =>'lodo',
            2 => 'ludo',
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Uno</title>
</head>
<body>
    <h1>Imprimir un mensaje con Arreglos</h1>
    <?php
        for ($f = 0; $f <= 2; $f++) {
            echo $arreglo[$f];
              echo "<br>";
          }
    ?>
    
</body>
</html>