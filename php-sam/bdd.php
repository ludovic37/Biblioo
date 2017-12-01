<?php



class bdd 
{
    
    private $adresseBDD;
    private $login;
    private $password;
    private $maBDD;
    
    // connexion à une bdd
    public function __construct($adresseBDD, $login, $password){
        $this->adresseBDD = $adresseBDD;
        $this->login = $login;
        $this->password = $password;
        
        try
        {
        $this->maBDD = new PDO( $this->adresseBDD , $this->login , $this->password ) ; 
        
        echo "<br></br> Connection base de donnée établie <br></br>";
        }
        catch (Exception $e)
        {
        echo "err"; 
    
        }
        
    }

    // return la requete prepare sous forme de tableau,
    // voir le traitemement du tableau dans connexion de authentification.php

    public function preparation(){
        
        $base = new bdd("mysql:host=192.168.30.125; dbname=biblio","root","dadfba16");
        $prep = $base->maBDD->prepare('Select * from administration');
        $prep->execute();
        
        $tab = $prep->fetchall();
        return $tab;
               
    }

    // fonction inutilisé pour l'instant
    
    public function poster($utilisateur, $texte){
        $base = new bdd("mysql:host=192.168.30.125; dbname=biblio","root","dadfba16");
        $prep = $base->maBDD->prepare('INSERT INTO article(utilisateur, texte) VALUES(:utilisateur, :texte)');
        $prep-> execute(array(
	   'utilisateur' => $utilisateur,
	   'texte' => $texte
        ));
    }
        
        
    

}
?>