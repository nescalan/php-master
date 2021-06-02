<!-- Crea un arreglo que contenga como clave los nombres de 5 países y como valor otro arreglo con 3 ciudades que pertenezcan a ese país, después utiliza un ciclo foreach, para imprimir el nombre del país seguido de las ciudades que definiste:

Ejemplo,

México: Monterrey Querétaro Guadalajara
Colombia: Bogota Cartagena Medellin -->

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
        $pais = [
            'costarica' => ['san jose', 'cartago', 'heredia'],
            'mexico' => ['monterrey', 'mexico', 'tijuana'],
            'usa' => ['california', 'nueva york', 'boston'],
            'colombia' => ['cali', 'antioquia', 'bogota'],
            'italia' => ['milan', 'roma', 'toscana'],
        ];

        foreach ($pais as $key => $value) {
        echo 'El Arreglo llamado Paises contiene a ' . $key;
        foreach($value as $content) {
            echo ' y ' . $content;
        }
        echo "<br>";
            
        }

        echo "<br>";
        echo "<hr>";
    ?>
</body>
</html>