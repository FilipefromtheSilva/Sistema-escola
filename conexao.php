<?php
//DECLARAÇÃO DE VARIAEIS
$servename = "localhost";
$username = "root";
$pasword = "";
$dbname = "escola";

//CRIANDO A CONEXÃO COM O BANCO DE DADOS
$conexao = new mysqli ($servename, $username, $pasword, $dbname);
 if($conexao -> connect_error){
                              die("Falha na Conexão com o BD: ". $conexao ->connect_error);
                             }

?>