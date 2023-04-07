<?php
class Personage{
    public $nom ; 
    public $pointDeVie; 
    public $degat;

    public function __construct($nom,$pointDeVie,$degat){
        $this->nom = $nom;
        $this->pointDeVie = $pointDeVie;
        $this->degat = $degat;

    }

    public function attaque($personage){
        $personage->pointDeVie -= $this->degat;
        echo "<center>-------------------- Attaque de $this->nom sur $personage->nom --------------------</center>";

    }

    public function afficher(){
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
}


?>