<?php
ini_set('display_errors', 1);
include('conexao.php');
include('validacoes.php');

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];
$administrador = $_POST["administrador"];
$cpfAnterior = $_POST["cpfAnterior"];

if(!validarNome($nome)){
    header("Location: ../admin/dados_usuario.php?erronome=1");
    die;
}

if(!validarCPF($cpf)){
    header("Location: ../admin/dados_usuario.php?errocpf=1");
    die;
}

if(!validarSenha($senha)){
    header("Location: ../admin/dados_usuario.php?errosenha=1");
    die;
}

$sql = ("UPDATE `usuarios` SET cpf = ?, nome = ?, senha = ?, administrador = '$administrador' WHERE cpf = '$cpfAnterior'");
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $cpf, $nome, $senha);

if($stmt->execute()){
    header("Location: ../admin/dados_usuario.php?alterado=1");
    die;
} else {
    header("Location: ../admin/dados_usuario.php?alterado=0");

    die;
}

$stmt->close();
$conn->close();

exit();
?>
