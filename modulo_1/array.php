<?php

    $nomes = array('Alessandro', 'João');

    echo $nomes[1];


    $numeros = [200, 300, 400];

    $carros = [ 
        'Alesandro' => 2, 
        'Maria' => 2, 
        'João' => 30
    ];

    $informacoes = [ 
        "Alessandro" => [
            "carros" => 1, 
            "idade" => 32,
            "altura" => 174
        ],
        "João" => [ 
            "carros" => 2, 
            "idade" => 35,
            "altura" => 160
        ]
        ];

    echo $carros["João"];
    
    echo '<pre>';
    var_dump($informacoes);
    echo '</pre>';

    echo "<br />";

    $frutas = ['Laranja', 'Limão'];
    array_push($frutas, 'uva'); // Adiciona item no array
    var_dump($frutas);
    echo "<br />";
    array_shift($frutas); // Retira o primeiro item do array
    var_dump($frutas);
    array_pop($frutas); // Retira o ultimo elemento do array


    $quantidadeDeItens = count($frutas); // Conta a quantidade de itens no array

    echo $quantidadeDeItens;
    echo "<br />";

    $temLaranja = in_array("Laranja", $frutas); // Verifica se tem um item no array
    var_dump($temLaranja);
    echo "<br />";
    $outrasFrutas = ["Abacaxi", "Manga"];

    $todasAsFrutas = array_merge($frutas, $outrasFrutas); // Junta arrays

    var_dump($todasAsFrutas);
?>