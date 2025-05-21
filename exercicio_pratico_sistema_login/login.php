<?php
session_start();

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
    $usuario = trim(htmlspecialchars($_POST['usuario']));
    $senha = trim(htmlspecialchars($_POST['senha']));

    if ($usuario === 'admin' && $senha === 'admin') {
        $_SESSION['usuario'] = $usuario;

        if (!empty($_POST['tema'])) {
            setcookie('tema', htmlspecialchars($_POST['tema']), time() + 3600);
        }

        header('Location: welcome.php');
        exit;
    } else {
        echo "Usuário ou senha incorretos.<br>";
        echo '<a href="index.php">Voltar</a>';
    }
} else {
    echo "Usuário ou senha não preenchidos.<br>";
    echo '<a href="index.php">Voltar</a>';
}
?>
