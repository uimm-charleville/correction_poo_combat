<?php
class Personage
{
    public $nom ; 
    public $pointDeVie; 
    public $degat;

    public function __construct($nom,$pointDeVie,$degat)
    {
        $this->nom = $nom;
        $this->pointDeVie = $pointDeVie;
        $this->degat = $degat;
    }

    /**
     * La function attaque prend en parametre une classe personnage qui va recevoir les degats
     * @param Personage $personage Le personage qui encaisse les degats
     */
    public function attaque($personage)
    {
        $personage->pointDeVie -= $this->degat;
        echo "<center>-------------------- Attaque de $this->nom sur $personage->nom --------------------</center>";
    }

     /**
     * La fonction vérifie si le personage est vivant et retourne vrai 
     * si il l'est et faux si il l'est pas
     * @return bool si il est vivant ou non 
     */
    public function estVivant(){
        if($this->pointDeVie>=0){
            return true;
        }else{
            return false;
        }
    }

    /**
     * La fonction affiche les données de la classe 
     */
    public function afficher()
    {
            echo "<br><br>";
            echo "<center>---------------------------------------------------</center>";
            echo "<center>--------------------$this->nom--------------------</center>";
            echo "<center>hp : $this->pointDeVie</center>";
            echo "<center>damage : $this->degat</center>";
            echo "<center>---------------------------------------------------</center>";
            echo "<center>---------------------------------------------------</center>";
            echo "<center>---------------------------------------------------</center>";
            echo "<br><br>";
    }
}


?>