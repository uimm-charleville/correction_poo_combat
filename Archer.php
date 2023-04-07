<?php 
require_once('Personage.php');
class Archer extends Personage{

    public $CHANCE_DE_CC = 0.30;
    public $degatCC;
        public function __construct($nom,$pointDeVie,$degat){
        parent::__construct($nom,$pointDeVie,$degat);
        $this->degatCC = rand(25,40);
    }

    public function attaque($personage){
        parent::attaque($personage);
        if(rand(0,1) <= $this->CHANCE_DE_CC){
            $personage->pointDeVie -= $this->degatCC; 
            echo "<center>-------------------- Coup critique de $this->nom sur $personage->nom --------------------</center>";
        }
    }
    
}