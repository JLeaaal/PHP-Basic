<?php

echo "Digite o valor inicial do carro: ";
$valor_inicial = (float) trim(fgets(STDIN));

$valor_carro = $valor_inicial;
$valor_investimento = $valor_inicial;

echo "\nAno | Valor do Carro (R$) | Valor Investimento (R$) | Diferença (R$)\n";
echo str_repeat("-", 65) . "\n";

for ($ano = 1; $ano <= 10; $ano++) {
    $valor_carro *= 0.93;
    $valor_investimento *= 1.07;
    $diferenca = $valor_investimento - $valor_carro;
    printf("%3d | %18.2f | %21.2f | %12.2f\n", 
        $ano, $valor_carro, $valor_investimento, $diferenca);
}
?>