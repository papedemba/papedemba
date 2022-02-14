<?php
function liste($nbre){
    for($i=1;$i<=$nbre;$i++){
        echo '<li>'.$i.'</li>';
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