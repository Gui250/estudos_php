<?php 

$usuarioCorreto = 'admin';
$senhaCorreta = '123456';
    
if($usuarioCorreto == 'admin' && $senhaCorreta == '123456') { 
    echo "Seja Bem vindo!";
} else if($usuarioCorreto == 'admin' && $senhaCorreta != '123456'){ 
    echo "Erro de senha!"; 
} else { 
    echo "Erro nome de usuário";
}

echo "<br />";

$idade = 17;
$acompanhada = false; 

if($idade >= 18 || $acompanhada == true) { 
    echo "Pode entrar na festa!";
} else { 
    echo "Você não pode entrar na festa"; 
}



?>