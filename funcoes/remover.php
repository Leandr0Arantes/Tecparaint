<?php 
include('conexao.php');

$cpf = $_POST["cpfAtual"];
echo $cpf;

$sql = ("DELETE FROM `usuarios` WHERE cpf='$cpf'");

if (!$resultado = $conn->query($sql)) {
    die("erro");
}

header("Location: ../remover.php");

?>