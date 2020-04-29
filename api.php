<?php
header('Content-Type: application/json');


if( isset($G_GET["requete"]) && !empty($_GET["requete"]) ){

	if ( $_GET["requete"] == "ALL"){

	echo( file_get_contents("./filieres_groupes.json") );
	}
}

//group variable
$group = array();


//1 étudiant variable
$etu1 =array();

$etu1["nom"]	= "name1";
$etu1["prenom"]	= "prenom1";
$etu1["email"]	= "email1";
$etu1["filiere"]	="LPI";
$etu1["groupe"]	= "LPI-1";
$etu1["telephone"]	="telephone1";
$etu1["photo"]	= "http://...";


//ad student into the group
$group["nom"] = "LPI-1";
$group["etudiants"] = array();

$group["etudiant"] [] = $etu1;

//print_r($group);

$json1 = json_encode( $group );

echo($json1);
?>