<?php
    include('./funcoes/conexao.php');
    include('./funcoes/valida.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link rel="stylesheet" href="./css/buscar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <div class="user">
            <i class="bi bi-file-person"></i>
            <p><?php echo "Olá, " . $_SESSION["nome"]; ?></p>
            <a href="principal.php" target="_self" rel="prev">Voltar</a>
        </div>
    </header>


    <form action="./funcoes/buscar.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite um nome">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" placeholder="Digite um cpf">
        <input type="submit" value="Enviar">
    </form>

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

</body>

</html>