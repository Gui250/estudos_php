<?php

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {
        $usuario = htmlspecialchars($_POST['usuario']);
        $senha = htmlspecialchars($_POST['senha']);
    
        if($usuario == 'admin' && $senha == 'admin') {
            $_SESSIONON['usuario'] = $usuario;
            header('Location: welcome.php');
        } else {
            echo 'Usuário ou senha inválidos';
        }
    }

?>