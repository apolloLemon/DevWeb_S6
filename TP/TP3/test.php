<?php 
session_start();
echo session_name();
echo "<br>";
echo exec('whoami');
 ?>