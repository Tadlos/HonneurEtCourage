<?php
class guerrier extends personnage{
	public function __construct($nom){
		$this->pointsVie = 90;
		$this->pointsMana = 0;
		$this->force = 90;
		$this->charisme = 30;
		$this->endurance = 80;
		$this->dexterite = 60;
		$this->type = "un Guerrier";
		$this->competenceSpeciale = "La Rage";
		$this->nom = $nom;
		$this->couleur = "red";
	}
}
?>