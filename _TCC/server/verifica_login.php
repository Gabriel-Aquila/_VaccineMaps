<?php
session_start();

// autenticação de login
if(!$_SESSION['usuario']){
    header('Location: index.php');
    exit();
}



?>