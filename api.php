<?php
header('Content-Type: application/json');

$filieresJSON = file_get_contents("https://http://trombino-etu.alwaysdata.net/api/getapi.php?requete=ALL&key=");

function getinfo($filliere,$groupe){
	$lines = file("./data/liste_info_etudiants.csv");
	$infos["nom"]=$filliere." ".$groupe;
	$infos["etudiant"]=array();
	
	for($i=0;$i<sizeof($lines);$i++){
		$tab= explode(",",$lines[$i]);
		$fiche_etu=array();
		if($tab[3]==$filliere && $tab[4]==$groupe)
		{
			$fiche_etu[$i]["nom"]=$tab[0];
			$fiche_etu[$i]["prenom"]=$tab[1];
			$fiche_etu[$i]["email"]=$tab[2];
			$fiche_etu[$i]["filliere"]=$tab[3];
			$fiche_etu[$i]["groupe"]=$tab[4];
			$fiche_etu[$i]["telephone"]=$tab[5];
			
		}
		else{
			continue;
		}
		array_push($infos['etudiant'], $fiche_etu[$i]);
	}
	return $infos;

}

function getJson($tableau){
	return json_encode($tableau);
}

function verifyKey($key){
	$lines_api = file("./data/liste_info_etudiants.csv");
	$found=FALSE;
	for ($i=0; $i < sizeof($lines_api) ; $i++) { 
		$line=explode(",", $lines_api[$i]);
		if ($key==$line[1]) {
			$found=TRUE;
			}
		}
		return $found;
}

$keyKey=$_GET['key'];
if (verifyKey($keyKey)) {
	$fiche_all=getApi($_GET['filliere'],$_GET['groupe']);
	$jayson=getJson($fiche_all);
}
else{
	$erreur="Clé Incorrecte";
	$jayson=getJson($erreur);
}

echo $jayson;







//---------exemple du prof-----------------
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