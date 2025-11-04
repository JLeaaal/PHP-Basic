<?php
function soma($a, $b){
    $c = $a + $b;
    return $c;
}

echo "digite um numero: \n";
$n1 = trim(fgets(STDIN));
echo "digite outro numero: \n";
$n2 = trim(fgets(STDIN));

$resultado = soma($n1,$n2);
echo "o resultado é $resultado";
?>