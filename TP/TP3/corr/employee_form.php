<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<title>TP 4 - PHP - Inscription d'employés</title>
</head>
<body style="background-color: #ffcc00;">
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<fieldset>
<legend><b>Inscrire un employé</b></legend>
<label>Nom :&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="nom" value="" size="30" maxlength="60" required="required"/><br/><br/>
<label>Salaire :&nbsp;</label>
<input type="number" name="salaire" min="0" max="100000" step="5000" size="6" required="required"/><br/><br/>
<label>Age :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="number" name="age" min="18" max="100" size="6" required="required"/><br/><br/>
<input type="submit" value="Inscrire" name="inscrire" />
</fieldset>
</form>
<?php
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
?>
<a href="<?php echo "http://$host$uri/accueil.php" ?>">Retour à l'accueil</a><br/>
<?php
session_start();
if (isset($_POST['nom']) && isset($_POST['salaire']) && isset($_POST['age']))
{
    $done = $_POST['nom'] . $_POST['age'];
    if (isset($_SESSION[$done])) {
        echo "<h3>{$_POST['nom']} d'âge {$_POST['age']} : vous êtes déjà inscrits !</h3>";
    } else {
        $_SESSION[$done] = $done;
        $id = 1+$_SESSION["nb_employees"];
        $nom = trim($_POST['nom']);
        $salaire = $_POST['salaire'];
        $age = $_POST['age'];
        $rec = $id . ";" . $nom . ";" . $salaire . ";" . $age . "\n";
        $file = dirname(__FILE__) . "/employees.csv";
        if (file_exists($file)) {
            if ($id_file = fopen($file, "a")) {
                flock($id_file, 2);
                fwrite($id_file, $rec);
                flock($id_file, 3);
                fclose($id_file);
                echo "<h3>", ucwords(strtolower($nom)), " : vous êtes inscrits !</h3>";
            } else {
                echo "Fichier inaccessible !";
            }
        } else {
            $id_file = fopen($file, "w");
            fwrite($id_file, $rec);
            fclose($id_file);
        }
        require_once("employee_table.php");
    }
} else {
    require_once("employee_table.php");
}
?>
</body>
</html>