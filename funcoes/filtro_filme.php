<?php
include('conexao.php');

if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
} else {
    $nome = '';
}

if (isset($_GET['categoria'])) {
    $categoria = $_GET['categoria'];
} else {
    $categoria = '';
}

if (isset($_GET['status'])) {
    $status = $_GET['status'];
} else {
    $status = '';
}
if ($nome == 1) {
    $sql = "SELECT * FROM filmes ORDER BY nome DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else if ($nome == 0) {
    $sql = "SELECT * FROM filmes ORDER BY nome ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else if ($categoria == 1) {
        $sql = "SELECT * FROM filmes ORDER BY categoria DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($categoria == 0) {
        $sql = "SELECT * FROM filmes ORDER BY categoria ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($status == 1) {
        $sql = "SELECT * FROM filmes ORDER BY status DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($status == 0) {
        $sql = "SELECT * FROM filmes ORDER BY status ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else {
    $sql = "SELECT * FROM filmes";
    $resultado = $conn->query($sql);
}
