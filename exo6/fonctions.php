<?php


   function validNombre($nbre,string $key,array &$arrError ):void{
    if(estVide($nbre)){
        $arrError[$key]="Veullez saisir une valeur";
    }else{
        if(!estNombre($nbre)){
            $arrError[$key]="Veullez saisir un nombre";
        }
    }

    
   }
   function estNombre($nbre):bool{
       return is_numeric($nbre); 
   }
   function estVide($nbre):bool{
    return empty($nbre); 
}

function equationSecondDegre(float $a,float $b,float $c){
        $delta=pow($b,2)-4*$c*$a;
        //<- :affectation +>  =
        //== ou ===
        if($delta==0){
            echo "La solution est ".(-1*$b/2*$a);
            
        }
        elseif($delta>0){
            echo "les raccines sont x1= ".(-$b-sqrt($delta))/(2*$a)." et x2= ".(-$b+sqrt($delta))/(2*$a);
        }
        else{
            echo "pas de solutions dans R";
        }
}