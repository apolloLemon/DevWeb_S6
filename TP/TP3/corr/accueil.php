<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<title>TP 4 - PHP - Inscriptions</title>
</head>
<body style="background-color: #ffcc00;">
<?php
session_start();
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
?>
<a href="<?php echo "http://$host$uri/employee_form.php" ?>">Employés</a><br/>
<?php require_once("employee_name_table.php"); ?>
</body>
</html>