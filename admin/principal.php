<?php
include("../funcoes/valida.php");
include('../funcoes/validaAdmin.php');
include('../funcoes/adicionaFilmes.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="../css/principal.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <div class="user">
            <a href="usuario.php">
            <img src="<?php echo $_SESSION["foto"]; ?>" alt="foto de usuário">
            <p><?php echo "Olá, " . $_SESSION["nome"]; ?></p>
            </a>
        </div>
        <div class="menu">
            <ul>
                <li class="atual"><a href="principal.php" target="_self" rel="next">Principal</a></li>
                <li><a href="cadastrar.php" target="_self" rel="next">Cadastrar</a></li>
                <li><a href="alterar.php" target="_self" rel="next">Alterar</a></li>
                <li><a href="remover.php" target="_self" rel="next">Remover</a></li>
                <li><a href="busca.php">Buscar</a></li>
                <li><a class="btn-sair" href="../funcoes/sair.php">Sair</a>  </li>
            </ul>
        </div>
    </header>
    <div class="conteudo">
        <?php
            $resultado = $conn->query($sql);
            while ($row = $resultado->fetch_assoc()) {
        ?>
        <div class="container-filme">
            <img src="<?= $row['imagem']?>" alt="#">    
            <p class="titulo"><?= $row['nome']?></p>
            <p class="descricao"><?= $row['descricao']?></p>
        </div>
        <?php 
            }
        ?>
    </div>
</body>

</html>