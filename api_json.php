<?php

include('./include/genere_api.inc.php');



//$api_key=$_GET['key'];
//if (KeyApi($api_key)) {
    $info= getApi($_GET['filliere'],$_GET['groupe']);
    $jayson= Tabajson($info);
//}
//else{
   // $erreur="Clé incorrecte";
   //$jayson= Tabajason($erreur);
//}

echo $jayson;

?>
