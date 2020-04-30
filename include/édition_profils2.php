<?php
 
if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $user['nom']) {
      $newnom = htmlspecialchars($_POST['newnom']);
      $insertnom = $bdd->prepare("UPDATE membres SET nom = ? WHERE id = ?");
      $insertnom->execute(array($newnom, $_SESSION['id']));
      header('Location: édition_profils.php?id='.$_SESSION['id']);
   }
   if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != $user['prenom']) {
      $newprenom = htmlspecialchars($_POST['newprenom']);
      $insertprenom = $bdd->prepare("UPDATE membres SET prenom = ? WHERE id = ?");
      $insertprenom->execute(array($newprenom, $_SESSION['id']));
      header('Location: édition_profils.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: édition_profils.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newtel']) AND !empty($_POST['newtel']) AND $_POST['newtel'] != $user['tel']) {
      $newtel = htmlspecialchars($_POST['newtel']);
      $inserttel = $bdd->prepare("UPDATE membres SET tel = ? WHERE id = ?");
      $inserttel->execute(array($newtel, $_SESSION['id']));
      header('Location: édition_profils.php?id='.$_SESSION['id']);
   }
   if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newadresse']) AND !empty($_POST['newadresse']) AND $_POST['newadresse'] != $user['adresse']) {
      $newadresse = htmlspecialchars($_POST['newadresse']);
      $insertadresse = $bdd->prepare("UPDATE membres SET adresse = ? WHERE id = ?");
      $insertadresse->execute(array($newnom, $_SESSION['id']));
      header('Location: édition_profils.php?id='.$_SESSION['id']);
   }
   if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newfilière']) AND !empty($_POST['newfilière']) AND $_POST['newfilière'] != $user['filière']) {
      $newfilière = htmlspecialchars($_POST['newfilière']);
      $insertadresse = $bdd->prepare("UPDATE membres SET filière = ? WHERE id = ?");
      $insertadresse->execute(array($newfilière, $_SESSION['id']));
      header('Location: édition_profils.php?id='.$_SESSION['id']);
   }
   if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newgroupe']) AND !empty($_POST['newgroupe']) AND $_POST['newgroupe'] != $user['groupe']) {
      $newgroupe = htmlspecialchars($_POST['newgroupe']);
      $insertgroupe = $bdd->prepare("UPDATE membres SET groupe = ? WHERE id = ?");
      $insertgroupe->execute(array($newgroupe, $_SESSION['id']));
      header('Location: édition_profils.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE membres SET motdepasse = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: édition_profils.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mots de passe ne correspondent pas !";
      }
   }
?>
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Edition de mon édition_profils</h2>
         <div align="left">
            <form method="POST" action="" enctype="multipart/form-data">
               <label>Nom :</label>
               <input type="text" name="newnom" placeholder="Nom" value="<?php echo $user['nom']; ?>" /><br /><br />
               <label>Prénom :</label>
               <input type="text" name="newprenom" placeholder="Prenom" value="<?php echo $user['prenom']; ?>" /><br /><br />
               <label>Mail :</label>
               <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>" /><br /><br />
               <label>Telephone :</label>
               <input type="float" name="newtel" placeholder="Tel" value="<?php echo $user['tel']; ?>" /><br /><br />
               <label>Mot de passe :</label>
               <label>Adresse :</label>
               <input type="text" name="newadresse" placeholder="Adresse" value="<?php echo $user['adresse']; ?>" /><br /><br />
               <label>Filière :</label>
               <input type="text" name="newfilière" placeholder="Filière" value="<?php echo $user['filière']; ?>" /><br /><br />
               <label>Groupe :</label>
               <input type="text" name="newgroupe" placeholder="Groupe" value="<?php echo $user['groupe']; ?>" /><br /><br />
               <label>Mail :</label>
               <input type="password" name="newmdp1" placeholder="Mot de passe"/><br /><br />
               <label>Confirmation - mot de passe :</label>
               <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" /><br /><br />
               <input type="submit" value="Mettre à jour mon édition_profils !" />
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>
   </body>
</html>
<?php   
}
else {
   header("Location: connexion.php");
}
?>