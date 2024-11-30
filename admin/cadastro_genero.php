<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar gênero</title>
    <link rel="stylesheet" href="../css/indexCriaConta.css">
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <div class="form">
        <form method="post" action="../funcoes/cadastrar_genero.php" class="formulario">
            <p>Cadastrar novo gênero</p>
            <div class="form-input">
                <label for="categoria">Nome</label>
                <input type="text" name="categoria" id="categoria" required placeholder="Digite o nome do gênero">
            </div>
            <input type="submit" value="Incluir" class="btn">
            <div class="extra-options">
                <a href="dados_genero.php">Voltar</a>
            </div>
        </form>
    </div>
</body>

</html>