<?php
//Nombre à trouver
$nb=356;
//compteur
$coup=0;
//boucle de tirage
while($x!=$nb)
{
  $x=rand(0,1000);
  $coup++;
  //echo $x,"<br />";//pour afficher tous les tirages
}
echo "Le nombre $nb se trouve en $coup coups ";
?>