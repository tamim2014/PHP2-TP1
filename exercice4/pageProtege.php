	
	<h3> TP2: Exercice3</h3>	
	<?php  
	
	    // COLLECTE   
	    $motdepasse = 'abc';   	   
	    $password= isset($_POST["password"]) ? $_POST["password"] : '';
		
	    // CONTRÔLE DE SAISIE
		if(empty($password)) echo 'Entrer votre password<br>';	
	     
	    //AFFICHAGE
	    $resultat = strcmp($motdepasse,$password);
		if ($resultat !== 0) echo 'mot de passe erroné';		   
	    else  echo 'le cheval de Henti Iv était blanc';		            
    ?>
   <p><a href="formulaire.php"> Formulaire de saisie </a></p>
   
   
