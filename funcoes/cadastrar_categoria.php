<?php
ini_set('display_errors', 1);
include('conexao.php');

$categoria = $_POST["categoria"];

$sql = ("INSERT INTO `filmes` (`nome`, `descricao`, `imagem`) VALUES (?, ?, ?)");
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nome, $descricao, $imagem);

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