<?php
//Autor: Julia
//Data: 17/09/25
//Assunto: Lista de Exercicios: 01

function converterSegundos($horas, $minutos, $segundos){
    return ($horas * 3600) + ($minutos * 60) + $segundos;
}

echo "Digite as horas: ";
$h = trim(fgets(STDIN));

echo "Digite os minutos: ";
$m = trim(fgets(STDIN));

echo "Digite os segundos: ";
$s = trim(fgets(STDIN));

$total = converterSegundos($h, $m, $s);

echo "O total em segundos é: " . $total;
?>
