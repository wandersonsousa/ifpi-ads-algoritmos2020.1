<?php
#Leia N, calcule e escreva os N primeiros termos de seqüência (1, 3, 6, 10, 15,...).
$N = intval(readline('Valor de N: '));
$numerosSortidos = [];
$i=1;
while ( $i <= $N) {
    $num = intval(readline('Valor: '));
    array_push($numerosSortidos, $num);
    $i++;
}

sort( $numerosSortidos );


echo "-------------------------------------- \n";
foreach ($numerosSortidos as $n) {
    echo "Número $n \n";
}






?>