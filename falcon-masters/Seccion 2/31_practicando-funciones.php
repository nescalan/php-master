<?php

function calcularAreaTriangulo($base, $altura) {
    return $resultado = ($base * $altura)/2;
}

$area = calcularAreaTriangulo(75, 3);
echo 'El resultado de Calcular el Area es: ' . $area;