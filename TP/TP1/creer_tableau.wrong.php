<?php 
$products = range('A','K');
$tva = [0.05,0.10,0.20];
$prix_taux = [];

foreach ($products as $prod) {
	array_push($prix_taux,[$prod => [
				"pht" => rand(0,10000)/100,
				"tva" => $tva[rand(0,2)]]]);
}
echo "Product count=".count($prix_taux)."\n";

foreach ($prix_taux as $line => $values) {
	echo $line." : ";
	foreach ($values as key => $value) {
		echo $key." ".$value." ";
	} echo "\n";
}
?>