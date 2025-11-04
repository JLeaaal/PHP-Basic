<?php
$cores = ["vermelho", "amarelo", "azul"];
print_r($cores); // ele mostra os indices, economisando linha ao usar ele e não o echo
echo "qual nova core deseja incluir? \n";
$novacor = trim(fgets(STDIN));
$cores [] = $novacor;
print_r($cores);
?>