<?php
function delete_categorie($delete)
{
    global $connexion;
    try
    {
        $query= "DELETE FROM categorie_film WHERE cat_id=:cat_id";
        $q = $connexion->prepare($query);
        $q->bindValue(':cat_id', $_GET["id"], PDO::PARAM_INT);
        $q->execute();

        return true;

    }
    catch (exception $e)
    {
        return false;
    }
}