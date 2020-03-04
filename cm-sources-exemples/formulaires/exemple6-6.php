<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <title>Transfert de fichiers</title>
 </head>
 <body>
  <form action="exemple6-6.php" method="post" enctype="multipart/form-data" > 
   <fieldset>
    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
    <legend><b>Transfert de fichiers</b></legend>
    <table>
     <tbody>
      <tr>
       <th>Fichier</th>
       <td><input type="file" name="fich" accept="image/gif" size="50"/></td>
      </tr>
      <tr>
       <th>Clic !</th>
       <td> <input type="submit" value="Envoi" /></td>
      </tr>
     </tbody>
    </table>
   </fieldset>
 </form>
<!-- Code PHP -->
<?php
if(isset($_FILES['fich']))
{
 echo "Taille maximale autorisée :",$_POST["MAX_FILE_SIZE"]," octets<hr / >";
 echo "<b>Clés et valeurs du tableau \$_FILES </b><br />"; 
 foreach($_FILES["fich"] as $cle => $valeur)
 {
  echo "clé : $cle valeur : $valeur <br />"; 
 }
 // Enregistrement et renommage du fichier
 $result=move_uploaded_file($_FILES["fich"]["tmp_name"],"imagephp.gif");
 if($result==TRUE)
  {echo "<hr /><big>Le transfert est effectué !</big>";}
 else
  {echo "<hr /> Erreur de transfert n°",$_FILES["fich"]["error"];}
}
?>
 </body> 
</html>