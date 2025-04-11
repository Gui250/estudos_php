<?php

    $altura = 1.0; 

    $num1 = 2.00; 
    $num2 = 2.50; 


    echo 'Multiplicação: ' . ($num1 *$num2);
    echo "<br />";
    echo "Adição: " . ($num1 + $num2);
    echo "<br />";
    echo "Subtração: " . ($num1-$num2);
    echo "<br />";
    echo 'Divisão: ' .($num1/$num2);
    echo "<br />";

    // round()
    $num3 = 2.90;

    echo "Arrendodamento com o round(): " . round($num3);

    echo "<br />";

    // Floor - arredonda para baixo
    echo "Arrendodamento com o floor(): " . floor($num3);

    echo "<br />";

    // Ceil - arredonda para cima
    echo "Arrendodmaento com o ceil(): " . ceil($num3);
?>