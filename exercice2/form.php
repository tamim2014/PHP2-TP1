
<?php  

    echo '
		<div class="contenu" style="padding:5%;">	
			<b> Exercice2: </b> Transmissionde données( get vs post )
			<form action="corps.php" method="get" class="form" style="padding:0; margin-left:0;">   
			   <table class="saisieExercice2" style=" padding:0 ; margin:0 ; width:100%;" >
				 <tr><td>Nom :</td><td><input type="text" name="nom" ></td></tr>
				 <tr><td>Prénom:</td><td><input type="text" name="prenom"></td></tr>
				 <tr><td>Password:</td><td><input type="password" name="password" ></td></tr>
				 <tr><td>Punition:</td><td><input type="text" name="punition"></td></tr>
				 <tr><td>nbFois:</td><td><input type="number" name="nbFois" value="10"></td></tr>
				 
				 <tr ><td colspan="2" ><input type="submit" name="submit" value="Envoyer"  style="width:100%;"></td></tr>
			   </table>
			</form>';

	
	// Questionnaire de L\'exercic2
	
	echo '
			<span class="idS subQuestion t-transparent"> &nbsp;<b style="color:gray">&bull;</b>&emsp; 4.6&emsp; <span style="color:#990033">Quel danger pour le passage des pramètres</span>(au niveau de l\'URL)</span>
			<div class="paragraphe">
				N\'importe qui peut modifier les paramètres(voir même les supprimer )
				dans la barre d\'adresse de son navigateur !
			</div>
			<span class="idS subQuestion t-transparent" style="margin-top:0 !important; margin-bottom:1em !important; width:91.91%;"> &nbsp;<b style="color:gray"><small class="numero">&#9316;</small> &emsp; Failles XSS &emsp; <i style="color:#115;">Injection de code HTML/JS</i> </b></span><br>
			&emsp;<b style="line-height:1.5em">Vulnérabilté  du fichier traitement</b>(corps.php)<p></p>
			&emsp;Il peut être appelé par n\'importe quelle page( pas seulement form.php)
			
			
			<ul type="disc" class="questions_" >
				 <li>Quelle conséquence ?! </li>
				 <li>Et si on met du code HTML dans le champs <b>nom</b> !</li>
				 <li>Et si on y gave du javascript !! </li>		
			</ul>
			<div class="paragraphe" style="margin-top:0;">
				<ul type="square">
				   <li><b>Conséquence</b>: Modifier son contenu pour "passer" le formulaire de login </li>
				   <li><b>Injection HTML</b>: Une balise &lt;a&gt; pour rediriger l\'utilisateur vers un autre site qui réaffiche la valeur du champs <b>Nom</b></li>
				   <li><b>Injection javaScript</b>: Voler le cookie contenant les paramètres de connexion( en utilisant une rédirection javaScript)</li>
				</ul>							
			</div>
		</div><!-- div.contenu -->
    ';

?>

