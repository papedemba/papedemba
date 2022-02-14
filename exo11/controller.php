<?php
session_start();
include_once('fonctions.php');

if(isset($_POST['valider'])){
    $nbre=$_POST['nombre'];
    //validnombre($nbre,"nombre",$tab);
    $tab1=[];
    $tab2=[];
    $tab3=[];
    $tabr=[];
    $tab=[];
    $_SESSION['post']=$_POST;
    $moy=moyenne($nbre);
    subdivise($nbre, $moy,$tab1,$tab2,$tab3);
    $tabr = remplissage( $tab1,$tab2,$tab3);
    validnombre($nbre,"nombre",$tab);                                                               
var_dump($tabr['premier']);
echo "<br><br>";
//var_dump($tabr['superieur']);
echo "<br><br>";
//var_dump($tabr['inferieur']);
$_SESSION['tab']=$tabr;
    if(count($tab)==0){
        
    
    }
    else{
        $_SESSION['error']=$tab;
        header('location:index.php');
        exit();
    }
}
else{
    header('location:index.php');
    exit();
}