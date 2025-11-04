<?php
//Autor: Julia
//Data: 17/09/25
//Assunto: Lista de Exercicios: 02

function areaQuadrado($lado){
    return $lado * $lado;
}

echo "Digite o lado do quadrado: ";
$lado = trim(fgets(STDIN));

$resultado = areaQuadrado($lado);

echo "A área do quadrado é: " . $resultado;
?>
