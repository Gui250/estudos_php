<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="login.php">
        <label for="username">Usuário:</label>
        <input type="text" name="usuario"> <br/> 
        <label for="password">Senha:</label>
        <input type="password" name="senha"> <br/>
        <select name="tema">
            <option value="escuro">escuro</option>
            <option value="claro">claro</option>
        </select>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>