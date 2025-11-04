<?php
function soma($a, $b){
    $c = $a + $b;
    echo "o resultado é: $c \n";
}

echo "digite um numero: \n";
$n1 = tem(fgets(STDIN));
echo "digite outro numero: \n";
$n2 = trim(fgets(STDIN));

soma($n1,$n2);
?>