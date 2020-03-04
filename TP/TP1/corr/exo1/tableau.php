<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>TP 1 - PHP - Tableaux</title>
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
// Affichage tableau non trié
generer_tableau($prix_taux);
/**
 * print_r($articles);/*
 * print_r($prix_taux);
 * /*
 */
?>
</body>
</html>