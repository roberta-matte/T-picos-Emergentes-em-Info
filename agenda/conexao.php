<?php

$servidor = "localhost";
$user = "root";
$senha = "";
$banco = "agenda";
$conexao = mysqli_connect($servidor,$user,$senha,$banco);

if(!$conexao){
    die("Falha de conexao: " . mysqli_connect_error());
}

?>