<?php
header('Content-Type: application/json');

//depuis le site 2
//$filieresJSON = file_get_contents("https://..url_site1..../api/getapi.php?requete=ALL&key=....");
//json_decode puis un "tableau de tableau"

if( isset($G_GET["requete"]) && !empty($_GET["requete"]) ){

	if ( $_GET["requete"] == "ALL"){
		//echo( file_get_contents("./filieres_groupes.json") );
		readfile("./filieres_groupes.json");
	}
}

exit();
//--------------------------------------------------------------------
//group variable
$group = array();


//1 étudiant variable
$etu1 =array();

$etu1["nom"]	= "name1";
$etu1["prenom"]	= "prenom1";
$etu1["email"]	= "email1";
$etu1["filiere"]	="LPI";
$etu1["groupe"]	= "LPI-1";
$etu1["telephone"]	= "telephone1";
$etu1["photo"]	= "http://...";


//ad student into the group
$group["nom"] = "LPI-1";
$group["etudiants"] = array();

$group["etudiant"] [] = $etu1;

//print_r($group);

$json1 = json_encode( $group );

echo($json1);
?>