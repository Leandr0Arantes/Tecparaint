<?php
ini_set('display_errors', 1);
include('conexao.php');
include('validacoes.php');

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];


if(!validarNome($nome)){
    header("Location: ../admin/cadastrar.php?erronome=1");
    die;
}

if(!validarCPF($cpf)){
    header("Location: ../admin/cadastrar.php?errocpf=1");
    die;
}

if(!validarSenha($senha)){
    header("Location: ../admin/cadastrar.php?errosenha=1");
    die;
}


$sql = ("INSERT INTO `usuarios` (`cpf`, `nome`, `senha`) VALUES (?, ?, ?)");
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $cpf, $nome, $senha);

if($stmt->execute()){
    header("Location: ../admin/cadastrar_usuario.php?sucesso=1");
    die;
} else {
    header("Location: ../admin/cadastrar_usuario.php?sucesso=0");

    die;
}

$stmt->close();
$conn->close();

exit();
?>
