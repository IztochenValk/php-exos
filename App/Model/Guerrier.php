<?php

namespace App\Model;
use App\Model\Personnage;

class Guerrier extends Personnage{
    private int $bonusDefense;
    
    public function __construct($nom, $vie, $attaque, $defense){
        parent::__construct($nom, $vie, $attaque, $defense);
        $this->setBonusDefense(15);
    }

    /**
     * Get the value of bonusDefense
     */ 
    public function getBonusDefense(): int
    {
        return $this->bonusDefense;
    }

    /**
     * Set the value of bonusDefense
     *
     * @return  self
     */ 
    public function setBonusDefense($bonusDefense): Guerrier
    {
        $this->bonusDefense = $bonusDefense;

        return $this;
    }
}