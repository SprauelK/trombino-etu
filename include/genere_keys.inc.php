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


//récupère les email, les stocks, et donne la key générée graçe à la fonction random et les stock avec les email. Vérifie que la key n'existe pas deja.
/*
function giveKey($email){

	$recup_info = file('./data/liste_email_api.csv');
	$exist_Key="";
	for ()
}
*/
?>