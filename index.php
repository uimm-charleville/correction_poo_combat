<?php
require_once('Archer.php');
require_once('Mage.php');

$player1 = new Mage('Axel',100,10);
$player1->afficher();

$player2 = new Archer('Steven',100,9);
$player2->afficher();

do{
    $player1->attaque($player2);
    if($player2->estVivant()) {
        $player2->attaque($player1);
    }else{
        continue;
    }
    $player1->afficher();
    $player2->afficher();
}while($player1->estVivant() &&  $player2->estVivant());


if($player2->pointDeVie > 0 && $player1->pointDeVie <= 0){
    echo $player2->nom." : a gagné";
}elseif($player2->pointDeVie <= 0 && $player1->pointDeVie > 0){
    echo $player1->nom." : a gagné";
}else{
    echo "les deuux ont perdu";
}


