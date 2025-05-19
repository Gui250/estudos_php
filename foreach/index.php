<?php 

  $nomes = ['Alessandro', 'Bonieky', 'João', 'Maria'];
  $texto = 'Foreach com PHP em arrays convencionais';

  echo "<h2>$texto</h2>";
  foreach($nomes as $nome) {
    echo "$nome <br/>";
  }

  echo "<h2>Foreach com PHP em arrays associativos</h2>";
  $pessoas = [
    'nome' => 'Alessandro',
    'idade' => 33,
    'profissao' => 'Programador'
  ];

  foreach($pessoas as $chave => $valor) {
    echo "chave: $chave - valor: $valor <br/>";
  }

?> 