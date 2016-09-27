<?php
function modif_film($modif, $result)
{
    global $connexion;

    $date = array($_POST['annee'], $_POST['mois'], $_POST['jour']);

    $date = implode('-', $date);

    try
    {
        $q = $connexion->prepare('UPDATE om_film SET titre=:titre, resume=:resume, acteur=:acteur, realisateur=:realisateur, affiche=:affiche, date_fin=:date_fin WHERE idfilm=:idfilm');
        $q->bindParam(':idfilm', $_GET['id'], PDO::PARAM_INT);
        $q->bindParam(':titre', $modif['titre'], PDO::PARAM_STR);
        $q->bindParam(':resume', $modif['resume'], PDO::PARAM_STR);
        $q->bindParam(':acteur', $modif['acteur'], PDO::PARAM_STR);
        $q->bindParam(':affiche', $result, PDO::PARAM_STR);
        $q->bindParam(':realisateur', $modif['realisateur'], PDO::PARAM_STR);
        $q->bindParam(':date_fin', $date, PDO::PARAM_STR);
        $q->execute();
        return true;
    }
    catch(Exception $e)
    {
        return false;
    }
}