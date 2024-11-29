<?php 
include('conexao.php');

$cpfAtual = $_POST["cpfAtual"];
$status = $_POST["statusAtual"];

if($status == 1){
    $sql = ("UPDATE usuarios SET status = 0 WHERE cpf = ?");
} else {
    $sql = ("UPDATE usuarios SET status = 1 WHERE cpf = ?");
}

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $cpfAtual);
if($stmt->execute()){
    header("Location: ../admin/dados_usuario.php?alterar=1");
    die;
} else {
    header("Location: ../admin/dados_usuario.php?alterar=0");
    die;
}

$stmt->close();
$conn->close();

exit();
?>