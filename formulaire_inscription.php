<!DOCTYPE html>
<html lang="fr">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Trombétu</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="image\favicon\pronote.png" />
    
</head>
<body>
<header>
    <div class="logo1">
    <img src="image\logo\logotrombino.png" height="57" width="57" alt=""/>
    </div>
    <h1 class="title">Trombino-étu |</h1>
    <nav>
  <a href="index.php" id="logo"></a>
        <ul>
            <li class="menu1"><a href="index.php">Accueil</a>
            </li>
            <li class="menu1"><a href="formulaire_connexion.php">Connexion</a>
            </li>
            <li class="menu1"><a href="formulaire_inscription.php">Inscription</a>
            </li>
        </ul>
    </nav>
</header>
	<div class = "meteo-div">
	<br>
	<table align="center">
		<tbody id = "meteo">
		<tr>			
			<td width="80%">
				<fieldset class ="login">
					<legend><h2>Inscription</h2> </legend> 
					<div>
					
					<form  method="post" action="inscription.php">
						<p>Nom:  <br/> <input required  minlength="5" type="text" name="nom"/> </p>
						<p>Prénom: <br/> <input required  minlength="8" type="text" name="prenom"/> </p>
						<p>Email: <br/> <input required  minlength="8" type="email" name="email"/> </p>
						<p>Téléphone: <br/> <input required  minlength="10" type="float" name="telephone"/> </p>
						<p>Adresse: <br/> <input required  minlength="8" type="text" name="adresse"/> </p>
						<p>Filière: <br/> <input required  minlength="8" type="text" name="filière"/> </p>
						<p>Groupe: <br/> <input required  minlength="8" type="text" name="groupe"/> </p>
						<p>Mot de passe: <br/> <input required  minlength="8" type="password" name="password"/> </p>
							
						<input type="submit" name="valider" value="valider"/>
						<div class = "erreur-connexion">
							<?php
								$matchFound = (isset($_GET["erreur"]) && trim($_GET["erreur"]) == 'erreurInscription');
								if($matchFound){
									echo '<p>Login existe, veuillez vous connectez.</p>';
								}
							
							?>

							<?php
								//Hachage du mot de passe
								$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

								//Insertion
								$req = $bdd->prepare('INSERT INTO membres(nom, prenom, email, telephone, adresse, filliaire, groupe, pass) VALUES(:nom, :prenom, :email, :telephone, :adresse, :filliaire, :groupe, :pass)');
								$req->execute(array(
									'nom' => $nom,
									'prenom' => $prenom,
									'telephone' => $telephone,
									'adresse' => $adresse,
									'filière' => $filière,
									'groupe' => $groupe,
									'pass' => $pass_hache,
									'email' => $email));

								//  Récupération de l'utilisateur et de son pass hashé
								$req = $bdd->prepare('SELECT id, pass FROM membres WHERE email = :email');
								$req->execute(array(
									'email' => $email));
								$resultat = $req->fetch();

								// Comparaison du pass envoyé via le formulaire avec le csv
								$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

								if (!$resultat)
								{
									echo 'Mauvais identifiant ou mot de passe !';
								}
								else
								{
									if ($isPasswordCorrect) {
								        session_start();
								        $_SESSION['id'] = $resultat['id'];
								        $_SESSION['email'] = $email;
								        echo 'Vous êtes connecté !';
								}
								else {
									echo 'Mauvais email ou mot de passe !';
								}

							?>
						</div>		   
					</form>
					<br>
					<a href="formulaire_connexion.php"><span class="pw-oublie">Vous possedez un compte&nbsp;?</span></a>
					</div>
				</fieldset>
			</td>
		</tr>
		</tbody>
	</table>
 </body>
</html>