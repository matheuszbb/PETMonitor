 <?php
 session_start();
 include_once'conexao.php';
 $id_pet=$_SESSION['id_pet'];
 $id_usuario=$_SESSION['id_usuario'];
 $nome=$_GET['nome'];
 $raca=$_GET['raca'];
 $sexo=$_GET['sexo'];


 $verifica = "SELECT * from pet join usuarios on usuarios.id_usuario = pet.id_usuario
 where pet.nome = '$nome' and pet.id_usuario = '$id_usuario' ";
 $busca = mysqli_query($conexao,$verifica);
 $unic = mysqli_affected_rows($conexao);
 
 if ($unic <= 0){

 $queryUpdate = $conexao -> query("UPDATE pet SET nome = '$nome', raca = '$raca', sexo = '$sexo' 
 WHERE id_usuario = '$id_usuario' and id_pet = '$id_pet' ");

$linhas = mysqli_affected_rows($conexao);

if($linhas > 0){
    header('location:pets.php');
};
}else{
    echo "ERRO";
    header('Refresh: 2,pets.php');
}


 ?>