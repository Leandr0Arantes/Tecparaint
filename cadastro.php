<?php
include('./funcoes/conexao.php');
include('./funcoes/valida.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <div class="user">
            <i class="bi bi-file-person"></i>
            <p><?php echo "Olá, " . $_SESSION["nome"]; ?></p>
        </div>
        <a href="principal.php">Voltar</a>
    </header>
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
            $sql = "select * from usuarios";
            $resultado = $conn->query($sql);
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>: " . $row["cpf"] . "</td>";
                echo "<td>" . $row["senha"] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

</body>

</html>