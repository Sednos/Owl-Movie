<?php
function delete_film_cat()
{
    global $connexion;
    try
    {
        $query= "DELETE FROM categorie_film_has_om_film WHERE om_film_idfilm=:om_film_idfilm";
        $q = $connexion->prepare($query);
        $q->bindValue(':om_film_idfilm', $_GET["id"], PDO::PARAM_INT);
        $q->execute();
        return true;
    }
    catch (exception $e)
    {
        return false;
    }
}