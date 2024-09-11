<?php
include('conexao.php');

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];

    $sql = "select nome from usuarios where nome = '$nome'";
    $resultado = $conn->query($sql);
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>: " . $row["cpf"] . "</td>";
        echo "<td>" . $row["senha"] . "</td>";
        echo "</tr>";
    }

    header("location : ../busca.php")
?>