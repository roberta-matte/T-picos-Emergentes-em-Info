<?php
include('conexao.php');
$_nome = $_POST ["nome"];
$_telefone = $_POST["tel"];
$_endereco= $_POST["endereco"];
$sql = "INSERT INTO contatos (nome, endereco,telefone)values('$_nome','$_telefone','$_endereco')";

if(mysqli_query($conexao,$sql)) {
    echo "Deu certo a conexão";
    echo "<br><a href='index.php'>Voltar</a>";
}else{
    echo "Deu erro" . mysqli_error($conexao);

}



 
?>