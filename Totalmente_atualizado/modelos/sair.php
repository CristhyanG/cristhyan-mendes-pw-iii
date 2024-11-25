<?php 
    //variavel para sair e retornar a pagina de login do sistema
    session_start();
    unset($_SESSION['email']); 
    unset($_SESSION['senha']);
    header("Location: login.php");
?>