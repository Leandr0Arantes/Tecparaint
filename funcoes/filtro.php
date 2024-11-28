<?php
include('conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = '';
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

if (isset($_GET['nome'])) {
    $status = $_GET['nome'];
} else {
    $status = '';
}

if ($id == 1) {
    $sql = "SELECT * FROM generos ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else if ($id == 0) {
    $sql = "SELECT * FROM generos ORDER BY id ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else if ($categoria == 1) {
        $sql = "SELECT * FROM generos ORDER BY categoria DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($categoria == 0) {
        $sql = "SELECT * FROM generos ORDER BY categoria ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($status == 1) {
        $sql = "SELECT * FROM generos ORDER BY status DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($status == 0) {
        $sql = "SELECT * FROM generos ORDER BY status ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($nome == 1) {
        $sql = "SELECT * FROM usuarios ORDER BY nome DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else if ($nome == 0) {
        $sql = "SELECT * FROM usuarios ORDER BY nome ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
} else {
    $sql = "SELECT * FROM generos";
    $resultado = $conn->query($sql);
}
