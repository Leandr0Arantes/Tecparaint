<?php
include('../funcoes/conexao.php');
include('../funcoes/valida.php');
verificarAdmin(true);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/alterar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/mensagem-erro.css">
</head>

<body>
    <?php include("../includes/header.php")?>
    
    <div class="mensagem-erro" id="mensagem-erro">
        <p>Usuário alterado com sucesso!!</p>
    </div>
    <div class="conteudo">
        <div class="table">
            <table>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Administrador</th>
                    <th>Senha</th>
                    <th>Alterar</th>
                    <th>Remover</th>
                <?php
                $sql = "SELECT * FROM usuarios";
                $resultado = $conn->query($sql);
                while ($row = $resultado->fetch_assoc()) {
                ?>
                <tr>
                    <form action="../funcoes/alterar.php" method="post">
                        <input type="hidden" name="cpfAnterior" value="<?= $row['cpf']; ?>">
                        <td><input type="text" name="nome" value="<?= $row['nome']; ?>"></td>
                        <td><input type="text" name="cpf" value="<?= $row['cpf']; ?>"></td>
                        <td><input type="text" name="administrador" value="<?= $row['administrador']; ?>"></td>
                        <td><input type="text" name="senha" value="<?= $row['senha']; ?>"></td>
                        <td><input type="submit" value="Alterar" class="btn-input"></td>
                    </form>
                    <form action="../funcoes/remover.php" method="post">
                            <td>
                                <input type="hidden" name="cpfAtual" value="<?= $row['cpf']; ?>">
                                <input type="submit" value="Remover" class="btn-input">
                            </td>
                        </form>
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
        window.alert("Usuário alterado com sucesso!");
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


<script>
function validarFormulario() {
    const nome = document.querySelector('input[name="nome"]').value;
    const cpf = document.querySelector('input[name="cpf"]').value;
    const senha = document.querySelector('input[name="senha"]').value;

    // Validação do nome: pelo menos 3 caracteres
    if (nome.length < 3) {
        alert("Nome de usuário deve conter mais de 3 caracteres!");
        return false;
    }

    // Validação do CPF
    if (!validarCPF(cpf)) {
        alert("CPF Inválido!");
        return false;
    }

    // Validação da senha: 8 caracteres, 1 maiúscula, 1 minúscula, e 1 número
    const senhaRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
    if (!senhaRegex.test(senha)) {
        alert("A senha deve conter no mínimo 8 caracteres, 1 letra maiúscula, 1 letra minúscula e 1 número");
        return false;
    }

    return true;
}

// Função de validação do CPF
function validarCPF(cpf) {
    cpf = cpf.replace(/\D/g, '');

    if (cpf.length !== 11 || /^(\d)\1{10}$/.test(cpf)) {
        return false;
    }

    for (let t = 9; t < 11; t++) {
        let d = 0;
        for (let c = 0; c < t; c++) {
            d += cpf[c] * ((t + 1) - c);
        }
        d = ((10 * d) % 11) % 10;
        if (cpf[t] != d) {
            return false;
        }
    }

    return true;
}

// Adiciona o evento de validação ao formulário
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('form').onsubmit = validarFormulario;
});
</script>


</body>
</html>