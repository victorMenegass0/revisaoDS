<?php
$con = new mysqli("localhost", "root", "usbw", "db_banco");
$con->query("SET NAMES 'utf8'");
$con->query('SET character_set_connection=utf8');
$con->query('SET character_set_client=utf8');
$con->query('SET character_set_results=utf8');

function Cadastrar($filme, $sinopse, $capa, $valor, $qtd){
	$sql =  'INSERT into tb_filme values(null,"'.$filme.'", "'.$sinopse.'","'.$capa.'",'.$valor.','.$qtd.')';
	$res = $GLOBALS['con']->query($sql);
	if ($res) {
		alert("Cadastrado com sucesso");
	}
	else{
		alert("O filme não foi cadastrado");
	}
	echo $sql;
}
function alert($msg){
  print'<script>
  alert("'.$msg.'");
  </script>'; 
}
function exibir(){
	$sql = 'SELECT id, titulo, capa, sinopse, valor, qtde FROM tb_filme';
	$res = $GLOBALS['con']->query($sql);
	if ($res->num_rows > 00) {
		return $res;
	}
	else{
		echo "sem filmes cadastrados";
	}
}

?>