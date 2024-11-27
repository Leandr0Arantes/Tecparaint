<?php 
include('conexao.php');

$idAtual = $_POST["idAtual"];

$sql = ("UPDATE generos SET status = 1 WHERE $idAtual = id");
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $idAtual);

if($stmt->execute()){
    header("Location: ../admin/alterar_usuario.php?removido=1");
    die;
} else {
    header("Location: ../admin/alterar_usuario.php?removido=0");

    die;
}

$stmt->close();
$conn->close();

exit();
?>