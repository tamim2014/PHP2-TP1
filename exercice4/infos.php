	
<?php  
    //session_start();

    include 'entete.php'; 	
	
	echo '<div class="contenu">';
   
		$deconnexion = '<p><b><a href="logout.php" style="text-decoration:none;"> &#9194; Déconnexion</a></b></p>';
		
		if (!empty($_SESSION['nom'])){ 
			echo '<p>Vous avez stocké les donnés suivantes:</p>' ;	
			echo '<b>Nom: </b>........................ '.$_SESSION['nom'].'<br>' ;	   
			echo '<b>Prénom: </b>................... '.$_SESSION['prenom'].'<br>' ;
			echo '<b>Mot de passe: </b>.......... '.$_SESSION['motPasse'].'<br>';
			echo $deconnexion ;                      
		}else{
			echo '<h3 class="idS" style="color:#990066; border:none ; "> &nbsp;&nbsp; Renseigner une nouvelle session !</h3>';
			echo '<p><a href="logout.php" style="text-decoration:none;">&#9194; Connexion </a></p>';  
		}
		
    echo '</div><!-- contenu -->';


	include 'piedPage.php'; 
		   
?>



   
   
