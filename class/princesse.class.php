<?php
class princesse extends personnage{
	public function __construct($nom){
		$this->pointsVie = 60;
		$this->pointsMana = 40;
		$this->force = 40;
		$this->charisme = 90;
		$this->endurance = 60;
		$this->dexterite = 60;
		$this->type = "une Princesse";
		$this->competenceSpeciale = "L'envoûtement";
		$this->nom = $nom;
		$this->couleur = "#D71BF0";
	}
}
?>