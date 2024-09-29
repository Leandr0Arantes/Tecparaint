<?php 
include('conexao.php');

$sql = "SELECT * FROM filmes";
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();

if(isset($row) and $row["nome"] != ''){
    $nome = $row["nome"];
    $descricao = $row["descricao"];
    $imagem = $row["imagem"];
    $id = $row["id"];
    $ano_de_lancamento = $row["ano_de_lancamento"];
}
?>