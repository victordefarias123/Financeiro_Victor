<?php
    $conexao_servidor = "localhost";
    $conexao_usuario = "root";
    $conexao_senha = "";
    $conexao_dbname = "financeiro";

    //Criar a conexao
    $conexao = mysqli_connect($conexao_servidor, $conexao_usuario, $conexao_senha, $conexao_dbname);
    
    if(!$conexao){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        mysqli_set_charset($conexao, 'utf8');
    }      

?>