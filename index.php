<?php

require __DIR__ . '/vendor/autoload.php';

use App\Model\Personnage;
use App\Model\Guerrier;
use App\Model\Assassin;

use Symfony\Component\VarDumper\VarDumper;

$guerrier = new Guerrier("Genghis Khan", 32, 12, 15);
$assassin = new Assassin("Jack the reaper", 28, 15, 15);

$guerrier->attaquer($assassin);
echo $assassin->getNom() . " n'a désormais plus que " . $assassin->getVie() . " . PV.";
VarDumper::dump($assassin);

$assassin->attaquer($guerrier);
echo $guerrier->getNom() . " n'a désormais plus que " . $guerrier->getVie() . " . PV.";

VarDumper::dump($guerrier);