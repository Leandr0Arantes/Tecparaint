<?php 
include('conexao.php');

if(isset($_GET['categoria'])){
    $categoria = $_GET['categoria'];
} else {
    $categoria = '';
}

if(isset($_GET['pesquisar'])){
    $pesquisar = $_GET['pesquisar'];
} else {
    $pesquisar = '';
}
if($pesquisar){
    $sql = "SELECT * FROM filmes WHERE nome LIKE ?";
    $stmt = $conn->prepare($sql);
    $pesquisar = "%". $pesquisar . "%";
    $stmt->bind_param('s', $pesquisar);
    $stmt->execute();
    $resultado = $stmt->get_result();
}else if ($categoria) {
    $sql = "SELECT * FROM filmes WHERE categoria = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $categoria);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else {
    $sql = "SELECT * FROM filmes";
    $resultado = $conn->query($sql);
}
?>