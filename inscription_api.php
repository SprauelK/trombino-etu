<?php 

include('./include/get_api.inc.php');

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

<div class = "meteo-div">
    <br>
        <table align="center">
        <tbody id = "meteo">
            <tr>
                <td width="80%">
                <fieldset class ="login">
                    <legend><h2>Inscription API Key</h2></legend>
                    <div>
                    
                    <form  method="post" action="./include/get_api.inc.php">

                        <p>Email: <br/> <input required  minlength="5" type="float" name="email"/> </p>
                            
                        <input type="submit" name="valider" value="valider"/>

                        <?php

                        if( isset($_POST["email"]) ){

                            $k = getRandomKey( $_POST["email"] );

                                
                        }

                        ?>
                                   
                    </form>
                    <br>
                </div>
                </fieldset>
            </td>
            </tr>
        </tbody>
    </table>