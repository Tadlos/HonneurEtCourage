<?php
class mage extends personnage{
	public function __construct($nom){
		$this->pointsVie = 50;
		$this->pointsMana = 90;
		$this->force = 30;
		$this->charisme = 60;
		$this->endurance = 60;
		$this->dexterite = 60; 
		$this->type = "un Mage";
		$this->competenceSpeciale = "La Flèche de Mana";
		$this->nom = $nom;
		$this->couleur = "blue";
	}
}
?>