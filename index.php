<?php

require __DIR__ . '/vendor/autoload.php';

use App\Model\Partie;
use App\Model\Joueur;
use App\Model\Des;

use Symfony\Component\VarDumper\VarDumper;

$desJ1 = new Des(0, 6);
$desJ2 = new Des(0, 6);

$nedFlanders = new Joueur("Ned Flanders", $desJ1);
$homerSimpson = new Joueur("Homer Simpson", $desJ2);



$partie = new Partie($nedFlanders, $homerSimpson);
$partie->lancerPartie();