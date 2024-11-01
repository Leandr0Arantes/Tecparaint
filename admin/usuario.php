<?php 
include("../funcoes/valida.php");
verificarAdmin(true);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do usuário</title>
    <link rel="stylesheet" href="../css/usuario.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/mensagem-erro.css">
</head>
<body>  
    <header>
        <div class="user">
            <p>Informações do usuário</p>
        </div>
        <div class="menu">
            <ul>
                <li><a class="btn-sair" href="principal.php">Voltar</a></li>
            </ul>
        </div>
    </header>

    <div class="conteudo">
            <div class="container">
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
                <form action="" method="post">
                <p>Informações</p>
                <label for="nome">Nome completo</label>
                <input type="text" name="nome" id="nome">
                <label for="nascimento">Data de nascimento</label>
                <input type="date" name="nascimento" id="nascimento">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                <p>Endereço</p>
                <label for="rua">Rua</label>
                <input type="text" name="rua" id="rua">
                <label for="numero">Número</label>
                <input type="text" name="numero" id="numero">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade">
                <label for="Estado">Estado</label>
                <input type="text" name="estado" id="estado">
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep">
                
                <input type="submit">
                        </form>
            </div>

        
    </div>


</body>
</html>