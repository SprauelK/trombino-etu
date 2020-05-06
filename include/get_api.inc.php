<?php

function getRandomKey(){

	$liste = 'azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN7894561230';
	$longmax = strlen($liste);
	$chaineAleatoire = '';
	for($i = 0; $i <$longmax; $i++)
	{
		$chaineAleatoire .= $liste[rand(0, $longmax - 1)];
	}
	return $chaineAleatoire;
}


function getApiKey( $email ){


$key = getRandomKey();
$existKey = '';


$doesUserExist = FALSE;
	$fichier = "./data/liste_email_api.csv";
	$lines = file($fichier);

	foreach ($lines as $line){
		if(strstr($line,$email)){

			$doesUserExist = TRUE;
			break;
		}
	}

	if( $doesUserExist == TRUE )
	{
	
			return $key;
		
		exit();  
	}

	else {
		$fichier_end = fopen($fichier,"a");
		fwrite($fichier_end,"\n");
		fwrite($fichier_end, $email. ";" .$key );
		
		fclose($fichier_end);
		return $key;
		exit();
	}


}

?>