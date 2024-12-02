<?php
include("../funcoes/valida.php");
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
</head>

<body>
    <?php include("../includes/header.php") ?>
    <?php include("../includes/categorias.php") ?>
    <?php include('../funcoes/adicionaFilmes.php'); ?>
    <div class="conteudo">
        <?php
        if ($resultado && $resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
        ?>
                <a href="filmes.php">
                    <div class="container-filme" style="background: url(<?= $row['imagem'] ?>); background-size: cover;">
                        <div class="container-informacoes">
                            <p class="titulo"><?= $row['nome'] ?></p>
                            <p class="descricao"><?= $row['descricao'] ?></p>
                            <?php
                            $id_genero = $row['genero_id'];
                            $sql_genero = "SELECT categoria FROM generos WHERE id = ?";
                            $stmt = $conn->prepare($sql_genero);
                            $stmt->bind_param("s", $id_genero);
                            $stmt->execute();
                            $stmt->bind_result($genero);
                            $stmt->fetch();
                            $stmt->close();
                            ?>
                            <p><?php echo $genero ?></p>
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