<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('conexao.php');

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

$sql = ("INSERT INTO `usuarios` (`cpf`, `nome`, `senha`) VALUES ('$cpf', '$nome', '$senha')");
$stmt = $conn->prepare($sql);

if($stmt->execute()){
    header("Location: ../admin/cadastrar.php?sucesso=1");
} else {
    header("Location: ../admin/cadastrar.php?sucesso=0");
}

$stmt->close();
$conn->close();

exit();
?>
