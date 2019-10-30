<?php
include_once("conexao.php");

$nome = $_POST['nome'];

$sql = "select nome from usuarios where nome = '$nome' ";
$query = mysqli_query($conexao,$sql);
$linhas = mysqli_affected_rows($conexao);

if ($linhas > 0){
    SESSION_START();
    $_SESSION['nome'] = $nome;
    while($exibirNome = mysqli_fetch_array($query)){
        $nome_usuario = $exibirNome[0];
    }
    $_SESSION['usuario']=$nome_usuario;
    print $_SESSION['usuario'] ;

    $querySelect = $conexao -> query("select * from usuarios where nome = '$nome'"); 
while($registros=$querySelect->fetch_assoc()):
    $id_usuario=$registros['id_usuario'];
endwhile;
$_SESSION['id_usuario']=$id_usuario;

print $_SESSION['id_usuario'] ;
header('location:Sistema.php');

}
else{
    print "Dados incorretos!";
    header('Refresh: 1,login.php');
}


?>