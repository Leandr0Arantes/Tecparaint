<?php 
include('conexao.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
} else {
    $id = '';
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
}else if ($id) {
    $sql = "SELECT * FROM filmes WHERE genero_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
} else {
    $sql = "SELECT * FROM filmes WHERE status = 1";
    $resultado = $conn->query($sql);
}
?>