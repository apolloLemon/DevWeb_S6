
<?php 
require 'creer_tableau.php';

function PrintLine($arr, $key){
	echo "<tr>";
	echo "<td>".$key."</td>";
	echo "<td>".$arr["prix"]."</td>";
	echo "<td>".$arr["taux"]."</td>";
	$tax = ($arr["prix"]*$arr["taux"])/100;
	echo "<td>".$tax."</td>";
	echo "<td>".($tax+$arr["prix"])."</td>";
	echo "</tr>";
}

echo "<table>";
array_walk($prix_taux, 'PrintLine');
echo "</table>";
?>