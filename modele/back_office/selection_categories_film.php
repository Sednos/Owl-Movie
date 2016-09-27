<?php

function selection_categories_film()
{
    global $connexion;

    try
    {
        $query = $connexion->prepare("SELECT * from categorie_film, categorie_film_has_om_film WHERE cat_id=categorie_film_cat_id AND om_film_idfilm=:om_film_idfilm");
        $query->bindValue(':om_film_idfilm', $_GET['id'], PDO::PARAM_INT);
        $query->execute();
        $select = $query->fetchAll();
        $query->closeCursor();
        return $select;
    }
    catch(Exception $e)
    {
        $query->closeCursor();
        return false;
    }
}