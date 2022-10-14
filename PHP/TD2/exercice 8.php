<?php
function validhttp($ch)
{
$modele="^(www)\.([a-z0-9]+)(\.|-)?([a-z0-9]*)\.([a-z]{2,4}$)";
$ch=strtolower($ch);
if (ereg($modele, $ch))
{
echo "$ch est valide <br />";
return TRUE;
}
else
{
echo "$ch est invalide <br />";
return FALSE;
}
}
$adresse1="www.laposte2.info";
$adresse2="www.pierre-plus-loin.info";
$adresse3="www.u-pec.fr";
validhttp($adresse1);
validhttp($adresse2);
validhttp($adresse3);
?>