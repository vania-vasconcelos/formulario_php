<?php

$hostname = "localhost";
$bancodedados = "form";
$usuario = "root";
$senha = "";
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if($mysqli -> connect_errno){

    echo "falha ao conectar: (".$mysqly -> connect_errno .") ".$mysqli -> connect_error;
} else{
      echo   "Mensagem foi enviada com sucesso!";
    } 

?>