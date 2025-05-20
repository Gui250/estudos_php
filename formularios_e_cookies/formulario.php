<?php 
    
    if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {
        $login = htmlspecialchars($_POST['usuario']);
        $senha = htmlspecialchars($_POST['senha']);
        $msg = null; 
        if($login == 'admin' && $senha == '123') {
            $msg = "Login efetuado com sucesso!";
        } else {
            $msg = "Login ou senha inválidos!";
        }
    } else {
        $msg = "Preencha os campos!";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
</head>
<body>
    <form method="POST">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" value="<?= $login ?? '' ?>">
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" value="<?=$senha ?? '' ?>">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<p>$msg</p>";
        }
    ?>
</body>
</html>