<?php
class personnage{
	protected $pointsVie;
	protected $pointsMana;
	protected $force;
	protected $endurance;
	protected $charisme;
	protected $type;
	protected $competenceSpeciale;

	protected $nom;
	protected $couleur;
	
	public function parler(){
		echo
		"
			<p>
				Je m'appelle <span style=\"color:".$this->couleur.";\">".$this->nom."</span> et je suis ".$this->type.".<br>
				Je possède les caractéristiques suivantes :
			</p>
				<ul>
					<li><span class=\"blue bold\">".$this->pointsVie."</span> points de vie,</li>
					<li><span class=\"blue bold\">".$this->pointsMana."</span> de magie,</li>
					<li>une force de <span class=\"blue bold\">".$this->force."</span>,</li>
					<li>une endurance de <span class=\"blue bold\">".$this->endurance."</span>,</li>
					<li>un charisme de <span class=\"blue bold\">".$this->charisme."</span>,</li>
					<li>une dexterite de <span class=\"blue bold\">".$this->dexterite."</span>,</li>
				</ul>
				<p>Ma compétence spéciale est <span class=\"bold\">\"".$this->competenceSpeciale."\"</span>.</p><br><br><br>
		";
	}
}
include("guerrier.class.php");
include("princesse.class.php");
include("hero.class.php");
include("mage.class.php");
include("archer.class.php");
include("voleur.class.php");
?>