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
        <h1>Cadastar Rastreador</h1>
        <hr><br><br>
        <form method="get" action="valida cadastro rastreador.php">

            <label for="Numero do Rastreador">Número do Rastreador<br></label>
            <input class ="campos" type="text" id="Numero do Rastreador" maxlength="40" name="num_rastreador" required autofocus placeholder="EX:9984214284"><br><br>
            <label for="idpet">Nome Do Pet<br></label>
            <input class ="campos" type="text" id="nome pet" maxlength="40" name="nome" required autofocus placeholder="Nome Do Pet"><br><br>
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