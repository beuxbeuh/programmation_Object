<?php

require_once './classes/Voiture.php';
require ('function/affichage.php');

$voiture1 = new Voiture();
$voiture1->couleur = "rouge";
$voiture1->marque = "BMW";

var_dump($voiture1);

$voiture2 = new Voiture();
$voiture2->couleur = "bleue";
$voiture2->marque = "Peugeot";
$voiture2->couleur = "gris";
$voiture2->bande = "avant vers arriere au milieu";
$voiture2->demarage();
dump($voiture2);
