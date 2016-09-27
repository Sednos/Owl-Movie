<?php

function selection_film()
{
    global $connexion;

    try
    {
        $query = $connexion->prepare("SELECT * FROM om_film WHERE idfilm=:idfilm");
        $query->bindParam(':idfilm', $_GET['id'], PDO::PARAM_INT);
        $query->execute();
        $select_film = $query->fetchAll();
        $query->closeCursor();
        return $select_film;
    }
    catch(Exception $e)
    {
        $query->closeCursor();
        return false;
    }
}