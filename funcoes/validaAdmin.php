<?php
session_start();

if (!isset($_SESSION['administrador']) and $_SESSION['administrador'] == false) {
    session_destroy();
    header("Location: ../index.php");
}
?>