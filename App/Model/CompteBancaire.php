<?php

namespace App\Model;
use App\Model\Personne;

class CompteBancaire{

	private Personne $titulaire;
	private float $solde;
	private string $IDCompte;
	

	public function __construct($titulaire, $solde = 0){
		$this->titulaire = $titulaire;
		$this->solde = $solde;
		$this->IDCompte = mt_rand(1000000000, 9999999999);
	}
	public function deposer(float $argent): string{
			if($argent <= 0){
					return 'Vous ne pouvez pas ajouter une somme nulle ou négative' . PHP_EOL;
			}
			$this->setSolde($this->getSolde() + $argent);
				return $this->titulaire->getNomComplet() . ', votre compte a bien été crédité de ' . $argent . '€. Votre solde est à présent de ' . $this->getSolde() . '€' . PHP_EOL;
		}

	public function retirer(float $argent): string{
		if($argent > $this->solde){
				return 'Vous ne pouvez pas retirer plus que le total de votre solde' . PHP_EOL;
		}
		if($argent <= 0){
				return 'Vous ne pouvez pas retirer une somme nulle ou négative' . PHP_EOL;
		}

		$this->setSolde($this->getSolde() + $argent);
		return $this->titulaire->getNomComplet() . ', votre compte a bien été débité de ' . $argent . '€. Votre solde est à présent de ' . $this->getSolde() . '€' . PHP_EOL ;
	}

	public function transferer(CompteBancaire $destinataire, $argent){
					//On vérifie que le destinataire n'est pas l'expéditeur
					//Pour ne pas se transférer de l'argent à soi-même lol

		if($this->IDCompte == $destinataire->IDCompte){
			return "On ne peut pas se transférer de l'argent à soi-même" . PHP_EOL;
		}
		if($argent <= 0){
				return 'Vous ne pouvez pas transférer une somme nulle ou négative' . PHP_EOL;
		}
		if($argent > $this->solde){
				return 'Vous ne pouvez pas transférer plus que le total de votre solde' . PHP_EOL;
		}

		$this->setSolde($this->getSolde() - $argent);
		$destinataire->setSolde($destinataire->getSolde() + $argent);
		echo $this->titulaire->getNomComplet() . ', votre compte a bien été débité de ' . $argent . '€. Votre solde est à présent de ' . $this->getSolde() . '€' . PHP_EOL ;
		echo "Le compte de " . $destinataire->titulaire->getNomComplet() . ' a bien été crédité  de ' . $argent . '€. Son solde est à présent de ' . $destinataire->getSolde() . '€' . PHP_EOL;

	}

	public function afficher(){
		return 'Titulaire: ' . $this->titulaire->getNomComplet() . ' \n Solde: ' . $this->solde . '€' . PHP_EOL;

	}

	/**
	 * Get the value of titulaire
	 */ 
	public function getTitulaire(): Personne
	{
		return $this->titulaire;
	}

	/**
	 * Set the value of titulaire
	 *
	 * @return  self
	 */ 
	public function setTitulaire($titulaire): CompteBancaire
	{
		$this->titulaire = $titulaire;

		return $this;
	}

	/**
	 * Get the value of solde
	 */ 
	public function getSolde(): float
	{
		return $this->solde;
	}

	/**
	 * Set the value of solde
	 *
	 * @return  self
	 */ 
	public function setSolde($solde): CompteBancaire
	{
		$this->solde = $solde;

		return $this;
	}
}