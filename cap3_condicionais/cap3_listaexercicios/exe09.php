<?
//Autor: Julia
//Data: 02/09/25
//Assunto: Lista de Exercicios: Exercicio 09
echo "digite seu nome: ";
$nome = trim(fgets(STDIN));
echo "digite seu sálario bruto: ";
$salario = trim(fgets(STDIN));

if($salario >= 5000){
    $desconto = $salario * 0.10;
}elseif($salario >= 2000 && $salario <= 5000){
    $desconto = $salario * 0.05;
}else{
    $desconto = $salario * 0.02;
}
$salariofinal = $salario - $desconto;

echo $nome . ", seu salario bruto é: " . number_format($salario,2) . ", os descontos aplicados são: " . number_format($desconto,2) . " e seu salário liquído é: " . number_format($salariofinal,2);
?>