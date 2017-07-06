<!DOCTYPE html>
<html lang="fr">
<!--<?php include("en_tete.php"); ?> -->
<body>
  <header>
    <h1 align="center">Application de saisie de notes</h1>     
    <nav id="selection_accès">
        <div class="option_accès">
        <h2 align="center">Page d'accueil administrateur</h2>
        <ul>
        <!--redirection vers ajout_etu-->
        <li align="center"><a href="ajout_etu.php">Ajouter un étudiant</a></li>
        <!--redirection vers suppr_etu-->
        <li align="center"><a href="suppr_etu.php">Supprimer un étudiant</a></li>
        <!--redirection vers modif_etu-->
        <li align="center"><a href="modif_etu.php">Modifier les informations d'un étudiant</a></li>
        <!--redirection vers index-->
        <li align="center"><a href="index.php">Se déconnecter</a></li>
        <!-- Envoi des infos à la BDD -->
                    <?php
                    $login = $_POST['login'];
                    $pass = $_POST['mdp'];
                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=saisie_notes;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                    }
                    catch (Exception $e)
                    {
                        die('Erreur : ' . $e->getMessage());
                    }
                    // Hachage du mot de passe
                    if (isset($_POST['mdp']) AND isset($_POST['login']))
                    {
                      $hash = password_hash($pass,PASSWORD_BCRYPT,['cost' => 13]);
                      echo 'Mot de passe existe';
                    }
                    // Comparaison du mot de passe et du hash
                    if(password_verify($pass, $hash))
                    {
                        echo 'OK';
                    } else {
                        echo 'ERREUR';
                    }
                    // Récupération des 10 derniers étudiants
                    $reponse = $bdd->query('SELECT id, Nom, Prenom, Note FROM étudiant ORDER BY id DESC LIMIT 0, 10');

                    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
                    while ($donnees = $reponse->fetch())
                    {
                        echo '<p><strong>' . htmlspecialchars($donnees['Nom']) . '</strong> : ' . htmlspecialchars($donnees['Prenom']) . '</p>';
                    }
                    $reponse->closeCursor();
                    ?>
          </ul>
        </div>
    </nav>
    <?php include("notes.php"); ?>
</header>
      <!--<?php include("pied_de_page.php"); ?>-->
    </body>
</html>