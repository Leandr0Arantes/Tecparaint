<?php 
include('conexao.php');

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];
$cpfAnterior = $_POST["cpfAnterior"];

$sql = ("UPDATE `usuarios` SET cpf = '$cpf' , senha = '$senha', nome = '$nome' WHERE cpf = '$cpfAnterior'");

if(!$resultado = $conn->query($sql)){
    header("Location: ../cadastro.php?erro=1");
    die("erro");
}
?>