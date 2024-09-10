<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form method="post" action="login.php" class="formulario">
                <p>LOGIN</p>
                <input type="text" name="cpf" id="cpf" placeholder="CPF:" required class="campos">
                <input type="password" name="senha" id="senha" placeholder="SENHA:" required class="campos">
                <input type="submit" value="Entrar" class="btn_submit">
    </form>
</body>
</html>