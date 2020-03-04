<?php
//Définition de la fonction form
function form($action,$methode,$legend)
{
    $code ="<form action=\"$action\" method=\"$methode\" >\n";
    $code.="<fieldset><legend>$legend</legend>\n";
    return $code;
}
//Définition de la fonction text
function text($libtexte,$nomtexte)
{
    $code="<label><b> $libtexte </b></label> <input type=\"text\" name=\"$nomtexte\" /><br />\n";
    return $code;
}
//Définition de la fonction number
function number($libtexte,$nomnumber,$step,$size,$def)
{       
    $code="<label><b> $libtexte </b></label> <input type=\"number\" step=\"$step\" name=\"$nomnumber\" size=\"$size\" value=\"$def\" />\n";
    return $code;
}
//Définition de la fonction radio
function radio($libradio,$nomradio,$valradio)
{
    $code="<label><b> $libradio </b></label><input type=\"radio\" name=\"$nomradio\" value=\"$valradio\" /><br />\n";
    return $code;
}
//Définition de la fonction submit
function submit($nomsubmit,$value,$libsubmit="")
{
    $code="<input type=\"submit\" name=\"$nomsubmit\" value=\"$value\" />&nbsp;&nbsp;&nbsp;\n";
    if($libsubmit!="")
        $code ="<label><b> $libsubmit </b></label> ".$code;
    return $code;
}
//Définition de la fonction reset
function breset($libreset)
{
    $code.="<input type=\"reset\" value=\"$libreset\" /><br />\n";
    return $code;
}
//Définition de la fonction finform
function finform()
{
    $code="</fieldset></form>\n";
    return $code;
}
?>