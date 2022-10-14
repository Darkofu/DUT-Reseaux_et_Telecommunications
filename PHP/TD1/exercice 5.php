<?php
$x="PHP5";
echo 'La valeur de la 1ere variable $x est : ', $x, ' et le type est : ', gettype($x), "<br />";
$a[]=&$x;
echo 'La valeur de la 1ere variable $a est : ', $a, ' et le type est : ', gettype($a), "<br />";
$y=" 5 eme version de PHP";
echo 'La valeur de la 1ere variable $y est : ', $y, ' et le type est : ', gettype($y), "<br />";
$z=$y*10;
echo 'La valeur de la 1ere variable $z est : ', $z, ' et le type est : ', gettype($z), "<br />";
$x.=$y;
echo 'La valeur de la 1ere variable $x est : ', $x, ' et le type est : ', gettype($x), "<br />";
$y*=$z;
echo 'La valeur de la 1ere variable $y est : ', $y, ' et le type est : ', gettype($y), "<br />";
$a[0]="MySQL";
echo 'La valeur de la 2eme variable $x est : ', $x, ' et le type est : ', gettype($x), "<br />";
echo 'La valeur de la 2eme variable $a est : ', $a, ' et le type est : ', gettype($a), "<br />";
echo 'La valeur de la 2eme variable $y est : ', $y, ' et le type est : ', gettype($y), "<br />";
echo 'La valeur de la 2eme variable $z est : ', $z, ' et le type est : ', gettype($z), "<br />";
echo 'La valeur de la 1ere variable $a[0] est : ', $a[0], ' et le type est : ', gettype($a[0]), "<br />";
?>