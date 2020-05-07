<?php
header('Content-Type: application/json');

function getApi($filiere,$groupe){
	$lines = file("./data/liste_info_etudiants.csv");
	$infos["nom"] = $filiere." ".$groupe;
	$infos["etudiant"] = array();
	
	for($i=0;$i<sizeof($lines);$i++){
		$tab = explode(",",$lines[$i]);
		$fiche_etu = array();
		if($tab[5] == $filiere && $tab[6]==$groupe)
		{
			$fiche_etu[$i]["nom"]=$tab[0];
			$fiche_etu[$i]["prenom"]=$tab[1];
			$fiche_etu[$i]["email"]=$tab[2];
			$fiche_etu[$i]["telephone"]=$tab[3];
			$fiche_etu[$i]["adresse"]=$tab[4];
			$fiche_etu[$i]["filiere"]=$tab[5];
			$fiche_etu[$i]["groupe"]=$tab[6];
			
		}
		else{
			continue;
		}
		array_push($infos['etudiant'], $fiche_etu[$i]);
	}
	return $infos;

}

function Encjson($tab){
	return json_encode($tab);
}
	
?>