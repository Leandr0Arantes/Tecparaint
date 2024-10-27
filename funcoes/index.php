<?php
include("conexao.php");
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

$sql = "select nome, administrador, foto from usuarios where cpf = ? and senha = ?";
$stmt = $conn->prepare($sql);

if($stmt){
    $stmt->bind_param("ss", $cpf, $senha);
    $stmt->execute();
    $stmt->bind_result($nome, $administrador, $foto);
    $stmt->fetch();

    if($nome != ''){
        session_start();
        $_SESSION["cpf"] = $cpf;
        $_SESSION["senha"] = $senha;
        $_SESSION["nome"] = $nome;
        $_SESSION["administrador"] = $administrador;
        $_SESSION["foto"] = $foto;
        if($_SESSION["administrador"] == 1){
            header("Location: ../admin/principal.php");
            die;
        } else{
            header("Location: ../user/principal.php");
            die;
        }
    } else {
        header("Location: ../index.php?erro=1");
        die;
    }
}

?>