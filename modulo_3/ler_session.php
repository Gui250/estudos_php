<?php 

    session_start(); // iniciando uma sessão



    $_SESSION['teste'] = 123; 
    $_SESSION['nome'] = 'Alessandro'; 
    $_SESSION['idade'] = 20; 
    print_r($_SESSION);
?> 