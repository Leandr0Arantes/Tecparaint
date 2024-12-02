<?php
ini_set('display_errors', 1);
include('conexao.php');
include('validacoes.php');

$id = $_POST["id"];
$idAtual = $_POST["idAtual"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$imagem = $_POST["imagem"];
$categoria = $_POST["categoria"];

$sql = ("UPDATE `filmes` SET nome = ?, descricao = ?, imagem = ?, genero_id = ? WHERE id = '$idAtual'");
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $nome, $descricao, $imagem, $categoria);

if($stmt->execute()){
    header("Location: ../admin/dados_filme.php?alterado=1");
    die;
} else {
    header("Location: ../admin/dados_filme.php?alterado=0");

    die;
}

$stmt->close();
$conn->close();

exit();
?>

