<?php 

$prod_keys = range('A','K');
$tva = [0.05,0.10,0.20];

$produits = array_fill_keys($prod_keys,"bite");

function giverandstuff() {
	global $tva;
	return 	[	"prix" => rand(0,10000)/100,
				"taux" => $tva[rand(0,2)]
			];
}
$prix_taux = array_map('giverandstuff',$produits);



foreach ($prix_taux as $line => $values) {
	echo $line." : ";
	foreach ($values as $key => $value) {
		echo $key." ".$value." ";
	} echo "\n";
}
?>