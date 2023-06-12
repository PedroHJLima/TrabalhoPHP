<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "nossobanco";

$conecta = mysqli_connect($servidor, $usuario, $senha, $bd);

$query = "SELECT * FROM usuarios ORDER BY nome";
$executar = mysqli_query($conecta, $query);

//mysqli_fetch_array - Tras apenas um resultado
//MYSQLI_BOTH - MYSQLI_NUM - MYSQLI_ASSOC
//$resultados = mysqli_fetch_array($executar, MYSQLI_ASSOC);
//mysqli_fetch_assoc - Tras apenas um resultado
//$resultados = mysqli_fetch_assoc($executar);
$resultados = mysqli_fetch_all($executar, MYSQLI_ASSOC);

/*
echo "<pre>";
print_r($resultados);
echo "</pre>";
*/
function buscar($conecta, $tabela, $ordem = "id"){
	$query = "SELECT * FROM $tabela ORDER BY $ordem";
	$executar = mysqli_query($conecta, $query);
	$resultados = mysqli_fetch_all($executar, MYSQLI_ASSOC);
	return $resultados;
}