<?php
 session_start();
 if(!$_SESSION['usuario']){
    header('location:login.php');
 }else{
     $id_rastreador=$_GET['id_rastreador'];
     $_SESSION['id_rastreador']=$id_rastreador;
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
            
            include_once'localizacao id_pet.php';

        ?>
        
    </section>
    </div>

</body>
</html>
<?php
 }
 ?>