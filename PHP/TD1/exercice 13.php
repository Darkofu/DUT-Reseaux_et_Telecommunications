<?php
for($i=11;$i<=36;$i++)
{
$tab[$i]=chr(54+$i);
}
//Lecture avec for
for($i=11;$i<=36;$i++)
{
echo "Element d'indice $i : $tab[$i]", "<br />";
}
echo "<hr />";
//Lecture avec foreach
foreach($tab as $cle=>$valeur)
{
echo "Element d'indice $cle : $valeur", "<br />";
}
?>