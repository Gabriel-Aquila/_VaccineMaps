

<?php include "conexao_comentarios.php"; ?>

<?php

//inserção dos comentários no banco de dados
    $nome= $_POST ['nome'];
    $rede_social= $_POST ['rede_social'];
    $comentario= $_POST ['comentario'];
 
    $insert="INSERT comentarios_tb(nome,rede_social, comentario)VALUES('$nome','$rede_social','$comentario')";

    $query= mysqli_query($conexao,$insert);
    header('Location: ../pagcep.php');   
    



?>

