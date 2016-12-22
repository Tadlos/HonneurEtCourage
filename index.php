<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Hello world!</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta nom="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	</head>
	<body>
		<h1>Nos personnages</h1>
		<?php
			include("class/personnage.class.php");
			$perso1 = new guerrier('Jack');
			$perso2 = new princesse('Zelda');
			$perso3 = new hero('Link');
			$perso4 = new mage('Medivh');
			$perso5 = new archer('Robin');
			$perso6 = new voleur('Robin2');
			$perso1->parler();
			$perso2->parler();
			$perso3->parler();
			$perso4->parler();
			$perso5->parler();
			$perso6->parler();
		?>
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>