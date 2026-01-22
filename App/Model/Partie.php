<?php

namespace App\Model;
use App\Model\Joueur;

class Partie{


    private Joueur $joueur1;
    private Joueur $joueur2;
    private static int $scoreJ1 = 0;
    private static int $scoreJ2 = 0;

    public function __construct($joueur1, $joueur2)
    {
        self::setJoueur1($joueur1);
        self::setJoueur2($joueur2);

    }

    public function lancerPartie(){
        for($i = 1; $i < 6; $i++){
                $nbJ1 = $this->joueur1->lancerDes();
                $nbJ2 = $this->joueur2->lancerDes();

            do{
                if($nbJ1 == $nbJ2){
                    echo "C'est une égalité! Le nombre " . $nbJ1 . " est sorti pour les deux joueurs. On rejoue la manche." . PHP_EOL;
                    $nbJ1 = $this->joueur1->lancerDes();
                    $nbJ2 = $this->joueur2->lancerDes();
                }
                else if($nbJ1 > $nbJ2){
                    echo  $this->joueur1->getNom() . " a obtenu " . $nbJ1 . ", alors que " . $this->joueur2->getNom() . " a obtenu " . $nbJ2 . ". " . $this->joueur1->getNom() . " remporte la manche!" . PHP_EOL;
                    self::$scoreJ1++;
                }
                else{
                    echo  $this->joueur2->getNom() . " a obtenu " . $nbJ2 . ", alors que " . $this->joueur1->getNom() . " a obtenu " . $nbJ1 . ". " . $this->joueur2->getNom() . " remporte la manche!" . PHP_EOL;
                    self::$scoreJ2++;
                }         
            } 
            while($nbJ1 == $nbJ2);
        }

        if(self::$scoreJ1 == self::$scoreJ2++){
            echo "Bon, ben égalité.";
        }
        else if(self::$scoreJ1 > self::$scoreJ2++){
            echo  $this->joueur1->getNom() . " a obtenu " . $nbJ1 . ", alors que " . $this->joueur2->getNom() . " a obtenu " . $nbJ2 . ". " . $this->joueur1->getNom() . " remporte la manche, et la victoire!" . PHP_EOL;
        }
        else{
                echo  $this->joueur2->getNom() . " a obtenu " . $nbJ2 . ", alors que " . $this->joueur1->getNom() . " a obtenu " . $nbJ1 . ". " . $this->joueur2->getNom() . " remporte la manche, et la victoire!" . PHP_EOL;
        }
    }
    /**
     * Get the value of joueur1
     */ 
    public function getJoueur1(): Joueur
    {
        return $this->joueur1;
    }

    /**
     * Set the value of joueur1
     *
     * @return  self
     */ 
    public function setJoueur1(Joueur $joueur1): Partie
    {
        $this->joueur1 = $joueur1;

        return $this;
    }

    /**
     * Get the value of joueur2
     */ 
    public function getJoueur2(): Joueur
    {
        return $this->joueur2;
    }

    /**
     * Set the value of joueur2
     *
     * @return  self
     */ 
    public function setJoueur2(Joueur $joueur2): Partie
    {
        $this->joueur2 = $joueur2;

        return $this;
    }

    /**
     * Get the value of scoreJ1
     */ 
    public function getScoreJ1(): int
    {
        return $this->scoreJ1;
    }

    /**
     * Set the value of scoreJ1
     *
     * @return  self
     */ 
    public function setScoreJ1(int $scoreJ1): Partie
    {
        $this->scoreJ1 = $scoreJ1;

        return $this;
    }

    /**
     * Get the value of scoreJ2
     */ 
    public function getScoreJ2(): int
    {
        return $this->scoreJ2;
    }

    /**
     * Set the value of scoreJ2
     *
     * @return  self
     */ 
    public function setScoreJ2(int $scoreJ2): Partie
    {
        $this->scoreJ2 = $scoreJ2;

        return $this;
    }
}