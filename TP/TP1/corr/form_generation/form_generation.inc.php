<?php

// Définition de la fonction form
function form($action, $methode, $legend)
{
    $code = "<form action=\"$action\" method=\"$methode\" >\n";
    $code .= "<fieldset><legend>$legend</legend>\n";
    return $code;
}

// Définition de la fonction text
function text($libtexte, $nomtexte)
{
    $code = "<label><b> $libtexte </b></label> <input type=\"text\" name=\"$nomtexte\" /><br />\n";
    return $code;
}

// Définition de la fonction radio
function radio($libradio, $nomradio, $valradio)
{
    $code = "<label><b> $libradio </b></label><input type=\"radio\" name=\"$nomradio\" value=\"$valradio\" /><br />\n";
    return $code;
}

// Définition de la fonction submit
function submit($libsubmit, $libreset)
{
    $code = "<input type=\"submit\" value=\"$libsubmit\" />&nbsp;&nbsp;&nbsp;\n";
    $code .= "<input type=\"reset\" value=\"$libreset\" /><br />\n";
    return $code;
}

// Définition de la fonction finform
function finform()
{
    $code = "</fieldset></form>\n";
    return $code;
}
?>
