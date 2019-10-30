<?php 

$id_user=$_SESSION['id_usuario'];
include_once'conexao.php';

$querySelect = $conexao -> query("select pet.id_pet,pet.id_usuario,pet.nome,pet.sexo,pet.raca from pet 
join usuarios on usuarios.id_usuario = pet.id_usuario
where pet.id_usuario = $id_user");
while($registros=$querySelect->fetch_assoc()):

    $id_pet=$registros['id_pet'];
    $nome=$registros['nome'];
    $sexo=$registros['sexo'];
    $raca=$registros['raca'];

    if ($sexo=='m'){
       $sexo='Macho';}
       else{$sexo='Fêmea';} 

    echo"<tr>";
    echo"<td>$nome</td>";
    echo"<td>$sexo</td>";
    echo"<td>$raca</td>";
    echo"<td><a href='editar_pet.php?id_pet=$id_pet'><img src='_imagens/ico-editar.png' alt=''></a></td>";
    echo"<td><a href='delete_pet.php?id_pet=$id_pet'><img src='_imagens/ico-excluir.png' alt=''></a></td>";
    echo"</tr>";


endwhile

?>