<?php
include('../funcoes/valida.php');
include('../funcoes/filtro.php');
verificarAdmin(true);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        <a href="cadastro_genero.php">Incluir gênero</a>
    </div>
    <div class="conteudo">
        <?php
        // Verifica o valor atual de 'id' na URL
        $currentId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        $currentCategoria = isset($_GET['categoria']) ? (int)$_GET['categoria'] : 0;
        $currentStatus = isset($_GET['status']) ? (int)$_GET['status'] : 0;
        // Alterna entre 1 e 0
        $newId = $currentId === 1 ? 0 : 1;
        $newCategoria = $currentCategoria === 1 ? 0 : 1;
        $newStatus = $currentStatus === 1 ? 0 : 1;
        ?>
        <div class="table">
            <table>
                <th><a href="dados_genero.php?id=<?= $newId ?>">ID</a></th>
                <th><a href="dados_genero.php?categoria=<?= $newCategoria ?>">Categoria</a></th>
                <th><a href="dados_genero.php?status=<?= $newStatus ?>">Situação</a></th>
                <th colspan="2">Ações</th>
                <?php
                if ($resultado && $resultado->num_rows > 0) {
                    $resultado = $conn->query($sql);
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td>
                                <form action="../funcoes/alterar_genero.php" method="post">
                                    <input type="hidden" name="categoriaAtual" value="<?= $row['categoria']; ?>">
                                    <input type="text" name="categoria" value="<?= $row['categoria']; ?>">
                            </td>
                            <td><?php if ($row['status']) {
                                    echo ("Ativo");
                                } else {
                                    echo ("Desativado");
                                } ?></td>
                            <td><input type="submit" value="Alterar" class="btn-input"></td>
                            </form>
                            </form>
                            <td>
                                <form action="../funcoes/alterar_situação.php" method="post">
                                    <input type="hidden" name="idAtual" value="<?= $row['id']; ?>">
                                    <input type="hidden" name="statusAtual" value="<?= $row['status']; ?>">
                                    <input type="submit" value="Alterar situação" class="btn-input">
                            </td>
                            </form>
                        </tr>
                <?php
                    }
                } else {
                    echo "<p>Nenhum filme encontrado para essa categoria.</p>";
                }
                ?>
            </table>
        </div>
    </div>

    <script>
        <?php
        if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 1) {
        ?>
            window.alert("Gênero cadastrado com sucesso!");
        <?php
        } else if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 0) {
        ?>
            window.alert("Gênero com falha!")
        <?php
        }
        ?>

        <?php
        if (isset($_GET["alterar"]) && $_GET["alterar"] == 1) {
        ?>
            window.alert("Situação alterada com sucesso!");
        <?php
        } else if (isset($_GET["alterar"]) && $_GET["alterar"] == 0) {
        ?>
            window.alert("Situação com falha!")
        <?php
        }
        ?>

        <?php
        if (isset($_GET["alterado"]) && $_GET["alterado"] == 1) {
        ?>
            window.alert("Situação alterada com sucesso!");
        <?php
        } else if (isset($_GET["alterado"]) && $_GET["alterado"] == 0) {
        ?>
            window.alert("Situação com falha!")
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