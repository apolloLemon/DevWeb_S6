<!DOCTYPE html>
<html>
<head>
<title>TP 1 - Formulaire email</title>
</head>
<body>
	<form action="form_email.php" method="post">
		<fieldset>
			<legend>
				<b>Saisissez votre e-mail </b>
			</legend>
			<table border="1">
				<tr>
					<td>mail :</td>
					<td><input type="text" name="mail" /> <input type="hidden"
						name="navigateur" value="<?= $_SERVER['HTTP_USER_AGENT']; ?>" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" value="ENVOI" /></td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
if (! empty($_POST['navigateur'])) {
    if (! empty($_POST['mail'])) {
        echo "<table border=\"1\" >";
        echo "<caption><b>Votre mail et votre navigateur</b></caption>";
        foreach ($_POST as $cle => $val) {
            echo "<tr> <td> $cle : &nbsp;</td> <td>" . stripslashes($val) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<script>alert('Le formulaire est incomplet');document.location='email.php'</script>";
    }
}
?>
</body>
</html>