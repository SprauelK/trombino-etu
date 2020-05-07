<?php
session_start();

	$email = $_POST["email"];
	$password = $_POST["password"];


	$doesUserExist = FALSE;
	$fichier = "./data/liste_info_etudiants.csv";
	$lines = file($fichier);
	
	foreach ($lines as $line){
		if(strstr($line,$email,$password)){

			$doesUserExist = TRUE;
			break;
		}
	}

	if( $doesUserExist == FALSE )
	{
	
			echo '<p>Email ou Mot de passe incorrect veuillez  <a href="index.php">réessayer</a>. </p>';
		
		exit();  
	}

	else{

		$_SESSION["login"] = $_POST['email'];


		header("Location: ./info_etudiant.php");


	}
?>