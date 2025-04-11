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

    // if(!empty($_POST['login'] && !empty($_POST['password']))) { 
    //     $login = htmlspecialchars($_POST['login']);
    //     $password = htmlspecialchars($_POST['password']);
    //     echo "Seu login é $login e sua senha é $password";
    // }



 
    if(!empty($_POST['login'] && !empty($_POST['password']))) { 
        // Verifica se login e senha === admin
        $login = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['password']);
        $mensagem = null; 
        if($login == 'admin' && $password == 'admin') {
            $mensagem = "Você logou com sucesso";
        } else { 
            $mensagem = "Usuário ou senha inválidos";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <title>Formulario de login</title>
</head>
<body>
    <form action="dados.php" method="POST">
        <input type="text" name="login" placeholder="Digite o login" value="<?= $login ?? '' // Se a variavel for definida ele usa o valor da esquerda, se não usa o da direita?>"/> <br /> 
        <input type="password" name="password" placeholder="Digite a senha" value="<?=$password ?? '' ?>" /> <br />
        <input type="submit" value="Enviar" />
       <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {  // Verifica se o formulario foi enviado
            echo $mensagem; 
        }

        ?>
    </form>
</body>
</html>