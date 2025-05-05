<?php
include("conexao.php");
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$sql = "INSERT INTO contatos(nome, telefone, endereco)"
        VALUES ('$nome', '$telefone', '$endereco');
      if(mysql_query($conexao, $sql)){
        echo "Contato salvo!";
      }  
    else
    "Erro ao salvar".mysqli_error($conexao);
?>