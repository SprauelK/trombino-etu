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
            <li class="menu1"><a href="formulaire_inscription.php">Inscription</a>
            </li>
            <li class="menu1"><a href="inscription_api.php">Clé API</a>        	
            </li>
        </ul>
    </nav>
</header>

      <!-- -------formulaire d'inscription--------- -->
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
						<p>Nom:  <br/> <input required  minlength="1" type="text" name="nom"/> </p>
						<p>Prénom: <br/> <input required  minlength="1" type="text" name="prenom"/> </p>
						<p>Email: <br/> <input required  minlength="5" type="email" name="email"/> </p>
						<p>Téléphone: <br/> <input required  minlength="9" type="float" name="telephone"/> </p>
						<p>Adresse: <br/> <input required  minlength="4" type="text" name="adresse"/> </p>

						<select name="filiere">
							<option value="L1-MIPI">L1-MIPI</option>
							<option value="L2-MI">L2-MI</option>
							<option value="L3-I">L3-I</option>
							<option value="LPI-RS">LPI-RS</option>
							<option value="LPI-RIWS">LPI-RIWS</option>
						</select>
						<select name="groupe">
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
						</select>


						<p>Mot de passe: <br/> <input required  minlength="8" type="password" name="password"/> </p>
							
						<input type="submit" name="valider" value="valider"/>

							<?php
							/*
								//Hachage du mot de passe
								$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

								//Insertion
								$req = $bdd->prepare('INSERT INTO membres(nom, prenom, email, telephone, adresse, filliaire, groupe, password) VALUES(:nom, :prenom, :email, :telephone, :adresse, :filliaire, :groupe, :password)');
								$req->execute(array(
									'nom' => $nom,
									'prenom' => $prenom,
									'email' => $email,
									'telephone' => $telephone,
									'adresse' => $adresse,
									'filière' => $filière,
									'groupe' => $groupe,
									'password' => $pass_hache,
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
								*/
							?>
						</div>		   
					</form>
					<br>
					<a href="formulaire_connexion.php"><span class="pw-oublie">Vous possedez deja un compte&nbsp;?</span></a>
					</div>
				</fieldset>
			</td>
		</tr>
		</tbody>
	</table>
 </body>
</html>