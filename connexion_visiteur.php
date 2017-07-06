<!DOCTYPE html>
<html lang="fr">
<!--<?php include("en_tete.php"); ?> -->
<nav id="inscription">
    <div class="formulaire_inscription">
        <h1>Identification Visiteur</h1>
        <ul>
            <h2>Formulaire d'identification</h2>
            <form method="post" action="accueil_admin.php">
                <fieldset>
                    <legend>Veuillez remplir tous les champs :</legend>
                    Login :<br>
                    <input type="text" name="login">            
                    <br>
                    Mot de passe :<br>
                    <input type="password" name="mdp">
                    <br>
                    <input type="submit" value="S'inscrire">
                    <br>
              </fieldset>
            </form>
        </ul>
    </div>
</nav>
    <!--<?php include("pied_de_page.php"); ?>-->
  </body>
</html>