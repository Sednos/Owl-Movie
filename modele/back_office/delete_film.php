<?php
function delete_film()
{
    global $connexion;
    try
    {
        $query= "DELETE FROM om_film WHERE idfilm=:idfilm";
        $q = $connexion->prepare($query);
        $q->bindValue(':idfilm', $_GET["id"], PDO::PARAM_INT);
        $q->execute();
        return true;
    }
    catch (exception $e)
    {
        return false;
    }
}