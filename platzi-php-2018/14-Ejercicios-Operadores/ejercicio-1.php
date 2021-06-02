<!-- Calcula el resultado de 32+3 y 3(2+3). Escribe el procedimiento que empleaste en la sección de discusiones. -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="nav">
      <h1>Ejercicio 1 Lección 14</h1>
    </div>
    <main class="main">
      <p>
        Calcula el resultado de 32+3 y 3(2+3). Escribe el procedimiento que
        empleaste en la sección de discusiones.
      </p>
      <br>
      <hr>
      <section>
        <?php
                $dos = 2;
                $tres = 3;
                $trentaydos = 32;
                $suma = 0;
                $multiplicacion = 0;
                $suma = $trentaydos + $tres;
                $multiplicacion = $tres * ($dos + $tres);
                echo 'El resultadod de la suma 32 + 3 es: ' . $suma;
                echo "<br />";
                echo 'El resultadod de la multiplicación 3(2+3) es: ' . $multiplicacion;

            ?>
      </section>
    </main>
  </body>
</html>
