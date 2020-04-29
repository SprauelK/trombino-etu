SITE1

DOSSIER


images

photos (pas de .htaccess / fichier index.php vide pour eviter d'afficher le dossier)

data (etudiant.csv/ apikeys.csv /json filieres  en dur / .htaccess empecher l'acces au dossier)

data/logs(fichier de logs)

include (fichier php qui contiennent les "fonction" => *.inc.php aucun appel à ces fonctions dedans)

racine (fichier php vont inclure les fichier précédents et qui font le traitement des pages)

index.php // accueil (connexion etudiant /inscription etudiant / inscription clé api)

VUES SITE 1

inscription etudiant
accueil / connexion etudiant = formulaire connexion ? lien inscription ? lien get api key?
affichage une fois connecté 
inscription api + affichage clé
récupération clé api
doc d'api

_________________________________________________________________________________________________________

SITE2

DOSSIER

images

data (données des membres du personnel : equipe.csv .htaccess)

include

racine

VUE SITE 2

inscription membre
accueil / connexion membre
affichage une fois connecté (liste des filières et des groupes)
affichage mosaique d'un groupe (id groupe dans l'url (GET))
 