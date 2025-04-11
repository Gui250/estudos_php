<?php

    $cidades = ['Tokyo', 'Paris', 'Londres', 'Milwaukee', 'Lisboa'];

    echo $cidades[2];

    echo "<br />";

    $alunos = [
        'Maria' => 19, 
        'João' => 22, 
        "Pedro" => 25
    ];

    echo $alunos['João'];


    $cores = ['Verde', 'Azul', 'Vermelho'];

    array_push($cores, 'Amarelo'); 
    array_shift($cores);

    echo '<pre>';
    var_dump($cores);
    echo '</pre>';


    $precos = [ 
        'Sabão' => 10,
        'Pão' => 15
    ];

    $precos['Sabão'] += 10;
    $precos['Pão'] -= 1;

    echo "<pre>"; 
    var_dump($precos);
    echo "</pre>";
?>