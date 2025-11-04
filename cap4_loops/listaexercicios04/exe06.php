<?php
echo "Digite um número: ";
$x = trim(fgets(STDIN));

while ($x > 1) {
    if ($x % 2 == 0) {
        $x = $x / 2;
    } else {
        $x = 3 * $x + 1;
    }
    echo $x . "\n";
}
?>
