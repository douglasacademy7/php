<?php

$planeta = isset($_GET['planeta']) ? $_GET['planeta'] : false;

if ($planeta != false){
	echo $planeta;
}else{
	echo "planeta nao informado!";	
}
echo '<br>';
$cor = $_GET['cor'] ?? "cor nao informada!";

echo $cor;