<?php
function ajouter_categories($ajouter)
{
    global $connexion;

    $id = $_GET['id'];

    try
    {
        $query = 'INSERT INTO categorie_film_has_om_film (categorie_film_cat_id, om_film_idfilm)
        VALUES
        (:categorie_film_cat_id, :om_film_idfilm)';
        $q = $connexion->prepare($query);
        $q->bindValue(':om_film_idfilm', $id, PDO::PARAM_STR);
        $q->bindValue(':categorie_film_cat_id', $ajouter['cat_id'], PDO::PARAM_STR);
        $q->execute();
        return true;
    }
    catch(Exception $e)
    {
        return false;
    }
}