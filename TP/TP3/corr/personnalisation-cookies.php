<?php
if(isset($_POST['fond']) and isset($_POST['texte']))
{
    if(!isset($_COOKIE['fond']) AND !isset($_COOKIE['texte']) )
    {
        $fond=$_POST['fond'];
        $texte=$_POST['texte'];
        $expir=time() + 5;
        setcookie("fond",$fond,$expir);
        setcookie("texte",$texte,$expir);
    }
    else
    {
        $fond=$_COOKIE['fond'];
        $texte=$_COOKIE['texte'];
    }
}
?>
<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8" />
<title>TP 3 - Personnalisation avec cookies</title>
<style type="text/css" >
<!--
body{background-color: <?php echo $fond ?> ; color: <?php echo $texte ?> ;}
legend{font-weight:bold;font-family:cursive;}
label{font-weight:bold;font-style:italic;}
-->
</style>
</head>
<body>
<form method="post" action="personnalisation-cookies.php">
<fieldset>
<legend>Choisissez vos couleurs (mot clé ou code)</legend>
<label>Couleur de fond
<input type="text" name="fond" />
</label><br /><br />
<label>Couleur de texte
<input type="text" name="texte" />
</label><br />
<input type="submit" value="Envoyer" />&nbsp;&nbsp;
<input type="reset" value="Effacer" />
</fieldset>
</form>
</body>
</html>