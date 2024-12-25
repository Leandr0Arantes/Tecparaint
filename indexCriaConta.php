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
                <input type="text" name="cpf" id="cpf" required placeholder="Digite seu cpf" maxlength="14" oninput="mascaraCPF(this)">
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

    <script src="funcoes/mascararCPF.js"></script>
    <script>

    <?php
    if(isset($_GET["erronome"]) && $_GET["erronome"] == 1){
    ?>
        window.alert("Nome de usuário deve conter mais de 3 caractéres!");
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

    <?php
    if(isset($_GET["errosenha"]) && $_GET["errosenha"] == 1){
    ?>
        window.alert("A senha deve conter no mínimo 8 caracteres, 1 letra maiúscula, 1 letra minúscula e 1 número");
    <?php
    }
    ?>
    </script>
</body>

</html>