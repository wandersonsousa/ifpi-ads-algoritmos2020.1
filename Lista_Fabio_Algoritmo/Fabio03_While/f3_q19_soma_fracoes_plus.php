<?php
#Leia N, calcule e escreva o valor de S


$N = intval(readline('Valor de N: '));
$S = 0;
echo "\n";
$i=1;
while ( $i <= $N) {
     
    if($i === 1){
        $S = 1 / $i;
        echo "1 / $i = $S\n";
        $i -= 2;
        continue;
    }

    if( eh_par($i) ){
        $S -= ($i - ($i - 1) ) / $i;   
        echo "($i - ($i - 1) ) / $i = $S\n ";
    }else{
        $S += $i / ($i - ($i - 1));
        echo "$i / ($i - ($i - 1) ) = $S\n ";
    }

    echo "\n";
    $i++;
}

function eh_par($n){
    return $n % 2 === 0;
}


echo "Valor Final de S => $S \n";

