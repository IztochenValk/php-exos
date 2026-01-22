<?php

namespace App\Model;
use App\Model\Personnage;

class Assassin extends Personnage{
    private int $bonusAttaque;
    
    public function __construct($nom, $vie, $attaque, $defense){
        parent::__construct($nom, $vie, $attaque, $defense);
        self::setBonusAttaque(15);

    }

    public function attaquer(Personnage $cible){
        $coupCritique = false;
        $random_number = mt_rand(1, 100);
        if($random_number >= 95){
            $coupCritique = true;
        }
        $degats = $this->getAttaque() + ($coupCritique ? $this->getBonusAttaque() : 0) - $cible->getDefense();
        $cible->setVie($this->getVie() - $degats);
    }

    /**
     * Get the value of bonusAttaque
     */ 
    public function getBonusAttaque(): int
    {
        return $this->bonusAttaque;
    }

    /**
     * Set the value of bonusAttaque
     *
     * @return  self
     */ 
    public function setBonusAttaque($bonusAttaque): Assassin
    {
        $this->bonusAttaque = $bonusAttaque;

        return $this;
    }
}