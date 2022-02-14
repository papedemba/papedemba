<?php
include_once("fonctions.php");
$longueur=rand(1,100);
$largeur=rand(1,100);

$perimetre=peri($longueur,$largeur);

echo "le perimetre est $perimetre <br>";

$surface=surf($longueur,$largeur);

echo "la surface est $surface <br>";

$diagonale=diago($longueur,$largeur);

echo "la diagonale est $diagonale <br>";