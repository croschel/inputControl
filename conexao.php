<?php

$hostname = "localhost";
$user = "root";
$password = "123456";
$database = "cadastro";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if($conexao){
    print "Falha na conexão com o Banco de Dados";
}


?>