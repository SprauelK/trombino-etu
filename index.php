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
    <h1>Trombino-étu |</h1>
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

<div style="margin-top: 30px">
	<h3 style="color:#323C49">
		Trombétu propose aux étudiants de mettre à jour leurs informations personnelles afin d'aider l'administration de la faculté à trouver les étudiants et leurs informations scolaires.
	</h3>
	<h3 style="color:#323C49">
		Vous pouvez vous connecter ci-dessous ou vous <a href="formulaire_inscription.php">inscrire ici</a> si vous n'avez pas encore de compte.
	</h3>
</div>
	

      <!-- -------formulaire de connexion--------- -->

	<div class = "meteo-div">
	<br>
		<table align="center">
		<tbody id = "meteo">
			<tr>
				<td width="80%">
				<fieldset class ="login">
					<legend><h2>Connexion</h2></legend> 
					<div>
					
					<form  method="post" action="connexion.php">

						<p>Email: <br/> <input required  minlength="5" type="float" name="email"/> </p>
						<p>Mot de passe: <br/> <input required  minlength="8" type="password" name="password"/> </p>
							
						<input type="submit" name="valider" value="valider"/>
								   
					</form>
					<br>
				<p>Pas encore de compte ? : </p><a href="formulaire_inscription.php"><span class="pw-oublie"> Inscrivez-vous ici</span></a>
				</div>
				</fieldset>
			</td>
			</tr>
		</tbody>
	</table>
	</body>
</html>