<?php
// Autor: Julia
// Data: 21/08/25
// Assunto: lista de exercicios: exercicio 10

// variaveis de entrada
echo "Digite o valor do seu salário: ";
$salario = (float) trim(fgets(STDIN));

$salario_minimo = 1210.00;

// processamento
$qtd_salarios = $salario / $salario_minimo;

// saida
echo "Você ganha aproximadamente " . number_format($qtd_salarios, 2, ',', '.') . " salários mínimos.\n";
?>
