<?php
include("../funcoes/valida.php");
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
            <i class="bi bi-person-square"></i>
            <p><?php echo "Olá, " . $_SESSION["nome"] . $_SESSION["admin"]; ?></p>
        </div>
        <div class="menu">
            <ul>
                <li class="atual"><a href="principal.php" target="_self" rel="next">Principal</a></li>
                <li><a class="btn-sair" href="../funcoes/sair.php">Sair</a>  </li>
            </ul>
        </div>
    </header>
    <div class="main">
        <div class="conteudo">
            <h1>Usuário padrão</h1>
        </div>
    </div>
</body>

</html>