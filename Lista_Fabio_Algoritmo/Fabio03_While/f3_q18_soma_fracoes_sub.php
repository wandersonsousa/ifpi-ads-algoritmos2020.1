<?php
#Leia N, calcule e escreva o valor de S


$N = intval(readline('Valor de N: '));
$S = 0;

$i=1;
while ( $i <= $N) { 
    echo "i = $i \n";
    if($i === 1){
        $S = 1;
        $i += 2;
        continue;
    }

    $S += $i / ($i - 1);
    echo "$i / ($i - 1) = $S \n ";
    $i++;
}


echo "Valor Final de S => $S \n";