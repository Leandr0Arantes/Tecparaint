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

    <script>
        function validarNome(nome) {
            if (nome.length < 3) {
                return false;
            }

            for (let i = 0; i < nome.length; i++) {
                const char = nome[i];
                if (!((char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z') || char === ' ')) {
                    return false;
                }
            }

            return true;
        }

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
            const nome = document.getElementById("nome").value;

            if (!validarNome(nome)) {
                alert("Nome inválido");
                return false;
            }

            if (!validarCPF()) {
                alert("CPF inválido, coloque os pontos e traços.");
                return false;
            }

            if (!validarSenha()) {
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