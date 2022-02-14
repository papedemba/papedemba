<?php
session_start();
include_once("fonctions.php");

if(isset($_POST["execute"]))
{
    $jour=$_POST["jour"];
    $mois=$_POST["mois"];
    $annee=$_POST["annee"];
    $tab=[];
    validejour($jour,"jour",$tab);
    validmois($mois,"mois",$tab);
    valideannee($annee,"annee",$tab);
    datevalid($jour,$mois,$annee," ",$tab);
    $_SESSION['post']=$_POST;
    if(count($tab)==0)
    {
        datesuivante($jour,$mois,$annee);
        echo"<br>";
        dateprecedente($jour, $mois,$annee);

    }
    else
    {
        $_SESSION['error']=$tab;
        header("location:index.php");
        exit();
    }
    
}
else
{
    header("location:index.php");
    exit();
}
