<?php

include 'genere_keys.inc.php';

$email = $_POST["email"];
$key = getRandomKey();


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
	
			echo 'redonne la kley api stocké';
		
		exit();  
	}

	else {
		$fichier_end = fopen($fichier,"a");
		fwrite($fichier_end,"\n");
		fwrite($fichier_end, $email. ";" .$key.);
		
		fclose($fichier_end);
		echo '$key';
		exit();
	}

?>