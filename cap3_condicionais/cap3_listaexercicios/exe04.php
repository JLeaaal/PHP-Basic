<?
//Autor: Julia
//Data: 28/08/25
//Assunto: Lista de Exercicios: 04
echo "Digite sua primeira nota: ";
$n1 = trim(fgets(STDIN));
echo "Digite sua segunda nota: ";
$n2 = trim(fgets(STDIN));
$media = ($n1 + $n2)/2;
echo "A sua média é de: " . $media . "\n";

if($media >= 6.0){
    echo "devido a sua média você está: APROVADO";
}
    elseif($media >= 4.0){
    echo "devido a sua média você está: EM RECUPERAÇÃO";
}
else{
    echo "devido a sua média você está: REPROVADO";
}


?>