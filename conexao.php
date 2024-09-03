<?php

$servidor = "https://github.com/Leandr0Arantes/banco-teste";
$usuario = "root";
$senha = "";
$dbname = "cadastro_filmes";

$conn = new mysqli($servidor, $usuario, $senha, $dbname);
if($conn->connect_error) {
    die("Falha na conexão".$conn->connect_error);
}

?>