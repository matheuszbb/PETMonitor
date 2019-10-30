<?php
 session_start();
 include_once'conexao.php';

$id_user=$_SESSION['id_usuario'];
$id_rastreador=$_SESSION['id_rastreador'];

function parseToXML($htmlStr){
	$xmlStr=str_replace('<','&lt;',$htmlStr);
	$xmlStr=str_replace('>','&gt;',$xmlStr);
	$xmlStr=str_replace('"','&quot;',$xmlStr);
	$xmlStr=str_replace("'",'&#39;',$xmlStr);
	$xmlStr=str_replace("&",'&amp;',$xmlStr);
	return $xmlStr;
}

// Select all the rows in the markers table
$result_markers = "SELECT usuarios.nome as usuario,
pet.nome as nome,rastreador.lat,rastreador.lng,rastreador.data_hora as dh from rastreador join pet on pet.id_pet = rastreador.id_pet
join usuarios on usuarios.id_usuario = rastreador.id_usuario
where rastreador.id_rastreador = $id_rastreador";

$resultado_markers = mysqli_query($conexao, $result_markers);

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row_markers = mysqli_fetch_assoc($resultado_markers)){
  // Add to XML document node
  echo '<marker ';
  echo 'nome="' . parseToXML($row_markers['nome']) . '" ';
  echo 'lat="' . $row_markers['lat'] . '" ';
  echo 'lng="' . $row_markers['lng'] . '" ';

  echo '/>';
}

// End XML file
echo '</markers>';



