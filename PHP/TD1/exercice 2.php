<?php
$x="PostgreSQL";
$y="MySQL";
$z=&$x;
$x="PHP 5";
$y=&$x;
echo 'x =', $x;
echo 'y =', $y;
echo 'z =', $z; 
?>