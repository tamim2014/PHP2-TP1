<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<style>
		.info2{
			margin-top:1.5em;
			display:inline-block;
			border-top: 1px solid #aaa;
			border-right:1px solid #aaa;	
		}
		
		table.info2 tr td{
		    width:auto;   
		    margin:2px 5px  10px 5px ;
		    border:2px solid gray;
		    background-image: linear-gradient(180deg, #fff, #ddd 90%, #ccc) !important;
		    border-bottom: 0; 
		    border-right: 0;
		    float: right;
		    padding: 2px 10px; 
		    border-radius: 5px;
		}
		hr{
			width:46%;
			float:left;
		}
	</style>
</head>
<body style="width:80%; margin-left:auto; margin-right:auto; margin-top:10%; font-size:28px;"  >	
<?php  
   
     
    $connexion = '<p ><b><a href="index.php" style="text-decoration:none;"> &#9194; Connexion</a></b></p>';	 
    
	if (!empty($_SESSION['nom'])){ // ce if car après la déconnexion i veut pas de variables vides
		echo '<p>Vous avez stocké les donnés suivantes:</p>' ;	
		echo '<b>Nom: </b>........................ '.$_SESSION['nom'].'<br>' ;	   
		echo '<b>Prénom: </b>................... '.$_SESSION['prenom'].'<br>' ;
		echo '<b>Mot de passe: </b>.......... '.$_SESSION['motPasse'].'<br>';
        echo '<hr><br><p>Actualiser pour voir la durée de votre session:</p>' ;	    	
	    //echo '<p><table border="5" class="info2"><tr><td>&#9200;</td></tr></table> <span style="dispaly:block; width:50px;">  &#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9658; </span>  <table border="5" class="info2"><tr><td> <b>'.(time() - $_SESSION['LAST_ACTIVITY']).' S</b></td></tr></table></p>';
		// ça ne marche pas avec stream_set_timeout()
		$dureeSession = (time() - $_SESSION['LAST_ACTIVITY']);
		echo '<p><table border="5" class="info2"><tr><td>&#9200;</td></tr></table> <span style="dispaly:block; width:50px;">  &#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9867;&#9658; </span>  <table border="5" class="info2"><tr><td> <b>'.$dureeSession.' S</b></td></tr></table></p>';

	}else{
		echo '<h2>Renseigner une nouvelle session</h2>'.$connexion;
		
	}	
	//logout   
   	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 30)) {
        session_unset(); 
        session_destroy(); 
        echo '<p><table border="5"  class="info2"><tr><td ><span style="color:red">&#9200;</td></tr></table> Vous êtes déconnecté !</p>'.$connexion ;			
	}    
?>
</body>
</html>








   
   
