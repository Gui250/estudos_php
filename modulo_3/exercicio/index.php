<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="login.php">
        <label for="username">Usuario:</label>
        <input type="text" name="usuario" value="<?= $login ?? ''; ?>"/> <br /> 
        <label for="password">Senha:</label>
        <input type="password" name="password" value="<?= $password ?? ''; ?>"></br> 
        <label for="lembrar">Tema Preferido: </label>
        <select name="tema">
            <option value="escuro">escuro</option>
            <option value="claro">claro</option>
        </select>
        <input type="submit" value="Login">
    </form>
</body>
</html>