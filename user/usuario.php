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
                <li><a class="btn-sair" href="principal.php">Voltar</a></li>
            </ul>
        </div>
    </header>


</body>
</html>