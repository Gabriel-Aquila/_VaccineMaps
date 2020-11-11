<!-- Exibe os postos cadastrados no bd -->
<?php
require("conexao_postos.php");



function parseToXML($htmlStr){
	$xmlStr=str_replace('<','&lt;',$htmlStr);
	$xmlStr=str_replace('>','&gt;',$xmlStr);
	$xmlStr=str_replace('"','&quot;',$xmlStr);
	$xmlStr=str_replace("'",'&#39;',$xmlStr);
	$xmlStr=str_replace("&",'&amp;',$xmlStr);
	return $xmlStr;
}

// Seleciona as linhas da tabela;
$result_markers = "SELECT * FROM markers";
$resultado_markers = mysqli_query($conexao, $result_markers);

header("Content-type: text/xml");

// Inicia tag xml
echo '<markers>';

  // Exibindo resultado

while ($row_markers = mysqli_fetch_assoc($resultado_markers)){

  echo '<marker ';
  echo 'name="' . parseToXML($row_markers['name']) . '" ';
  echo 'address="' . parseToXML($row_markers['address']) . '" ';
  echo 'lat="' . $row_markers['lat'] . '" ';
  echo 'lng="' . $row_markers['lng'] . '" ';
  echo 'type="' . $row_markers['type'] . '" ';
  echo '/>';
}

// Encerra tag xml
echo '</markers>';



