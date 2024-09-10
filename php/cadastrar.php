<?php
include('conexao.php');

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    $sql = ("INSERT INTO `usuarios` (`cpf`, `nome`, `senha`) VALUES ('$cpf', '$nome', '$senha')");
    $resultado = $conn->query($sql);
    header("Location: cadastro.php");
?>