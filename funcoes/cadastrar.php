<?php
include('conexao.php');

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

if($cpf == " " or $nome = " " or $senha = " "){
    header("Location: ../cadastrar.php?erro=1");
    exit();
}

$sql = ("INSERT INTO `usuarios` (`cpf`, `nome`, `senha`) VALUES ('$cpf', '$nome', '$senha')");
$resultado = $conn->query($sql);


header("Location: ../cadastrar.php");
exit();


?>
