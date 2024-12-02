<?php
ini_set('display_errors', 1);
include('conexao.php');

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$imagem = $_POST["imagem"];
$categoria = $_POST["categoria"];

$sql = ("INSERT INTO `filmes` (`nome`, `descricao`, `imagem`, `genero_id`) VALUES (?, ?, ?, ?)");
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $nome, $descricao, $imagem, $categoria); 

if($stmt->execute()){
    header("Location: ../admin/dados_filme.php?sucesso=1");
    die;
} else {
    header("Location: ../admin/dados_filme.php?sucesso=1");
    die;
}

$stmt->close();
$conn->close();

exit();
?>