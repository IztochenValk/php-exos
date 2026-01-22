<?php

    namespace App\Model;

    class Maison{
        public string $nom;
        public float $longueur;
        public float $largeur;

        public function __construct($nom, $longueur, $largeur){
            self::setNom($nom);
            self::setLongueur($longueur);
            self::setLargeur($largeur);
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of longueur
         */ 
        public function getLongueur()
        {
                return $this->longueur;
        }

        /**
         * Set the value of longueur
         *
         * @return  self
         */ 
        public function setLongueur($longueur)
        {
                $this->longueur = $longueur;

                return $this;
        }

        /**
         * Get the value of largeur
         */ 
        public function getLargeur()
        {
                return $this->largeur;
        }

        /**
         * Set the value of largeur
         *
         * @return  self
         */ 
        public function setLargeur($largeur)
        {
                $this->largeur = $largeur;

                return $this;
        }

        public function surface(){
            return $this->longueur * $this->largeur;
        } 

    }