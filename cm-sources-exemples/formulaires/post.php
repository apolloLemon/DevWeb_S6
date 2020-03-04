<?php
$auteur = !empty($_POST['auteur']) ? $_POST['auteur'] : 'Auteur à saisir'; 
$livre = !empty($_POST['livre']) ? $_POST['livre'] : 'Livre à saisir';
$auteur = htmlentities($auteur);
$livre = htmlentities($livre);
$str=<<<HTML
<html>
<head><meta charset="UTF-8"/></head>
<body>
<form name="saisie" method="post" action="post-redirect.php">
<label>auteur :</label>
<input type="text" name="auteur" value="$auteur"/>
<input type="text" name="livre" value="$livre"/>
<br/>
<input type="submit" value="OK"/>
</form>
</body>
</html>
HTML;
echo $str;
?>