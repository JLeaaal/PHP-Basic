<?php
function ehPrimo($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

echo "Digite o primeiro número: ";
$a = trim(fgets(STDIN));

echo "Digite o segundo número: ";
$b = trim(fgets(STDIN));

for ($i = min($a, $b); $i <= max($a, $b); $i++) {
    if (ehPrimo($i)) echo $i . "\n";
}
?>
