<?php
$planetas = [
	"marte",
	"jupter",
	"terra",
	"urano",
	"netuno",
	"saturno",
	"venus",
	"mercurio"
	];
echo "------------------------------------------------------------------------------";
echo "<br>";
echo "<br>";
echo "Leitura de uma array padrao com for";
echo "<br>";
echo "---------";
echo "<br>";

for ($i = 0; $i < count($planetas); $i++){
	
	echo $planetas[$i] . "<br>";
};
echo "------------------------------------------------------------------------------";
echo "<br>";
echo "<br>";
echo "foreach";
echo "<br>";
echo "---------";
echo "<br>";
foreach($planetas as $planeta){
	
	echo $planeta . "<br>";
};
?>