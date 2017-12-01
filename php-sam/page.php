<?php
/**
 * Created by PhpStorm.
 * User: Coplan
 * Date: 01/12/2017
 * Time: 11:18
 */



include('authentification.php');


// verification deconnexion

if(isset($_POST['deco'])){
    session_destroy();
    session_start();
}

// initialisation de la variable speudo vide

if(!isset($_SESSION['speudo'])){

    $_SESSION['speudo']="";
}
// si pas de connection, utilisateur pas connecté

if(!isset($_SESSION['Connecter'])){

    $_SESSION['Connecter']=false;
}

// test du speudo et mdp, si il y a un speudo et un mdp en entré

if ((isset($_POST['speudo']) and isset($_POST['mdp'])))
{
    $_SESSION['Connecter'] = connexion($_POST['speudo'],$_POST['mdp']);
    $_SESSION['speudo']=$_POST['speudo'];

}


// si l'utilisateur est connecté : afficher son speudo et un formulaire de deconnexion
// si pas connecté : formulaire connexion

if($_SESSION['Connecter']===true){
    echo"<br></br>";
    echo "utilisateur connecté : ";
    echo $_SESSION['speudo'];
    include 'formulaire_deconnexion.php';
}
else
{
    echo " Vous n'êtes pas connecter";
    include 'formulaire_connexion.php';
}







?>