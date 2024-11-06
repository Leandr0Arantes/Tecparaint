<?php
include('../funcoes/conexao.php');
include('../funcoes/valida.php');
verificarAdmin(true);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/alterar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                <li><a href="principal.php" target="_self" rel="next">Principal</a></li>
                <li><a href="cadastrar.php" target="_self" rel="next">Cadastrar</a></li>
                <li id="atual"><a href="alterar.php" target="_self" rel="next">Alterar</a></li>
                <li><a href="remover.php" target="_self" rel="next">Remover</a></li>
                <li><a href="busca.php">Buscar</a></li>
                <li><a class="btn-sair" href="../funcoes/sair.php">Sair</a> </li>
            </ul>
        </div>
    </header>
    <div class="mensagem-erro" id="mensagem-erro">
        <p>Usuário alterado com sucesso!!</p>
    </div>
    <div class="conteudo">
        <div class="table">
            <table>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Administrador</th>
                    <th>Senha</th>
                    <th>Remover</th>
                <?php
                $sql = "SELECT * FROM usuarios";
                $resultado = $conn->query($sql);
                while ($row = $resultado->fetch_assoc()) {
                ?>
                <tr>
                    <form action="../funcoes/alterar.php" method="post">
                        <input type="hidden" name="cpfAnterior" value="<?= $row['cpf']; ?>">
                        <td><input type="text" name="nome" value="<?= $row['nome']; ?>"></td>
                        <td><input type="text" name="cpf" value="<?= $row['cpf']; ?>"></td>
                        <td><input type="text" name="administrador" value="<?= $row['administrador']; ?>"></td>
                        <td><input type="text" name="senha" value="<?= $row['senha']; ?>"></td>
                        <td><input type="submit" value="Alterar" class="btn-input"></td>
                    </form>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <script>
    <?php
    if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 1) {
    ?>
        window.alert("Usuário alterado com sucesso!");
    <?php
    } else if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 0){
        ?>
        window.alert("Usuário com falha!")
        <?php
    }
    ?>

    <?php
    if(isset($_GET["erronome"]) && $_GET["erronome"] == 1){
    ?>
        window.alert("Nome de usuário deve conter mais de 3 caractéres!");
    <?php
    }
    ?>

    <?php
    if(isset($_GET["errocpf"]) && $_GET["errocpf"] == 1){
    ?>
        window.alert("CPF Inválido!");
    <?php
    }
    ?>

    <?php
    if(isset($_GET["errosenha"]) && $_GET["errosenha"] == 1){
    ?>
        window.alert("A senha deve conter no mínimo 8 caracteres, 1 letra maiúscula, 1 letra minúscula e 1 número");
    <?php
    }
    ?>
    </script>

</body>
</html>