<?php

#Leia N, calcule e escreva o valor de S


$N = intval(readline('Valor de N: '));
$S = 0;
echo "\n";
$i=1;
while ($i <= $N) {
    if($i === 1){
        $S = 1;
        continue;
    };

    if( eh_par($i + 2) ){
        $S += ($i + 1) / $i; 
        echo "($i + 1) / $i \n";
        $i++;
        continue;
    }
    $S += ($i + 2) / $i; 
    echo "($i + 2) / $i \n";
    echo "\n";
    $i++
}

function eh_par($n){
    return $n % 2 === 0;
}



echo "Valor Final de S => $S \n";

