<?php
include("conexao.php");
include("validacoes.php");
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

if(!validarCPF($cpf)){
    header("Location: ../index.php?errocpf=1");
    die;
}

if(!validarSenha($senha)){
    header("Location: ../index.php?errosenha=1");
    die;
}

$sql = "select nome, administrador, foto from usuarios where cpf = ? and senha = ? and status = 1";
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
            header("Location: ../admin/filmes.php");
            die;
        } else{
            header("Location: ../user/filmes.php");
            die;
        }
    } else {
        header("Location: ../index.php?erro=1");
        die;
    }
}

?>