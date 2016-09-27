<?php

function activation()
{
    global $connexion;
    try {
        $activer = 1;
        $query="UPDATE enseignant SET valid=:valid WHERE cle=:cle";
        $q = $connexion->prepare($query);
        $q->bindParam(':cle', $_GET["cle"], PDO::PARAM_STR);
        $q->bindParam(':valid', $activer, PDO::PARAM_INT);
        $q->execute();

        return true;
    }
    catch (Exception $e)
    {
        return false;
    }
}