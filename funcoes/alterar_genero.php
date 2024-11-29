<?php
ini_set('display_errors', 1);
include('conexao.php');
include('validacoes.php');

$categoria = $_POST["categoria"];
$categoriaAtual = $_POST["categoriaAtual"];

$sql = "UPDATE `generos` SET categoria = ? WHERE categoria = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $categoria, $categoriaAtual);

if ($stmt->execute()) {
    header("Location: ../admin/dados_genero.php?alterado=1");
    exit(); // Redirecionamento bem-sucedido
} else {
    header("Location: ../admin/dados_genero.php?alterado=0");
    exit(); // Redirecionamento em caso de erro
}

$stmt->close();
$conn->close();
exit();

