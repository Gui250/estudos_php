<?php
    require 'functions.php';
    $erro = null; 
    $sucesso = null;


    if($_SERVER['REQUEST_METHOD'] == 'POST') { 
        $texto = $_POST['texto'];
    }

    // Sanitização
    $texto = htmlspecialchars($texto); 

    // Tirando o espaço inicial e final da palavra
    $texto = trim($texto);


    // garantir que texto tem um @
    if(strpos($texto, '@') == false) {  // checando se o texto tem @
        $erro = 'O texto precisa ter um @'; 
    }  // Primeira validação
    else if(empty($texto)) { 
        $erro = 'O campo texto é obrigatório';
    } else if(strlen($texto) < 5) { // vendo se o tamanho da string é menor que 5
        $erro = 'O texto tem que ter pelo menos 5 caracteres';
    } else if(strlen($texto) > 10) { 
        $erro = 'O texto tem que ter no máximo 10 caracteres';
    } else { 
        $sucesso = 'Campo validado com sucesso';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulário</h1>

    <?php if(exibirErro($erro)): ?> 
    <p style="color: red;">
        <?= $erro; ?>
    </p>
    <?php endif; ?> 
    <?php if(exibirErro($erro)) : ?> 
    <p style="color: green;">
      <?= $sucesso; ?> 
    </p>
    <?php endif; ?>
    <form method="POST">
        <input type="text" name="texto" placeholder="Digite o Texto" /> 
        <input type="submit" value="enviar" /> 
    </form>
</body>
</html>