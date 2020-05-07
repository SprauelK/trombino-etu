<?php

include('./include/genere_api.inc.php');



//$api_key=$_GET['key'];
//if (KeyApi($api_key)) {
    $info= getApi($_GET['filiere'],$_GET['groupe']);
    $json= Encjson($info);
//}
//else{
   // $erreur="Clé incorrecte";
   //$json= Encjson($erreur);
//}

echo $json;

?>
