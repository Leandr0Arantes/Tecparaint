<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <div class="user">
            <a href="usuario.php">
                <?php
                if (!isset($_SESSION["foto"])) {
                ?>

                    <i class="bi bi-person-circle"></i>
                <?php
                } else {
                ?>
                    <img src="<?php echo $_SESSION["foto"]; ?>" alt="foto de usuário">
                <?php
                }
                ?>
                <p><?php echo "Olá, " . $_SESSION["nome"]; ?></p>
            </a>
        </div>

        <?php
        if ($_SESSION["administrador"] == 1) {
        ?>
            <nav class="menu">
                <ul>
                    <li><a href="filmes.php">Filmes</a></li>
                    <li class="submenu-parent">
                        <a href="#">Cadastro</a>
                        <ul class="submenu">
                            <li><a href="dados_usuario.php">Usuários</a></li>
                            <li><a href="dados_filme.php">Filmes</a></li>
                            <li><a href="dados_genero.php">Gêneros</a></li>
                        </ul>
                    </li>
                    <li><a class="btn-sair" href="../funcoes/sair.php">Sair</a></li>
                </ul>
            </nav>
        <?php
        } else {
        ?>
            <nav class="menu">
                <ul>
                    <li><a href="filmes.php">Filmes</a></li>
                    <li class="submenu-parent">
                        <a href="#">Alterar</a>
                        <ul class="submenu">
                            <li><a href="alterar_usuario.php">Usuários</a></li>
                        </ul>
                    </li>
                    <li><a class="btn-sair" href="../funcoes/sair.php">Sair</a></li>
                </ul>
            </nav>
        <?php
        }
        ?>

    </header>
</body>

</html>