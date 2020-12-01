<?php
 //conexão com o banco de dados 
define('HOST', '127.0.0.1');
define('usuario', 'root');
define('SENHA', '');
define('DB', 'login');

$conexao = mysqli_connect(HOST,usuario,SENHA,DB) or die ("Nâo foi possivel conectar ao banco de dados, verifique sua conexão ou tente mais tarde.");

?>