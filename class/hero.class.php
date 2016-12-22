<?php
class hero extends personnage{
	public function __construct($nom){
		$this->pointsVie = 110;
		$this->pointsMana = 50;
		$this->force = 50;
		$this->charisme = 50;
		$this->endurance = 50;
		$this->dexterite = 50; 
		$this->type = "un Héro";
		$this->competenceSpeciale = "La Bravoure";
		$this->nom = $nom;
		$this->couleur = "#FF6C00";
	}
}
?>