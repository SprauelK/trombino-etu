<?php
function random($Longueur){

	$liste = 'azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN7894561230';
	$longmax = strlen($liste);
	$chaineAleatoire = '';
	for($i = 0; $i <$longueur; $i++)
	{
		$chaineAleatoire .= $caracteres[rand(0, $longmax - 1)];
	}
	return $chaineAleatoire;
}
?>