<?php
session_start();
ob_start();
include("conexao.php");
//cadastro do posto no banco de dados via php

$nome= mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario= mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha= mysqli_real_escape_string($conexao,trim(md5($_POST['senha']))); 
$_SESSION['nome']= $nome;

$sql = "select count(*) as total from usuario where usuario='$usuario'" ; 
$result = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] ==1){
    $_SESSION['usuario_existe']= true;
    header('Location:../index.php');
    exit;
}

$sql= "insert into usuario(nome,usuario,senha,data_cadastro) values ('$nome','$usuario','$senha',NOW())";

if($conexao -> query($sql)=== TRUE){
$_SESSION['status_cadastro'] = true;

$conexao->close();
header('Location: ../index.php');
exit;



}


?>