<!DOCTYPE html>
<html>
<head>
<title>Fonction de création de formulaire</title>
</head>
<body>
<?php

// Définition de la fonction
function form($action, $methode, $libtexte, $nomtexte, $libradio, $nomradio, $valradio, $libsubmit, $libreset)
{
    $code = "<form action=\"$action\" method=\"$methode\" >";
    $code .= "<fieldset><legend>Complétez</legend>";
    $code .= "<label><b> $libtexte </b></label> <input type=\"text\" name=\"$nomtexte\" /><br />";
    $code .= "<label><b> $libradio </b></label><input type=\"radio\" name=\"$nomradio\" value=\"$valradio\" /><br />";
    $code .= "<input type=\"submit\" value=\"$libsubmit\" />&nbsp;&nbsp;&nbsp;";
    $code .= "<input type=\"reset\" value=\"$libreset\" /><br />";
    $code .= "</fieldset>";
    $code .= "</form>";
    return $code;
}
// Utilisation
echo form("machin.php", "post", "Nom", "nom", "Abonné", "abonn", "oui", "Envoi", "Effacer");
echo form("truc.php", "post", "Loisirs", "loisir", "Amateur", "amat", "oui", "Envoi", "Effacer");
?>
</body>
</html>
