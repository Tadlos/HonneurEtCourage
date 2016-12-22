<?php
	class archer extends personnage
	{
	public function __construct($nom){
		$this->pointsVie = 60;
		$this->pointsMana = 40;
		$this->force = 40;
		$this->charisme = 60;
		$this->endurance = 60;
		$this->dexterite = 90;
		$this->type = "un Archer";
		$this->competenceSpeciale = "Le tir foudroyant";
		$this->nom = $nom;
		$this->couleur = "green";
		}
	}