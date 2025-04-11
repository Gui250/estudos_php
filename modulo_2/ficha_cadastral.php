<?php
    $nome = "João Silva";
    $idade = 25; 
    $sexo = 'M';
    $salario_mensal = 22210.30;
    $esta_empregado = true; 
    $habilidades = ['PHP', 'JavaScript', 'HTML', 'CSS'];

    $total_para_aposentar = null; 

    if($sexo == 'M') { 
        $total_para_aposentar = 65;
    } else {
        $total_para_aposentar = 62;
    }


    $situacao_emprego = null; 

    if($esta_empregado) { 
        $situacao_emprego = 'Empregado';
    } else { 
        $situacao_emprego = 'Desempregado';
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Cadastral</title>
    <style>
        body { 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container { 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background: #fff;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <?= $nome; ?></p>
            <p>Idade: <strong><?= $idade; ?></strong></p>
            <p>Sexo: <strong><?= $sexo; ?></strong></p>
            <p>Salário Mensal: <strong>R$ <?= number_format($salario_mensal, 2, ',', '.'); ?></strong></p>
            <p>Salário Anual: <strong><?= number_format($salario_mensal * 12, 2,',', '.'); ?></strong></p>
            <p>Status emprego: <strong>
                <?= $situacao_emprego; ?>
            </strong></p>
            <p>Anos para aposentadoria: <strong>
            <?= $total_para_aposentar; ?>
            </strong></p>
            <p>Habilidades: <strong>
                <?= implode(', ', $habilidades); // Escreve o array com o separador de virgulas ?>
            </strong></p>
        </div>
    </div>
</body>
</html>