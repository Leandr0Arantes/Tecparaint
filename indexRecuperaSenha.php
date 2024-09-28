<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir senha</title>
    <link rel="stylesheet" href="./css/indexRecuperaSenha.css">
    <link rel="stylesheet" href="./css/form.css">
</head>

<body>
    <div class="form">
        <form method="post" action="./funcoes/indexRecuperaSenha.php" class="formulario">
            <p>Redefinir senha</p>
            <div class="form-input">
                <label for="cpf">Usuário</label>
                <input type="text" name="cpf" id="cpf" required placeholder="Digite seu cpf">
            </div>
            <div class="form-input">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required placeholder="Digite sua senha">
            </div>
            <input type="submit" value="Recuperar" class="btn">
            <div class="extra-options">
                <a href="index.php">Fazer Login?</a>
            </div>
        </form>
    </div>
</body>

</html>