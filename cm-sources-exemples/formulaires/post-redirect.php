<?php
/* Redirection avec URI absolue (HTTP:1.1 Specification) */
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'post.php';
$code = 311; // redirection permanente => inapproprié
$code = 302; // redirection temporaire (défaut) sans transfert des données => inapproprié
$code = 303; // redirection temporaire (sans cache) suite à requête POST
             // SANS re-transfert des données
$code = 307; // redirection temporaire (défaut) suite à requête POST
             // AVEC re-transfert des données
header("Location: http://$host$uri/$extra",true,$code);
exit;
?>