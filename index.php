<?php
include("funcoes/validacoes.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/form.css">
</head>

<body>
    <div class="form">
        <form method="post" action="./funcoes/index.php" class="formulario">
            <p>Entrar</p>
            <div class="form-input">
                <label for="cpf">Usuário</label>
                <input type="text" name="cpf" id="cpf" required placeholder="Digite seu cpf" maxlength="14" oninput="mascaraCPF(this)">
            </div>
            <div class="form-input">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required placeholder="Digite sua senha">
            </div>
            <input type="submit" value="Entrar" class="btn">
            <div class="extra-options">
                <a href="indexRecuperaSenha.php">Esqueceu a senha?</a>
                <a href="indexCriaConta.php">Criar conta nova</a>
            </div>
        </form>
    </div>

    <script src="funcoes/mascararCPF.js"></script>
</body>

</html>
