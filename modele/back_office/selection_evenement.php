<?php

function selection_evenement()
{
    global $connexion;

    try
    {
        if(isset($_POST['recherche']))
        {
            $recherche = htmlspecialchars($_POST['recherche']);
            $query = $connexion->prepare("SELECT * from om_evenement WHERE titre LIKE '%" . $recherche . "%' ORDER BY titre");
        }
        else if(!isset($_POST['recherche']) && !isset($_GET['id']))
        {
            $query = $connexion->prepare("SELECT * from om_evenement ORDER BY titre");
        }
        else if(isset($_GET['id']))
        {
            $query = $connexion->prepare("SELECT * from om_evenement WHERE id=:id ORDER BY titre");
            $query->bindValue(':id', $_GET['id'], PDO::PARAM_STR);
        }
        $query->execute();
        $select_evenements = $query->fetchAll();
        $query->closeCursor();
        return $select_evenements;
    }
    catch(Exception $e)
    {
        $query->closeCursor();
        return false;
    }
}