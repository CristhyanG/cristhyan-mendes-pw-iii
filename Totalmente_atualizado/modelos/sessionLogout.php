<?php 

session_start();

if((isset($_SESSION["acesso"])==true)){
    $_SESSION["acesso"]==false;
    unset($_SESSION["acesso"]);
    session_destroy();
    header("location:../index.php");
}

?>