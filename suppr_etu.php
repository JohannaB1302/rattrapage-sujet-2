<!DOCTYPE html>
<html lang="fr">
  <!--<?php include("en_tete.php"); ?> -->
   <body>
   <h1>Supprimer des étudiants</h1>
   	<?php function  ajouterJeu($newJeu){}; ?>
   	<nav id="suppression">
    <div class="formulaire_suppression">
        <h1>Suppression d'un étudiant</h1>
        <ul>
            <h2>Formulaire de suppression</h2>
            <form method="post" action="notes.php">
                <fieldset>
                    <legend>Entrez l'identifiant de l'étudiant à supprimer</legend>
                    Identifiant :<br>
                    <input type="number" name="idS">
                    <br>
                    <input type="submit" value="Supprimer">
                    <br>
                </fieldset>
            </form>
        </ul>
    </div>
</nav>
   	<!--<?php include("pied_de_page.php"); ?>-->
  </body>
</html>