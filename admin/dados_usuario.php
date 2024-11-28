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
    <style>
        html * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .conteudo {
            display: flex;
            justify-content: center;
            align-items: start;
            width: 100%;
            height: 90vh;
        }

        .interacao {
            height: 4em;
            display: flex;
            align-items: center;
        }

        .interacao a {
            background-color: green;
            text-decoration: none;
            color: white;
            padding: 10px;
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <?php include("../includes/header.php") ?>
    <div class="interacao">
        <a href="cadastro_usuario.php">Incluir usuário</a>
    </div>
    <div class="conteudo">
        <?php
        // Verifica o valor atual de 'id' na URL
        $currentNome = isset($_GET['nome']) ? (int)$_GET['nome'] : 0;
        // Alterna entre 1 e 0
        $newNome = $currentNome === 1 ? 0 : 1;
        ?>
        <div class="table">
            <table>
                <th><a href="dados_usuario.php?nome=<?= $newNome ?>">Nome</a></th>
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
        } else if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 0) {
        ?>
            window.alert("Usuário com falha!")
        <?php
        }
        ?>

        <?php
        if (isset($_GET["erronome"]) && $_GET["erronome"] == 1) {
        ?>
            window.alert("Nome de usuário deve conter mais de 3 caractéres!");
        <?php
        }
        ?>

        <?php
        if (isset($_GET["errocpf"]) && $_GET["errocpf"] == 1) {
        ?>
            window.alert("CPF Inválido!");
        <?php
        }
        ?>

        <?php
        if (isset($_GET["errosenha"]) && $_GET["errosenha"] == 1) {
        ?>
            window.alert("A senha deve conter no mínimo 8 caracteres, 1 letra maiúscula, 1 letra minúscula e 1 número");
        <?php
        }
        ?>
    </script>

    <script src="../funcoes/validacoes.js"></script>
</body>

</html>