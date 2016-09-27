<?php
function modif_evenement($modif, $result)
{
    global $connexion;

    $date = array($_POST['annee'], $_POST['mois'], $_POST['jour']);

    $date = implode('-', $date);

    try
    {
        $q = $connexion->prepare('UPDATE om_evenement SET titre=:titre, contenu=:contenu, date_fin=:date_fin, photo=:photo WHERE id=:id');
        $q->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        $q->bindValue(':photo', $result, PDO::PARAM_STR);
        $q->bindParam(':titre', $modif['titre'], PDO::PARAM_STR);
        $q->bindParam(':contenu', $modif['contenu'], PDO::PARAM_STR);
        $q->bindParam(':date_fin', $date, PDO::PARAM_STR);
        $q->execute();
        return true;
    }
    catch(Exception $e)
    {
        return false;
    }
}