<!DOCTYPE html>
<html>
<head>
	<title>TP1: Exercice2</title>
	<link rel="stylesheet" href="style.css" />
	<link rel="shortcut icon" href="favicon.ico"  />
	<style>
		body{
			margin:0;
		}
		.barreLeterale {
		 width: 200px;	
		}
		.main {
			margin-left: 200px; 
			font-size: 18px; 
			padding: 0px 10px;
		}
		.paragraphe{
			padding-left:2em;
			width:90%;
		}
		summary{
			margin-right:1.8%;
		  	outline:none !important;
			border:none !important;
		}
		.exemple{
			width:60%; 
			margin-bottom:0.4em;
		}
		pre{
			white-space:pre-line; 
			padding-left:2em !important;
			color:#999;
			
		}	
	</style>
</head>
<body>
    <div class="barreLeterale">
	  <a href="#"><strong>TP1</strong></a>
	  <a href="exercice1/index.php">Exercice1</a>
	  <a href="exercice2/form.php">Exercice2</a>
	  <a href="exercice3/formulaire.php">Exercice3</a>
	  <a href="exercice4/index.php">Exercice4</a>
	</div>
	<div class="main">
    <h1 > Questionnaire </h1>
	
		<p><u><a href="#"><strong>Rappels:</strong> </a></u></p>
		<span class="idS subQuestion t-transparent" style="margin-top:0 !important; width:91.91%;"> &nbsp;<b style="color:gray">&bull; &emsp; Rappel sur les types </b></span>
		<ul type="none" style="line-height:1.5">
			 <li>
				<details>
				  <summary>Expliquer les 5 principaux types de variables<br>&emsp;(sans oublier les variables pr&eacute;d&eacute;finies)</summary>
				  &emsp;&#8718; les types primitifs(integer, double, string)<br>
				  &emsp;&#8718; les float<br>
				  &emsp;&#8718; les booléens<br>
				</details>
			 </li>
			 <li>		     
				 <details>
				  <summary>Pour afficher les "string", on prèfère les quotes ou les guillemets ?<br>&emsp;Expliquer  Pourquoi </summary>
				  &emsp;&#8718; Les quotes<br>
				  &emsp;&#8718; &Ccedil;a all&egrave;ge le traitement<br>
				</details>
			 </li>
		</ul>
		<span class="idS subQuestion t-transparent" style="margin-top:0 !important; width:91.91%;"> &nbsp;<b style="color:gray">&bull; &emsp; Rappel sur les boucles </b></span>
		<ul type="none" style="line-height:1.5">
			 <li>
				<details>
				  <summary>Quelles &ne; entre if-else, elseif, switch et l'opérateur ternaire ‘ <b>? :</b>’ ?</summary>
				   <ul type="square" class="paragraphe petitParagraphe"> 
					  <li>
						 Un switch est l'équivalent d'une succession de bloc if/else if/else<br>
						 Très rapide: accède une seul fois &agrave; la cellule mémoire afin de la comparer aux "case".
					  </li>
					  <li>
						 Alors qu'une succession de bloc if/else accède plusieurs fois à l'élément à comparer.
					  </li>
				   </ul>
				</details>
			 </li>
			 <li>						      
				<details>
				  <summary>Quelle &ne; entre <b>while</b> et <b>for </b>?</summary>
				   <ul type="square" class="paragraphe petitParagraphe" style="margin-bottom:0.4em !important; "> 
					  <li>
						 <b>for</b>: Repète la "<b><i>punition</i></b>" un "<b><i>nbFois</i></b>" précis et puis c'est tout.
					  </li>
					  <li>
						 <b>while</b>: Lui, il est dingue! On peut l'foutre n'importe quoi, elle va répeter la "<b><i>punition</i></b>" tant que la connerie n'est pas vraie.<br><br> Même si <i style="color:#990033"> "condition = dateFinDuMonde"</i>, elle continue d'afficher la "<b><i>punition</i></b>"" jusqu'à planter la machine.
					  </li>
				   </ul>
					<span>Un exemple avec <b>while</b></span>							   

					<div class="exemple">
					   <span class="idS subQuestion t-transparent" style="margin-top:0 !important; width:91.91%; background:white !important;">
						   <pre >
								&lt;?php  	
									$n = 1;
									$nbFois = 10;
									while( $n &lt;= $nbFois ){
										&emsp; echo $punition.'&lt;br/>';		
										&emsp; $n++; 
									}
								?>
							</pre>
					    </span> 
					</div>								
				    <span>Un exemple avec <b>for</b></span>
					<div class="exemple">
						<span class="idS subQuestion t-transparent" style="margin-top:0 !important; width:91.91%; background:white !important;">
						<pre>
							&lt;?php  	
								$nbFois = 10;
								for( $i=0; $i &lt;= $nbFois; $i++ ){
									&emsp; echo $punition.'&lt;br/>';		
								}
							?>
						</pre>
						</span> 
					</div>
                </details>
			</li>
		</ul>
	    <span class="idS subQuestion t-transparent" style="margin-top:0 !important; width:91.91%;"> &nbsp;<b style="color:gray">&bull; &emsp; Rappel sur les fonctions </b></span>
		<ul type="none" style="line-height:1.5">
		
			 <li>					     
				<details>
				  <summary>Quelle &ne; entre <b>print</b> et <b>echo </b>?</summary>
				  &emsp;&#8718; print ne prends qu'un seul argument.<br>
				  &emsp;&#8718; <b>int print ...</b>: print renvoie tjrs 1<br>
				  &emsp;&#8718; echo peut prendre +sieurs args (dans ce cas, pas d'parenthèses !)<br>
				  &emsp;&#8718; <b>void echo ...</b> : echo est plus rapide car il ne renvoie rien<br>
				</details>
			 </li>
			 <li>
				<details>
				  <summary>Comment d&eacute;clare-t-on une fonction PHP ?</summary>
				  &emsp;&#8718; function nomFonction(arguments){ instructions }  <br>
				  &emsp;&#8718; function nomFonction(         ){ instructions }<br>
				</details>
				
			 </li>
			 <li>

				<details>
				  <summary>Site officiel reference des fonction ?</summary>
				  &emsp;<b class="attention" >&#9888;</b> http://fr.php.net/manual/fr/funcref.php
				</details>							 
			 </li>
			 <li>
				<details>
				  <summary>Que font les fonctions <b>strlen()</b>, <b>str_replace()</b>, <b>str_shuffle()</b>, <b>strtolower()</b> ?</summary>
				  &emsp;&#8718;<b>strlen():</b> taille d'une chaîne<br>
				  &emsp;&#8718;<b>str_replace():</b> Remplace toutes les occurrences dans une chaîne<br>
				  &emsp;&#8718;<b>str_shuffle():</b> Mélange les caractères d'une chaîne<br>
				  &emsp;&#8718;<b>strtolower():</b> Renvoie une chaîne en minuscules<br>
				</details>
			 </li>
		</ul>
		<span class="idS subQuestion t-transparent" style="margin-top:0 !important; width:91.91%;"> &nbsp;<b style="color:gray">&bull; &emsp; Rappel sur les tableaux </b></span>
		<ul type="none" style="line-height:1.5">
			 <li>
				<div class="paragraphe petitParagraphe" style="background:white; width:83% !important;"> <!-- ici un dispaly:block s'impose l'elt block à l'intérieur de l'eli inline -->
					Il existe deux types de tableaux :
					<ol>
					   <li>les tableaux num&eacute;rot&eacute;s</li>
					   <li>les tableaux associatifs</li>
					</ol>
				</div>							
		   
				<details>
				  <summary>Donner un exemple en PHP, avec les deux types.</summary>
				  	<div class="exemple">
					   <span class="idS subQuestion t-transparent" style="margin-top:0 !important; width:91.91%; background:white !important;">
						   <pre >
								&lt;?php
                                    <span style="color:green">//Tableau numéroté</span> 								
										$Prenoms=array();
										$Prenoms[0]='Paul';
										$Prenoms[1]='Jean';
										$Prenoms[2]='Jule';
										
									<span style="color:green">//Tableau associatif</span>
                                        $Personne=array();
										$Personne['Nom']="Jacques";
										$Personne['Prenom']="Jean";
										$Personne['Age']=99;									
								?>
							</pre>
					    </span> 
					</div>
				</details>

				<details>
				  <summary>Quelle est la diff&eacute;rence entre les 2 ? </summary>
				  &emsp;&#8718;  &dollar;Prenoms : les indices des éléments sont des nombres<br>
				  &emsp;&#8718; &dollar;Personne : les indices des éléments sont des chaînes de caractères
				</details>
				
				<details>
				  <summary>Comment les parcourir ?(cf. for, foreach, print r).</summary>
				  	<div class="exemple" style="width:99%">
					   <span class="idS subQuestion t-transparent" style="margin-top:0 !important; width:91.91%; background:white !important;">
						   <pre  style="font-size:0.8em;">
								&lt;?php
                                    <span style="color:green">//Tableau numéroté</span> 																		
										$Prenoms = array( "Paul", "Jean", "jule" );
										foreach( $Prenoms as $value )  echo $value.'&lt;br&gt;';										
										
									<span style="color:green">//Tableau associatif</span>
										$personne = array( 'Nom'=>'Jacques', 'Prenom'=>'Jean', 'Age'=>'99' );
										foreach($personne as $value) echo $value.'&lt;br&gt;';									   										
								?>
							</pre>
					    </span> 
					</div>
				</details>
				<details>
				  <summary>Comment rechercher une valeur ? (cf. array key exists, in array, array search)</summary>
				  <!-- <div class="paragraphe" style="padding-left:2px; font-size:0.8em;"> -->
				  <div class="paragraphe petitParagraphe" style="background:white; width:83% !important;"> 
					  &emsp;&#8718; Vérifiez si la colonne "Age" existe dans la table personne:<br>
					  &emsp;&#8718; <b>if (array_key_exists("Age",$personne))</b> echo 'La colonne Age éxiste ';
					  <p></p>
					  &emsp;&#8718; Est-ce qu'il a une personne de 99ans dans la table  personne?<br>
					  &emsp;&#8718; <b>echo array_search("99",$personnes);</b><small style="color:green">//Si oui, ça retourne le nom de la colone(Age)</small>
					  <p></p>
					  &emsp;&#8718; Est-ce que "Paul" il existe dans la table prenom<br>
					  &emsp;&#8718; <b>if (in_array("Paul", $prenoms))</b> echo 'il est bien présent dans cette table'
				  </div>

				</details>
			 
			 </li>
		</ul>
	</div><!-- main-->
</body>
</html>



