<?php

    $N = intval(readline('Valor de N: '));
    $i = ($N - 1);
    while ( $i >= 1) {  
        if( sqrt($i) === floor(sqrt($i)) ){
            echo "Maior quadrado antecessor -> $i\n";
            break;
        }   
        $i--;  
    }
    
    
    
    
    

?>