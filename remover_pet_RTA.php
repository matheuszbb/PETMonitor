<?php
 session_start();
 include_once'conexao.php';
 $id_rastreador=$_GET['id_rastreador'];

 $queryDeleteLOC = $conexao -> query("DELETE FROM localizacao WHERE id_rastreador = '$id_rastreador' ");
 $queryUpdateRT = $conexao -> query("UPDATE rastreador SET id_pet = NULL, pet_usa = 'nao',lat = NULL, lng = NULL,
data_hora = NULL WHERE id_rastreador = '$id_rastreador' ");

$linhas = mysqli_affected_rows($conexao);


if($linhas > 0){
    header('location:Rastreadores.php');
}else{
    echo "ERRO";
    header('Refresh: 2,Rastreadores.php');
}


 ?>