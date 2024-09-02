<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <header>
        <i class="bi bi-file-person"></i>
        <p><?php echo "Ola ".$_SESSION["nome"];?></p>
        <button><a href="index.php">Sair</a></button>
    </header>
    <div class="menu">
        <ul>
            <li>item 1</li>
            <li>item 2</li>
            <li>item 3</li>
        </ul>
    </div>
    <div class="conteudo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod libero nihil, ea nisi nesciunt vitae adipisci corporis sunt optio ipsum, repudiandae dolorem porro accusantium inventore ab quia, minus delectus tempore!</div>
</body>
</html>