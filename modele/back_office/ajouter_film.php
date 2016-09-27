<?php


function ajouter_film($ajouter, $result)
{

    $date = array($_POST['annee'], $_POST['mois'], $_POST['jour']);

    $date = implode('-', $date);

    global $connexion;

    try
    {
        $query = 'INSERT INTO om_film (titre, affiche, resume, acteur, realisateur, date_fin)
        VALUES
        (:titre, :affiche, :resume, :acteur, :realisateur, :date_fin)';
        $q = $connexion->prepare($query);
        $q->bindValue(':titre', $ajouter['titre'], PDO::PARAM_STR);
        $q->bindValue(':affiche', $result, PDO::PARAM_STR);
        $q->bindValue(':resume', $ajouter['resume'], PDO::PARAM_STR);
        $q->bindValue(':acteur', $ajouter['acteur'], PDO::PARAM_STR);
        $q->bindValue(':realisateur', $ajouter['realisateur'], PDO::PARAM_STR);
        $q->bindValue(':date_fin', $date, PDO::PARAM_STR);
        $q->execute();
        return true;
    }
    catch(Exception $e)
    {
        //$e->getMessage();exit;
        return false;
    }
}