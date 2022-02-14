<?php
include_once("fonction.php");
$x1=rand(1,100);
$x2=rand(1,100);
$y1=rand(1,100);
$y2=rand(1,100);
$distant=distance($x1,$y1,$x2,$y2);

echo "le point est  A($x1,$y1) <br>";

echo "le point est  B($x2,$y2) <br>";

echo "la distance ente A et B est $distant";

    
