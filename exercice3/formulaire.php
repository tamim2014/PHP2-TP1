<!DOCTYPE html>
<html>
<head>
	<title>TP1: Exercice3(proteger une page par mot de passe)</title>
	<link rel="stylesheet" href="../style.css" />
	<link rel="shortcut icon" href="../favicon.ico"  />

</head>
<body>
    <div class="barreLeterale">
	  <a href="../index.php"><strong>TP1</strong></a>
	  <a href="../exercice1/index.php">Exercice1</a>
	  <a href="../exercice2/form.php">Exercice2</a>
	  <a href="#">Exercice3</a>
	  <a href="../exercice4/index.php">Exercice4</a>
	</div>

	<!-- <form action="pageProtege.php" method="post"> -->
	<form action="" method="post">		 
		<h1>Exercice3</h1>
		<input type="password" name="password" placeholder="Votre mot de passe( abc )" style=" padding:0.5em 0; width:99%; text-align:center; "  >		
	    <input type="submit" name="submit" value="Accéder" style="margin-left:0; padding:2em 0; width:100%; " >
	</form>
	
	<?php  

		$motdepasse = 'abc';
		if(isset($_POST["password"]) AND !empty($_POST["password"] )){		
			// COLLECTE
			$password = $_POST["password"];
			// AFFICHAGE
			$resultat = strcmp($motdepasse,$password);
			if ($resultat !== 0) echo '<p class="paragraphe idS"><b style="color:red">Mot de passe erroné ! </b></p>';		   
			else  echo '<p class="paragraphe" style="height:600px; width:91.5%; margin-top:0;"> Voici le plus grand secret de tous les temps :<br> "Le cheval d’Henri IV était blanc" </p>';		   	
		}		
    ?>
	
	
	
	<span class="idS subQuestion t-transparent" style="margin-top:2em !important; margin-bottom:1em !important; width:91.91%;"> &nbsp;<b style="color:gray"><small class="numero">&#9315;</small> &emsp; Conclusion:  </b></span><br>
	<ul type="square" class="paragraphe petitParagraphe" style="padding-left:20px ; padding-right:5px;"> 
	  <li>
		 <b>Traitement dans le même fichier :</b><br>
		 Pour eviter les erreurs "<b style="color:#990033">Notice indefined variable</b>":<br> 
		 Mettre tout le code à l'interieur d'<u>une grosse boucle</u> <b>if</b> qui teste la variable réçue, en utilisant <b>isset()</b> et <b>!empty()</b>
	  </li>
	  <li>
		 <b>Traitement dans un autre fichier :</b><br>
			On peut éviter ces <b style="color:#990033">erreurs</b> sans se taper <u>la grosse boucle</u>.
			i suffit d'utiliser l'opérateur ternaire pour insptecter les variable :<br>
			<code class="idS">$variable <b  style="color:#990033">=</b> isset($_POST["name"]) <b class="idS" style="color:#990099">?</b> $_POST["name"] <b class="idS" style="color:#990099">:</b> '';</code>
	  </li>
	</ul>

</body>
</html>







