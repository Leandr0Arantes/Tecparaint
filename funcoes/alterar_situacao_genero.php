<?php 
include('conexao.php');

$idAtual = $_POST["idAtual"];
$status = $_POST["statusAtual"];

if($status == 1){
    $sql = ("UPDATE generos SET status = 0 WHERE id = ?");
} else {
    $sql = ("UPDATE generos SET status = 1 WHERE id = ?");
}

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idAtual);
if($stmt->execute()){
    header("Location: ../admin/dados_genero.php?alterar=1");
    die;
} else {
    header("Location: ../admin/dados_genero.php?alterar=0");
    die;
}

$stmt->close();
$conn->close();

exit();
?>