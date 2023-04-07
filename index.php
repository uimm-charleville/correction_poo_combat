<?php

require_once('Personage.php');

$player1 = new Personage('Axel',100,10);
$player1->afficher();

$player2 = new Personage('Steven',100,10);
$player2->afficher();

do{
    $player1->attaque($player2);
    $player2->attaque($player1);
    $player1->afficher();
    $player2->afficher();
}while($player1->estVivant() &&  $player2->estVivant());

// metre qui gagne ou si les 2 sont morts 
// if(){

// }
// if(){

// }
// if(){

// }


