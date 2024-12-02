<?php
include('../funcoes/conexao.php');
include('../funcoes/valida.php');
include('../funcoes/filtro_filme.php');
verificarAdmin(true);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="../css/cadastrar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/form.css">
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

        .table a {
            color: black;
            text-decoration: none;
        }

        .table button {
            background: none;
            border: none;
        }

        .table button i {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php include("../includes/header.php") ?>
    <div class="interacao">
        <a href="cadastro_filme.php">Incluir filme</a>
    </div>
    <div class="conteudo">
        <?php
        // Verifica o valor atual de 'id' na URL
        $currentId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        $currentNome = isset($_GET['nome']) ? (int)$_GET['nome'] : 0;
        $currentDescricao = isset($_GET['descricao']) ? (int)$_GET['descricao'] : 0;
        $currentImagem = isset($_GET['imagem']) ? (int)$_GET['imagem'] : 0;
        $currentStatus = isset($_GET['status']) ? (int)$_GET['status'] : 0;
        // Alterna entre 1 e 0
        $newId = $currentId === 1 ? 0 : 1;
        $newNome = $currentNome === 1 ? 0 : 1;
        $newDescricao = $currentDescricao === 1 ? 0 : 1;
        $newImagem = $currentImagem === 1 ? 0 : 1;
        $newStatus = $currentStatus === 1 ? 0 : 1;
        ?>
        <div class="table">
            <table>
                <th><a href="dados_filme.php?id=<?= $newId ?>">ID</a></th>
                <th><a href="dados_filme.php?nome=<?= $newNome ?>">Nome</a></th>
                <th><a href="dados_filme.php?descricao=<?= $newDescricao ?>">Descrição</a></th>
                <th><a href="dados_filme.php?imagem=<?= $newImagem ?>">URL da imagem</a></th>
                <th>Categoria</th>
                <th><a href="dados_filme.php?status=<?= $newStatus ?>">Status</a></th>
                <th colspan="2">Ações</th>
                <?php
                if ($resultado && $resultado->num_rows > 0) {
                    $resultado = $conn->query($sql);
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <form action="../funcoes/alterar_filme.php" method="post">
                                <input type="hidden" name="idAtual" value="<?= $row['id']; ?>">
                                <td><input type="text" name="nome" value="<?= $row['nome']; ?>"></td>
                                <td><input type="text" name="descricao" value="<?= $row['descricao']; ?>"></td>
                                <td><input type="text" name="imagem" value="<?= $row['imagem']; ?>"></td>
                                <td><a href="cadastro_categoria.php?id=<?= $row['id']; ?>">Escolher</a></td>
                                <td><?php echo $row['status'] ? "Ativo" : "Inativo"; ?></td>
                                <td><button type="submit" value="Alterar" class="btn-input"><i class="bi bi-pencil-square"></i></button></td>
                            </form>
                            <td>
                                <form action="../funcoes/alterar_situacao_filme.php" method="post">
                                    <input type="hidden" name="idAtual" value="<?= $row['id']; ?>">
                                    <input type="hidden" name="statusAtual" value="<?= $row['status']; ?>">
                                    <button type="submit" value="Alterar situação" class="btn-input"><i class="bi bi-trash-fill"></i></button>
                                </form>
                            </td>
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
            window.alert("Usuário inserido com sucesso!");
        <?php
        } else if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 0) {
        ?>
            window.alert("Usuário com falha!")
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
            window.alert("Usuário com falha!")
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
    <script>
        // script.js
        function mostrarCategorias() {
            document.getElementById('categorias-lista').style.display = 'block';
        }

        function selecionarCategoria(categoria) {
            document.getElementById('categorias').value = categoria;
            document.getElementById('categorias-lista').style.display = 'none';
        }
    </script>
</body>

</html>