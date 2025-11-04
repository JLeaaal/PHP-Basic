<?php
//Autor: Julia
//Data: 02/09/25
//Assunto: Lista de Exercicios: 07
echo "Digite o primeiro número: ";
$num1 = trim(fgets(STDIN));
echo "Digite o segundo número: ";
$num2 = trim(fgets(STDIN));
echo "Digite uma letra em caixa alta (A - adição, S - subtração, D - divisão, M - multiplicação, R - resto): ";
$op = trim(fgets(STDIN));

if ($op == "A") {
    echo "Resultado da adição: " . ($num1 + $num2) . "\n";
} else if ($op == "S") {
    echo "Resultado da subtração: " . ($num1 - $num2) . "\n";
} else if ($op == "D") {
    if ($num2 != 0) {
        echo "Resultado da divisão: " . ($num1 / $num2) . "\n";
    } else {
        echo "Erro: divisão por zero não é permitida!\n";
    }
} else if ($op == "M") {
    echo "Resultado da multiplicação: " . ($num1 * $num2) . "\n";
} else if ($op == "R") {
    if ($num2 != 0) {
        echo "Resto da divisão: " . fmod($num1, $num2) . "\n";
    } else {
        echo "Erro: resto com divisor zero não é permitido!\n";
    }
} else {
    echo "Operação inválida! Digite A, S, D, M ou R.\n";
}
