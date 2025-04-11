<?php

    session_start();

    if(!empty($_POST['usuario']) && !empty($_POST['password'])) {
        $usuario = htmlspecialchars($_POST['usuario']);
        $password = htmlspecialchars($_POST['password']); 

        if($usuario == 'admin' && $password == 'admin') { 
            $_SESSION['usuario'] = $usuario; 

            if(!empty($_POST['tema'])) {
                setcookie('tema', htmlspecialchars($_POST['tema']));
            }


            header('Location: welcome.php');
            exit();
        } else { 
            echo 'Usuário ou senha inválidos';
            echo "<a href='index.php'> voltar</a>"; 
        }
    } else { 
        echo 'Preencha todos os dados'; 
        echo "<a href='index.php'> voltar</a>"; 
    }
?>