<?php
function delete_evenement()
{
    global $connexion;
    try
    {
        $query= "DELETE FROM om_evenement WHERE id=:id";
        $q = $connexion->prepare($query);
        $q->bindValue(':id', $_GET["id"], PDO::PARAM_INT);
        $q->execute();
        return true;
    }
    catch (exception $e)
    {
        return false;
    }
}