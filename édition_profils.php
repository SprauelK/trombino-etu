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
    <h2>Edition de mon profil</h2>
    <div align="left">
        <form method="POST">
            <label>Nom :</label>
            <input type="text" name="newnom">
            <label>Prénom :</label>
            <input type="text" name="newprenom">
            <label>Email :</label>
            <input type="text" name="newmail">
            <label>Telephone :</label>
            <input type="text" name="newtel">
            <label>Adresse :</label>
            <input type="text" name="newadresse">
            <label>Filliaire :</label>
            <input type="text" name="newfillière">
            <label>Groupe :</label>
            <input type="text" name="newgroupe">
            <label>Mot de passe :</label>
            <input type="password" name="newmdp1">
            <label>Confirmation du mot de passe :</label>
            <input type="password" name="newmdp2">
            <label>Avatar :</label>
            <input type="file" name="avatar"/><br><br>
            <input type="submit" value="Mettre à jour mon profil" name="newprofil">
        </form>

</body>
</html>