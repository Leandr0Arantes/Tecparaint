<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/header.css">
</head>
<body>
    <header>
        <p>Cadastrar usuário</p>
        <button><a href="principal.php" target="_self" rel="prev">Voltar</a></button>
    </header>
    <?php
        include('./funcoes/conexao.php');
        include('./funcoes/valida.php');
    ?>
    <form action="./funcoes/cadastrar.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Salvar">
    </form>
    <table>
        <th>CPF</th>
        <th>Nome</th>
        <th>Senha</th>
        <?php
        $sql = "select * from usuarios";
        $resultado = $conn->query($sql);
        while($row = $resultado->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>: " . $row["cpf"] . "</td>";
            echo "<td>" . $row["senha"] . "</td>";
            echo "</tr>";
        } 
        ?>
    </table>
</body>
</html>