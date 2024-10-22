<?php 
include("../funcoes/valida.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do usuário</title>
    <link rel="stylesheet" href="../css/usuario.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/mensagem-erro.css">
</head>
<body>  
    <header>
    <div class="user">
            <a href="usuario.php">
            <?php
            if(!isset($_SESSION["foto"])){
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
        <div class="menu">
            <ul>
                <li><a class="btn-sair" href="principal.php">Voltar</a></li>
            </ul>
        </div>
    </header>
    <div class="mensagem-erro" id="mensagem-erro">
        <p>Usuário removido com sucesso!</p>
    </div>
    <div class="conteudo">
        <div class="container">
            <img src="<?php echo $_SESSION["foto"]; ?>" alt="foto de usuário">
            <p><?php echo "Olá, " . $_SESSION["nome"]; ?></p>
        </div>
    </div>


</body>
</html>