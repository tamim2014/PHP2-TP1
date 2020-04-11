	
	<h3> TP1: Exercice1</h3>		
	<?php  
	
	   // COLLECTE 
		   
	   //if(isset($_GET["nom"])) $nom = $_GET["nom"];
	   $nom = isset($_GET["nom"]) ? $_GET["nom"] : ''; // évite la "Notice: Undefined variable"
	   if(empty($nom))echo 'Entrer votre nom<br>';
	   
	   $prenom = isset($_GET["prenom"]) ? $_GET["prenom"] : '';
	   if(empty($prenom)) echo 'Entrer votre prenom<br>';
	   
	   $password= isset($_GET["password"]) ? $_GET["password"] : '';
	   if(empty($password)) echo 'Entrer votre password<br>';
	   

	   $punition = isset($_GET["punition"]) ? $_GET["punition"] : '';
	   if(empty($punition)) echo 'Saisir la punition<br>';
	   	   
	   $nbFois = isset($_GET["nbFois"]) ? (int) $_GET["nbFois"] : '';			   
	   if(empty($nbFois))  echo 'Préciser le nbFois<br>';

		  
	   // AFFICHAGE
	   echo '
	   <table>
		 <tr><td >Nom:</td><td >'.$nom.' </td></tr>		 
		 <tr><td >Prénom:</td><td >'.$prenom.'</td></tr>			 		 
		 <tr><td>Mot de passe:</td><td>'.$password.'</td></tr>		 
		 <tr><td>Punition:</td>			 
			 <td>';
				$n = 1;
				while ($n <= $nbFois)
				{
					if($nbFois <= 100 ){
						 echo $punition.'<br/>';
						 
					}else{
					  echo 'Nombre trop grand <br>';
					  break;
					}
					$n++;					
				}
			echo '</td>
		 </tr>
	   </table>    
	   ';
	   
	   /************************************************
	    //Exo2: Question 3
	   // Pour éviter les erreurs: Traiter séparement avant de concatener
	   	$n = 1;
		while ($n <= 10)
		{
			echo $punition.'<br />';
			$n++; 
		}
		*************************************************/	   
   ?>
   <button onclick="window.location.href='form.php';">Formulaire de saisie</button>
   <button onclick="window.location.href='login.php';">Login</button>
   
   
