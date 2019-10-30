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
    width: 99%;
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
        <a href="Cadastra Rastreadores.php" class="novo"><ul>Novo Rastreador <img src="_imagens/novo.png" width=15px height=15px/></ul></a><br>
        
        <table>
        <thead> 
            <caption>Rastreadores Ativos</caption>
            <th>Nome</th>
            <th>Rastreador</th>
            <th>Localizar</th>
            <th>Historico</th>
            <th>Trocar Pet</th>
            <th>Remover Pet</th>
        </thead>

            <?php 
            
                include_once'CRUD_Rastreador_ativo.php';

            ?>

        </table>
        <br>
        <table>
        <thead> 
            <caption>Rastreadores</caption>
            <th>Rastreador</th>
            <th>Ativo</th>
            <th>Adicionar Pet</th>
            <th>Excuir</th>
        </thead>

            <?php 
            
                include_once'CRUD_Rastreador.php';

            ?>

        </table>  
    
    </section>
    </div>

</body>
</html>
<?php
 }
 ?>
