 <?php
 /*function esvide(int $nbre):bool{
    return empty($nbre);
 }

 function esnombre(int $nbre):bool{
     return is_numeric($nbre);
 }*/
 function validejour($jj,string $key,array &$tab):void
 {
     if(empty($jj))
     {
        $tab[$key]="veillez saisir le champs jour!!!";

     }
     else
     {
        if(is_numeric($jj))
        {
            if($jj>31 or $jj<1)
            {
                $tab[$key]="veillez saisir un nombre compris entre 1 et 31!!!";
            }
        }
        else
        {
            $tab[$key]="veillez saisir un nombre dans le champ jour ";
        }
     }
     
}
 
function validmois($mois,string $key,array &$tab):void
{
    if(empty($mois))
    {
        $tab[$key]="veillez saisir le champs mois!!!";
    }
    else
    {
        if(is_numeric($mois))
        {
           if($mois>12 or $mois<1)
           {
                $tab[$key]="veillez saisir un nombre compris entre 1 et 12!!!";
            }
        
        }
        else
        {
           $tab[$key]="veillez saisir un nombre ";
        }
    }
    
}
 

function valideannee($aa,string $key,array &$tab):void
{
    if(empty($aa))
    {
        $tab[$key]="veillez saisir le champs annee!!!";

    }
    else
    {
        if(!is_numeric($aa))
        {
           
            $tab[$key]="veillez saisir un nombre!!!";
        }
        
    }
    
}

function bissextile($aa):bool
 {
     if(($aa%4==0 && $aa%100!=0) or ($aa%400==0))
     {
         return true;
     }
     return false;
 }
 function nbrjour($aa,$mm):int
 {
     if($mm==4 or $mm==6 or $mm==9 or $mm==11)
     {
         return 30 ;
     }
     else
     {
        if($mm==2)
        {
            if(bisextile($aa))
            {
                return 29 ;
            }
            else
            {
                return 28;
            }

        }
        else
        {
            return 31;
        } 
     }
 }
 function datevalid( $jj,$mm,$aa,$key,array &$tab):void
 {
     $jour=nbrjour($mm,$aa);

     if($jj>$jour)
     {
         $tab[$key]="date invalide";
     }
     

 }
     
     
 function datesuivante($jj, $mm,$aa):void
 {
    
    
        $jour=nbrjour($mm,$aa);

        if($jj!=$jour)
        {
            $jj++;
            
        }

        else{
                $jj=1;

                if($mm==12)
                {
                    $mm=1;
                    $aa++;
                } 
                else
                {
                    $mm++;
                }
            }
       
    echo "la date suivante est $jj/ $mm/ $aa";
 }
 
function dateprecedente($jj,$mm,$aa):void
{
    if($jj!=1)
    {
        $jj--;
    }
    else
    {
        if($mm==1)
        {
          $jj=31;
          $mm=12;
          $aa--;

        } 
        else
        {
            $mm=$mm-1;
          $jj=nbrjour($$mm,$aa);
         

        } 
    }
    echo "la date precedente est $jj/ $mm / $aa";
}




