<?php

namespace App\Model;

class Des{

    private int $nbrface;
    
    // En fait, je n'utilise jamais cet attribut. Il y a sûrement un élément de la logique métier qui m'échappe.
    //Si c'est le score du joueur, je trouve qu'il serait plus logique de le mettre dans la classe "Joueur", directement.
    private int $score; 

    public function __construct($nbrface, $score){
        self::setNbrface($nbrface);
        self::setScore($score);
    }

    public function lancer(): int{
        return mt_rand(1, 6);
    }

    /**
     * Get the value of nbrface
     */ 
    public function getNbrface(): int
    {
        return $this->nbrface;
    }

    /**
     * Set the value of nbrface
     *
     * @return  self
     */ 
    public function setNbrface($nbrface): Des
    {
        $this->nbrface = $nbrface;

        return $this;
    }

    /**
     * Get the value of score
     */ 
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * Set the value of score
     *
     * @return  self
     */ 
    public function setScore($score): Des
    {
        $this->score = $score;

        return $this;
    }
}