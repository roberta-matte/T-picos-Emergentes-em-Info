<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="agenda.php" method="post">
        Nome: <input type="text" name="nome"><br><br>
        Telefone: <input type="text" name="telefone"><br><br>
        Endereço: <input type="text" name="endereco"><br><br>
        <input type="submit" value="CADASTRAR">

    </form>
    
</body>
<?php
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$servidor = "localhost";
$user = "root";
$senha = "";
$banco = "agenda";
$conexao = mysqli_connect($servidor, $user, $senha, $banco);
if(!$conexao){
    echo "erro de conexao";
}
else{
    echo "<h1>tudo certo</h1>";
}

?>
</html>