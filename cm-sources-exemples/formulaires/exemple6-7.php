<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>Transfert de plusieurs fichiers</title>
 </head> 
 <body>
 <!-- Code HTML du formulaire -->
 <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" > 
  <fieldset>
   <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
   <legend><b>Transferts de plusieurs fichiers</b></legend>
   <table>
    <tbody>
     <tr>
      <th>Fichier 1</th>
      <td> <input type="file" name="fich[]" accept="image/gif" size="50"/></td>
     </tr>
     <tr>
      <th>Fichier 2</th>
      <td> <input type="file" name="fich[]" accept="image/gif" size="50"/></td>
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
if(!empty($_FILES))
{
 echo "Taille maximale autorisée :",$_POST["MAX_FILE_SIZE"]," octets<hr / >"; foreach($_FILES["fich"] as $cle => $valeur)
 {
  echo "Clé : $cle <br />"; 
  foreach($valeur as $key=>$val) 
  {
   echo " Fichier : $key valeur : $val <br />"; 
  }
 }
// Déplacement et renommage des fichiers
$result1=move_uploaded_file($_FILES["fich"]["tmp_name"][0],"image1.gif");$result2=move_uploaded_file($_FILES["fich"]["tmp_name"][1],"image2.gif");
if($result1==true && $result2==true)
{echo "<br /> Transferts effectués !<br />";}
else
{echo "<br /> Transferts non effectués <br />";} 
}
else echo "<h4>Choisissez les fichiers à transférer </h4>"; 
?>
 </body>
</html>