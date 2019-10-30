 <?php
 session_start();
 include_once'conexao.php';
 $id_pet=$_GET['id_pet'];
 $id_usuario=$_SESSION['id_usuario'];

 $querySelect = $conexao -> query("SELECT rastreador.id_rastreador,pet.id_pet,rastreador.num_rastreador,pet.id_usuario,usuarios.nome as usuario,
 pet.nome as pet,rastreador.lat,rastreador.lng from rastreador join pet on pet.id_pet = rastreador.id_pet
 join usuarios on usuarios.id_usuario = rastreador.id_usuario
 where rastreador.id_usuario = $id_usuario and rastreador.id_pet = $id_pet ");
 while($registros=$querySelect->fetch_assoc()):

     $id_rastreador=$registros['id_rastreador'];

 endwhile;

 $queryDeleteLOC = $conexao -> query("DELETE FROM localizacao WHERE id_rastreador = '$id_rastreador' ");
 $queryDeleteRT = $conexao -> query("UPDATE rastreador SET id_pet = NULL, pet_usa = 'nao' WHERE id_pet = '$id_pet' ");
 $queryDelete = $conexao -> query("DELETE FROM pet WHERE id_pet = '$id_pet' ");

$linhas = mysqli_affected_rows($conexao);


if($linhas > 0){
    header('location:pets.php');
}else{
    echo "ERRO";
    header('Refresh: 2,pets.php');
}


 ?>