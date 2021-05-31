<!-- Crea un arreglo que contenga como clave los nombres de 5 países y como valor otro arreglo con 3 ciudades que pertenezcan a ese país, después utiliza un ciclo foreach, para imprimir el nombre del país seguido de las ciudades que definiste:

Ejemplo,

México: Monterrey Querétaro Guadalajara
Colombia: Bogota Cartagena Medellin -->

<?php 
//     $pais = [
//     'costarica' => ['san jose', 'cartago', 'heredia'],
//     'mexico' => ['monterrey', 'mexico', 'tijuana'],
//     'usa' => ['california', 'nueva york', 'boston'],
//     'colombia' => ['cali', 'antioquia', 'bogota'],
//     'italia' => ['milan', 'roma', 'toscana'],
//    ]
   $ejercicio2 = [
    'Mexico' => ['Monterrey', 'Queretaro', 'Guadalajara'],
    'Colombia' => ['Bogota', 'Cartagena', 'Medellin'],
    'Peru' => ['Lima', 'Arequipa', 'Cuzco'],
    'Argentina' => ['Buenos Aires', 'Rosario', 'Mar de Plata'],
    'Venezuela' => ['Caracas', 'Valencia', 'Maracay']
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio dos, arreglo de paises</h1>
    
    <?php
        foreach ($ejercicio2 as $clave => $valor) {
        echo 'Para la clave :' . $clave . ' almacena el valor: ' . $valor;
        echo "<br>";
        }

        foreach ($ejercicio2 as $pais => $ciudades) {
            echo "<br>El pais $pais de tiene como ciudades a ";
            foreach ($ciudades as $valor){
                echo "$valor ";
            }	
        }
        echo "<br>";
        echo "<hr>";
    ?>
</body>
</html>