<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>TP 1 - PHP - Calculatrice en ligne</title>
</head>
<body>
	<!-- Code PHP -->
<?php
if (isset($_POST["calcul"]) && isset($_POST["nb1"]) && isset($_POST["nb2"])) {
    switch ($_POST["calcul"]) {
        case "Addition x+y":
            $resultat = $_POST["nb1"] + $_POST["nb2"];
            break;
        case "Soustraction x-y":
            $resultat = $_POST["nb1"] - $_POST["nb2"];
            break;
        case "Division x/y":
            $resultat = $_POST["nb1"] / $_POST["nb2"];
            break;
        case "Puissance x^y":
            $resultat = pow($_POST["nb1"], $_POST["nb2"]);
            break;
        default:
            break;
    }
} else {
    echo "<h3>Entrez deux nombres : </h3>";
}
// Code HTML du formulaire
// Inclusion des fonctions
include ('form_generation.inc.php');
// Utilisation
$code = form("{$_SERVER['PHP_SELF']}", "post", "Calculatrice en ligne");
$code .= "<table><tbody><tr><td>";
$code .= number("Nombre 1", "nb1", 1, 30, $_POST['nb1'] ?? '');
$code .= "</td></tr><tr><td>";
$code .= number("Nombre 2", "nb2", 1, 30, $_POST['nb2'] ?? '');
$code .= "</td></tr><tr><td>";
$code .= number("Résultat", "result", 1, 30, $resultat ?? '');
$code .= "</td></tr><tr><td>";
$code .= submit("calcul", "Addition x+y", "Choisissez !");
$code .= submit("calcul", "Soustraction x-y");
$code .= submit("calcul", "Division x/y");
$code .= submit("calcul", "Puissance x^y");
$code .= "</td></tr></tbody></table>";
$code .= finform();
$code .= "</html>";
echo $code;
?>