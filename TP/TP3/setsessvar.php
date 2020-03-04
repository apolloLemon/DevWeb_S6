<?php
session_start();
$_SESSION['zero']="Yo";
echo $_SESSION['zero'];
echo "<br>";
print_r($_SESSION);
 ?>