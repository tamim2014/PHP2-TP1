<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title> PHP2: TP1/Exercice1 </title>
	<link rel="stylesheet" href="../style.css" />
	<link rel="shortcut icon" href="../favicon.ico"  />
	<style>
	
	   /*********** ENTREE ***************/
	
	    input{     
		    padding:0.3em 0;		 
        }

	    table input {
		   width:98% ;
           outline:none;
           border:2px solid white;
           background:#eee;			
	    }
		
        /* Liens vers infos.php et infos2.php */   
		
	   form input ~ input {		   
		   width:35.8%;
		   margin:0.1em 0;
		   outline:none;		 
	   }
	   
	   /* Liens vers infos.php et infos2.php */ 
	   
	    form input ~ input ~ input {		   
           float:right;
		   margin-right:4px !important;
		  width:35.8%;
	   }

	   .submit_{
		   width:25%;
		   margin:0 4px 0 2px;
	   }
	   

	   /*********** SORTIE ***************/
	   
	    .affichageExo4{
			  
			/* je laisse la page neutre */
		}
		
	   
	</style>
</head>

<body>
	<div class="barreLeterale">
	  <a href="../index.php"><strong>TP1</strong></a>
	  <a href="../exercice1/index.php">Exercice1</a>
	  <a href="../exercice2/index.php">Exercice2</a>
	  <a href="../exercice3/formulaire.php">Exercice3</a>
	  <a href="#">Exercice4</a>
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
		