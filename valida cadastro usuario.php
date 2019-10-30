<?php

include_once("conexao.php");

$nome = $_GET['nome'];

$sqli = "select nome from usuarios where nome = '$nome' ";
$queri = mysqli_query($conexao,$sqli);
$unic = mysqli_affected_rows($conexao);
if ($unic <= 0){

$sql = "insert into usuarios (nome) values ('$nome')";
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
    echo "parabéns, seu cadastro foi realizado com susesso, você será redirecionado automaticamete para a pagina de login em 5 segudos.";
    header('Refresh: 3,login.php');
}else
{
    echo "já existe um usuarios cadastrado como esse nome, você será redirecionado automaticamete para a pagina de cadastro em 5 segudos.";
    header('Refresh: 5,cadastrousuario.php');};
}else
{
    echo "já existe um usuarios cadastrado como esse nome, você será redirecionado automaticamete para a pagina de cadastro em 5 segudos.";
    header('Refresh: 5,cadastrousuario.php');}
?>

</body>
</html>