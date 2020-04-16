<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title> PHP2: TP1/Exercice1 </title>
	<link rel="stylesheet" href="../style.css" />
	<link rel="shortcut icon" href="../favicon.ico"  />
</head>

<body>
	<div class="barreLeterale">
	  <a href="../index.php"><strong>TP1</strong></a>
	  <a href="../exercice1/index.php">Exercice1</a>
	  <a href="../exercice2/index.php">Exercice2</a>
	  <a href="../exercice3/formulaire.php">Exercice3</a>
	  <a href="#">Exercice4</a>
	</div>
	<div class="main">

		<div id="en-tete" > 
			<?php
			setlocale(LC_TIME, 'fra_fra');			 
			echo strftime('%A %d %B %Y, %Hh:%M')."<br/>"; // samedi 04 avril 2020, 23:43 
			?>
			<h4 >Travaux pratiques en PHP - 2ème semestre </h4>			
		</div>
		

	</div>