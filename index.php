<!DOCTYPE html>
<html lang="fr">
<!--<?php include("en_tete.php"); ?> -->
<!-- Voir sur http://fr.php.net/manual/fr/funcref.php la bibliothèque des fonctions php -->
<body>
  <header>
    <h1 align="center">Application de saisie de notes</h1>  
    <p align="center">En tant que visiteur, vous pouvez seulement visualiser les notes des étudiants sans les modifier. <br>
    En tant qu'administrateur, vous pouvez ajouter, supprimer et modifier des informations sur les étudiants. <br>
    Pour devenir administrateur, il suffit de vous connecter ! </p> 
    <nav id="selection_accès">
        <div class="option_accès">
        <h2 align="center">Page de connexion visiteur</h2>
        <ul>
        <!--redirection vers notes-->
        <li align="center"><a href="notes.php">Voir les notes des étudiants</a></li>
        <!--redirection vers connexion_visiteur-->
        <li align="center"><a href="connexion_visiteur.php">Se connecter</a></li>
          </ul>
        </div>
    </nav>
</header>
      <!--<?php include("pied_de_page.php"); ?>-->
    </body>
</html>
