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
    <style>
    
table{
    border-collapse:collapse;
    border: 3px solid ;
    width: 75%;
}
thead{
    color: black;
    border: 3px solid ;
}
td{
    text-align: center;
    border-top:  solid black;
    padding:10px;
}
    </style>
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
<a href="Cadastra Pets.php" class="novo"><ul>Novo Pet <img src="_imagens/novo.png" width=15px height=15px/></ul></a><br>

    <table>
        <thead> 
            <caption>PETS</caption>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Raça</th>
            <th>Editar</th>
            <th>Excuir</th>
        </thead>

            <?php 
            
                include_once'CRUD_PET.php';

            ?>

    </table>    
    </section>
    </div>

</body>
</html>
<?php
 }
 ?>