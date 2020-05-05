<?php

	//recuperation des paramètres email et mot de passe
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$email = $_POST["email"];
	$telephone = $_POST["telephone"];
	$adresse = $_POST["adresse"];
	$filiere = $_POST["filiere"];
	$groupe = $_POST["groupe"];
	$password = $_POST["password"];
	

	$doesUserExist = FALSE;
	$fichier = "./data/liste_info_etudiants.csv";
	$lines = file($fichier);

	foreach ($lines as $line){
		if(strstr($line,$email)){

			$doesUserExist = TRUE;
			break;
		}
	}

	if( $doesUserExist == TRUE )
	{
	
			echo '<p>l email existe deja, veuillez <a href="index.php">vous connectez</a></p>';
		
		exit();  
	}

	else {
		$fichier_end = fopen($fichier,"a");
		fwrite($fichier_end,"\n");
		fwrite($fichier_end, $nom. ";" .$prenom. ";" .$email. ";" .$telephone. ";" .$adresse. ";" .$filiere. ";" .$groupe. ";" .$password);
		
		fclose($fichier_end);
		header('Location: ./index.php');
		exit();
	}

?>