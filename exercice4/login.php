	<?php

		echo '
			<div class="contenu">
				<h3>Travail sur les sessions</h3>
				<p> Merci de saisie vos coordonnées </p>
				<form action="" method="post" class="form" style="padding:0; margin-left:0; background:#bbb;">
					<table style=" padding:0; margin:0; width:100%;">		
						<tr><td> Nom:</td><td>  <input type="text" name="nom" ></td></tr>
						<tr><td> Prénom:</td><td>  <input type="text" name="prenom"></td></tr>
						<tr><td> Passe:</td><td>  <input type="password" name="motPasse"></td></tr>			
					</table>
					
					<input type="submit" name="submit" value="Accéder" class="submit_"  />
					<input type="button" onclick="window.location.href=\'infos.php\';" value="Infos ..." />
					<input type="button" onclick="window.location.href=\'info2.php\';" value="Info2 ..." />
				</form>
				
				<b class="attention" ><br>&#9888;</b>
				<span style="font:italic 0.8em calibri ligth">		
				  Eneregistrer les données ( Bouton Accéder ), avant d\'aller sur les pages infos
			  
				</span>		 
			</div>
			';

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



   
   
