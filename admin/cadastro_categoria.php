<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolher categoria</title>
    <link rel="stylesheet" href="../css/indexCriaConta.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/escolher_categoria.css">
</head>

<body>
    <div class="form">
        <form method="post" action="../funcoes/cadastrar_categoria.php" class="formulario">
            <p>Cadastrar novo gênero</p>
            <div class="form-input">
                <label for="categoria">Nome</label>
                <input type="text" name="categoria" id="categoria" required placeholder="Digite o nome do gênero">
            </div>
            <label>Escolha uma categoria</label>
            <input type="text" id="categorias" name="categorias" readonly onclick="mostrarCategorias()" placeholder="Clique para escolher uma categoria">
            <div id="categorias-lista" class="categorias-lista">
                <ul>
                    <li><a href="#" onclick="selecionarCategoria('Categoria')">Categoria 1</a></li>
                </ul>
                <?php
                $sql = "SELECT categoria FROM generos WHERE status = 1";
                $resultado = $conn->query($sql);
                while ($row = $resultado->fetch_assoc()) {
                ?>
                    <div class="item">
                        <a href="filmes.php?id=<?= $row['id']; ?>"><?= $row['categoria']; ?></a>
                    </div>
                <?php
                }
                ?>
            </div>

            <input type="submit" value="Incluir" class="btn">
            <div class="extra-options">
                <a href="dados_genero.php">Voltar</a>
            </div>
        </form>
    </div>


    <script>
        // script.js
        function mostrarCategorias() {
            document.getElementById('categorias-lista').style.display = 'block';
        }

        function selecionarCategoria(categoria) {
            document.getElementById('categorias').value = categoria;
            document.getElementById('categorias-lista').style.display = 'none';
        }
    </script>
</body>

</html>