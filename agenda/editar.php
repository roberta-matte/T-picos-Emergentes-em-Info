<?php 
include('conexao.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM contato WHERE id = $id";

    $resultado = mysqli_query($conexao,$sql);

    if(mysqli_num_rows($resultado) == 1){
        $contato = mysqli_fetch_assoc($resultado);
    }else{
        echo "Contato não foi encontrado";
        exit;

    }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Editar Contato</h2>

    <form action="index.php" method="post">
     Nome: <input type="text" id="nome" value="<?php $contato ['nome'] ?>" name= "nome" >
    <br><br>
     Telefone: <input type="text" id="tel" value="<?php $contato ['telefone'] ?>" name="tel" >
     <br><br>
     Endereço: <input type="text" id="endereco" value="<?php $contato ['endereco'] ?>" name="endereco">
     <br><br> 
     <input type="submit" value="atualizar" class="btn"><br><br>
    </form>

    
</body>
</html>
<?php

if(isset($_POST['atualizar'])){
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $sql2 ="UPDATE contatos SET nome ='$nome' , endereco = '$endereco' ,
    telefone ='$telefone WHERE id='$id'";

    if(mysqli_query($conexao,$sql2)) {
        echo "Deu certo a conexão";
        echo "<br><a href='index.php'>Voltar</a>";
    }else{
        echo "Deu erro" . mysqli_error($conexao);
    
    }
}
?>