<?php

function selection_film()
{
    global $connexion;

    try
    {
        if(isset($_POST['recherche']))
        {
            $recherche = htmlspecialchars($_POST['recherche']);
            $query = $connexion->prepare("SELECT * from om_film WHERE titre LIKE '%" . $recherche . "%' ORDER BY date_debut");
        }
        else if(!isset($_POST['recherche']) && !isset($_GET['id']))
        {
            $query = $connexion->prepare("SELECT * from om_film ORDER BY date_debut");
        }
        else if(isset($_GET['id']))
        {
            $query = $connexion->prepare("SELECT * from om_film WHERE idfilm=:idfilm ORDER BY date_debut");
            $query->bindValue(':idfilm', $_GET['id'], PDO::PARAM_STR);
        }
            $query->execute();
            $select_films = $query->fetchAll();
            $query->closeCursor();
            return $select_films;
    }
    catch(Exception $e)
    {
        $query->closeCursor();
        return false;
    }
}