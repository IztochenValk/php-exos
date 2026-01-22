<?php

    namespace App\Model;

    class Vehicule{
        private string $nom;
        private int $nbrRoue;
        private float $vitesse;
        private static array $allVehicule = [];

        //Pour tester, j'ai défini les attributs de l'objet via les setters
        //Visuellement c'est bizarre mais ça marche

        public function __construct($nom, $nbrRoue, $vitesse){
            self::setNom($nom);
            self::setNbrRoue($nbrRoue);
            self::setVitesse($vitesse);

            array_push(self::$allVehicule, $this); 

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
        public function setNom($nom): Vehicule
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of nbrRoue
         */ 
        public function getNbrRoue(): int
        {
                return $this->nbrRoue;
        }

        /**
         * Set the value of nbrRoue
         *
         * @return  self
         */ 
        public function setNbrRoue($nbrRoue): Vehicule
        {
                $this->nbrRoue = $nbrRoue;

                return $this;
        }

        /**
         * Get the value of vitesse
         */ 
        public function getVitesse(): float
        {
                return $this->vitesse;
        }

        /**
         * Set the value of vitesse
         *
         * @return  self
         */ 
        public function setVitesse($vitesse): Vehicule
        {
                $this->vitesse = $vitesse;

                return $this;
        }

        public function detect() : string{
            if($this->getNbrRoue(2)){
                return "Voiture";
            }
            else if($this->getNbrRoue(4)){
                return "Moto";
            }
            else{
                return "Piéton/cheval/avion/Vaisseau spatial/autre (précisez)";
            }
        }

        public function boost() : void{
            $this->setVitesse($this->getVitesse() + 50);
        }

        public static function plusRapide(): Vehicule{

            $fastestSpeed = 0;
            $fastestName = '';

            foreach(self::$allVehicule as $vroumvroum){
                if($vroumvroum->getVitesse() > $fastestSpeed){
                    $fastestSpeed = $vroumvroum->getVitesse();
                    $fastestName = $vroumvroum->getNom();
                    $fastestVroumvroum = $vroumvroum;
                }
            }

            echo "Le véhicule le plus rapide est " . $fastestName . " avec une vitesse de " . $fastestSpeed . "km/h!" . PHP_EOL;
            return $fastestVroumvroum;
        }
    }