<!DOCTYPE html>
<html>
<head>
	<title>TP1: Exercice3(proteger une page par mot de passe)</title>
	<link rel="stylesheet" href="../style.css" />
	<link rel="shortcut icon" href="../favicon.ico"  />
	<style>
	    /*********** Zoning ***************/
	    body{
			margin:0;
		}
	   	.barreLeterale {
		 width: 200px;	
		}
		.main {
			margin-left: 200px; 
			padding:5% 10%;
		}
		
		h4, .contenu, footer {
			background-color:white;
		}
		
	    /*********** Entrée ***************/
		

		.contenu {
			border:1px dashed #8c8b8b;
			border-radius:12px; 
			padding:5% 7%;
		 }
		 
		form.saisieExo3 {
			background-color:#aaa; 
			 color: #ececea;
		}
	
		form.saisieExo3 div.paragraphe{	
		   width:100%;
		   padding:0;
        }

		
		
		.exo3 .paragraphe{
			width: 96%;
		}
		 
		.saisieExo3 input{
          width:100%;
          box-sizing: border-box; /*  sinon ça dépasse pour google chrome*/		  
		  margin:0;
		  padding:0.5em 0; 
		  
		  text-align:center;

        }
		.saisieExo3 input ~ input{
			padding:2em 0; 
			box-shadow:
			  0 15px 15px 0 #555 inset,
			  0 -10px 1px 0 #777 inset;
			background-color:#ddd;
				
		}
		

		
        
	
	</style>

</head>
<body>
    <div class="barreLeterale">
	  <a href="../index.php"><strong>TP1</strong></a>
	  <a href="../exercice1/index.php">Exercice1</a>
	  <a href="../exercice2/index.php">Exercice2</a>
	  <a href="#">Exercice3</a>
	  <a href="../exercice4/index.php">Exercice4</a>
	   <a href="#">Sujet</a>
	</div>
	<div class="main"> <!-- se ferme juste avant </body> -->
		<div id="en-tete" > 
			<?php
			setlocale(LC_TIME, 'fra_fra');			 
			echo strftime('%A %d %B %Y, %Hh:%M')."<br/>"; // samedi 04 avril 2020, 23:43 
			?>
			<h4 >Travaux pratiques en PHP - 2ème semestre </h4>			
		</div>