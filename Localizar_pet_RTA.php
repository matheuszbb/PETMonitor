<?php
 session_start();
 if(!$_SESSION['usuario']){
    header('location:login.php');
 }else{
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="_css/Localizar Pets.css">
    <link rel="shortcut icon" href="_imagens/digivice1.png" type="image/x-png"/>
    <meta charset="UTF-8">
    <title>Pet Monitor</title>
</head>
<body>
    <div class="container">
    <nav>
        <ul class="menu">
            <a href="Sistema.php"><li><?php print $_SESSION['usuario']?></li></a>
            <a href="Pets.php"><li>Pets</li></a>
            <a href="Rastreadores.php"><li>Rastreadores</li></a>
            <a href="Localizar Pets.php"><li>Localizar Pets</li></a>
            <a href="logout.php"><li>Sair</li></a>
        </ul>
    </nav>
    <section>
<?php



include_once'conexao.php';

$id_user=$_SESSION['id_usuario'];
$id_rastreador=$_GET['id_rastreador'];

// Select all the rows in the markers table
$result_markers = "SELECT usuarios.nome as usuario,
pet.nome as nome,rastreador.lat,rastreador.lng,rastreador.data_hora as dh from rastreador join pet on pet.id_pet = rastreador.id_pet
join usuarios on usuarios.id_usuario = rastreador.id_usuario
where rastreador.id_rastreador = $id_rastreador";

$resultado_markers = mysqli_query($conexao, $result_markers);

while ($row_markers = mysqli_fetch_assoc($resultado_markers)){

  $nome=$row_markers['nome'];
  $lat=$row_markers['lat'];
  $lng=$row_markers['lng'];

}


echo "<iframe src='https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7959105.649219093!2d-48.07306226781897!3d-13.081302353559094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e2!4m4!2s-9.602452%2C%20-37.248115!3m2!1d-9.602452!2d-37.248115!4m4!2s$lat%2C%20$lng!3m2!1d$lat!2d$lng!5e0!3m2!1spt-BR!2sbr!4v1572452071667!5m2!1spt-BR!2sbr' width='870' height='500' frameborder='0' style='border:0;' allowfullscreen=''></iframe>"     ?>   
    </section>
    </div>

</body>
</html>
<?php
 }
 ?>