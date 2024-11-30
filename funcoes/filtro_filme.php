<?php
include('conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = '';
}

if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
} else {
    $nome = '';
}

if (isset($_GET['descricao'])) {
    $descricao = $_GET['descricao'];
} else {
    $descricao = '';
}

if (isset($_GET['imagem'])) {
    $imagem = $_GET['imagem'];
} else {
    $imagem = '';
}

if (isset($_GET['status'])) {
    $status = $_GET['status'];
} else {
    $status = '';
}
if ($id == 1) {
    $sql = "SELECT * FROM filmes ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else if ($id == 0) {
    $sql = "SELECT * FROM filmes ORDER BY id ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else if ($nome == 1) {
        $sql = "SELECT * FROM filmes ORDER BY nome DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($nome == 0) {
        $sql = "SELECT * FROM filmes ORDER BY nome ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
    } else if ($descricao == 1) {
        $sql = "SELECT * FROM filmes ORDER BY descricao DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($descricao == 0) {
        $sql = "SELECT * FROM filmes ORDER BY descricao ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
    } else if ($imagem == 1) {
        $sql = "SELECT * FROM filmes ORDER BY imagem DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($imagem == 0) {
        $sql = "SELECT * FROM filmes ORDER BY imagem ASC";
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
