<?php
#Leia um número N, calcule e escreva os N primeiros termos de seqüência de Fibonacci (0,1,1,2,3,5,8,...). O valor lido para N sempre será maior ou igual a 2.


$N = intval(readline('Valor de N: '));
$listaFibonnaci = [0,1];

function listarFibonnaci( $n ){
    global $listaFibonnaci;
    $n1 = 0;
    $n2 = 1;
    $valor;
    $i=0;
    while ($i < $n) { 
        $valor = $n1 + $n2;
        $n1 = $n2;
        $n2 = $valor;
        array_push($listaFibonnaci, $valor);
        $i++;
    }
}


listarFibonnaci($N);

foreach ($listaFibonnaci as $fibNum) {
    echo "Número > $fibNum \n";
}



















?>