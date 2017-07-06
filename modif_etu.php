<!DOCTYPE html>
<html lang="fr">
  <!--<?php include("en_tete.php"); ?> -->
   <body>
   <h1>Modifier les informations des étudiants</h1>
    <?php
    function  ajouterJeu($newJeu){}; ?>
    <nav id="modif">
    <div class="formulaire_modif">
        <h1>Modification des infos d'un étudiant</h1>
        <ul>
            <h2>Formulaire de modification</h2>
            <form method="post" action="notes.php">
              <fieldset>
                      <legend>Entrer l'identifiant de l'étudiant à modifier :</legend>
                      Identifiant :<br>
                      <input type="number" name="idM">
                      <br>
                      <input type="submit" value="Modifier">
                      <br>
              </fieldset>
              </form>
              <form method="post" action="notes.php">
                      <fieldset>
                      <legend>Entrer la nouvelle valeur du champ :</legend>
                      Nom :<br>
                      <input type="text" name="nvnom">
                      <br>Prénom :<br>
                      <input type="text" name="nvprenom">           
                      <br>
                      <br>Note :<br>
                      <input type="number" name="nvnote">
                      <br>
                      <input type="submit" value="Modifier">
                      <br>
                      </fieldset>                          
            </form>
        </ul>
    </div>
</nav>
    <!--<?php include("pied_de_page.php"); ?>-->
  </body>
</html>