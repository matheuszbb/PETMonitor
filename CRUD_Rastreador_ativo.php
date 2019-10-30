<?php 

$id_user=$_SESSION['id_usuario'];
include_once'conexao.php';

$querySelect = $conexao -> query("select rastreador.id_rastreador,pet.id_pet,rastreador.num_rastreador,pet.id_usuario,usuarios.nome as usuario,pet.nome as pet,rastreador.lat,rastreador.lng from rastreador join pet on pet.id_pet = rastreador.id_pet
join usuarios on usuarios.id_usuario = rastreador.id_usuario
where rastreador.id_usuario = $id_user");
while($registros=$querySelect->fetch_assoc()):

    $id_rastreador=$registros['id_rastreador'];
    $id_pet=$registros['id_pet'];    
    $num_rastreador=$registros['num_rastreador'];
    $nome=$registros['pet'];
    $rastreador_lat=$registros['lat'];
    $rastreador_lng=$registros['lng'];

    echo"<tr>";
    echo"<td>$nome</td>";
    echo"<td>$num_rastreador</td>";
    echo"<td><a href='Localizar_pet_RTA.php?id_rastreador=$id_rastreador'><img src='_imagens/localizacao.png' alt='' width=25px height=25px></a></td>";
    echo"<td><a href='Historico_pet_RTA.php?id_rastreador=$id_rastreador'><img src='_imagens/local.png' alt='' width=20px height=25px></a></td>";
    echo"<td><a href='trocar_pet_RTA.php?id_rastreador=$id_rastreador'><img src='_imagens/ico-editar.png' alt=''></a></td>";
    echo"<td><a href='remover_pet_RTA.php?id_rastreador=$id_rastreador'><img src='_imagens/ico-excluir.png' alt=''></a></td>";
    echo"</tr>";


endwhile

?>