<?php
function delete_user($delete)
{
    $id = $_GET['id'];
    global $connexion;
    try
    {
        $query= "DELETE FROM owm_user WHERE id=:id";
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