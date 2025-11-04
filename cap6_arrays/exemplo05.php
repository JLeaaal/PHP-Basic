<?php
$planetas = ["mercurio", "venus", "terra", "marte"];
echo "qual planeta deseja localizar? \n";
$locplan = trim(fgets(STDIN));
for($i = 0; $i < count($planetas); $i++){
    if($planetas[$i] == $locplan)
        echo "o planeta esta na lista";
        break;
}
