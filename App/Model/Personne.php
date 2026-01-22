<?php

    namespace App\Model;

    class Personne{
        private string $lastname;
        private string $firstname;

        public function __construct($firstname, $lastname){
            self::setFirstname($firstname);
            self::setLastname($lastname);
        }

        public function getNomComplet():string{
            return $this->getFirstname() . " " . $this->getLastname();
        }

        /**
         * Get the value of lastname
         */ 
        public function getLastname(): string
        {
                return $this->lastname;
        }

        /**
         * Set the value of lastname
         *
         * @return  self
         */ 
        public function setLastname($lastname): Personne
        {
                $this->lastname = $lastname;

                return $this;
        }

        /**
         * Get the value of firstname
         */ 
        public function getFirstname(): string
        {
                return $this->firstname;
        }

        /**
         * Set the value of firstname
         *
         * @return  self
         */ 
        public function setFirstname($firstname): Personne
        {
                $this->firstname = $firstname;

                return $this;
        }
    }