<!DOCTYPE html>
<html lang="fr">
<!--<?php include("en_tete.php"); ?> -->
<body>
  <header>
    <h1 align="center">Notes des étudiants</h1>
    <ul>
    <?php
                    $idA = $_POST['idA']; // depuis ajout
                    $idM = $_POST['idM']; // depuis modif
                    $idS = $_POST['idS']; // depuis suppr
                    $nomA = $_POST['nomA']; // depuis ajout
                    $nvnom = $_POST['nvnom']; // depuis modif
                    $prenomA = $_POST['prenomA']; // depuis ajout
                    $nvprenom = $_POST['nvprenom']; // depuis modif
                    $noteA = $_POST['noteA']; // depuis ajout
                    $nvnote = $_POST['nvnote']; // depuis modif
                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=saisie_notes;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                    }
                    catch (Exception $e)
                    {
                        die('Erreur : ' . $e->getMessage());
                    }
                    // Ajout d'un étudiant
                    $reqA = $bdd->prepare('INSERT INTO étudiants(id, Nom, Prenom, note) VALUES(:idA, :nomA, :prenomA, :noteA)');
                    $reqA->execute(array('idA' => $idA, 'nomA' => $nomA, 'prenomA' => $prenomA, 'noteA' => $noteA));
                    echo 'L\'étudiant a bien été ajouté !';

                    // Modif d'un étudiant
                    if (isset($_POST['idM']))
                      {
                        if (isset($_POST['nvnom']))
                      {
                        $reqUN = $bdd->prepare('UPDATE étudiants SET Nom = :nvnom WHERE id = :idM');
                        $reqUN->execute(array('nvnom' => $nvnom));
                      }
                    elseif (isset($_POST['nvprenom']))
                      {
                        $reqUP = $bdd->prepare('UPDATE étudiants SET Nom = :nvprenom WHERE id = :idM');
                        $reqUP->execute(array('nvprenom' => $nvprenom));
                      }
                    else
                      {
                        $reqUNo = $bdd->prepare('UPDATE étudiants SET Nom = :nvnote WHERE id = :idM');
                        $reqUNo->execute(array('nvnote' => $nvnote));
                      } }                    

                    // Suppression d'un étudiant
                    $reqS = $bdd->prepare('DELETE FROM étudiants WHERE idS = :idS');
                    $reqS->execute(array(
                    'idS' => $idS)); ?>
                    </ul>

</header>
      <!--<?php include("pied_de_page.php"); ?>-->
    </body>
</html>
