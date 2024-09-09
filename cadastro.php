<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <header>
        <p>Cadastrar usuário</p>
        <button><a href="principal.php" target="_self" rel="prev">Voltar</a></button>
    </header>
    <?php
        include('conexao.php');
        include('valida.php')
    ?>
    <form action="cadastrar.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Salvar">
    </form>
    <?php
        $sql = "select * from usuarios";
        $resultado = $conn->query($sql);
        while($row = $resultado->fetch_assoc()){
            echo "Nome: " . $_SESSION["nome"];
            echo "CPF: " . $_SESSION["cpf"];
            echo "Senha:" . $_SESSION["senha"];
        }
    ?>
    
</body>
</html>