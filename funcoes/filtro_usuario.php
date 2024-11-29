<?php
include('conexao.php');

if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
} else {
    $nome = '';
}

if (isset($_GET['cpf'])) {
    $cpf = $_GET['cpf'];
} else {
    $cpf = '';
}

if (isset($_GET['senha'])) {
    $senha = $_GET['senha'];
} else {
    $senha = '';
}

if (isset($_GET['administrador'])){
    $administrador = $_GET['administrador'];
} else {
    $administrador = '';
}

if (isset($_GET['status'])) {
    $status = $_GET['status'];
} else {
    $status = '';
}
if ($nome == 1) {
    $sql = "SELECT * FROM usuarios ORDER BY nome DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else if ($nome == 0) {
    $sql = "SELECT * FROM usuarios ORDER BY nome ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else if ($cpf == 1) {
        $sql = "SELECT * FROM usuarios ORDER BY cpf DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($cpf == 0) {
        $sql = "SELECT * FROM usuarios ORDER BY cpf ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($senha == 1) {
        $sql = "SELECT * FROM usuarios ORDER BY senha DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($senha == 0) {
        $sql = "SELECT * FROM usuarios ORDER BY senha ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
    } else if ($administrador == 1) {
        $sql = "SELECT * FROM usuarios ORDER BY administrador DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($administrador == 0) {
        $sql = "SELECT * FROM usuarios ORDER BY administrador ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
    } else if ($status == 1) {
        $sql = "SELECT * FROM usuarios ORDER BY status DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($status == 0) {
        $sql = "SELECT * FROM usuarios ORDER BY status ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else {
    $sql = "SELECT * FROM usuarios";
    $resultado = $conn->query($sql);
}
