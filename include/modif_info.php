<?php 
    if ($fichier = fopen('./data/liste_info_etudiants.csv', 'r'))
    {
        $modification = '';
        $remplacement = $_GET['nom'].";".$_GET['prenom'].";".$_GET['email'].";".$_GET['telephone'].";".$_GET['adresse'].";".$_GET['filiere'].";".$_GET['groupe'].;".$_GET['password']).""\n";

        while (($ligne = fgets($fichiercsv)) !== FALSE)
        {
            $DonLine=explode(";", $ligne);
            if ($_GET['email'] == $DonLine[2])
            {
                $modification = $modification . $nouvelle_ligne;
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
        exit(header("Location: ./information.php"));
    }

?>