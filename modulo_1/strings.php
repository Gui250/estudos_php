<?php 
    $nome = 'Alessandro';
    $numeroCaracteres = strlen($nome);  // Exibe o tamanho da string

    // echo "Meu nome é: $nome, ele tem $numeroCaracteres caracteres <br />";

    // strpos - busca a posição de uma palavra em uma string
    $texto = 'Pera, uva, maçã e salada mista.';
    $posicaoPalavraUva = strpos($texto, 'uva');




    // Exercicio: Buscar a posição das palavras uva e Pera, e escrever:
    // A palavra uva começa na posição X, e pera na posição Y
    $posicaoPalavraPera = strpos($texto, 'Pera');

    // echo "A palavra uva começa na posição $posicaoPalavraUva, e pera na posição $posicaoPalavraPera";
    

    // substr() - retorna uma parte de uma string
    $parteDaString = substr($texto, 6, 3);
    

    // Exercicio: Retirar apenas a palavra Pera, usando a funcao substr()
    $parteDaStringPera = substr($texto, 0, 4); 

    echo $parteDaStringPera;
?>