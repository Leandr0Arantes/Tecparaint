<?php
include('../funcoes/conexao.php'); // Inclui a conexão com o banco de dados
include('../funcoes/valida.php');
include('../funcoes/validaAdmin.php');
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
</head>

<body>
    <header>
        <div class="user">
            <i class="bi bi-person-square"></i>
            <p><?php echo "Olá, " . $_SESSION["nome"]; ?></p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="principal.php" target="_self" rel="next">Principal</a></li>
                <li><a href="cadastrar.php" target="_self" rel="next">Cadastrar</a></li>
                <li><a href="alterar.php" target="_self" rel="next">Alterar</a></li>
                <li><a href="remover.php" target="_self" rel="next">Remover</a></li>
                <li><a href="busca.php">Buscar</a></li>
                <li><a class="btn-sair" href="../funcoes/sair.php">Sair</a> </li>
            </ul>
        </div>
    </header>
    <div class="conteudo">
        <div class="table">
            <table>
                <th>ID</th>
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
                        <td><?= $row['id']?></td>
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

    <script defer>
<?php
if(isset($_GET["erro"]) and $_GET["erro"] == 1){
    ?>
        window.alert("Usuário alterado com sucesso!");
    <?php
}
?>
</script>

</body>



</html>