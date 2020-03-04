<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>TP 2 - PHP - Tableaux</title>
<style type="text/css">
table, th, td {
	border-collapse: collapse;
	border-style: solid;
	border-width: 1px;
}

td {
	width: 100px;
}

.ra {
	text-align: right;
}
</style>
</head>
<body>
<?php
require ("creer_tableau.php");
require ("afficher_lignes.php");

function tri_tva_prix($x, $y): int
{
    return $x["Taux"] <=> $y["Taux"] ? $x["Taux"] <=> $y["Taux"] : $y["Prix"] <=> $x["Prix"];
}
uasort($prix_taux, "tri_tva_prix");
generer_tableau($prix_taux, $_SERVER["PHP_SELF"]);
/**
 * print_r($articles);/*
 * print_r($prix_taux);
 * /*
 */
?>
</body>
</html>