
<?php 

    session_start(); 
   
    //error_reporting(E_ALL & ~E_NOTICE);
    //if(isset($_POST['nom']) && !empty($_POST['nom'])){
	if(isset($_SESSION['nom']) && !empty($_SESSION['nom'])){
	   unset($_SESSION['nom']); 
	   unset($_SESSION['prenom']);
	   unset($_SESSION['motPasse']);
	   session_destroy(); 
    }   
    header('Location:index.php');
   
?>


   
   
