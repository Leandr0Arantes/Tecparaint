<?php
include("../funcoes/conexao.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/categorias.css">
</head>
<div class="categorias">
<p>Categorias</p>
    <div class="categorias-itens">
        <div class="item">
            <a href="filmes.php">Todos os filmes</a>
        </div>
        <?php
        $sql = "SELECT id, categoria FROM generos WHERE status = 1";
        $resultado = $conn->query($sql);
        while ($row = $resultado->fetch_assoc()) {
        ?>
            <div class="item">
                <a href="filmes.php?id=<?= $row['id']; ?>"><?= $row['categoria']; ?></a>
            </div>
        <?php
        }
        ?>
    </div>
</div>