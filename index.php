<?php
include("/funcoes/index.php");
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
                <input type="text" name="cpf" id="cpf" required placeholder="Digite seu cpf">
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

    <script>
        <?php
            if(isset($_GET["erro"]) and isset($_GET["erro"]) == 1){
                ?>
                window.alert("Senha incorreta!")
                <?php
            }
        ?>

        <?php
            if(isset($_GET["errosenha"]) && $_GET["errosenha"] == 1){
                ?>
                window.alert("A senha deve conter no mínimo 8 caracteres, 1 letra maiúscula, 1 letra minúscula e 1 número");
                <?php
            }
        ?>

        <?php
            if(isset($_GET["errocpf"]) && $_GET["errocpf"] == 1){
                ?>
                window.alert("CPF Inválido!");
                <?php
            }
        ?>
    </script>

    <script src="../funcoes/validacoes.php"></script>
</body>
</html>

