<?php
 session_start();
 if(!$_SESSION['usuario']){
    header('location:login.php');
 }else{

    $id_pet=$_GET['id_pet'];
    $_SESSION['id_pet']=$id_pet;
    include_once'conexao.php';

    $querySelect = $conexao -> query("select pet.id_pet,pet.id_usuario,pet.nome,pet.sexo,pet.raca from pet 
    join usuarios on usuarios.id_usuario = pet.id_usuario
    where pet.id_pet = $id_pet");
    while($registros=$querySelect->fetch_assoc()):
    
        $id_pet=$registros['id_pet'];
        $nome=$registros['nome'];
        $raca=$registros['raca'];
    
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
        <h1>Editar Pet</h1>
        <hr><br><br>
        <form method="GET" action="update pet.php">
                
                    <label for="nome">Nome<br></label>
                    <input class ="campos" type="text" id="nome" maxlength="40" name="nome" value="<?php echo $nome ?>" required autofocus placeholder="Nome do Pet"><br>
                    <label for="Raça">Raça do Pet<br></label>
                    <input class ="campos" type="text" id="raca" maxlength="40" name="raca" value="<?php echo $raca ?>" required autofocus placeholder="Raça do Pet">
                    <p>Sexo do Pet</p>
                    <input type="radio" name="sexo" value="m"  required autofocus>
                    <label for="macho">Macho</label><br>
                    <input type="radio" name="sexo" value="f"  required autofocus>
                    <label for="macho">Fêmea</label><br>

                    <br><input type="submit" value="Salvar Cadastro" class="btn">
                    <input type="reset" value="Limpar Dados" class="btn">

               
            </form>
    </section>
    </div>

</body>
</html>
<?php
 }
 ?>