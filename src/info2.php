
	
<?php  
    session_start();
     
    $connexion = '<p><b><a href="index.php" style="text-decoration:none;"> &#9194; Connexion</a></b></p>';	 
    
	if (!empty($_SESSION['nom'])){ // ce if car après la déconnexion i veut pas de variables vides
		echo $_SESSION['nom'].'<br>' ;	   
		echo $_SESSION['prenom'].'<br>' ;
		echo $_SESSION['motPasse'].'<br>';    	
	    echo '<p>&#9200; Actualiser pour voir la durée de votre session: <b>'.(time() - $_SESSION['LAST_ACTIVITY']).' S</b></p>';
	}else{
		echo '<h4>Renseigner une nouvelle session</h4>'.$connexion;
		
	}	
	//logout   
   	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 30)) {
        session_unset(); 
        session_destroy(); 
        echo '<p><span style="color:red">&#9200;</span> Vous êtes déconnecté !</p>'.$connexion ;			
	}    
?>








   
   
