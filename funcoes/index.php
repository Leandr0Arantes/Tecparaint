<?php
include("conexao.php");
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

$sql = "select * from usuarios where cpf = '$cpf' and senha = '$senha'";
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();

if(isset($row) && $row["nome"] != '') {
    session_start();
    $_SESSION["cpf"] = $cpf;
    $_SESSION["senha"] = $senha;
    $_SESSION["nome"] = $row["nome"];
    $_SESSION["administrador"] = $row["administrador"];
    $_SESSION["foto"] = $row["foto"];

    if($_SESSION["administrador"] == 1){
        header("Location: ../admin/principal.php");
    } else{
        header("Location: ../user/principal.php");
    }
}else{
    header("Location: ../index.php?erro=1");
    exit();
}
?>