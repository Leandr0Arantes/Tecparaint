<?php
include('conexao.php'); // Inclui o arquivo de conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];  // Pega o valor do campo "nome"
    $cpf = $_POST["cpf"];    // Pega o valor do campo "cpf"

    // Usar prepared statement para evitar injeção de SQL
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE nome = ? OR cpf = ?");
    $stmt->bind_param("ss", $nome, $cpf);  // "ss" significa que estamos passando duas strings (nome e cpf)

    $stmt->execute();  // Executa a consulta
    $resultado = $stmt->get_result();  // Pega o resultado da consulta

    if ($resultado->num_rows > 0) {
        // Se encontrou resultados, exibe-os em uma tabela
        echo "<h2>Resultados da Busca:</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                </tr>";
        
        // Itera pelos resultados e exibe cada um na tabela
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["cpf"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum usuário encontrado com os dados fornecidos.";
    }

    $stmt->close();  // Fecha a consulta preparada
    $conn->close();  // Fecha a conexão com o banco de dados
}
?>
