<?php
	class voleur extends personnage
	{
	public function __construct($nom){
		$this->pointsVie = 70;
		$this->pointsMana = 40;
		$this->force = 50;
		$this->charisme = 40;
		$this->endurance = 60;
		$this->dexterite = 90;
		$this->type = "un Voleur";
		$this->competenceSpeciale = "Le vol à la tire";
		$this->nom = $nom;
		$this->couleur = "dark grey";
		}
	}