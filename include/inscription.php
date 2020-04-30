<?php

	//recuperation des paramètres login et mot de passe
	$login = $_POST["login"];
	$password = $_POST["password"];
	

	$doesUserExist = FALSE;
	$fichier = "utilisateur.csv";
	$lines = file($fichier);

	for($i=0;$i<sizeof($lines);$i++){	
		$line = $lines[$i];
		echo $line.'\n';
		$tab= explode(";",$line);

		if ($tab[0] == $login){
			
			$doesUserExist = TRUE;
			break; //Sortir de la boucle
		}
	}

	if( $doesUserExist == TRUE )
	{
		header('forminscription.php?erreur=erreurInscription');  
		exit();  
	}

	else {
		$fichier_end = fopen($fichier,"a");
		fwrite($fichier_end,"\n");
		fwrite($fichier_end, $login.";" .$password);
		
		fclose($fichier_end);
		header('Location: ./index.php');
		/*header ('Location: https://http://trombino-etu.alwaysdata.net/index.php/ ') */
		exit();
	}

?>