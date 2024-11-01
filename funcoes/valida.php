<?php
session_start();

if (!isset($_SESSION['nome']) and $_SESSION['nome'] == '') {
    session_destroy();
    header("Location: ../index.php");
}

function verificarAdmin($tipo){
    if($_SESSION["administrador"] != true){
        header("Location: ../user/principal.php"); 
    }
}

?>
