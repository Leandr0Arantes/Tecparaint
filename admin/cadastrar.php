<?php
include('../funcoes/conexao.php');
include('../funcoes/valida.php');
include('../funcoes/validaAdmin.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cadastrar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <div class="user">
            <a href="usuario.php">
            <img src="<?php echo $_SESSION["foto"]; ?>" alt="foto de usuário">
            <p><?php echo "Olá, " . $_SESSION["nome"]; ?></p>
            </a>
        </div>
        <div class="menu">
            <ul>
                <li class="atual"><a href="principal.php" target="_self" rel="next">Principal</a></li>
                <li><a href="cadastrar.php" target="_self" rel="next">Cadastrar</a></li>
                <li><a href="alterar.php" target="_self" rel="next">Alterar</a></li>
                <li><a href="remover.php" target="_self" rel="next">Remover</a></li>
                <li><a href="busca.php">Buscar</a></li>
                <li><a class="btn-sair" href="../funcoes/sair.php">Sair</a> </li>
            </ul>
        </div>
    </header>
    <div class="conteudo">
        <div class="form">
            <form action="../funcoes/cadastrar.php" method="post" class="formulario">
                <p>Fazer cadastro</p>
                <div class="form-input">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required placeholder="Digite seu nome">
                </div>
                <div class="form-input">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" required placeholder="Digite seu cpf">
                </div>
                <div class="form-input">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required placeholder="Digite sua senha">
                </div>
                <input type="submit" value="Salvar" class="btn">
            </form>
        </div>

        <div class="table">
            <table>
                <th>Nome</th>
                <th>CPF</th>
                <th>Senha</th>
                <?php
                $sql = "SELECT * FROM usuarios";
                $resultado = $conn->query($sql);
                while ($row = $resultado->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?= $row['nome']; ?></td>
                        <td><?= $row['cpf']; ?></td>
                        <td><?= $row['senha']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
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
    if(isset($_GET["erronome"]) && $_GET["erronome"] == 1){
    ?>
        window.alert("Nome de usuário deve conter mais de 3 caractéres!");
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

    <script>
        return true;
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