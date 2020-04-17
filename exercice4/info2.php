
	
<?php 
	  include 'enteteInfo2.php' ;

	   echo '<div class="contenu">';
 
		$connexion = '<p ><b><a href="index.php" style="text-decoration:none;"> &#9194; Connexion</a></b></p>';	 
		
		if (!empty($_SESSION['nom'])){ // ce if car après la déconnexion i veut pas de variables vides
			echo '<p>Vous avez stocké les donnés suivantes:</p>' ;	
			echo '<b>Nom: </b>........................ '.$_SESSION['nom'].'<br>' ;	   
			echo '<b>Prénom: </b>................... '.$_SESSION['prenom'].'<br>' ;
			echo '<b>Mot de passe: </b>.......... '.$_SESSION['motPasse'].'<br>';
			echo '<br><p>Actualiser pour voir la durée de votre session:</p>' ;	    	

			$dureeSession = (time() - $_SESSION['LAST_ACTIVITY']);
			echo '<p><table border="5" class="info2" style="float:left"><tr><td>&#9200;</td></tr></table> <div style="float:left; padding-top:0.5em;">  &#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9658;</div><table border="5" class="info2"><tr><td> <b>'.$dureeSession.' S</b></td></tr></table></p>';

		}else{
			echo '<h2>Renseigner une nouvelle session</h2>'.$connexion;
			
		}	
		//logout   
		if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 30)) {
			session_unset(); 
			session_destroy(); 
			echo '<p><table border="5"  class="info2" style="float:left"><tr><td ><span style="color:red">&#9200;</td></tr></table><div class="msgDeconnexion" >&nbsp;&nbsp;Vous êtes déconnecté !</div></p><br><p style="margin:4em 2em 2em 0;">'.$connexion.'</p>' ;			
		}    

	   echo '</div><!-- contenu -->';
	

	  include 'piedPage.php' 
?>









   
   
