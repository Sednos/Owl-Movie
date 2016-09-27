<?php

function selection_film()
{
    global $connexion;

    try
    {
            $query = $connexion->prepare("SELECT * FROM om_film ORDER BY date_debut desc LIMIT 4");
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