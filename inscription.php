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
	$fichier = "utilisateur.csv";
	$lines = file($fichier);

	for($i=0;$i<sizeof($lines);$i++){	
		$line = $lines[$i];
		echo $line.'\n';
		$tab= explode(";",$line);

		if ($tab[0] == $email){
			
			$doesUserExist = TRUE;
			break; //Sortir de la boucle
		}
	}

	if( $doesUserExist == TRUE )
	{
		header('formulaire_inscription.php?erreur=erreurInscription');  
		exit();  
	}

	else {
		$fichier_end = fopen($fichier,"a");
		fwrite($fichier_end,"\n");
		fwrite($fichier_end, $prenom. ";" .$nom. ";" .$email. ";" .$telephone. ";" .$adresse. ";" .$filiere. ";" .$groupe. ";" .$password);
		
		fclose($fichier_end);
		header('Location: ./index.php');
		/*header ('Location: https://http://trombino-etu.alwaysdata.net/index.php/ ') */
		exit();
	}

?>