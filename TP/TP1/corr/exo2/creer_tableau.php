<?php
// Création du tableau [... "D"=>["Prix"=>22.71,"Taux"=>0.05] ...]
$articles = range("A", "K");
$articles = array_fill_keys($articles, 0);
$taux = [
    0.05,
    0.10,
    0.20
];

// function creer_prix_articles(string $article) : array {
function creer_prix_articles($article)
{
    global $taux;
    return array(
        "Prix" => ((float) rand(1, 10000) / 100),
        "Taux" => $taux[rand(0, 2)]
    );
}

$prix_taux = array_map("creer_prix_articles", $articles);
?>