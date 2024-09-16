<?php
include("./funcoes/valida.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="./css/principal.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <div class="user">
            <i class="bi bi-file-person"></i>
            <p><?php echo "Olá, " . $_SESSION["nome"]; ?></p>
        </div>
        <a href="./funcoes/sair.php">Sair</a>
    </header>
    <div class="main">
        <div class="menu">
            <ul>
                <li><a href="cadastro.php" target="_self" rel="next">Cadastrar</a></li>
                <li><a href="edita.php" target="_self" rel="next">Editar</a></li>
                <li><a href="busca.php">Buscar</a></li>
            </ul>
        </div>
        <div class="conteudo">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod libero nihil, ea nisi nesciunt vitae adipisci corporis sunt optio ipsum, repudiandae dolorem porro accusantium inventore ab quia, minus delectus tempore!
        </div>
    </div>
</body>

</html>