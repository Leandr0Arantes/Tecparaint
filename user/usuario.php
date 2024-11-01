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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/header.css">
</head>
<body>  
<header>
        <div class="user">
            <p>Informações do usuário</p>
        </div>
        </div>
        <div class="menu">
            <ul>
                <li><a class="btn-sair" href="principal.php">Voltar</a></li>
            </ul>
        </div>
    </header>

    <img src="<?php echo $_SESSION["foto"]; ?>


</body>
</html>