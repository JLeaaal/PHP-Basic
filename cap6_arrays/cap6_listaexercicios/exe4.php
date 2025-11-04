<?php
//Autor: Julia
//Data: 06/10/25
//Assunto: Lista de Exercicios: 04

function adicionarTimes($array, $time1, $time2) {
    array_unshift($array, $time1);
    array_push($array, $time2);
    print_r($array);
}
$times = ["Flamengo", "Corinthians", "Palmeiras", "Grêmio"];
print_r($times);
echo "adicão de times:\n ";
adicionarTimes($times, "Santos", "Vasco");