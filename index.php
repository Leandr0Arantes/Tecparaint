<html>
<title>Aula PHP</title>

<head>
    <script>
        function valida() {
            nome = document.getElementById("nome").value;
            if (nome == "") {
                alert("Digite um nome");
                document.getElementById("nome").focus();
                return false;
            }
            return true;
        }
    </script>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <form method="post" action="login.php" onSubmit="return valida();" class="formulario">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf">
            <label for="senha">Senha: </label>
            <input type="text" name="senha" id="senha">
            <input type="submit" value="Login">
    </form>
</body>

</html>