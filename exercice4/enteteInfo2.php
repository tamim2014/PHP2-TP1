<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>

	<link rel="shortcut icon" href="../favicon.ico"  />
	<style>
	
	/***************** zoning *******************************/
	      body{  
				margin:0;
				background:#ECECEA;
		  }
		  .barreLeterale {
			  height: 100%;
			  width: 200px;	
			  position: fixed;
			  z-index: 1;
			  top: 0;
			  left: 0;
			  background-color:#111; 
			  overflow-x: hidden;
			  padding-top: 20px;
		  }
		  .main {
			  margin-left: 200px; 
			  padding:5% 10%;
		  }

			h4, .contenu, footer {
			  background-color:white;
		  }
		  
    /****** Margr intérieur des blocs *******************/
			 h4, .contenu {
				border:1px dashed #8c8b8b;
				border-radius:6px;
				padding:2% 22% ; 
			 }

			 footer{
				margin-top:1em;
				padding:2% 22% ;  
				text-align:left; 	
				border:1px dashed #8c8b8b;
				border-radius:6px;
			 }
 
	
	
	/************** Contenu ***********************/
		table.info2{
			margin-top:1.5em;
			display:inline-block;
			border-top: 1px solid #aaa;
			border-right:1px solid #aaa;
            background:#f1f1f1;	
			
            width:auto;
			margin:0;
            padding:0;
            dispaly:inline !important;
            box-shadow:none;
           		
		}
		
		table.info2 tr{
			
			background:white;		
		}
		
		table.info2 tr td{
		    width:auto;   
		    margin:5px 5px  10px 5px !important;
		    border:2px solid gray;
		    background-image: linear-gradient(180deg, #fff, #ddd 90%, #ccc) !important;
		    border-bottom: 0; 
		    border-right: 0;
		    float: right;
		    padding: 2px 10px; 
		    border-radius: 5px;
		}
		
		.msgDeconnexion{
			
            width:auto;			
			margin:0.5em;
            float:left; 						
			background:white;		 
			color:#990066; 
			font-size:1.4em;
			box-shadow:0.2px 2px 16px 0px #8c8b8b;
            border:none ;	
			
			
		}

	</style>
</head>

<body>
		<div class="barreLeterale">

		</div>
		<div class="main">

			<div id="en-tete" > 
				<?php
				setlocale(LC_TIME, 'fra_fra');			 
				echo strftime('%A %d %B %Y, %Hh:%M')."<br/>"; // samedi 04 avril 2020, 23:43 
				?>
				<h4 >Travaux pratiques en PHP - 2ème semestre </h4>			
			</div>
		