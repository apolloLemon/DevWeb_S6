<!DOCTYPE html>
<html lang="fr">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>Formulaire traité par PHP</title>
 </head>
 <body>
  <form action= "<?= $_SERVER["PHP_SELF"] ?>" method="post" enctype="application/x-www-form-urlencoded">
   <fieldset> 
    <legend><b>Infos</b></legend>
    <div>Nom : 
     <input type="text" name="nom" size="40" /><br />
     Débutant : 
     <input type="radio" name="niveau" value="débutant" /> 
     Initié : 
     <input type="radio" name="niveau" value="initié" />
     Maitre : 
     <input type="radio" name="niveau" value="maitre" /><br />
     <input type="reset" value="Effacer" />
     <input type="submit" value="Envoyer" />
    </div>
   </fieldset>
  </form>
<?php
// var_dump($_POST["nom"]); NULL au 1er chargement
// Attention :
// var_dump($_POST["nom"]); "" si non saisi !
// var_dump($_POST["niveau"]);// vaut NULL tant qu'aucun bouton n'est coché !

if(isset($_POST["nom"]) && isset($_POST["niveau"])) {
 echo "<h2> Bonjour ". stripslashes($_POST["nom"]). " vous êtes ".$_POST["niveau"]." en PHP</h2>"; 
}
?>
 </body>
 </html>