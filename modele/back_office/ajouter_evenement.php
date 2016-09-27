<?php
/**
 *
 */
function ajouter_evenement($ajouter, $result)
{
    $date = array($_POST['annee'], $_POST['mois'], $_POST['jour']);

    $date = implode('-', $date);

    global $connexion;

    try
    {
        $query = 'INSERT INTO om_evenement (titre, contenu, date_fin, photo)
        VALUES
        (:titre, :contenu, :date_fin, :photo)';
        $q = $connexion->prepare($query);
        $q->bindValue(':titre', $ajouter['titre'], PDO::PARAM_STR);
        $q->bindValue(':contenu', $ajouter['contenu'], PDO::PARAM_STR);
        $q->bindValue(':date_fin', $date, PDO::PARAM_STR);
        $q->bindValue(':photo', $result, PDO::PARAM_STR);
        $q->execute();
        return true;
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
        return false;
    }
}