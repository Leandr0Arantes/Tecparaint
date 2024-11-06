<?php 
include('conexao.php');

$cpf = $_POST["cpfAtual"];
echo $cpf;

$sql = ("DELETE FROM `usuarios` WHERE cpf=?");
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $cpf);

if($stmt->execute()){
    header("Location: ../admin/alterar.php?sucesso=1");
    die;
} else {
    header("Location: ../admin/alterar.php?sucesso=0");

    die;
}

$stmt->close();
$conn->close();

exit();
?>