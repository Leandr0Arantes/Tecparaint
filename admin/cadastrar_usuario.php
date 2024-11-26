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
    <link rel="stylesheet" href="../css/cadastrar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/mensagem-erro.css">
</head>

<body>
        <?php include("../includes/header.php")?>
        <div class="conteudo">
        <div class="table">
            <table>
                <th>Nome</th>
                <th>CPF</th>
                <th>Senha</th>
                <?php
                $sql = "SELECT * FROM usuarios";
                $resultado = $conn->query($sql);
                while ($row = $resultado->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?= $row['nome']; ?></td>
                        <td><?= $row['cpf']; ?></td>
                        <td><?= $row['senha']; ?></td>
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
        window.alert("Usuário inserido com sucesso!");
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

<script src="../funcoes/validacoes.js"></script>
</body>

</html>