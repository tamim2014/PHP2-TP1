<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title> PHP2: TP1/Exercice1 </title>
	<link rel="shortcut icon" href="../favicon.ico"  />
	<link rel="stylesheet" href="../style.css" /> 
	<!-- <link rel="stylesheet" href="styleExo2.css" /> -->
	<style>	
	    /*********** Entrée ***************/
		
		table.saisieExercice2 input{	  
	        max-width:auto; /* width:39%;  blem sersponsive */
          padding:1% 30%;  /* responsive à moitié resolu( superposition à gauche si on réduit l'écran)!! */      	  
          float:right;
       		  
        }
		
	    /*********** Sortie ***************/
	
	    table.affichePunition{
		   color:#f1f1f1;
		}
		table.affichePunition tr{
		   background-color: #555; /* 1ere colone */
		   
		}
		table.affichePunition tr:nth-child(even) {
		   background-color: #8c8b81; 
		}
		table.affichePunition td {
			padding:0.5em 1em ;			
		}				
	</style>

</head>

<body>
    <div class="barreLeterale">
	  <a href="../index.php"><strong>TP1</strong></a>
	  <a href="../exercice1/index.php">Exercice1</a>
	  <a href="#">Exercice2</a>
	  <a href="../exercice3/formulaire.php">Exercice3</a>
	  <a href="../exercice4/index.php">Exercice4</a>
	   <a href="../sujet/index.php">Sujet</a>
	</div>

	<div class="main">
		<div id="en-tete" > 
			<?php
				 setlocale(LC_TIME, 'fra_fra');			 
				 echo strftime('%A %d %B %Y, %Hh:%M')."<br/>"; // samedi 04 avril 2020, 23:43 
			?>
			<h4 >Travaux pratiques en PHP - 2ème semestre </h4>			
		</div>
		