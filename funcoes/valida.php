<?php
session_start();

if (!isset($_SESSION['nome']) and $_SESSION['nome'] == '') {
    session_destroy();
    header("Location: ../index.php");
}
?>
