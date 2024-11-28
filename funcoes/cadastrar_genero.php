<?php
ini_set('display_errors', 1);
include('conexao.php');

    $categoria = $_POST["categoria"];

$sql = ("INSERT INTO `generos` (`categoria`) VALUES (?)");
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $categoria);

if($stmt->execute()){
    header("Location: ../admin/dados_genero.php?sucesso=1");
    die;
} else {
    header("Location: ../admin/dados_genero.php?sucesso=1");
    die;
}

$stmt->close();
$conn->close();

exit();
?>