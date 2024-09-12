<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <form method="post" action="./funcoes/criar_conta.php" class="formulario">
        <h1>Login</h1>
        <div class="form-input">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required placeholder="Digite seu nome">
        </div>
        <div class="form-input">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" required placeholder="Digite seu cpf">
        </div>
        <div class="form-input">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required placeholder="Digite sua senha">
        </div>
        <input type="submit" value="Criar conta" class="btn">
    </form>
</body>

</html>