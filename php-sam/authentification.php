<?php

include('bdd.php');

// traitement du résultat de la requete de bdd preparation qui reviens sous forme de tableau
// le speudo est en 3eme position dans la bdd et le mdp en 4eme.
// boucle de verification pour tout les différentes adresse mail et mdp


function connexion($speudo, $mdp){
    
    
    $tab = bdd::preparation();
    $boolconnexion = false;
    $i = 0;
    
    foreach($tab as $value){
        $newtab = $tab[$i];
        
        if($newtab[3]==$speudo and $newtab[4]==$mdp){
            $boolconnexion = true;
            echo "utilisateur connecté !";
        }
        
        $i = $i + 1;
        
    }
    
    if($boolconnexion == false){
        echo "connexion refusé!";
        
    }
    
    return $boolconnexion;
        
        
    
   
        
    }
    



?>