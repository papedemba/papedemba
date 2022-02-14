<?php
function peri(int $long,int $larg):int{
    return(($long+$larg)*2);
}
function surf(int $long,int $larg):int{
    return($long*$larg);
}
function diago(int $long,int $larg):float{
    return(sqrt(pow($long,2)+pow($larg,2)));
}