<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de Usuário</title>
</head>
<body>
    <h2>Buscar Usuário</h2>
    <a href="principal.php">voltar</a>
    <!-- Formulário de pesquisa -->
    <form action="" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf"><br><br>

        <input type="submit" value="Buscar">
    </form>

    <!-- Resultado da busca será mostrado aqui -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include('./funcoes/conexao.php'); // Inclui a conexão com o banco de dados
        include('./funcoes/valida.php');

        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];

        // Usar prepared statement para evitar injeção de SQL
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE nome = ? OR cpf = ?");
        $stmt->bind_param("ss", $nome, $cpf);  // "ss" para duas strings

        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            // Exibe o resultado em uma tabela
            echo "<h2>Resultados da Busca:</h2>";
            echo "<table border='1'>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                    </tr>";

            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["cpf"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Nenhum usuário encontrado com os dados fornecidos.</p>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
