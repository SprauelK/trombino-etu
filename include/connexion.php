<?php

	//recuperation des paramètres login et mot de passe
	$login = $_POST["login"];
	$password = $_POST["password"];

	$doesUserExist = FALSE;
	$fichier = "utilisateur.csv";
	$lines = file($fichier);
	
	for($i=0;$i<sizeof($lines);$i++){
			
		$line = $lines[$i];
		$tab= explode(";",$line);
		if ($tab[1]== $password and $tab[0]==$login){
			$doesUserExist = TRUE;
			break;
		}
	}

	if( $doesUserExist == TRUE )
	{      
	  header('Location: ./index.php');
	  exit();
	}
	else{
		header('formconnexion.php?erreur=connexionErreur');  
		
		exit();  
	}
?>