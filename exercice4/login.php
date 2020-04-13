
<?php //session_start();  //déja lancé dans entete.php ?>


<!DOCTYPE html>
<html>
<head>
	<title>TP2: Exercice4</title>
	<style>
	    input{     
		    padding:0;		 
        }
	    table input {
		   width:98% ;		  
	    }	   
        /* Liens vers infos.php et infos2.php */	   
	   form input ~ input {		   
		   width:35.5%;
		   margin:0 0 0  4.8%;
	   }

	   .submit_{
		   width:32%;
		   margin:0 0 0 2px;
	   }
	</style>
</head>
<body>
    <div class="contenu">
		<h3>Travail sur les sessions</h3>
		<p> Merci de saisie vos coordonnées </p>
		<form action="" method="post" class="form" style="padding:0; margin-left:0; ">
            <table style=" padding:0; margin:0; width:100%;">		
				<tr><td> Nom:</td><td>  <input type="text" name="nom"></td></tr>
				<tr><td>  Prénom:</td><td>  <input type="text" name="prenom"></td></tr>
				<tr><td>  Mode de passe:</td><td>  <input type="password" name="motPasse"></td></tr>			
            </table>
			<input type="submit" name="submit" value="Accéder" class="submit_"  />
			<input type="button" onclick="window.location.href='infos.php';" value="Infos ..." />
			<input type="button" onclick="window.location.href='info2.php';" value="Info2 ..." />
		</form>
		
	</div>
    </body>
</html>	
<?php
  // la page pointe sur lui même alors on utilise la grosse boucle
  if(isset($_POST['nom']) && !empty($_POST['nom'])){
   $_SESSION['nom'] = $_POST['nom'] ;
   $_SESSION['prenom'] = $_POST['prenom'] ;
   $_SESSION['motPasse'] = $_POST['motPasse'] ;  
  } 
  
  if(!isset($_SESSION['LAST_ACTIVITY']) && empty($_SESSION['LAST_ACTIVITY'])){
	$_SESSION['LAST_ACTIVITY'] = time();  
  }
  

?>


   
   
