<?php
session_start();
include_once("conexao.php");

$nome = $_GET['nome'];
$sexo = $_GET['sexo'];
$raca = $_GET['raca'];
$id_usuario=$_SESSION['id_usuario'];

$verifica = "SELECT * from pet join usuarios on usuarios.id_usuario = pet.id_usuario
where pet.nome = '$nome' and pet.id_usuario = '$id_usuario' ";
$busca = mysqli_query($conexao,$verifica);
$unic = mysqli_affected_rows($conexao);

if ($unic <= 0){

$sql = "INSERT INTO pet (nome,sexo,raca,id_usuario) VALUES
 ('$nome','$sexo','$raca','$id_usuario')";

$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="_imagens/digivice1.png" type="image/x-png"/>
    <meta charset="UTF-8">
    <title>PET Monitor</title>
</head>
<body>
<?php

if($linhas == 1){
    header('location: pets.php');
};
}else{
    echo "pet já cadrastrado.";
    header('Refresh: 3,Cadastra Pets.php');
}

?>

</body>
</html>