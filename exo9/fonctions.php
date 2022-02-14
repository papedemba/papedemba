<?php
function table($nbre){
      $res=1;
    for($i=1;$i<=10;$i++){
        $res=$nbre*$i;
        echo "$nbre*$i=$res <br>";

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
