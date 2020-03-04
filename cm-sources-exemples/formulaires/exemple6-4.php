<?php 
if(isset($_POST["capital"])&&$_POST["taux"]&&$_POST["duree"]) {
$htm=<<<HTML
    <!DOCTYPE html>
    <html lang="fr">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Tableau d’amortissement</title>
    </head>
    <body>
    <div>
HTML;
 echo $htm;
 $capital=$_POST["capital"];
 $taux=$_POST["taux"]/100/12;
 $duree=$_POST["duree"]*12;
 $assur=$_POST["assur"]*$capital*0.00035;
 $mens=($capital*$taux)/(1-pow((1+$taux),-$duree));
 echo "<h3>Pour un prêt de $capital &euro; à ", $_POST["taux"] ,"%, sur ",$_POST["duree"]," ans, la mensualité est de ",round($mens,2)," &euro; hors assurance</h3>";
 echo "<h4>Tableau d’amortissement du prêt</h4>";
 echo "<table border=\"1\"> <tr><th>Mois </th><th>Capital restant</ th><th> Mensualité ➥Hors Ass.</th><th>Amortissement </ th><th>Intérêt</th><th> Assurance</th><th>Mensualité Ass. cis </ th>";
 // Boucle d’affichage des lignes du tableau
 for($i=1;$i<=$duree;$i++) {
     $int=$capital*$taux; $amort=$mens-$int;
     echo "<tr>";
     echo "<td>$i</td>";
     echo "<td>",round($capital,2),"</td>"; echo "<td>",round($mens,2),"</td>";
     echo "<td>",round($amort,2),"</td>";
     echo "<td>",round($int,2),"</td>";
     echo "<td>$assur</td>";
     echo "<td>",round($mens+$assur,2),"</td>"; echo "</tr>";
     $capital=$capital-$amort; 
 }
 echo "</table>"; 
 echo "</div></body></html>";
}
else 
{
 /* Redirection vers la page HTML du même dossier */
 $host  = $_SERVER['HTTP_HOST'];
 $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
 $extra = 'exemple6-4.html';
 // !!! "header() doit être appelée avant que le moindre contenu ne soit envoyé, 
 // soit par des lignes HTML habituelles dans le fichier, soit par des affichages
 // PHP"
 // !!! HTTP/1.1 demande une URI absolue comme argument : RESPECTEZ la syntaxe
 header("Location: http://$host$uri/$extra");
 /* Aucun code ne doit être exécuté une fois la redirection effectuée. */
 exit();
}
?> 