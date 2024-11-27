<?php
include("../funcoes/valida.php");
include('../funcoes/adicionaFilmes.php');
verificarAdmin(true);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="../css/principal.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/mensagem-erro.css">
    <link rel="stylesheet" href="../css/categorias.css">
</head>

<body>
    <?php include("../includes/header.php")?>

    <div class="categorias">
        <div class="categorias-links">
        <p>Categorias</p>  
            <ul>
                <li><a href="principal.php">Todos os filmes</a></li>
                <li><a href="principal.php?categoria=acao">Ação</a></li>
                <li><a href="principal.php?categoria=aventura">Aventura</a></li>
                <li><a href="principal.php?categoria=comedia">Comédia</a></li>
                <li><a href="principal.php?categoria=drama">Drama</a></li>
                <li><a href="principal.php?categoria=ficcao">Ficção científica</a></li>
                <li><a href="principal.php?categoria=terror">Terror</a></li>
                <li><a href="principal.php?categoria=romance">Romance</a></li>
                <li><a href="principal.php?categoria=animacao">Animação</a></li>
                <li><a href="principal.php?categoria=biografia">Biografia</a></li>
                <li><a href="principal.php?categoria=documentario">Documentario</a></li>
                <li><a href="principal.php?categoria=thriller">Thriller</a></li>
            </ul>
        </div>
    </div>
    <div class="conteudo">
        <?php
        if($resultado && $resultado->num_rows > 0){
            while ($row = $resultado->fetch_assoc()) {
        ?>
        <a href="filmes.php">
        <div class="container-filme" style="background: url(<?= $row['imagem']?>); background-size: cover;">
            <div class="container-informacoes">
            <p class="titulo"><?= $row['nome']?></p>
            <p class="descricao"><?= $row['descricao']?></p>
            </div>

        </div>
        </a>
        <?php 
            }
        } else {
            echo "<p>Nenhum filme encontrado para essa categoria.</p>";
        }
        ?>
    </div>
</body>

</html>