<?php
 session_start();
 if(!$_SESSION['usuario']){
    header('location:login.php');
 }else{

    $id_rastreador=$_GET['id_rastreador'];
    $_SESSION['id_rastreador']=$id_rastreador;
    include_once'conexao.php';

    $querySelect = $conexao -> query("SELECT * from rastreador 
    join usuarios on usuarios.id_usuario = rastreador.id_usuario
    where rastreador.id_rastreador = '$id_rastreador'");
    while($registros=$querySelect->fetch_assoc()):
    
        $num_rastreador=$registros['num_rastreador'];
    
    endwhile;

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
        <h1>Adicionar Pet</h1>
        <hr><br><br>
        <form method="GET" action="update_pet_RT.php">
                
            <label for="Numero do Rastreador">Número do Rastreador:</label>
            <?php echo $num_rastreador ?><br><br>
            <label for="idpet">Nome Do Pet<br></label>
            <input class ="campos" type="text" id="nome pet" maxlength="40" name="nome"  placeholder="Nome Do Pet"><br><br>
            <input type="submit" value="Salvar Cadastro" class="btn">
            <input type="reset" value="Limpar Dados" class="btn">

               
            </form>
    </section>
    </div>

</body>
</html>
<?php
 }
 ?>