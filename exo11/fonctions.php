<?php
function remplissage(array &$tab1,array &$tab2,array &$tab3):array{
   
    $tabr['premier']=$tab1;
    $tabr['inferieur']=$tab2;
    $tabr['superieur']=$tab3;
    return $tabr;


}
function subdivise($nbre,float $moy,array &$tab1,array &$tab2,array &$tab3):void{
        for($i=1;$i<=$nbre;$i++){
            if(premier($i)){
                $tab1[]=$i;
            }
            if($i<$moy){
                $tab2[]=$i;
            }
            elseif($i > $moy){
                $tab3[]=$i;
            }
        }
}
function moyenne($nbre):float{
    $somme=0;
    for($i=1;$i<=$nbre;$i++){
        $somme=$somme+$i;
    }
    $moy=$somme/$nbre;
    return $moy;
}
function premier($nbre):bool{
    for($i=2;$i<=$nbre/2;$i++){
        if($nbre%$i==0){
            return false;
        }
        
    }
    return true;
}
function validnombre($nbre,string $key,array &$tab):void
{
    if(empty($nbre))
    {
        $tab[$key]="veillez saisir le champs!!!";

    }
    else
    {
        if(is_numeric($nbre))
        {
            if($nbre<10000){
           
            $tab[$key]="veillez saisir un nombre superieur à 10000";
            }
           
        }
        
    }
    
}
