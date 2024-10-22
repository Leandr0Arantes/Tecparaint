<?php
include('../funcoes/conexao.php');
include('../funcoes/valida.php');
include('../funcoes/validaAdmin.php');
?>

<script>
    <?php
    if(isset($_GET["erro"]) and $_GET["erro"] == 1){
    ?>
        const erroDiv = document.querySelector('.erroa');
            erroDiv.style.display = 'block'; // Mostra o elemento

        // Define um timer para esconder o elemento depois de 3 segundos
        setTimeout(() => {
        erroDiv.style.display = 'none'; // Esconde o elemento
        }, 3000); // 3000 milissegundos = 3 segundos
    <?php
    }
    ?>
</script>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover</title>
    <link rel="stylesheet" href="../css/remover.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/table.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                <li><a href="principal.php" target="_self" rel="next">Principal</a></li>
                <li><a href="cadastrar.php" target="_self" rel="next">Cadastrar</a></li>
                <li><a href="alterar.php" target="_self" rel="next">Alterar</a></li>
                <li id="atual"><a href="remover.php" target="_self" rel="next">Remover</a></li>
                <li><a href="busca.php">Buscar</a></li>
                <li><a class="btn-sair" href="../funcoes/sair.php">Sair</a> </li>
            </ul>
        </div>
    </header>
    <div class="erroa" id="erroa">
        <p>Usuário Inserido com sucesso!</p>
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
                        <form action="../funcoes/remover.php" method="post">
                            <td><?= $row['nome']; ?></td>
                            <td><?= $row['cpf']; ?></td>
                            <td><?= $row['administrador']; ?></td>
                            <td><?= $row['senha']; ?></td>
                            <td>
                                <input type="hidden" name="cpfAtual" value="<?= $row['cpf']; ?>">
                                <input type="submit" value="Remover" class="btn-input">
                            </td>
                        </form>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
        </div>
    </div>
</body>

</html>