<?php

// Calcul et génération coûts HT et TTC par article sous forme de ligne de tableau HTML
// $value : valeur de type array d'un élément du tableau $prix_taux
// $key : clé de type string d'un élément du tableau $prix_taux
// $param : paramètre additionnel de type string (couleur de fond CSS)
// function taxe(array $value,string $key, string $param) : void {
function taxe($value, $key, $param)
{
    $prix = $value["Prix"];
    $taux = $value["Taux"];
    $cell = "<tr>";
    $cell .= "<td>$key</td>";
    $cell .= "<td class='ra'>$prix</td>";
    $cell .= "<td class='ra'>$taux</td>";
    $cell .= "<td class='ra'>" . round($prix * $taux, 2) . "</td>";
    $cell .= "<td class='ra' style=\"background-color:$param\">" . round($prix * (1 + $taux), 2) . "</td>";
    $cell .= "</tr>";
    echo $cell;
}

// Génération de tableau HTML
// function generer_tableau(array $prix_taux) : void {
function generer_tableau($prix_taux)
{
    echo "<h2>Facture détaillée en &euro;</h2>";
    echo "<table>";
    echo "<thead><th>Article</th><th class='ra'>Prix</th><th class='ra'>Taux T.V.A.</th><th class='ra'>Coût H.T.</th><th class='ra'>Coût T.T.C.</th></thead>";
    array_walk($prix_taux, "taxe", "red");
    echo "</td></tr></table></table>";
}
?>