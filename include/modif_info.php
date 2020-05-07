<?php 
function modifinfo($nom, $prenom, $email, $telephone, $adresse, $filiere, $groupe, $password){
    $fichier = fopen('./data/liste_info_etudiants.csv', 'r');

    if (isset($fichier))
    {
        $modification = '';
        $remplacement = $nom.";".$prenom.";".$email.";".$telephone.";".$adresse.";".$filiere.";".$groupe.";".$password."\n";

        while (($ligne = fgets($fichier)) !== FALSE)
        {
            $line=explode(";", $ligne);
            if ($_GET['email'] == $line[2])
            {
                $modification = $modification . $remplacement;
            }
            else 
            {
                $modification = $modification . $ligne;
            }
        }
        fclose($fichier);
        $Fecriture = fopen('./data/liste_info_etudiants.csv', 'w');
        fputs($Fecriture, $modification);
        fclose($Fecriture);
        exit(header("Location: ./info_etudiant.php"));
    }
}


?>