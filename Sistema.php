<?php
 session_start();
 if(!$_SESSION['usuario']){
    header('location:login.php');
 }else{
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="_css/sistema.css">
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
        <h1>Pet Monitor</h1>
        <hr><br><br>
        <figure class="perfil">
            <img src="_imagens/perfil.jpg" alt="">
            <br>
            <?php print "Bem Vindo:" .$_SESSION['usuario']?>
        </figure>
    </section>
    </div>

</body>
</html>
<?php
 }
 ?>