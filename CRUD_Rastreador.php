<?php 

$id_user=$_SESSION['id_usuario'];
include_once'conexao.php';

$querySelect = $conexao -> query("SELECT * from rastreador join
usuarios on usuarios.id_usuario = rastreador.id_usuario
where rastreador.id_usuario = $id_user and rastreador.pet_usa = 'nao' ");
while($registros=$querySelect->fetch_assoc()):

    $id_rastreador=$registros['id_rastreador'];
    $num_rastreador=$registros['num_rastreador'];
    $rastreador_lat=$registros['lat'];
    $rastreador_lng=$registros['lng'];
    $pet_usa=$registros['pet_usa'];

    echo"<tr>";
    echo"<td>$num_rastreador</td>";
    echo"<td>$pet_usa</td>";
    echo"<td><a href='adicionar_pet_RT.php?id_rastreador=$id_rastreador'><img src='_imagens/ico-editar.png' alt=''></a></td>";
    echo"<td><a href='delete_rastreador.php?id_rastreador=$id_rastreador'><img src='_imagens/ico-excluir.png' alt=''></a></td>";
    echo"</tr>";


endwhile

?>