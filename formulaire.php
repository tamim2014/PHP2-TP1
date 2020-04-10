<!DOCTYPE html>
<html>
<head>
	<title>TP2: Exercice3</title>
</head>
<body>
	<!-- <form action="pageProtege.php" method="post"> -->
	<form action="" method="post">		 
		Password:<input type="password" name="password" placeholder="Votre mot de passe"  >		
	    <p><input type="submit" name="submit" value="Accéder" ></p>
	</form>
</body>
</html>

<?php  

	$motdepasse = 'abc';

	if(isset($_POST["password"]) AND !empty($_POST["password"] )){		
		// COLLECTE
		$password = $_POST["password"];
		// AFFICHAGE
		$resultat = strcmp($motdepasse,$password);
		if ($resultat !== 0) echo 'mot de passe erroné';		   
		else  echo 'le cheval de Henti Iv était blanc';	
    }		
?>

<!-- 
	 CONCLUSION Exo3:
	  
     Pour eviter les erreurs "<span style="color:#990033">Notice indefined variable</span>":<br> 
	 Mettre tout le code à l'interieur de la condition if isset().
	 
	 Si le traitement se fait dans un autre fichier,
	 on peut éviter ces erreurs sans se taper la grosse boucle.
	 i suffit d'utiliser l'opérateur ternaire pour insptecter les variable :<br>
	 <code>$variable = isset($_POST["name"]) ? $_POST["name"] : '';</code>
-->



