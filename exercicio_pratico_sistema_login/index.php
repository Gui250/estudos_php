<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="login.php">
        <label>Usuário:</label>
        <input type="text" name="usuario"><br><br>

        <label>Senha:</label>
        <input type="password" name="senha"><br><br>

        <label>Tema:</label>
        <select name="tema">
            <option value="escuro">Escuro</option>
            <option value="claro">Claro</option>
        </select>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>
