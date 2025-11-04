<?php
$a = 0; 
$b = 1;
echo "$a $b ";

while (true) {
    $c = $a + $b;
    if ($c > 100) break;
    echo $c . " ";
    $a = $b;
    $b = $c;
}
?>
