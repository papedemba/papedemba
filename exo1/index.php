<?php
include_once("fonctions.php");
$cot=rand(1,100);
echo "le cote est $cot <br>";
$peri=perimetre($cot);
$surf=surface($cot);
$diag=diagonal($cot);

echo "le perimetre est $peri <br>";

echo "la surface est $surf <br>" ;

echo "la diagonale est $diag <br>";
?>