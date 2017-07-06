<!DOCTYPE html>
<html lang="fr">
<!--<?php include("en_tete.php"); ?> -->
<body>
  <header>
    <h1 align="center">Application de saisie de notes</h1>     
    <nav id="selection_accès">
<?php 
try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=saisie_notes;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                    }
                    catch (Exception $e)
                    {
                        die('Erreur : ' . $e->getMessage());
                    }
// Envoi des infos de l'admin dans la BDD
                    $req = $bdd->prepare('INSERT INTO admin(login, mdp) VALUES(:login, :hash)');
                    $req->execute(array(
                    'login' => $login,
                    'hash' => $hash));
                    ?>
                    </header>
      <!--<?php include("pied_de_page.php"); ?>-->
    </body>
</html>