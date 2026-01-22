<?php

namespace App\Model;

class Personnage{
    protected string $nom;
    protected int $vie;
    protected int $attaque;
    protected int $defense;

    public function __construct($nom, $vie, $attaque, $defense){
        $this->nom = $nom;
        $this->vie = $vie;
        $this->attaque = $attaque;
        $this->defense = $defense;
    }

    public function attaquer(Personnage $cible){
        $degats = $this->getAttaque() - $cible->getDefense();
        $cible->setVie($cible->getVie() - $degats);
    }

    /**
     * Get the value of nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    protected function setNom(string $nom): Personnage
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of vie
     */ 
    public function getVie(): int
    {
        return $this->vie;
    }

    /**
     * Set the value of vie
     *
     * @return  self
     */ 
    protected function setVie(int $vie): Personnage
    {
        $this->vie = $vie;

        return $this;
    }

    /**
     * Get the value of attaque
     */ 
    protected function getAttaque(): int
    {
        return $this->attaque;
    }

    /**
     * Set the value of attaque
     *
     * @return  self
     */ 
    protected function setAttaque(int $attaque): Personnage
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get the value of defense
     */ 
    protected function getDefense(): int
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @return  self
     */ 
    protected function setDefense(int $defense): Personnage
    {
        $this->defense = $defense;

        return $this;
    }
}
