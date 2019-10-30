<?php
session_start();
include_once("conexao.php");

$nome = $_GET['nome'];
$id_rastreador=$_SESSION['id_rastreador'];
$id_usuario=$_SESSION['id_usuario'];

$sqlo = "select * from rastreador where id_rastreador = '$id_rastreador' ";
$quer0 = mysqli_query($conexao,$sqlo);
$unic = mysqli_affected_rows($conexao);

if ($unic == 1){
    $querySelect = $conexao -> query("select pet.id_pet from pet 
    join usuarios on usuarios.id_usuario = pet.id_usuario
    where pet.nome = '$nome' and pet.id_usuario = '$id_usuario' ");
    while($registros=$querySelect->fetch_assoc()):
    
        $id_pet=$registros['id_pet'];

    endwhile;

    $pet_exite = mysqli_affected_rows($conexao);

        if($pet_exite  == 1){

            $busca = ("SELECT * from rastreador where id_pet = '$id_pet' ");
            $valida = mysqli_query($conexao,$busca);
            $unico = mysqli_affected_rows($conexao);

                if($unico >= 1){
                    $pet_sem_rastreador ='0';
                }else{
                    $pet_sem_rastreador ='1';
                };

        }else{
            $pet_sem_rastreador ='0';
        };

if ($pet_sem_rastreador == 1){

    $queryDeleteLOC = $conexao -> query("DELETE FROM localizacao WHERE id_rastreador = '$id_rastreador' ");

    for($inicio=1;$inicio <= 9;$inicio++){
        $i = rand(1,10);
    };

    if($i==1){
        $lat ='-21.456829';
        $lng ='-43.523257';
    };

    if($i==2){
        $lat ='-22.456829';
        $lng ='-44.523257';
    };
    
    if($i==3){
        $lat ='-23.456829';
        $lng ='-45.523257';
    };
    
    if($i==4){
        $lat ='-24.456829';
        $lng ='-46.523257';
    };
    
    if($i==5){
        $lat ='-25.456829';
        $lng ='-47.523257';
    };
    
    if($i==6){
        $lat ='-26.456829';
        $lng ='-48.523257';
    };
    
    if($i==7){
        $lat ='-27.456829';
        $lng ='-49.523257';
    };
    
    if($i==8){
        $lat ='-28.456829';
        $lng ='-50.523257';
    };
    
    if($i==9){
        $lat ='-29.456829';
        $lng ='-51.523257';
    };
    
    if($i==10){
        $lat ='-3o.456829';
        $lng ='-52.523257';
    };

$sql = $conexao -> query("UPDATE rastreador SET id_pet = '$id_pet' , lat = '$lat' , lng = '$lng' , data_hora = CURRENT_TIMESTAMP() ,
pet_usa = 'sim' where id_rastreador = '$id_rastreador' ");

$linhas = mysqli_affected_rows($conexao);

$localizacao = "INSERT INTO localizacao (id_localizacao,lat,lng,data_hora,id_rastreador) VALUES
 (default,'-24.956829','-46.923258','2019-10-26 22:39:03','$id_rastreador')";

$salvar = mysqli_query($conexao,$localizacao);

$localizacao = "INSERT INTO localizacao (id_localizacao,lat,lng,data_hora,id_rastreador) VALUES
(default,'-24.156829','-45.523258','2019-10-25 22:39:03','$id_rastreador')";

$salvar = mysqli_query($conexao,$localizacao);

$localizacao = "INSERT INTO localizacao (id_localizacao,lat,lng,data_hora,id_rastreador) VALUES
 (default,'-24.456829','-50.523258','2019-10-27 22:39:03','$id_rastreador')";

$salvar = mysqli_query($conexao,$localizacao);

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
    header('location: Rastreadores.php');};
}else{
    echo "ERRO, esse pet já foi adicionado.";
    header('Refresh: 3,Rastreadores.php');
};
}else{
    echo "ERRO, esse pet já foi adicionado.";
    header('Refresh: 3,Rastreadores.php');
}

?>

</body>
</html>