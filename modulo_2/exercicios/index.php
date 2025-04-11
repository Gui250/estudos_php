<?php

    for($i = 0; $i <= 10; $i++) {
        echo $i;
        echo "<br />";
    }


    $array = [1,2,3,4,5]; 
    $somaArr = 0;
    foreach($array as $elem) { 
        $somaArr += $elem; 
    }

    echo "A soma é dos números do array é de: $somaArr";


    $produtos = [ 
        'Produto1' => 10, 
        'Produto2' => 20,
        'Produto3' => 30
    ];
    $subtotal = 0; 

    foreach($produtos as $nome => $valor) { 
        if($nome == 'Produto1') { 
            $valor = $valor * 1;
        } 
        if($nome == 'Produto2') {
            $valor = $valor * 2; 
        } 
        else { 
            $valor = $valor * 3; 
        }

        $subtotal += $valor;
    }

    echo "Subtotal: R$ $subtotal";
?>