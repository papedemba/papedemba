<?php
function calculatrice(int $a,int $b){
    $somme=$a+$b;
    $expo=pow($a,$b);
    $diff=$a-$b;
    $produit=$a*$b;
    $modulo=fmod($a,$b);
    $div=$a/$b;
    $carre_a=pow($a,2);
    $carre_b=pow($b,2);
    echo "la somme est $somme <br>";
    echo "l'exponentielle est $expo <br>";
    echo "la difference est $diff <br>";
    echo "le produit est $produit <br>";
    echo "le modulo est $modulo <br>";
    echo "la division est $div <br>";
    echo "le carre de a est $carre_a <br>";
    echo "le carre de b est $carre_b <br>";

}