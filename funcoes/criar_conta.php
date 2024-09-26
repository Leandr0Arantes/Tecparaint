<?php
include('conexao.php');

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    $sql = ("INSERT INTO `usuarios` (`cpf`, `nome`, `senha`) VALUES ('$cpf', '$nome', '$senha')");
    $resultado = $conn->query($sql);
    
    if ($resultado) {
        // Exibe um alert e redireciona para a página 'cria_conta.php' usando JavaScript
        echo "<script>
            alert('Usuário cadastrado com sucesso!');
            window.location.href = '../index.php';
        </script>";
    } else {
        // Se houve erro na inserção, mostra um alerta de erro e redireciona para a página de cadastro
        echo "<script>
            alert('Erro ao cadastrar o usuário. Tente novamente.');
            window.location.href = '../index.php';
        </script>";
    }
    
    $conn->close();  // Fecha a conexão com o banco de dados
?>