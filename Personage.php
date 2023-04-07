<?php
class Personage{
    public $name ; 
    public $pointDeVie; 
    public $dmg;

    public function __construct($name,$pointDeVie,$dmg){
        $this->name = $name;
        $this->pointDeVie = $pointDeVie;
        $this->dmg = $dmg;

    }

    public function afficher(){
        {
            echo "<br><br>";
            echo "<center>---------------------------------------------------</center>";
            echo "<center>--------------------$this->name--------------------</center>";
            echo "<center>hp : $this->pointDeVie</center>";
            echo "<center>damage : $this->dmg</center>";
            echo "<center>---------------------------------------------------</center>";
            echo "<center>---------------------------------------------------</center>";
            echo "<center>---------------------------------------------------</center>";
            echo "<br><br>";
        }
    }
}


?>