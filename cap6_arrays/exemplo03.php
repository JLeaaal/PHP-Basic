<?php
$frutas = ["maçâ", "pera", "abacaxi", "banana"];
print_r($frutas);
echo "qual cor deseja alterar? \n";
$item = trim(fgets(STDIN));
$frutas[$item] = "uva";
print_r($frutas);
?>