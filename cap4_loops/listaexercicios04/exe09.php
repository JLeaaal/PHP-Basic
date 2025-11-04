<?php
echo "Digite o nome do aluno: ";
$nome = trim(fgets(STDIN));

$soma = 0;
for ($i = 1; $i <= 4; $i++) {
    echo "Digite a nota $i: ";
    $nota = trim(fgets(STDIN));
    $soma += $nota;
}

$media = $soma / 4;
echo "Aluno: $nome - Média: $media\n";
?>
