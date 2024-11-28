<?php
ini_set('display_errors', 1);
include('conexao.php');
include('validacoes.php');

$categoria = $_POST["categoria"];
$categoriaAtual = $_POST["categoriaAtual"];

$sql = ("UPDATE `generos` SET categoria = ? WHERE categoria = '$categoriaAtual'");
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $categoria);
if ($stmt->execute()) {
    header("Location: ../admin/dados_genero.php?alterado=1");
    die;
} else {
    header("Location: ../admin/dados_gereno.php?alterado=0");   
    die;
}

$stmt->close();
$conn->close();

exit();
