<?php
    session_start();
    if(!isset($_SESSION['id_users']))
    {
        header("location: index.php");
        exit;
    }
?>


Seja Bem Vindo

<a href="sair.php">Sair</a>