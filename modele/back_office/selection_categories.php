<?php

function selection_categorie()
{
    global $connexion;

    try
    {
        $query = $connexion->prepare("SELECT * from categorie_film ORDER BY cat_descr");
        $query->execute();
        $select_categories = $query->fetchAll();
        $query->closeCursor();
        return $select_categories;
    }
    catch(Exception $e)
    {
        $query->closeCursor();
        return false;
    }
}