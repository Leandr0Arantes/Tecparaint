<?php
include('../funcoes/conexao.php');
include('../funcoes/valida.php');
include('../funcoes/validaAdmin.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de Usuário</title>
    <link rel="stylesheet" href="../css/busca.css">
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
                <li><a href="alterar.php" target="_self" rel="next">Alterar</a></li>
                <li><a href="remover.php" target="_self" rel="next">Remover</a></li>
                <li id="atual"><a href="busca.php">Buscar</a></li>
                <li><a class="btn-sair" href="../funcoes/sair.php">Sair</a> </li>
            </ul>
        </div>
    </header>
    <div class="mensagem-erro" id="mensagem-erro">
        <p>Usuário removido com sucesso!</p>
    </div>
    <div class="conteudo">
        <div class="form">
            <form action="" method="post" class="formulario">
                <p>Fazer cadastro</p>
                <div class="form-input" id="inputNome">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                </div>
                <div class="form-input" id="inputCpf">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" placeholder="Digite seu cpf">
                </div>
                <input type="submit" value="Buscar" class="btn">
            </form>
        </div>
        <div class="table">
            <!-- Resultado da busca será mostrado aqui -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = $_POST["nome"];
                $cpf = $_POST["cpf"];
                // Usar prepared statement para evitar injeção de SQL
                $stmt = $conn->prepare("SELECT * FROM usuarios WHERE nome = ? OR cpf = ?");
                $stmt->bind_param("ss", $nome, $cpf);  // "ss" para duas strings

                $stmt->execute();
                $resultado = $stmt->get_result();
                if ($resultado->num_rows > 0) {
                    // Exibe o resultado em uma tabela
                    echo "<table border='1'>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                        </tr>";
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nome"] . "</td>";
                        echo "<td>" . $row["cpf"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>Nenhum usuário encontrado com os dados fornecidos.</p>";
                }
                $stmt->close();
                $conn->close();
            }
            ?>
        </div>
    </div>
</body>

</html>