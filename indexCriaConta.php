<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar usuário</title>
    <link rel="stylesheet" href="./css/indexCriaConta.css">
    <link rel="stylesheet" href="./css/form.css">
</head>

<body>
    <div class="form">
        <form method="post" action="./funcoes/indexCriaConta.php" class="formulario">
            <p>Cadastrar-se</p>
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
            <div class="extra-options">
                <a href="index.php">Fazer Login?</a>
            </div>
        </form>
    </div>
</body>

</html>