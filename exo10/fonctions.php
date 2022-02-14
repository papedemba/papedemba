<?php
function section($nbre){
    for($i=1;$i<=$nbre;$i++){
        
        echo "<br> <input> <br>";

    }
}
function validnombre($nbre,string $key,array &$tab):void
{
    if(empty($nbre))
    {
        $tab[$key]="veillez saisir le champs!!!";

    }
    else
    {
        if(!is_numeric($nbre))
        {
           
            $tab[$key]="veillez saisir un nombre!!!";
        }
        
    }
    
}
