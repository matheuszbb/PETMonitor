<?php 
include_once'conexao.php';

$querySelect = $conexao -> query("select * from usuarios");
while($registros=$querySelect->fetch_assoc()):
    $id_usuario=$registros['id_usuario'];
    $nome=$registros['nome'];

    echo"<tr>";
    echo"<td>id:$id_usuario    </td><td>nome:$nome<br></td>";
    echo"</tr>";
endwhile;

$querySelect = $conexao -> query("select pet.id_usuario,usuarios.nome as usuario,pet.nome as pet,rastreador.lat,rastreador.lng from rastreador join pet on pet.id_pet = rastreador.id_pet
join usuarios on usuarios.id_usuario = rastreador.id_usuario
where rastreador.id_usuario = 3");
while($registros=$querySelect->fetch_assoc()):

    $i_nome=$registros['usuario'];
    $nome=$registros['pet'];
    $rastreador_lat=$registros['lat'];
    $rastreador_lng=$registros['lng'];


    echo"<tr>";
    echo"<td>nome:$i_nome         /////</td><td>nome:$nome    </td><td>lat:$rastreador_lat     </td><td>lng:$rastreador_lng <br></td>";
    echo"</tr>";
endwhile

?>