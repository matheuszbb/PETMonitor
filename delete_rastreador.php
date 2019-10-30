<?php
 session_start();
 include_once'conexao.php';
 $id_rastreador=$_GET['id_rastreador'];

 $queryDeleteLOC = $conexao -> query("DELETE FROM localizacao WHERE id_rastreador = '$id_rastreador' ");
 $queryDeleteRT = $conexao -> query("DELETE FROM rastreador WHERE id_rastreador = '$id_rastreador' ");

$linhas = mysqli_affected_rows($conexao);


if($linhas > 0){
    header('location:Rastreadores.php');
}else{
    echo "ERRO";
    header('Refresh: 2,Rastreadores.php');
}


 ?>