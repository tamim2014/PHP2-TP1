
	
<?php  
   session_start(); 
   
	$deconnexion = '<p><b><a href="logout.php" style="text-decoration:none;"> &#9194; Déconnexion</a></b></p>';
	
    if (!empty($_SESSION['nom'])){ 
	   echo $_SESSION['nom'].'<br>' ;	   
	   echo $_SESSION['prenom'].'<br>' ;
	   echo $_SESSION['motPasse'].'<br>';
	   echo $deconnexion ;                      
	}else{
	   echo '<h4>Renseigner une nouvelle session !</h4>';
	   echo '<p><a href="logout.php" style="text-decoration:none;">&#9194; Connexion </a></p>';  
	}
		   
?>
<!--
<p><a href="logout.php"> Déconnexion </a></p>
--> 


   
   
