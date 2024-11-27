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
    <title>Cadastrar Usuário</title>
    <link rel="stylesheet" href="../css/cadastrar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/mensagem-erro.css">
</head>

<body>
        <?php include("../includes/header.php")?>

        <div class="conteudo">

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

<script src="../funcoes/validacoes.js"></script>
</body>

</html>