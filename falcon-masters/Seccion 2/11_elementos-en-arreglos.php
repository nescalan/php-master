<?php
// Contar elementos en un arreglo
$meses = [
    'enero', 'ferero', 'marzo', 'abril',
    'mayo', 'junio', 'julio', 'agosto', 
    'setiembre', 'octubre', 'noviembre', 'diciembre',
];

$ultimoMes = count($meses) - 1;

echo $meses[$ultimoMes];