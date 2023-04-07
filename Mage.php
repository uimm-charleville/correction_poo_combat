<?php
require_once('Personage.php');
class Mage extends Personage{
    public $CHANCE_DE_FEUX = 0.50;
    public $degatFeux;
        public function __construct($nom,$pointDeVie,$degat){
        parent::__construct($nom,$pointDeVie,$degat);
        $this->degatFeux = rand(10,30);
    }

    public function attaque($personage){
        parent::attaque($personage);
        if(rand(0,1) <= $this->CHANCE_DE_FEUX){
            $personage->pointDeVie -= $this->degatFeux; 
            echo "<center>-------------------- Attaque de feux de $this->nom sur $personage->nom --------------------</center>";
        }
    }
}
?>