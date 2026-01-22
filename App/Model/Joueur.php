<?php

namespace App\Model;
use App\Model\Des;

class Joueur{

    private string $nom;
    private static int $valeurLancee;
    private Des $des;

    public function __construct($nom,$des){
        self::setNom($nom);
        self::setDes($des);
    }

    public function lancerDes(): int{
        return $this->des->lancer();
    }


    //Accesseurs et mutateurs
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
    public function setNom($nom): Joueur
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of valeurLancee
     */ 
    public function getValeurLancee(): int
    {
        return $this->valeurLancee;
    }

    /**
     * Set the value of valeurLancee
     *
     * @return  self
     */ 
    public function setValeurLancee($valeurLancee): Joueur
    {
        $this->valeurLancee = $valeurLancee;

        return $this;
    }

    /**
     * Get the value of des
     */ 
    public function getDes(): Des
    {
        return $this->des;
    }

    /**
     * Set the value of des
     *
     * @return  self
     */ 
    public function setDes($des): Joueur
    {
        $this->des = $des;

        return $this;
    }
    
}