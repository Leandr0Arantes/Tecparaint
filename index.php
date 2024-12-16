<?php
include("funcoes/validacoes.php"); 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAIR - Walysson</title>
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
    if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 1) {
    ?>
        window.alert("Usuário inserido com sucesso!");
    <?php
    } else if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 0){
        ?>
        window.alert("Usuário com falha!")
        <?php
    }
    ?>
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

    <script>
        function validarCPF() {
            let cpf = document.getElementById("cpf").value;
            cpf = cpf.replace(/\D/g, '');

            if (cpf.length !== 11 || cpf.split('').every(c => c === cpf[0])) {
                return false;
            }

            let soma = 0,
                resto;

            for (let i = 1; i <= 9; i++) {
                soma += parseInt(cpf[i - 1] * (11 - i))
            }

            resto = (soma * 10) % 11;

            if (resto === 10 || resto === 11) {
                resto = 0;
            }

            if (resto !== parseInt(cpf[9])) {
                return false;
            }

            soma = 0;

            for (let i = 1; i <= 10; i++) {
                soma += parseInt(cpf[i - 1] * (12 - i));
            }

            resto = (soma * 10) % 11;

            if (resto === 10 || resto === 11) {
                resto = 0;
            }

            if (resto !== parseInt(cpf[10])) {
                return false;
            }

            return true;
        }

        function validarSenha() {
            const senha = document.getElementById('senha').value;

            if (senha.length < 6) {
                alert("A senha deve ter pelo menos 6 caracteres!");
                return false;
            }

            let temMaiuscula = false,
                temMinuscula = false,
                temNumero = false,
                temEspecial = false;

            const especiais = ['@', '!', '.', '%', '?', '&', '*', '$', '#'];

            for (let i = 0; i < senha.length; i++) {
                const char = senha[i];

                if (char >= 'A' && char <= 'Z') {
                    temMaiuscula = true;
                }

                if (char >= 'a' && char <= 'z') {
                    temMinuscula = true;
                }

                if (char >= '0' && char <= '9') {
                    temNumero = true;
                }

                if (especiais.includes(char)) {
                    temEspecial = true;
                }
            }

            if (!temEspecial) {
                alert("A senha tem que ter um caractere especial!");
                return false;
            }

            if (!temMaiuscula) {
                alert("A senha tem que ter uma letra maiuscula!");
                return false;
            }
            if (!temMinuscula) {
                alert("A senha tem que ter uma letra minuscula!");
                return false;
            }
            if (!temNumero) {
                alert("A senha tem que ter um numero!");
                return false;
            }

            return true;
        }

        function validarForm() {
            const cpf = document.getElementById("cpf").value;
            const senha = document.getElementById("senha").value;

            if (!validarCPF(cpf)) {
                alert("CPF inválido, coloque os pontos e traços.");
                return false;
            }

            if (!validarSenha(senha)) {
                alert("CPF inválido, coloque os pontos e traços.");
                return false;
            }

            return true;
        }

        document.querySelector('form').addEventListener('submit', function(event) {
            if (!validarForm()) {
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
