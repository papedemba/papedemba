<?php
session_start();
include_once('fonctions.php');

if(isset($_POST['valider'])){
    $nbre=$_POST['nombre'];
    $tab=[];
    $_SESSION['post']=$_POST;
    validnombre($nbre,'nombre',$tab);
    if(count($tab)==0){
        liste($nbre);
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