<?php

    // Superglobais no PHP
    // São variaveis que estão definidas pra gente no escopo global
    // $_GET
    // isset() - Verifica se uma variavel foi setada, mas ignora se tem ou não valor
    // empty() - verifica se uma variavel foi setada, e se ela TEM valor.

    // if(!empty($_GET['campanha'])) {
    //     $numero_campanha = $_GET['campanha'];
    //     echo "Você veio pela campanha " . $numero_campanha; 
    // } else { 
    //     echo "Variavel não definida, ou vazia";
    // }


    // htmlspecialchars - trata contra falhas XSS

    if(!empty($_POST['login'] && !empty($_POST['password']))) { 
        $login = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['password']);
        echo "Seu login é $login e sua senha é $password";
    }

?>