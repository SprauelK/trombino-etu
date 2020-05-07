<?php 
session_start();

include('./include/modif_info.php');

?>

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
<?php

echo "Bonjour, ";
echo $_SESSION["login"];
echo "!";

?>
</header>

<div class = "meteo-div">
	<br>
	<table align="center">
		<tbody id = "meteo">
		<tr>			
			<td width="80%">
				<fieldset class ="login">
					<legend><h2>Modifier vos Informations personelles </h2> </legend> 
					<div>
					
					<form  method="post" action="info_etudiant.php">
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

						<input type="file" name="fichier" size="30">
						<input type="submit" name="upload" value="Télécharger">

						<input type="hidden" name="formtype" value="modification" />
							
						<input type="submit" name="valider" value="valider"/>

						<?php

						$call = modifinfo($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['adresse'], $_POST['filiere'], $_POST['groupe'], $_POST['password']);

                        
						if(isset($_POST["formtype"])){

							echo $call;
						}
                                
                        
                        ?>
						
						</div>		   
					</form>
					<br>
					</div>
				</fieldset>
			</td>
		</tr>
		</tbody>
	</table>
</div>

<
</body>
</html>


		
