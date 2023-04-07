<?php
require_once('Personage.php');
$player1 = new Personage('Axel',100,10);
$player1->afficher();

$player2 = new Personage('Steven',100,10);
$player2->afficher();

$player1->attaque($player2);
$player2->attaque($player1);
$player1->afficher();
$player2->afficher();







