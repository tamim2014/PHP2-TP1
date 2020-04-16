<?php 

include 'entete.php'; 

// Formulaire saisie mot de passe
echo '
<div class="contenu exo3">
	<!-- <form action="pageProtege.php" method="post"> -->
	<form action="" method="post" class="saisieExo3 paragraphe" >		 
		<h3>Exercice3: Protection d\'une page</h3>
		<div class="paragraphe "  >
		    <input type="password" name="password" placeholder="Votre mot de passe( abc )"   >		
		    <input type="submit" name="submit" value="Accéder" >
	    </div>
	</form>
	';
 
    // Traitement et affichage de la page protegée
	$motdepasse = 'abc';
	if(isset($_POST["password"]) AND !empty($_POST["password"] )){		
		// COLLECTE
		$password = $_POST["password"];
		// AFFICHAGE
		$resultat = strcmp($motdepasse,$password);
		if ($resultat !== 0) echo '<p class="paragraphe  idS" style="color:red; width:auto;" ><b>Mot de passe erroné ! </b></p>';		   
		else  echo '<p class="paragraphe" style="height:200px;   margin-top:0; width:96%;"> Voici le plus grand secret de tous les temps :<br> "Le cheval d’Henri IV était blanc" </p>';		   	
	}		

	// Réponse au questionnaire de l'exercice3
	echo '	
		
		<span class="idS subQuestion t-transparent" style="margin-top:2em !important; margin-bottom:1em !important; width:91.91%;"> &nbsp;<b style="color:gray"><small class="numero">&#9315;</small> &emsp; Conclusion:  </b></span><br>
		<ul type="square" class="paragraphe petitParagraphe" style="padding-left:20px ; padding-right:5px; "> 
		  <li>
			 <b>Traitement dans le même fichier :</b><br>
			 Pour eviter les erreurs "<b style="color:#990033">Notice indefined variable</b>":<br> 
			 Mettre tout le code à l\'interieur d\'<u>une grosse boucle</u> <b>if</b> qui teste la variable réçue, en utilisant <b>isset()</b> et <b>!empty()</b>
		  </li>
		  <li>
			 <b>Traitement dans un autre fichier :</b><br>
				On peut éviter ces <b style="color:#990033">erreurs</b> sans se taper <u>la grosse boucle</u>.
				i suffit d\'utiliser l\'opérateur ternaire pour insptecter les variable :<br>
				<code class="idS">$variable <b  style="color:#990033">=</b> isset($_POST["name"]) <b class="idS" style="color:#990099">?</b> $_POST["name"] <b class="idS" style="color:#990099">:</b> \'\';</code>
		  </li>
		</ul>
	</div><!-- div.contenu -->
		';
	
   include 'piedPage.php';
   
?>








