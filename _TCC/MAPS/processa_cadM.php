<!-- Processa o cadastro, insere os dados por meio do método POST-->

<?php
session_start();
ob_start();
include_once("conexao_postos.php");

//Receber os dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Salvar os dados no bd
$result_markers = "INSERT INTO markers(name, address, lat, lng, type) 
				VALUES 
				('".$dados['name']."', '".$dados['address']."', '".$dados['lat']."', '".$dados['lng']."', '".$dados['type']."')";

$resultado_markers = mysqli_query($conexao, $result_markers);
if(mysqli_insert_id($conexao)){
	$_SESSION['msg'] = "<span style='color: green';>Endereço cadastrado com sucesso!</span>";
	header("Location: cadastrar_maps.php");
}else{
	$_SESSION['msg'] = "<span style='color: red';>Erro: Endereço não foi cadastrado com sucesso!</span>";
	header("Location: cadastrar_maps.php");	
}