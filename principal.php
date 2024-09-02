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
</head>
<body>
    <div class="div_header">
        <P>Olá</P><?phpecho "Ola ".$_SESSION["nome"];?>
        <button><a href="index.php">Sair</a></button>
    </div>
    <div class="menu">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex perspiciatis sapiente non, laborum assumenda doloremque ratione officiis cupiditate, perferendis iusto eligendi id veniam, animi aliquid voluptate voluptatem amet veritatis labore!</div>
    <div class="conteudo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod libero nihil, ea nisi nesciunt vitae adipisci corporis sunt optio ipsum, repudiandae dolorem porro accusantium inventore ab quia, minus delectus tempore!</div>
</body>
</html>