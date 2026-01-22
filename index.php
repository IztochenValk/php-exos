<?php

require __DIR__ . '/vendor/autoload.php';

use App\Model\CompteBancaire;
use App\Model\Personne;

use Symfony\Component\VarDumper\VarDumper;

$nedFlanders = new Personne("Ned", "Flanders");
$nedFlandersBank = new CompteBancaire($nedFlanders, 18524.36);

$homerSimpson = new Personne("Homer", "Simpson", );
$homerSimpsonBank = new CompteBancaire($homerSimpson, -2152.78);


VarDumper::dump($nedFlandersBank);
VarDumper::dump($homerSimpsonBank);

$nedFlandersBank->transferer($homerSimpsonBank, 5678.24);
