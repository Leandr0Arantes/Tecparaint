<?php
include('./funcoes/conexao.php');
include('./funcoes/valida.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<script>
    <?php
    if (isset($_GET["erro"]) && $_GET["erro"] == 1) {
    ?>
        window.alert("Erro: Dados incorretos ou falha na inserção.");
    <?php
    }
    ?>
</script>
<script>
    <?php
    if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 1) {
    ?>
        window.alert("Usuário inserido com sucesso!");
    <?php
    }
    ?>
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/cadastrar.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <div class="user">
            <i class="bi bi-person-square"></i>
            <p><?php echo "Olá, " . $_SESSION["nome"]; ?></p>
        </div>
        <div class="menu">
            <ul>
                <li class="atual"><a href="principal.php" target="_self" rel="next">Principal</a></li>
                <li><a href="cadastrar.php" target="_self" rel="next">Cadastrar</a></li>
                <li><a href="alterar.php" target="_self" rel="next">Alterar</a></li>
                <li><a href="remover.php" target="_self" rel="next">Remover</a></li>
                <li><a href="busca.php">Buscar</a></li>
                <li><a class="btn-sair" href="./funcoes/sair.php">Sair</a> </li>
            </ul>
        </div>
    </header>
    <div class="conteudo">
        <div class="form">
            <form action="./funcoes/cadastrar.php" method="post" class="formulario">
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

</body>

</html>