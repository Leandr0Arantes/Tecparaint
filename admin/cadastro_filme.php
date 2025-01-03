<?php
include("../funcoes/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar filme</title>
    <link rel="stylesheet" href="../css/indexCriaConta.css">
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <div class="form">
        <form method="post" action="../funcoes/cadastrar_filme.php" class="formulario">
            <p>Cadastrar novo filme</p>
            <div class="form-input">
                <label for="nome">Nome do filme</label>
                <input type="text" name="nome" id="nome" required placeholder="Digite o nome do filme">
            </div>
            <div class="form-input">
                <label for="descricao">Descrição do filme</label>
                <input type="text" name="descricao" id="descricao" required placeholder="Digite a descrição do filme">
            </div>
            <div class="form-input">
                <label for="imagem">URL do banner do filme</label>
                <input type="text" name="imagem" id="imagem" required placeholder="Digite a URL do banner do filme">
            </div>
            <div class="form-input">
                <label for="categoria">Escolha uma categoria</label>
                <select name="categoria" id="categoria">
                    <?php
                    $sql = "SELECT id,categoria FROM generos WHERE status = 1";
                    $resultado = $conn->query($sql);
                    while ($row = $resultado->fetch_assoc()) {
                    ?>
                        <option value="<?= $row["id"] ?>"><?= $row["categoria"] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <input type="submit" value="Incluir" class="btn">
            <div class="extra-options">
                <a href="../admin/dados_filme.php">Voltar</a>
            </div>
        </form>
    </div>
</body>

</html>