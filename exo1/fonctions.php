<?php
function perimetre(int $cote):float{

    
    return(4*$cote);
    
}
function surface(int $cote):float{
    return($cote*$cote);
}
function diagonal(int $cote):float{
    return(sqrt(2*pow($cote,2)));
}
