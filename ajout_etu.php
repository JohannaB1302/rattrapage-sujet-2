<!DOCTYPE html>
<html lang="fr">
  <!--<?php include("en_tete.php"); ?> -->
   <body>
   <h1>Ajouter des étudiants</h1>
   	<?php
   	function  ajouterJeu($newJeu){}; ?>
   	<nav id="ajout">
    <div class="formulaire_ajout">
        <h1>Ajout d'un étudiant</h1>
        <ul>
            <h2>Formulaire d'ajout</h2>
            <form method="post" action="notes.php">
                <fieldset>
                    <legend>Les champs "Nom" et "Prénom" sont obligatoires :</legend>
                    Identifiant :<br>
                    <input type="number" name="idA">
                    <br>
                    Nom :<br>
                    <input type="text" name="nomA">
                    <br>
                    Prénom :<br>
                    <input type="text" name="prenomA">           
                    <br>
                    Note :<br>
                    <input type="number" name="noteA">
                    <br>
                    <input type="submit" value="Ajouter">
                    <br>                    
                </fieldset>
            </form>
        </ul>
    </div>
</nav>
   	<!--<?php include("pied_de_page.php"); ?>-->
  </body>
</html>